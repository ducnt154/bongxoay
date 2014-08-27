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

$points_up = intval($config['points_up']);
$SID = $_SESSION['USERID'];
if ($SID != "" && $SID >= 0 && is_numeric($SID))
{	
	$ctime = 24 * 60 * 60;
	$utime = time() - $ctime;
	$query = "select count(*) as total from posts WHERE USERID='".mysql_real_escape_string($SID)."' AND time_added>='$utime'"; 
	$executequery = $conn->execute($query);
	$myuploads = $executequery->fields['total'];
	$quota = $config['quota'];
	if($myuploads >= $quota)
	{
		$error = $errors['20'];
		$template = "empty.tpl";
	}
	else
	{
	
		$queryc = "SELECT * FROM channels";
		$executequeryc = $conn->execute($queryc);
		$c =  $executequeryc->getarray();
		STemplate::assign('c',$c);
	
		$t = cleanit($_REQUEST['t']);
		if($t == "v" && $config['vupload'] == 1)
		{
			$post_type = cleanit($_REQUEST['post_type']);
			if($post_type == "Video")
			{
				$nsfw = intval(cleanit($_REQUEST['nsfw']));
				$source = cleanit($_REQUEST['source']);
				$tags = cleanit($_REQUEST['tags']);
				$CID = cleanit($_REQUEST['CID']);
				$title = cleanit($_REQUEST['title']);
				$url = cleanit($_REQUEST['url']);
				
				
				if($url == "")
				{
					$error = $errors['21'];
				}
				elseif($title == "")
				{
					$error = $errors['22'];
				}
				
				if((!strstr($url, 'youtube.com/watch?v=')) && (!strstr($url, 'funnyordie.com/videos/')) && (!strstr($url, 'videofy.me/')) && (!strstr($url, 'vimeo.com/')))
				{
					$error = $errors['23'];
				}
				
				if($error == "")
				{
					if(strstr($url, 'youtube.com/watch?v='))
					{
						$youtube_url = $url;
						$position       = strpos($youtube_url, 'watch?v=')+8;
						$remove_length  = strlen($youtube_url)-$position;
						$video_id       = substr($youtube_url, -$remove_length, 11);
						$addme = ", youtube_key='".mysql_real_escape_string($video_id)."'";
					}
					elseif(strstr($url, 'funnyordie.com/videos/'))
					{
						$fod_url = $url;
						$position       = strpos($fod_url, 'funnyordie.com/videos/')+22;
						$remove_length  = strlen($fod_url)-$position;
						$video_id       = substr($fod_url, -$remove_length, 10);
						$addme = ", fod_key='".mysql_real_escape_string($video_id)."'";
					}
					elseif(strstr($url, 'videofy.me/'))
					{
						$vfy_url = $url;
						$position       = strpos($vfy_url, 'videofy.me/')+11;
						$remove_length  = strlen($vfy_url)-$position;
						$video_id       = substr($vfy_url, -$remove_length);
						$position2       = strpos($video_id, '/')+1;
						$remove_length2  = strlen($video_id)-$position2;
						$video_id2       = substr($video_id, -$remove_length2);
						$addme = ", vfy_key='".mysql_real_escape_string($video_id2)."'";
					}
					elseif(strstr($url, 'vimeo.com/'))
					{
						$vmo_url = $url;
						$position       = strpos($vmo_url, 'vimeo.com/')+10;
						$remove_length  = strlen($vmo_url)-$position;
						$video_id       = substr($vmo_url, -$remove_length);
						$addme = ", vmo_key='".mysql_real_escape_string($video_id)."'";
					}
					$approve_stories = $config['approve_stories'];
					if($approve_stories == "1")
					{
						$active = "0";
					}
					else
					{
						$active = "1";
					}
					
					$queryupdateposts = "UPDATE members SET posts=posts+1 WHERE USERID='".mysql_real_escape_string($SID)."'"; 
					$executequeryupdateposts = $conn->execute($queryupdateposts);
					
					$query="INSERT INTO posts SET USERID='".mysql_real_escape_string($SID)."', story='".mysql_real_escape_string($title)."', tags='".mysql_real_escape_string($tags)."', source='".mysql_real_escape_string($source)."', CID='".mysql_real_escape_string($CID)."', nsfw='".mysql_real_escape_string($nsfw)."', url='".mysql_real_escape_string($url)."', favclicks='1', time_added='".time()."', date_added='".date("Y-m-d")."', active='$active', pip='".$_SERVER['REMOTE_ADDR']."' $addme";
					$result=$conn->execute($query);
					$pid = mysql_insert_id();
					$query="INSERT INTO posts_favorited SET PID='".mysql_real_escape_string($pid)."', USERID='".mysql_real_escape_string($SID)."'";
					$conn->execute($query);
					$up_points = $config['up_points'];
					if($up_points > 0)
					{
					$query = "UPDATE members SET points=points+$up_points WHERE USERID='".mysql_real_escape_string($SID)."'";
					$executequery=$conn->execute($query);
					}
					
					if($config[SEO] == 1){header("Location:$mobileurl".$config[postfolder].$pid."/".makeseo($title).".html?new=1");exit;}
					else{header("Location:$mobileurl".$config[postfolder].$pid."/?new=1");exit;}
				}
			}
			$template = "submit2.tpl";
		}
		else
		{
			$file = cleanit($_REQUEST['file']);
			if($file == "1")
			{
				$post_type = cleanit($_REQUEST['post_type']);
				if($post_type == "Photo")
				{
					$nsfw = intval(cleanit($_REQUEST['nsfw']));
					$source = cleanit($_REQUEST['source']);
					$tags = cleanit($_REQUEST['tags']);
					$CID = cleanit($_REQUEST['CID']);
					$title = cleanit($_REQUEST['title']);
					$uploadedimage = $_FILES['image']['tmp_name'];
					$watermarkPos = cleanit($_REQUEST['watermark']);
					
					if($uploadedimage == "")
					{
						$error = $errors['24'];
					}
					else
					{
						$theimageinfo = getimagesize($uploadedimage);
						if($theimageinfo[2] != 1 && $theimageinfo[2] != 2 && $theimageinfo[2] != 3)
						{
							$error = $errors['25'];
						}
						else
						{
							if($title == "")
							{
								$error = $errors['22'];
							}
							else
							{
								$approve_stories = $config['approve_stories'];
								if($approve_stories == "1"){$active = "0";}
								else{$active = "1";}
								$query="INSERT INTO posts SET USERID='".mysql_real_escape_string($SID)."', story='".mysql_real_escape_string($title)."', tags='".mysql_real_escape_string($tags)."', source='".mysql_real_escape_string($source)."', CID='".mysql_real_escape_string($CID)."', nsfw='".mysql_real_escape_string($nsfw)."', time_added='".time()."', date_added='".date("Y-m-d")."', active='$active', pip='".$_SERVER['REMOTE_ADDR']."'";
								$result=$conn->execute($query);
								$pid = mysql_insert_id();
								
								if($uploadedimage != "")
								{
									$thepp = $pid;
									if($theimageinfo[2] == 1)
									{
										$thepp .= ".gif";
										$thepp2 = ".gif";
									}
									elseif($theimageinfo[2] == 2)
									{
										$thepp .= ".jpg";
										$thepp2 = ".jpg";
									}
									elseif($theimageinfo[2] == 3)
									{
										$thepp .= ".png";
										$thepp2 = ".png";
									}
									if($error == "")
									{
										$myvideoimgnew=$config['pdir']."/".$thepp;
										if(file_exists($myvideoimgnew))
										{
											unlink($myvideoimgnew);
										}
										$myconvertimg = $_FILES['image']['tmp_name'];
										move_uploaded_file($myconvertimg, $myvideoimgnew);
										if($thepp2 != ".gif")
										{
											do_resize_image($myvideoimgnew, "700", "0", true, $config['pdir']."/t/l-".$thepp);
											do_resize_image($myvideoimgnew, "460", "0", true, $config['pdir']."/t/".$thepp);
											do_resize_image($myvideoimgnew, "215", "0", true, $config['pdir']."/t/s-".$thepp);
										}
										else
										{
											imagick_gif_resize($myvideoimgnew, "700", "0", true, $config['pdir']."/t/l-".$thepp, $config['pdir']."/t/z-".$thepp);
											imagick_gif_resize($myvideoimgnew, "460", "0", true, $config['pdir']."/t/".$thepp, $config['pdir']."/t/z-".$thepp);
											imagick_gif_resize($myvideoimgnew, "215", "0", true, $config['pdir']."/t/s-".$thepp, $config['pdir']."/t/z-".$thepp);
											
						
										}
										if(file_exists($config['pdir']."/".$thepp))
										{

											if($thepp2 == ".png")
											{
												$img=imagecreatefrompng($config['pdir']."/t/l-".$thepp);
												$img2=imagecreatefrompng($config['pdir']."/t/".$thepp);
											}
											elseif($thepp2 == ".jpg")
											{
												$img=imagecreatefromjpeg($config['pdir']."/t/l-".$thepp);
												$img2=imagecreatefromjpeg($config['pdir']."/t/".$thepp);
											}
											else{$wskip = "1";}
											if($wskip != "1")												
											{
												if($config['twm'] == "1")
												{
													create_text_watermark($img,$pid,$thepp,$thepp2,1);
													create_text_watermark($img2,$pid,$thepp,$thepp2,0);
												}
												elseif($config['lwm'] == "1")
												{	
													create_logo_watermark($img,$thepp,1,$watermarkPos);
													create_logo_watermark($img2,$thepp,0,$watermarkPos);
													
												}
											}
											$queryupdateposts = "UPDATE members SET posts=posts+1 WHERE USERID='".mysql_real_escape_string($SID)."'"; 
											$executequeryupdateposts = $conn->execute($queryupdateposts);
																				
											$query = "UPDATE posts SET pic='$thepp', favclicks='1' WHERE PID='".mysql_real_escape_string($pid)."'";
											$conn->execute($query);			
											$query="INSERT INTO posts_favorited SET PID='".mysql_real_escape_string($pid)."', USERID='".mysql_real_escape_string($SID)."'";
											$conn->execute($query);
											
											$up_points = $config['up_points'];
											if($up_points > 0)
											{
											$query = "UPDATE members SET points=points+$up_points WHERE USERID='".mysql_real_escape_string($SID)."'";
											$executequery=$conn->execute($query);
											}
											
											if($config[SEO] == 1){header("Location:$mobileurl".$config[postfolder].$pid."/".makeseo($title).".html?new=1");exit;}
											else{header("Location:$mobileurl".$config[postfolder].$pid."/?new=1");exit;}
										}
									}
								}
							}
						}
					}
				}
			}
			else
			{
				$post_type = cleanit($_REQUEST['post_type']);
				if($post_type == "Photo")
				{
					$nsfw = intval(cleanit($_REQUEST['nsfw']));
					$source = cleanit($_REQUEST['source']);
					$tags = cleanit($_REQUEST['tags']);
					$CID = cleanit($_REQUEST['CID']);
					$title = cleanit($_REQUEST['title']);
					$url = cleanit($_REQUEST['url']);
					$watermarkPos = cleanit($_REQUEST['watermark']);
					
					if($url == "")
					{
						$error = $errors['26'];
					}
					elseif($title == "")
					{
						$error = $errors['22'];
					}
					else
					{
						$pos = strrpos($url,".");
						$ph = strtolower(substr($url,$pos+1,strlen($url)-$pos));
						
						if($ph == "jpg" || $ph == "jpeg" || $ph == "png" || $ph == "gif")
						{
							
							$query="INSERT INTO posts SET USERID='".mysql_real_escape_string($SID)."', story='".mysql_real_escape_string($title)."', tags='".mysql_real_escape_string($tags)."', source='".mysql_real_escape_string($source)."', CID='".mysql_real_escape_string($CID)."', nsfw='".mysql_real_escape_string($nsfw)."', url='".mysql_real_escape_string($url)."', time_added='".time()."', date_added='".date("Y-m-d")."', active='0', pip='".$_SERVER['REMOTE_ADDR']."'";
							$result=$conn->execute($query);
							$pid = mysql_insert_id();
							$uploadedimage = $config['pdir'].'/'.$pid.'-temp.'.$ph;
							if(!download_photo($url, $uploadedimage))
							{
								$error = $errors['27'];
								$query = "DELETE FROM posts WHERE PID='".mysql_real_escape_string($pid)."'";
								$conn->execute($query);
							}
							else
							{							
								$theimageinfo = getimagesize($uploadedimage);
								if($theimageinfo[2] != 1 && $theimageinfo[2] != 2 && $theimageinfo[2] != 3)
								{
									$error = $errors['25'];
									$query = "DELETE FROM posts WHERE PID='".mysql_real_escape_string($pid)."'";
									$conn->execute($query);
									unlink($uploadedimage);
								}
								else
								{
									$approve_stories = $config['approve_stories'];
									if($approve_stories == "1"){$active = "0";}
									else{$active = "1";}
									
									if($uploadedimage != "")
									{
										$thepp = $pid;
										if($theimageinfo[2] == 1)
										{
											$thepp .= ".gif";
											$thepp2 = ".gif";
										}
										elseif($theimageinfo[2] == 2)
										{
											$thepp .= ".jpg";
											$thepp2 = ".jpg";
										}
										elseif($theimageinfo[2] == 3)
										{
											$thepp .= ".png";
											$thepp2 = ".png";
										}
										if($error == "")
										{
											$myvideoimgnew=$config['pdir']."/".$thepp;
											if(file_exists($myvideoimgnew))
											{
												unlink($myvideoimgnew);
											}
											copy ($uploadedimage , $myvideoimgnew);
											if($thepp2 != ".gif")
											{
												do_resize_image($myvideoimgnew, "700", "0", true, $config['pdir']."/t/l-".$thepp);
												do_resize_image($myvideoimgnew, "460", "0", true, $config['pdir']."/t/".$thepp);
												do_resize_image($myvideoimgnew, "215", "0", true, $config['pdir']."/t/s-".$thepp);
											}
											else
											{
												imagick_gif_resize($myvideoimgnew, "700", "0", true, $config['pdir']."/t/l-".$thepp, $config['pdir']."/t/z-".$thepp);
												imagick_gif_resize($myvideoimgnew, "460", "0", true, $config['pdir']."/t/".$thepp, $config['pdir']."/t/z-".$thepp);
												imagick_gif_resize($myvideoimgnew, "215", "0", true, $config['pdir']."/t/s-".$thepp, $config['pdir']."/t/z-".$thepp);
											}
											if(file_exists($config['pdir']."/".$thepp))
											{
												if($thepp2 == ".png")
												{
													$img=imagecreatefrompng($config['pdir']."/t/l-".$thepp);
													$img2=imagecreatefrompng($config['pdir']."/t/".$thepp);
												}
												elseif($thepp2 == ".jpg")
												{
													$img=imagecreatefromjpeg($config['pdir']."/t/l-".$thepp);
													$img2=imagecreatefromjpeg($config['pdir']."/t/".$thepp);
												}
												else{$wskip = "1";}
												if($wskip != "1")												
												{
													if($config['twm'] == "1")
													{
														create_text_watermark($img,$pid,$thepp,$thepp2,1);
														create_text_watermark($img2,$pid,$thepp,$thepp2,0);
													}
													elseif($config['lwm'] == "1")
													{	
														//create_logo_watermark($img,1);
														//create_logo_watermark($img2,0);
														
														create_logo_watermark($img,$thepp,1,$watermarkPos);
														create_logo_watermark($img2,$thepp,0,$watermarkPos);
													}
												}
												$queryupdateposts = "UPDATE members SET posts=posts+1 WHERE USERID='".mysql_real_escape_string($SID)."'"; 
												$executequeryupdateposts = $conn->execute($queryupdateposts);
												
												$query = "UPDATE posts SET pic='$thepp', active='$active', favclicks='1' WHERE PID='".mysql_real_escape_string($pid)."'";
												$conn->execute($query);		
												$query="INSERT INTO posts_favorited SET PID='".mysql_real_escape_string($pid)."', USERID='".mysql_real_escape_string($SID)."'";
												$conn->execute($query);
												unlink($uploadedimage);
												
												$up_points = $config['up_points'];
												if($up_points > 0)
												{
												$query = "UPDATE members SET points=points+$up_points WHERE USERID='".mysql_real_escape_string($SID)."'";
												$executequery=$conn->execute($query);
												}
												
												if($config[SEO] == 1){header("Location:$mobileurl".$config[postfolder].$pid."/".makeseo($title).".html?new=1");exit;}
												else{header("Location:$mobileurl".$config[postfolder].$pid."/?new=1");exit;}
											}
										}
									}	
								}
							}
						}
						else
						{
							$error = $errors['25'];
						}
					}
				}
			}
			$template = "submit.tpl";
		}
	}
}
else
{
	header("Location:$mobileurl/login");exit;
}

$query5 = "SELECT * FROM channels";
$executequery5 = $conn->Execute($query5);	
$cats = $executequery5->getarray();
STemplate::assign('allchannels',$cats);

$_SESSION['location'] = "/submit";

//TEMPLATES BEGIN
STemplate::setTplDir($config['mobiledir']."/themes");
STemplate::assign('menu',3);
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display($template);
STemplate::display('footer.tpl');
//TEMPLATES END
?>