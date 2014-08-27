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
$link = "http://astore.amazon.com/".$tag."/detail/".$asin;
$result = get_contents($link);
$title = cutter($result, '<title>', '</title>');
//===============================
$spintaxx = new Spintax();
$stringx = '
{Best Price|Special offer|Today Sale | Check out| Please Retweet| What do you think of| New in|Why Not|Have you seen | We are proud of | Do you need |For Sale|Save Price|Special Price for|Hot Deal|Review} '.$title.' { Check out | Please Retweet | What do you think of | New in|Why Not |Have you seen | We are proud of | Do you need | Special Price for|Hot Deal|Special offer| Today Sale |For Sale |Save Price |Review |Best Price | Guess what..|Wow|New Products|global|in-out products|super| bigs |the best| Cool| Man| guest} 
';
$titleSpin =$spintaxx->process($stringx);
//===============================
$posttitle = cutter($result, '<div id="titleAndByLine">', '</div>');
$description = cutter($result, '<div id="productDescription">', '</div>');
$descriptionx = cutter($description, '<p>', '</p>');
// $detail = cutter($result, '<div id="productDetails">', '</div>');
// $detail = preg_replace('/<hr\/>|<\/hr>/i', '', $detail);
$detail = cutter($result, '<div id="productDetails">', '</div>'); 
$detail = preg_replace('/<hr\/>|<\/hr>/i', '', $detail); 
$detail1 = str_replace('Amazon ', '', $detail);
$price = '<table id="prices">'.cutter($result, '<table id="prices">', '</table>').'</table>';
preg_match_all('#<a href="([^"]+)" onClick="([^"]+)">([^"]+)</a>#', $price, $match);
$price = str_replace($match[0], '', $price);
$similiar = cutter($result, '<div class="productwidget">', '</div>');
preg_match('#<img src="([^"]+)" alt="([^"]+)" id="detailProductImage">#', $result, $img);
preg_match('#http://www.amazon.com/product-reviews/([^"]+)" target="_blank">#', $result, $link);
$image = $img[1];
$image =str_replace('._SL210_', '', $image);
$title = $img[2];
$buylink = 'http://www.google.com/dp/akira-20/detail/'.$asin;
###################save images##########################
$date1 = date('H-i');
$f=''.$asin.'';
$g = str_replace(" ", "-", $f);
//$h = str_replace('-', '', $g);
if(!file_exists($folder)) mkdir($folder);
$folder2=''.$folder.'/'.$tombol.'';
if(!file_exists($folder2)) mkdir($folder2);
//mkdir($folder2);
$savename1=''.$f.''.$author.'.jpg';
//echo ''.$savename1.'<br>'.$g.'<br>'.$f.'<br>';
$saveTo =''.$folder2.'/'.$savename1.'';// ini nama file kita
$downloadFrom = $image;// ini URL download dari
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

//====================================
$petik="'";
$spintax = new Spintax();
$string = '
<meta name="description" content='.$petik.''.$title.''.$petik.'>
<meta name="keywords" content='.$petik.''.$title.''.$petik.'>
<strong>{Best Price|Special offer|Today Sale|Check out|Please Retweet|What do you think of|New in|Why Not|Have you seen|We are proud of|Do you need|For Sale|Save Price|Special Price for|Hot Deal|Review} '.$title.'</strong><br>
<center><a href="http://amzn.com/gp/product/'.$asin.'/?tag=simbahe-20" rel="nofollow"><img alt="" src="http://ws.assoc-amazon.com/widgets/q?_encoding=UTF8&Format=_SL400_&ASIN='.$asin.'&MarketPlace=US&ID=AsinImage&WS=1&ServiceVersion=20070822" style="center"></a></center>
<br>

'.$descriptionx.'
<!--more-->
<div class="separator" style="clear: both; text-align: center;">
<center><a href="http://amzn.com/gp/product/'.$asin.'/?tag=simbahe-20" rel="nofollow"><img alt="" src="http://4.bp.blogspot.com/-RbT4ofdQ7_s/UuGSUxdWPTI/AAAAAAAAAHQ/T3SN9IgkFOE/s1600/asaku.png" height="78" width="200"></a></p></center>
</div>
'.$detail1.'
<div class="separator" style="clear: both; text-align: center;">
<center><img src="http://2.bp.blogspot.com/-kDz3jiSgllQ/UbXEqV_qUuI/AAAAAAAAAEc/51y95zjlJzs/s1600/banner-com.png" width="550px" rel="nofollow"></a></p></center>
</div>

'.$title.' reviews.
';
$contentx=$spintax->process($string);
//====================================

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

///<!--more-->

$content= '
'.$contentx.'
';
//echo $content;
########################################################
$bgoogle1	=	str_replace	("2g1c", "", $content);
$bgoogle2	=	str_replace	("4chan", "", $bgoogle1);
$bgoogle3	=	str_replace	("a2m", "", $bgoogle2);
$bgoogle4	=	str_replace	("acrotOmophilia", "", $bgoogle3);
$bgoogle5	=	str_replace	("adUlt", "", $bgoogle4);
$bgoogle6	=	str_replace	("amaTeur", "", $bgoogle5);
$bgoogle7	=	str_replace	("anal", "", $bgoogle6);
$bgoogle8	=	str_replace	("anilinGus", "", $bgoogle7);
$bgoogle9	=	str_replace	("anuS", "", $bgoogle8);
$bgoogle10	=	str_replace	("are", "", $bgoogle9);
$bgoogle11	=	str_replace	("are idiotS", "", $bgoogle10);
$bgoogle12	=	str_replace	("arseHole", "", $bgoogle11);
$bgoogle13	=	str_replace	("aryaN", "", $bgoogle12);
$bgoogle14	=	str_replace	("asian baBe", "", $bgoogle13);
$bgoogle15	=	str_replace	("ass", "", $bgoogle14);
$bgoogle16	=	str_replace	("assHole", "", $bgoogle15);
$bgoogle17	=	str_replace	("assmUnch", "", $bgoogle16);
$bgoogle18	=	str_replace	("auto eRotic", "", $bgoogle17);
$bgoogle19	=	str_replace	("autoerotiC", "", $bgoogle18);
$bgoogle20	=	str_replace	("babeS in toyland", "", $bgoogle19);
$bgoogle21	=	str_replace	("babelAnd", "", $bgoogle20);
$bgoogle22	=	str_replace	("baby battEr", "", $bgoogle21);
$bgoogle23	=	str_replace	("ball GravY", "", $bgoogle22);
$bgoogle24	=	str_replace	("ball SaCk", "", $bgoogle23);
$bgoogle25	=	str_replace	("ball gaG", "", $bgoogle24);
$bgoogle26	=	str_replace	("ball kiCking", "", $bgoogle25);
$bgoogle27	=	str_replace	("ball liCking", "", $bgoogle26);
$bgoogle28	=	str_replace	("ball sUcking", "", $bgoogle27);
$bgoogle29	=	str_replace	("bangBros", "", $bgoogle28);
$bgoogle30	=	str_replace	("barebAck", "", $bgoogle29);
$bgoogle31	=	str_replace	("barely Legal", "", $bgoogle30);
$bgoogle32	=	str_replace	("barenAked ladies", "", $bgoogle31);
$bgoogle33	=	str_replace	("bastardO", "", $bgoogle32);
$bgoogle34	=	str_replace	("bastinAdo", "", $bgoogle33);
$bgoogle35	=	str_replace	("bbW", "", $bgoogle34);
$bgoogle36	=	str_replace	("bdsM", "", $bgoogle35);
$bgoogle37	=	str_replace	("beaver clEaver", "", $bgoogle36);
$bgoogle38	=	str_replace	("beaver lipS", "", $bgoogle37);
$bgoogle39	=	str_replace	("bestiAlity", "", $bgoogle38);
$bgoogle40	=	str_replace	("betty doDson", "", $bgoogle39);
$bgoogle41	=	str_replace	("bi cUrious", "", $bgoogle40);
$bgoogle42	=	str_replace	("bianca bEauchamp", "", $bgoogle41);
$bgoogle43	=	str_replace	("big blAck", "", $bgoogle42);
$bgoogle44	=	str_replace	("big knOckers", "", $bgoogle43);
$bgoogle45	=	str_replace	("big tiTs", "", $bgoogle44);
$bgoogle46	=	str_replace	("bimboS", "", $bgoogle45);
$bgoogle47	=	str_replace	("birdlOck", "", $bgoogle46);
$bgoogle48	=	str_replace	("biseXual", "", $bgoogle47);
$bgoogle49	=	str_replace	("bitcH", "", $bgoogle48);
$bgoogle50	=	str_replace	("black coCk", "", $bgoogle49);
$bgoogle51	=	str_replace	("blonde actIon", "", $bgoogle50);
$bgoogle52	=	str_replace	("blonde on blonde aCtion", "", $bgoogle51);
$bgoogle53	=	str_replace	("blow J", "", $bgoogle52);
$bgoogle54	=	str_replace	("blow your L", "", $bgoogle53);
$bgoogle55	=	str_replace	("blue wafFle", "", $bgoogle54);
$bgoogle56	=	str_replace	("blumPkin", "", $bgoogle55);
$bgoogle57	=	str_replace	("bolloCks", "", $bgoogle56);
$bgoogle58	=	str_replace	("bondAge", "", $bgoogle57);
$bgoogle59	=	str_replace	("boneR", "", $bgoogle58);
$bgoogle60	=	str_replace	("booB", "", $bgoogle59);
$bgoogle61	=	str_replace	("booty Call", "", $bgoogle60);
$bgoogle62	=	str_replace	("brown showerS", "", $bgoogle61);
$bgoogle63	=	str_replace	("brunette Action", "", $bgoogle62);
$bgoogle64	=	str_replace	("bukKake", "", $bgoogle63);
$bgoogle65	=	str_replace	("bulldYke", "", $bgoogle64);
$bgoogle66	=	str_replace	("bullet vIbe", "", $bgoogle65);
$bgoogle67	=	str_replace	("bung hOle", "", $bgoogle66);
$bgoogle68	=	str_replace	("bungHole", "", $bgoogle67);
$bgoogle69	=	str_replace	("bustY", "", $bgoogle68);
$bgoogle70	=	str_replace	("butt", "", $bgoogle69);
$bgoogle71	=	str_replace	("buttHole", "", $bgoogle70);
$bgoogle72	=	str_replace	("buttcHeeks", "", $bgoogle71);
$bgoogle73	=	str_replace	("camel Toe", "", $bgoogle72);
$bgoogle74	=	str_replace	("camgIrl", "", $bgoogle73);
$bgoogle75	=	str_replace	("camslUt", "", $bgoogle74);
$bgoogle76	=	str_replace	("camwHore", "", $bgoogle75);
$bgoogle77	=	str_replace	("carol quEen", "", $bgoogle76);
$bgoogle78	=	str_replace	("carpet mUncher", "", $bgoogle77);
$bgoogle79	=	str_replace	("carpetmUncher", "", $bgoogle78);
$bgoogle80	=	str_replace	("chastity bElt", "", $bgoogle79);
$bgoogle81	=	str_replace	("chocolate roseBuds", "", $bgoogle80);
$bgoogle82	=	str_replace	("chrissie wUnna", "", $bgoogle81);
$bgoogle83	=	str_replace	("circleJerk", "", $bgoogle82);
$bgoogle84	=	str_replace	("cleveland stEamer", "", $bgoogle83);
$bgoogle85	=	str_replace	("clit", "", $bgoogle84);
$bgoogle86	=	str_replace	("clitoriS", "", $bgoogle85);
$bgoogle87	=	str_replace	("clover clampS", "", $bgoogle86);
$bgoogle88	=	str_replace	("clusterFuck", "", $bgoogle87);
$bgoogle89	=	str_replace	("cocainE", "", $bgoogle88);
$bgoogle90	=	str_replace	("cock", "", $bgoogle89);
$bgoogle91	=	str_replace	("cockS", "", $bgoogle90);
$bgoogle92	=	str_replace	("consensual Intercourse", "", $bgoogle91);
$bgoogle93	=	str_replace	("coprolaGnia", "", $bgoogle92);
$bgoogle94	=	str_replace	("coprophIlia", "", $bgoogle93);
$bgoogle95	=	str_replace	("cornhOle", "", $bgoogle94);
$bgoogle96	=	str_replace	("courtney troUble", "", $bgoogle95);
$bgoogle97	=	str_replace	("cream pIe", "", $bgoogle96);
$bgoogle98	=	str_replace	("creamPie", "", $bgoogle97);
$bgoogle99	=	str_replace	("crossDresser", "", $bgoogle98);
$bgoogle100	=	str_replace	("cuckoLd", "", $bgoogle99);
$bgoogle101	=	str_replace	("cum", "", $bgoogle100);
$bgoogle102	=	str_replace	("cumming", "", $bgoogle101);
$bgoogle103	=	str_replace	("cunT", "", $bgoogle102);
$bgoogle104	=	str_replace	("cunniLingus", "", $bgoogle103);
$bgoogle105	=	str_replace	("darkiE", "", $bgoogle104);
$bgoogle106	=	str_replace	("date rApe", "", $bgoogle105);
$bgoogle107	=	str_replace	("daterApe", "", $bgoogle106);
$bgoogle108	=	str_replace	("deep thRoat", "", $bgoogle107);
$bgoogle109	=	str_replace	("deeptHroat", "", $bgoogle108);
$bgoogle110	=	str_replace	("dick", "", $bgoogle109);
$bgoogle111	=	str_replace	("dilDo", "", $bgoogle110);
$bgoogle112	=	str_replace	("dirty pillowS", "", $bgoogle111);
$bgoogle113	=	str_replace	("dirty sAnchez", "", $bgoogle112);
$bgoogle114	=	str_replace	("dog stylE", "", $bgoogle113);
$bgoogle115	=	str_replace	("doggie sTyle", "", $bgoogle114);
$bgoogle116	=	str_replace	("doggiesTyle", "", $bgoogle115);
$bgoogle117	=	str_replace	("doggy Style", "", $bgoogle116);
$bgoogle118	=	str_replace	("doggyStyle", "", $bgoogle117);
$bgoogle119	=	str_replace	("dolcett", "", $bgoogle118);
$bgoogle120	=	str_replace	("dominatIon", "", $bgoogle119);
$bgoogle121	=	str_replace	("dominatRix", "", $bgoogle120);
$bgoogle122	=	str_replace	("dommeS", "", $bgoogle121);
$bgoogle123	=	str_replace	("donkey pUnch", "", $bgoogle122);
$bgoogle124	=	str_replace	("double donG", "", $bgoogle123);
$bgoogle125	=	str_replace	("double pEnetration", "", $bgoogle124);
$bgoogle126	=	str_replace	("dp acTion", "", $bgoogle125);
$bgoogle127	=	str_replace	("ducky doOlittle", "", $bgoogle126);
$bgoogle128	=	str_replace	("eat my Ass", "", $bgoogle127);
$bgoogle129	=	str_replace	("ecchI", "", $bgoogle128);
$bgoogle130	=	str_replace	("ecstasY", "", $bgoogle129);
$bgoogle131	=	str_replace	("ejaCulation", "", $bgoogle130);
$bgoogle132	=	str_replace	("electrotorTure", "", $bgoogle131);
$bgoogle133	=	str_replace	("eroTic", "", $bgoogle132);
$bgoogle134	=	str_replace	("eroTism", "", $bgoogle133);
$bgoogle135	=	str_replace	("escoRt", "", $bgoogle134);
$bgoogle136	=	str_replace	("ethical sLut", "", $bgoogle135);
$bgoogle137	=	str_replace	("euNuch", "", $bgoogle136);
$bgoogle138	=	str_replace	("fagGot", "", $bgoogle137);
$bgoogle139	=	str_replace	("fantasieS", "", $bgoogle138);
$bgoogle140	=	str_replace	("fapsErver", "", $bgoogle139);
$bgoogle141	=	str_replace	("fecaL", "", $bgoogle140);
$bgoogle142	=	str_replace	("felcH", "", $bgoogle141);
$bgoogle143	=	str_replace	("fellaTio", "", $bgoogle142);
$bgoogle144	=	str_replace	("feltCh", "", $bgoogle143);
$bgoogle145	=	str_replace	("femDom", "", $bgoogle144);
$bgoogle146	=	str_replace	("female deSperation", "", $bgoogle145);
$bgoogle147	=	str_replace	("female sQuirting", "", $bgoogle146);
$bgoogle148	=	str_replace	("fetIsh", "", $bgoogle147);
$bgoogle149	=	str_replace	("figginG", "", $bgoogle148);
$bgoogle150	=	str_replace	("fingerIng", "", $bgoogle149);
$bgoogle151	=	str_replace	("fistIng", "", $bgoogle150);
$bgoogle152	=	str_replace	("foot fEtish", "", $bgoogle151);
$bgoogle153	=	str_replace	("footjoB", "", $bgoogle152);
$bgoogle154	=	str_replace	("freeonEs", "", $bgoogle153);
$bgoogle155	=	str_replace	("frotTing", "", $bgoogle154);
$bgoogle156	=	str_replace	("fuCk", "", $bgoogle155);
$bgoogle157	=	str_replace	("fucK butTons", "", $bgoogle156);
$bgoogle158	=	str_replace	("fudge paCker", "", $bgoogle157);
$bgoogle159	=	str_replace	("fudgePacker", "", $bgoogle158);
$bgoogle160	=	str_replace	("futaNari", "", $bgoogle159);
$bgoogle161	=	str_replace	("g-sPot", "", $bgoogle160);
$bgoogle162	=	str_replace	("gang Bang", "", $bgoogle161);
$bgoogle163	=	str_replace	("gay bOy", "", $bgoogle162);
$bgoogle164	=	str_replace	("gay dog", "", $bgoogle163);
$bgoogle165	=	str_replace	("gay man", "", $bgoogle164);
$bgoogle166	=	str_replace	("gay men", "", $bgoogle165);
$bgoogle167	=	str_replace	("gay sEx", "", $bgoogle166);
$bgoogle168	=	str_replace	("genitalS", "", $bgoogle167);
$bgoogle169	=	str_replace	("get my siSter", "", $bgoogle168);
$bgoogle170	=	str_replace	("giant cocK", "", $bgoogle169);
$bgoogle171	=	str_replace	("ginger lYnne", "", $bgoogle170);
$bgoogle172	=	str_replace	("girl oN", "", $bgoogle171);
$bgoogle173	=	str_replace	("girl on tOp", "", $bgoogle172);
$bgoogle174	=	str_replace	("girls goNe wild", "", $bgoogle173);
$bgoogle175	=	str_replace	("goatcx", "", $bgoogle174);
$bgoogle176	=	str_replace	("goatsE", "", $bgoogle175);
$bgoogle177	=	str_replace	("gokKun", "", $bgoogle176);
$bgoogle178	=	str_replace	("golden shoWer", "", $bgoogle177);
$bgoogle179	=	str_replace	("goo gIrl", "", $bgoogle178);
$bgoogle180	=	str_replace	("goodpoOp", "", $bgoogle179);
$bgoogle181	=	str_replace	("goodviBes", "", $bgoogle180);
$bgoogle182	=	str_replace	("google is Evil", "", $bgoogle181);
$bgoogle183	=	str_replace	("goregaSm", "", $bgoogle182);
$bgoogle184	=	str_replace	("grinGo", "", $bgoogle183);
$bgoogle185	=	str_replace	("grope", "", $bgoogle184);
$bgoogle186	=	str_replace	("group sEx", "", $bgoogle185);
$bgoogle187	=	str_replace	("gurO", "", $bgoogle186);
$bgoogle188	=	str_replace	("hairY", "", $bgoogle187);
$bgoogle189	=	str_replace	("hand Job", "", $bgoogle188);
$bgoogle190	=	str_replace	("handJob", "", $bgoogle189);
$bgoogle191	=	str_replace	("happy slapping Video", "", $bgoogle190);
$bgoogle192	=	str_replace	("hard coRe", "", $bgoogle191);
$bgoogle193	=	str_replace	("hardCore", "", $bgoogle192);
$bgoogle194	=	str_replace	("hate", "", $bgoogle193);
$bgoogle195	=	str_replace	("hedoP", "", $bgoogle194);
$bgoogle196	=	str_replace	("henTai", "", $bgoogle195);
$bgoogle197	=	str_replace	("homoeRotic", "", $bgoogle196);
$bgoogle198	=	str_replace	("honkeY", "", $bgoogle197);
$bgoogle199	=	str_replace	("hookUp", "", $bgoogle198);
$bgoogle200	=	str_replace	("hookeR", "", $bgoogle199);
$bgoogle201	=	str_replace	("hot chiCk", "", $bgoogle200);
$bgoogle202	=	str_replace	("how to kilL", "", $bgoogle201);
$bgoogle203	=	str_replace	("how to murdeR", "", $bgoogle202);
$bgoogle204	=	str_replace	("huge fAt", "", $bgoogle203);
$bgoogle205	=	str_replace	("humpIng", "", $bgoogle204);
$bgoogle206	=	str_replace	("i haTe", "", $bgoogle205);
$bgoogle207	=	str_replace	("inceSt", "", $bgoogle206);
$bgoogle208	=	str_replace	("insertionS", "", $bgoogle207);
$bgoogle209	=	str_replace	("interraCial", "", $bgoogle208);
$bgoogle210	=	str_replace	("jack ofF", "", $bgoogle209);
$bgoogle211	=	str_replace	("jackie StranO", "", $bgoogle210);
$bgoogle212	=	str_replace	("jacobs ladder piercing", "", $bgoogle211);
$bgoogle213	=	str_replace	("jail bAit", "", $bgoogle212);
$bgoogle214	=	str_replace	("jailbAit", "", $bgoogle213);
$bgoogle215	=	str_replace	("jenna Jameson", "", $bgoogle214);
$bgoogle216	=	str_replace	("jenna Jameson", "", $bgoogle215);
$bgoogle217	=	str_replace	("jerk Off", "", $bgoogle216);
$bgoogle218	=	str_replace	("jesse jaNe", "", $bgoogle217);
$bgoogle219	=	str_replace	("jiZz", "", $bgoogle218);
$bgoogle220	=	str_replace	("jigaBoo", "", $bgoogle219);
$bgoogle221	=	str_replace	("jiggaBoo", "", $bgoogle220);
$bgoogle222	=	str_replace	("jiggerbOo", "", $bgoogle221);
$bgoogle223	=	str_replace	("john holMes", "", $bgoogle222);
$bgoogle224	=	str_replace	("jordan caPri", "", $bgoogle223);
$bgoogle225	=	str_replace	("juggS", "", $bgoogle224);
$bgoogle226	=	str_replace	("kama", "", $bgoogle225);
$bgoogle227	=	str_replace	("kamasUtra", "", $bgoogle226);
$bgoogle228	=	str_replace	("kike", "", $bgoogle227);
$bgoogle229	=	str_replace	("kinbaKu", "", $bgoogle228);
$bgoogle230	=	str_replace	("kinkY", "", $bgoogle229);
$bgoogle231	=	str_replace	("kinksTer", "", $bgoogle230);
$bgoogle232	=	str_replace	("knobbiNg", "", $bgoogle231);
$bgoogle233	=	str_replace	("latinA", "", $bgoogle232);
$bgoogle234	=	str_replace	("leather restRaint", "", $bgoogle233);
$bgoogle235	=	str_replace	("leather straIght jacket", "", $bgoogle234);
$bgoogle236	=	str_replace	("lemon paRty", "", $bgoogle235);
$bgoogle237	=	str_replace	("lesBian", "", $bgoogle236);
$bgoogle238	=	str_replace	("lickeD", "", $bgoogle237);
$bgoogle239	=	str_replace	("linda lOvelace", "", $bgoogle238);
$bgoogle240	=	str_replace	("lingErie", "", $bgoogle239);
$bgoogle241	=	str_replace	("lolIta", "", $bgoogle240);
$bgoogle242	=	str_replace	("lovemaKing", "", $bgoogle241);
$bgoogle243	=	str_replace	("loverS", "", $bgoogle242);
$bgoogle244	=	str_replace	("lsD", "", $bgoogle243);
$bgoogle245	=	str_replace	("madison YouNg", "", $bgoogle244);
$bgoogle246	=	str_replace	("make me coMe", "", $bgoogle245);
$bgoogle247	=	str_replace	("male squiRting", "", $bgoogle246);
$bgoogle248	=	str_replace	("mastUrbate", "", $bgoogle247);
$bgoogle249	=	str_replace	("matUre", "", $bgoogle248);
$bgoogle250	=	str_replace	("mdmA", "", $bgoogle249);
$bgoogle251	=	str_replace	("meatS", "", $bgoogle250);
$bgoogle252	=	str_replace	("menage a tRois", "", $bgoogle251);
$bgoogle253	=	str_replace	("miki saWaguchi", "", $bgoogle252);
$bgoogle254	=	str_replace	("milF", "", $bgoogle253);
$bgoogle255	=	str_replace	("missionary Position", "", $bgoogle254);
$bgoogle256	=	str_replace	("motherFucker", "", $bgoogle255);
$bgoogle257	=	str_replace	("mound of Venus", "", $bgoogle256);
$bgoogle258	=	str_replace	("mr handS", "", $bgoogle257);
$bgoogle259	=	str_replace	("muff Diver", "", $bgoogle258);
$bgoogle260	=	str_replace	("muffDiving", "", $bgoogle259);
$bgoogle261	=	str_replace	("murdeR", "", $bgoogle260);
$bgoogle262	=	str_replace	("naKed", "", $bgoogle261);
$bgoogle263	=	str_replace	("nambLa", "", $bgoogle262);
$bgoogle264	=	str_replace	("naughtY", "", $bgoogle263);
$bgoogle265	=	str_replace	("nawashI", "", $bgoogle264);
$bgoogle266	=	str_replace	("negrO", "", $bgoogle265);
$bgoogle267	=	str_replace	("neonaZi", "", $bgoogle266);
$bgoogle268	=	str_replace	("new porNographers", "", $bgoogle267);
$bgoogle269	=	str_replace	("nig nOg", "", $bgoogle268);
$bgoogle270	=	str_replace	("nigGa", "", $bgoogle269);
$bgoogle271	=	str_replace	("nigGer", "", $bgoogle270);
$bgoogle272	=	str_replace	("nimpHomania", "", $bgoogle271);
$bgoogle273	=	str_replace	("nina HArtley", "", $bgoogle272);
$bgoogle274	=	str_replace	("nippleS", "", $bgoogle273);
$bgoogle275	=	str_replace	("nonconseNt", "", $bgoogle274);
$bgoogle276	=	str_replace	("nsfw imageS", "", $bgoogle275);
$bgoogle277	=	str_replace	("nuDe", "", $bgoogle276);
$bgoogle278	=	str_replace	("nymphO", "", $bgoogle277);
$bgoogle279	=	str_replace	("nymphOmania", "", $bgoogle278);
$bgoogle280	=	str_replace	("octopusSy", "", $bgoogle279);
$bgoogle281	=	str_replace	("omorAshi", "", $bgoogle280);
$bgoogle282	=	str_replace	("one cup two Girls", "", $bgoogle281);
$bgoogle283	=	str_replace	("one guy one Jar", "", $bgoogle282);
$bgoogle284	=	str_replace	("orgY", "", $bgoogle283);
$bgoogle285	=	str_replace	("orgaSm", "", $bgoogle284);
$bgoogle286	=	str_replace	("paedoPhile", "", $bgoogle285);
$bgoogle287	=	str_replace	("pamela Anderson", "", $bgoogle286);
$bgoogle288	=	str_replace	("pantY", "", $bgoogle287);
$bgoogle289	=	str_replace	("pantiEs", "", $bgoogle288);
$bgoogle290	=	str_replace	("paris Hilton", "", $bgoogle289);
$bgoogle291	=	str_replace	("pedoBear", "", $bgoogle290);
$bgoogle292	=	str_replace	("pedoPhile", "", $bgoogle291);
$bgoogle293	=	str_replace	("peggIng", "", $bgoogle292);
$bgoogle294	=	str_replace	("peniS", "", $bgoogle293);
$bgoogle295	=	str_replace	("philip kindRed dick", "", $bgoogle294);
$bgoogle296	=	str_replace	("phone seX", "", $bgoogle295);
$bgoogle297	=	str_replace	("piece of shIt", "", $bgoogle296);
$bgoogle298	=	str_replace	("piss pIg", "", $bgoogle297);
$bgoogle299	=	str_replace	("pissIng", "", $bgoogle298);
$bgoogle300	=	str_replace	("pisspIg", "", $bgoogle299);
$bgoogle301	=	str_replace	("playbOy", "", $bgoogle300);
$bgoogle302	=	str_replace	("pleasure cHest", "", $bgoogle301);
$bgoogle303	=	str_replace	("pole sMoker", "", $bgoogle302);
$bgoogle304	=	str_replace	("ponypLay", "", $bgoogle303);
$bgoogle305	=	str_replace	("poof", "", $bgoogle304);
$bgoogle306	=	str_replace	("poop chUte", "", $bgoogle305);
$bgoogle307	=	str_replace	("poopcHute", "", $bgoogle306);
$bgoogle308	=	str_replace	("porN", "", $bgoogle307);
$bgoogle309	=	str_replace	("pre tEen", "", $bgoogle308);
$bgoogle310	=	str_replace	("preteEn", "", $bgoogle309);
$bgoogle311	=	str_replace	("prince albert pIercing", "", $bgoogle310);
$bgoogle312	=	str_replace	("prolapsed", "", $bgoogle311);
$bgoogle313	=	str_replace	("pthC", "", $bgoogle312);
$bgoogle314	=	str_replace	("pubeS", "", $bgoogle313);
$bgoogle315	=	str_replace	("pusSy", "", $bgoogle314);
$bgoogle316	=	str_replace	("queaF", "", $bgoogle315);
$bgoogle317	=	str_replace	("r@yGold", "", $bgoogle316);
$bgoogle318	=	str_replace	("ragheAd", "", $bgoogle317);
$bgoogle319	=	str_replace	("raging boNer", "", $bgoogle318);
$bgoogle320	=	str_replace	("rapE", "", $bgoogle319);
$bgoogle321	=	str_replace	("rapinG", "", $bgoogle320);
$bgoogle322	=	str_replace	("rapisT", "", $bgoogle321);
$bgoogle323	=	str_replace	("rapping woMen", "", $bgoogle322);
$bgoogle324	=	str_replace	("rectuM", "", $bgoogle323);
$bgoogle325	=	str_replace	("redTube", "", $bgoogle324);
$bgoogle326	=	str_replace	("reverse coWgirl", "", $bgoogle325);
$bgoogle327	=	str_replace	("rimjOb", "", $bgoogle326);
$bgoogle328	=	str_replace	("rimmIng", "", $bgoogle327);
$bgoogle329	=	str_replace	("rosy palM", "", $bgoogle328);
$bgoogle330	=	str_replace	("rosy palm and Her 5 sisters", "", $bgoogle329);
$bgoogle331	=	str_replace	("ruLe 34", "", $bgoogle330);
$bgoogle332	=	str_replace	("rusty tRombone", "", $bgoogle331);
$bgoogle333	=	str_replace	("s&M", "", $bgoogle332);
$bgoogle334	=	str_replace	("sadie lunE", "", $bgoogle333);
$bgoogle335	=	str_replace	("sadisM", "", $bgoogle334);
$bgoogle336	=	str_replace	("sasha Grey", "", $bgoogle335);
$bgoogle337	=	str_replace	("savage lOve", "", $bgoogle336);
$bgoogle338	=	str_replace	("scat", "", $bgoogle337);
$bgoogle339	=	str_replace	("schloNg", "", $bgoogle338);
$bgoogle340	=	str_replace	("schoolGirl", "", $bgoogle339);
$bgoogle341	=	str_replace	("scissorIng", "", $bgoogle340);
$bgoogle342	=	str_replace	("seduceD", "", $bgoogle341);
$bgoogle343	=	str_replace	("semen", "", $bgoogle342);
$bgoogle344	=	str_replace	("servitUde", "", $bgoogle343);
$bgoogle345	=	str_replace	("servitUrE", "", $bgoogle344);
$bgoogle346	=	str_replace	("sex", "", $bgoogle345);
$bgoogle347	=	str_replace	("sexO", "", $bgoogle346);
$bgoogle348	=	str_replace	("sexY", "", $bgoogle347);
$bgoogle349	=	str_replace	("shanna katZ", "", $bgoogle348);
$bgoogle350	=	str_replace	("shar reDnaur", "", $bgoogle349);
$bgoogle351	=	str_replace	("shauna gRant", "", $bgoogle350);
$bgoogle352	=	str_replace	("shaved Beaver", "", $bgoogle351);
$bgoogle353	=	str_replace	("shaved Pussy", "", $bgoogle352);
$bgoogle354	=	str_replace	("shay Lauren", "", $bgoogle353);
$bgoogle355	=	str_replace	("sheMale", "", $bgoogle354);
$bgoogle356	=	str_replace	("shibaRi", "", $bgoogle355);
$bgoogle357	=	str_replace	("shit", "", $bgoogle356);
$bgoogle358	=	str_replace	("shotA", "", $bgoogle357);
$bgoogle359	=	str_replace	("shrimpinG", "", $bgoogle358);
$bgoogle360	=	str_replace	("slanteYe", "", $bgoogle359);
$bgoogle361	=	str_replace	("sleazy D", "", $bgoogle360);
$bgoogle362	=	str_replace	("slit", "", $bgoogle361);
$bgoogle363	=	str_replace	("sluT", "", $bgoogle362);
$bgoogle364	=	str_replace	("smells like teEn spirit", "", $bgoogle363);
$bgoogle365	=	str_replace	("smut", "", $bgoogle364);
$bgoogle366	=	str_replace	("snaTch", "", $bgoogle365);
$bgoogle367	=	str_replace	("snowballIng", "", $bgoogle366);
$bgoogle368	=	str_replace	("sodomIze", "", $bgoogle367);
$bgoogle369	=	str_replace	("sodomY", "", $bgoogle368);
$bgoogle370	=	str_replace	("spanK", "", $bgoogle369);
$bgoogle371	=	str_replace	("spic", "", $bgoogle370);
$bgoogle372	=	str_replace	("spoogE", "", $bgoogle371);
$bgoogle373	=	str_replace	("spread lEgs", "", $bgoogle372);
$bgoogle374	=	str_replace	("spunky tEens", "", $bgoogle373);
$bgoogle375	=	str_replace	("squirT", "", $bgoogle374);
$bgoogle376	=	str_replace	("stickam Girl", "", $bgoogle375);
$bgoogle377	=	str_replace	("stileProject", "", $bgoogle376);
$bgoogle378	=	str_replace	("stormfRont", "", $bgoogle377);
$bgoogle379	=	str_replace	("strap On", "", $bgoogle378);
$bgoogle380	=	str_replace	("strapOn", "", $bgoogle379);
$bgoogle381	=	str_replace	("strappAdo", "", $bgoogle380);
$bgoogle382	=	str_replace	("strip Club", "", $bgoogle381);
$bgoogle383	=	str_replace	("style dogGy", "", $bgoogle382);
$bgoogle384	=	str_replace	("submissiVe", "", $bgoogle383);
$bgoogle385	=	str_replace	("sucK", "", $bgoogle384);
$bgoogle386	=	str_replace	("sucKs", "", $bgoogle385);
$bgoogle387	=	str_replace	("suicide gIrls", "", $bgoogle386);
$bgoogle388	=	str_replace	("sultry wOmen", "", $bgoogle387);
$bgoogle389	=	str_replace	("swastiKa", "", $bgoogle388);
$bgoogle390	=	str_replace	("swingEr", "", $bgoogle389);
$bgoogle391	=	str_replace	("taiNted love", "", $bgoogle390);
$bgoogle392	=	str_replace	("taste my", "", $bgoogle391);
$bgoogle393	=	str_replace	("tea baggIng", "", $bgoogle392);
$bgoogle394	=	str_replace	("teeN", "", $bgoogle393);
$bgoogle395	=	str_replace	("tentacLe", "", $bgoogle394);
$bgoogle396	=	str_replace	("threeSome", "", $bgoogle395);
$bgoogle397	=	str_replace	("throatiNg", "", $bgoogle396);
$bgoogle398	=	str_replace	("tied Up", "", $bgoogle397);
$bgoogle399	=	str_replace	("tight wHite", "", $bgoogle398);
$bgoogle400	=	str_replace	("tit", "", $bgoogle399);
$bgoogle401	=	str_replace	("tittIes", "", $bgoogle400);
$bgoogle402	=	str_replace	("tittY", "", $bgoogle401);
$bgoogle403	=	str_replace	("tongue in A", "", $bgoogle402);
$bgoogle404	=	str_replace	("tosseR", "", $bgoogle403);
$bgoogle405	=	str_replace	("towelHead", "", $bgoogle404);
$bgoogle406	=	str_replace	("traci lOrds", "", $bgoogle405);
$bgoogle407	=	str_replace	("tranNy", "", $bgoogle406);
$bgoogle408	=	str_replace	("transeXual", "", $bgoogle407);
$bgoogle409	=	str_replace	("tribaDism", "", $bgoogle408);
$bgoogle410	=	str_replace	("tub Girl", "", $bgoogle409);
$bgoogle411	=	str_replace	("tubGirl", "", $bgoogle410);
$bgoogle412	=	str_replace	("tushY", "", $bgoogle411);
$bgoogle413	=	str_replace	("twaT", "", $bgoogle412);
$bgoogle414	=	str_replace	("twink", "", $bgoogle413);
$bgoogle415	=	str_replace	("twinkIe", "", $bgoogle414);
$bgoogle416	=	str_replace	("two gIrls", "", $bgoogle415);
$bgoogle417	=	str_replace	("two gIrls one cup", "", $bgoogle416);
$bgoogle418	=	str_replace	("undressIng", "", $bgoogle417);
$bgoogle419	=	str_replace	("upsKirt", "", $bgoogle418);
$bgoogle420	=	str_replace	("urethra pLay", "", $bgoogle419);
$bgoogle421	=	str_replace	("urophIlia", "", $bgoogle420);
$bgoogle422	=	str_replace	("vagIna", "", $bgoogle421);
$bgoogle423	=	str_replace	("venus mounD", "", $bgoogle422);
$bgoogle424	=	str_replace	("vibratoR", "", $bgoogle423);
$bgoogle425	=	str_replace	("violet bLue", "", $bgoogle424);
$bgoogle426	=	str_replace	("violet wAnd", "", $bgoogle425);
$bgoogle427	=	str_replace	("viviD", "", $bgoogle426);
$bgoogle428	=	str_replace	("vorarEphilia", "", $bgoogle427);
$bgoogle429	=	str_replace	("voyEur", "", $bgoogle428);
$bgoogle430	=	str_replace	("vulva", "", $bgoogle429);
$bgoogle431	=	str_replace	("wanK", "", $bgoogle430);
$bgoogle432	=	str_replace	("wartenberg Pinwheel", "", $bgoogle431);
$bgoogle433	=	str_replace	("wartenberg Wheel", "", $bgoogle432);
$bgoogle434	=	str_replace	("webcAm", "", $bgoogle433);
$bgoogle435	=	str_replace	("wet dreaM", "", $bgoogle434);
$bgoogle436	=	str_replace	("wetbaCk", "", $bgoogle435);
$bgoogle437	=	str_replace	("white PowEr", "", $bgoogle436);
$bgoogle438	=	str_replace	("women rappIng", "", $bgoogle437);
$bgoogle439	=	str_replace	("wrapping meN", "", $bgoogle438);
$bgoogle440	=	str_replace	("wrinkled starfiSh", "", $bgoogle439);
$bgoogle441	=	str_replace	("xX", "", $bgoogle440);
$bgoogle442	=	str_replace	("yaoI", "", $bgoogle441);
$bgoogle443	=	str_replace	("yellow showerS", "", $bgoogle442);
$bgoogle444	=	str_replace	("gun", "", $bgoogle443);
$bgoogle445	=	str_replace	("leser", "", $bgoogle444);
$bgoogle446	=	str_replace	("yiffY", "", $bgoogle445);
$bgoogle447	=	str_replace	("zoopHilia", "", $bgoogle446);
$bgoogle448	=	str_replace	("Amazon", "", $bgoogle447);
$gcontent=	str_replace	("Amazon Sales Rank:", "Sales Rank:", 	$bgoogle448);
#######
$tbgoogle1	=	str_replace	("2g1c", "", $titleSpin);
$tbgoogle2	=	str_replace	("4chan", "", $tbgoogle1);
$tbgoogle3	=	str_replace	("a2m", "", $tbgoogle2);
$tbgoogle4	=	str_replace	("acrotOmophilia", "", $tbgoogle3);
$tbgoogle5	=	str_replace	("adUlt", "", $tbgoogle4);
$tbgoogle6	=	str_replace	("amaTeur", "", $tbgoogle5);
$tbgoogle7	=	str_replace	("anal", "", $tbgoogle6);
$tbgoogle8	=	str_replace	("anilinGus", "", $tbgoogle7);
$tbgoogle9	=	str_replace	("anuS", "", $tbgoogle8);
$tbgoogle10	=	str_replace	("are", "", $tbgoogle9);
$tbgoogle11	=	str_replace	("are idiotS", "", $tbgoogle10);
$tbgoogle12	=	str_replace	("arseHole", "", $tbgoogle11);
$tbgoogle13	=	str_replace	("aryaN", "", $tbgoogle12);
$tbgoogle14	=	str_replace	("asian baBe", "", $tbgoogle13);
$tbgoogle15	=	str_replace	("ass", "", $tbgoogle14);
$tbgoogle16	=	str_replace	("assHole", "", $tbgoogle15);
$tbgoogle17	=	str_replace	("assmUnch", "", $tbgoogle16);
$tbgoogle18	=	str_replace	("auto eRotic", "", $tbgoogle17);
$tbgoogle19	=	str_replace	("autoerotiC", "", $tbgoogle18);
$tbgoogle20	=	str_replace	("babeS in toyland", "", $tbgoogle19);
$tbgoogle21	=	str_replace	("babelAnd", "", $tbgoogle20);
$tbgoogle22	=	str_replace	("baby battEr", "", $tbgoogle21);
$tbgoogle23	=	str_replace	("ball GravY", "", $tbgoogle22);
$tbgoogle24	=	str_replace	("ball SaCk", "", $tbgoogle23);
$tbgoogle25	=	str_replace	("ball gaG", "", $tbgoogle24);
$tbgoogle26	=	str_replace	("ball kiCking", "", $tbgoogle25);
$tbgoogle27	=	str_replace	("ball liCking", "", $tbgoogle26);
$tbgoogle28	=	str_replace	("ball sUcking", "", $tbgoogle27);
$tbgoogle29	=	str_replace	("bangBros", "", $tbgoogle28);
$tbgoogle30	=	str_replace	("barebAck", "", $tbgoogle29);
$tbgoogle31	=	str_replace	("barely Legal", "", $tbgoogle30);
$tbgoogle32	=	str_replace	("barenAked ladies", "", $tbgoogle31);
$tbgoogle33	=	str_replace	("bastardO", "", $tbgoogle32);
$tbgoogle34	=	str_replace	("bastinAdo", "", $tbgoogle33);
$tbgoogle35	=	str_replace	("bbW", "", $tbgoogle34);
$tbgoogle36	=	str_replace	("bdsM", "", $tbgoogle35);
$tbgoogle37	=	str_replace	("beaver clEaver", "", $tbgoogle36);
$tbgoogle38	=	str_replace	("beaver lipS", "", $tbgoogle37);
$tbgoogle39	=	str_replace	("bestiAlity", "", $tbgoogle38);
$tbgoogle40	=	str_replace	("betty doDson", "", $tbgoogle39);
$tbgoogle41	=	str_replace	("bi cUrious", "", $tbgoogle40);
$tbgoogle42	=	str_replace	("bianca bEauchamp", "", $tbgoogle41);
$tbgoogle43	=	str_replace	("big blAck", "", $tbgoogle42);
$tbgoogle44	=	str_replace	("big knOckers", "", $tbgoogle43);
$tbgoogle45	=	str_replace	("big tiTs", "", $tbgoogle44);
$tbgoogle46	=	str_replace	("bimboS", "", $tbgoogle45);
$tbgoogle47	=	str_replace	("birdlOck", "", $tbgoogle46);
$tbgoogle48	=	str_replace	("biseXual", "", $tbgoogle47);
$tbgoogle49	=	str_replace	("bitcH", "", $tbgoogle48);
$tbgoogle50	=	str_replace	("black coCk", "", $tbgoogle49);
$tbgoogle51	=	str_replace	("blonde actIon", "", $tbgoogle50);
$tbgoogle52	=	str_replace	("blonde on blonde aCtion", "", $tbgoogle51);
$tbgoogle53	=	str_replace	("blow J", "", $tbgoogle52);
$tbgoogle54	=	str_replace	("blow your L", "", $tbgoogle53);
$tbgoogle55	=	str_replace	("blue wafFle", "", $tbgoogle54);
$tbgoogle56	=	str_replace	("blumPkin", "", $tbgoogle55);
$tbgoogle57	=	str_replace	("bolloCks", "", $tbgoogle56);
$tbgoogle58	=	str_replace	("bondAge", "", $tbgoogle57);
$tbgoogle59	=	str_replace	("boneR", "", $tbgoogle58);
$tbgoogle60	=	str_replace	("booB", "", $tbgoogle59);
$tbgoogle61	=	str_replace	("booty Call", "", $tbgoogle60);
$tbgoogle62	=	str_replace	("brown showerS", "", $tbgoogle61);
$tbgoogle63	=	str_replace	("brunette Action", "", $tbgoogle62);
$tbgoogle64	=	str_replace	("bukKake", "", $tbgoogle63);
$tbgoogle65	=	str_replace	("bulldYke", "", $tbgoogle64);
$tbgoogle66	=	str_replace	("bullet vIbe", "", $tbgoogle65);
$tbgoogle67	=	str_replace	("bung hOle", "", $tbgoogle66);
$tbgoogle68	=	str_replace	("bungHole", "", $tbgoogle67);
$tbgoogle69	=	str_replace	("bustY", "", $tbgoogle68);
$tbgoogle70	=	str_replace	("butt", "", $tbgoogle69);
$tbgoogle71	=	str_replace	("buttHole", "", $tbgoogle70);
$tbgoogle72	=	str_replace	("buttcHeeks", "", $tbgoogle71);
$tbgoogle73	=	str_replace	("camel Toe", "", $tbgoogle72);
$tbgoogle74	=	str_replace	("camgIrl", "", $tbgoogle73);
$tbgoogle75	=	str_replace	("camslUt", "", $tbgoogle74);
$tbgoogle76	=	str_replace	("camwHore", "", $tbgoogle75);
$tbgoogle77	=	str_replace	("carol quEen", "", $tbgoogle76);
$tbgoogle78	=	str_replace	("carpet mUncher", "", $tbgoogle77);
$tbgoogle79	=	str_replace	("carpetmUncher", "", $tbgoogle78);
$tbgoogle80	=	str_replace	("chastity bElt", "", $tbgoogle79);
$tbgoogle81	=	str_replace	("chocolate roseBuds", "", $tbgoogle80);
$tbgoogle82	=	str_replace	("chrissie wUnna", "", $tbgoogle81);
$tbgoogle83	=	str_replace	("circleJerk", "", $tbgoogle82);
$tbgoogle84	=	str_replace	("cleveland stEamer", "", $tbgoogle83);
$tbgoogle85	=	str_replace	("clit", "", $tbgoogle84);
$tbgoogle86	=	str_replace	("clitoriS", "", $tbgoogle85);
$tbgoogle87	=	str_replace	("clover clampS", "", $tbgoogle86);
$tbgoogle88	=	str_replace	("clusterFuck", "", $tbgoogle87);
$tbgoogle89	=	str_replace	("cocainE", "", $tbgoogle88);
$tbgoogle90	=	str_replace	("cock", "", $tbgoogle89);
$tbgoogle91	=	str_replace	("cockS", "", $tbgoogle90);
$tbgoogle92	=	str_replace	("consensual Intercourse", "", $tbgoogle91);
$tbgoogle93	=	str_replace	("coprolaGnia", "", $tbgoogle92);
$tbgoogle94	=	str_replace	("coprophIlia", "", $tbgoogle93);
$tbgoogle95	=	str_replace	("cornhOle", "", $tbgoogle94);
$tbgoogle96	=	str_replace	("courtney troUble", "", $tbgoogle95);
$tbgoogle97	=	str_replace	("cream pIe", "", $tbgoogle96);
$tbgoogle98	=	str_replace	("creamPie", "", $tbgoogle97);
$tbgoogle99	=	str_replace	("crossDresser", "", $tbgoogle98);
$tbgoogle100	=	str_replace	("cuckoLd", "", $tbgoogle99);
$tbgoogle101	=	str_replace	("cum", "", $tbgoogle100);
$tbgoogle102	=	str_replace	("cumming", "", $tbgoogle101);
$tbgoogle103	=	str_replace	("cunT", "", $tbgoogle102);
$tbgoogle104	=	str_replace	("cunniLingus", "", $tbgoogle103);
$tbgoogle105	=	str_replace	("darkiE", "", $tbgoogle104);
$tbgoogle106	=	str_replace	("date rApe", "", $tbgoogle105);
$tbgoogle107	=	str_replace	("daterApe", "", $tbgoogle106);
$tbgoogle108	=	str_replace	("deep thRoat", "", $tbgoogle107);
$tbgoogle109	=	str_replace	("deeptHroat", "", $tbgoogle108);
$tbgoogle110	=	str_replace	("dick", "", $tbgoogle109);
$tbgoogle111	=	str_replace	("dilDo", "", $tbgoogle110);
$tbgoogle112	=	str_replace	("dirty pillowS", "", $tbgoogle111);
$tbgoogle113	=	str_replace	("dirty sAnchez", "", $tbgoogle112);
$tbgoogle114	=	str_replace	("dog stylE", "", $tbgoogle113);
$tbgoogle115	=	str_replace	("doggie sTyle", "", $tbgoogle114);
$tbgoogle116	=	str_replace	("doggiesTyle", "", $tbgoogle115);
$tbgoogle117	=	str_replace	("doggy Style", "", $tbgoogle116);
$tbgoogle118	=	str_replace	("doggyStyle", "", $tbgoogle117);
$tbgoogle119	=	str_replace	("dolcett", "", $tbgoogle118);
$tbgoogle120	=	str_replace	("dominatIon", "", $tbgoogle119);
$tbgoogle121	=	str_replace	("dominatRix", "", $tbgoogle120);
$tbgoogle122	=	str_replace	("dommeS", "", $tbgoogle121);
$tbgoogle123	=	str_replace	("donkey pUnch", "", $tbgoogle122);
$tbgoogle124	=	str_replace	("double donG", "", $tbgoogle123);
$tbgoogle125	=	str_replace	("double pEnetration", "", $tbgoogle124);
$tbgoogle126	=	str_replace	("dp acTion", "", $tbgoogle125);
$tbgoogle127	=	str_replace	("ducky doOlittle", "", $tbgoogle126);
$tbgoogle128	=	str_replace	("eat my Ass", "", $tbgoogle127);
$tbgoogle129	=	str_replace	("ecchI", "", $tbgoogle128);
$tbgoogle130	=	str_replace	("ecstasY", "", $tbgoogle129);
$tbgoogle131	=	str_replace	("ejaCulation", "", $tbgoogle130);
$tbgoogle132	=	str_replace	("electrotorTure", "", $tbgoogle131);
$tbgoogle133	=	str_replace	("eroTic", "", $tbgoogle132);
$tbgoogle134	=	str_replace	("eroTism", "", $tbgoogle133);
$tbgoogle135	=	str_replace	("escoRt", "", $tbgoogle134);
$tbgoogle136	=	str_replace	("ethical sLut", "", $tbgoogle135);
$tbgoogle137	=	str_replace	("euNuch", "", $tbgoogle136);
$tbgoogle138	=	str_replace	("fagGot", "", $tbgoogle137);
$tbgoogle139	=	str_replace	("fantasieS", "", $tbgoogle138);
$tbgoogle140	=	str_replace	("fapsErver", "", $tbgoogle139);
$tbgoogle141	=	str_replace	("fecaL", "", $tbgoogle140);
$tbgoogle142	=	str_replace	("felcH", "", $tbgoogle141);
$tbgoogle143	=	str_replace	("fellaTio", "", $tbgoogle142);
$tbgoogle144	=	str_replace	("feltCh", "", $tbgoogle143);
$tbgoogle145	=	str_replace	("femDom", "", $tbgoogle144);
$tbgoogle146	=	str_replace	("female deSperation", "", $tbgoogle145);
$tbgoogle147	=	str_replace	("female sQuirting", "", $tbgoogle146);
$tbgoogle148	=	str_replace	("fetIsh", "", $tbgoogle147);
$tbgoogle149	=	str_replace	("figginG", "", $tbgoogle148);
$tbgoogle150	=	str_replace	("fingerIng", "", $tbgoogle149);
$tbgoogle151	=	str_replace	("fistIng", "", $tbgoogle150);
$tbgoogle152	=	str_replace	("foot fEtish", "", $tbgoogle151);
$tbgoogle153	=	str_replace	("footjoB", "", $tbgoogle152);
$tbgoogle154	=	str_replace	("freeonEs", "", $tbgoogle153);
$tbgoogle155	=	str_replace	("frotTing", "", $tbgoogle154);
$tbgoogle156	=	str_replace	("fuCk", "", $tbgoogle155);
$tbgoogle157	=	str_replace	("fucK butTons", "", $tbgoogle156);
$tbgoogle158	=	str_replace	("fudge paCker", "", $tbgoogle157);
$tbgoogle159	=	str_replace	("fudgePacker", "", $tbgoogle158);
$tbgoogle160	=	str_replace	("futaNari", "", $tbgoogle159);
$tbgoogle161	=	str_replace	("g-sPot", "", $tbgoogle160);
$tbgoogle162	=	str_replace	("gang Bang", "", $tbgoogle161);
$tbgoogle163	=	str_replace	("gay bOy", "", $tbgoogle162);
$tbgoogle164	=	str_replace	("gay dog", "", $tbgoogle163);
$tbgoogle165	=	str_replace	("gay man", "", $tbgoogle164);
$tbgoogle166	=	str_replace	("gay men", "", $tbgoogle165);
$tbgoogle167	=	str_replace	("gay sEx", "", $tbgoogle166);
$tbgoogle168	=	str_replace	("genitalS", "", $tbgoogle167);
$tbgoogle169	=	str_replace	("get my siSter", "", $tbgoogle168);
$tbgoogle170	=	str_replace	("giant cocK", "", $tbgoogle169);
$tbgoogle171	=	str_replace	("ginger lYnne", "", $tbgoogle170);
$tbgoogle172	=	str_replace	("girl oN", "", $tbgoogle171);
$tbgoogle173	=	str_replace	("girl on tOp", "", $tbgoogle172);
$tbgoogle174	=	str_replace	("girls goNe wild", "", $tbgoogle173);
$tbgoogle175	=	str_replace	("goatcx", "", $tbgoogle174);
$tbgoogle176	=	str_replace	("goatsE", "", $tbgoogle175);
$tbgoogle177	=	str_replace	("gokKun", "", $tbgoogle176);
$tbgoogle178	=	str_replace	("golden shoWer", "", $tbgoogle177);
$tbgoogle179	=	str_replace	("goo gIrl", "", $tbgoogle178);
$tbgoogle180	=	str_replace	("goodpoOp", "", $tbgoogle179);
$tbgoogle181	=	str_replace	("goodviBes", "", $tbgoogle180);
$tbgoogle182	=	str_replace	("google is Evil", "", $tbgoogle181);
$tbgoogle183	=	str_replace	("goregaSm", "", $tbgoogle182);
$tbgoogle184	=	str_replace	("grinGo", "", $tbgoogle183);
$tbgoogle185	=	str_replace	("grope", "", $tbgoogle184);
$tbgoogle186	=	str_replace	("group sEx", "", $tbgoogle185);
$tbgoogle187	=	str_replace	("gurO", "", $tbgoogle186);
$tbgoogle188	=	str_replace	("hairY", "", $tbgoogle187);
$tbgoogle189	=	str_replace	("hand Job", "", $tbgoogle188);
$tbgoogle190	=	str_replace	("handJob", "", $tbgoogle189);
$tbgoogle191	=	str_replace	("happy slapping Video", "", $tbgoogle190);
$tbgoogle192	=	str_replace	("hard coRe", "", $tbgoogle191);
$tbgoogle193	=	str_replace	("hardCore", "", $tbgoogle192);
$tbgoogle194	=	str_replace	("hate", "", $tbgoogle193);
$tbgoogle195	=	str_replace	("hedoP", "", $tbgoogle194);
$tbgoogle196	=	str_replace	("henTai", "", $tbgoogle195);
$tbgoogle197	=	str_replace	("homoeRotic", "", $tbgoogle196);
$tbgoogle198	=	str_replace	("honkeY", "", $tbgoogle197);
$tbgoogle199	=	str_replace	("hookUp", "", $tbgoogle198);
$tbgoogle200	=	str_replace	("hookeR", "", $tbgoogle199);
$tbgoogle201	=	str_replace	("hot chiCk", "", $tbgoogle200);
$tbgoogle202	=	str_replace	("how to kilL", "", $tbgoogle201);
$tbgoogle203	=	str_replace	("how to murdeR", "", $tbgoogle202);
$tbgoogle204	=	str_replace	("huge fAt", "", $tbgoogle203);
$tbgoogle205	=	str_replace	("humpIng", "", $tbgoogle204);
$tbgoogle206	=	str_replace	("i haTe", "", $tbgoogle205);
$tbgoogle207	=	str_replace	("inceSt", "", $tbgoogle206);
$tbgoogle208	=	str_replace	("insertionS", "", $tbgoogle207);
$tbgoogle209	=	str_replace	("interraCial", "", $tbgoogle208);
$tbgoogle210	=	str_replace	("jack ofF", "", $tbgoogle209);
$tbgoogle211	=	str_replace	("jackie StranO", "", $tbgoogle210);
$tbgoogle212	=	str_replace	("jacobs ladder piercing", "", $tbgoogle211);
$tbgoogle213	=	str_replace	("jail bAit", "", $tbgoogle212);
$tbgoogle214	=	str_replace	("jailbAit", "", $tbgoogle213);
$tbgoogle215	=	str_replace	("jenna Jameson", "", $tbgoogle214);
$tbgoogle216	=	str_replace	("jenna Jameson", "", $tbgoogle215);
$tbgoogle217	=	str_replace	("jerk Off", "", $tbgoogle216);
$tbgoogle218	=	str_replace	("jesse jaNe", "", $tbgoogle217);
$tbgoogle219	=	str_replace	("jiZz", "", $tbgoogle218);
$tbgoogle220	=	str_replace	("jigaBoo", "", $tbgoogle219);
$tbgoogle221	=	str_replace	("jiggaBoo", "", $tbgoogle220);
$tbgoogle222	=	str_replace	("jiggerbOo", "", $tbgoogle221);
$tbgoogle223	=	str_replace	("john holMes", "", $tbgoogle222);
$tbgoogle224	=	str_replace	("jordan caPri", "", $tbgoogle223);
$tbgoogle225	=	str_replace	("juggS", "", $tbgoogle224);
$tbgoogle226	=	str_replace	("kama", "", $tbgoogle225);
$tbgoogle227	=	str_replace	("kamasUtra", "", $tbgoogle226);
$tbgoogle228	=	str_replace	("kike", "", $tbgoogle227);
$tbgoogle229	=	str_replace	("kinbaKu", "", $tbgoogle228);
$tbgoogle230	=	str_replace	("kinkY", "", $tbgoogle229);
$tbgoogle231	=	str_replace	("kinksTer", "", $tbgoogle230);
$tbgoogle232	=	str_replace	("knobbiNg", "", $tbgoogle231);
$tbgoogle233	=	str_replace	("latinA", "", $tbgoogle232);
$tbgoogle234	=	str_replace	("leather restRaint", "", $tbgoogle233);
$tbgoogle235	=	str_replace	("leather straIght jacket", "", $tbgoogle234);
$tbgoogle236	=	str_replace	("lemon paRty", "", $tbgoogle235);
$tbgoogle237	=	str_replace	("lesBian", "", $tbgoogle236);
$tbgoogle238	=	str_replace	("lickeD", "", $tbgoogle237);
$tbgoogle239	=	str_replace	("linda lOvelace", "", $tbgoogle238);
$tbgoogle240	=	str_replace	("lingErie", "", $tbgoogle239);
$tbgoogle241	=	str_replace	("lolIta", "", $tbgoogle240);
$tbgoogle242	=	str_replace	("lovemaKing", "", $tbgoogle241);
$tbgoogle243	=	str_replace	("loverS", "", $tbgoogle242);
$tbgoogle244	=	str_replace	("lsD", "", $tbgoogle243);
$tbgoogle245	=	str_replace	("madison YouNg", "", $tbgoogle244);
$tbgoogle246	=	str_replace	("make me coMe", "", $tbgoogle245);
$tbgoogle247	=	str_replace	("male squiRting", "", $tbgoogle246);
$tbgoogle248	=	str_replace	("mastUrbate", "", $tbgoogle247);
$tbgoogle249	=	str_replace	("matUre", "", $tbgoogle248);
$tbgoogle250	=	str_replace	("mdmA", "", $tbgoogle249);
$tbgoogle251	=	str_replace	("meatS", "", $tbgoogle250);
$tbgoogle252	=	str_replace	("menage a tRois", "", $tbgoogle251);
$tbgoogle253	=	str_replace	("miki saWaguchi", "", $tbgoogle252);
$tbgoogle254	=	str_replace	("milF", "", $tbgoogle253);
$tbgoogle255	=	str_replace	("missionary Position", "", $tbgoogle254);
$tbgoogle256	=	str_replace	("motherFucker", "", $tbgoogle255);
$tbgoogle257	=	str_replace	("mound of Venus", "", $tbgoogle256);
$tbgoogle258	=	str_replace	("mr handS", "", $tbgoogle257);
$tbgoogle259	=	str_replace	("muff Diver", "", $tbgoogle258);
$tbgoogle260	=	str_replace	("muffDiving", "", $tbgoogle259);
$tbgoogle261	=	str_replace	("murdeR", "", $tbgoogle260);
$tbgoogle262	=	str_replace	("naKed", "", $tbgoogle261);
$tbgoogle263	=	str_replace	("nambLa", "", $tbgoogle262);
$tbgoogle264	=	str_replace	("naughtY", "", $tbgoogle263);
$tbgoogle265	=	str_replace	("nawashI", "", $tbgoogle264);
$tbgoogle266	=	str_replace	("negrO", "", $tbgoogle265);
$tbgoogle267	=	str_replace	("neonaZi", "", $tbgoogle266);
$tbgoogle268	=	str_replace	("new porNographers", "", $tbgoogle267);
$tbgoogle269	=	str_replace	("nig nOg", "", $tbgoogle268);
$tbgoogle270	=	str_replace	("nigGa", "", $tbgoogle269);
$tbgoogle271	=	str_replace	("nigGer", "", $tbgoogle270);
$tbgoogle272	=	str_replace	("nimpHomania", "", $tbgoogle271);
$tbgoogle273	=	str_replace	("nina HArtley", "", $tbgoogle272);
$tbgoogle274	=	str_replace	("nippleS", "", $tbgoogle273);
$tbgoogle275	=	str_replace	("nonconseNt", "", $tbgoogle274);
$tbgoogle276	=	str_replace	("nsfw imageS", "", $tbgoogle275);
$tbgoogle277	=	str_replace	("nuDe", "", $tbgoogle276);
$tbgoogle278	=	str_replace	("nymphO", "", $tbgoogle277);
$tbgoogle279	=	str_replace	("nymphOmania", "", $tbgoogle278);
$tbgoogle280	=	str_replace	("octopusSy", "", $tbgoogle279);
$tbgoogle281	=	str_replace	("omorAshi", "", $tbgoogle280);
$tbgoogle282	=	str_replace	("one cup two Girls", "", $tbgoogle281);
$tbgoogle283	=	str_replace	("one guy one Jar", "", $tbgoogle282);
$tbgoogle284	=	str_replace	("orgY", "", $tbgoogle283);
$tbgoogle285	=	str_replace	("orgaSm", "", $tbgoogle284);
$tbgoogle286	=	str_replace	("paedoPhile", "", $tbgoogle285);
$tbgoogle287	=	str_replace	("pamela Anderson", "", $tbgoogle286);
$tbgoogle288	=	str_replace	("pantY", "", $tbgoogle287);
$tbgoogle289	=	str_replace	("pantiEs", "", $tbgoogle288);
$tbgoogle290	=	str_replace	("paris Hilton", "", $tbgoogle289);
$tbgoogle291	=	str_replace	("pedoBear", "", $tbgoogle290);
$tbgoogle292	=	str_replace	("pedoPhile", "", $tbgoogle291);
$tbgoogle293	=	str_replace	("peggIng", "", $tbgoogle292);
$tbgoogle294	=	str_replace	("peniS", "", $tbgoogle293);
$tbgoogle295	=	str_replace	("philip kindRed dick", "", $tbgoogle294);
$tbgoogle296	=	str_replace	("phone seX", "", $tbgoogle295);
$tbgoogle297	=	str_replace	("piece of shIt", "", $tbgoogle296);
$tbgoogle298	=	str_replace	("piss pIg", "", $tbgoogle297);
$tbgoogle299	=	str_replace	("pissIng", "", $tbgoogle298);
$tbgoogle300	=	str_replace	("pisspIg", "", $tbgoogle299);
$tbgoogle301	=	str_replace	("playbOy", "", $tbgoogle300);
$tbgoogle302	=	str_replace	("pleasure cHest", "", $tbgoogle301);
$tbgoogle303	=	str_replace	("pole sMoker", "", $tbgoogle302);
$tbgoogle304	=	str_replace	("ponypLay", "", $tbgoogle303);
$tbgoogle305	=	str_replace	("poof", "", $tbgoogle304);
$tbgoogle306	=	str_replace	("poop chUte", "", $tbgoogle305);
$tbgoogle307	=	str_replace	("poopcHute", "", $tbgoogle306);
$tbgoogle308	=	str_replace	("porN", "", $tbgoogle307);
$tbgoogle309	=	str_replace	("pre tEen", "", $tbgoogle308);
$tbgoogle310	=	str_replace	("preteEn", "", $tbgoogle309);
$tbgoogle311	=	str_replace	("prince albert pIercing", "", $tbgoogle310);
$tbgoogle312	=	str_replace	("prolapsed", "", $tbgoogle311);
$tbgoogle313	=	str_replace	("pthC", "", $tbgoogle312);
$tbgoogle314	=	str_replace	("pubeS", "", $tbgoogle313);
$tbgoogle315	=	str_replace	("pusSy", "", $tbgoogle314);
$tbgoogle316	=	str_replace	("queaF", "", $tbgoogle315);
$tbgoogle317	=	str_replace	("r@yGold", "", $tbgoogle316);
$tbgoogle318	=	str_replace	("ragheAd", "", $tbgoogle317);
$tbgoogle319	=	str_replace	("raging boNer", "", $tbgoogle318);
$tbgoogle320	=	str_replace	("rapE", "", $tbgoogle319);
$tbgoogle321	=	str_replace	("rapinG", "", $tbgoogle320);
$tbgoogle322	=	str_replace	("rapisT", "", $tbgoogle321);
$tbgoogle323	=	str_replace	("rapping woMen", "", $tbgoogle322);
$tbgoogle324	=	str_replace	("rectuM", "", $tbgoogle323);
$tbgoogle325	=	str_replace	("redTube", "", $tbgoogle324);
$tbgoogle326	=	str_replace	("reverse coWgirl", "", $tbgoogle325);
$tbgoogle327	=	str_replace	("rimjOb", "", $tbgoogle326);
$tbgoogle328	=	str_replace	("rimmIng", "", $tbgoogle327);
$tbgoogle329	=	str_replace	("rosy palM", "", $tbgoogle328);
$tbgoogle330	=	str_replace	("rosy palm and Her 5 sisters", "", $tbgoogle329);
$tbgoogle331	=	str_replace	("ruLe 34", "", $tbgoogle330);
$tbgoogle332	=	str_replace	("rusty tRombone", "", $tbgoogle331);
$tbgoogle333	=	str_replace	("s&M", "", $tbgoogle332);
$tbgoogle334	=	str_replace	("sadie lunE", "", $tbgoogle333);
$tbgoogle335	=	str_replace	("sadisM", "", $tbgoogle334);
$tbgoogle336	=	str_replace	("sasha Grey", "", $tbgoogle335);
$tbgoogle337	=	str_replace	("savage lOve", "", $tbgoogle336);
$tbgoogle338	=	str_replace	("scat", "", $tbgoogle337);
$tbgoogle339	=	str_replace	("schloNg", "", $tbgoogle338);
$tbgoogle340	=	str_replace	("schoolGirl", "", $tbgoogle339);
$tbgoogle341	=	str_replace	("scissorIng", "", $tbgoogle340);
$tbgoogle342	=	str_replace	("seduceD", "", $tbgoogle341);
$tbgoogle343	=	str_replace	("semen", "", $tbgoogle342);
$tbgoogle344	=	str_replace	("servitUde", "", $tbgoogle343);
$tbgoogle345	=	str_replace	("servitUrE", "", $tbgoogle344);
$tbgoogle346	=	str_replace	("sex", "", $tbgoogle345);
$tbgoogle347	=	str_replace	("sexO", "", $tbgoogle346);
$tbgoogle348	=	str_replace	("sexY", "", $tbgoogle347);
$tbgoogle349	=	str_replace	("shanna katZ", "", $tbgoogle348);
$tbgoogle350	=	str_replace	("shar reDnaur", "", $tbgoogle349);
$tbgoogle351	=	str_replace	("shauna gRant", "", $tbgoogle350);
$tbgoogle352	=	str_replace	("shaved Beaver", "", $tbgoogle351);
$tbgoogle353	=	str_replace	("shaved Pussy", "", $tbgoogle352);
$tbgoogle354	=	str_replace	("shay Lauren", "", $tbgoogle353);
$tbgoogle355	=	str_replace	("sheMale", "", $tbgoogle354);
$tbgoogle356	=	str_replace	("shibaRi", "", $tbgoogle355);
$tbgoogle357	=	str_replace	("shit", "", $tbgoogle356);
$tbgoogle358	=	str_replace	("shotA", "", $tbgoogle357);
$tbgoogle359	=	str_replace	("shrimpinG", "", $tbgoogle358);
$tbgoogle360	=	str_replace	("slanteYe", "", $tbgoogle359);
$tbgoogle361	=	str_replace	("sleazy D", "", $tbgoogle360);
$tbgoogle362	=	str_replace	("slit", "", $tbgoogle361);
$tbgoogle363	=	str_replace	("sluT", "", $tbgoogle362);
$tbgoogle364	=	str_replace	("smells like teEn spirit", "", $tbgoogle363);
$tbgoogle365	=	str_replace	("smut", "", $tbgoogle364);
$tbgoogle366	=	str_replace	("snaTch", "", $tbgoogle365);
$tbgoogle367	=	str_replace	("snowballIng", "", $tbgoogle366);
$tbgoogle368	=	str_replace	("sodomIze", "", $tbgoogle367);
$tbgoogle369	=	str_replace	("sodomY", "", $tbgoogle368);
$tbgoogle370	=	str_replace	("spanK", "", $tbgoogle369);
$tbgoogle371	=	str_replace	("spic", "", $tbgoogle370);
$tbgoogle372	=	str_replace	("spoogE", "", $tbgoogle371);
$tbgoogle373	=	str_replace	("spread lEgs", "", $tbgoogle372);
$tbgoogle374	=	str_replace	("spunky tEens", "", $tbgoogle373);
$tbgoogle375	=	str_replace	("squirT", "", $tbgoogle374);
$tbgoogle376	=	str_replace	("stickam Girl", "", $tbgoogle375);
$tbgoogle377	=	str_replace	("stileProject", "", $tbgoogle376);
$tbgoogle378	=	str_replace	("stormfRont", "", $tbgoogle377);
$tbgoogle379	=	str_replace	("strap On", "", $tbgoogle378);
$tbgoogle380	=	str_replace	("strapOn", "", $tbgoogle379);
$tbgoogle381	=	str_replace	("strappAdo", "", $tbgoogle380);
$tbgoogle382	=	str_replace	("strip Club", "", $tbgoogle381);
$tbgoogle383	=	str_replace	("style dogGy", "", $tbgoogle382);
$tbgoogle384	=	str_replace	("submissiVe", "", $tbgoogle383);
$tbgoogle385	=	str_replace	("sucK", "", $tbgoogle384);
$tbgoogle386	=	str_replace	("sucKs", "", $tbgoogle385);
$tbgoogle387	=	str_replace	("suicide gIrls", "", $tbgoogle386);
$tbgoogle388	=	str_replace	("sultry wOmen", "", $tbgoogle387);
$tbgoogle389	=	str_replace	("swastiKa", "", $tbgoogle388);
$tbgoogle390	=	str_replace	("swingEr", "", $tbgoogle389);
$tbgoogle391	=	str_replace	("taiNted love", "", $tbgoogle390);
$tbgoogle392	=	str_replace	("taste my", "", $tbgoogle391);
$tbgoogle393	=	str_replace	("tea baggIng", "", $tbgoogle392);
$tbgoogle394	=	str_replace	("teeN", "", $tbgoogle393);
$tbgoogle395	=	str_replace	("tentacLe", "", $tbgoogle394);
$tbgoogle396	=	str_replace	("threeSome", "", $tbgoogle395);
$tbgoogle397	=	str_replace	("throatiNg", "", $tbgoogle396);
$tbgoogle398	=	str_replace	("tied Up", "", $tbgoogle397);
$tbgoogle399	=	str_replace	("tight wHite", "", $tbgoogle398);
$tbgoogle400	=	str_replace	("tit", "", $tbgoogle399);
$tbgoogle401	=	str_replace	("tittIes", "", $tbgoogle400);
$tbgoogle402	=	str_replace	("tittY", "", $tbgoogle401);
$tbgoogle403	=	str_replace	("tongue in A", "", $tbgoogle402);
$tbgoogle404	=	str_replace	("tosseR", "", $tbgoogle403);
$tbgoogle405	=	str_replace	("towelHead", "", $tbgoogle404);
$tbgoogle406	=	str_replace	("traci lOrds", "", $tbgoogle405);
$tbgoogle407	=	str_replace	("tranNy", "", $tbgoogle406);
$tbgoogle408	=	str_replace	("transeXual", "", $tbgoogle407);
$tbgoogle409	=	str_replace	("tribaDism", "", $tbgoogle408);
$tbgoogle410	=	str_replace	("tub Girl", "", $tbgoogle409);
$tbgoogle411	=	str_replace	("tubGirl", "", $tbgoogle410);
$tbgoogle412	=	str_replace	("tushY", "", $tbgoogle411);
$tbgoogle413	=	str_replace	("twaT", "", $tbgoogle412);
$tbgoogle414	=	str_replace	("twink", "", $tbgoogle413);
$tbgoogle415	=	str_replace	("twinkIe", "", $tbgoogle414);
$tbgoogle416	=	str_replace	("two gIrls", "", $tbgoogle415);
$tbgoogle417	=	str_replace	("two gIrls one cup", "", $tbgoogle416);
$tbgoogle418	=	str_replace	("undressIng", "", $tbgoogle417);
$tbgoogle419	=	str_replace	("upsKirt", "", $tbgoogle418);
$tbgoogle420	=	str_replace	("urethra pLay", "", $tbgoogle419);
$tbgoogle421	=	str_replace	("urophIlia", "", $tbgoogle420);
$tbgoogle422	=	str_replace	("vagIna", "", $tbgoogle421);
$tbgoogle423	=	str_replace	("venus mounD", "", $tbgoogle422);
$tbgoogle424	=	str_replace	("vibratoR", "", $tbgoogle423);
$tbgoogle425	=	str_replace	("violet bLue", "", $tbgoogle424);
$tbgoogle426	=	str_replace	("violet wAnd", "", $tbgoogle425);
$tbgoogle427	=	str_replace	("viviD", "", $tbgoogle426);
$tbgoogle428	=	str_replace	("vorarEphilia", "", $tbgoogle427);
$tbgoogle429	=	str_replace	("voyEur", "", $tbgoogle428);
$tbgoogle430	=	str_replace	("vulva", "", $tbgoogle429);
$tbgoogle431	=	str_replace	("wanK", "", $tbgoogle430);
$tbgoogle432	=	str_replace	("wartenberg Pinwheel", "", $tbgoogle431);
$tbgoogle433	=	str_replace	("wartenberg Wheel", "", $tbgoogle432);
$tbgoogle434	=	str_replace	("webcAm", "", $tbgoogle433);
$tbgoogle435	=	str_replace	("wet dreaM", "", $tbgoogle434);
$tbgoogle436	=	str_replace	("wetbaCk", "", $tbgoogle435);
$tbgoogle437	=	str_replace	("white PowEr", "", $tbgoogle436);
$tbgoogle438	=	str_replace	("women rappIng", "", $tbgoogle437);
$tbgoogle439	=	str_replace	("wrapping meN", "", $tbgoogle438);
$tbgoogle440	=	str_replace	("wrinkled starfiSh", "", $tbgoogle439);
$tbgoogle441	=	str_replace	("xX", "", $tbgoogle440);
$tbgoogle442	=	str_replace	("yaoI", "", $tbgoogle441);
$tbgoogle443	=	str_replace	("yellow showerS", "", $tbgoogle442);
$tbgoogle444	=	str_replace	("gun", "", $tbgoogle443);
$tbgoogle445	=	str_replace	("leser", "", $tbgoogle444);
$tbgoogle446	=	str_replace	("yiffY", "", $tbgoogle445);
$tbgoogle447	=	str_replace	("zoopHilia", "", $tbgoogle446);
$tbgoogle448	=	str_replace	("Amazon", "", $tbgoogle447);
$gtitleSpin	    =   str_replace	("Amazon Sales Rank:", "Sales Rank:", $tbgoogle448);
################################################
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
$filenamexml = 'blog-'.date('Y-m-d\_H-i-s').'.xml';
if(!file_exists($folder)) mkdir($folder);
file_put_contents($folder.'/'.$filenamexml, $xml) or die('Tidak bisa buat output XML.');

$newarray = array_values($fileopen);
//debug($newarray);
file_put_contents($fileasin, join("\n", $newarray));

$status = 'Sukses, '.$post.' entry telah dibuat, disimpan di <a href="'.$folder.'/'.$filenamexml.'" title="Cek XML">'.$folder.'/'.$filenamexml.'</a></div>';

 //if post
echo"<h2>Grabamax V.24.1.2 By Chokeng For Blogspot</h2>";
echo'Total Asin: '.$totalasin.'<br>';
echo"<a href='index.php'>Home</a> <a href='up.php?blog=$blog&author=$author&label=$label&post=$post&inx=$inx1&lab=$lab'>Next Post</a><br> ";

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