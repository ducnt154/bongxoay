<?php
include("../include/include.php");
include_once("navbar.php");
if ($config['channels'] == 1)
{
    $cats = loadallchannels();
    $c = loadtopchannels($cats);
    $date_month = date("d/m");
    STemplate::assign('date_month',$date_month);
    STemplate::assign('allchannels',$cats);
    STemplate::assign('c',$c);
}
if(isset($_GET['c']))
{
    $fn = $_GET['c'];
}
else
{
    $filteredData=substr($_POST['imgdata'], strpos($_POST['imgdata'], ",")+1);

    // Need to decode before saving since the data we received is already base64 encoded
    $decodedData=base64_decode($filteredData);

    $fn = substr(md5(time()), 0, 5);
    $fp = fopen( "c/$fn.png", 'wb' );
    fwrite( $fp, $decodedData);
    fclose( $fp );
    //insert vào DB
    $title = $_REQUEST['title'];
    $CID = cleanit($_REQUEST['CID']);
    $SID = $_SESSION['USERID'];
    $uploadedimage = $_FILES['image']['tmp_name'];
    $pic = $fn.'.png';
    $approve_stories = $config['approve_stories'];
    if($approve_stories == "1"){$active = "0";}
    else{$active = "1";}
    $query="INSERT INTO posts SET USERID='".mysql_real_escape_string($SID)."', story='".mysql_real_escape_string($title)."', CID='".mysql_real_escape_string($CID)."',pic ='".$pic."',status_che ='1', time_added='".time()."', date_added='".date("Y-m-d")."', active='$active', pip='".$_SERVER['REMOTE_ADDR']."'";
    $result=$conn->execute($query);
    $pid = mysql_insert_id();
    }
    function isImage($filename)
    {
        if(function_exists('getimagesize'))
        {
            if(getimagesize($filename))
                return 1;
        }
        else if(function_exists('exif_imagetype'))
        {
            if(exif_imagetype($filename))
                return 1;
        } else
            return 0;
    }
    if($securityChecksEnabled)
    {
        if(!function_exists('getimagesize') && !function_exists('exif_imagetype'))
        {
            die("<h1>Some Security features cannot be enabled since your PHP does not support GD</h1><p>These are optional features and you can disable them. Refer documentation.</p>");
        }

        if(!isImage("c/$fn.png"))
        {
            unlink("c/$fn.png");
            die("You uploaded a non image.");
        }
    }

    if(filesize("c/$fn.png") > $maxFileSize * 1024 * 8)
    {
        die("Image you uploaded is too big");
    }
    else if(filesize("c/$fn.png") == 0)
    {
        die("File you uploaded has an error. Please re-try");
    }
STemplate::assign('viewpage',3);
STemplate::assign('error',$error);
STemplate::display('header.tpl');
STemplate::display('view_meme.tpl');

?>
<div class="row-cread">
    <div class="span8">
        <h3><?php echo $_POST['title'];?></h3>
        <br> <img src="c/<?php echo $fn; ?>.png">
    </div>
    <div class="span4">
        <?php
        if(strstr($_SERVER["REQUEST_URI"], "?c"))
        {
            $k = explode("?", $_SERVER["REQUEST_URI"]);
            $url = $_SERVER["SERVER_NAME"].$k[0]."?c=$fn";
        }
        else
        {
            $url = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]."?c=$fn";
        }
        ?>
        <h4>Link</h4>
        <br> <input type="text" id="sharelink"
                    value="<?php echo "http://".$url; ?>"> <br>
        <code>Copy and Share Link</code>
        <h4>Share on Facebook</h4>
        <iframe
            src="//www.facebook.com/plugins/like.php?href=http://<?php echo $url; ?>&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21"
            scrolling="no" frameborder="0"
            style="border: none; overflow: hidden; width: 450px; height: 21px;"
            allowTransparency="true"></iframe>
        <span style="font-size: 13px;font-weight: bold">Bạn đã chế ảnh thành công. Bài viết của bạn sẽ được đưa lên trang chủ sau khi được phê duyệt của ban quản trị<br>Bạn có thể quay lại <a href="http://bongxoay.com">Trang chủ</a></span>
    </div>
</div>
