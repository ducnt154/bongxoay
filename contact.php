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

if($_REQUEST['msgsub'] == "1")
{
	$topic = cleanit($_REQUEST['topic']);
	$subject = cleanit($_REQUEST['subject']);
	$msg = cleanit($_REQUEST['msg']);
	$name = cleanit($_REQUEST['name']);
	$email = cleanit($_REQUEST['email']);
	$username = cleanit($_REQUEST['username']);
	$os = cleanit($_REQUEST['os']);
	$imagecode = cleanit($_REQUEST['imagecode']);
	STemplate::assign('topic',$topic);
	STemplate::assign('subject',$subject);
	STemplate::assign('msg',$msg);
	STemplate::assign('name',$name);
	STemplate::assign('email',$email);
	STemplate::assign('username',$username);
	STemplate::assign('os',$os);
	
	if($topic == ""){$error = $errors['5'];}
	elseif($subject == ""){$error = $errors['6'];}
	elseif($msg == ""){$error = $errors['7'];}
	elseif($name == ""){$error = $errors['8'];}
	elseif($email == ""){$error = $errors['9'];}
	elseif(!verify_valid_email($email)){$error = $errors['10'];}
	elseif($imagecode != $_SESSION['imagecode']){$error = $errors['11'];}
	else
	{
		// Send E-Mail Begin
		$sendto = $config['site_email'];
		$sendername = $config['site_name'];
		$from = $config['site_email'];
		$sub = $lang['249'];
		$sendmailbody = $lang['250'].",<br><br>";
		$sendmailbody .= $lang['227'].": ".$topic." <br><br>";
		$sendmailbody .= $lang['233'].": ".$subject." <br><br>";
		$sendmailbody .= $lang['235'].": ".$msg." <br><br>";
		$sendmailbody .= $lang['237'].": ".$name." <br><br>";
		$sendmailbody .= $lang['238'].": ".$email." <br><br>";
		$sendmailbody .= $lang['1'].": ".$username." <br><br>";
		$sendmailbody .= $lang['240'].": ".$os." <br><br>";		
		$sendmailbody .= $lang['32'].",<br>".stripslashes($sendername);
		mailme($sendto,$sendername,$from,$sub,$sendmailbody,$bcc="");
		// Send E-Mail End
		$message = $lang['248'];
		STemplate::assign('topic',"");
		STemplate::assign('subject',"");
		STemplate::assign('msg',"");
		STemplate::assign('name',"");
		STemplate::assign('email',"");
		STemplate::assign('username',"");
		STemplate::assign('os',"");
	}
}

if ($config['channels'] == 1)
{
	$cats = loadallchannels();
	$c = loadtopchannels($cats);
	STemplate::assign('allchannels',$cats);
	STemplate::assign('c',$c);
}

$_SESSION['location'] = "/contact/";

//TEMPLATES BEGIN
STemplate::assign('pagetitle',$titles['2']);
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display('contact.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>