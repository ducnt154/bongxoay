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
\*===================================hellomedia===================================*/

include("include/include.php");
$voteforvisitor = $config['voteforvisitor'];
$SID = intval($_SESSION['USERID']);
$page = intval($_REQUEST['page']);

if($page==""){$page = "1";}
$currentpage = $page;
if ($page >=2){$pagingstart = ($page-1)*$config['items_per_page'];}
else{$pagingstart = "0";}

$SID = intval($_SESSION['USERID']);
if($SID > 0 || $voteforvisitor == 1)
{	
	$query1 = "SELECT count(*) as total from posts A, members B where A.active='1' AND A.USERID=B.USERID AND A.phase='0' order by A.PID desc limit $config[maximum_results]";
	$query2 = "SELECT A.*, B.username from posts A, members B where A.active='1' AND A.USERID=B.USERID AND A.phase='0' order by A.PID desc limit $pagingstart, $config[items_per_page]";
	$executequery1 = $conn->Execute($query1);
	$totalposts = $executequery1->fields['total'];
	if ($totalposts > 0)
	{
		$executequery2 = $conn->Execute($query2);
		$posts = $executequery2->getrows();
		$posts = gif_detector($posts);
		STemplate::assign('posts',$posts);
	}
}

//TEMPLATES BEGIN
STemplate::assign('loadmore',1);
STemplate::assign('page',$page);
STemplate::display('posts_bit.tpl');
//TEMPLATES END
?>