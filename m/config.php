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

$mobile = "1";
$config['maindir'] = '/var/www/html/bongxoay';
$config['mobiledir'] = '/var/www/html/bongxoay/m';
$config['mobileurl'] = 'http://m.bongxoay.com';
$mobileurl = $config['mobileurl'];
$maindir = $config['maindir'];
include($maindir."/include/config.php");
include($maindir."/include/functions/import.php");
STemplate::assign('mobileurl',$mobileurl);
function insert_return_youtube_mobile($a)
{
    $embedcode = '<object width="300"><param name="movie" value="http://www.youtube.com/v/AWECDE&hl=en&fs=1"></param><param name="allowFullScreen" value="true"></param><param name="wmode" value="opaque" /></param><embed src="http://www.youtube.com/v/AWECDE&hl=en&fs=1" type="application/x-shockwave-flash" allowfullscreen="true" width="300" wmode="opaque"></embed></object>';
	$item = $a[youtube];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}
function insert_return_fod_mobile($a)
{
    $embedcode = '<iframe src="http://www.funnyordie.com/embed/AWECDE" width="300" frameborder="0"></iframe>';
	$item = $a[fod];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}

function insert_return_vfy_mobile($a)
{
    $embedcode = '<iframe src="http://p.videofy.me/v/AWECDE" width="300" frameborder="0"></iframe>';
	$item = $a[vfy];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}

function insert_return_vmo_mobile($a)
{
    $embedcode = '<iframe src="http://player.vimeo.com/video/AWECDE" width="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
	$item = $a[vmo];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}
?>