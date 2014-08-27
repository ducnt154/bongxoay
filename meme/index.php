
<?php
include("../include/include.php");
?>
<?php
$SID = $_SESSION['USERID'];
if ($SID != "" && $SID >= 0 && is_numeric($SID))
{
?>
<?php
if ($config['channels'] == 1)
{
    $cats = loadallchannels();
    $c = loadtopchannels($cats);
    $date_month = date("d/m");
    STemplate::assign('date_month',$date_month);
    STemplate::assign('allchannels',$cats);
    STemplate::assign('c',$c);
    STemplate::assign('menu',13);
}
STemplate::assign('viewpage',1);
STemplate::assign('error',$error);
STemplate::display('header.tpl')
?>
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<?php include_once("navbar.php"); ?>
    <div class="container" style="background: #fff;margin-top:5px;margin-left: -66px;padding: 10px;border-radius: 4px">
	  <?php
	  $count = 0;
	  if ($handle = opendir('templates')) {
	    while (false !== ($entry = readdir($handle))) {
        $pngl = pathinfo($entry);

		if($pngl['extension'] == 'png' || $pngl['extension'] == 'jpg' || $pngl['extension'] == 'gif')
		{
			$imbasename = $pngl['basename'];
			$imext = $pngl['extension'];
			if(($count == 0)||($count + 1) % 4 == 0)
			{
				print '<div class="row"><ul class="thumbnails">';
			}
			?>
			<li class="span3">
                <div class="thumbnail">
                  <a href="create.php?t=<?php echo $entry; ?>"><img src="templates/<?php echo $entry; ?>" alt="" ></a>
                  <div class="caption">
				  <h4><?php $k = explode(".",str_replace("_"," ",$entry)); echo $k[0];?></h4>
                    <p><a href="create.php?t=<?php echo $entry; ?>" class="btn">Create your own!</a></p>
                  </div>
                </div>
              </li>
			<?php
			if(($count + 1) % 4 == 0)
			{
				print '</ul></div>';
			}
			$count++;
		}
		}
			closedir($handle);
		}
		if(($count) % 4)
			print '</ul></div>';
		?>
    </div> <!-- /container -->
<?php
/*STemplate::display('footer.tpl');*/
    ?>
<?php
 }
else
{
header("Location:$config[baseurl]/login");exit;
}
$_SESSION['location'] = "/meme/";
?>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

