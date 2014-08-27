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

include("include/include.php");

$redirect = $_SESSION['location'];
if($_SESSION['USERID'] != "")
{
	if($redirect != ""){header("Location:".$config[baseurl].$redirect);exit;}
	else{header("Location:".$config[baseurl]);exit;}
}

if($_REQUEST['logsub']!="")
{
	$username = cleanit($_REQUEST['username']);
	$password = cleanit($_REQUEST['password']);
	$user_email = cleanit($_REQUEST['email']);
	
	if($user_email == "")
	{
		if($username==""){$error=$errors['0'];}
		elseif($password==""){$error=$errors['4'];}
		else
		{
			if(!verify_valid_email($username))
			{				
				$encryptedpassword = md5($password);
				$query="SELECT status,USERID,email,username,verified,filter,mylang from members WHERE username='".mysql_real_escape_string($username)."' and password='".mysql_real_escape_string($encryptedpassword)."'";
				$result=$conn->execute($query);
				
				if($result->recordcount()<1){$error=$errors['13'];}
				elseif($result->fields['status']=="0"){$error = $errors['14'];}
		
				if($error=="")
				{
					$query="update members set lastlogin='".time()."', lip='".$_SERVER['REMOTE_ADDR']."' WHERE username='".mysql_real_escape_string($username)."'";
					$conn->execute($query);
					$_SESSION['USERID']=$result->fields['USERID'];
					$_SESSION['EMAIL']=$result->fields['email'];
					$_SESSION['USERNAME']=$result->fields['username'];
					$_SESSION['VERIFIED']=$result->fields['verified'];
					$_SESSION['FILTER']=$result->fields['filter'];
					$setlang = $result->fields['mylang'];
					if($setlang != ""){$addlang = "?language=".$setlang;}
					if($_REQUEST["rememberme"]){create_slrememberme();}
					
					$redirect = $_SESSION['location'];
					if($redirect == "")
					{
						if ( $config[regredirect] == 1){header("Location:$config[baseurl]/index.php".$addlang);exit;}
						else{header("Location:$config[baseurl]/settings".$addlang);exit;}
					}
					else{header("Location:".$config[baseurl].$redirect);exit;}
					$_SESSION['location'] = "";
				}
			}
			else
			{
				$encryptedpassword = md5($password);
				$query="SELECT status,USERID,email,username,verified,filter,mylang from members WHERE email='".mysql_real_escape_string($username)."' and password='".mysql_real_escape_string($encryptedpassword)."'";
				$result=$conn->execute($query);
				
				if($result->recordcount()<1){$error=$errors['15'];}
				elseif($result->fields['status']=="0"){$error = $errors['14'];}
		
				if($error=="")
				{
					$query="update members set lastlogin='".time()."', lip='".$_SERVER['REMOTE_ADDR']."' WHERE username='".mysql_real_escape_string($username)."'";
					$conn->execute($query);
					$_SESSION['USERID']=$result->fields['USERID'];
					$_SESSION['EMAIL']=$result->fields['email'];
					$_SESSION['USERNAME']=$result->fields['username'];
					$_SESSION['VERIFIED']=$result->fields['verified'];
					$_SESSION['FILTER']=$result->fields['filter'];
					$setlang = $result->fields['mylang'];
					if($setlang != ""){$addlang = "?language=".$setlang;}
					if($_REQUEST["rememberme"]){create_slrememberme();}
					
					$redirect = $_SESSION['location'];
					if($redirect == "")
					{
						if ( $config[regredirect] == 1){header("Location:$config[baseurl]/index.php".$addlang);exit;}
						else{header("Location:$config[baseurl]/settings".$addlang);exit;}
					}
					else{header("Location:".$config[baseurl].$redirect);exit;}
					$_SESSION['location'] = "";
				}
			}
		}
	}
	else
	{
		$query="SELECT USERID,username,pwd FROM members WHERE email='".mysql_real_escape_string($user_email)."'";
		$result=$conn->execute($query);
		$UID = intval($result->fields['USERID']);
		$pwd = $result->fields['pwd'];
		$un = $result->fields['username'];
		
		if($UID > 0)
		{
			// Send E-Mail Begin
			$sendto = $user_email;
			$sendername = $config['site_name'];
			$from = $config['site_email'];
			$subject = $lang['33'];
			$sendmailbody = stripslashes($un).",<br><br>";
			$sendmailbody .= $lang['34']."<br>";
			$sendmailbody .= $lang['35']." $pwd <br><br>";
			$sendmailbody .= $lang['32'].",<br>".stripslashes($sendername);
			mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="");
			// Send E-Mail End
			$error .= $errors['16']; 	
		}
	}
}

//TEMPLATES BEGIN
STemplate::assign('pagetitle',$titles['6']);
STemplate::assign('error',$error);
STemplate::display('login.tpl');
//TEMPLATES END
?>