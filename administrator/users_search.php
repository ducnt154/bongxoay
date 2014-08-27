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

//Search
$startid = intval(cleanit($_REQUEST['startid']));
$endid = intval(cleanit($_REQUEST['endid']));
$username = cleanit($_REQUEST['username']);
$email = cleanit($_REQUEST['email']);
$status = intval(cleanit($_REQUEST['status']));
$verified = intval(cleanit($_REQUEST['verified']));
$fullname = cleanit($_REQUEST['fullname']);
$website = cleanit($_REQUEST['website']);
$country = cleanit($_REQUEST['country']);
$ip = cleanit($_REQUEST['ip']);
$lip = cleanit($_REQUEST['lip']);
$add1 .= "&startid=$startid&endid=$endid&email=$email&username=$username&fullname=$fullname&website=$website&country=$country&status=$status&ip=$ip&lip=$lip&verified=$verified";
if($_POST['submitform'] == "1" || $startid > 0 || $endid > 0 || $email != "" || $username != "" || $fullname != "" || $website != "" || $country != "" || $ip != "" || $lip != "" || ($status != 2 && $status != "") || ($verified != 2 && $verified != ""))
{
	$addtosql = " WHERE ";
	if($startid > 0)
	{
		$addtosql .= "USERID>='".mysql_real_escape_string($startid)."'";
		Stemplate::assign('startid',$startid);
	}
	else
	{
		$addtosql .= "USERID>'".mysql_real_escape_string($startid)."'";
	}
	if($endid > 0)
	{
		$addtosql .= "AND USERID<='".mysql_real_escape_string($endid)."'";
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
	if($fullname != "")
	{
		$addtosql .= "AND fullname like'%".mysql_real_escape_string($fullname)."%'";
		Stemplate::assign('fullname',$fullname);
	}
	if($website != "")
	{
		$addtosql .= "AND website like'%".mysql_real_escape_string($website)."%'";
		Stemplate::assign('website',$website);
	}
	if($country != "")
	{
		$addtosql .= "AND country like'%".mysql_real_escape_string($country)."%'";
		Stemplate::assign('country',$country);
	}
	if($ip != "")
	{
		$addtosql .= "AND ip like'%".mysql_real_escape_string($ip)."%'";
		Stemplate::assign('ip',$ip);
	}
	if($lip != "")
	{
		$addtosql .= "AND lip like'%".mysql_real_escape_string($lip)."%'";
		Stemplate::assign('lip',$lip);
	}
	if($status != 2)
	{
		$addtosql .= "AND status='$status'";
		Stemplate::assign('status',$status);
	}
	if($verified != 2)
	{
		$addtosql .= "AND verified='$verified'";
		Stemplate::assign('verified',$verified);
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

	$queryselected = "select USERID from members $addtosql limit $config[maximum_results]";
	$query2 = "select * from members $addtosql limit $pagingstart, $config[items_per_page]";
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
				$pagelinks.="<a class='button-a gray' href='$adminurl/users_search.php?page=1$add1' title='first page'>First</a>&nbsp;";
				$pagelinks.="<a class='button-a gray' href='$adminurl/users_search.php?page=$theprevpage$add1'>Previous</a>&nbsp;";
			};
			$counter=0;
			$lowercount = $currentpage-5;
			if ($lowercount <= 0) $lowercount = 1;
			while ($lowercount < $currentpage)
			{
				$pagelinks.="<a class='button-a gray' href='$adminurl/users_search.php?page=$lowercount$add1'>$lowercount</a>&nbsp;";
				$lowercount++;
				$counter++;
			}
			$pagelinks.=$currentpage."&nbsp;";
			$uppercounter = $currentpage+1;
			while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
			{
				$pagelinks.="<a class='button-a gray' href='$adminurl/users_search.php?page=$uppercounter$add1'>$uppercounter</a>&nbsp;";
				$uppercounter++;
			}
			if($currentpage < $toppage) 
			{
				$pagelinks.="<a class='button-a gray' href='$adminurl/users_search.php?page=$thenextpage$add1'>Next</a>&nbsp;";
				$pagelinks.="<a class='button-a gray' href='$adminurl/users_search.php?page=$toppage$add1' title='last page'>Last</a>&nbsp;";
			};
		}
	}
	else
	{
		$error = "Sorry, no users were found.";
	}
}

$main_menu = "3";
Stemplate::assign('main_menu',$main_menu);
Stemplate::assign('page',$tpage);
STemplate::display("administrator/header.tpl");
STemplate::assign('pagelinks',$pagelinks);
STemplate::assign('total',$total+0);
STemplate::assign('users',$results);
Stemplate::assign('error',$error);
STemplate::display("administrator/users_search.tpl");
STemplate::display("administrator/footer.tpl");
?>