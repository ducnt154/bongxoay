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

include("config.php");

$SID = $_SESSION['USERID'];
if ($SID != "" && $SID >= 0 && is_numeric($SID))
{	
	$SID = intval($_SESSION['USERID']);
	$o = intval(cleanit($_REQUEST['o']));

	if($SID > 0)
	{
		if($o == "1" && $_SESSION['FILTER'] != "1")
		{
			$query = "UPDATE members SET filter='1' WHERE USERID='".mysql_real_escape_string($SID)."' limit 1"; 
			$executequery = $conn->execute($query);
			$_SESSION['FILTER'] = 1;
		}
		elseif($o == "0" && $_SESSION['FILTER'] != "0")
		{
			$query = "UPDATE members SET filter='0' WHERE USERID='".mysql_real_escape_string($SID)."' limit 1"; 
			$executequery = $conn->execute($query);
			$_SESSION['FILTER'] = 0;
		}
	}
	$goto = $_SESSION['location'];
	header("Location:$mobileurl".$goto);exit;
}
else
{
	header("Location:$mobileurl/login");exit;
}
?>