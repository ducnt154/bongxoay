<?PHP
/**
 * Spintax - A helper class to process Spintax strings.
 * DVC Scripts
 * Power By Alien /
 */
class Spintax
{
    public function process($text)
    {
        return preg_replace_callback(
            '/\{(((?>[^\{\}]+)|(?R))*)\}/x',
            array($this, 'replace'),
            $text
        );
    }
    public function replace($text)
    {
        $text = $this->process($text[1]);
        $parts = explode('|', $text);
        return $parts[array_rand($parts)];
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Astore Grabber Tool</title>
</head>
<?php

$post1 = "$_GET[post]";
$lab1 = "$_GET[lab]";
$inx1="$_GET[inx]";
date_default_timezone_set('Asia/Jakarta');
$tag = 'lowpriandches-20';
$fileasin = 'asin.txt';
$blog = "$_GET[blog]";
$author = "$_GET[author]";
$label = "$_GET[label]";
$post = ''.$post1.'';
$tombol = ''.$inx1.'';
//$inx = ''.$inx1.'';
$lab = ''.$lab1.'';
$folder = 'chokeng';
$type = 'base64';
$schedule = 'hour';
$date = date('Y-m-d\TH:i:s\Z');
$report = 'Grab Status: <br>';
if($type == 'base64') {
//$buybutton = 'data:image/png;base64,'.base64_encode(get_contents($tombol));
//$pimages = 'data:image/png;base64,'.base64_encode(get_contents($lab));
//$imgx = 'data:image/png;base64,'.base64_encode(get_contents($inx));
} else {
$buybutton = $tombol;
$pimages = $lab;
$imgx = $inx;
}

//buffer XML
$buffer = '<?xml version="1.0" encoding="UTF-8"?>
<ns0:feed xmlns:ns0="http://www.w3.org/2005/Atom">
<ns0:title type="html">'.$blog.'</ns0:title>
<ns0:generator>Blogger</ns0:generator>
<ns0:updated>'.$date.'</ns0:updated>';

//open asin file
$fileopen = @file($fileasin, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) or die('<center><h2>Grabamax V.24.1.2 By Chokeng For Blogspot</h2>Asin Habis <a href="add.php">Add</a></center>');
//debug($fileopen);
$totalasin = count($fileopen);
$labels = explode(',', $label);
foreach($fileopen as $asin) {
//debug($asin);
$i++;
if($i == ($post+1)) break;

###################save images##########################
$dimages='http://www.centerboot.net:32000//accounts/inc/api/search.php?asin='.$asin.'';
$date1 = date('H-i');
$f=''.$asin.'';
$g = str_replace(" ", "-", $f);
//$h = str_replace('-', '', $g);
if(!file_exists($folder)) mkdir($folder);
$folder2=''.$folder.'/'.$tombol.'';
if(!file_exists($folder2)) mkdir($folder2);
//mkdir($folder2);
$savename1=''.$f.'1.jpg';
//echo ''.$savename1.'<br>'.$g.'<br>'.$f.'<br>';
$saveTo =''.$folder.'/'.$savename1.'';// ini nama file kita
$downloadFrom = $dimages;// ini URL download dari
$curl = curl_init();
$fp = fopen($saveTo, 'w');
curl_setopt($curl, CURLOPT_URL, $downloadFrom);
curl_setopt($curl, CURLOPT_FILE, $fp);
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_exec ($curl);
curl_close ($curl);
fclose($fp);
///Link images product
$gambar=''.$lab.'/'.$asin.'_'.$author.'.jpg';
//link images tombol
$gambar1=''.$lab.'/button.gif';
$gambar2=''.$lab.'/label.gif';
if($type == 'base64') {

}

//conditional create content
if($title && $price && $detail && $description && $image && $posttitle && $contentx) {
$x++;
if($post > $totalasin) $post = $totalasin;
if(is_array($labels)) {
$labelxml = '';
foreach($labels as $val) {
	$labelxml .= '<ns0:category scheme="http://www.blogger.com/atom/ns#" term="'.$val.'" />';
	}
} else {
	$labelxml .= '<ns0:category scheme="http://www.blogger.com/atom/ns#" term="'.$label.'" />';
}

//buffer entry xml
$buffer .= '<ns0:entry>
'.$labelxml.'
<ns0:category scheme="http://schemas.google.com/g/2005#kind" term="http://schemas.google.com/blogger/2008/kind#post" />
<ns0:id>post-'.($post - $i + 1).'</ns0:id>
<ns0:author><ns0:name>'.$author.'</ns0:name></ns0:author>
<ns0:content type="html"><![CDATA['.$gcontent.']]></ns0:content>
<ns0:published>'.date('Y-m-d\TH:i:s\Z', strtotime('-'.$i.' '.$schedule)).'</ns0:published>
<ns0:title type="html"><![CDATA['.$gtitleSpin.']]></ns0:title>
</ns0:entry>';
$report .= $i.'. '.$asin.' Sukses<br />';
}

unset($fileopen[($i-1)]);
} //end foreach

$buffer .= '</ns0:feed>';
$xml = preg_replace('/^\s+|\n|\r|\s+$/m', '', $buffer);
//echo $xml;
/*
$filenamexml = 'blog-'.date('Y-m-d\_H-i-s').'.xml';
if(!file_exists($folder)) mkdir($folder);
file_put_contents($folder.'/'.$filenamexml, $xml) or die('Tidak bisa buat output XML.');

$newarray = array_values($fileopen);
//debug($newarray);
file_put_contents($fileasin, join("\n", $newarray));
*/
$status = 'Sukses, '.$post.' entry telah dibuat, disimpan di <a href="'.$folder.'/'.$filenamexml.'" title="Cek XML">'.$folder.'/'.$filenamexml.'</a></div>';

 //if post
echo"<h2>Grabamax V.24.1.2 By Chokeng For Blogspot</h2>";
echo'Total Asin: '.$totalasin.'<br>';
echo"<a href='index.php'>Home</a> <a href='up-imges.php?blog=$blog&author=$author&label=$label&post=$post&inx=$inx1&lab=$lab'>Next Post</a><br> ";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Grabamax</title>
</head>
<body style="width:760px; margin:auto; line-height:150%; text-align:center;">
<?php echo $status; ?>


</body></html>

<?php
//function here....
function debug($result) {
echo '<pre>'; print_r($result); echo '</pre>';
}
function cutter($content, $start, $end) {
if($content && $start && $end) {
$r = explode($start, $content);
if (isset($r[1])) {
$r = explode($end, $r[1]);
return $r[0];
}
return false;
}
}
function get_contents($url, $referer = 'http://www.google.com/firefox?client=firefox-a&rls=org.mozilla:fr:official', $ua = 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.18) Gecko/20110614 Firefox/3.6.18') {
if(function_exists('curl_exec')) {
 $curl = curl_init();
 $header[0] = "Accept: text/xml,application/xml,application/xhtml+xml,";
 $header[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
 $header[] = "Cache-Control: max-age=0";
 $header[] = "Connection: keep-alive";
 $header[] = "Keep-Alive: 300";
 $header[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
 $header[] = "Accept-Language: en-us,en;q=0.5";
 $header[] = "Pragma: ";
 curl_setopt($curl, CURLOPT_URL, $url);
 curl_setopt($curl, CURLOPT_USERAGENT, $ua);
 curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
 curl_setopt($curl, CURLOPT_REFERER, $referer);
 curl_setopt($curl, CURLOPT_ENCODING, 'gzip,deflate');
 curl_setopt($curl, CURLOPT_AUTOREFERER, true);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_TIMEOUT, 10);
 $content = curl_exec($curl);
 curl_close($curl);
 } else {
 ini_set('user_agent', $ua);
 $content = file_get_contents($url);
 }
 return $content;
}
# Grabamax V.24.1.2 By Chokeng For Blogspot
?>