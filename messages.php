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

$uname = cleanit($_REQUEST['uname']);
if($uname != "")
{
	STemplate::assign('uname',$uname);
	$queryp = "select USERID, username, country, description, color1, color2, website from members where username='".mysql_real_escape_string($uname)."' AND status='1'"; 
	$resultsp=$conn->execute($queryp);
	$p = $resultsp->getrows();
	STemplate::assign('p',$p[0]);
	$USERID = intval($p[0]['USERID']);

	if($USERID > 0)
	{
		STemplate::assign('pagetitle',$uname." ".$lang['194']);

		$query1 = "SELECT count(*) as total from posts A, members B where A.active='1' AND A.USERID=B.USERID AND A.USERID='".mysql_real_escape_string($USERID)."' order by A.PID desc limit  $config[maximum_results]";
		$executequery1 = $conn->Execute($query1);
		$totalposts = $executequery1->fields['total'];
		
		$query2 = "SELECT count(*) as total from posts A, members B, posts_favorited C where A.active='1' AND A.USERID=B.USERID AND C.USERID='".mysql_real_escape_string($USERID)."' AND C.PID=A.PID order by C.FID desc limit  $config[maximum_results]";
		$executequery2 = $conn->Execute($query2);
		$totallikes = $executequery2->fields['total'];
		STemplate::assign('totallikes',$totallikes);
		STemplate::assign('totalposts',$totalposts);
	
		$template= 'messages.tpl';
	}
	else
	{
		$template = 'empty.tpl';
	}
}
else
{
	$template = 'empty.tpl';
}

if ($config['channels'] == 1)
{
$cats = loadallchannels();
STemplate::assign('allchannels',$cats);

$c = loadtopchannels($cats);
STemplate::assign('c',$c);
}

$_SESSION['location'] = "/user/".$uname."/messages?page=".$page;

//TEMPLATES BEGIN
STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display($template);
STemplate::display('footer.tpl');
//TEMPLATES END
?>