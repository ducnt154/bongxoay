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

$pid = intval(cleanit($_REQUEST['pid']));
$reason = intval(cleanit($_REQUEST['number']));
$repost_link = cleanit($_REQUEST['repost_link']);

if($pid > 0 && $reason > 0)
{
	$query="INSERT INTO posts_reports SET PID='".mysql_real_escape_string($pid)."', reason='".mysql_real_escape_string($reason)."', time='".time()."', ip='".$_SERVER['REMOTE_ADDR']."'";
	$result=$conn->execute($query);
}
?>