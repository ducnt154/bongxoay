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
	$username = $_POST[username];
	$password = $_POST[password];
	$email = $_POST[email];
	
	if($username == "")
	{
		$error = "Error: Please enter a username.";
	}
	elseif($password == "")
	{
		$error = "Error: Please enter a password.";
	}
	elseif($email == "")
	{
		$error = "Error: Please enter a e-mail address.";
	}
	else
	{
		$sql="select count(*) as total from administrators WHERE username='".mysql_real_escape_string($username)."'";
		$executequery = $conn->Execute($sql);
		$tadmins = $executequery->fields[total];
		
		if($tadmins == "0")
		{ 
			$sql="select count(*) as total from administrators WHERE email='".mysql_real_escape_string($email)."'";
			$executequery = $conn->Execute($sql);
			$tadmins = $executequery->fields[total];
			
			if($tadmins == "0")
			{
				if($demo_mode != 1)
				{
					$sql = "insert administrators set username='".mysql_real_escape_string($username)."', password='".md5($password)."', email='".mysql_real_escape_string($email)."'";
					$conn->execute($sql);
				}
				$message = "Administrator Successfully Added.";
				Stemplate::assign('message',$message);
			}
			else
			{
				$error = "Error: The e-mail address $email is already taken.";
			}
		}
		else
		{
			$error = "Error: The username $username is already taken.";
		}
	}
}

$main_menu = "4";
Stemplate::assign('error',$error);
Stemplate::assign('main_menu',$main_menu);
STemplate::display("administrator/header.tpl");
STemplate::display("administrator/admins_new.tpl");
STemplate::display("administrator/footer.tpl");
?>