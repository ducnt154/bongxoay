<?php /* Smarty version Smarty-3.1.16, created on 2014-03-26 11:01:34
         compiled from "/var/www/html/bongxoay/themes/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5941697715310442fbc61c3-54919250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5342dae00a98293bb67a07ba591410d0316d08a' => 
    array (
      0 => '/var/www/html/bongxoay/themes/header.tpl',
      1 => 1395805687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5941697715310442fbc61c3-54919250',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5310443003b985_02871369',
  'variables' => 
  array (
    'lang254' => 0,
    'lang255' => 0,
    'pagetitle' => 0,
    'site_name' => 0,
    'metadescription' => 0,
    'metakeywords' => 0,
    'p' => 0,
    'lang287' => 0,
    'baseurl' => 0,
    'postfolder' => 0,
    'purl' => 0,
    'FACEBOOK_APP_ID' => 0,
    'FACEBOOK_ADMIN' => 0,
    'RSS' => 0,
    'FACEBOOK_PROFILE' => 0,
    'lang189' => 0,
    'allchannels' => 0,
    'date_month' => 0,
    'menu' => 0,
    'trendingenabled' => 0,
    'lang173' => 0,
    'cname2' => 0,
    'lang174' => 0,
    'topposts' => 0,
    'topusers' => 0,
    'lang260' => 0,
    'lang278' => 0,
    'lang199' => 0,
    'profilepicture' => 1,
    'membersprofilepicurl' => 1,
    'lang198' => 0,
    'lang197' => 0,
    'topgags' => 0,
    'SEO' => 0,
    'viewpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5310443003b985_02871369')) {function content_5310443003b985_02871369($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" onkeypress="keyfind(event)" lang="<?php echo $_smarty_tpl->tpl_vars['lang254']->value;?>
" dir="<?php echo $_smarty_tpl->tpl_vars['lang255']->value;?>
">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<title><?php if ($_smarty_tpl->tpl_vars['pagetitle']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php }?><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['pagetitle']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php }?><?php if ($_smarty_tpl->tpl_vars['metadescription']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['metadescription']->value;?>
 - <?php }?><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
">
<meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['pagetitle']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
,<?php }?><?php if ($_smarty_tpl->tpl_vars['metakeywords']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['metakeywords']->value;?>
,<?php }?><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
">
<meta name="title" content="<?php if ($_smarty_tpl->tpl_vars['pagetitle']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php }?><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
" />
<?php if ($_smarty_tpl->tpl_vars['p']->value['gif']==1) {?>
<meta property="og:title" content="<?php if ($_smarty_tpl->tpl_vars['pagetitle']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['lang287']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php }?><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
"/>
<?php } else { ?>
<meta property="og:title" content="<?php if ($_smarty_tpl->tpl_vars['pagetitle']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php }?><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
"/>
<?php }?>

<meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
"/>
<?php if ($_smarty_tpl->tpl_vars['p']->value['PID']!='') {?>
	<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
/"/>
	<?php if ($_smarty_tpl->tpl_vars['p']->value['pic']!='') {?>
    	<?php if ($_smarty_tpl->tpl_vars['p']->value['gif']=="1") {?>
            <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t/<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
.jpg" />
        <?php } else { ?>
        	<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t/l-<?php echo $_smarty_tpl->tpl_vars['p']->value['pic'];?>
" />
        <?php }?>

	<?php } elseif ($_smarty_tpl->tpl_vars['p']->value['youtube_key']!='') {?>
		<meta property="og:image" content="http://img.youtube.com/vi/<?php echo $_smarty_tpl->tpl_vars['p']->value['youtube_key'];?>
/0.jpg" />
	<?php } elseif ($_smarty_tpl->tpl_vars['p']->value['fod_key']!='') {?>
		<meta property="og:image" content="http://www.funnyordie.com/media/<?php echo $_smarty_tpl->tpl_vars['p']->value['fod_key'];?>
/thumbnail/large.jpg" />
	<?php } else { ?>
		<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/9gag-logo-large.png" />
	<?php }?>
<?php } else { ?>
	<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/"/>
	<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/9gag-logo-large.png" />
<?php }?>

<meta property="og:description" content="Nhấn vào để xem ảnh hài bóng đá và tham gia chém gió với bongxoay.vn" />
<meta property="og:type" content="article" />
<meta property="fb:app_id" content="<?php echo $_smarty_tpl->tpl_vars['FACEBOOK_APP_ID']->value;?>
"/>
<meta property="fb:admins" content="<?php echo $_smarty_tpl->tpl_vars['FACEBOOK_ADMIN']->value;?>
"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/style_<?php echo $_smarty_tpl->tpl_vars['lang255']->value;?>
.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/slide/jquery.bxslider.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/icon.png" />
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/icon.png" />
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery.min.js"></script>

<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery.scrollTo-1.4.2-min.js"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/slide/jquery.bxslider.min.js"></script>

    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/embeddable.js"></script>

<!--    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/moo-clientcide-1.3.js"></script>-->


 <!--   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/likeme.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery.cookie.js"></script>-->



<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js"></script>-->
    
    <script type="text/javascript" >
     $(document).ready(function(){
                $(function () {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 250) {
                        $('#head-wrapper').css("position","fixed").css("top","0").css("box-shadow","0 2px 4px #333");
                        }
                        else{
                            $('#head-wrapper').css("position","relative").css("box-shadow","none");
                        }
                    });
                });
            });
    </script>
    

<?php if ($_smarty_tpl->tpl_vars['RSS']->value=="1") {?>
<link rel="alternate" type="application/rss+xml" title="RSS For <?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/rss.php" />
<?php }?>


</head>
<body id="page-landing" class="main-body ">

<div id="fb-root"></div>
<script src="http://connect.facebook.net/<?php if ($_SESSION['language']=="ar") {?>ar_AR<?php } else { ?>en_US<?php }?>/all.js"></script>

<script>
  FB.init({appId: '<?php echo $_smarty_tpl->tpl_vars['FACEBOOK_APP_ID']->value;?>
', status: true,cookie: true, xfbml: true});
</script>

<div id="tmp-img" style="display:none"></div>

<script type="text/javascript">
function myWindow(location, address, gaCategory, gaAction, entryLink) { var w = 640; var h = 460; var sTop = window.screen.height/2-(h/2); var sLeft = window.screen.width/2-(w/2); var sharer = window.open(address, "Share on Facebook", "status=1,height="+h+",width="+w+",top="+sTop+",left="+sLeft+",resizable=0"); }
</script>

<div id="top">
<div id="logo">
<h1><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/logo.png" alt="Bóng Xoáy" /> </a></h1>
</div>
    <!--<div class="facebook-box" style="display: block">
                <div class="icon_face">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/menu/likevachem.png" alt="">
                    <h3>LIKE VÀ CÙNG CHÉM</h3>
                </div>
                <div class="facebook-like">
                    <div class="fb-like" data-href="http://www.facebook.com/<?php echo $_smarty_tpl->tpl_vars['FACEBOOK_PROFILE']->value;?>
" data-send="false" data-width="290" data-show-faces="false" data-colorscheme="dark"></div>
                </div>
    </div>
    <div class="box_cate">

    </div>-->
</div>
<div id="searchbar_container">
        <div id="searchbar_wrapper">
            <div id="header_searchbar"  style="display:none;">
                <div id="search_wrapper">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/search">
                        <input id="sitebar_search_header" type="text" class="search search_input" name="query" tabindex="1" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang189']->value;?>
"/>
                    </form>
                </div>
            </div>
        </div>
</div>

<div id="head-wrapper" style="position:relative; box-shadow:none; top:0;">



    <div id="head-bar">

        <ul class="main-3-menu">
            <li id="jsid-header-user-menu">
                    <a class="profile-menu-new" style="background:#536da5;" href="#">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/menu.png" alt="Danh mục" />
                    </a>
                    <div class="profile-menu-new-menu">
                        <ul>
                            <?php if ($_smarty_tpl->tpl_vars['allchannels']->value) {?>

                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['allchannels']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                    <?php if ($_smarty_tpl->tpl_vars['allchannels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CID']!=13) {?>
                                        <li style="border-bottom:#bfb8b8 1px solid;">

                                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/channels/<?php echo makeseo($_smarty_tpl->tpl_vars['allchannels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cname']);?>
">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/menu_bx/<?php echo $_smarty_tpl->tpl_vars['allchannels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CID'];?>
.png" style="margin-bottom:-7px; padding-right:5px;" />


                                        <?php if ($_smarty_tpl->tpl_vars['allchannels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CID']==7) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['date_month']->value;?>
/Năm Xưa
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['allchannels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cname'];?>

                                        <?php }?>

                                        </a>
                                        </li>
                                   <?php }?>
                                <?php endfor; endif; ?>

                            <?php }?>
                            <li style="border-bottom:#bfb8b8 1px solid;">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/channels/video-bong-da">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/menu_bx/9.png" style="margin-bottom:-7px; padding-right:5px;" />
                            Bóng Xoáy TV
                            </a></li>

                            <li style="border-bottom:#bfb8b8 1px solid;">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/channels/hinh-dong">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/menu/gif.png" style="margin-bottom:-7px; padding-right:5px;" />
                            Hình động
                            </a></li>

                             <li style="border-bottom:#bfb8b8 1px solid;">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/vote">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/menu/vote.png" style="margin-bottom:-7px; padding-right:5px;" />
                            Chờ Duyệt
                            </a></li>

                             <li style="border-bottom:#bfb8b8 1px solid;">
                            <a href="http://www.facebook.com/bongxoay" target="_blank">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/menu/facebook.png" style="margin-bottom:-7px; padding-right:5px;" />
                           Facebook Bóng Xoáy
                            </a></li>

                        </ul>
                    </div>
                </li>
        </ul>
        <!--<h1><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</a></h1>-->
        <ul id="nav" class="main-menu" style="overflow:visible">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
" title="Trang Chủ"><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/menu/noibat.png" style="margin-bottom:-15px; padding-right:5px;" />
                    <span class="<?php if ($_smarty_tpl->tpl_vars['menu']->value==1) {?>current_active<?php }?>">Nổi Bật</span>
                </a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['trendingenabled']->value=="1") {?><li><a class="<?php if ($_smarty_tpl->tpl_vars['menu']->value==2) {?>current<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/trending"><?php echo $_smarty_tpl->tpl_vars['lang173']->value;?>
</a></li><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['allchannels']->value) {?>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['allchannels']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                      <?php if ($_smarty_tpl->tpl_vars['allchannels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['fav']==1) {?>
                    	<li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/channels/<?php echo makeseo($_smarty_tpl->tpl_vars['allchannels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cname']);?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/menu/<?php echo $_smarty_tpl->tpl_vars['allchannels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CID'];?>
.png" style="margin-bottom:-15px; padding-right:5px;" />
                            <span class="<?php if (makeseo($_smarty_tpl->tpl_vars['allchannels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cname'])==$_smarty_tpl->tpl_vars['cname2']->value) {?>current_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['allchannels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cname'];?>
</span>
                        </a>
                        </li>
                      <?php }?>
             	<?php endfor; endif; ?>

			<?php }?>
             <li><a  href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/channels/video-bong-da"><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/menu/bongxoaytv.png" style="margin-bottom:-15px; padding-right:5px;" /><span class="<?php if ($_smarty_tpl->tpl_vars['cname2']->value=='video-bong-da') {?>current_active<?php }?>" style="text-decoration: none;">
                     Bóng Xoáy TV</span>
                 </a>
             </li>
             <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/vote"><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/menu/choduyet.png" style="margin-bottom:-19px; padding-right:5px;" /><span class="<?php if ($_smarty_tpl->tpl_vars['menu']->value==3) {?>current_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lang174']->value;?>
</span></a></li>
            <li style="margin-right: 5px;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/meme"><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/menu/cheanh.png" style="margin-bottom:-14px; padding-right:5px;" />
                    <span class="<?php if ($_smarty_tpl->tpl_vars['menu']->value==12) {?>current_active<?php }?>">Chế ảnh</span></a>
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/meme">Chế meme</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/comic">Chế comic</a></li>
                    </ul>
                </a>
            </li>
			<?php if ($_smarty_tpl->tpl_vars['topposts']->value||$_smarty_tpl->tpl_vars['topusers']->value) {?>
			<li><a class="<?php if ($_smarty_tpl->tpl_vars['menu']->value==4) {?>current_active<?php }?>">Top</a>
				<ul>
					<?php if ($_smarty_tpl->tpl_vars['topusers']->value==1) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/top-users"><?php echo $_smarty_tpl->tpl_vars['lang260']->value;?>
</a></li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['topposts']->value==1) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/top-posts"><?php echo $_smarty_tpl->tpl_vars['lang278']->value;?>
</a></li><?php }?>
				</ul>
			</li>
			<?php }?>
        </ul>
        <ul class="main-2-menu">
			<li><a class="add-post <?php if ($_smarty_tpl->tpl_vars['menu']->value==6) {?>current<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/submit"><span class="add-post <?php if ($_smarty_tpl->tpl_vars['menu']->value==6) {?>current_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lang199']->value;?>
</span></a></li>
            <?php if ($_SESSION['USERID']!='') {?>
			<li><a class="notification-count <?php if ($_SESSION['NTOTAL']!="0") {?>new<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/notifications"><span id=""><?php echo $_SESSION['NTOTAL'];?>
</span></a></li>
            <li id="jsid-header-user-menu">
				<?php $_smarty_tpl->assign('profilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_SESSION['USERID']),$_smarty_tpl), true);?>
                <a class="profile-menu-new" style="margin:5px;" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/user/<?php echo stripslashes($_SESSION['USERNAME']);?>
">
                	<?php if ($_smarty_tpl->tpl_vars['profilepicture']->value=='') {?>
                    	<img src="http://graph.facebook.com/<?php echo $_SESSION['FACEBOOKID'];?>
/picture?type=normal" width="40" height="40" alt="Profile Pic" />
                    <?php } else { ?>
                    	<img src="<?php echo $_smarty_tpl->tpl_vars['membersprofilepicurl']->value;?>
/thumbs/<?php echo $_smarty_tpl->tpl_vars['profilepicture']->value;?>
" width="40" height="40" alt="Profile Pic" />
                    <?php }?>
                    <span class="drop"></span>
                </a>
                <div class="profile-menu-new-menu">
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/user/<?php echo stripslashes($_SESSION['USERNAME']);?>
">Bài của bạn</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/settings">Cài đặt</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/logout"><?php echo $_smarty_tpl->tpl_vars['lang198']->value;?>
</a></li>
                    </ul>
				</div>
			</li>
            <?php } else { ?>

            <li>

                <a class="add-login <?php if ($_smarty_tpl->tpl_vars['menu']->value==6) {?>current<?php }?>" href="https://www.facebook.com/dialog/permissions.request?app_id=<?php echo $_smarty_tpl->tpl_vars['FACEBOOK_APP_ID']->value;?>
&display=page&next=<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/&response_type=code&fbconnect=1&perms=email,user_birthday,user_about_me,publish_stream"><span class="add-login <?php if ($_smarty_tpl->tpl_vars['menu']->value==6) {?>current_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lang197']->value;?>
</span></a>

            </li>

            <?php }?>

            <li><a class="search-button search-toggler" href="javascript:void(0);"><strong><?php echo $_smarty_tpl->tpl_vars['lang189']->value;?>
</strong></a></li>



        </ul>
    </div>

</div>

<script type="text/javascript">
$('.search-button').click(function(){$('#header_searchbar').toggle('slow');});
</script>

<div id="container">
<?php if (is_array($_smarty_tpl->tpl_vars['topgags']->value)) {?>
<div class="feature-bar-wraper">
    <div class="feature-title-left">
    </div>
    <div class="feature-title">
    NÓNG HỔI VỪA THỔI VỪA ĐỌC
        <div class="hot-menu">
          <!--  <div style="text-decoration:blink;float: left;margin-right: 5px"><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/gamebai888/choingay.gif" alt=""></div>
            <a style="margin-right: 8px"  title="Tiến lên miền nam" href="http://gamebai888.com/tien-len-mien-nam.888" target="_blank"><img height="50px" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/gamebai888/tienlenmiennam.png"/></a>&nbsp;&nbsp;
            <a style="margin-right: 8px" title="Sâm" href="http://gamebai888.com/sam.888" target="_blank"><img height="50px" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/gamebai888/sam.png" /></a>&nbsp;&nbsp;
            <a style="margin-right: 15px" title="Mậu binh" href="http://gamebai888.com/mau-binh.888" target="_blank"><img height="50px" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/gamebai888/maubinh.png" /></a>
            <a style="margin-right: 15px" title="Phỏm" href="http://gamebai888.com/phom.888" target="_blank"><img height="50px" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/gamebai888/phom.png" /></a>-->
               <div class="menu-icon">
               <!-- <a href="#">Ngôi sao</a>-->
               <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/channels/hau-truong">Hậu trường</a> |
               <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/channels/bong-hong">Mỹ nhân</a> |
               <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/channels/link-sopcast">Link sopcast</a> |
               <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/livescores.html">Livescore</a>
               </div>
            <div style="float:right;margin-top: -42px;margin-top: -40px\9;">
            <!--<span style="font-size: 13px;padding-left: 185px;">Chế ảnh hài bóng đá tại <a style="color: #24bbff" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/meme">BÓNG XOÁY</a></span>-->
                <a title="Phiên bản Mobile" href="http://m.bongxoay.com"><img height="32px" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/mobile_icon.png"/></a>&nbsp;&nbsp;
                <a href="http://www.facebook.com/bongxoay" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/fb-nav.png" /></a>&nbsp;&nbsp;
                <a href="https://twitter.com/bongxoay" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/twitter_nav.png" /></a>
                </div>
        </div>
    </div>
    <div class="feature-title-right">
    </div>
</div>
    
        <script type="text/javascript">
            $(document).ready(function(){
                jQuery('.bxslider').bxSlider({
                    auto: true,
                    autoControls: true,
                    minSlides:5,
                    maxSlides: 5,
                    slideWidth: 190,
                    slideHeight: 190,
                    slideMargin: 12
                });
            });
        </script>
    
<div class="feature-bar">
    <ul class="bxslider">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['f'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['f']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['name'] = 'f';
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['topgags']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total']);
?>
            <li style="height: 140px;margin-left: -21px\9;">
       <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['topgags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['topgags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['story']);?>
.html<?php }?>">
                <img src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t/s-<?php echo $_smarty_tpl->tpl_vars['topgags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['pic'];?>
" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['topgags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['story']);?>
">
                <span class="title"><?php echo $_smarty_tpl->tpl_vars['topgags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['story'];?>
</span>
                </a>
            </li>
        <?php endfor; endif; ?>
    </ul>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['viewpage']->value=="1") {?>
<?php echo $_smarty_tpl->getSubTemplate ('js_view.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ('js_index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
