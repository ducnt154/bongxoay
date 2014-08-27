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
if ($config['channels'] == 1)
{
    $catsjson = loadallchannelsjson();
    $c = loadtopchannels($cats);
    $catsjson = gif_detector($catsjson);
    $catsjson = title_emotion_detector($catsjson);
    $channels = array();
    foreach($catsjson as $catsjsons){
        array_push($channels,array("CID"=>$catsjsons['CID'],"cname"=>$catsjsons['cname'],"icon"=>$catsjsons['icon']));
    }
    $posts = gif_detector($posts);
    $posts = title_emotion_detector($posts);
    $channels = json_encode($channels);
    echo $channels;
}


?>