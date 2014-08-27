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
	
$query="SELECT PID, story FROM posts WHERE active='1' order by rand() limit 1";
$executequery=$conn->execute($query);
$PID = intval($executequery->fields['PID']);
$story = makeseo($executequery->fields['story']);
if($PID > 0)
{
	header("Location:$config[mobileurl]".$config[postfolder].$PID."/".$story.".html");exit;
}
else
{
	header("Location:$config[mobileurl]/");exit;
}
?>