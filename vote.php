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

$voteforvisitor = $config['voteforvisitor'];
$SID = intval($_SESSION['USERID']);
$view = $_REQUEST['view'];
$sview = $_SESSION['viewtype'];
$page = intval($_REQUEST['page']);

if($view != ""){$_SESSION['viewtype'] = $_REQUEST['view'];}
elseif($sview == "" && $view == ""){$_SESSION['viewtype'] = "list";}

if($page==""){$page = "1";}
$currentpage = $page;
if ($page >=2){$pagingstart = ($page-1)*$config['items_per_page'];}
else{$pagingstart = "0";}

if($SID > 0 || $voteforvisitor == 1)
{
	$query1 = "SELECT count(*) as total from posts A, members B, channels C where A.active='1' AND A.USERID=B.USERID AND A.phase='0' order by A.PID desc limit $config[maximum_results]";
	$query2 = "SELECT A.*, B.username, C.cname from posts A, members B, channels C where A.active='1' AND A.USERID=B.USERID AND A.CID=C.CID AND A.phase='0' order by A.PID desc limit $pagingstart, $config[items_per_page]";
	$executequery1 = $conn->Execute($query1);
	$totalposts = $executequery1->fields['total'];
	if ($totalposts > 0)
	{
		$executequery2 = $conn->Execute($query2);
		$posts = $executequery2->getrows();
		$posts = gif_detector($posts);
		//Change the emotion of title
		$posts = title_emotion_detector($posts);
		STemplate::assign('posts',$posts);
		$theprevpage=$currentpage-1;
		$thenextpage=$currentpage+1;
		if($currentpage > 1){STemplate::assign('tpp',$theprevpage);}
		$currentposts = $currentpage * $config['items_per_page'];
		if($totalposts > $currentposts){STemplate::assign('tnp',$thenextpage);}
	}
	if ($_SESSION['viewtype'] == "list")
	{$template = "vote.tpl";}
	else{$template = "tvote.tpl";}
}
else
{
	$template = "vote2.tpl";
}
	
if ($config['topgags'] > 0)
{
	$topgags = load_topgags();
	STemplate::assign('topgags',$topgags);
}	

if ($config['rhome'] == 1)
{
	$rhome = load_rhome();
	STemplate::assign('rhome',$rhome);
}

if ($config['channels'] == 1)
{
$cats = loadallchannels();
$date_month = date("d/m");
STemplate::assign('date_month',$date_month);
STemplate::assign('allchannels',$cats);

$c = loadtopchannels($cats);
STemplate::assign('c',$c);
}

		if ( $config['recommended'] > 0)
			{
				$binhbua = load_fav_channel(12,3,$pid);
				STemplate::assign('binhbua',$binhbua);

                //ban muon xem
                $want_views = want_views(8,5,$pid);
                $want_views = title_emotion_detector($want_views);
                STemplate::assign('want_views',$want_views);
                
				$hoibua = load_fav_channel(19,3,$pid);
				STemplate::assign('hoibua',$hoibua);
				
				$queryvideo = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key!='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY rand() desc limit 10";
				
				
				$executequeryvideo = $conn->execute($queryvideo);
				$video =  $executequeryvideo->getarray();
                $video = title_emotion_detector($video);
				STemplate::assign('video',$video);
				
				$queryuser = "SELECT * FROM members WHERE verified='1' AND username!='' ORDER BY posts desc limit 10";
				$executequeryuser = $conn->Execute($queryuser);
				$users = $executequeryuser->getrows();
				//$ranks = ($currentpage - 1) * $config['items_per_page'];
				$ucount = count($users);
				for($i = 0; $i < $ucount; $i++){$users[$i]['rank'] = $i + 1 + $ranks;}
				STemplate::assign('users',$users);
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
//lấy ra link sopcast
$datesopcast= $contents['created'];

$nowtime = date( 'Y-m-d',time());


if($datesopcast< $nowtime){
    $querysopcast = "select C.title, C.introtext,C.fulltext, C.created,C.result from www_content C WHERE state=1 AND created <'$nowtime' ORDER BY created desc limit 1";
}
else{
    $querysopcast = "select C.title, C.introtext,C.fulltext, C.created,C.result from www_content C WHERE state=1 AND created ='$nowtime' ORDER BY created desc limit 1";
}
$executequerysopcast = $conn->Execute($querysopcast);
$sopcast = $executequerysopcast->getrows();
STemplate::assign('sopcast',$sopcast);

$_SESSION['location'] = "/vote?page=".$currentpage;

//TEMPLATES BEGIN
STemplate::assign('pagetitle', $titles['8']);
STemplate::assign('menu',3);
STemplate::assign('page',$page);
STemplate::display('header.tpl');
STemplate::display($template);
STemplate::display('footer.tpl');
//TEMPLATES END
?>