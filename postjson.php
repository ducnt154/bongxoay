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

$view = $_REQUEST['view'];
$sview = $_SESSION['viewtype'];
$page = intval($_REQUEST['page']);
$CID = $_REQUEST['cid'];


if($page==""){$page = "1";}
$currentpage = $page;
if ($page >=2){$pagingstart = ($page-1)*$config['items_per_page'];}
else{$pagingstart = "0";}

if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
    $pro = 'https';
} else {
    $pro = 'http';
}
$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
$current_url =  $pro."://".$_SERVER['SERVER_NAME'].$port.$_SERVER['REQUEST_URI'];

if(preg_match('/channels=0/',$current_url)){
    $query1 = "SELECT count(*) as total from posts A, members B where A.active='1' AND A.USERID=B.USERID AND A.phase>'0' order by A.PID desc limit $config[maximum_results]";
    $query2 = "SELECT A.*, B.username from posts A, members B where A.active='1' AND A.USERID=B.USERID AND A.phase>'0' order by A.PID desc limit $pagingstart, $config[items_per_page]";

    $executequery1 = $conn->Execute($query1);
    $totalposts = $executequery1->fields['total'];

}
elseif(preg_match('/channels=1/',$current_url)){
    $where = "A.CID=".$CID;
    $query1 = "SELECT count(*) as total from posts A, members B where A.active='1' AND A.USERID=B.USERID AND $where order by A.PID desc limit $config[maximum_results]";
    $query2 = "SELECT A.*, B.username from posts A, members B where A.active='1' AND A.USERID=B.USERID AND $where order by A.PID desc limit $pagingstart, $config[items_per_page]";

    $executequery1 = $conn->Execute($query1);
    $totalposts = $executequery1->fields['total'];
}
elseif(preg_match('/video-bong-da/',$current_url)){

    $query1 = "SELECT count(*) as total FROM posts A, members B WHERE A.phase ='2' AND A.USERID=B.USERID AND A.active='1' AND A.youtube_key!='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY time_added desc limit 10";
    $query2 = "SELECT A.*, B.username from posts A, members B WHERE A.phase ='2' AND A.USERID=B.USERID AND A.active='1' AND A.youtube_key!='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY time_added desc limit 10";
    $executequery1 = $conn->Execute($query1);
    $totalposts = $executequery1->fields['total'];
}
if ($totalposts > 0)
{
    $executequery2 = $conn->Execute($query2);
    $posts = $executequery2->getarray();
    $posts = gif_detector($posts);
    $posts = title_emotion_detector($posts);
    $a = array();
    foreach($posts as $postss){
        array_push($a,array("PID"=>$postss['PID'],"USERID"=>$postss['USERID'],"story"=>$postss['story'],"CID"=>$postss['CID'],"username"=>$postss['username'],"story"=>$postss['story'],"pic"=>$postss['pic'],"url"=>$postss['url'],"youtube_key"=>$postss['youtube_key'],"time_added"=>$postss['time_added']));
    }

    $posts1 = json_encode($a);
    echo($posts1);
}
?>