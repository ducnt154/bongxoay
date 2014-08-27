<?php
if ($_GET['Submit']=='Submit')
{
$pages = $_REQUEST["p"];
$all_asin = "";

ini_set('max_execution_time','0');
ini_set('max_input_time','0');
ini_set('memory_limit','128M');
#ini_set('error_reporting','~E_ALL');



function get_page($url) {
   $ch = curl_init();
   $timeout = 0; // set to zero for no timeout
   $useragent="Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)";
   curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
   curl_setopt ($ch, CURLOPT_URL, $url);
   curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
   curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
   $String = curl_exec($ch);
   curl_close($ch);
   return $String;
 }


if(!$_REQUEST["url"]){
   exit();
}
$csv_info = "";
$csv_comma = "";
$csv_tab = "";


////////////////////////////////////////////////////////////////

 $url=$_REQUEST["url"];

////////////////////////////////////////////////////////////////

$rankno = 1;

 for($i=1;$i<=$pages;$i++) {
 
	$urlx = $url . "&page=$i";
	$page=get_page($urlx);
	//echo $page."-";

	if(strpos($page, "did not match")>0) { $i=$pages+1; break; }
	$page = substr($page, strpos($page, "<h1 id=\"breadCrumb\">"));
	$page = substr($page, 0, strpos($page, "<div id=\"centerBelowExtra\">"));
	 
	$aStr=explode('id="result_',$page);

	$first = 0;
	foreach( $aStr as $nn=>$item){
		$item = str_replace("\n","",$item);
		$item = str_replace("\r","",$item);
		$item = str_replace("<div","\n<div",$item);
		$item = str_replace("</div>","</div>\n",$item);

		if($first == 0) { 
			$first++;
			continue;
		}

		preg_match('/name="(.*)"/',$item,$match);
		$asin = trim($match[1]);
		$match[1] = "";

		preg_match('/<br clear="all" \/>(.*)<\/a><\/div>/',$item,$match);
		$proddesc = trim($match[1]);
		$match[1] = "";
		if($proddesc == "") {
			preg_match('/<div class="result firstRow product specific">(.*)<\/div>/',$item,$match);
			$proddesc = trim(strip_tags($match[1]));
			$match[1] = "";
		}
		$proddesc = html_entity_decode($proddesc);

		if($asin != "") {
				$all_asin.= "$asin$proddesc\r\n";
		}
		
		flush();
		$rankno++;
	}
	echo "$i ";
	flush();

	if(strpos($page, "<span class=\"pagnDisabled\">Next")>0)  { $i=$pages+1; break; }
 }


echo "<br><b>ASIN Previews</b><br />\n";
echo "<textarea name=\"asin\" rows=\"20\" cols=\"100\">\n";
echo $all_asin;
echo "</textarea>\n";


}
else
{

?>
<title>Amazon To Asin Generator</title>

<form name="form1" method="GET" action="" style="padding:5px;">
<h2>Amazon To Asin Generator</h2>
<p>
  <input name="url" type="text" size="100" />
  <br />
  Masukkan URL Amazon di sini Ex http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=indomie
<br/><input name="p" value = "50" type="text" size="3" />Number of page</p>
<p>
  <input type="submit" name="Submit" value="Submit" />   <input type="reset" name="reset" value="reset" />
  
</p>
</form>



<?

}
?>
