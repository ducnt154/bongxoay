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
	$title[0] = $_POST[title1];
	$title[1] = $_POST[title2];
	$title[2] = $_POST[title3];
	$title[3] = $_POST[title4];
	$title[4] = $_POST[title5];
	$value[0] = $_POST[value1];
	$value[1] = $_POST[value2];
	$value[2] = $_POST[value3];
	$value[3] = $_POST[value4];
	$value[4] = $_POST[value5];
	if($demo_mode != 1)
	{
		for ($i = 0; $i < 5; $i++)
		{
			$j = $i + 1;
			$sql = "update static set title='".mysql_real_escape_string($title[$i])."', value='".mysql_real_escape_string($value[$i])."' where ID='".$j."'";
			$conn->execute($sql);
		}
	}
	$message = "Static Pages Are Successfully Saved.";
	Stemplate::assign('message',$message);
}

$query = $conn->execute("select * from static");
$statics = $query->getrows();
Stemplate::assign('statics', $statics);

$main_menu = "1";
Stemplate::assign('main_menu',$main_menu);
STemplate::display("administrator/header.tpl");
STemplate::display("administrator/settings_static.tpl");
STemplate::display("administrator/footer.tpl");
?>