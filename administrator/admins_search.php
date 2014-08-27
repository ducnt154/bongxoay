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
if($_REQUEST['delete']=="1")
{
	$DADMINID = intval($_REQUEST['ID']);
	if($DADMINID > 0)
	{
		$sql="select count(*) as total from administrators";
		$executequery = $conn->Execute($sql);
		$tadmins = $executequery->fields['total'];
		if($tadmins > 1)
		{
			if($demo_mode != 1)
			{
				$sql="DELETE FROM administrators WHERE ADMINID='".mysql_real_escape_string($DADMINID)."'";
				$conn->Execute($sql);
			}
			$message = "Administrator Successfully Deleted.";
			Stemplate::assign('message',$message);
		}
		else
		{
			$error = "Error: You cannot delete the only admininstrator.";
		}
	}
}
// DELETE END

//Search
$startid = intval(cleanit($_REQUEST['startid']));
$endid = intval(cleanit($_REQUEST['endid']));
$username = cleanit($_REQUEST['username']);
$email = cleanit($_REQUEST['email']);
$add1 .= "&startid=$startid&endid=$endid&email=$email&username=$username";
if($_POST['submitform'] == "1" || $startid > 0 || $endid > 0 || $email != "" || $username != "")
{
	$addtosql = " WHERE ";
	if($startid > 0)
	{
		$addtosql .= "ADMINID>='".mysql_real_escape_string($startid)."'";
		Stemplate::assign('startid',$startid);
	}
	else
	{
		$addtosql .= "ADMINID>'".mysql_real_escape_string($startid)."'";
	}
	if($endid > 0)
	{
		$addtosql .= "AND ADMINID<='".mysql_real_escape_string($endid)."'";
		Stemplate::assign('endid',$endid);
	}
	if($email != "")
	{
		$addtosql .= "AND email like'%".mysql_real_escape_string($email)."%'";
		Stemplate::assign('email',$email);
	}
	if($username != "")
	{
		$addtosql .= "AND username like'%".mysql_real_escape_string($username)."%'";
		Stemplate::assign('username',$username);
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
	$queryselected = "select ADMINID from administrators $addtosql limit $config[maximum_results]";
	$query2 = "select * from administrators $addtosql limit $pagingstart, $config[items_per_page]";
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
				$pagelinks.="<a class='button-a gray' href='$adminurl/admins_search.php?page=1$add1' title='first page'>First</a>&nbsp;";
				$pagelinks.="<a class='button-a gray' href='$adminurl/admins_search.php?page=$theprevpage$add1'>Previous</a>&nbsp;";
			};
			$counter=0;
			$lowercount = $currentpage-5;
			if ($lowercount <= 0) $lowercount = 1;
			while ($lowercount < $currentpage)
			{
				$pagelinks.="<a class='button-a gray' href='$adminurl/admins_search.php?page=$lowercount$add1'>$lowercount</a>&nbsp;";
				$lowercount++;
				$counter++;
			}
			$pagelinks.=$currentpage."&nbsp;";
			$uppercounter = $currentpage+1;
			while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
			{
				$pagelinks.="<a class='button-a gray' href='$adminurl/admins_search.php?page=$uppercounter$add1'>$uppercounter</a>&nbsp;";
				$uppercounter++;
			}
			if($currentpage < $toppage) 
			{
				$pagelinks.="<a class='button-a gray' href='$adminurl/admins_search.php?page=$thenextpage$add1'>Next</a>&nbsp;";
				$pagelinks.="<a class='button-a gray' href='$adminurl/admins_search.php?page=$toppage$add1' title='last page'>Last</a>&nbsp;";
			};
		}
	}
	else
	{
		$error = "Sorry, no administrators were found.";
	}
}
$main_menu = "4";
Stemplate::assign('main_menu',$main_menu);
Stemplate::assign('page',$page);
STemplate::display("administrator/header.tpl");
STemplate::assign('pagelinks',$pagelinks);
STemplate::assign('admins',$results);
Stemplate::assign('error',$error);
STemplate::display("administrator/admins_search.tpl");
STemplate::display("administrator/footer.tpl");
?>