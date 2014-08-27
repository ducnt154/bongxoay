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
	$pid = intval($_REQUEST['pid']);
	if($pid > 0)
	{
		$query = "select PID from posts where USERID='".mysql_real_escape_string($SID)."' AND PID='".mysql_real_escape_string($pid)."' and active='1' limit 1"; 
		$executequery = $conn->execute($query);
		$DID = intval($executequery->fields['PID']);
		if($DID > 0)
		{
			delete_post($DID);
		}
		$query="SELECT PID FROM posts WHERE active='1' order by rand() limit 1";
		$executequery=$conn->execute($query);
		$PID = intval($executequery->fields['PID']);
		if($PID > 0)
		{
			header("Location:$config[baseurl]".$config[postfolder].$PID."/");exit;
		}
		else
		{
			header("Location:$config[baseurl]/");exit;
		}
	}
	else
	{
		header("Location:$config[baseurl]/");exit;
	}
}
else
{
	header("Location:$config[baseurl]/login");exit;
}
?>