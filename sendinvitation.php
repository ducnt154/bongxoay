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

$csrf = cleanit($_REQUEST['csrf']);
$email = cleanit($_REQUEST['email']);

if($csrf == "1" && $email!= "")
{
	if(verify_valid_email($email))
	{
		$query="SELECT USERID,pwd,username,gender from members WHERE email='".mysql_real_escape_string($email)."'";
		$result=$conn->execute($query);
		if($result->recordcount()<1)
		{
			$pwd = generateCode(5).time();
			$pwd2 = md5($pwd);
			$query="INSERT INTO members SET email='".mysql_real_escape_string($email)."', password='".mysql_real_escape_string($pwd2)."', pwd='".mysql_real_escape_string($pwd)."', addtime='".time()."', ip='".$_SERVER['REMOTE_ADDR']."', lip='".$_SERVER['REMOTE_ADDR']."'";
			$result=$conn->execute($query);
			$UID = mysql_insert_id();
			if($UID > 0)
			{
				// Send E-Mail Begin
				$sendto = $email;
				$sendername = $config['site_name'];
				$from = $config['site_email'];
				$subject = $lang['38'];
				$sendmailbody = $lang['39'].",<br><br>";
				$sendmailbody .= $lang['40']." '$pwd' - without quotations <br><br>";
				$sendmailbody .= stripslashes($lang['41']).stripslashes($lang['42'])."<a href='".$config['baseurl']."/login'>".stripslashes($lang['43'])."</a><br><br>";
				$sendmailbody .= $lang['32'].",<br>".stripslashes($sendername);
				mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="");
				// Send E-Mail End
			}
		}
		else
		{
			$UID = intval($result->fields['USERID']);
			$un = $result->fields['username'];
			$pwd = $result->fields['pwd'];
			if($UID > 0)
			{
				// Send E-Mail Begin
				$sendto = $email;
				$sendername = $config['site_name'];
				$from = $config['site_email'];
				$subject = $lang['33'];
				$sendmailbody = stripslashes($un).",<br><br>";
				$sendmailbody .= $lang['34']."<br>";
				$sendmailbody .= $lang['35']." '$pwd'' - without quotations <br><br>";
				$sendmailbody .= $lang['32'].",<br>".stripslashes($sendername);
				mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="");
				// Send E-Mail End
			}
		}
	}
}
?>