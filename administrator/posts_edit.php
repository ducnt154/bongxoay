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

$PID = intval($_REQUEST['PID']);

if($_POST['submitform'] == "1")
{
   $convertdate =  strtotime($_POST['time_added']);

	if($PID > 0)
	{
		$query="SELECT favclicks, unfavclicks, phase FROM posts WHERE PID='".mysql_real_escape_string($PID)."'";
		$executequery=$conn->execute($query);
		$favclicks = intval($executequery->fields['favclicks']);
		$unfavclicks = intval($executequery->fields['unfavclicks']);
		$phase = $executequery->fields['phase'];
		$total = $favclicks - $unfavclicks;
		if($favclicks != $_POST['favclicks'] || $unfavclicks != $_POST['unfavclicks'] || $phase != $_POST['phase'])
		{
			$total_clicks = intval($_POST['favclicks']) - intval($_POST['unfavclicks']);
			$myes = $config['myes'];
			$mno = $config['mno'];
			$mtrend = $config['mtrend'];
			if($phase == $_POST['phase'])
			{
				if($total_clicks < 0 && abs($total_clicks) > $mno)
				{
					$error = "The total of Likes and Dislikes will cause the post deletion.";
					Stemplate::assign('error',$error);
				}
				elseif($total_clicks < $myes && $total_clicks >= $mtrend){$query="UPDATE posts SET phase='1', favclicks='".mysql_real_escape_string($_POST['favclicks'])."', unfavclicks='".mysql_real_escape_string($_POST['unfavclicks'])."' WHERE PID='".mysql_real_escape_string($PID)."'";}
				elseif($total_clicks < $mtrend){$query="UPDATE posts SET phase='0', favclicks='".mysql_real_escape_string($_POST['favclicks'])."', unfavclicks='".mysql_real_escape_string($_POST['unfavclicks'])."' WHERE PID='".mysql_real_escape_string($PID)."'";}
				elseif($total_clicks >= $myes){$query="UPDATE posts SET phase='2', favclicks='".mysql_real_escape_string($_POST['favclicks'])."', unfavclicks='".mysql_real_escape_string($_POST['unfavclicks'])."' WHERE PID='".mysql_real_escape_string($PID)."'";}
				if($error == "" && $demo_mode != 1){$result=$conn->execute($query);}
			}
			else
			{
				if($_POST['phase'] == 0 && $total > $mtrend){$favclicks = $mtrend + $unfavclicks - intval($mtrend/4);}
				elseif($_POST['phase'] == 1 && $total > $myes){$favclicks = $mtrend + $unfavclicks + intval($mtrend/4);}
				elseif($_POST['phase'] == 1 && $total < $mtrend){$favclicks = $mtrend + $unfavclicks + intval($mtrend/4);}
				elseif($_POST['phase'] == 2 && $total < $mtrend){$favclicks = $myes + $unfavclicks + intval($myes/4);}
				elseif($_POST['phase'] == 2 && $total < $myes){$favclicks = $myes + $unfavclicks + intval($myes/4);}
				$query="UPDATE posts SET phase='".mysql_real_escape_string($_POST['phase'])."', favclicks='".mysql_real_escape_string($favclicks)."', unfavclicks='".mysql_real_escape_string($unfavclicks)."' WHERE PID='".mysql_real_escape_string($PID)."'";
				if($demo_mode != 1){$result=$conn->execute($query);}
			}
		}
		$arr = array("story", "tags","time_added", "source", "CID", "nsfw", "active");
		if($demo_mode != 1)
		{
			foreach ($arr as $value)
			{
				$sql = "update posts set $value='".mysql_real_escape_string($_POST[$value])."',time_added = '".$convertdate."'  where PID='".mysql_real_escape_string($PID)."'";
				$conn->execute($sql);
			}
		}
		$message = "Gag Successfully Edited.";
		Stemplate::assign('message',$message);
	}
}

if($PID > 0)
{
	$queryc = "SELECT * FROM channels";
	$executequeryc = $conn->execute($queryc);
	$c =  $executequeryc->getarray();
	STemplate::assign('channels',$c);
	
	$query = $conn->execute("select A.*, B.username from posts A, members B where A.PID='".mysql_real_escape_string($PID)."' AND A.USERID=B.USERID limit 1");
	$post = $query->getrows();
    foreach($post as $posts){

    }
    $datetime = date( 'Y-m-d H:i:s',$posts['time_added']);
    Stemplate::assign('datetime', $datetime);
	Stemplate::assign('post', $post[0]);
}

$main_menu = "2";
Stemplate::assign('main_menu',$main_menu);
STemplate::display("administrator/header.tpl");
STemplate::display("administrator/posts_edit.tpl");
STemplate::display("administrator/footer.tpl");
?>