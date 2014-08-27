<?php
/*======================================================================*\
|| #################################################################### ||
|| # Best 9Gag Clone Script 5.2.0                                       ||
|| # ---------------------------------------------------------------- # ||
|| # Copyright 2012-2013 PHPism Inc. All Rights Reserved.               ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # --------- Best 9Gag Clone Script IS NOT FREE SOFTWARE ---------- # ||
|| # ---- http://www.phpism.com | http://www.phpism.com/eula.php ---- # ||
|| #################################################################### ||
\*======================================================================*/

include("include/include.php");

$SID = intval($_SESSION['USERID']);
if ($SID != "" && $SID >= 0 && is_numeric($SID))
{
	$query1 = "SELECT count(*) as total from notifications WHERE USERID='".$SID."' AND date_added>'".date('Y-m-d', strtotime(' -6 day'))."' ORDER BY NID";
	$query2 = "SELECT A.*, B.username, C.story, C.favclicks, C.unfavclicks from notifications A JOIN members B ON (A.LASTID=B.USERID) JOIN posts C ON (A.PID=C.PID) WHERE A.date_added>'".date('Y-m-d', strtotime(' -6 day'))."' AND A.USERID='".$SID."' order by A.NID desc";
	$executequery1 = $conn->Execute($query1);
	$totalposts = $executequery1->fields['total'];
	if ($totalposts > 0)
	{
		$executequery2 = $conn->Execute($query2);
		$results = $executequery2->getrows();
		$notifications = sort_notifications($results);
		STemplate::assign('notifications',$notifications);
	}
	else
	{
		STemplate::assign('notification_msg',"There are no notifications for you in the last 7 days");
	}
	$query3 = "UPDATE notifications SET new='0' WHERE USERID='".$SID."' AND new='1'";
	$executequery3 = $conn->Execute($query3);
	$_SESSION['NOTIFICATIONS'] = "0";
	$_SESSION['NTOTAL'] = "0";
}
else
{
	header("Location:$config[baseurl]/login");exit;
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

$_SESSION['location'] = "/notifications";

//TEMPLATES BEGIN
STemplate::assign('menu',4);
STemplate::display('header.tpl');
STemplate::display('notifications.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>