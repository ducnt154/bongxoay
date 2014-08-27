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
		
$query = "SELECT * FROM posts WHERE active='1' AND nsfw='0' AND pic!='' order by rand() limit 1";
$executequery = $conn->execute($query);
$parray = $executequery->getarray();
STemplate::assign('p',$parray[0]);	
$USERID = $parray[0]['USERID'];
$PID = $parray[0]['PID'];
if($PID > 0)
{
	STemplate::assign('pagetitle',stripslashes($parray[0]['story']));
	update_last_viewed($PID);
	update_your_viewed($USERID);
	if (session_verification())
	{
		$SID = $_SESSION['USERID'];
		update_you_viewed($SID);
	}
	
	$query="SELECT PID, story FROM posts WHERE PID!='".mysql_real_escape_string($pid)."' AND PID>'".mysql_real_escape_string($pid)."' AND active='1' order by PID asc limit 1";
	$executequery=$conn->execute($query);
	$next = $executequery->fields['PID'];
	$nextstory = $executequery->fields['story'];
	STemplate::assign('next',$next);
	STemplate::assign('nextstory',$nextstory);
	$query="SELECT PID, story FROM posts WHERE PID!='".mysql_real_escape_string($pid)."' AND PID<'".mysql_real_escape_string($pid)."' AND active='1' order by PID desc limit 1";
	$executequery=$conn->execute($query);
	$prev = $executequery->fields['PID'];
	$prevstory = $executequery->fields['story'];
	STemplate::assign('prev',$prev);
	STemplate::assign('prevstory',$prevstory);
}

//TEMPLATES BEGIN
STemplate::display('fast.tpl');
//TEMPLATES END
?>