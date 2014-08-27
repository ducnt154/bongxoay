<?php
include("../include/include.php");
if ($config['channels'] == 1)
    {
    $cats = loadallchannels();
    $c = loadtopchannels($cats);
    $date_month = date("d/m");
    STemplate::assign('date_month',$date_month);
    STemplate::assign('allchannels',$cats);
    STemplate::assign('c',$c);
    }
    STemplate::assign('viewpage',2);
    STemplate::assign('error',$error);
    STemplate::display('header.tpl')
    ?>

<script>

    <?php

        include_once("memesettings.php");

        if(isset($_GET['p']))
        {
            $templateName = isset($_GET['p']) ? $_GET['p'] : 'null.jpg';

            if(file_exists("custom/$templatName"))
                $imgname = "custom/$templateName";
            else
                $imgname = 'templates/int.jpg';

            print "var gblImgName = \"$imgname\";";

        }
        else
        {
            $templateName = isset($_GET['t']) ? $_GET['t'] : 'null.jpg';

            if(file_exists("templates/$templatName"))
                $imgname = "templates/$templateName";
            else
                $imgname = 'templates/int.jpg';

            //$imgname = 'templates/int.jpg';
            print "var gblImgName = \"$imgname\";";
        }

        print "var watermark =\"$watermark\";";

    ?>
</script>

<?php
$points_up = intval($config['points_up']);
    $queryc = "SELECT * FROM channels WHERE published =1";
    $executequeryc = $conn->execute($queryc);
    $c =  $executequeryc->getarray();
    STemplate::assign('c',$c);
    STemplate::display('meme.tpl');
?>