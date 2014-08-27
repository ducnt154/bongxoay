<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{$site_name} Admin Panel | Dashboard</title>
	<meta name="description" content="">
	{if $smarty.session.security ne ""}
    <meta http-equiv="refresh" content="30;url={$adminurl}/users_nl.php?security={$smarty.session.security}&page={$nextpage}">
	{/if}
    <link rel="shortcut icon" href="images/favicon.ico" />

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cuprum" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/fancybox.css" media="screen"  />
    <link rel="stylesheet" href="css/jquery-ui-1.8.16.custom.css" media="screen"  />
    <link rel="stylesheet" href="css/fullcalendar.css" media="screen"  />
    <link rel="stylesheet" href="lib/elfinder/css/elfinder.css" media="screen" />
    <link rel="stylesheet" href="lib/editor/jquery.wysiwyg.css" media="screen" />
    <link rel="stylesheet" href="lib/editor/default.css" media="screen" />
    <link rel="stylesheet" href="lib/player/css/style.css">
    <link rel="stylesheet" href="css/tipTip.css" media="screen" />
    <link rel="stylesheet" href="css/chosen.css" media="screen"  />
    <link rel="stylesheet" href="css/colorpicker.css" type="text/css" />
    <link rel="stylesheet" href="css/tables.css" media="screen"  />
    <link rel="stylesheet" href="css/jquery.jgrowl.css" media="screen"  />
    
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script src="lib/jquery-ui-1.8.16.custom.min.js"></script>
    
    <script type="text/javascript" src="lib/ddaccordion.js"></script>
	<script type="text/javascript" src="lib/jquery.flot.min.js"></script>
    <script type="text/javascript" src="lib/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="lib/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="lib/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="lib/fancybox/fancybox.js"></script>
    <script type="text/javascript" src="lib/fullcalendar.min.js"></script>
    <script src="lib/elfinder/js/elfinder.min.js" charset="utf-8"></script>
    <script src="lib/editor/jquery.wysiwyg.js" charset="utf-8"></script>
    <script src="lib/editor/wysiwyg.image.js" charset="utf-8"></script>
	<script src="lib/editor/default.js" charset="utf-8"></script>
    <script src="lib/editor/wysiwyg.link.js" charset="utf-8"></script>
    <script src="lib/editor/wysiwyg.table.js" charset="utf-8"></script>
    <script type="text/javascript" src="lib/player/jquery-jplayer/jquery.jplayer.js"></script>
    <script type="text/javascript" src="lib/player/ttw-video-player-min.js"></script>
    <script src="lib/jquery.tipTip.minified.js"></script>
    <script src="lib/forms.js"></script>
    <script src="lib/chosen.jquery.min.js"></script>
    <script src="lib/autoresize.jquery.min.js"></script>
    <script type="text/javascript" src="lib/colorpicker.js"></script>
	<script type="text/javascript" src="lib/validation.js"></script>
    <script src="lib/jquery.dataTables.min.js"></script>
    <script src="lib/jquery.jgrowl_minimized.js"></script>
    <script src="lib/jquery.alerts.js" type="text/javascript"></script>
    <script src="lib/slidernav-min.js"></script>
    <script src="lib/formToWizard.js"></script>
	{literal}
	<script>$(document).ready(function(){ $("#SignupForm").formToWizard({ submitButton: 'SaveAccount' }) });</script>
	<script type=text/javascript>
	var win= null;
	function NewWindow(mypage,myname,w,h,scroll){
	var winl = (screen.width-w)/2;
	var wint = (screen.height-h)/2;
	var settings ='height='+h+',';
	settings +='width='+w+',';
	settings +='top='+wint+',';
	settings +='left='+winl+',';
	settings +='scrollbars='+scroll+',';
	settings +='resizable=yes';
	win=window.open(mypage,myname,settings);
	if(parseInt(navigator.appVersion) >= 4){win.window.focus();}
	}

	function MM_openBrWindow(theURL,winName,features) {
	window.open(theURL,winName,features);
	}
	</script>
    {/literal}
    
    <script type="text/javascript" src="lib/functions.js"></script>
    
</head>
<body>
 
  
  <section id="middle">
       
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="{$adminurl}/dashboard.php">{$site_name} Admin Panel</a> &rsaquo; Advertising &rsaquo; Site Map</div> 
        </div>

		{if $message ne ""}
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert green hideit"><p><span class="green-icon"></span>{$message}</p></div>
           </div> 
		<!--Alerts end-->
		{/if}
		{if $error ne ""}
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert red hideit"><p><span class="red-icon"></span>{$error}</p></div>
           </div> 
		<!--Alerts end-->
		{/if}
<br>
<br>
	Your sitemap link is : <a href="{$baseurl}/sitemap/sitemap.xml" target="_blank">{$baseurl}/sitemap/sitemap.xml</a>	   


           
	</section><!-- #middle-->

  
  <div class="clear"></div>
</body>
</html>