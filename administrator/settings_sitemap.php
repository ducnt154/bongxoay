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
$thesitemappath = $config['basedir']."/sitemap/";
$thebaseurl =  $config['baseurl'];
verify_login_admin();
if($demo_mode != 1)
{
	$get_links = "SELECT PID, story, date_added FROM posts ORDER BY PID DESC";  
	$links = mysql_query($get_links) or die(mysql_error());  
	$doc = new DOMDocument('1.0', "UTF-8");
	$doc->formatOutput = true;
	$r = $doc->createElement( "urlset" );
	$docAttribute = $doc->createAttribute('xmlns');
	$docAttribute->value = 'http://www.sitemaps.org/schemas/sitemap/0.9';
	$r->appendChild($docAttribute);
	$docAttribute = $doc->createAttribute('xmlns:xsi');
	$docAttribute->value = 'http://www.w3.org/2001/XMLSchema-instance';
	$r->appendChild($docAttribute);
	$docAttribute = $doc->createAttribute('xsi:schemaLocation');
	$docAttribute->value = 'http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd';
	$r->appendChild($docAttribute);
	$doc->appendChild( $r );
	$b = $doc->createElement( "url" );
	$loc = $doc->createElement( "loc" );
	$loc->appendChild($doc->createTextNode( $thebaseurl."/" ));
	$b->appendChild( $loc );
	$lastmod = $doc->createElement( "lastmod" );
	$lastmod->appendChild($doc->createTextNode( date('Y-m-d') ));
	$b->appendChild( $lastmod );
	$changefreq = $doc->createElement( "changefreq" );
	$changefreq->appendChild($doc->createTextNode( "Daily" ));
	$b->appendChild( $changefreq );
	$priority = $doc->createElement( "priority" );
	$priority->appendChild($doc->createTextNode( "1.0" ));
	$b->appendChild( $priority );
	$r->appendChild( $b );
	if ($config['trendingenabled'] == 1){
		$b = $doc->createElement( "url" );
		$loc = $doc->createElement( "loc" );
		$loc->appendChild($doc->createTextNode( $thebaseurl."/trending" ));
		$b->appendChild( $loc );
		$lastmod = $doc->createElement( "lastmod" );
		$lastmod->appendChild($doc->createTextNode( date('Y-m-d') ));
		$b->appendChild( $lastmod );
		$changefreq = $doc->createElement( "changefreq" );
		$changefreq->appendChild($doc->createTextNode( "Daily" ));
		$b->appendChild( $changefreq );
		$priority = $doc->createElement( "priority" );
		$priority->appendChild($doc->createTextNode( "1.0" ));
		$b->appendChild( $priority );
		$r->appendChild( $b );
	}
	$b = $doc->createElement( "url" );
	$loc = $doc->createElement( "loc" );
	$loc->appendChild($doc->createTextNode( $thebaseurl."/vote" ));
	$b->appendChild( $loc );
	$lastmod = $doc->createElement( "lastmod" );
	$lastmod->appendChild($doc->createTextNode( date('Y-m-d') ));
	$b->appendChild( $lastmod );
	$changefreq = $doc->createElement( "changefreq" );
	$changefreq->appendChild($doc->createTextNode( "Daily" ));
	$b->appendChild( $changefreq );
	$priority = $doc->createElement( "priority" );
	$priority->appendChild($doc->createTextNode( "1.0" ));
	$b->appendChild( $priority );
	$r->appendChild( $b );
	while ($link = mysql_fetch_array($links))
	{  
		$b = $doc->createElement( "url" );
		if($config[SEO] == 1){$gagstory = makeseo($link['story']).".html";}
		$loc = $doc->createElement( "loc" );
		$loc->appendChild($doc->createTextNode( $thebaseurl.$config[postfolder].$link['PID']."/".$gagstory ));
		$b->appendChild( $loc );
		$lastmod = $doc->createElement( "lastmod" );
		$lastmod->appendChild($doc->createTextNode( date("Y-m-d", strtotime($link['date_added'])) ));
		$b->appendChild( $lastmod );
		$changefreq = $doc->createElement( "changefreq" );
		$changefreq->appendChild($doc->createTextNode( "Daily" ));
		$b->appendChild( $changefreq );
		$priority = $doc->createElement( "priority" );
		$priority->appendChild($doc->createTextNode( "0.8" ));
		$b->appendChild( $priority );
		$r->appendChild( $b );
	}
	$doc->save($thesitemappath."sitemap.xml");
}
$message = "Your Sitemap has been created successfully.";
Stemplate::assign('message',$message);
STemplate::display("administrator/settings_sitemap.tpl");
?>