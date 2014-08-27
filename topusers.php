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
$query1 = "SELECT count(*) as total FROM members WHERE verified='1' AND username!='' ORDER BY posts desc limit $pagingstart, $config[items_per_page]";
$executequery1 = $conn->Execute($query1);
$totalposts = $executequery1->fields['total'];
if ($totalposts > 0)
{
	$queryr = "SELECT * FROM members WHERE verified='1' AND username!='' ORDER BY posts desc limit $pagingstart, $config[items_per_page]";
	$executequeryr = $conn->Execute($queryr);
	$users = $executequeryr->getrows();
	$ranks = ($currentpage - 1) * $config['items_per_page'];
	$ucount = count($users);
	for($i = 0; $i < $ucount; $i++){$users[$i]['rank'] = $i + 1 + $ranks;}
	STemplate::assign('users',$users);
	
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

$_SESSION['location'] = "/top-users";

//TEMPLATES BEGIN
STemplate::assign('pagetitle', $titles['13']);
STemplate::assign('menu',4);
STemplate::display('header.tpl');
STemplate::display('topusers.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>