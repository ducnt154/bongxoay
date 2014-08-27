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

$config['items_per_page'] = "12";
$q = cleanit($_REQUEST['query']);
$page = intval($_REQUEST['page']);
if($page==""){$page = "1";}
$currentpage = $page;
if ($page >=2){$pagingstart = ($page-1)*$config['items_per_page'];}
else{$pagingstart = "0";}

if($q != "")
{
	$sterm[] = $q;
	$sterm[0] = str_replace("'", "''", $sterm[0]);
	$sterm[0] = str_replace("  ", "", $sterm[0]);
	$sterm[0] = str_replace("-", "", $sterm[0]);
	$stermsplit = explode(" ",$sterm[0]);
	$stripapos = str_replace("'", "''", $searchterm);
	$stermstr = "";
	if (count($stermsplit)>=1) 
	{
		for($i=0;$i<count($stermsplit);$i++)
		{
			if ($stermsplit[$i] != "" && $stermsplit[$i] != "-" && $stermsplit[$i] != " ")
			{
				$stermstr.="AND (A.story like '%$stermsplit[$i]%' or A.tags like '%$stermsplit[$i]%') ";
			}
		}
	}
	$stermstr .= " ";
}

$query1 = "SELECT count(*) as total from posts A, members B where A.active='1' AND A.USERID=B.USERID $stermstr order by A.favclicks desc limit $config[maximum_results]";
$query2 = "SELECT A.*, B.username from posts A, members B where A.active='1' AND A.USERID=B.USERID $stermstr order by A.favclicks desc limit $pagingstart, $config[items_per_page]";
$executequery1 = $conn->Execute($query1);
$totalposts = $executequery1->fields['total'];
if ($totalposts > 0)
{
	$executequery2 = $conn->Execute($query2);
	$posts = $executequery2->getrows();
	$posts = gif_detector($posts);
	STemplate::assign('posts',$posts);
	$theprevpage=$currentpage-1;
	$thenextpage=$currentpage+1;
	if($currentpage > 1){STemplate::assign('tpp',$theprevpage);}
	$currentposts = $currentpage * $config['items_per_page'];
	if($totalposts > $currentposts){STemplate::assign('tnp',$thenextpage);}
}

if ($config['channels'] == 1)
{
$cats = loadallchannels();
STemplate::assign('allchannels',$cats);

$c = loadtopchannels($cats);
STemplate::assign('c',$c);
}
if ( $config['recommended'] > 0)
{
    $binhbua = load_fav_channel(12,3,$pid);
    STemplate::assign('binhbua',$binhbua);


    $hoibua = load_fav_channel(19,3,$pid);
    STemplate::assign('hoibua',$hoibua);

    $queryvideo = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key!='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY rand() desc limit 2";


    $executequeryvideo = $conn->execute($queryvideo);
    $video =  $executequeryvideo->getarray();
    STemplate::assign('video',$video);

    $queryuser = "SELECT * FROM members WHERE verified='1' AND username!='' ORDER BY posts desc limit 10";
    $executequeryuser = $conn->Execute($queryuser);
    $users = $executequeryuser->getrows();
    //$ranks = ($currentpage - 1) * $config['items_per_page'];
    $ucount = count($users);
    for($i = 0; $i < $ucount; $i++){$users[$i]['rank'] = $i + 1 + $ranks;}
    STemplate::assign('users',$users);
}



if ( $config['populargags'] > 0)
{
    $ctime = 24 * 60 * 60;
    if ($config['populargags'] == 2){$ctime = $ctime * 7;}
    if ($config['populargags'] == 3){$ctime = $ctime * 30;}
    $utime = time() - $ctime;
    $querypopular1 = "SELECT count(*) as total FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' AND time_added>='$utime' ORDER BY rand() desc limit 18";
    $executequerypopular1 = $conn->execute($querypopular1);
    $totalpopular = $executequerypopular1->fields['total'];
    if ($totalpopular > 0)
    {
        $querypopular2 = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' AND time_added>='$utime' ORDER BY rand() desc limit 18";
        $executequerypopular2 = $conn->execute($querypopular2);
        $popular =  $executequerypopular2->getarray();
        STemplate::assign('popular',$popular);
        $pcount = count($popular);
        $boxindexmax = ceil($pcount/3)-1;
        STemplate::assign('boxindexmax',$boxindexmax);
    }
}
//lấy ra link sopcast
$datesopcast= $contents['created'];

$nowtime = date( 'Y-m-d',time());


if($datesopcast< $nowtime){
    $querysopcast = "select C.title, C.introtext,C.fulltext, C.created,C.result from www_content C WHERE state=1 AND created <'$nowtime' ORDER BY created desc limit 1";
}
else{
    $querysopcast = "select C.title, C.introtext,C.fulltext, C.created,C.result from www_content C WHERE state=1 AND created ='$nowtime' ORDER BY created desc limit 1";
}
$executequerysopcast = $conn->Execute($querysopcast);
$sopcast = $executequerysopcast->getrows();
STemplate::assign('sopcast',$sopcast);

$pagetitle = $q." ".$titles['12'];

//TEMPLATES BEGIN

STemplate::assign('pagetitle',$pagetitle);
STemplate::assign('query',$q);
STemplate::assign('total',$total);
STemplate::display('header.tpl');
STemplate::display($template);
STemplate::display('search.tpl');
STemplate::assign('page',$page);
STemplate::display('footer.tpl');
//TEMPLATES END


?>