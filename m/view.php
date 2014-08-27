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

$pid = intval(cleanit($_REQUEST['pid']));
if (is_numeric($_REQUEST['pid']))
{
	$pid = $_REQUEST['pid'];
	STemplate::assign('pid',$pid);
}
else{$error = $errors['17'];}

if ($error == "")
{
	if (does_post_exist($pid))
	{		
		$query = "SELECT A.*, B.username FROM posts A, members B WHERE A.PID='".mysql_real_escape_string($pid)."' AND A.USERID=B.USERID";
       	$executequery = $conn->execute($query);
       	$parray = $executequery->getarray();
		$pos = strrpos($parray[0]['pic'],".");
		
		$pos = strrpos($parray[0]['pic'],".");
		$ph = strtolower(substr($parray[0]['pic'],$pos+1,strlen($parray[0]['pic'])-$pos));
		if($ph == "gif")
		{
			$parray[0]['gif'] = 1;
		}
		else
		{
			$parray[0]['gif'] = 0;
		}
		
		//add emotion to title 
		$parray[0]['title'] = title_emotion_detector_detail($parray[0]['story']);
		
		$ph = strtolower(substr($parray[0]['pic'],$pos+1,strlen($parray[0]['pic'])-$pos));
		if($ph == "gif"){$parray[0]['gif'] = 1;}
		else{$parray[0]['gif'] = 0;}
		STemplate::assign('p',$parray[0]);	
		$active = intval($parray[0]['active']);
		$videourl = trim($parray[0]['url']);
		$USERID = $parray[0]['USERID'];
		STemplate::assign('USERID',$USERID);
		$SID = $_SESSION['USERID'];
		if($SID != "" && $USERID != "")
		{
			if($SID == $USERID)
			{
				$owner = "1";
				STemplate::assign('owner', 1);
			}
		}
		if($active == "1" || $owner == "1")
		{
			STemplate::assign('pagetitle',stripslashes($parray[0]['story']));
			$PID = $parray[0]['PID'];
			STemplate::assign('PID',$PID);
			update_last_viewed($PID);
			update_your_viewed($USERID);
			if (session_verification()){update_you_viewed($SID);}
			
			if ( $config['recommended'] > 0)
			{
				$queryr = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY rand() desc limit 3";
				$executequeryr = $conn->execute($queryr);
				$r =  $executequeryr->getarray();
				STemplate::assign('suggested',$r);
			}

			$query="SELECT PID FROM posts WHERE PID!='".mysql_real_escape_string($pid)."' AND PID>'".mysql_real_escape_string($pid)."' AND active='1' order by PID asc limit 1";
        	$executequery=$conn->execute($query);
        	$next = $executequery->fields['PID'];
			STemplate::assign('next',$next);
			$query="SELECT PID FROM posts WHERE PID!='".mysql_real_escape_string($pid)."' AND PID<'".mysql_real_escape_string($pid)."' AND active='1' order by PID desc limit 1";
        	$executequery=$conn->execute($query);
        	$prev = $executequery->fields['PID'];
			STemplate::assign('prev',$prev);
		}
		else
		{
			$error = $errors['19'];
		}
	}	
	else
	{
		$error = $errors['18'];
	}
}
$_SESSION['location'] = $config[postfolder].$pid;

if ($config['channels'] == 1)
{
	$cats = loadallchannels();
	$c = loadtopchannels($cats);
	$date_month = date("d/m");
	STemplate::assign('date_month',$date_month);
	STemplate::assign('allchannels',$cats);
	STemplate::assign('c',$c);
}
//TEMPLATES BEGIN
STemplate::setTplDir($config['mobiledir']."/themes");
STemplate::display('header.tpl');
STemplate::display('view.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>