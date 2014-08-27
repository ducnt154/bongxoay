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

//DELETE REPORT
if($_REQUEST[delete]=="1")
{
	$RRID = $_POST['RID'];
	if($demo_mode != 1)
	{
		$sql="DELETE FROM posts_reports WHERE RID='".mysql_real_escape_string($RRID)."'";
		$conn->Execute($sql);
	}
	$message = "Report has been successfully deleted.";
	Stemplate::assign('message',$message);
}
//DELETE REPORT

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

$queryselected = "select A.PID,B.RID from posts A, posts_reports B WHERE A.PID=B.PID limit $config[maximum_results]";
$query2 = "select A.*,B.*,C.username from posts A JOIN posts_reports B ON (A.PID=B.PID) JOIN members C ON (A.USERID=C.USERID) limit $pagingstart, $config[items_per_page]";
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
	$rcount = count($results);
	for ($i = 0; $i < $rcount; $i++)
	{
		$query3 = "SELECT cname from channels where CID='".$results[$i]['CID']."'";
		$executequery3 = $conn->Execute($query3);
		$results[$i]['cname'] = $executequery3->fields['cname'];
	}
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
			$pagelinks.="<a class='button-a gray' href='$adminurl/stories_reported.php?page=1$add1' title='first page'>First</a>&nbsp;";
			$pagelinks.="<a class='button-a gray' href='$adminurl/stories_reported.php?page=$theprevpage$add1'>Previous</a>&nbsp;";
		};
		$counter=0;
		$lowercount = $currentpage-5;
		if ($lowercount <= 0) $lowercount = 1;
		while ($lowercount < $currentpage)
		{
			$pagelinks.="<a class='button-a gray' href='$adminurl/stories_reported.php?page=$lowercount$add1'>$lowercount</a>&nbsp;";
			$lowercount++;
			$counter++;
		}
		$pagelinks.=$currentpage."&nbsp;";
		$uppercounter = $currentpage+1;
		while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
		{
			$pagelinks.="<a class='button-a gray' href='$adminurl/stories_reported.php?page=$uppercounter$add1'>$uppercounter</a>&nbsp;";
			$uppercounter++;
		}
		if($currentpage < $toppage) 
		{
			$pagelinks.="<a class='button-a gray' href='$adminurl/stories_reported.php?page=$thenextpage$add1'>Next</a>&nbsp;";
			$pagelinks.="<a class='button-a gray' href='$adminurl/stories_reported.php?page=$toppage$add1' title='last page'>Last</a>&nbsp;";
		};
	}
}
else
{
	$error = "There are no reported gag.";
}

$main_menu = "2";
Stemplate::assign('main_menu',$main_menu);
Stemplate::assign('page',$page);
STemplate::display("administrator/header.tpl");
STemplate::assign('pagelinks',$pagelinks);
STemplate::assign('total',$total);
STemplate::assign('posts',$results);
Stemplate::assign('error',$error);
STemplate::display("administrator/posts_reports.tpl");
STemplate::display("administrator/footer.tpl");
?>