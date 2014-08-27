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

// DELETE BEGIN
if($_REQUEST[delete]=="1")
{
	$DAID = intval($_REQUEST['CID']);
	if($DAID > 0)
	{
		if($demo_mode != 1)
		{
			$sql="DELETE FROM channels WHERE CID='".mysql_real_escape_string($DAID)."'";
			$conn->Execute($sql);
		}
		$message = "Channel Successfully Deleted.";
		Stemplate::assign('message',$message);
	}
}
// DELETE END

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

$queryselected = "select CID from channels $sort $sorthow limit $config[maximum_results]";
$query2 = "select * from channels $sort $sorthow limit $pagingstart, $config[items_per_page]";
$executequeryselected = $conn->Execute($queryselected);
$totalvideos = $executequeryselected->rowcount();	
if ($totalvideos > 0)
{
	if($totalvideos<=$config[maximum_results])
	{
		$total = $totalvideos;
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
			$pagelinks.="<a class='button-a gray' href='$adminurl/posts_channels.php?page=1$add1' title='first page'>First</a>&nbsp;";
			$pagelinks.="<a class='button-a gray' href='$adminurl/posts_channels.php?page=$theprevpage$add1'>Previous</a>&nbsp;";
		};
		$counter=0;
		$lowercount = $currentpage-5;
		if ($lowercount <= 0) $lowercount = 1;
		while ($lowercount < $currentpage)
		{
			$pagelinks.="<a class='button-a gray' href='$adminurl/posts_channels.php?page=$lowercount$add1'>$lowercount</a>&nbsp;";
			$lowercount++;
			$counter++;
		}
		$pagelinks.=$currentpage."&nbsp;";
		$uppercounter = $currentpage+1;
		while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
		{
			$pagelinks.="<a class='button-a gray' href='$adminurl/posts_channels.php?page=$uppercounter$add1'>$uppercounter</a>&nbsp;";
			$uppercounter++;
		}
		if($currentpage < $toppage) 
		{
			$pagelinks.="<a class='button-a gray' href='$adminurl/posts_channels.php?page=$thenextpage$add1'>Next</a>&nbsp;";
			$pagelinks.="<a class='button-a gray' href='$adminurl/posts_channels.php?page=$toppage$add1' title='last page'>Last</a>&nbsp;";
		};
	}
}
else
{
	$error = "Sorry, no standard channels were found.";
}

$main_menu = "2";
Stemplate::assign('main_menu',$main_menu);
Stemplate::assign('page',$page);
STemplate::display("administrator/header.tpl");
STemplate::assign('beginning',$beginning);
STemplate::assign('ending',$ending);
STemplate::assign('pagelinks',$pagelinks);
STemplate::assign('total',$total+0);
STemplate::assign('channels',$results);
Stemplate::assign('error',$error);
STemplate::display("administrator/posts_channels.tpl");
STemplate::display("administrator/footer.tpl");
?>