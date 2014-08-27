<?php /* Smarty version Smarty-3.1.16, created on 2014-03-26 11:01:53
         compiled from "/var/www/html/bongxoay/themes/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188792972253104437222966-41071097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95243ce60519674316862dfc09e5250630b1a3bb' => 
    array (
      0 => '/var/www/html/bongxoay/themes/view.tpl',
      1 => 1395800258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188792972253104437222966-41071097',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53104437700bf8_88319161',
  'variables' => 
  array (
    'p' => 0,
    'nsfw_hide' => 0,
    'prev' => 0,
    'baseurl' => 0,
    'postfolder' => 0,
    'prevstory' => 0,
    'next' => 0,
    'nextstory' => 0,
    'lang154' => 0,
    'lang155' => 0,
    'eurl' => 0,
    'lang156' => 0,
    'short_urls' => 0,
    'tto' => 1,
    'SEO' => 0,
    'lang286' => 0,
    'cname' => 0,
    'channels' => 0,
    'lang269' => 0,
    'lang289' => 0,
    'owner' => 0,
    'lang147' => 0,
    'lang145' => 0,
    'purl' => 0,
    'youtube' => 1,
    'fod' => 1,
    'dai' => 1,
    'vfy' => 1,
    'vmo' => 1,
    'lang143' => 0,
    'displaywm' => 0,
    'lang146' => 0,
    'lang141' => 0,
    'recommended' => 0,
    'r' => 0,
    'truncate' => 0,
    'NSFWADS' => 0,
    'video' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53104437700bf8_88319161')) {function content_53104437700bf8_88319161($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/bongxoay/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_math')) include '/var/www/html/bongxoay/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/bongxoay/smarty/libs/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['p']->value['nsfw']=="1"&&$_smarty_tpl->tpl_vars['nsfw_hide']->value=="1") {?>
	<div>
        <div class="post-next-prev">
            <?php if ($_smarty_tpl->tpl_vars['prev']->value!='') {?>
            <a id="prev_post" class="prev-post" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['prev']->value;?>
/<?php echo makeseo($_smarty_tpl->tpl_vars['prevstory']->value);?>
.html"></a>
            <?php } else { ?>
            <a id="prev_post" class="prev-post" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/random"></a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['next']->value!='') {?>
            <a id="next_post" class="next-post" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
/<?php echo makeseo($_smarty_tpl->tpl_vars['nextstory']->value);?>
.html"></a>
            <?php } else { ?>
            <a id="next_post" class="next-post" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/random"></a>
            <?php }?>
        </div>
    </div>
    <div id="main" class="middle">
        <div id="content-holder">
            <div id="content-holder">
                <div id="content" class="nsfw">
                    <div class="content">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/nsfw.jpg" alt="NSFW" />
                    </div>
                    <div class="info">
                        <h1><?php echo $_smarty_tpl->tpl_vars['lang154']->value;?>
</h1>
                        <p><?php echo $_smarty_tpl->tpl_vars['lang155']->value;?>
</p>
                        <div class="message-box alt">
                            <div class="inline-message">
                            	<p><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/safe?m=<?php echo $_smarty_tpl->tpl_vars['eurl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang156']->value;?>
 &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="footer" class="middle">
<?php } else { ?>
    <div id="main">
        <div id="content-holder">
            <div id="post-control-bar" class="spread-bar-wrap">
                <!--<div class="like-bar" style="padding: 10px 0px 0px 25px;">
                <?php $_smarty_tpl->assign('tto' , insert_get_short_url (array('value' => 'a', 'PID' => $_smarty_tpl->tpl_vars['p']->value['PID'], 'short' => $_smarty_tpl->tpl_vars['p']->value['short']),$_smarty_tpl), true);?>
                <?php if ($_smarty_tpl->tpl_vars['short_urls']->value=="1") {?>
                <div class="google-btn"><g:plusone size="medium" href="<?php echo $_smarty_tpl->tpl_vars['tto']->value;?>
"></g:plusone> </div>
                <?php } else { ?>
                <div class="google-btn"><g:plusone size="medium" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['p']->value['story']);?>
.html<?php }?>"></g:plusone> </div>
                <?php }?>
              </div>-->
            <!-- <div class="spread-bar" style="width: 600px">
                	<div class="facebook-btn" style="color:red; font-weight:bold; font-size:120%; line-height:150%;">
                   	 <?php echo $_smarty_tpl->tpl_vars['lang286']->value;?>

                    </div>
                        <div class="facebook-btn">
                    &lt;!&ndash;<fb:like href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['p']->value['story']);?>
.html<?php }?>?ref=fb" send="false" layout="button_count" width="90px" show_faces="false" font="" label="Post"></fb:like> </div>&ndash;&gt;

                    <?php $_smarty_tpl->assign('tto' , insert_get_short_url (array('value' => 'a', 'PID' => $_smarty_tpl->tpl_vars['p']->value['PID'], 'short' => $_smarty_tpl->tpl_vars['p']->value['short']),$_smarty_tpl), true);?>
                    <?php if ($_smarty_tpl->tpl_vars['short_urls']->value=="1") {?>
                    <div class="google-btn"><g:plusone size="medium" href="<?php echo $_smarty_tpl->tpl_vars['tto']->value;?>
"></g:plusone> </div>
                    <?php } else { ?>
                    <div class="google-btn"><g:plusone size="medium" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['p']->value['story']);?>
.html<?php }?>"></g:plusone> </div>
                    <?php }?>

                </div>-->

            </div>
            <div id="content">
                <?php if ($_smarty_tpl->tpl_vars['p']->value['contents']!='') {?>
                <h1 style="margin:5px 0px 0px 30px">
                    <?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['title']);?>

                </h1>
                <p style="margin-left: 30px">
                    Đăng bởi: <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/user/<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['username']);?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['username']);?>
</a>
                    <span class="seperator">|</span>
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['p']->value['time_added']);?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['p']->value['time_added'],"%I:%M %p");?>

                    <?php if ($_smarty_tpl->tpl_vars['cname']->value!=''&&$_smarty_tpl->tpl_vars['channels']->value=="1") {?>
                    <span class="seperator">|</span>
                    <?php echo $_smarty_tpl->tpl_vars['lang269']->value;?>
 : <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/channels/<?php echo makeseo($_smarty_tpl->tpl_vars['cname']->value);?>
/"><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
</a>
                    <?php }?>
                    <span class="seperator">|</span>
                    <span>Lượt xem: <?php echo $_smarty_tpl->tpl_vars['p']->value['postviewed'];?>
</span>
                    <!-- <span class="comment"><fb:comments-count href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['p']->value['story']);?>
.html<?php }?>"></fb:comments-count> <?php echo $_smarty_tpl->tpl_vars['lang289']->value;?>
</span>-->

                    <?php if ($_smarty_tpl->tpl_vars['owner']->value=="1") {?>
                    <span class="seperator">|</span>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/deletepost.php?pid=<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
" class="delete" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['lang147']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['lang145']->value;?>
</a>
                    <?php }?>
                </p>
                <?php }?>
                <div class="post-container">
                    <div class="img-wrap">
                        <?php if ($_smarty_tpl->tpl_vars['p']->value['pic']!=''&&$_smarty_tpl->tpl_vars['p']->value['status_che']=="0"&&$_smarty_tpl->tpl_vars['p']->value['contents']=='') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/random"><img src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t/l-<?php echo $_smarty_tpl->tpl_vars['p']->value['pic'];?>
" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['story']);?>
"/></a>
                        <?php } elseif ($_smarty_tpl->tpl_vars['p']->value['status_che']=="1") {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/random"><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/meme/c/<?php echo $_smarty_tpl->tpl_vars['p']->value['pic'];?>
" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['story']);?>
"/>
                        </a>
                        <?php } else { ?>
                        	<?php if ($_smarty_tpl->tpl_vars['p']->value['youtube_key']!='') {?>
                           <!-- <center>
                            <?php $_smarty_tpl->assign('youtube' , insert_return_youtube (array('value' => 'a', 'youtube' => $_smarty_tpl->tpl_vars['p']->value['youtube_key']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->tpl_vars['youtube']->value;?>

                            </center>-->
                        <center>
                            <script src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js" type="text/javascript"></script>
                            
                            <script type="text/javascript">/* <![CDATA[ */
                            var repeat = 1;
                            var vid_id = '<?php echo $_smarty_tpl->tpl_vars['p']->value['youtube_key'];?>
';
                            /* ]]> */</script>
                            
                            <div>
                                <iframe width="680" height="410" frameborder="0" allowfullscreen="" src="http://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['p']->value['youtube_key'];?>
?feature=oembed&autoplay=1&wmode=transparent&rel=0&showinfo=0&modestbranding=1&version=3&ps=docs&nologo=1&theme=light&color=white&iv_load_policy=0&cc_load_policy=1">
                                </iframe>
                            </div>
                        </center>
                            <?php } elseif ($_smarty_tpl->tpl_vars['p']->value['fod_key']!='') {?>
                            <center>
                            <?php $_smarty_tpl->assign('fod' , insert_return_fod (array('value' => 'a', 'fod' => $_smarty_tpl->tpl_vars['p']->value['fod_key']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->tpl_vars['fod']->value;?>

                            </center>
                        <?php } elseif ($_smarty_tpl->tpl_vars['p']->value['dai_key']!='') {?>
                        <center>
                            <?php $_smarty_tpl->assign('dai' , insert_return_dai (array('value' => 'a', 'dai' => $_smarty_tpl->tpl_vars['p']->value['dai_key']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->tpl_vars['dai']->value;?>

                        </center>

							<?php } elseif ($_smarty_tpl->tpl_vars['p']->value['vfy_key']!='') {?>
                            <center>
                            <?php $_smarty_tpl->assign('vfy' , insert_return_vfy (array('value' => 'a', 'vfy' => $_smarty_tpl->tpl_vars['p']->value['vfy_key']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->tpl_vars['vfy']->value;?>

                            </center>
							<?php } elseif ($_smarty_tpl->tpl_vars['p']->value['vmo_key']!='') {?>
                            <center>
                            <?php $_smarty_tpl->assign('vmo' , insert_return_vmo (array('value' => 'a', 'vmo' => $_smarty_tpl->tpl_vars['p']->value['vmo_key']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->tpl_vars['vmo']->value;?>

                            </center>
                            <?php } elseif ($_smarty_tpl->tpl_vars['p']->value['contents']!='') {?>
                            <div style="padding: 0px 30px 10px 30px ;font-size: 16px;">
                                <?php echo strip_mq_gpc($_smarty_tpl->tpl_vars['p']->value['contents']);?>

                            </div>
							<?php } else { ?>
							<center>
							<?php echo $_smarty_tpl->tpl_vars['lang143']->value;?>

							</center>
                            <?php }?>
                        <?php }?>
                    </div>
                </div>
				<?php if ($_smarty_tpl->tpl_vars['displaywm']->value=="0"&&$_smarty_tpl->tpl_vars['p']->value['pic']!=''&&$_smarty_tpl->tpl_vars['p']->value['gif']!="1") {?>
				<div class="watermark-clear"></div>
				<?php }?>
                <div style="border-radius: 4px;padding: 0px 0px 0px 26px">
                        <div class="post-info-pad">
                        <?php if ($_smarty_tpl->tpl_vars['p']->value['contents']=='') {?>
                            <h1>
                            <?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['title']);?>

                            </h1>
                            <p>
                                Đăng bởi: <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/user/<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['username']);?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['username']);?>
</a>
                                <span class="seperator">|</span>
                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['p']->value['time_added']);?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['p']->value['time_added'],"%I:%M %p");?>

                                <?php if ($_smarty_tpl->tpl_vars['cname']->value!=''&&$_smarty_tpl->tpl_vars['channels']->value=="1") {?>
                                <span class="seperator">|</span>
                                <?php echo $_smarty_tpl->tpl_vars['lang269']->value;?>
 : <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/channels/<?php echo makeseo($_smarty_tpl->tpl_vars['cname']->value);?>
/"><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
</a>
                                <?php }?>
                                <span class="seperator">|</span>
                                <span>Lượt xem: <?php echo $_smarty_tpl->tpl_vars['p']->value['postviewed'];?>
</span>
                                <!-- <span class="comment"><fb:comments-count href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['p']->value['story']);?>
.html<?php }?>"></fb:comments-count> <?php echo $_smarty_tpl->tpl_vars['lang289']->value;?>
</span>-->

                                <?php if ($_smarty_tpl->tpl_vars['owner']->value=="1") {?>
                                <span class="seperator">|</span>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/deletepost.php?pid=<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
" class="delete" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['lang147']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['lang145']->value;?>
</a>
                                <?php }?>
                            <div class="post-next-prev">
                                <?php if ($_smarty_tpl->tpl_vars['prev']->value!='') {?>
                                <a id="prev_post" class="" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['prev']->value;?>
/<?php echo makeseo($_smarty_tpl->tpl_vars['prevstory']->value);?>
.html" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Previous', 1]);">Ảnh trước |</a>
                                <?php } else { ?>
                                <a id="prev_post" class="" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/random" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Previous', 1]);">Ảnh trước |</a>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['next']->value!='') {?>
                                <a id="next_post" class="" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
/<?php echo makeseo($_smarty_tpl->tpl_vars['nextstory']->value);?>
.html" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Next', 1]);">Ảnh sau</a>
                                <?php } else { ?>
                                <a id="next_post" class="" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/random" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Next', 1]);">Ảnh sau</a>
                                <?php }?>
                            </div>
                            </p>
                        <?php }?>


                    </div>
                    <div style="font-weight: bold;font-size: 12px;margin: 2px 10px 0px 0px;float: left">Bạn thích bài này: </div><div style="margin-right: 20px" class="fb-like" data-href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['p']->value['story']);?>
.html<?php }?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                </div>
               <div class="comment-section" <?php if ($_smarty_tpl->tpl_vars['displaywm']->value=="0"&&$_smarty_tpl->tpl_vars['p']->value['pic']!='') {?>style="margin-top:-70px;"<?php }?>>
                    <h3 class="title" id="comments"><?php echo $_smarty_tpl->tpl_vars['lang143']->value;?>
</h3>
                    <span class="report-and-source">
                    <p>
                        <?php if ($_smarty_tpl->tpl_vars['owner']->value!="1") {?><span id="report-item-separator">|</span><a id="report-item-link" class="report report-item" entryId="<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
" href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['lang146']->value;?>
</a><?php }?>
                        <span id="report-item-separator">|</span><?php if ($_smarty_tpl->tpl_vars['p']->value['source']=='') {?><?php echo $_smarty_tpl->tpl_vars['lang141']->value;?>
<?php } else { ?><?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['source']);?>
<?php }?>
                    </p>
                    </span>
                    <div style="margin-left:10px">
                    	<fb:comments href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['p']->value['story']);?>
.html<?php }?>" num_posts="10" width="700"></fb:comments>
                    </div>
                    <div id="fb-root"></div>
                </div>
            	<br/>
            <?php if ($_smarty_tpl->tpl_vars['recommended']->value=="1") {?>
                <div class="post-may-like">
                    <div id="entries-content" class="grid">
                    	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['r']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                        <ul id="grid-col-<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']>3) {?>2<?php } else { ?>1<?php }?>" class="col-<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']>3) {?><?php echo smarty_function_math(array('equation'=>"x - 3",'x'=>$_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'];?>
<?php }?>">
                            <li class=" ">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['r']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php echo makeseo($_smarty_tpl->tpl_vars['r']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html" class="jump_stop">
                                    <div style="" class="thimage">
                                        <?php if ($_smarty_tpl->tpl_vars['r']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['nsfw']=="1"&&$_SESSION['FILTER']!="0") {?><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/nsfw_thumb.jpg" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['r']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t/s-<?php echo $_smarty_tpl->tpl_vars['r']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pic'];?>
" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['r']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
" /><?php }?>
                                    </div>
                                </a>
                                <h1><?php if ($_smarty_tpl->tpl_vars['truncate']->value=="1") {?><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['r']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']),20,"...",true);?>
<?php } else { ?><?php echo stripslashes($_smarty_tpl->tpl_vars['r']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
<?php }?></h1>
                                <h4><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/user/<?php echo stripslashes($_smarty_tpl->tpl_vars['r']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
"><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['r']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']),20,"...",true);?>
</a></h4>
                            </li>
                        </ul>
                        <?php endfor; endif; ?>
                    </div>
                </div>
			<?php }?>
            </div>
        </div>
		<div id="main-bottom-ad-tray" style="margin-top:20px;">
			<div>
				<?php if ($_SESSION['FILTER']=="0"&&$_smarty_tpl->tpl_vars['NSFWADS']->value) {?>
				<?php echo insert_get_advertisement(array('AID' => 6),$_smarty_tpl);?>

				<?php } else { ?>
				<?php echo insert_get_advertisement(array('AID' => 3),$_smarty_tpl);?>

				<?php }?>
                <!--<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
"><img width="721" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/banner/trandau.gif"></a>-->
			</div>
		</div>
        <div class="video_lienquan">
            <div class="title_video">
                <a href="#">Video mới nhất</a>
            </div>
            <div class="content_lienquan">
                    <ul>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['f'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['f']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['name'] = 'f';
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['video']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['video']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['video']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['story']);?>
.html<?php }?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                                    <img src="http://img.youtube.com/vi/<?php echo $_smarty_tpl->tpl_vars['video']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['youtube_key'];?>
/1.jpg" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['video']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['story']);?>
" /></a>
                                <div class="title_lq">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['video']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['video']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['story']);?>
.html<?php }?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                                    <span><?php if ($_smarty_tpl->tpl_vars['truncate']->value=="1") {?><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['video']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['story']),20,"...",true);?>
<?php } else { ?><?php echo stripslashes($_smarty_tpl->tpl_vars['video']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['story']);?>
<?php }?></span>
                                </a>
                                </div>
                                <br>
                                <span style="color:#999999;font-size: 11px ;font-weight: normal"><?php echo insert_get_time_to_days_ago(array('time' => $_smarty_tpl->tpl_vars['video']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time_added']),$_smarty_tpl);?>
</span> |
                                <span style="color:#999999;font-size: 11px ;font-weight: normal"><?php echo $_smarty_tpl->tpl_vars['video']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['postviewed'];?>
 lượt xem</span>
                                <!--124 Views | 333 likes-->
                            </li>
                        <?php endfor; endif; ?>
                    </ul>
            </div>
        </div>
</div>


    <?php echo $_smarty_tpl->getSubTemplate ('right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!--<?php echo $_smarty_tpl->getSubTemplate ('js_movingboxs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
-->
	<?php echo $_smarty_tpl->getSubTemplate ('js_view2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="footer" class="">
<?php }?><?php }} ?>
