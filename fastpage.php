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

$PID = intval($_POST['pid']);
$query="SELECT PID, story, pic FROM posts WHERE active='1' AND nsfw='0' AND pic!='' AND PID>".$PID." order by PID ASC limit 1";
$executequery=$conn->execute($query);
$PID = intval($executequery->fields['PID']);
$title = html_entity_decode(stripslashes($executequery->fields['story']), ENT_COMPAT, "UTF-8");
if ($PID == 0)
{
	$query="SELECT PID, story, pic FROM posts WHERE active='1' AND nsfw='0' AND pic!='' order by PID ASC limit 1";
	$executequery=$conn->execute($query);
	$PID = intval($executequery->fields['PID']);
	$title = html_entity_decode(stripslashes($executequery->fields['story']), ENT_COMPAT, "UTF-8");
}
if($config[SEO] == 1){$titleseo = makeseo($title).".html";}
else{$titleseo = "";}
$image = cleanit($executequery->fields['pic']);
		
$arr = array('PID' => $PID, 'title' => $title, 'titleseo' => $titleseo, 'image' => $image);
echo json_encode($arr);
?>