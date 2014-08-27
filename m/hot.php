<?php
/*======================================================================*\
|| #################################################################### ||
|| # Best 9Gag Clone Script 5.0.0 - Mobile Module v4.1                  ||
|| # ---------------------------------------------------------------- # ||
|| # Copyright 2012-2013 PHPism Inc. All Rights Reserved.               ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # --------- Best 9Gag Clone Script IS NOT FREE SOFTWARE ---------- # ||
|| # ---- http://www.phpism.com | http://www.phpism.com/eula.php ---- # ||
|| #################################################################### ||
\*======================================================================*/

include("config.php");

$page = intval($_REQUEST[page]);
if($page==""){$page = "1";}
$currentpage = $page;
if ($page >=2){$pagingstart = ($page-1)*$config['mobile_per_page'];}
else{$pagingstart = "0";}

if ($config['trendingenabled'] == 0){
	$query1 = "SELECT count(*) as total from posts A, members B where A.active='1' AND A.USERID=B.USERID AND A.phase>'0' order by A.PID desc limit $config[maximum_results]";
	$query2 = "SELECT A.*, B.username, B.profilepicture from posts A, members B where A.active='1' AND A.USERID=B.USERID AND A.phase>'0' order by A.PID desc limit $pagingstart, $config[mobile_per_page]";
}
else
{
	$query1 = "SELECT count(*) as total from posts A, members B where A.active='1' AND A.USERID=B.USERID AND A.phase>'1' order by A.PID desc limit $config[maximum_results]";
	$query2 = "SELECT A.*, B.username, B.profilepicture from posts A, members B where A.active='1' AND A.USERID=B.USERID AND A.phase>'1' order by A.PID desc limit $pagingstart, $config[mobile_per_page]";
}

$executequery1 = $conn->Execute($query1);
$totalposts = $executequery1->fields['total'];
if ($totalposts > 0)
{
	$executequery2 = $conn->Execute($query2);
	$posts = $executequery2->getrows();
	$theprevpage=$currentpage-1;
	$thenextpage=$currentpage+1;
	if($currentpage > 1){STemplate::assign('tpp',$theprevpage);}
	$currentposts = $currentpage * $config['mobile_per_page'];
	if($totalposts > $currentposts){STemplate::assign('tnp',$thenextpage);}
}
$_SESSION['location'] = "/hot?page=".$currentpage;

//TEMPLATES BEGIN
STemplate::setTplDir($config['mobiledir']."/themes");
STemplate::assign('posts',$posts);
STemplate::assign('page',$page);
STemplate::assign('pagetitle',$lang['172']);
STemplate::assign('section',"hot");
STemplate::display('header.tpl');
STemplate::display('index.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>