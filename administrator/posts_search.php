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
	$DPID = intval($_REQUEST['PID']);
	if($DPID > 0)
	{
		if($demo_mode != 1)
		{
			delete_post($DPID);	
		}		
		$message = "Gag Successfully Deleted.";
		Stemplate::assign('message',$message);
	}
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

//Search
$startid = intval(cleanit($_REQUEST['startid']));
$endid = intval(cleanit($_REQUEST['endid']));
$story = cleanit($_REQUEST['story']);
$username = cleanit($_REQUEST['username']);
$active = intval(cleanit($_REQUEST['active']));
$CID = intval(cleanit($_REQUEST['CID']));
$nsfw = intval(cleanit($_REQUEST['nsfw']));
$phase = intval(cleanit($_REQUEST['phase']));
$add1 .= "&startid=$startid&endid=$endid&story=$story&username=$username&active=$active&CID=$CID&phase=$phase&nsfw=$nsfw";
if($_POST['submitform'] == "1" || $startid > 0 || $endid > 0 || $story != "" || $username != "" || ($active != 2 && $active != "") || ($CID > 0 && $CID != "") || ($phase != 3 && $phase != "") || ($nsfw != 2 && $nsfw != ""))
{
	if($startid > 0)
	{
		$addtosql = "AND A.PID>='".mysql_real_escape_string($startid)."'";
		Stemplate::assign('startid',$startid);
	}
	else
	{
		$addtosql = "AND A.PID>'".mysql_real_escape_string($startid)."'";
	}
	if($endid > 0)
	{
		$addtosql .= "AND A.PID<='".mysql_real_escape_string($endid)."'";
		Stemplate::assign('endid',$endid);
	}
	if($story != "")
	{
		$addtosql .= "AND A.story like'%".mysql_real_escape_string($story)."%'";
		Stemplate::assign('story',$story);
	}
	if($username != "")
	{
		$addtosql .= "AND B.username like'%".mysql_real_escape_string($username)."%'";
		Stemplate::assign('username',$username);
	}
	if($active != 2)
	{
		$addtosql .= "AND A.active='$active'";
		Stemplate::assign('active',$active);
	}
	if($CID > 0)
	{
		$addtosql .= "AND A.CID='$CID'";
		Stemplate::assign('CID',$CID);
	}
	if($phase != 3)
	{
		$addtosql .= "AND A.phase='$phase'";
		Stemplate::assign('phase',$phase);
	}
	if($nsfw != 2)
	{
		$addtosql .= "AND A.nsfw='$nsfw'";
		Stemplate::assign('nsfw',$nsfw);
	}
	$search = 1;
	Stemplate::assign('search',$search);
}
//Search End
if($search == 1)
{
	$queryselected = "select A.PID,B.username from posts A, members B WHERE A.PID>0 AND A.USERID=B.USERID $addtosql limit $config[maximum_results]";
	$query2 = "select A.*,B.username from posts A, members B WHERE A.PID>0 AND A.USERID=B.USERID $addtosql limit $pagingstart, $config[items_per_page]";
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
				$pagelinks.="<a class='button-a gray' href='$adminurl/posts_search.php?page=1$add1' title='first page'>First</a>&nbsp;";
				$pagelinks.="<a class='button-a gray' href='$adminurl/posts_search.php?page=$theprevpage$add1'>Previous</a>&nbsp;";
			};
			$counter=0;
			$lowercount = $currentpage-5;
			if ($lowercount <= 0) $lowercount = 1;
			while ($lowercount < $currentpage)
			{
				$pagelinks.="<a class='button-a gray' href='$adminurl/posts_search.php?page=$lowercount$add1'>$lowercount</a>&nbsp;";
				$lowercount++;
				$counter++;
			}
			$pagelinks.=$currentpage."&nbsp;";
			$uppercounter = $currentpage+1;
			while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
			{
				$pagelinks.="<a class='button-a gray' href='$adminurl/posts_search.php?page=$uppercounter$add1'>$uppercounter</a>&nbsp;";
				$uppercounter++;
			}
			if($currentpage < $toppage) 
			{
				$pagelinks.="<a class='button-a gray' href='$adminurl/posts_search.php?page=$thenextpage$add1'>Next</a>&nbsp;";
				$pagelinks.="<a class='button-a gray' href='$adminurl/posts_search.php?page=$toppage$add1' title='last page'>Last</a>&nbsp;";
			};
		}
	}
	else
	{
		$error = "Sorry, no gags were found.";
	}
}

$queryc = "SELECT * FROM channels";
$executequeryc = $conn->execute($queryc);
$c =  $executequeryc->getarray();
STemplate::assign('channels',$c);

$main_menu = "2";
Stemplate::assign('main_menu',$main_menu);
STemplate::display("administrator/header.tpl");
STemplate::assign('beginning',$beginning);
STemplate::assign('ending',$ending);
STemplate::assign('pagelinks',$pagelinks);
STemplate::assign('total',$total+0);
STemplate::assign('posts',$results);
Stemplate::assign('error',$error);
Stemplate::assign('page',$page);
STemplate::display("administrator/posts_search.tpl");
STemplate::display("administrator/footer.tpl");
?>