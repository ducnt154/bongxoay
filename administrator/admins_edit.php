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

$ADMINID = intval($_REQUEST[ID]);

if($_POST['submitform'] == "1")
{
	$username = $_POST[username];
	$password = $_POST[password];
	$email = $_POST[email];
	
	if($ADMINID > 0)
	{
		if($username == "")
		{
			$error = "Error: Please enter a username.";
		}
		elseif($email == "")
		{
			$error = "Error: Please enter a e-mail address.";
		}
		else
		{
			$sql="select count(*) as total from administrators WHERE username='".mysql_real_escape_string($username)."' AND ADMINID!='".mysql_real_escape_string($ADMINID)."'";
			$executequery = $conn->Execute($sql);
			$tadmins = $executequery->fields[total];
						
			if($tadmins == "0")
			{ 
				$sql="select count(*) as total from administrators WHERE email='".mysql_real_escape_string($email)."' AND ADMINID!='".mysql_real_escape_string($ADMINID)."'";
				$executequery = $conn->Execute($sql);
				$tadmins = $executequery->fields[total];
				
				if($tadmins == "0")
				{
					$addtosql = "";
					if ($password != "")
					{
						$newpassword = escape($password);
						$newpassword = md5($newpassword);
						$addtosql = ", password = '".mysql_real_escape_string($newpassword)."'"; 
					}
					if($demo_mode != 1)
					{					
						$sql = "UPDATE administrators set username='".mysql_real_escape_string($username)."', email='".mysql_real_escape_string($email)."' $addtosql WHERE ADMINID='".mysql_real_escape_string($ADMINID)."'";
						$conn->execute($sql);
					}
					$message = "Administrator Successfully Edited.";
					Stemplate::assign('message',$message);
					
					if($_SESSION['ADMINID'] == $ADMINID)
					{
						$_SESSION['ADMINUSERNAME'] = $username;
						
						if ($password != "")
						{
							$_SESSION['ADMINPASSWORD'] = $newpassword;
						}
					}
					
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
}

if($ADMINID > 0)
{
	$query = $conn->execute("select * from administrators where ADMINID='".mysql_real_escape_string($ADMINID)."' limit 1");
	$admin = $query->getrows();
	Stemplate::assign('user', $admin[0]);
}

$main_menu = "4";
Stemplate::assign('error',$error);
Stemplate::assign('main_menu',$main_menu);
STemplate::display("administrator/header.tpl");
STemplate::display("administrator/admins_edit.tpl");
STemplate::display("administrator/footer.tpl");
?>