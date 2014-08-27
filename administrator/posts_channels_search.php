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


//Search
$startid = intval(cleanit($_REQUEST['startid']));
$endid = intval(cleanit($_REQUEST['endid']));
$cname = cleanit($_REQUEST['cname']);
$add1 .= "&startid=$startid&endid=$endid&cname=$cname";
if($_POST['submitform'] == "1" || $startid > 0 || $endid > 0 || $cname != "")
{
	$addtosql = " WHERE ";
	if($startid > 0)
	{
		$addtosql .= "CID>='".mysql_real_escape_string($startid)."'";
		Stemplate::assign('startid',$startid);
	}
	else
	{
		$addtosql .= "CID>'".mysql_real_escape_string($startid)."'";
	}
	if($endid > 0)
	{
		$addtosql .= "AND CID<='".mysql_real_escape_string($endid)."'";
		Stemplate::assign('endid',$endid);
	}
	if($cname != "")
	{
		$addtosql .= "AND cname like'%".mysql_real_escape_string($cname)."%'";
		Stemplate::assign('cname',$cname);
	}
	$search = 1;
	Stemplate::assign('search',$search);
}
//Search End

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

if($search == 1)
{
	$queryselected = "select CID from channels $addtosql limit $config[maximum_results]";
	$query2 = "select * from channels $addtosql limit $pagingstart, $config[items_per_page]";
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
				$pagelinks.="<a class='button-a gray' href='$adminurl/posts_channels_search.php?page=1$add1' title='first page'>First</a>&nbsp;";
				$pagelinks.="<a class='button-a gray' href='$adminurl/posts_channels_search.php?page=$theprevpage$add1'>Previous</a>&nbsp;";
			};
			$counter=0;
			$lowercount = $currentpage-5;
			if ($lowercount <= 0) $lowercount = 1;
			while ($lowercount < $currentpage)
			{
				$pagelinks.="<a class='button-a gray' href='$adminurl/posts_channels_search.php?page=$lowercount$add1'>$lowercount</a>&nbsp;";
				$lowercount++;
				$counter++;
			}
			$pagelinks.=$currentpage."&nbsp;";
			$uppercounter = $currentpage+1;
			while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
			{
				$pagelinks.="<a class='button-a gray' href='$adminurl/posts_channels_search.php?page=$uppercounter$add1'>$uppercounter</a>&nbsp;";
				$uppercounter++;
			}
			if($currentpage < $toppage) 
			{
				$pagelinks.="<a class='button-a gray' href='$adminurl/posts_channels_search.php?page=$thenextpage$add1'>Next</a>&nbsp;";
				$pagelinks.="<a class='button-a gray' href='$adminurl/posts_channels_search.php?page=$toppage$add1' title='last page'>Last</a>&nbsp;";
			};
		}
	}
	else
	{
		$error = "Sorry, no standard channels were found.";
	}
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
STemplate::display("administrator/posts_channels_search.tpl");
STemplate::display("administrator/footer.tpl");
?>