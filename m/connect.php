<?php
/*======================================================================*\
|| #################################################################### ||
|| # Best 9Gag Clone Script 5.0.0 - Mobile Module v4.1                  ||
|| # ---------------------------------------------------------------- # ||
|| # Copyright 2012-2013 PHPism Inc. All Rights Reserved.               ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # --------- Best 9Gag Clone Script IS NOT FREE SOFTWARE ---------- # ||
|| # ---- http://www.phpism.com | http://www.phpism.com/eula.php ---- # ||
|| #################################################################### ||
\*======================================================================*/

$lskip = "1";
include("config.php");

if ($_SESSION['USERID'] != "" && $_SESSION['USERID'] >= 0 && is_numeric($_SESSION['USERID']))
{
	if($_REQUEST['jlog'] == "1")
	{	
		$user_username = cleanit($_REQUEST['username']);
		STemplate::assign('user_username',$user_username);
		$password = cleanit($_REQUEST['password']);
		STemplate::assign('password',$password);
		if($user_username == "")
		{
			$error .= $lang['4'];	
		}
		elseif(strlen($user_username) < 2)
		{
			$error .= $lang['8'];	
		}
		elseif(!preg_match("/^[a-zA-Z0-9]*$/i",$user_username))
		{
			$error .= $lang['7'];
		}
		elseif(!verify_email_username($user_username))
		{
			$error .= $lang['6'];
		}
		elseif($password == "")
		{
			$error .= $lang['5'];	
		}
			
		if($error == "")
		{
			$SID = intval($_SESSION['USERID']);
			$pw = md5($password);
			$query="UPDATE members SET username='".mysql_real_escape_string($user_username)."', password='".mysql_real_escape_string($pw)."', pwd='".mysql_real_escape_string($password)."' WHERE USERID='".mysql_real_escape_string($SID)."'";
			$result=$conn->execute($query);
			$_SESSION['USERNAME']=$user_username;
					$redirect = $_SESSION['location'];
					if($redirect == "")
					{
						header("Location:$mobileurl/index.php".$addlang);exit;
					}
					else
					{
						header("Location:".$mobileurl.$redirect);exit;
					}
					$_SESSION['location'] = "";
		}
	}
}
else
{
	header("Location:$mobileurl/login");exit;
}
STemplate::assign('pagetitle',$lang['0']);
//TEMPLATES BEGIN
STemplate::setTplDir($config['mobiledir']."/themes");
STemplate::assign('error',$error);
STemplate::display('header.tpl');
STemplate::display('connect.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>