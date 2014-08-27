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

$page = intval($_REQUEST['page']);
if($page==""){$page = "1";}
$currentpage = $page;
if ($page >=2){$pagingstart = ($page-1)*$config['items_per_page'];}
else{$pagingstart = "0";}

if( $_REQUEST['period'] == "day")
{
	$ctime = 24 * 60 * 60;
	$utime = time() - $ctime;
	$addthis = "AND A.time_added>=".$utime;
	$period = "day";
}
elseif( $_REQUEST['period'] == "week")
{
	$ctime = 7 * 24 * 60 * 60;
	$utime = time() - $ctime;
	$addthis = "AND A.time_added>=".$utime;
	$period = "week";
}
elseif( $_REQUEST['period'] == "month")
{
	$ctime = 30 * 24 * 60 * 60;
	$utime = time() - $ctime;
	$addthis = "AND A.time_added>=".$utime;
	$period = "month";
}
elseif( $_REQUEST['period'] == "all")
{
	$ctime = 0;
	$utime = time() - $ctime;
	$addthis = "";
	$period = "all";
}
else
{
	$ctime = 24 * 60 * 60;
	$utime = time() - $ctime;
	$addthis = "AND A.time_added>=".$utime;
	$period = "day";
}

$query1 = "SELECT count(*) as total from posts A, members B where A.active='1' AND A.USERID=B.USERID $addthis order by A.favclicks desc limit $config[maximum_results]";
$query2 = "SELECT A.*, B.username from posts A, members B where A.active='1' AND A.USERID=B.USERID $addthis order by A.favclicks desc limit $pagingstart, $config[items_per_page]";
$executequery1 = $conn->Execute($query1);
$totalposts = $executequery1->fields['total'];
if ($totalposts > 0)
{
	$executequery2 = $conn->Execute($query2);
	$posts = $executequery2->getrows();
	$posts = gif_detector($posts);
	STemplate::assign('posts',$posts);
	$theprevpage=$currentpage-1;
	$thenextpage=$currentpage+1;
	if($currentpage > 1){STemplate::assign('tpp',$theprevpage);}
	$currentposts = $currentpage * $config['items_per_page'];
	if($totalposts > $currentposts){STemplate::assign('tnp',$thenextpage);}
}

if ($config['topgags'] > 0)
{
	$topgags = load_topgags();
	STemplate::assign('topgags',$topgags);
}	

if ($config['channels'] == 1)
{
	$cats = loadallchannels();
	STemplate::assign('allchannels',$cats);

	$c = loadtopchannels($cats);
	STemplate::assign('c',$c);
}

$_SESSION['location'] = "/top/".$period."?page=".$currentpage;

//TEMPLATES BEGIN
STemplate::assign('period',$period);
STemplate::assign('menu',4);
STemplate::display('header.tpl');
STemplate::display('top.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>