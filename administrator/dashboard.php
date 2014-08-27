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

function insert_get_total_v1($var)
{
        global $conn;
        $query="SELECT count(*) as total FROM posts WHERE active='0'";
        $executequery=$conn->execute($query);
        $t = $executequery->fields[total];
		echo $t+0;
}

function insert_get_total_v2($var)
{
        global $conn;
        $query="SELECT count(*) as total FROM posts_reports";
        $executequery=$conn->execute($query);
        $t = $executequery->fields[total];
		echo $t+0;
}

function insert_get_total_v4($var)
{
        global $conn;
		$week = time() - (7 * 24 * 60 * 60);
        $query="SELECT count(*) as total FROM posts WHERE time_added>='$week'";
        $executequery=$conn->execute($query);
        $t = $executequery->fields[total];
		echo $t+0;
}

function insert_get_total_v5($var)
{
        global $conn;
        $query="SELECT count(*) as total FROM posts";
        $executequery=$conn->execute($query);
        $t = $executequery->fields[total];
		echo $t+0;
}

function insert_get_total_com($var)
{
        global $conn;
        $query="SELECT count(*) as total FROM $var[table]";
        $executequery=$conn->execute($query);
        $t = $executequery->fields[total];
		echo $t+0;
}

function insert_get_total_m3($var)
{
        global $conn;
        $query="SELECT count(*) as total FROM members";
        $executequery=$conn->execute($query);
        $t = $executequery->fields[total];
		echo $t+0;
}

$query2 = "select USERID,username,email,profilepicture from members order by USERID desc limit 10";
$executequery2 = $conn->Execute($query2);	
$results = $executequery2->getrows();
STemplate::assign('users',$results);

$query2 = "select pic from posts WHERE pic!='' order by PID desc limit 24";
$executequery2 = $conn->Execute($query2);	
$posts = $executequery2->getrows();
STemplate::assign('posts',$posts);

$main_menu = "1";
Stemplate::assign('main_menu',$main_menu);
Stemplate::assign('error',$error);
STemplate::display("administrator/header.tpl");
STemplate::display("administrator/dashboard.tpl");
STemplate::display("administrator/footer.tpl");
?>