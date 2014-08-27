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

$lskip = "1";
include("include/include.php");

$SID = intval($_SESSION['USERID']);
if($SID > 0)
{
	if($_REQUEST['jlog'] == "1")
	{
		$user_username = cleanit($_REQUEST['username']);
		if($user_username == "")
		{
			$error .= $errors['0'];	
		}
		elseif(strlen($user_username) < 2)
		{
			$error .= $errors['1'];	
		}
		elseif(!preg_match("/^[a-zA-Z0-9]*$/i",$user_username))
		{
			$error .= $errors['2'];
		}
		elseif(!verify_email_username($user_username))
		{
			$error .= $errors['3'];
		}
		
		if($error == "")
		{
			$query="UPDATE members SET username='".mysql_real_escape_string($user_username)."' WHERE USERID='".mysql_real_escape_string($SID)."'";
			$result=$conn->execute($query);
			$_SESSION['USERNAME']=$user_username;
			$redirect = $_SESSION['location'];
			if($redirect == "")
			{
				if( $config[regredirect] == 1)
				{header("Location:$config[baseurl]/index.php".$addlang);exit;}
				else
				{header("Location:$config[baseurl]/settings".$addlang);exit;}
			}
			else
			{
				header("Location:".$config[baseurl].$redirect);exit;
			}
		}
	}
}

//TEMPLATES BEGIN
STemplate::assign('error',$error);
STemplate::display('selectusername.tpl');
//TEMPLATES END
?>