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

$view = $_REQUEST['view'];
$sview = $_SESSION['viewtype'];
$page = intval($_REQUEST['page']);
$cname2 = cleanit($_REQUEST['cname']);

if($view != ""){$_SESSION['viewtype'] = $_REQUEST['view'];}
elseif($sview == "" && $view == ""){$_SESSION['viewtype'] = "list";}

if($page==""){$page = "1";}
$currentpage = $page;
if ($page >=2){$pagingstart = ($page-1)*$config['items_per_page'];}
else{$pagingstart = "0";}

if ($cname2 == "gif" || $cname2 == "hinh-dong"){
	$where = "A.pic LIKE '%.gif'";
	$cname = "Hình động";
}elseif ($cname2 == "video-bong-da" || $cname2 == "video"){
	$where = "(A.youtube_key != '' OR A.fod_key != '' OR A.vfy_key != '' OR A.vmo_key != '')" ;
	$cname = "Video Bóng Đá";
}else{
	$query1 = "select * from channels";
	$results1=$conn->execute($query1);
	$cnames = $results1->getrows();
	$cnamescount = count($cnames);
	for ($i = 0; $i < $cnamescount; $i++) {
		if ( makeseo($cnames[$i]["cname"]) == $cname2)
		{
			$CID = $cnames[$i]["CID"];
			$cname = $cnames[$i]["cname"];
			STemplate::assign('CID',$CID);
			STemplate::assign('cname',$cname);
		}
	}
	$where = "A.CID=".$CID;
}
$nowtime = date( 'Y-m-d H:i:s',time());


$query1 = "SELECT count(*) as total from posts A, members B where A.active='1' AND A.USERID=B.USERID AND $where order by A.PID desc limit $config[maximum_results]";
$query2 = "SELECT A.*, B.username,C.cname from posts A, members B, channels C where A.time_added <='".time()."' AND A.active='1' AND A.USERID=B.USERID AND A.CID=C.CID AND $where order by A.PID desc limit $pagingstart, $config[items_per_page]";


$executequery1 = $conn->Execute($query1);
$totalposts = $executequery1->fields['total'];
if ($totalposts > 0)
{

	$executequery2 = $conn->Execute($query2);
	$posts = $executequery2->getrows();
	$posts = gif_detector($posts);
	$posts = title_emotion_detector($posts);
	STemplate::assign('posts',$posts);
	$theprevpage=$currentpage-1;
	$thenextpage=$currentpage+1;
	if($currentpage > 1){STemplate::assign('tpp',$theprevpage);}
	$currentposts = $currentpage * $config['items_per_page'];
	if($totalposts > $currentposts){STemplate::assign('tnp',$thenextpage);}

}

if ($_SESSION['viewtype'] == "list" && $cname2!="hau-truong" && $cname2!="video-bong-da")
{
    $template = "channels.tpl";
}
elseif($cname2=="hau-truong"){
    $template = "hautruong.tpl";
}
elseif($cname2=="video-bong-da"){
    $template = "bongxoaytv.tpl";
}
else{$template = "tchannels.tpl";}

if ($config['topgags'] > 0 && $cname2!="hau-truong" && $cname2!="video-bong-da")
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
	$c = loadtopchannels($cats);
	$date_month = date("d/m");
	STemplate::assign('date_month',$date_month);
	STemplate::assign('allchannels',$cats);
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
                //video tam diem trong ngay
                //lay ra ngay cua 7 ngay truoc
                $nowtime = date( 'Y-m-d',time());
                $new_date = strtotime ( '-2  day' , strtotime ( $nowtime ) ) ;
                $new_date = date ( 'Y-m-j' , $new_date );
                //video hot
				$queryvideo = "SELECT A.*, B.username FROM posts A, members B WHERE  A.phase ='2' AND A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key!='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY rand() desc limit 5";

				$executequeryvideo = $conn->execute($queryvideo);
				$video =  $executequeryvideo->getarray();
                //video tam diem trong ngay
                $queryvideotamdiem = "SELECT A.*, B.username FROM posts A, members B WHERE  date_added > '".$new_date."' AND A.phase ='2' AND A.USERID=B.USERID  AND A.active='1' AND A.youtube_key!='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY time_added desc limit 5";
                //video moi nhat
                $queryvideolatest = "SELECT A.*, B.username FROM posts A, members B WHERE A.phase ='2' AND A.USERID=B.USERID AND A.active='1' AND A.youtube_key!='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY time_added desc limit 15";

                $executequeryvideotamdiem = $conn->execute($queryvideotamdiem);
                $videotamdiem =  $executequeryvideotamdiem->getarray();
                //var_dump($videotamdiem);die;
                $executequeryvideolatest = $conn->execute($queryvideolatest);
                $videolatest =  $executequeryvideolatest->getarray();

                //hậu trường
                $queryhautruonglatest = "SELECT A.*, B.username from posts A, members B where A.active='1' AND A.USERID=B.USERID AND $where order by A.time_added desc limit 1";


                $executequeryhautruonglatest = $conn->execute($queryhautruonglatest);
                $hautruonglatest =  $executequeryhautruonglatest->getrows();
                foreach($hautruonglatest as $hautruonglatests){

                }
                $pidlatest = $hautruonglatests['PID'];
                $queryhautruong = "SELECT A.*, B.username from posts A, members B where A.PID != '".$pidlatest."' AND A.active='1' AND A.USERID=B.USERID AND $where order by A.time_added desc limit $pagingstart, $config[items_per_page]";
                $executequeryhautruong = $conn->execute($queryhautruong);
                $hautruong =  $executequeryhautruong->getrows();
                $hautruong = gif_detector($hautruong);
                $hautruong = title_emotion_detector($hautruong);

                STemplate::assign('hautruonglatest',$hautruonglatest);
                STemplate::assign('hautruong',$hautruong);
                STemplate::assign('videotamdiem',$videotamdiem);
                STemplate::assign('videolatest',$videolatest);
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
//lấy ra link sopcast
$querycontent = "select created from www_content ORDER BY created desc limit 1";
$executequerycontent = $conn->Execute($querycontent);


$content = $executequerycontent->getrows();
foreach($content as $contents){
}

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
       /* $querysopcast = "select C.title, C.introtext,C.fulltext, C.created from www_content C WHERE created = '$nowtime' ORDER BY created limit 1";
        $executequerysopcast = $conn->Execute($querysopcast);
        $sopcast = $executequerysopcast->getrows();
        STemplate::assign('sopcast',$sopcast);*/

$_SESSION['location'] = "/channels/".$cname2."/?page=".$currentpage;

//TEMPLATES BEGIN
STemplate::assign('cname2',$cname2);
STemplate::assign('menu',5);
STemplate::assign('page',$page);
STemplate::assign('sview',$sview);
STemplate::assign('pagetitle',$cname);
STemplate::display('header.tpl');
STemplate::display($template);
STemplate::display('footer.tpl');
//TEMPLATES END
?>