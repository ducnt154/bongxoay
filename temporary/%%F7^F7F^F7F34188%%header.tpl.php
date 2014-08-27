<?php /* Smarty version 2.6.6, created on 2014-08-26 23:45:30
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'makeseo', 'header.tpl', 153, false),array('modifier', 'stripslashes', 'header.tpl', 245, false),array('modifier', 'is_array', 'header.tpl', 285, false),array('insert', 'get_member_profilepicture', 'header.tpl', 244, false),)), $this); ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" onkeypress="keyfind(event)" lang="<?php echo $this->_tpl_vars['lang254']; ?>
" dir="<?php echo $this->_tpl_vars['lang255']; ?>
">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<title><?php if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name']; ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?php if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  if ($this->_tpl_vars['metadescription'] != ""):  echo $this->_tpl_vars['metadescription']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name']; ?>
">
<meta name="keywords" content="<?php if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
,<?php endif;  if ($this->_tpl_vars['metakeywords'] != ""):  echo $this->_tpl_vars['metakeywords']; ?>
,<?php endif;  echo $this->_tpl_vars['site_name']; ?>
">
<meta name="title" content="<?php if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name']; ?>
" />
<?php if ($this->_tpl_vars['p']['gif'] == 1): ?>
<meta property="og:title" content="<?php if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['lang287']; ?>
 <?php echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name']; ?>
"/>
<?php else: ?>
<meta property="og:title" content="<?php if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name']; ?>
"/>
<?php endif; ?>

<meta property="og:site_name" content="<?php echo $this->_tpl_vars['site_name']; ?>
"/>
<?php if ($this->_tpl_vars['p']['PID'] != ""): ?>
	<meta property="og:url" content="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
/"/>
	<?php if ($this->_tpl_vars['p']['pic'] != ""): ?>
    	<?php if ($this->_tpl_vars['p']['gif'] == '1'): ?>
            <meta property="og:image" content="<?php echo $this->_tpl_vars['purl']; ?>
/t/<?php echo $this->_tpl_vars['p']['PID']; ?>
.jpg" />
        <?php else: ?>
        	<meta property="og:image" content="<?php echo $this->_tpl_vars['purl']; ?>
/t/l-<?php echo $this->_tpl_vars['p']['pic']; ?>
" />
        <?php endif; ?>

	<?php elseif ($this->_tpl_vars['p']['youtube_key'] != ""): ?>
		<meta property="og:image" content="http://img.youtube.com/vi/<?php echo $this->_tpl_vars['p']['youtube_key']; ?>
/0.jpg" />
	<?php elseif ($this->_tpl_vars['p']['fod_key'] != ""): ?>
		<meta property="og:image" content="http://www.funnyordie.com/media/<?php echo $this->_tpl_vars['p']['fod_key']; ?>
/thumbnail/large.jpg" />
	<?php else: ?>
		<meta property="og:image" content="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/9gag-logo-large.png" />
	<?php endif;  else: ?>
	<meta property="og:url" content="<?php echo $this->_tpl_vars['baseurl']; ?>
/"/>
	<meta property="og:image" content="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/9gag-logo-large.png" />
<?php endif; ?>

<meta property="og:description" content="Nhấn vào để xem ảnh hài bóng đá và tham gia chém gió với bongxoay.vn" />
<meta property="og:type" content="article" />
<meta property="fb:app_id" content="<?php echo $this->_tpl_vars['FACEBOOK_APP_ID']; ?>
"/>
<meta property="fb:admins" content="<?php echo $this->_tpl_vars['FACEBOOK_ADMIN']; ?>
"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link href="<?php echo $this->_tpl_vars['baseurl']; ?>
/css/style_<?php echo $this->_tpl_vars['lang255']; ?>
.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo $this->_tpl_vars['baseurl']; ?>
/slide/jquery.bxslider.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="icon" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/icon.png" />
<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/icon.png" />
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/jquery.min.js"></script>

<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/jquery.scrollTo-1.4.2-min.js"></script>

<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/slide/jquery.bxslider.min.js"></script>

    <script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/embeddable.js"></script>

<!--    <script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/moo-clientcide-1.3.js"></script>-->


 <!--   <script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/likeme.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/jquery.cookie.js"></script>-->



<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js"></script>-->
    <?php echo '
    <script type="text/javascript" >
     $(document).ready(function(){
                $(function () {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 250) {
                        $(\'#head-wrapper\').css("position","fixed").css("top","0").css("box-shadow","0 2px 4px #333");
                        }
                        else{
                            $(\'#head-wrapper\').css("position","relative").css("box-shadow","none");
                        }
                    });
                });
            });
    </script>
    '; ?>


<?php if ($this->_tpl_vars['RSS'] == '1'): ?>
<link rel="alternate" type="application/rss+xml" title="RSS For <?php echo $this->_tpl_vars['site_name']; ?>
" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/rss.php" />
<?php endif; ?>


</head>
<body id="page-landing" class="main-body ">

<div id="fb-root"></div>
<script src="http://connect.facebook.net/<?php if ($_SESSION['language'] == 'ar'): ?>ar_AR<?php else: ?>en_US<?php endif; ?>/all.js"></script>
<?php echo '
<script>
  FB.init({appId: \'';  echo $this->_tpl_vars['FACEBOOK_APP_ID'];  echo '\', status: true,cookie: true, xfbml: true});
</script>
'; ?>

<div id="tmp-img" style="display:none"></div>
<?php echo '
<script type="text/javascript">
function myWindow(location, address, gaCategory, gaAction, entryLink) { var w = 640; var h = 460; var sTop = window.screen.height/2-(h/2); var sLeft = window.screen.width/2-(w/2); var sharer = window.open(address, "Share on Facebook", "status=1,height="+h+",width="+w+",top="+sTop+",left="+sLeft+",resizable=0"); }
</script>
'; ?>

<div id="top">
<div id="logo">
<h1><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/"><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/logo.png" alt="Bóng Xoáy" /> </a></h1>
</div>
    <!--<div class="facebook-box" style="display: block">
                <div class="icon_face">
                    <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/menu/likevachem.png" alt="">
                    <h3>LIKE VÀ CÙNG CHÉM</h3>
                </div>
                <div class="facebook-like">
                    <div class="fb-like" data-href="http://www.facebook.com/<?php echo $this->_tpl_vars['FACEBOOK_PROFILE']; ?>
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
                    <form action="<?php echo $this->_tpl_vars['baseurl']; ?>
/search">
                        <input id="sitebar_search_header" type="text" class="search search_input" name="query" tabindex="1" placeholder="<?php echo $this->_tpl_vars['lang189']; ?>
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
                        <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/menu.png" alt="Danh mục" />
                    </a>
                    <div class="profile-menu-new-menu">
                        <ul>
                            <?php if ($this->_tpl_vars['allchannels']): ?>

                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['allchannels']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                    <?php if ($this->_tpl_vars['allchannels'][$this->_sections['i']['index']]['CID'] != 13): ?>
                                        <li style="border-bottom:#bfb8b8 1px solid;">

                                        <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/<?php echo ((is_array($_tmp=$this->_tpl_vars['allchannels'][$this->_sections['i']['index']]['cname'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
">
                                        <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/menu_bx/<?php echo $this->_tpl_vars['allchannels'][$this->_sections['i']['index']]['CID']; ?>
.png" style="margin-bottom:-7px; padding-right:5px;" />


                                        <?php if ($this->_tpl_vars['allchannels'][$this->_sections['i']['index']]['CID'] == 7): ?>
                                            <?php echo $this->_tpl_vars['date_month']; ?>
/Năm Xưa
                                        <?php else: ?>
                                            <?php echo $this->_tpl_vars['allchannels'][$this->_sections['i']['index']]['cname']; ?>

                                        <?php endif; ?>

                                        </a>
                                        </li>
                                   <?php endif; ?>
                                <?php endfor; endif; ?>

                            <?php endif; ?>
                            <li style="border-bottom:#bfb8b8 1px solid;">
                            <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/video-bong-da">
                            <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/menu_bx/9.png" style="margin-bottom:-7px; padding-right:5px;" />
                            Bóng Xoáy TV
                            </a></li>

                            <li style="border-bottom:#bfb8b8 1px solid;">
                            <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/hinh-dong">
                            <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/menu/gif.png" style="margin-bottom:-7px; padding-right:5px;" />
                            Hình động
                            </a></li>

                             <li style="border-bottom:#bfb8b8 1px solid;">
                            <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/vote">
                            <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/menu/vote.png" style="margin-bottom:-7px; padding-right:5px;" />
                            Chờ Duyệt
                            </a></li>

                             <li style="border-bottom:#bfb8b8 1px solid;">
                            <a href="http://www.facebook.com/bongxoay" target="_blank">
                            <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/menu/facebook.png" style="margin-bottom:-7px; padding-right:5px;" />
                           Facebook Bóng Xoáy
                            </a></li>

                        </ul>
                    </div>
                </li>
        </ul>
        <!--<h1><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/"><?php echo $this->_tpl_vars['site_name']; ?>
</a></h1>-->
        <ul id="nav" class="main-menu" style="overflow:visible">
            <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
" title="Trang Chủ"><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/menu/noibat.png" style="margin-bottom:-15px; padding-right:5px;" />
                    <span class="<?php if ($this->_tpl_vars['menu'] == 1): ?>current_active<?php endif; ?>">Nổi Bật</span>
                </a>
            </li>
            <?php if ($this->_tpl_vars['trendingenabled'] == '1'): ?><li><a class="<?php if ($this->_tpl_vars['menu'] == 2): ?>current<?php endif; ?>" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/trending"><?php echo $this->_tpl_vars['lang173']; ?>
</a></li><?php endif; ?>
            <?php if ($this->_tpl_vars['allchannels']): ?>
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['allchannels']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                      <?php if ($this->_tpl_vars['allchannels'][$this->_sections['i']['index']]['fav'] == 1): ?>
                    	<li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/<?php echo ((is_array($_tmp=$this->_tpl_vars['allchannels'][$this->_sections['i']['index']]['cname'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
">
                            <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/menu/<?php echo $this->_tpl_vars['allchannels'][$this->_sections['i']['index']]['CID']; ?>
.png" style="margin-bottom:-15px; padding-right:5px;" />
                            <span class="<?php if (((is_array($_tmp=$this->_tpl_vars['allchannels'][$this->_sections['i']['index']]['cname'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)) == $this->_tpl_vars['cname2']): ?>current_active<?php endif; ?>"><?php echo $this->_tpl_vars['allchannels'][$this->_sections['i']['index']]['cname']; ?>
</span>
                        </a>
                        </li>
                      <?php endif; ?>
             	<?php endfor; endif; ?>

			<?php endif; ?>
             <li><a  href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/video-bong-da"><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/menu/bongxoaytv.png" style="margin-bottom:-15px; padding-right:5px;" /><span class="<?php if ($this->_tpl_vars['cname2'] == 'video-bong-da'): ?>current_active<?php endif; ?>" style="text-decoration: none;">
                     Bóng Xoáy TV</span>
                 </a>
             </li>
             <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/vote"><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/menu/choduyet.png" style="margin-bottom:-19px; padding-right:5px;" /><span class="<?php if ($this->_tpl_vars['menu'] == 3): ?>current_active<?php endif; ?>"><?php echo $this->_tpl_vars['lang174']; ?>
</span></a></li>
            <li style="margin-right: 5px;">
                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/meme"><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/menu/cheanh.png" style="margin-bottom:-14px; padding-right:5px;" />
                    <span class="<?php if ($this->_tpl_vars['menu'] == 12): ?>current_active<?php endif; ?>">Chế ảnh</span></a>
                    <ul>
                        <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/meme">Chế meme</a></li>
                        <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/comic">Chế comic</a></li>
                    </ul>
                </a>
            </li>
			<?php if ($this->_tpl_vars['topposts'] || $this->_tpl_vars['topusers']): ?>
			<li><a class="<?php if ($this->_tpl_vars['menu'] == 4): ?>current_active<?php endif; ?>">Top</a>
				<ul>
					<?php if ($this->_tpl_vars['topusers'] == 1): ?><li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/top-users"><?php echo $this->_tpl_vars['lang260']; ?>
</a></li><?php endif; ?>
					<?php if ($this->_tpl_vars['topposts'] == 1): ?><li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/top-posts"><?php echo $this->_tpl_vars['lang278']; ?>
</a></li><?php endif; ?>
				</ul>
			</li>
			<?php endif; ?>
        </ul>
        <ul class="main-2-menu">
			<li><a class="add-post <?php if ($this->_tpl_vars['menu'] == 6): ?>current<?php endif; ?>" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/submit"><span class="add-post <?php if ($this->_tpl_vars['menu'] == 6): ?>current_active<?php endif; ?>"><?php echo $this->_tpl_vars['lang199']; ?>
</span></a></li>
            <?php if ($_SESSION['USERID'] != ""): ?>
			<li><a class="notification-count <?php if ($_SESSION['NTOTAL'] != '0'): ?>new<?php endif; ?>" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/notifications"><span id=""><?php echo $_SESSION['NTOTAL']; ?>
</span></a></li>
            <li id="jsid-header-user-menu">
				<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_member_profilepicture', 'assign' => 'profilepicture', 'value' => 'var', 'USERID' => $_SESSION['USERID'])), $this); ?>

                <a class="profile-menu-new" style="margin:5px;" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$_SESSION['USERNAME'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
">
                	<?php if ($this->_tpl_vars['profilepicture'] == ""): ?>
                    	<img src="http://graph.facebook.com/<?php echo $_SESSION['FACEBOOKID']; ?>
/picture?type=normal" width="40" height="40" alt="Profile Pic" />
                    <?php else: ?>
                    	<img src="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/thumbs/<?php echo $this->_tpl_vars['profilepicture']; ?>
" width="40" height="40" alt="Profile Pic" />
                    <?php endif; ?>
                    <span class="drop"></span>
                </a>
                <div class="profile-menu-new-menu">
                    <ul>
                        <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$_SESSION['USERNAME'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
">Bài của bạn</a></li>
                        <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/settings">Cài đặt</a></li>
                        <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/logout"><?php echo $this->_tpl_vars['lang198']; ?>
</a></li>
                    </ul>
				</div>
			</li>
            <?php else: ?>

            <li>

                <a class="add-login <?php if ($this->_tpl_vars['menu'] == 6): ?>current<?php endif; ?>" href="https://www.facebook.com/dialog/permissions.request?app_id=<?php echo $this->_tpl_vars['FACEBOOK_APP_ID']; ?>
&display=page&next=<?php echo $this->_tpl_vars['baseurl']; ?>
/&response_type=code&fbconnect=1&perms=email,user_birthday,user_about_me,publish_stream"><span class="add-login <?php if ($this->_tpl_vars['menu'] == 6): ?>current_active<?php endif; ?>"><?php echo $this->_tpl_vars['lang197']; ?>
</span></a>

            </li>

            <?php endif; ?>

            <li><a class="search-button search-toggler" href="javascript:void(0);"><strong><?php echo $this->_tpl_vars['lang189']; ?>
</strong></a></li>



        </ul>
    </div>

</div>
<?php echo '
<script type="text/javascript">
$(\'.search-button\').click(function(){$(\'#header_searchbar\').toggle(\'slow\');});
</script>
'; ?>

<div id="container">
<?php if (((is_array($_tmp=$this->_tpl_vars['topgags'])) ? $this->_run_mod_handler('is_array', true, $_tmp) : is_array($_tmp))): ?>
<div class="feature-bar-wraper">
    <div class="feature-title-left">
    </div>
    <div class="feature-title">
    NÓNG HỔI VỪA THỔI VỪA ĐỌC
        <div class="hot-menu">
          <!--  <div style="text-decoration:blink;float: left;margin-right: 5px"><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/gamebai888/choingay.gif" alt=""></div>
            <a style="margin-right: 8px"  title="Tiến lên miền nam" href="http://gamebai888.com/tien-len-mien-nam.888" target="_blank"><img height="50px" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/gamebai888/tienlenmiennam.png"/></a>&nbsp;&nbsp;
            <a style="margin-right: 8px" title="Sâm" href="http://gamebai888.com/sam.888" target="_blank"><img height="50px" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/gamebai888/sam.png" /></a>&nbsp;&nbsp;
            <a style="margin-right: 15px" title="Mậu binh" href="http://gamebai888.com/mau-binh.888" target="_blank"><img height="50px" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/gamebai888/maubinh.png" /></a>
            <a style="margin-right: 15px" title="Phỏm" href="http://gamebai888.com/phom.888" target="_blank"><img height="50px" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/gamebai888/phom.png" /></a>-->
               <div class="menu-icon">
               <!-- <a href="#">Ngôi sao</a>-->
               <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/hau-truong">Hậu trường</a> |
               <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/bong-hong">Mỹ nhân</a> |
               <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/link-sopcast">Link sopcast</a> |
               <a target="_blank" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/livescores.html">Livescore</a>
               </div>
            <div style="float:right;margin-top: -42px;margin-top: -40px\9;">
            <!--<span style="font-size: 13px;padding-left: 185px;">Chế ảnh hài bóng đá tại <a style="color: #24bbff" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/meme">BÓNG XOÁY</a></span>-->
                <a title="Phiên bản Mobile" href="http://m.bongxoay.com"><img height="32px" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/mobile_icon.png"/></a>&nbsp;&nbsp;
                <a href="http://www.facebook.com/bongxoay" target="_blank"><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/fb-nav.png" /></a>&nbsp;&nbsp;
                <a href="https://twitter.com/bongxoay" target="_blank"><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/twitter_nav.png" /></a>
                </div>
        </div>
    </div>
    <div class="feature-title-right">
    </div>
</div>
    <?php echo '
        <script type="text/javascript">
            $(document).ready(function(){
                jQuery(\'.bxslider\').bxSlider({
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
    '; ?>

<div class="feature-bar">
    <ul class="bxslider">
            <?php unset($this->_sections['f']);
$this->_sections['f']['name'] = 'f';
$this->_sections['f']['loop'] = is_array($_loop=$this->_tpl_vars['topgags']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['f']['show'] = true;
$this->_sections['f']['max'] = $this->_sections['f']['loop'];
$this->_sections['f']['step'] = 1;
$this->_sections['f']['start'] = $this->_sections['f']['step'] > 0 ? 0 : $this->_sections['f']['loop']-1;
if ($this->_sections['f']['show']) {
    $this->_sections['f']['total'] = $this->_sections['f']['loop'];
    if ($this->_sections['f']['total'] == 0)
        $this->_sections['f']['show'] = false;
} else
    $this->_sections['f']['total'] = 0;
if ($this->_sections['f']['show']):

            for ($this->_sections['f']['index'] = $this->_sections['f']['start'], $this->_sections['f']['iteration'] = 1;
                 $this->_sections['f']['iteration'] <= $this->_sections['f']['total'];
                 $this->_sections['f']['index'] += $this->_sections['f']['step'], $this->_sections['f']['iteration']++):
$this->_sections['f']['rownum'] = $this->_sections['f']['iteration'];
$this->_sections['f']['index_prev'] = $this->_sections['f']['index'] - $this->_sections['f']['step'];
$this->_sections['f']['index_next'] = $this->_sections['f']['index'] + $this->_sections['f']['step'];
$this->_sections['f']['first']      = ($this->_sections['f']['iteration'] == 1);
$this->_sections['f']['last']       = ($this->_sections['f']['iteration'] == $this->_sections['f']['total']);
?>
            <li style="height: 140px;margin-left: -21px\9;">
       <a href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['topgags'][$this->_sections['f']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['topgags'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>">
                <img src="<?php echo $this->_tpl_vars['purl']; ?>
/t/s-<?php echo $this->_tpl_vars['topgags'][$this->_sections['f']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['topgags'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
">
                <span class="title"><?php echo $this->_tpl_vars['topgags'][$this->_sections['f']['index']]['story']; ?>
</span>
                </a>
            </li>
        <?php endfor; endif; ?>
    </ul>
</div>
<?php endif;  if ($this->_tpl_vars['viewpage'] == '1'):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js_view.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  else:  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js_index.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>