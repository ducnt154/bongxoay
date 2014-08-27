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

if ($_SESSION['ADMINID'] != "" && $_SESSION['ADMINUSERNAME'] != "" && $_SESSION['ADMINPASSWORD'] != "")
{
	$redirect = $config['adminurl']."/dashboard.php";
    header("location: $redirect");
}
else
{

if($_POST['login']!="")
{
	$adminusername = $_POST['username'];
	$adminpassword = $_POST['password'];
	if ($adminusername == "")
	{
     	$error = "Error: Username not entered.";
	}
	elseif ($adminpassword == "")
	{
     	$error = "Error: Password not entered.";
	}
	else
	{
		$encodedadminpassword = md5($adminpassword);
        $query="SELECT * FROM administrators WHERE username='".mysql_real_escape_string($adminusername)."' AND password='".mysql_real_escape_string($encodedadminpassword)."'";
        $executequery=$conn->execute($query);
		$getid = $executequery->fields[ADMINID];
        $getusername = $executequery->fields[username];
		$getpassword = $executequery->fields[password];

		if (is_numeric($getid) && $getusername != "" && $getpassword != "" && $getusername == $adminusername && $getpassword == $encodedadminpassword)
		{
        	$_SESSION['ADMINID'] = $getid;
        	$_SESSION['ADMINUSERNAME'] = $getusername;
			$_SESSION['ADMINPASSWORD'] = $encodedadminpassword;
			$redirect = $config['adminurl']."/dashboard.php";
        	header("location: $redirect");
		}
		else
		{
			$error = "Invalid username/password entered.";
		}
    }
}



STemplate::assign('message',$message);
STemplate::assign('error',$error);
STemplate::display('administrator/index.tpl');

}
?>