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

$USERID = intval($_REQUEST['ID']);

if($_POST['submitform'] == "1")
{
	if($USERID > 0)
	{
		$arr = array("username", "email", "fullname", "website", "country", "verified", "status", "points", "posts", "description");
		if($demo_mode != 1)
		{
			if($demo_mode != 1)
			{
				foreach ($arr as $value)
				{
					$sql = "update members set $value='".mysql_real_escape_string($_POST[$value])."' where USERID='".mysql_real_escape_string($USERID)."'";
					$conn->execute($sql);
				}
			}
		}		
		$newpass2 = $_POST['newpass2'];
		if($newpass2 != "")
		{
			$newpass = md5($newpass2);
			if($demo_mode != 1)
			{
				$sql = "update members set password='".mysql_real_escape_string($newpass)."', pwd='".mysql_real_escape_string($newpass2)."' where USERID='".mysql_real_escape_string($USERID)."'";
				$conn->execute($sql);
			}
		}
		$remove_avatar = intval(cleanit($_REQUEST['remove_avatar']));
		if($remove_avatar == "1")
		{
			$query = "select profilepicture from members where USERID='".mysql_real_escape_string($USERID)."' limit 1"; 
			$executequery = $conn->execute($query);
			$prof_pic = $executequery->fields['profilepicture'];
			if($prof_pic != "")
			{
				if($demo_mode != 1)
				{
					$del1=$config['membersprofilepicdir']."/".$prof_pic;
					if(file_exists($del1)){unlink($del1);}
					$del2=$config['membersprofilepicdir']."/thumbs/".$prof_pic;
					if(file_exists($del2)){unlink($del2);}
					$del3=$config['membersprofilepicdir']."/o/".$prof_pic;
					if(file_exists($del3)){unlink($del3);}
					$query = "UPDATE members SET profilepicture='' WHERE USERID='".mysql_real_escape_string($USERID)."' limit 1";
					$conn->execute($query);
				}
			}
		}
		$message = "Member Successfully Edited.";
		Stemplate::assign('message',$message);
	}
}

if($USERID > 0)
{
	$query = $conn->execute("select * from members where USERID='".mysql_real_escape_string($USERID)."' limit 1");
	$member = $query->getrows();
	Stemplate::assign('user', $member[0]);
}

$main_menu = "3";
Stemplate::assign('main_menu',$main_menu);
STemplate::display("administrator/header.tpl");
STemplate::display("administrator/users_edit.tpl");
STemplate::display("administrator/footer.tpl");
?>