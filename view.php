<?php
/*======================================================================*\
|| #################################################################### ||
|| # Best 9Gag Clone Script 5.0.0                                       ||
|| # ---------------------------------------------------------------- # ||
|| # Copyright 2012-2013 PHPism Inc. All Rights Reserved.               ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # --------- Best 9Gag Clone Script IS NOT FREE SOFTWARE ---------- # ||
|| # ---- http://www.phpism.com | http://www.phpism.com/eula.php ---- # ||
|| #################################################################### ||
\*======================================================================*/

include("include/include.php");

function getPageUrl(){
     static $pageURL = '';
     if(empty($pageURL)){
          $pageURL = 'http';
          if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')$pageURL .= 's';
          $pageURL .= '://';
          if($_SERVER['SERVER_PORT'] != '80')$pageURL .= $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
          else $pageURL .= $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
     }
     return $pageURL;
}

//lay link url
if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
    $pro = 'https';
} else {
    $pro = 'http';
}
$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
$current_url =  $pro."://".$_SERVER['SERVER_NAME'].$port.$_SERVER['REQUEST_URI'];

//var_dump($current_url);
if (is_numeric($_REQUEST['pid']))
{
	$pid = $_REQUEST['pid'];
	STemplate::assign('pid',$pid);
}
else{$error = $errors['17'];}
//lay ra youtube_key
$queryyoutube_key = "SELECT A.* FROM posts A  WHERE  A.PID = '".mysql_real_escape_string($pid)."'";
$executeyoutube_key = $conn->execute($queryyoutube_key);
$youtube_key_arr = $executeyoutube_key->getarray();

$youtube_key = $youtube_key_arr[0]['youtube_key'];
STemplate::assign('youtube_key',$youtube_key);
if ($error == "")
{
	if (does_post_exist($pid))
	{		
		$query = "SELECT A.*, B.username, B.profilepicture FROM posts A, members B WHERE A.PID='".mysql_real_escape_string($pid)."' AND A.USERID=B.USERID";
       	$executequery = $conn->execute($query);
       	$parray = $executequery->getarray();
		$pos = strrpos($parray[0]['pic'],".");
		
		$parray[0]['title'] = title_emotion_detector_detail($parray[0]['story']);
		//STemplate::assign('title',$title);
		
		$ph = strtolower(substr($parray[0]['pic'],$pos+1,strlen($parray[0]['pic'])-$pos));
		if($ph == "gif"){$parray[0]['gif'] = 1;}
		else{$parray[0]['gif'] = 0;}
		$CID = $parray[0]['CID'];
		$queryc = "SELECT A.cname,B.PID FROM channels A, posts B WHERE A.CID='".$CID."' limit 1";
		$executequeryc = $conn->execute($queryc);
		$c =  $executequeryc->getarray();
		$cname = $c[0]['cname'];
		STemplate::assign('cname',$cname);
		STemplate::assign('p',$parray[0]);	
		$active = intval($parray[0]['active']);
		$videourl = trim($parray[0]['url']);
		$USERID = $parray[0]['USERID'];
		STemplate::assign('USERID',$USERID);
		$SID = $_SESSION['USERID'];
		if($SID != "" && $USERID != "")
		{
			if($SID == $USERID)
			{
				$owner = "1";
				STemplate::assign('owner', 1);
			}
		}
		if($active == "1" || $owner == "1")
		{
			STemplate::assign('pagetitle',stripslashes($parray[0]['story']));
			$PID = $parray[0]['PID'];
			STemplate::assign('PID',$PID);
			update_last_viewed($PID);
			update_your_viewed($USERID);
            update_post_viewed($PID);
			if (session_verification()){update_you_viewed($SID);}	
			$url = getPageUrl();
			$pos = strrpos($url,"new");
			if($pos > 0){STemplate::assign('new',1);}
			
			if ( $config['recommended'] > 0)
			{
				if($config['recommended'] == 1){$queryr = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY rand() desc limit 6";}
				elseif($config['recommended'] == 2){$queryr = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY rand() desc limit 5";}
				$executequeryr = $conn->execute($queryr);
				$r =  $executequeryr->getarray();
				STemplate::assign('r',$r);
			}
			
			if ( $config['populargags'] > 0)
			{
				$ctime = 24 * 60 * 60;
				if ($config['populargags'] == 2){$ctime = $ctime * 7;}
				if ($config['populargags'] == 3){$ctime = $ctime * 30;}
				$utime = time() - $ctime;
				$querypopular1 = "SELECT count(*) as total FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' AND time_added>='$utime' ORDER BY rand() desc limit 18";
				$executequerypopular1 = $conn->execute($querypopular1);
				$totalpopular = $executequerypopular1->fields['total'];
				if ($totalpopular > 0)
				{
					$querypopular2 = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' AND time_added>='$utime' ORDER BY rand() desc limit 18";
					$executequerypopular2 = $conn->execute($querypopular2);
					$popular =  $executequerypopular2->getarray();
					STemplate::assign('popular',$popular);
					$pcount = count($popular);
					$boxindexmax = ceil($pcount/3)-1;
					STemplate::assign('boxindexmax',$boxindexmax);
				}
			}
			if($SID == "" || $_SESSION['FILTER'] == "1"){STemplate::assign('nsfw_hide',1);}
			$query="SELECT PID, story FROM posts WHERE PID!='".mysql_real_escape_string($pid)."' AND PID>'".mysql_real_escape_string($pid)."' AND active='1' order by PID asc limit 1";
        	$executequery=$conn->execute($query);
        	$next = $executequery->fields['PID'];
			$nextstory = $executequery->fields['story'];
			STemplate::assign('next',$next);
			STemplate::assign('nextstory',$nextstory);
			$query="SELECT PID, story FROM posts WHERE PID!='".mysql_real_escape_string($pid)."' AND PID<'".mysql_real_escape_string($pid)."' AND active='1' order by PID desc limit 1";
        	$executequery=$conn->execute($query);
        	$prev = $executequery->fields['PID'];
			$prevstory = $executequery->fields['story'];
			STemplate::assign('prev',$prev);
			STemplate::assign('prevstory',$prevstory);
			
		}
		else
		{
			$error = $errors['19'];
		}
	}	
	else
	{
		$error = $errors['18'];
	}
}
if ($error == ""){$template = "view.tpl";}
else{$template = "empty.tpl";}

if ($config['channels'] == 1)
{
	$cats = loadallchannels();
	$c = loadtopchannels($cats);
	$date_month = date("d/m");
	STemplate::assign('date_month',$date_month);
	STemplate::assign('allchannels',$cats);
	STemplate::assign('c',$c);
}

if ( $config['recommended'] > 0)
			{
				$binhbua = load_fav_channel(12,2,$pid);
				STemplate::assign('binhbua',$binhbua);
                //ban muon xem
                    $want_views = want_views(8,5,$pid);
                    STemplate::assign('want_views',$want_views);
				
				$hoibua = load_fav_channel(19,2,$pid);
				STemplate::assign('hoibua',$hoibua);

                //list các bản ghi lien quan mới nhất
                if($youtube_key){
                $queryRelated = "SELECT A.*, B.username FROM posts A, members B WHERE A.CID ='".$CID."' AND A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key!='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY time_added desc limit 10";
                }
                else{
                 $queryRelated = "SELECT A.*, B.username FROM posts A, members B WHERE A.CID ='".$CID."' AND A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key='' ORDER BY time_added desc limit 10";
                }
				$queryvideo = "SELECT A.*, B.username FROM posts A, members B WHERE A.time_added<='".time()."' AND A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key!='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY time_added desc limit 12";
				$executequeryvideo = $conn->execute($queryvideo);
				$video =  $executequeryvideo->getarray();
				STemplate::assign('video',$video);

                $executequeryRelated = $conn->execute($queryRelated);
                $newsrelated =  $executequeryRelated->getarray();
                $video = title_emotion_detector($video);
                STemplate::assign('newsrelated',$newsrelated);
                STemplate::assign('video',$video);

				$queryuser = "SELECT * FROM members WHERE verified='1' AND username!='' ORDER BY posts desc limit 10";
				$executequeryuser = $conn->Execute($queryuser);
				$users = $executequeryuser->getrows();
				//$ranks = ($currentpage - 1) * $config['items_per_page'];
				$ucount = count($users);
				for($i = 0; $i < $ucount; $i++){$users[$i]['rank'] = $i + 1 + $ranks;}
				STemplate::assign('users',$users);
			}
//link sopcast
$datesopcast= $contents['created'];

$nowtime = date( 'Y-m-d',time());


if($datesopcast< $nowtime){
    $querysopcast = "select C.title, C.introtext, C.created,C.result from www_content C WHERE state=1 AND created <'$nowtime' ORDER BY created desc limit 1";
}
else{
    $querysopcast = "select C.title, C.introtext, C.created,C.result from www_content C WHERE state=1 AND created ='$nowtime' ORDER BY created desc limit 1";
}
$executequerysopcast = $conn->Execute($querysopcast);
$sopcast = $executequerysopcast->getrows();
STemplate::assign('sopcast',$sopcast);


$_SESSION['location'] = $config[postfolder].$pid;

//TEMPLATES BEGIN
STemplate::assign('viewpage',1);
STemplate::assign('error',$error);
STemplate::display('header.tpl');
STemplate::display($template);
STemplate::display('footer.tpl');
//TEMPLATES END
?>