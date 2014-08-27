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

$AID = intval($_REQUEST[AID]);

if($AID > 0)
{
	$query = $conn->execute("select * from advertisements where AID='".mysql_real_escape_string($AID)."' limit 1");
	$ad = $query->getrows();
	Stemplate::assign('ad', $ad[0]);
}
if($ad[0]['AID'] == "" || $AID < 0)
{
	$error = "Wrong Ads ID";
}

Stemplate::assign('error',$error);
STemplate::display("administrator/ads_preview.tpl");
?>