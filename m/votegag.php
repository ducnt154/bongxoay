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

$love = cleanit($_REQUEST['l']);
$unlove = cleanit($_REQUEST['u']);
$pid = cleanit($_REQUEST['pid']);
$SID = intval($_SESSION['USERID']);
if(($SID > 0) && ($pid > 0))
{
	$query="SELECT favclicks, unfavclicks, USERID, phase FROM posts WHERE PID='".mysql_real_escape_string($pid)."'";
    $executequery=$conn->execute($query);
    $favclicks = intval($executequery->fields['favclicks']);
	$unfavclicks = intval($executequery->fields['unfavclicks']);
	$phase = $executequery->fields['phase'];
	$UID = $executequery->fields['USERID'];
	
	if($love == "1")
	{
		$query="SELECT count(*) as total FROM posts_unfavorited WHERE PID='".mysql_real_escape_string($pid)."' AND USERID='".mysql_real_escape_string($SID)."'";
		$executequery=$conn->execute($query);
		$unloved = intval($executequery->fields['total']);
		if($unloved > 0)
		{
			$query="INSERT INTO posts_favorited SET PID='".mysql_real_escape_string($pid)."', USERID='".mysql_real_escape_string($SID)."'";
			$result=$conn->execute($query);
			$query="UPDATE posts SET favclicks=favclicks+1, unfavclicks=unfavclicks-1 WHERE PID='".mysql_real_escape_string($pid)."'";
			$result=$conn->execute($query);
			$query="DELETE FROM posts_unfavorited WHERE PID='".mysql_real_escape_string($pid)."' AND USERID='".mysql_real_escape_string($SID)."'";
			$result=$conn->execute($query);
			$total_clicks= $favclicks + 2 - $unfavclicks;
		}
		else
		{
			$query="INSERT INTO posts_favorited SET PID='".mysql_real_escape_string($pid)."', USERID='".mysql_real_escape_string($SID)."'";
			$result=$conn->execute($query);
			$query="UPDATE posts SET favclicks=favclicks+1 WHERE PID='".mysql_real_escape_string($pid)."'";
			$result=$conn->execute($query);
			$total_clicks= $favclicks + 1 - $unfavclicks;
		}
		update_up_notifications($pid,$UID,$SID,1);
	}
	elseif($love == "-1")
	{
		$query="DELETE FROM posts_favorited WHERE PID='".mysql_real_escape_string($pid)."' AND USERID='".mysql_real_escape_string($SID)."'";
		$result=$conn->execute($query);
		$query="UPDATE posts SET favclicks=favclicks-1 WHERE PID='".mysql_real_escape_string($pid)."'";
		$result=$conn->execute($query);
		$total_clicks= $favclicks - 1 - $unfavclicks;
		update_up_notifications($pid,$UID,$SID,-1);
	}
	if($unlove == "1")
	{
		$query="SELECT count(*) as total FROM posts_favorited WHERE PID='".mysql_real_escape_string($pid)."' AND USERID='".mysql_real_escape_string($SID)."'";
		$executequery=$conn->execute($query);
		$loved = intval($executequery->fields['total']);
		if($loved > 0)
		{
			$query="INSERT INTO posts_unfavorited SET PID='".mysql_real_escape_string($pid)."', USERID='".mysql_real_escape_string($SID)."'";
			$result=$conn->execute($query);
			$query="UPDATE posts SET favclicks=favclicks-1, unfavclicks=unfavclicks+1 WHERE PID='".mysql_real_escape_string($pid)."'";
			$result=$conn->execute($query);
			$query="DELETE FROM posts_favorited WHERE PID='".mysql_real_escape_string($pid)."' AND USERID='".mysql_real_escape_string($SID)."'";
			$result=$conn->execute($query);
			$total_clicks= $favclicks - 2 - $unfavclicks;
		}
		else
		{
			$query="INSERT INTO posts_unfavorited SET PID='".mysql_real_escape_string($pid)."', USERID='".mysql_real_escape_string($SID)."'";
			$result=$conn->execute($query);
			$query="UPDATE posts SET unfavclicks=unfavclicks+1 WHERE PID='".mysql_real_escape_string($pid)."'";
			$result=$conn->execute($query);
			$total_clicks= $favclicks - 1 - $unfavclicks;
		}
		update_down_notifications($pid,$UID,$SID,1);
	}
	elseif($unlove == "-1")
	{
		$query="DELETE FROM posts_unfavorited WHERE PID='".mysql_real_escape_string($pid)."' AND USERID='".mysql_real_escape_string($SID)."'";
		$result=$conn->execute($query);
		$query="UPDATE posts SET unfavclicks=unfavclicks-1 WHERE PID='".mysql_real_escape_string($pid)."'";
		$result=$conn->execute($query);
		$total_clicks= $favclicks + 1 - $unfavclicks;
		update_down_notifications($pid,$UID,$SID,-1);
	}
	
	$myes = $config['myes'];
	$mno = $config['mno'];
	$mtrend = $config['mtrend'];
	if($phase == 0)
	{
		if($total_clicks >= $myes)
		{
			$query="UPDATE posts SET phase='1' WHERE PID='".mysql_real_escape_string($pid)."' AND phase='0'";
			$result=$conn->execute($query);
		}
		else
		{
			if($total_clicks < 0 && abs($total_clicks) > $mno)
			{
				delete_post($pid);
			}
		}
	}
	elseif($phase == 1)
	{
		if($total_clicks < $myes)
		{
			$query="UPDATE posts SET phase='0' WHERE PID='".mysql_real_escape_string($pid)."' AND phase='1'";
			$result=$conn->execute($query);
		}
		elseif($total_clicks >= $mtrend)
		{
			$query="UPDATE posts SET phase='2' WHERE PID='".mysql_real_escape_string($pid)."' AND phase='1'";
			$result=$conn->execute($query);
		}
	}
	elseif($total_clicks < $mtrend)
	{
		$query="UPDATE posts SET phase='1' WHERE PID='".mysql_real_escape_string($pid)."' AND phase='2'";
		$result=$conn->execute($query);
	}
	echo intval($total_clicks);
}
?>