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

//error_reporting(E_ALL);

include("include/include.php");

if ( $config[index] == 1)
{header("Location:$config[baseurl]/trending".$addlang);exit;}
elseif ( $config[index] == 2)
{header("Location:$config[baseurl]/vote".$addlang);exit;}

$view = $_REQUEST['view'];
$sview = $_SESSION['viewtype'];
$page = intval($_REQUEST['page']);

if($view != ""){$_SESSION['viewtype'] = $_REQUEST['view'];}
elseif($sview == "" && $view == ""){$_SESSION['viewtype'] = "list";}

if($page==""){$page = "1";}
$currentpage = $page;
if ($page >=2){$pagingstart = ($page-1)*$config['items_per_page'];}
else{$pagingstart = "0";}


$nowtime = date( 'Y-m-d H:i:s',time());

if ($config['trendingenabled'] == 0){
$query1 = "SELECT count(*) as total from posts A, members B, channels C where A.active='1' AND A.USERID=B.USERID AND A.phase>'0' order by A.PID desc limit $config[maximum_results]";
$query2 = "SELECT A.*, B.username, C.cname from posts A, members B, channels C where A.time_added <='".time()."' AND A.active='1' AND A.USERID=B.USERID AND A.CID=C.CID AND A.phase>'0' order by A.time_set desc, A.PID desc limit $pagingstart, $config[items_per_page]";
}
else
{
$query1 = "SELECT count(*) as total from posts A, members B, channels C where A.active='1' AND A.USERID=B.USERID AND A.phase>'1' order by A.PID desc limit $config[maximum_results]";
$query2 = "SELECT A.*, B.username, C.cname from posts A, members B, channels C where A.time_added <='".time()."' AND A.active='1' AND A.USERID=B.USERID AND A.CID=C.CID AND A.phase>'1' order by A.PID desc limit $pagingstart, $config[items_per_page]";
}

$executequery1 = $conn->Execute($query1);
$totalposts = $executequery1->fields['total'];
if ($totalposts > 0)
{
	$executequery2 = $conn->Execute($query2);
	$posts = $executequery2->getrows();
    foreach($posts as $postss){
        $date = $postss['time_set'];
        $timestamp = strtotime($date);
    }


	$posts = gif_detector($posts);
	//Change the emotion of title
	$posts = title_emotion_detector($posts);

    STemplate::assign('posts',$posts);
	STemplate::assign('timestamp',$timestamp);

	$theprevpage=$currentpage-1;
	$thenextpage=$currentpage+1;
	if($currentpage > 1){STemplate::assign('tpp',$theprevpage);}
	$currentposts = $currentpage * $config['items_per_page'];
	if($totalposts > $currentposts){STemplate::assign('tnp',$thenextpage);}
}

if ($_SESSION['viewtype'] == "list"){$template = "index.tpl";}
else{$template = "thumbs.tpl";}

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

				$queryvideo = "SELECT A.*, B.username FROM posts A, members B WHERE A.time_added<='".time()."'AND A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key!='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY time_added desc limit 5";


				$executequeryvideo = $conn->execute($queryvideo);
				$video =  $executequeryvideo->getarray();
                $video = title_emotion_detector($video);
				STemplate::assign('video',$video);

                //top xoay
				$queryuser = "SELECT * FROM members WHERE verified='1' AND username!='' ORDER BY posts desc limit 6";
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
    $querysopcast = "select C.title, C.introtext,C.fulltext, C.created,C.result from www_content C WHERE state=1 ORDER BY created desc limit 1";
}
$executequerysopcast = $conn->Execute($querysopcast);
$sopcast = $executequerysopcast->getrows();

//list các bản ghi lien quan mới nhất
/*if($youtube_key){
    $queryRelated = "SELECT A.*, B.username FROM posts A, members B WHERE A.CID ='".$CID."' AND A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key!='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY rand() desc limit 10";
}
else{
    $queryRelated = "SELECT A.*, B.username FROM posts A, members B WHERE A.CID ='".$CID."' AND A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key='' ORDER BY rand() desc limit 10";
}
$queryvideo = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key!='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY postviewed desc limit 5";
$executequeryvideo = $conn->execute($queryvideo);*/
/*$video =  $executequeryvideo->getarray();
STemplate::assign('video',$video);*/

/*$executequeryRelated = $conn->execute($queryRelated);*/
/*$newsrelated =  $executequeryRelated->getarray();
STemplate::assign('newsrelated',$newsrelated);*/

STemplate::assign('sopcast',$sopcast);
STemplate::assign('nowtime',$nowtime);
$_SESSION['location'] = "/hot?page=".$currentpage;

//TEMPLATES BEGIN
STemplate::assign('menu',1);
STemplate::assign('pagetitle',$titles['4']);
STemplate::assign('page',$page);
STemplate::display('header.tpl');
STemplate::display($template);
STemplate::display('footer.tpl');
//TEMPLATES END
?>