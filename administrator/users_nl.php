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
$page = intval($_REQUEST['page']);
$security = $_REQUEST['security'];
if($security == ""){$security = "Temp";}
if($_POST['submitform'] == "1" || $security == $_SESSION['security'])
{
	if($_POST['title'] != "" && $_SESSION['nl_title'] == ""){$_SESSION['nl_title'] = $_POST['title'];}
	if($_POST['body'] != "" && $_SESSION['nl_body'] == ""){$_SESSION['nl_body'] = $_POST['body'];}
	if($_SESSION['nl_title'] == ""){$error .= "You can't send empty message subject. ";}
	if($_SESSION['nl_body'] == ""){$error .= "You can't send empty message body";}
	if($error == "")
	{
		if($page==""){$page = "1";}
		$currentpage = $page;
		if ($page >=2){$pagingstart = ($page-1)*30;}
		else{$pagingstart = "0";}
		
		$queryselected = "select USERID from members limit $config[maximum_results]";
		$query2 = "select email from members limit $pagingstart,30";
		$executequeryselected = $conn->Execute($queryselected);
		$totalposts = $executequeryselected->rowcount();	
		if ($totalposts > 0)
		{
			$executequery2 = $conn->Execute($query2);	
			$members = $executequery2->getrows();
			$mcount = count($members);
			if($demo_mode != 1)
			{
				for ($i = 0; $i < $mcount; $i++)
				{
					// Send E-Mail Begin
					$sendto = $members['email'];
					$sendername = $config['site_name'];
					$from = $config['site_email'];
					$subject = $_SESSION['nl_title'];
					$sendmailbody = $_SESSION['nl_body'] ;
					mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="");
					// Send E-Mail End
				}
			}
			$_SESSION['security'] = generateCode(5).time();
			$currentmembers = $currentpage * 30;
			if($totalposts > $currentmembers){$nextpage = intval($page) + 1;}
			else{$nextpage = "end";}
			if($nextpage > 0)
			{
				$remaining = intval($totalposts) - intval($currentmembers);
				$message = "We have sent ".$currentmembers." emails. There's still ".$remaining." more.";
				$message2 = "Don't hit refresh the page. You'll be automatically redirected in 30 seconds.";
				Stemplate::assign('nextpage',$nextpage);
				Stemplate::assign('no_form',1);
			}
			elseif($nextpage == "end")
			{
				$message = "News letter has been sent successfully.";
				$_SESSION['security'] = "";
			}
		}
	}
}


$main_menu = "3";
Stemplate::assign('main_menu',$main_menu);
Stemplate::assign('message',$message);
Stemplate::assign('message2',$message2);
Stemplate::assign('error',$error);
STemplate::display("administrator/header.tpl");
STemplate::display("administrator/users_nl.tpl");
STemplate::display("administrator/footer.tpl");
?>