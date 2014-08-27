<?php

function download_photo($url, $saveto)
{
	global $config;
	if (!curlSaveToFile($url, $saveto))
	{
		return false;
	}
	return true;
}

function curlSaveToFile( $url, $local )
{
	$ch = curl_init();
	$fh = fopen($local, 'w');
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FILE, $fh);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_VERBOSE, false);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_NOPROGRESS, true);
	curl_setopt($ch, CURLOPT_USERAGENT, '"Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.11) Gecko/20071204 Ubuntu/7.10 (gutsy) Firefox/2.0.0.11');
	curl_exec($ch);

	if( curl_errno($ch) ) {
		return false;
	}

	curl_close($ch);
	fclose($fh);

	if( filesize($local) > 10 ) {
		return true;
	}

	return false;
}

function delete_user($USERID)
{
    global $config,$conn;
	if($USERID > 0)
	{
		$query = "select profilepicture from members where USERID='".mysql_real_escape_string($USERID)."' limit 1";
		$executequery = $conn->execute($query);
		$delpp = $executequery->fields['profilepicture'];
		if($delpp != "")
		{
			$del1=$config['membersprofilepicdir']."/".$delpp;
			if(file_exists($del1))
			{
				unlink($del1);
			}
			$del2=$config['membersprofilepicdir']."/thumbs/".$delpp;
			if(file_exists($del2))
			{
				unlink($del2);
			}
			$del3=$config['membersprofilepicdir']."/o/".$delpp;
			if(file_exists($del3))
			{
				unlink($del3);
			}
		}
		$query="SELECT PID FROM posts WHERE USERID='".mysql_real_escape_string($USERID)."'";
		$results = $conn->execute($query);
		$returnthis = $results->getrows();
		$vtotal = count($returnthis);
		for($i=0;$i<$vtotal;$i++)
		{
			$DPID = intval($returnthis[$i]['PID']);
			if($DPID > 0)
			{
				delete_post($DPID);
			}
		}
		$query = "DELETE FROM members WHERE USERID='".mysql_real_escape_string($USERID)."'";
		$conn->execute($query);
		$query = "DELETE FROM members_passcode WHERE USERID='".mysql_real_escape_string($USERID)."'";
		$conn->execute($query);
		$query = "DELETE FROM members_verifycode WHERE USERID='".mysql_real_escape_string($USERID)."'";
		$conn->execute($query);
		$query = "DELETE FROM posts_favorited WHERE USERID='".mysql_real_escape_string($USERID)."'";
		$conn->execute($query);
		$query = "DELETE FROM posts_unfavorited WHERE USERID='".mysql_real_escape_string($USERID)."'";
		$conn->execute($query);
	}
}

function delete_post($PID)
{
    global $config,$conn;
	if($PID > 0)
	{
		$query = "select pic from posts where PID='".mysql_real_escape_string($PID)."' limit 1";
		$executequery = $conn->execute($query);
		$thepp = $executequery->fields['pic'];
		if($thepp != "")
		{
			$p1 = $config['pdir']."/t/l-".$thepp;
			if(file_exists($p1))
			{
				@unlink($p1);
			}
			$p1 = $config['pdir']."/t/".$thepp;
			if(file_exists($p1))
			{
				@unlink($p1);
			}
			$p1 = $config['pdir']."/t/s-".$thepp;
			if(file_exists($p1))
			{
				@unlink($p1);
			}
			$p1 = $config['pdir']."/".$thepp;
			if(file_exists($p1))
			{
				@unlink($p1);
			}
		}
		$query = "DELETE FROM posts WHERE PID='".mysql_real_escape_string($PID)."'";
		$conn->execute($query);
		$query = "DELETE FROM posts_favorited WHERE PID='".mysql_real_escape_string($PID)."'";
		$conn->execute($query);
		$query = "DELETE FROM posts_reports WHERE PID='".mysql_real_escape_string($PID)."'";
		$conn->execute($query);
		$query = "DELETE FROM posts_unfavorited WHERE PID='".mysql_real_escape_string($PID)."'";
		$conn->execute($query);
	}
}

function do_resize_image($file, $width = 0, $height = 0, $proportional = false, $output = 'file')
{
	if($height <= 0 && $width <= 0)
	{
	  return false;
	}

	$info = getimagesize($file);
	$image = '';

	$final_width = 0;
	$final_height = 0;
	list($width_old, $height_old) = $info;

	if($proportional)
	{
	  if ($width == 0) $factor = $height/$height_old;
	  elseif ($height == 0) $factor = $width/$width_old;
	  else $factor = min ( $width / $width_old, $height / $height_old);

	  $final_width = round ($width_old * $factor);
	  $final_height = round ($height_old * $factor);

	  if($final_width > $width_old && $final_height > $height_old)
	  {
	  	  $final_width = $width_old;
		  $final_height = $height_old;

	  }
	}
	else
	{
	  $final_width = ( $width <= 0 ) ? $width_old : $width;
	  $final_height = ( $height <= 0 ) ? $height_old : $height;
	}

	switch($info[2])
	{
	  case IMAGETYPE_GIF:
		$image = imagecreatefromgif($file);
	  break;
	  case IMAGETYPE_JPEG:
		$image = imagecreatefromjpeg($file);
	  break;
	  case IMAGETYPE_PNG:
		$image = imagecreatefrompng($file);
	  break;
	  default:
		return false;
	}

	$image_resized = imagecreatetruecolor( $final_width, $final_height );

	if(($info[2] == IMAGETYPE_GIF) || ($info[2] == IMAGETYPE_PNG))
	{
	  $trnprt_indx = imagecolortransparent($image);

	  if($trnprt_indx >= 0)
	  {
		$trnprt_color    = imagecolorsforindex($image, $trnprt_indx);
		$trnprt_indx    = imagecolorallocate($image_resized, $trnprt_color['red'], $trnprt_color['green'], $trnprt_color['blue']);
		imagefill($image_resized, 0, 0, $trnprt_indx);
		imagecolortransparent($image_resized, $trnprt_indx);
	  }
	  elseif($info[2] == IMAGETYPE_PNG)
	  {
		imagealphablending($image_resized, false);
		$color = imagecolorallocatealpha($image_resized, 0, 0, 0, 127);
		imagefill($image_resized, 0, 0, $color);
		imagesavealpha($image_resized, true);
	  }
	}
	imagecopyresampled($image_resized, $image, 0, 0, 0, 0, $final_width, $final_height, $width_old, $height_old);

	switch( strtolower($output))
	{
	  case 'browser':
		$mime = image_type_to_mime_type($info[2]);
		header("Content-type: $mime");
		$output = NULL;
	  break;
	  case 'file':
		$output = $file;
	  break;
	  case 'return':
		return $image_resized;
	  break;
	  default:
	  break;
	}

	if(file_exists($output))
	{
		@unlink($output);
	}

	switch($info[2])
	{
	  case IMAGETYPE_GIF:
		imagegif($image_resized, $output);
	  break;
	  case IMAGETYPE_JPEG:
		imagejpeg($image_resized, $output, 100);
	  break;
	  case IMAGETYPE_PNG:
		imagepng($image_resized, $output);
	  break;
	  default:
		return false;
	}
	return true;
}

function cleanit($text)
{
	return htmlentities(strip_tags(stripslashes($text)), ENT_COMPAT, "UTF-8");
}

function insert_get_seo_profile($a)
{
        $uname = $a['username'];
		echo "user/".$uname;
}

function get_seo_profile($uname)
{
		return "user/".$uname;
}

function escape($data)
{
    if (ini_get('magic_quotes_gpc'))
	{
    	$data = stripslashes($data);
    }
    return mysql_real_escape_string($data);
}

function insert_get_advertisement($var)
{
        global $conn;
        $query="SELECT code FROM advertisements WHERE AID='".mysql_real_escape_string($var[AID])."' AND active='1' limit 1";
        $executequery=$conn->execute($query);
        $getad = $executequery->fields[code];
		echo strip_mq_gpc($getad);
}

function verify_email_username($usernametocheck)
{
    global $config,$conn;
	$query = "select count(*) as total from members where username='".mysql_real_escape_string($usernametocheck)."' limit 1";
	$executequery = $conn->execute($query);
	$totalu = $executequery->fields[total];
	if ($totalu >= 1)
	{
		return false;
	}
	else
	{
		return true;
	}
}

function verify_valid_email($emailtocheck)
{
	if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $emailtocheck))
	{
		return false;
	}
	else
	{
		return true;
	}
}

function verify_email_unique($emailtocheck)
{
    global $config,$conn;
	$query = "select count(*) as total from members where email='".mysql_real_escape_string($emailtocheck)."' limit 1";
	$executequery = $conn->execute($query);
	$totalemails = $executequery->fields[total];
	if ($totalemails >= 1)
	{
		return false;
	}
	else
	{
		return true;
	}
}

function mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="")
{
	global $SERVER_NAME;
	$subject = nl2br($subject);
	$sendmailbody = nl2br($sendmailbody);
	$sendto = $sendto;
	if($bcc!="")
	{
		$headers = "Bcc: ".$bcc."\n";
	}
	$headers = "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=utf-8 \n";
	$headers .= "X-Priority: 3\n";
	$headers .= "X-MSMail-Priority: Normal\n";
	$headers .= "X-Mailer: PHP/"."MIME-Version: 1.0\n";
	$headers .= "From: " . $from . "\n";
	$headers .= "Content-Type: text/html\n";
	mail("$sendto","$subject","$sendmailbody","$headers");
}

function insert_get_stripped_phrase($a)
{
	$stripper = $a[details];
	$stripper = str_replace("\\n", "<br>", $stripper);
	$stripper = str_replace("\\r", "", $stripper);
	$stripper = str_replace("\\", "", $stripper);
	return $stripper;
}

function insert_get_stripped_phrase2($a)
{
	$stripper = $a[details];
	$stripper = str_replace("\\n", "\n", $stripper);
	$stripper = str_replace("\\r", "\r", $stripper);
	return $stripper;
}

function listdays($selected)
{
	$days = "";
    for($i=1;$i<=31;$i++)
    {
    	if($i == $selected)
		{
        	$days .= "<option value=\"$i\" selected>$i</option>";
        }
        else
		{
        	$days .= "<option value=\"$i\">$i</option>";
        }
    }
    return $days;
}

$d = $config['baseurl'];

function listmonths($selected)
{
    $months = "";
    $allmonths = array("","January","February","March","April","May","June","July","August","September","October","November","December");
    for($i=1;$i<=12;$i++)
    {
        if($i == $selected)
		{
        	$months .= "<option value=\"$i\" selected>$allmonths[$i]</option>";
        }
        else
		{
        	$months .= "<option value=\"$i\">$allmonths[$i]</option>";
        }
    }
    return $months;
}

function listyears($selected)
{
        $years = "";
        $thisyear = date("Y");
        for($i=$thisyear-100+13;$i<=$thisyear-13;$i++)
        {
                if($i == $selected)
                        $years .= "<option value=\"$i\" selected>$i</option>";
                else
                        $years .= "<option value=\"$i\">$i</option>";
        }
        return $years;
}

function listcountries($selected)
{
    $country="";
    $countries = array("Afghanistan","Albania","Algeria","American Samoa","Andorra","Angola","Anguilla","Antartica","Antigua and Barbuda","Argentina","Armenia","Aruba","Ascension Island","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Botswana","Bouvet Island","Brazil","Brunei Darussalam","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde Islands","Cayman Islands","Chad","Chile","China","Christmas Island","Colombia","Comoros","Cook Islands","Costa Rica","Cote d Ivoire","Croatia/Hrvatska","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","East Timor","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Guiana","French Polynesia","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guadeloupe","Guam","Guatemala","Guernsey","Guinea","Guinea-Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Ireland","Isle of Man","Israel","Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte Island", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn Island", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion Island", "Romania", "Russian Federation", "Rwanda", "Saint Helena", "Saint Lucia", "San Marino", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovak Republic", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia", "Spain", "Sri Lanka", "Suriname", "Svalbard", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tokelau", "Tonga Islands", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Western Sahara", "Western Samoa", "Yemen", "Yugoslavia", "Zambia","Zimbabwe");
    for($i=0;$i<count($countries);$i++)
    {
    	if($selected == $countries[$i])
        {
			$country .="<option value=\"$countries[$i]\" selected>$countries[$i]</option>";
		}
        else
		{
			$country .="<option value=\"$countries[$i]\">$countries[$i]</option>";
		}
	}
    return $country;
}

function insert_get_member_profilepicture($var)
{
        global $conn;
        $query="SELECT profilepicture FROM members WHERE USERID='".mysql_real_escape_string($var[USERID])."' limit 1";
        $executequery=$conn->execute($query);
		$results = $executequery->fields[profilepicture];
		if ($results == "")
			//return "noprofilepicture.jpg";
			return "";
		else
			return $results;
}

$l = $config['license'];

function generatethumbs($theconvertimg,$thevideoimgnew,$thewidth,$theheight)
{
	global $config;
    $convertimg = $theconvertimg;
    $videoimgnew = $thevideoimgnew;

    $theimagesizedata = GetImageSize($convertimg);
    $videoimgwidth = $theimagesizedata[0];
    $videoimgheight = $theimagesizedata[1];
    $videoimgformat = $theimagesizedata[2];

    $whratio = 1;
    if ($videoimgwidth > $thewidth)
    {
        $whratio = $thewidth/$videoimgwidth;
    }

    if($whratio != 1)
    {
        $dest_height = $whratio * $videoimgheight;
        $dest_width = $thewidth;
    }
    else
    {
        $dest_height=$videoimgheight;
        $dest_width=$videoimgwidth;
    }

    if($dest_height > $theheight)
    {
        $whratio = $theheight/$dest_height;
        $dest_width = $whratio * $dest_width;
        $dest_height = $theheight;
    }

    if($videoimgformat == 2)
    {
        $videoimgsource = @imagecreatefromjpeg($convertimg);
        $videoimgdest = @imageCreateTrueColor($dest_width, $dest_height);
        ImageCopyResampled($videoimgdest, $videoimgsource, 0, 0, 0, 0, $dest_width, $dest_height, $videoimgwidth, $videoimgheight);
        imagejpeg($videoimgdest, $videoimgnew, 100);
        imagedestroy($videoimgsource);
        imagedestroy($videoimgdest);
    }
    elseif ($videoimgformat == 3)
    {
        $videoimgsource = imagecreatefrompng($convertimg);
        $videoimgdest = imageCreateTrueColor($dest_width, $dest_height);
        ImageCopyResampled($videoimgdest, $videoimgsource, 0, 0, 0, 0, $dest_width, $dest_height, $videoimgwidth, $videoimgheight);
        imagepng($videoimgdest, $videoimgnew, 9);
        imagedestroy($videoimgsource);
        imagedestroy($videoimgdest);
    }
    else
    {
        $videoimgsource = imagecreatefromgif($convertimg);
        $videoimgdest = imageCreateTrueColor($dest_width, $dest_height);
        ImageCopyResampled($videoimgdest, $videoimgsource, 0, 0, 0, 0, $dest_width, $dest_height, $videoimgwidth, $videoimgheight);
        imagejpeg($videoimgdest, $videoimgnew, 100);
        imagedestroy($videoimgsource);
        imagedestroy($videoimgdest);
    }
}


function script_status($var1,$var2)
{
$t = $var1;
$e1 = md5($t);
$e2 = md5($e1);
$r1 = substr($e2, 24, 8);
$r2 = substr($e2, 8, 8);
$e3 = md5($r2."darsh");
$r3 = substr($e3, 16, 12);
$e4 = md5($r3."darsh");
$r4 = substr($e4, 22, 10);
$l1 = $r1."-".$r2."-".$r3."-".$r4;
$youtube_url = $var2;
$position       = 6;
$remove_length  = strlen($youtube_url)-$position;
$video_id       = substr($youtube_url, -$remove_length, 41);
//if ($l1 != $video_id)
//{
//halt();
//}
}

script_status($d,$l);

function insert_get_fav_status($var)
{
    global $conn;
	$query="SELECT count(*) as total FROM posts_favorited WHERE USERID='".mysql_real_escape_string($_SESSION[USERID])."' AND PID='".intval($var[PID])."'";
	$executequery=$conn->execute($query);
	$total = $executequery->fields[total];
	return intval($total);
}

function insert_get_unfav_status($var)
{
    global $conn;
	$query="SELECT count(*) as total FROM posts_unfavorited WHERE USERID='".mysql_real_escape_string($_SESSION[USERID])."' AND PID='".intval($var[PID])."'";
	$executequery=$conn->execute($query);
	$total = $executequery->fields[total];
	return intval($total);
}

function insert_get_fav_count($var)
{
    global $conn;
	$query="SELECT count(*) as total FROM posts_favorited WHERE PID='".intval($var[PID])."'";
	$executequery=$conn->execute($query);
	$total = $executequery->fields[total];
	return intval($total);
}

function does_post_exist($a)
{
	global $conn, $config;
    $query="SELECT USERID FROM posts WHERE PID='".mysql_real_escape_string($a)."'";
    $executequery=$conn->execute($query);
    if ($executequery->recordcount()>0)
        return true;
    else
		return false;
}

function update_last_viewed($a)
{
        global $conn;
		$query = "UPDATE posts SET last_viewed='".time()."' WHERE PID='".mysql_real_escape_string($a)."'";
        $executequery=$conn->execute($query);
}
//update luot view
function update_post_viewed ($a)
{
    global $conn;
    $query = "UPDATE posts SET postviewed = postviewed + 1 WHERE PID='".mysql_real_escape_string($a)."'";
    $executequery=$conn->execute($query);
}


function update_your_viewed ($a)
{
        global $conn;
		$query = "UPDATE members SET yourviewed  = yourviewed  + 1 WHERE USERID='".mysql_real_escape_string($a)."'";
        $executequery=$conn->execute($query);
}

function update_you_viewed($a)
{
        global $conn, $config;
		$view_points = $config['view_points'];
		if($view_points > 0)
		{
			$addme = ", points=points+$view_points";
		}
		$query = "UPDATE members SET youviewed = youviewed + 1 $addme WHERE USERID='".mysql_real_escape_string($a)."'";
        $executequery=$conn->execute($query);
}

function session_verification()
{
    if ($_SESSION[USERID] != "")
	{
		if (is_numeric($_SESSION[USERID]))
		{
        	return true;
		}
    }
	else
		return false;
}
function insert_get_username_from_userid($var)
{
        global $conn;
        $query="SELECT username FROM members WHERE USERID='".mysql_real_escape_string($var[USERID])."'";
        $executequery=$conn->execute($query);
        $getusername = $executequery->fields[username];
		return "$getusername";
}

function does_profile_exist($a)
{
	global $conn;
    global $config;
    $query="SELECT username FROM members WHERE USERID='".mysql_real_escape_string($a)."'";
    $executequery=$conn->execute($query);
    if ($executequery->recordcount()>0)
        return true;
    else
		return false;
}

function update_viewcount_profile($a)
{
        global $conn;
		$query = "UPDATE members SET profileviews = profileviews + 1 WHERE USERID='".mysql_real_escape_string($a)."'";
        $executequery=$conn->execute($query);
}

function insert_get_posts_count($var)
{
        global $conn;
        $query="SELECT count(*) as total FROM posts WHERE USERID='".mysql_real_escape_string($var[USERID])."'";
        $executequery=$conn->execute($query);
        $results = $executequery->fields[total];
		echo "$results";
}

function insert_get_static($var)
{
        global $conn;
        $query="SELECT $var[sel] FROM static WHERE ID='".mysql_real_escape_string($var[ID])."'";
        $executequery=$conn->execute($query);
        $returnme = $executequery->fields[$var[sel]];
		$returnme = strip_mq_gpc($returnme);
		echo "$returnme";
}

function insert_strip_special($a)
{
	$text = $a['text'];
	$text = str_replace(",", " ", $text);
	$text = str_replace(".", " ", $text);
	$text=nl2br($text);
	$text = str_replace("\n", " ", $text);
	$text = str_replace("\r", " ", $text);
	$text = str_replace("<br />", " ", $text);
	$text = str_replace("  ", " ", $text);
	$clean = preg_replace("/^[^a-z0-9]?(.*?)[^a-z0-9]?$/i", "$1", $text);
	return $clean;
}

function verify_login_admin()
{
        global $config,$conn;
        if($_SESSION['ADMINID'] != "" && is_numeric($_SESSION['ADMINID']) && $_SESSION['ADMINUSERNAME'] != "" && $_SESSION['ADMINPASSWORD'] != "")
        {
			$query="SELECT * FROM administrators WHERE username='".mysql_real_escape_string($_SESSION['ADMINUSERNAME'])."' AND password='".mysql_real_escape_string($_SESSION['ADMINPASSWORD'])."' AND ADMINID='".mysql_real_escape_string($_SESSION['ADMINID'])."'";
        	$executequery=$conn->execute($query);

			if(mysql_affected_rows()==1)
			{

			}
			else
			{
				header("location:$config[adminurl]/index.php");
            	exit;
			}

        }
		else
		{
			header("location:$config[adminurl]/index.php");
            exit;
		}

$t = $config['baseurl'];
$e1 = md5($t);
$e2 = md5($e1);
$r1 = substr($e2, 24, 8);
$r2 = substr($e2, 8, 8);
$e3 = md5($r2."darsh");
$r3 = substr($e3, 16, 12);
$e4 = md5($r3."darsh");
$r4 = substr($e4, 22, 10);
$l1 = $r1."-".$r2."-".$r3."-".$r4;
$youtube_url = $config['license'];
$position       = 6;
$remove_length  = strlen($youtube_url)-$position;
$video_id       = substr($youtube_url, -$remove_length, 41);
//if ($l1 != $video_id)
//{
//header("Location:http://bit.ly/OGbfWH");exit;
//}

}

function insert_strip_special2($a)
{
	$text = $a['text'];
	$text = str_replace(",", " ", $text);
	$text = str_replace(".", " ", $text);
	$text=nl2br($text);
	$text = str_replace("\n", " ", $text);
	$text = str_replace("\r", " ", $text);
	$text = str_replace("<br />", " ", $text);
	$text = str_replace("  ", " ", $text);
	$clean = preg_replace("/^[^a-z0-9]?(.*?)[^a-z0-9]?$/i", "$1", $text);
	$clean = stripslashes($clean);
	return $clean;
}

function insert_clickable_link($var)
{
	global $config;
	$text = $var['text'];
	$text = preg_replace('#(script|about|applet|activex|chrome):#is', "\\1:", $text);
	$ret = ' ' . $text;
	$ret = preg_replace("#(^|[\n ])([\w]+?://[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<a href=\"\\2\" target=\"_blank\">\\2</a>", $ret);
	$ret = preg_replace("#(^|[\n ])((www|ftp)\.[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<a href=\"http://\\2\" target=\"_blank\">\\2</a>", $ret);
	$ret = preg_replace("#(^|[\n ])([a-z0-9&\-_.]+?)@([\w\-]+\.([\w\-\.]+\.)*[\w]+)#i", "\\1<a href=\"mailto:\\2@\\3\">\\2@\\3</a>", $ret);
	$ret = substr($ret, 1);
	if($config['short_urls'] == "1")
	{
		preg_match_all("/<a href=\"(.+?)\"/", $ret, $match);
		$result1 = array_unique($match);
		$count = count($result1[0]);
		if($count > 0)
		{
			foreach ($result1 as $val)
			{
				foreach ($val as $item)
				{
					$item = str_replace('<a href="', '', $item);
					$item = str_replace('"', '', $item);
					$new_item = get_shortexturl($item);
					if($new_item != "")
					{
						$ret = str_replace("<a href=\"$item", "<a href=\"$new_item", $ret);
					}
				}
			}
		}
	}
	return $ret;
}

function get_shortexturl($gagurl)
{
    global $conn, $config;
	if($gagurl != "")
	{
	$rme = 	$gagurl;
	}
	else
	{
		$rme = 	"";
	}
	return $rme;
}

function firstDayOfMonth2($uts=null)
{
    $today = is_null($uts) ? getDate() : getDate($uts);
    $first_day = getdate(mktime(0,0,0,$today['mon'],1,$today['year']));
    return $first_day[0];
}

function firstDayOfYear2($uts=null)
{
    $today = is_null($uts) ? getDate() : getDate($uts);
    $first_day = getdate(mktime(0,0,0,1,1,$today['year']));
    return $first_day[0];
}

function insert_get_short_url($a)
{
    global $conn, $config;
	$SPID = intval($a['PID']);
	$sshort = stripslashes($a['short']);
	$gagurl = $config['baseurl'].$config[postfolder].$SPID;
	if($SPID > 0)
	{
		if($sshort == "")
		{
				$rme = 	$gagurl;


		}
		else
		{
				$rme = 	$gagurl;
		}
	}
	else
	{
		$rme = 	$gagurl;
	}
	return $rme;
}

function insert_return_youtube($a)
{
    $embedcode = '<object width="730" height="610"><param name="movie" value="http://www.youtube.com/v/AWECDE&hl=en&fs=1"></param><param name="allowFullScreen" value="true"></param><param name="wmode" value="opaque" /></param><embed src="http://www.youtube.com/v/AWECDE&hl=en&fs=1" type="application/x-shockwave-flash" allowfullscreen="true" width="680" height="500" wmode="opaque"></embed></object>';
	$item = $a[youtube];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}

function insert_return_dai($a)
{
    $embedcode = '<iframe src="http://www.dailymotion.com/embed/video/AWECDE" width="640" height="400" frameborder="0"></iframe>';
    $item = $a[dai];
    $embedcode = str_replace("AWECDE", $item, $embedcode);
    return $embedcode;
}

function insert_return_fod($a)
{
    $embedcode = '<iframe src="http://www.funnyordie.com/embed/AWECDE" width="640" height="400" frameborder="0"></iframe>';
	$item = $a[fod];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}

function insert_return_vfy($a)
{
    $embedcode = '<iframe src="http://p.videofy.me/v/AWECDE" width="640" height="400" frameborder="0"></iframe>';
	$item = $a[vfy];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}

function insert_return_vmo($a)
{
    $embedcode = '<iframe src="http://player.vimeo.com/video/AWECDE" width="640" height="400" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
	$item = $a[vmo];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}

function insert_return_youtube2($a)
{
    $embedcode = '<object width="450" height="380"><param name="movie" value="http://www.youtube.com/v/AWECDE&hl=en&fs=1"></param><param name="allowFullScreen" value="true"></param><param name="wmode" value="opaque" /></param><embed src="http://www.youtube.com/v/AWECDE&hl=en&fs=1" type="application/x-shockwave-flash" allowfullscreen="true" width="450" height="380" wmode="opaque"></embed></object>';
	$item = $a[youtube];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}

function insert_return_dai2($a)
{
    $embedcode = '<iframe src="http://www.dailymotion.com/embed/video/AWECDE" width="450" height="380" frameborder="0"></iframe>';
    $item = $a[dai];
    $embedcode = str_replace("AWECDE", $item, $embedcode);
    return $embedcode;
}


function insert_return_fod2($a)
{
    $embedcode = '<iframe src="http://www.funnyordie.com/embed/AWECDE" width="450" height="380" frameborder="0"></iframe>';
	$item = $a[fod];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}

function insert_return_vfy2($a)
{
    $embedcode = '<iframe src="http://p.videofy.me/v/AWECDE" width="450" height="380" frameborder="0"></iframe>';
	$item = $a[vfy];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}

function insert_return_vfy3($a)
{
    $embedcode = '<iframe src="http://p.videofy.me/v/AWECDE" width="220" height="180" frameborder="0"></iframe>';
	$item = $a[vfy];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}

function insert_return_vmo2($a)
{
    $embedcode = '<iframe src="http://player.vimeo.com/video/AWECDE" width="450" height="380" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
	$item = $a[vmo];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}

function insert_return_vmo3($a)
{
    $embedcode = '<iframe src="http://player.vimeo.com/video/AWECDE" width="220" height="180" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
	$item = $a[vmo];
	$embedcode = str_replace("AWECDE", $item, $embedcode);
	return $embedcode;
}
function halt()
{
header("Location:http://bit.ly/OGbfWH");exit;
}
function insert_get_time_to_days_ago($a)
{
	global $lang;
	$currenttime = time();
	$timediff = $currenttime - $a[time];
	$oneday = 60 * 60 * 24;
	$dayspassed = floor($timediff/$oneday);
	if ($dayspassed == "0")
	{
		$mins = floor($timediff/60);
		if($mins == "0")
		{
			$secs = floor($timediff);
			if($secs == "1")
			{
				return $lang['157'];
			}
			else
			{
				return $secs." ".$lang['158'];
			}
		}
		elseif($mins == "1")
		{
			return $lang['159'];
		}
		elseif($mins < "60")
		{
			return $mins." ".$lang['160'];
		}
		elseif($mins == "60")
		{
			return $lang['161'];
		}
		else
		{
			$hours = floor($mins/60);
			return "$hours ".$lang['162'];
		}
	}
	else
	{
		if($dayspassed == "1")
		{
			return $dayspassed." ".$lang['163'];
		}
		else
		{
			return $dayspassed." ".$lang['164'];
		}
	}
}

function insert_country_code_to_country($a)
{
	$code = $a['code'];
    $country = '';
    if( $code == 'AF' ) $country = 'Afghanistan';
    if( $code == 'AX' ) $country = 'Aland Islands';
    if( $code == 'AL' ) $country = 'Albania';
    if( $code == 'DZ' ) $country = 'Algeria';
    if( $code == 'AS' ) $country = 'American Samoa';
    if( $code == 'AD' ) $country = 'Andorra';
    if( $code == 'AO' ) $country = 'Angola';
    if( $code == 'AI' ) $country = 'Anguilla';
    if( $code == 'AQ' ) $country = 'Antarctica';
    if( $code == 'AG' ) $country = 'Antigua and Barbuda';
    if( $code == 'AR' ) $country = 'Argentina';
    if( $code == 'AM' ) $country = 'Armenia';
    if( $code == 'AW' ) $country = 'Aruba';
    if( $code == 'AU' ) $country = 'Australia';
    if( $code == 'AT' ) $country = 'Austria';
    if( $code == 'AZ' ) $country = 'Azerbaijan';
    if( $code == 'BS' ) $country = 'Bahamas the';
    if( $code == 'BH' ) $country = 'Bahrain';
    if( $code == 'BD' ) $country = 'Bangladesh';
    if( $code == 'BB' ) $country = 'Barbados';
    if( $code == 'BY' ) $country = 'Belarus';
    if( $code == 'BE' ) $country = 'Belgium';
    if( $code == 'BZ' ) $country = 'Belize';
    if( $code == 'BJ' ) $country = 'Benin';
    if( $code == 'BM' ) $country = 'Bermuda';
    if( $code == 'BT' ) $country = 'Bhutan';
    if( $code == 'BO' ) $country = 'Bolivia';
    if( $code == 'BA' ) $country = 'Bosnia and Herzegovina';
    if( $code == 'BW' ) $country = 'Botswana';
    if( $code == 'BV' ) $country = 'Bouvet Island (Bouvetoya)';
    if( $code == 'BR' ) $country = 'Brazil';
    if( $code == 'IO' ) $country = 'British Indian Ocean Territory (Chagos Archipelago)';
    if( $code == 'VG' ) $country = 'British Virgin Islands';
    if( $code == 'BN' ) $country = 'Brunei Darussalam';
    if( $code == 'BG' ) $country = 'Bulgaria';
    if( $code == 'BF' ) $country = 'Burkina Faso';
    if( $code == 'BI' ) $country = 'Burundi';
    if( $code == 'KH' ) $country = 'Cambodia';
    if( $code == 'CM' ) $country = 'Cameroon';
    if( $code == 'CA' ) $country = 'Canada';
    if( $code == 'CV' ) $country = 'Cape Verde';
    if( $code == 'KY' ) $country = 'Cayman Islands';
    if( $code == 'CF' ) $country = 'Central African Republic';
    if( $code == 'TD' ) $country = 'Chad';
    if( $code == 'CL' ) $country = 'Chile';
    if( $code == 'CN' ) $country = 'China';
    if( $code == 'CX' ) $country = 'Christmas Island';
    if( $code == 'CC' ) $country = 'Cocos (Keeling) Islands';
    if( $code == 'CO' ) $country = 'Colombia';
    if( $code == 'KM' ) $country = 'Comoros the';
    if( $code == 'CD' ) $country = 'Congo';
    if( $code == 'CG' ) $country = 'Congo the';
    if( $code == 'CK' ) $country = 'Cook Islands';
    if( $code == 'CR' ) $country = 'Costa Rica';
    if( $code == 'CI' ) $country = 'Cote d\'Ivoire';
    if( $code == 'HR' ) $country = 'Croatia';
    if( $code == 'CU' ) $country = 'Cuba';
    if( $code == 'CY' ) $country = 'Cyprus';
    if( $code == 'CZ' ) $country = 'Czech Republic';
    if( $code == 'DK' ) $country = 'Denmark';
    if( $code == 'DJ' ) $country = 'Djibouti';
    if( $code == 'DM' ) $country = 'Dominica';
    if( $code == 'DO' ) $country = 'Dominican Republic';
    if( $code == 'EC' ) $country = 'Ecuador';
    if( $code == 'EG' ) $country = 'Egypt';
    if( $code == 'SV' ) $country = 'El Salvador';
    if( $code == 'GQ' ) $country = 'Equatorial Guinea';
    if( $code == 'ER' ) $country = 'Eritrea';
    if( $code == 'EE' ) $country = 'Estonia';
    if( $code == 'ET' ) $country = 'Ethiopia';
    if( $code == 'FO' ) $country = 'Faroe Islands';
    if( $code == 'FK' ) $country = 'Falkland Islands (Malvinas)';
    if( $code == 'FJ' ) $country = 'Fiji the Fiji Islands';
    if( $code == 'FI' ) $country = 'Finland';
    if( $code == 'FR' ) $country = 'France, French Republic';
    if( $code == 'GF' ) $country = 'French Guiana';
    if( $code == 'PF' ) $country = 'French Polynesia';
    if( $code == 'TF' ) $country = 'French Southern Territories';
    if( $code == 'GA' ) $country = 'Gabon';
    if( $code == 'GM' ) $country = 'Gambia the';
    if( $code == 'GE' ) $country = 'Georgia';
    if( $code == 'DE' ) $country = 'Germany';
    if( $code == 'GH' ) $country = 'Ghana';
    if( $code == 'GI' ) $country = 'Gibraltar';
    if( $code == 'GR' ) $country = 'Greece';
    if( $code == 'GL' ) $country = 'Greenland';
    if( $code == 'GD' ) $country = 'Grenada';
    if( $code == 'GP' ) $country = 'Guadeloupe';
    if( $code == 'GU' ) $country = 'Guam';
    if( $code == 'GT' ) $country = 'Guatemala';
    if( $code == 'GG' ) $country = 'Guernsey';
    if( $code == 'GN' ) $country = 'Guinea';
    if( $code == 'GW' ) $country = 'Guinea-Bissau';
    if( $code == 'GY' ) $country = 'Guyana';
    if( $code == 'HT' ) $country = 'Haiti';
    if( $code == 'HM' ) $country = 'Heard Island and McDonald Islands';
    if( $code == 'VA' ) $country = 'Holy See (Vatican City State)';
    if( $code == 'HN' ) $country = 'Honduras';
    if( $code == 'HK' ) $country = 'Hong Kong';
    if( $code == 'HU' ) $country = 'Hungary';
    if( $code == 'IS' ) $country = 'Iceland';
    if( $code == 'IN' ) $country = 'India';
    if( $code == 'ID' ) $country = 'Indonesia';
    if( $code == 'IR' ) $country = 'Iran';
    if( $code == 'IQ' ) $country = 'Iraq';
    if( $code == 'IE' ) $country = 'Ireland';
    if( $code == 'IM' ) $country = 'Isle of Man';
    if( $code == 'IL' ) $country = 'Israel';
    if( $code == 'IT' ) $country = 'Italy';
    if( $code == 'JM' ) $country = 'Jamaica';
    if( $code == 'JP' ) $country = 'Japan';
    if( $code == 'JE' ) $country = 'Jersey';
    if( $code == 'JO' ) $country = 'Jordan';
    if( $code == 'KZ' ) $country = 'Kazakhstan';
    if( $code == 'KE' ) $country = 'Kenya';
    if( $code == 'KI' ) $country = 'Kiribati';
    if( $code == 'KP' ) $country = 'Korea';
    if( $code == 'KR' ) $country = 'Korea';
    if( $code == 'KW' ) $country = 'Kuwait';
    if( $code == 'KG' ) $country = 'Kyrgyz Republic';
    if( $code == 'LA' ) $country = 'Lao';
    if( $code == 'LV' ) $country = 'Latvia';
    if( $code == 'LB' ) $country = 'Lebanon';
    if( $code == 'LS' ) $country = 'Lesotho';
    if( $code == 'LR' ) $country = 'Liberia';
    if( $code == 'LY' ) $country = 'Libyan Arab Jamahiriya';
    if( $code == 'LI' ) $country = 'Liechtenstein';
    if( $code == 'LT' ) $country = 'Lithuania';
    if( $code == 'LU' ) $country = 'Luxembourg';
    if( $code == 'MO' ) $country = 'Macao';
    if( $code == 'MK' ) $country = 'Macedonia';
    if( $code == 'MG' ) $country = 'Madagascar';
    if( $code == 'MW' ) $country = 'Malawi';
    if( $code == 'MY' ) $country = 'Malaysia';
    if( $code == 'MV' ) $country = 'Maldives';
    if( $code == 'ML' ) $country = 'Mali';
    if( $code == 'MT' ) $country = 'Malta';
    if( $code == 'MH' ) $country = 'Marshall Islands';
    if( $code == 'MQ' ) $country = 'Martinique';
    if( $code == 'MR' ) $country = 'Mauritania';
    if( $code == 'MU' ) $country = 'Mauritius';
    if( $code == 'YT' ) $country = 'Mayotte';
    if( $code == 'MX' ) $country = 'Mexico';
    if( $code == 'FM' ) $country = 'Micronesia';
    if( $code == 'MD' ) $country = 'Moldova';
    if( $code == 'MC' ) $country = 'Monaco';
    if( $code == 'MN' ) $country = 'Mongolia';
    if( $code == 'ME' ) $country = 'Montenegro';
    if( $code == 'MS' ) $country = 'Montserrat';
    if( $code == 'MA' ) $country = 'Morocco';
    if( $code == 'MZ' ) $country = 'Mozambique';
    if( $code == 'MM' ) $country = 'Myanmar';
    if( $code == 'NA' ) $country = 'Namibia';
    if( $code == 'NR' ) $country = 'Nauru';
    if( $code == 'NP' ) $country = 'Nepal';
    if( $code == 'AN' ) $country = 'Netherlands Antilles';
    if( $code == 'NL' ) $country = 'Netherlands the';
    if( $code == 'NC' ) $country = 'New Caledonia';
    if( $code == 'NZ' ) $country = 'New Zealand';
    if( $code == 'NI' ) $country = 'Nicaragua';
    if( $code == 'NE' ) $country = 'Niger';
    if( $code == 'NG' ) $country = 'Nigeria';
    if( $code == 'NU' ) $country = 'Niue';
    if( $code == 'NF' ) $country = 'Norfolk Island';
    if( $code == 'MP' ) $country = 'Northern Mariana Islands';
    if( $code == 'NO' ) $country = 'Norway';
    if( $code == 'OM' ) $country = 'Oman';
    if( $code == 'PK' ) $country = 'Pakistan';
    if( $code == 'PW' ) $country = 'Palau';
    if( $code == 'PS' ) $country = 'Palestinian Territory';
    if( $code == 'PA' ) $country = 'Panama';
    if( $code == 'PG' ) $country = 'Papua New Guinea';
    if( $code == 'PY' ) $country = 'Paraguay';
    if( $code == 'PE' ) $country = 'Peru';
    if( $code == 'PH' ) $country = 'Philippines';
    if( $code == 'PN' ) $country = 'Pitcairn Islands';
    if( $code == 'PL' ) $country = 'Poland';
    if( $code == 'PT' ) $country = 'Portugal, Portuguese Republic';
    if( $code == 'PR' ) $country = 'Puerto Rico';
    if( $code == 'QA' ) $country = 'Qatar';
    if( $code == 'RE' ) $country = 'Reunion';
    if( $code == 'RO' ) $country = 'Romania';
    if( $code == 'RU' ) $country = 'Russian Federation';
    if( $code == 'RW' ) $country = 'Rwanda';
    if( $code == 'BL' ) $country = 'Saint Barthelemy';
    if( $code == 'SH' ) $country = 'Saint Helena';
    if( $code == 'KN' ) $country = 'Saint Kitts and Nevis';
    if( $code == 'LC' ) $country = 'Saint Lucia';
    if( $code == 'MF' ) $country = 'Saint Martin';
    if( $code == 'PM' ) $country = 'Saint Pierre and Miquelon';
    if( $code == 'VC' ) $country = 'Saint Vincent and the Grenadines';
    if( $code == 'WS' ) $country = 'Samoa';
    if( $code == 'SM' ) $country = 'San Marino';
    if( $code == 'ST' ) $country = 'Sao Tome and Principe';
    if( $code == 'SA' ) $country = 'Saudi Arabia';
    if( $code == 'SN' ) $country = 'Senegal';
    if( $code == 'RS' ) $country = 'Serbia';
    if( $code == 'SC' ) $country = 'Seychelles';
    if( $code == 'SL' ) $country = 'Sierra Leone';
    if( $code == 'SG' ) $country = 'Singapore';
    if( $code == 'SK' ) $country = 'Slovakia (Slovak Republic)';
    if( $code == 'SI' ) $country = 'Slovenia';
    if( $code == 'SB' ) $country = 'Solomon Islands';
    if( $code == 'SO' ) $country = 'Somalia, Somali Republic';
    if( $code == 'ZA' ) $country = 'South Africa';
    if( $code == 'GS' ) $country = 'South Georgia and the South Sandwich Islands';
    if( $code == 'ES' ) $country = 'Spain';
    if( $code == 'LK' ) $country = 'Sri Lanka';
    if( $code == 'SD' ) $country = 'Sudan';
    if( $code == 'SR' ) $country = 'Suriname';
    if( $code == 'SJ' ) $country = 'Svalbard & Jan Mayen Islands';
    if( $code == 'SZ' ) $country = 'Swaziland';
    if( $code == 'SE' ) $country = 'Sweden';
    if( $code == 'CH' ) $country = 'Switzerland, Swiss Confederation';
    if( $code == 'SY' ) $country = 'Syrian Arab Republic';
    if( $code == 'TW' ) $country = 'Taiwan';
    if( $code == 'TJ' ) $country = 'Tajikistan';
    if( $code == 'TZ' ) $country = 'Tanzania';
    if( $code == 'TH' ) $country = 'Thailand';
    if( $code == 'TL' ) $country = 'Timor-Leste';
    if( $code == 'TG' ) $country = 'Togo';
    if( $code == 'TK' ) $country = 'Tokelau';
    if( $code == 'TO' ) $country = 'Tonga';
    if( $code == 'TT' ) $country = 'Trinidad and Tobago';
    if( $code == 'TN' ) $country = 'Tunisia';
    if( $code == 'TR' ) $country = 'Turkey';
    if( $code == 'TM' ) $country = 'Turkmenistan';
    if( $code == 'TC' ) $country = 'Turks and Caicos Islands';
    if( $code == 'TV' ) $country = 'Tuvalu';
    if( $code == 'UG' ) $country = 'Uganda';
    if( $code == 'UA' ) $country = 'Ukraine';
    if( $code == 'AE' ) $country = 'United Arab Emirates';
    if( $code == 'GB' ) $country = 'United Kingdom';
    if( $code == 'US' ) $country = 'United States of America';
    if( $code == 'UM' ) $country = 'United States Minor Outlying Islands';
    if( $code == 'VI' ) $country = 'United States Virgin Islands';
    if( $code == 'UY' ) $country = 'Uruguay, Eastern Republic of';
    if( $code == 'UZ' ) $country = 'Uzbekistan';
    if( $code == 'VU' ) $country = 'Vanuatu';
    if( $code == 'VE' ) $country = 'Venezuela';
    if( $code == 'VN' ) $country = 'Vietnam';
    if( $code == 'WF' ) $country = 'Wallis and Futuna';
    if( $code == 'EH' ) $country = 'Western Sahara';
    if( $code == 'YE' ) $country = 'Yemen';
    if( $code == 'ZM' ) $country = 'Zambia';
    if( $code == 'ZW' ) $country = 'Zimbabwe';
    if( $country == '') $country = $code;
    return $country;
}

function imagick_gif_resize($file, $width = 0, $height = 0, $proportional = false, $output = 'file', $temppic)
{
	if($height <= 0 && $width <= 0)
	{
	  return false;
	}

	$info = getimagesize($file);
	$image = '';

	$final_width = 0;
	$final_height = 0;
	list($width_old, $height_old) = $info;

	if($proportional)
	{
	  if ($width == 0) $factor = $height/$height_old;
	  elseif ($height == 0) $factor = $width/$width_old;
	  else $factor = min ( $width / $width_old, $height / $height_old);

	  $final_width = round ($width_old * $factor);
	  $final_height = round ($height_old * $factor);

	  if($final_width > $width_old && $final_height > $height_old)
	  {
	  	  $final_width = $width_old;
		  $final_height = $height_old;

	  }
	}
	else
	{
	  $final_width = ( $width <= 0 ) ? $width_old : $width;
	  $final_height = ( $height <= 0 ) ? $height_old : $height;
	}

	$owh = $width_old."x".$height_old;
	$nwh = $final_width."x".$final_height;
	if(!file_exists($temppic))
	{
		$runinbg = "convert ".$file." -coalesce ".$temppic;
		$runconvert = exec("$runinbg");
	}
	$runinbg = "convert -size ".$owh." ".$temppic." -resize ".$nwh." ".$output;
	$runconvert = exec("$runinbg");
	return true;
}


function makeseo2($text, $limit=75)
    {
      // replace non letter or digits by -
      $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

      // trim
      $text = trim($text, '-');

      // lowercase
      $text = strtolower($text);

      // remove unwanted characters
      $text = preg_replace('~[^-\w]+~', '', $text);

      if(strlen($text) > 70) {
        $text = substr($text, 0, 70);
      }

      if (empty($text))
      {
        //return 'n-a';
        return time();
      }

      return $text;
    }

function makeseo($str,$separator = 'dash',$lowercase = TRUE)
{
	//decode html entities
	$str = html_entity_decode($str,ENT_QUOTES,'UTF-8');
	//make lowercase
	$str = mb_strtolower($str, 'UTF-8');
	//replace special chars, for UTF8 encoding it needs to be defined as array
	$trans = array('ơ'=>'o','Ơ'=>'o','ó'=>'o','Ó'=>'o','ò'=>'o','Ò'=>'o','ọ'=>'o','Ọ'=>'o','ỏ'=>'o','Ỏ'=>'o','õ'=>'o','Õ'=>'o','ớ'=>'o','Ớ'=>'o','ờ'=>'o','Ờ'=>'o','ợ'=>'o','Ợ'=>'o','ở'=>'o','Ở'=>'o','ỡ'=>'o','Ỡ'=>'o','ô'=>'o','Ô'=>'o','ố'=>'o','Ố'=>'o','ồ'=>'o','Ồ'=>'o','ộ'=>'o','Ộ'=>'o','ổ'=>'o','Ổ'=>'o','ỗ'=>'o','Ỗ'=>'o','ú'=>'u','Ú'=>'u','ù'=>'u','Ù'=>'u','ụ'=>'u','Ụ'=>'u','ủ'=>'u','Ủ'=>'u','ũ'=>'u','Ũ'=>'u','ư'=>'u','Ư'=>'u','ứ'=>'u','Ứ'=>'u','ừ'=>'u','Ừ'=>'u','ự'=>'u','ữ'=>'u','Ự'=>'u','ử'=>'u','Ử'=>'u','ữ'=>'u','Ữ'=>'u','â'=>'a','Â'=>'a','á'=>'a','Á'=>'a','à'=>'a','À'=>'a','ạ'=>'a','Ạ'=>'a','ả'=>'a','Ả'=>'a','ã'=>'a','Ã'=>'a','ấ'=>'a','Ấ'=>'a','ầ'=>'a','Ầ'=>'a','ậ'=>'a','ạ'=>'a','ò'=>'o','Ậ'=>'a','ẩ'=>'â','Ẩ'=>'a','ẫ'=>'a','Ẫ'=>'a','ă'=>'a','Ă'=>'a','ắ'=>'a','Ắ'=>'a','ằ'=>'a','Ằ'=>'a','ặ'=>'a','Ặ'=>'a','ẳ'=>'a','Ẳ'=>'a','ẵ'=>'a','Ẵ'=>'a','ế'=>'e','Ế'=>'e','ề'=>'e','Ề'=>'e','ệ'=>'e','Ệ'=>'e','ể'=>'e','Ể'=>'e','ễ'=>'e','Ễ'=>'e','é'=>'e','É'=>'e','è'=>'e','È'=>'e','ẹ'=>'e','Ẹ'=>'e','ẻ'=>'e','Ẻ'=>'e','ẽ'=>'e','Ẽ'=>'e','ê'=>'e','Ê'=>'e','í'=>'i','Í'=>'i','ì'=>'i','Ì'=>'i','ỉ'=>'i','Ỉ'=>'i','ĩ'=>'i','Ĩ'=>'i','ị'=>'i','Ị'=>'i','ý'=>'y','Ý'=>'y','ỳ'=>'y','Ỳ'=>'y','ỷ'=>'y','Ỷ'=>'y','ỹ'=>'y','Ỹ'=>'y','ỵ'=>'y','Ỵ'=>'y','đ'=>'d','Đ'=>'d','['=>'',']'=>'',';'=>'','^'=>'','@'=>'','$'=>'','>'=>'','<'=>'','~'=>'','{'=>'','}'=>'','‘'=>'','’'=>'','…'=>'','ẩ'=>'a','"'=>'','ồ'=>'o','ấ'=>'a','ớ'=>'o','ý'=>'y','ậ'=>'a','ạ'=>'a','ế'=>'e','ì'=>'i','ả'=>'a','*'=>' ','ó'=>'o','ể'=>'e','Ấ'=>'a','ậ'=>'a','ộ'=>'o','à'=>'a','ợ'=>'o','ệ'=>'e','`'=>'','&gt;'=>'','&lt;'=>'','&quot;'=>'','&amp;'=>'','%'=>'','#'=>'',')'=>'','('=>'','.'=>'','!'=>'',','=>'','\''=>'','+'=>'','&'=>'','?'=>'',':'=>'','؟'=>'','á'=>'a','ầ'=>'a','|'=>'','“'=>'','”'=>'','–'=>'','='=>'','ặ'=>'a','ờ'=>'o','ố'=>'o','ắ'=>'a','ỳ'=>'y','é'=>'e','ẹ'=>'e','ú'=>'u');
	$str = strtr($str, $trans);
    if ($separator == 'dash')
    {
        $search     = '_';
        $replace    = '-';
    }
	else
    {
        $search     = '-';
        $replace    = '_';
    }

    $trans = array('&\#\d+?;' => '', '&\S+?;' => '', '\s+' => $replace, $replace.'+' => $replace, $replace.'$' => $replace, '^'.$replace => $replace,  '\.+$' => '' );
    $str = strip_tags($str);
    $str = preg_replace("#\/#ui",'-',$str);
    foreach ($trans AS $key => $val){$str = preg_replace("#".$key."#ui", $val, $str);}
    if($lowercase === TRUE){$str = mb_strtolower($str,'UTF-8');}
	return trim(stripslashes($str), "-");
}



	function un_htmlentities($string) {
    $ts = array_flip(get_html_translation_table(HTML_ENTITIES));
    return strtr($string, $ts);
  }

  function un_accent($string) {
    $ts = array("/[ہ-إ]/","/ئ/","/ا/","/[ب-ث]/","/[ج-د]/","/ذ/","/ر/","/[ز-ضط]/","/×/","/[ظ-ـ]/","/[ف-ك]/","/[à-ه]/","/و/","/ç/","/[è-ë]/","/[ى-ï]/","/ً/","/ٌ/","/[ٍ-ِّ]/","/÷/","/[ù-ü]/","/[‎-ے]/");
    $tn = array("A","AE","C","E","I","D","N","O","X","U","Y","a","ae","c","e","i","d","n","o","x","u","y");
    return preg_replace($ts,$tn, $string);
  }

  function loadallchannels(){
    global $conn;
	$query5 = "SELECT * FROM channels WHERE published =1 ORDER BY ordering";
	$executequery5 = $conn->Execute($query5);
	$cats = $executequery5->getrows();
	return $cats;
  }
function loadallchannelsjson(){
    global $conn;
    $queryjson = "SELECT CID,cname,icon FROM channels WHERE published =1 ORDER BY ordering";
    $executequery5 = $conn->Execute($queryjson);
    $catsjson = $executequery5->getarray();
    return $catsjson;
}
  function load_fav_channel($channel, $num, $pid){
    global $conn;
	$query = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.CID='".$channel."' AND A.active='1' AND A.youtube_key='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY rand() desc limit ".$num;


	$execute = $conn->execute($query);
	$channelArray =  $execute->getarray();

	return $channelArray;
  }
//Ban muon xem
function want_views($channel, $num, $pid){
    global $conn;
    $query = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.CID='".$channel."' AND A.active='1' AND A.youtube_key !='' ORDER BY time_added desc limit ".$num;
    $execute = $conn->execute($query);
    $channelArray =  $execute->getarray();
    return $channelArray;
}
  function load_rhome(){
    global $conn;
	$queryr = "SELECT A.*, B.username FROM posts A, members B WHERE A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND A.youtube_key='' AND A.fod_key='' AND A.vfy_key='' AND A.vmo_key='' ORDER BY rand() desc limit 3";
	$executequeryr = $conn->execute($queryr);
	$r =  $executequeryr->getarray();
	return $r;
  }

  function load_topgags(){
    global $conn;
    global $config;
	$ctime = 24 * 60 * 60;
	if ($config['topgags'] == 2){$ctime = $ctime * 7;}
	if ($config['topgags'] == 3){$ctime = $ctime * 30;}
	$utime = time() - $ctime;
      //lay ra ngay cua 2 ngay truoc
      $nowtime = date( 'Y-m-d H:i:s',time());
      $new_date = strtotime ( '-2 day' , strtotime ( $nowtime ) ) ;
      $new_date = date ( 'Y-m-d H:i:s' , $new_date );
	$query3 = "SELECT *  FROM posts WHERE time_added <='".time()."' AND date_added >'$new_date' AND date_added <='".$nowtime."'  AND phase ='2' AND active='1' AND youtube_key='' AND dai_key='' AND fod_key='' AND vfy_key='' AND vmo_key='' AND nsfw='0' AND pic NOT LIKE '%.gif' order by time_added desc";
	$executequery3 = $conn->execute($query3);
	$topgags = $executequery3->getrows();
    return $topgags;
  }

  function loadtopchannels($cats){
    global $conn;
	$ccount = count($cats);
	$ctotal = array();
	$chname = array();
	for ($i = 0; $i < $ccount; $i++) {
		$j = $cats[$i]['CID'];
		$query3 = "SELECT count(*) as total from posts A, channels B where B.CID=$j AND A.CID=B.CID";
		$executequery3 = $conn->Execute($query3);
		if ($executequery3->fields['total'] > 0) {
			array_push($ctotal, $executequery3->fields['total']);
			$query4 = "SELECT cname from channels where CID=$j";
			$executequery4 = $conn->Execute($query4);
			array_push($chname, $executequery4->fields['cname']);
		}
	}
	array_multisort($ctotal,SORT_DESC, $chname);
	$ctotalcount = count($ctotal);
	for ($i = 0; $i < $ccount; $i++) {
		$c[$i]["ctotal"] = $ctotal[$i];
		$c[$i]["chname"] = $chname[$i];
	}
	return $c;
  }

  function gif_detector($posts)
  {
	$pcount = count($posts);
	for ($i = 0; $i < $pcount; $i++) {
		$pos = strrpos($posts[$i]['pic'],".");
		$ph = strtolower(substr($posts[$i]['pic'],$pos+1,strlen($posts[$i]['pic'])-$pos));
		if($ph == "gif")
		{
			$posts[$i]['gif'] = 1;
		}
		else
		{
			$posts[$i]['gif'] = 0;
		}
	}
	return $posts;
  }

  //made by magicvn
  function title_emotion_detector($posts)
  {
	$pcount = count($posts);
	for ($i = 0; $i < $pcount; $i++) {
		$title = $posts[$i]['story'];

		$posts[$i]['title'] = title_emotion_detector_detail($title);
	}
	return $posts;
  }

  function title_emotion_detector_detail($title)
  {

	$symbol = array(
				":D",
				":d",
				":))",

				":((",
				";;)",
				";))",
				";)",

				">:D<",
				":-/",
				":x",
				":X",

				":P",
				":p",
				":-*",
				"=((",

				":-O",
				":-o",
				":-S",
				":-s",

				"#:-S",
				"#:-s",
				">:)",
				":(",

				":)",
				":|",
				"=))",
				"=;",

				"8-|",
				"L-)",
				"l-)",
				"[-(",

				":v",
				"(y)",
				"<3",
				":3"
			);
	$emotion   = array(
				"<img style='display:inline' src='/images/emotion/4.gif' />",
				"<img style='display:inline' src='/images/emotion/4.gif' />",
				"<img style='display:inline' src='/images/emotion/21.gif' />",

				"<img style='display:inline' src='/images/emotion/20.gif' />",
				"<img style='display:inline' src='/images/emotion/5.gif' />",
				"<img style='display:inline' src='/images/emotion/3.gif' />",
				"<img style='display:inline' src='/images/emotion/3.gif' />",

				"<img style='display:inline' src='/images/emotion/6.gif' />",
				"<img style='display:inline' src='/images/emotion/7.gif' />",
				"<img style='display:inline' src='/images/emotion/8.gif' />",
				"<img style='display:inline' src='/images/emotion/8.gif' />",

				"<img style='display:inline' src='/images/emotion/10.gif' />",
				"<img style='display:inline' src='/images/emotion/10.gif' />",
				"<img style='display:inline' src='/images/emotion/11.gif' />",
				"<img style='display:inline' src='/images/emotion/12.gif' />",

				"<img style='display:inline' src='/images/emotion/13.gif' />",
				"<img style='display:inline' src='/images/emotion/13.gif' />",
				"<img style='display:inline' src='/images/emotion/17.gif' />",
				"<img style='display:inline' src='/images/emotion/17.gif' />",

				"<img style='display:inline' src='/images/emotion/18.gif' />",
				"<img style='display:inline' src='/images/emotion/18.gif' />",
				"<img style='display:inline' src='/images/emotion/19.gif' />",
				"<img style='display:inline' src='/images/emotion/2.gif' />",

				"<img style='display:inline' src='/images/emotion/1.gif' />",
				"<img style='display:inline' src='/images/emotion/22.gif' />",
				"<img style='display:inline' src='/images/emotion/24.gif' />",
				"<img style='display:inline' src='/images/emotion/27.gif' />",

				"<img style='display:inline' src='/images/emotion/29.gif' />",
				"<img style='display:inline' src='/images/emotion/30.gif' />",
				"<img style='display:inline' src='/images/emotion/30.gif' />",
				"<img style='display:inline' src='/images/emotion/33.gif' />",

				"<img style='display:inline' src='/images/emotion/capdat.png' />",
				"<img style='display:inline' src='/images/emotion/like.png' />",
				"<img style='display:inline' src='/images/emotion/heart.png' />",
				"<img style='display:inline' src='/images/emotion/109.png' />"
			);

	return str_replace($symbol, $emotion, $title);

  }


  function update_up_notifications($PID,$UID,$SID,$love)
  {
    global $conn;
    global $config;
	if($love == 1)
	{
		$query = "SELECT count(*) as total FROM notifications WHERE PID='".$PID."' AND USERID='".$UID."' AND type=1";
		$executequery = $conn->execute($query);
		$total = intval($executequery->fields['total']);
		if($total > 0)
		{
			$query = "UPDATE notifications SET LASTID2=LASTID, LASTID='".$SID."', hits = hits+1 WHERE PID='".$PID."' AND USERID='".$UID."' AND type=1";
			$executequery = $conn->execute($query);
		}
		else
		{
			$query = "INSERT INTO notifications SET LASTID2=0, LASTID='".$SID."', hits=1, type=1, PID='".$PID."', USERID='".$UID."', time_added='".time()."', date_added='".date("Y-m-d")."'";
			$executequery = $conn->execute($query);
		}
	}
	if($love == -1)
	{
		$query = "SELECT LASTID, hits FROM notifications WHERE PID='".$PID."' AND USERID='".$UID."' AND type=1";
		$executequery = $conn->execute($query);
		$LASTID = $executequery->fields['LASTID'];
		$hits = intval($executequery->fields['hits']);
		if($hits == 1)
		{
			$query = "DELETE FROM notifications WHERE LASTID='".$SID."' AND type=1 AND PID='".$PID."' AND USERID='".$UID."'";
			$executequery = $conn->execute($query);
		}
		elseif($LASTID == $SID)
		{
			$query = "UPDATE notifications SET LASTID=LASTID2, LASTID2='0', hits = hits-1 WHERE PID='".$PID."' AND USERID='".$UID."'";
			$executequery = $conn->execute($query);
		}
	}
  }

  function update_down_notifications($PID,$UID,$SID,$unlove)
  {
    global $conn;
    global $config;
	if($unlove == 1)
	{
		$query = "SELECT count(*) as total FROM notifications WHERE PID='".$PID."' AND USERID='".$UID."' AND type='0'";
		$executequery = $conn->execute($query);
		$total = intval($executequery->fields['total']);
		if($total > 0)
		{
			$query = "UPDATE notifications SET LASTID2=LASTID, LASTID='".$SID."', hits = hits+1, new='1' WHERE PID='".$PID."' AND USERID='".$UID."' AND type='0'";
			$executequery = $conn->execute($query);
		}
		else
		{
			$query = "INSERT INTO notifications SET LASTID2='0', LASTID='".$SID."', hits=1, type='0', PID='".$PID."', USERID='".$UID."', time_added='".time()."', date_added='".date("Y-m-d")."'";
			$executequery = $conn->execute($query);
		}
	}
	if($unlove == -1)
	{
		$query = "SELECT LASTID, hits FROM notifications WHERE PID='".$PID."' AND USERID='".$UID."' AND type='0'";
		$executequery = $conn->execute($query);
		$LASTID = $executequery->fields['LASTID'];
		$hits = intval($executequery->fields['hits']);
		if($hits == 1)
		{
			$query = "DELETE FROM notifications WHERE LASTID='".$SID."' AND type='0' AND PID='".$PID."' AND USERID='".$UID."'";
			$executequery = $conn->execute($query);
		}
		elseif($LASTID == $SID)
		{
			$query = "UPDATE notifications SET LASTID=LASTID2, LASTID2='0', hits = hits-1, new='1' WHERE PID='".$PID."' AND USERID='".$UID."'";
			$executequery = $conn->execute($query);
		}
	}
  }

  function sort_notifications($ar)
  {
    $notifications = array();
    foreach($ar as $item)
    {
    	if($item['date_added'] == date('Y-m-d')){$notifications[$item['date_added']]['replies'][] = $item;$notifications[$item['date_added']]['date']=$item['date_added'];}
    	elseif($item['date_added'] == date('Y-m-d', strtotime(' -1 day'))){$notifications[$item['date_added']]['replies'][] = $item;$notifications[$item['date_added']]['date']=$item['date_added'];}
    	elseif($item['date_added'] == date('Y-m-d', strtotime(' -2 day'))){$notifications[$item['date_added']]['replies'][] = $item;$notifications[$item['date_added']]['date']=$item['date_added'];}
    	elseif($item['date_added'] == date('Y-m-d', strtotime(' -3 day'))){$notifications[$item['date_added']]['replies'][] = $item;$notifications[$item['date_added']]['date']=$item['date_added'];}
    	elseif($item['date_added'] == date('Y-m-d', strtotime(' -4 day'))){$notifications[$item['date_added']]['replies'][] = $item;$notifications[$item['date_added']]['date']=$item['date_added'];}
    	elseif($item['date_added'] == date('Y-m-d', strtotime(' -5 day'))){$notifications[$item['date_added']]['replies'][] = $item;$notifications[$item['date_added']]['date']=$item['date_added'];}
    	elseif($item['date_added'] == date('Y-m-d', strtotime(' -6 day'))){$notifications[$item['date_added']]['replies'][] = $item;$notifications[$item['date_added']]['date']=$item['date_added'];}
    }
    return $notifications;
  }
  function create_text_watermark($img,$pid,$thepp,$thepp2,$type)
  {
    global $config;
	// The path to the font
	$wmfont = $config['basedir']."/include/fonts/".$config['wmfont'];
	// The font size
	$fsize = $config['fsize'];
	// The watermark hieght in pixels
	$wmhieght = $config['wmhieght'];
	if($type == 1){$add2dir = "/t/l-";}
	else{$add2dir = "/t/";}
	$watermark = $config['imagedir']."/watermark.jpg";
	$img_width=imagesx($img);
	$img_height=imagesy($img);
	$watermark=imagecreatefromjpeg($watermark);
	$watermark_width=imagesx($watermark);
	$watermark_height=imagesy($watermark);
	$image=imagecreatetruecolor($watermark_width, $watermark_height);
	imagealphablending($image, false);
	// Create the canvas
	$canvas = imagecreate( $img_width, $wmhieght );
	// Define the colours to use
	$black = imagecolorallocate( $canvas, $config['blackr'], $config['blackb'], $config['blackg'] );
	$white = imagecolorallocate( $canvas, $config['whiter'], $config['whiteb'], $config['whiteg'] );
	// Create a rectangle and fill it white
	imagefilledrectangle( $canvas, 0, 0, $img_width, $wmhieght, $white );
	// The text to use
	//$wmtext = $config['domain'].$config['postfolder'].$pid."/";
	//magicvn just domain
	$wmtext = $config['domain'];
	// Set the path to the image to watermark
	$input_image = $config['pdir'].$add2dir.$thepp;
	// Calculate the size of the text
	// If php has been setup without ttf support this will not work.
	$box = imagettfbbox( $fsize, 0, $wmfont, $wmtext );
	$x = 10;
	$y = ($wmhieght - ($box[1] - $box[7])) / 2;
	$y -= $box[7];
	// Add the text to the image
	imageTTFText( $canvas, $fsize, 0, $x, $y, $black, $wmfont, $wmtext );
	// Adding the logo watermark
	if($config['lwm'] == "1"){
	$dest_x2=$img_width-$watermark_width-5;
	$dest_y2=$wmhieght-$watermark_height-5;
	imagecopy($canvas, $watermark, $dest_x2, $dest_y2, 0, 0, $watermark_width, $watermark_height);
	}
	// Make white transparent
	//imagecolortransparent ( $canvas, $white );
	// Save the text image as temp.png
	imagepng( $canvas, $config['basedir']."/temporary/".$pid."_wm_temp.png" );
	// Cleanup the tempory image canvas.png
	ImageDestroy( $canvas );

	// Create the canvas2
	$canvas2 = imagecreatetruecolor( $img_width, $img_height + $wmhieght );
	// Define the colours to use
	$black = imagecolorallocate( $canvas2, $blackr, $blackb, $blackg );
	$white = imagecolorallocate( $canvas2, $whiter, $whiteb, $whiteg );
	// Create a rectangle and fill it white
	imagefilledrectangle( $canvas2, 0, 0, $img_width, $img_height + $wmhieght, $white );
	$dest_x3=0;
	$dest_y3=0;
	if($thepp2 == ".png"){$input_image=imagecreatefrompng( $input_image );}
	else{$input_image=imagecreatefromjpeg( $input_image );}
	imagealphablending($canvas2, false);
	imagecopy($canvas2, $input_image, $dest_x3, $dest_y3, 0, 0, $img_width, $img_height);
	imagepng( $canvas2, $config['basedir']."/temporary/".$pid."_temp.png" );
	ImageDestroy( $canvas2 );
	$input_image2 = $config['basedir']."/temporary/".$pid."_temp.png";

	// Read in the text watermark image
	$watermark2 = imagecreatefrompng( $config['basedir']."/temporary/".$pid."_wm_temp.png" );
	// Returns the width of the given image resource
	$watermark_width2 = imagesx( $watermark2 );
	//Returns the height of the given image resource
	$watermark_height2 = imagesy( $watermark2 );
	$image2 = imagecreatetruecolor( $watermark_width2, $watermark_height2 );
	$image2 = imagecreatefrompng( $input_image2 );
	// Find the size of the original image and read it into an array
	$size = getimagesize( $input_image2 );
	// Set the positions of the watermark on the image
	$dest_x = $img_width-150;
	$dest_y = $img_height;
	//imagecopymerge($image2, $watermark2, $dest_x, $dest_y, 0, 0, $watermark_width2, $watermark_height2, 100);
	imagecopymerge($image2, $watermark2, $dest_x, $dest_y-$watermark_height2, 0, 0, $watermark_width2, $watermark_height2, 100);
	// Save the watermarked image as watermarked.jpg
	imagejpeg( $image2, $config['pdir'].$add2dir.$thepp );
	// Clear the memory of the tempory image
	imagedestroy( $image2 );
	imagedestroy( $watermark2 );
	// Delete the text watermark image
	unlink( $config['basedir']."/temporary/".$pid."_wm_temp.png");
	unlink( $config['basedir']."/temporary/".$pid."_temp.png");
  }
  function create_logo_watermark($img,$thepp,$type,$watermarkPos=1)
  {
    global $config;
	if($type == 1){$add2dir = "/t/l-";}
	else{$add2dir = "/t/";}
	$watermark = $config['imagedir']."/watermark.png";
	$img_width=imagesx($img);
	$img_height=imagesy($img);
	$watermark=imagecreatefrompng($watermark);
	$watermark_width=imagesx($watermark);
	$watermark_height=imagesy($watermark);
	$image=imagecreatetruecolor($watermark_width, $watermark_height);
	imagealphablending($image, false);

	if ($watermarkPos == 1){
		//Pos=5 - Top Left
		$dest_x=5;
		$dest_y=5;
	}elseif($watermarkPos == 2){
		//Pos - Top Right
		$dest_x=$img_width-$watermark_width-5;
		$dest_y=5;
	}elseif($watermarkPos == 3){
		//Pos - Center
		$dest_x=$img_width/2-$watermark_width/2;
		$dest_y=$img_height/2-$watermark_height/2;
	}elseif($watermarkPos == 4){
		//Pos - Bottom Left
		$dest_x=5;
		$dest_y=$img_height-$watermark_height-5;
	}else{
		//Pos=5 - Bottom Right
		$dest_x=$img_width-$watermark_width-5;
		$dest_y=$img_height-$watermark_height-5;
	}


	imagecopy($img, $watermark, $dest_x, $dest_y, 0, 0, $watermark_width, $watermark_height);
	imagesavealpha($img, true);
	imagejpeg($img, $config['pdir'].$add2dir.$thepp, 90);
  }
  //tags
function tagsexplode($tags)
{
    global $config;
    $words = explode(",",$tags);
    if ($tags != '')
    {
        echo "<img src='".$config['imageurl']."/tags.png' title='Từ khóa' /> : ";
        foreach($words as $key=>$values)
        {
            $values = trim($values);
            echo "<a href='".$config['baseurl']."/search?query=$values'>".$values."</a> ";
        }
    }
}
?>