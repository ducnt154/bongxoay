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
	$cname = $_POST[cname];
	if($cname == "")
	{
		$error = "Error: Please enter a channel name.";
	}
	else
	{
		if($demo_mode != 1)
		{
			$sql = "INSERT channels SET cname='".mysql_real_escape_string($cname)."'";
			$conn->execute($sql);
		}
		$message = "Channel Successfully Added.";
		Stemplate::assign('message',$message);
	}
}

$main_menu = "2";
Stemplate::assign('main_menu',$main_menu);
Stemplate::assign('error',$error);
STemplate::display("administrator/header.tpl");
STemplate::display("administrator/posts_channels_new.tpl");
STemplate::display("administrator/footer.tpl");
?>