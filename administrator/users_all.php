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

include("../include/include.php");
verify_login_admin();
$adminurl = $config['adminurl'];

// DELETE 
if($_REQUEST[delete]=="1")
{
	$DUSERID = intval($_REQUEST['ID']);	
	if($demo_mode != 1)
	{
		delete_user($DUSERID);
	}
	$message = "Member Successfully Deleted.";
	Stemplate::assign('message',$message);
}
// DELETE 

$page = intval($_REQUEST['page']);
if($page=="")
{
	$page = "1";
}
$currentpage = $page;

if ($page >=2)
{
	$pagingstart = ($page-1)*$config['items_per_page'];
}
else
{
	$pagingstart = "0";
}

$queryselected = "select USERID from members limit $config[maximum_results]";
$query2 = "select * from members limit $pagingstart, $config[items_per_page]";
$executequeryselected = $conn->Execute($queryselected);
$totalposts = $executequeryselected->rowcount();	
if ($totalposts > 0)
{
	if($totalposts<=$config[maximum_results])
	{
		$total = $totalposts;
	}
	else
	{
		$total = $config[maximum_results];
	}
	$toppage = ceil($total/$config[items_per_page]);
	if($toppage==0)
	{
		$xpage=$toppage+1;
	}
	else
	{
		$xpage = $toppage;
	}
	$executequery2 = $conn->Execute($query2);	
	$results = $executequery2->getrows();
	$beginning=$pagingstart+1;
	$ending=$pagingstart+$executequery2->recordcount();
	$pagelinks="";
	$k=1;
	$theprevpage=$currentpage-1;
	$thenextpage=$currentpage+1;
	if ($currentpage > 0)
	{	
		if($currentpage > 1) 
		{
			$pagelinks.="<a class='button-a gray' href='$adminurl/users_all.php?page=1$add1' title='first page'>First</a>&nbsp;";
			$pagelinks.="<a class='button-a gray' href='$adminurl/users_all.php?page=$theprevpage$add1'>Previous</a>&nbsp;";
		};
		$counter=0;
		$lowercount = $currentpage-5;
		if ($lowercount <= 0) $lowercount = 1;
		while ($lowercount < $currentpage)
		{
			$pagelinks.="<a class='button-a gray' href='$adminurl/users_all.php?page=$lowercount$add1'>$lowercount</a>&nbsp;";
			$lowercount++;
			$counter++;
		}
		$pagelinks.=$currentpage."&nbsp;";
		$uppercounter = $currentpage+1;
		while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
		{
			$pagelinks.="<a class='button-a gray' href='$adminurl/users_all.php?page=$uppercounter$add1'>$uppercounter</a>&nbsp;";
			$uppercounter++;
		}
		if($currentpage < $toppage) 
		{
			$pagelinks.="<a class='button-a gray' href='$adminurl/users_all.php?page=$thenextpage$add1'>Next</a>&nbsp;";
			$pagelinks.="<a class='button-a gray' href='$adminurl/users_all.php?page=$toppage$add1' title='last page'>Last</a>&nbsp;";
		};
	}
}
else
{
	$error = "Sorry, no users were found.";
}

$main_menu = "3";
Stemplate::assign('main_menu',$main_menu);
Stemplate::assign('page',$tpage);
STemplate::display("administrator/header.tpl");
STemplate::assign('pagelinks',$pagelinks);
STemplate::assign('total',$total+0);
STemplate::assign('users',$results);
Stemplate::assign('error',$error);
STemplate::display("administrator/users_all.tpl");
STemplate::display("administrator/footer.tpl");
?>