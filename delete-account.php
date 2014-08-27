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

$SID = $_SESSION['USERID'];
if ($SID != "" && $SID >= 0 && is_numeric($SID))
{	
	$SID = intval($_SESSION['USERID']);
	if($_POST['delsub'] == "1")
	{
		$password = cleanit($_REQUEST['password']);	
		if($password != "")
		{
			$mpassword = md5($password);
			$query = "select USERID from members where USERID='".mysql_real_escape_string($SID)."' AND password='".mysql_real_escape_string($mpassword)."' limit 1"; 
			$executequery = $conn->execute($query);
			$USERID = intval($executequery->fields['USERID']);
			if($USERID > 0)
			{
				delete_user($USERID);
				header("Location:$config[baseurl]/log_out");exit;
			}
			else
			{
				$error = $errors['12'];
			}
		}
		else
		{
			$error = $errors['4'];
		}
	}
}
else
{
	header("Location:$config[baseurl]/login");exit;
}

//TEMPLATES BEGIN
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display('delete-account.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>