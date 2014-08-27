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

if($_POST['submitform'] == "1")
{
	$description = $_POST[description];
	$adcode = $_POST[adcode];
	$active = intval($_POST[active]);
	
	if($AID > 0)
	{
		if($description == "")
		{
			$error = "Error: Please enter a description.";
		}
		elseif($adcode == "")
		{
			$error = "Error: Please enter your advertisement code.";
		}
		else
		{
			if($demo_mode != 1)
			{
				$sql = "UPDATE advertisements set description='".mysql_real_escape_string($description)."', code='".mysql_real_escape_string($adcode)."', active='".mysql_real_escape_string($active)."' WHERE AID='".mysql_real_escape_string($AID)."'";
				$conn->execute($sql);
			}
			$message = "Advertisement Successfully Edited.";
			Stemplate::assign('message',$message);
		}
	}
}

if($AID > 0)
{
	$query = $conn->execute("select * from advertisements where AID='".mysql_real_escape_string($AID)."' limit 1");
	$ad = $query->getrows();
	Stemplate::assign('ad', $ad[0]);
}

$main_menu = "5";
Stemplate::assign('main_menu',$main_menu);
Stemplate::assign('error',$error);
STemplate::display("administrator/header.tpl");
STemplate::display("administrator/ads_edit.tpl");
STemplate::display("administrator/footer.tpl");
?>