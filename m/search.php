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
$mobileurl = $config['mobileurl'];
$config['items_per_page'] = "5";

$page = intval($_REQUEST['page']);
if($page==""){$page = "1";}
$currentpage = $page;
if ($page >=2){$pagingstart = ($page-1)*$config['items_per_page'];}
else{$pagingstart = "0";}

$query = cleanit($_REQUEST['query']);

if($query != "")
{
	$sterm[] = $query;
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

$query1 = "SELECT count(*) as total from posts A, members B where A.active='1' AND A.USERID=B.USERID $stermstr order by A.PID desc limit $config[maximum_results]";
$query2 = "SELECT A.*, B.username from posts A, members B where A.active='1' AND A.USERID=B.USERID $stermstr order by A.PID desc limit $pagingstart, $config[items_per_page]";

$executequery1 = $conn->Execute($query1);
$stotal = $executequery1->fields['total'];
if ($stotal > 0)
{
	$executequery2 = $conn->Execute($query2);
	$posts = $executequery2->getrows();
	$theprevpage=$currentpage-1;
	$thenextpage=$currentpage+1;
	if($currentpage > 1){STemplate::assign('tpp',$theprevpage);}
	$currentposts = $currentpage * $config['mobile_per_page'];
	if($stotal > $currentposts){STemplate::assign('tnp',$thenextpage);}

	$SID = $_SESSION['USERID'];
	$pcount = count($posts);
	for ($i = 0; $i < $pcount ; $i++)
	{
	$querypid = $posts[$i]['PID'];
	$querya = "SELECT count(*) as favorited FROM posts_favorited WHERE USERID=$SID AND PID=$querypid";
	$executequerya = $conn->Execute($querya);
	$queryb = "SELECT count(*) as unfavorited FROM posts_unfavorited WHERE USERID=$SID AND PID=$querypid";
	$executequeryb = $conn->Execute($queryb);
	$posts[$i]['favorited'] = $executequerya->fields['favorited'];
	$posts[$i]['unfavorited'] = $executequeryb->fields['unfavorited'];
	}
}


//TEMPLATES BEGIN
STemplate::setTplDir($config['mobiledir']."/themes");
STemplate::assign('query',$query);
STemplate::assign('pagetitle',$query." ".$lang['189']);
STemplate::assign('posts',$posts);
STemplate::display('header.tpl');
STemplate::display('search.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>