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

if($_POST['submitform'] == "1")
{
	$arr = array(
	"site_name",
	"website_name",
	"site_email",
	"contact_email",
	"approve_stories",
	"mno",
	"mtrend",
	"myes",
	"quota",
	"vupload",
	"NSFWADS",
	);
	foreach ($arr as $value)
	{
		if($demo_mode != 1)
		{
		$sql = "update config set value='".mysql_real_escape_string($_POST[$value])."' where setting='$value'";
		$conn->execute($sql);
		}
		Stemplate::assign($value,strip_mq_gpc($_POST[$value]));
	}
	$message = "General Settings Successfully Saved.";
	Stemplate::assign('message',$message);
}

$main_menu = "1";
Stemplate::assign('main_menu',$main_menu);
STemplate::display("administrator/header.tpl");
STemplate::display("administrator/settings_general.tpl");
STemplate::display("administrator/footer.tpl");
?>