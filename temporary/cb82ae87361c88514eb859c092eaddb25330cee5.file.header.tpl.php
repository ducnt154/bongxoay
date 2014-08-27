<?php /* Smarty version Smarty-3.1.16, created on 2014-02-28 15:09:22
         compiled from "/var/www/html/bongxoay/themes/administrator/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1870414072531044328fedb1-99590427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb82ae87361c88514eb859c092eaddb25330cee5' => 
    array (
      0 => '/var/www/html/bongxoay/themes/administrator/header.tpl',
      1 => 1392602080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1870414072531044328fedb1-99590427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_name' => 0,
    'adminurl' => 0,
    'nextpage' => 0,
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53104432965067_67967909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53104432965067_67967909')) {function content_53104432965067_67967909($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
 Admin Panel | Dashboard</title>
	<meta name="description" content="">
	<?php if ($_SESSION['security']!='') {?>
    <meta http-equiv="refresh" content="30;url=<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/users_nl.php?security=<?php echo $_SESSION['security'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
">
	<?php }?>
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
    
    
    <script type="text/javascript" src="lib/functions.js"></script>
    
</head>
<body>

 <header>
	  <div class="centered-head">
      <!-- Logo -->
	  <h1><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
" class="logo"><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</a></h1><div style="color:#fff;padding:12px;float:left;font-size:13pt;"> - Visit <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
" style="color:#f00;"><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</a></div>
      <!-- Logo end -->
      
      <!-- Navigation -->
      <nav>             
        <ul>
            <li id="login">
                <span id="login-trigger">
                 <span id="login-triggers">
 					<span id="user-panel-check"></span>
  					<span id="user-panel-title">My Account</span>
                  </span>
                </span>
                <div id="login-content">
                  <ul>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/settings"><img src="images/setting.png" alt=""> <span>Settings</span></a></li>
                  <li><a href="logout.php"><img src="images/logout.png" alt=""><span>Log Out</span></a></li>
                  </ul>
               </div>                     
            </li> 
        </ul>
      </nav>  
      
      <div class="account-name"><p><span class="welcome">Welcome,</span> <strong><?php echo $_SESSION['ADMINUSERNAME'];?>
</strong></p><div class="account-separator"></div></div>
      <!-- Navigation end-->
     
       </div>
 </header>
<?php }} ?>
