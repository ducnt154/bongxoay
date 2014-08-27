<?php /* Smarty version Smarty-3.1.16, created on 2014-03-26 11:01:35
         compiled from "/var/www/html/bongxoay/themes/posts_bit_hot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1271084570531044301f07f9-78601549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcf26aae28794f9d45059810184827fcc7429cfc' => 
    array (
      0 => '/var/www/html/bongxoay/themes/posts_bit_hot.tpl',
      1 => 1395800257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1271084570531044301f07f9-78601549',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531044305b56f2_20631900',
  'variables' => 
  array (
    'loadmore' => 0,
    'enable_fc' => 0,
    'FACEBOOK_APP_ID' => 0,
    'posts' => 0,
    'baseurl' => 0,
    'postfolder' => 0,
    'SEO' => 0,
    'purl' => 0,
    'youtube' => 1,
    'fod' => 1,
    'dai' => 1,
    'vfy' => 1,
    'vmo' => 1,
    'lang264' => 0,
    'displaywm' => 0,
    'lang287' => 0,
    'lang290' => 0,
    'truncate' => 0,
    'lang289' => 0,
    'share1' => 0,
    'share2' => 0,
    'lang146' => 0,
    'json' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531044305b56f2_20631900')) {function content_531044305b56f2_20631900($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/bongxoay/smarty/libs/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['loadmore']->value=="1") {?>
	<div id="fb-root"></div>
	<script src="http://connect.facebook.net/<?php if ($_SESSION['language']=="ar") {?>ar_AR<?php } else { ?>en_US<?php }?>/all.js"></script>
	<?php if ($_smarty_tpl->tpl_vars['enable_fc']->value=="1") {?>
		
			<script>
			  FB.init({appId: '<?php echo $_smarty_tpl->tpl_vars['FACEBOOK_APP_ID']->value;?>
', status: true,cookie: true, xfbml: true});
			</script>
		
	<?php }?>
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src='http://static.ak.fbcdn.net/connect.php/js/FB.Share' type='text/javascript'></script>
<?php }?>


<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['posts']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					<li class=" gag-link" data-url="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>" data-text="<?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']),20,"...",true);?>
" gagId="<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
" itemType="list" id="entry-<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
">
                        <div class="content">
                            <div class="img-wrap">
                                <?php if ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['nsfw']=="1"&&$_SESSION['FILTER']!="0") {?>
                                	<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/nsfw.jpg" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
" /></a>
                                <?php } else { ?>
                                	<?php if ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pic']!='') {?>
                                		<?php if ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pic']!=''&&$_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gif']=="1") {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t/<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
.jpg" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
" width="400" /><span class="play">Play</span>
                                            </a>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status_che']=="1") {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/meme/c/<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pic'];?>
" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
" width="400" />
                                            </a>
                                        <?php } else { ?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t/<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pic'];?>
" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
" /></a>
                                        <?php }?>
                                        <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['youtube_key']!='') {?>
                                       <!--<center>
                                        <a target="_blank"><?php $_smarty_tpl->assign('youtube' , insert_return_youtube2 (array('value' => 'a', 'youtube' => $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['youtube_key']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->tpl_vars['youtube']->value;?>
</a>
                                        </center>-->
                                       <center style="height:350px">
                                            <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>">
                                            <img style="max-width:460px" src="http://img.youtube.com/vi/<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['youtube_key'];?>
/0.jpg" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
" />
                                            <img style="position:relative;top:-224px;height: 87px" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/play.png"></img></a>
                                        </center>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['fod_key']!='') {?>
                                        <center>
                                        <?php $_smarty_tpl->assign('fod' , insert_return_fod2 (array('value' => 'a', 'fod' => $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['fod_key']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->tpl_vars['fod']->value;?>

                                        </center>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dai_key']!='') {?>
                                        <center>
                                            <?php $_smarty_tpl->assign('dai' , insert_return_dai2 (array('value' => 'a', 'dai' => $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dai_key']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->tpl_vars['dai']->value;?>

                                        </center>

										<?php } elseif ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['vfy_key']!='') {?>
										<center><?php $_smarty_tpl->assign('vfy' , insert_return_vfy2 (array('value' => 'a', 'vfy' => $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['vfy_key']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->tpl_vars['vfy']->value;?>
</center>
										<?php } elseif ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['vmo_key']!='') {?>
										<center><?php $_smarty_tpl->assign('vmo' , insert_return_vmo2 (array('value' => 'a', 'vmo' => $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['vmo_key']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->tpl_vars['vmo']->value;?>
</center>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['contents']!='') {?>
                                        <center style="width:460px; overflow: hidden;margin-top: -11px">
                                            <?php echo strip_mq_gpc($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['contents']);?>

                                        </center>
                                        <?php } else { ?>
										<center><?php echo $_smarty_tpl->tpl_vars['lang264']->value;?>
</center>
                                        <?php }?>
                                    <?php }?>
                                <?php }?>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['displaywm']->value=="0"&&$_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pic']!=''&&$_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gif']!="1") {?>
							<div class="watermark-clear"></div>
							<?php }?>
                        </div>
                        <div style="position:relative;width:220px;float:right">
                            <div class="info b9gcs-stop" id="action-<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
" >
                                <h1><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>" class="jump_focus" target="_blank">
                                <?php if ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pic']!=''&&$_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gif']=="1") {?>
                                     <?php echo $_smarty_tpl->tpl_vars['lang287']->value;?>

                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['contents']!='') {?>
                                    <?php echo $_smarty_tpl->tpl_vars['lang290']->value;?>

                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['truncate']->value=="1") {?><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title']),20,"...",true);?>
<?php } else { ?><?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title']);?>
<?php }?></a></h1>
                                <h4>
                                    <span style="color: #999999; float: left;">Đăng bởi: <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/user/<?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
</a></span>
                                    <p><?php echo insert_get_time_to_days_ago(array('time' => $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time_added']),$_smarty_tpl);?>
</p>
                                </h4>
                                <p>

                                    <span>
                                    <!--<fb:comments-count href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>"></fb:comments-count> <?php echo $_smarty_tpl->tpl_vars['lang289']->value;?>
-->
                                    <?php $_smarty_tpl->assign('fcount' , insert_get_fav_count (array('value' => 'var', 'PID' => $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']),$_smarty_tpl), true);?>
									<a title="Lượt xem"><span class="viewed">Lượt xem: <?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['postviewed'];?>
</span></a> |
                                        Chuyên mục: <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/channels/<?php echo makeseo($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cname']);?>
"" title="<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cname'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cname'];?>
</span></a>
                                    </span>

                                </p>

                                <!--<div class="sharing-box ">
                                    <hr class="arrow" />
                                    <ul class="sharing ">
                                        <li class="facebook" id="share1-<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
">
                                        	<div id="list-share-1-<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
" style="width:90px;overflow:hidden;float:<?php if ($_SESSION['language']=="ar") {?>left<?php } else { ?>right<?php }?>;">
												<?php if ($_smarty_tpl->tpl_vars['share1']->value==1) {?>
												&lt;!&ndash; remove g+
                                                <g:plusone size="medium" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>"></g:plusone>
                                                &ndash;&gt;

												<?php } elseif ($_smarty_tpl->tpl_vars['share1']->value==2) {?>
													<fb:share-button type="button_count" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>"></fb:share-button>
												<?php } else { ?>
													<fb:like href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>?ref=fb" send="false" layout="button_count" width="90px" show_faces="false" font="" label="Post"></fb:like>
												<?php }?>
                                            </div>
											<div id="list-share-2-<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
" style="width:110px;overflow:hidden;">
												<?php if ($_smarty_tpl->tpl_vars['share2']->value==1) {?>
                                                	&lt;!&ndash; remove g+
													<g:plusone size="medium" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>"></g:plusone>
                                                    &ndash;&gt;

												<?php } elseif ($_smarty_tpl->tpl_vars['share2']->value==2) {?>
													<fb:share-button type="button_count" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>"></fb:share-button>
												<?php } else { ?>
													<fb:like href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>?ref=fb" send="false" layout="button_count" width="90px" show_faces="false" font="" label="Post"></fb:like>
												<?php }?>
											<div>
                                        </li>
                                    </ul>
                                </div>-->
                                <div class="sharing-box ">
                                    <div class="fb-like" data-href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                                </div>

                            <div class="tags">
                                	<span>
                                		<?php echo tagsexplode($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['tags']);?>

                                	</span>
                            </div>
                            <div class="baovipham">
                                <a style="margin-top: 20px" class="report" entryId="<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
" href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['lang146']->value;?>
</a>
                            </div>
                            <div class="cat_cungloai">
                                <ul>
                                    <li>

                                    </li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </li>

        <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']==3&&$_smarty_tpl->tpl_vars['json']->value!="1") {?>
			<li style="padding:10px">
				<div id='div-gpt-ad-1365732552334-0'>
					<?php echo insert_get_advertisement(array('AID' => 7),$_smarty_tpl);?>

				</div>
			</li>
		<?php }?>
    <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']==15&&$_smarty_tpl->tpl_vars['json']->value!="1") {?>
        <li style="padding:10px">
            <div id='div-gpt-ad-1365732552334-0'>
                <?php echo insert_get_advertisement(array('AID' => 9),$_smarty_tpl);?>

            </div>
        </li>
    <?php }?>
    <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']==8&&$_smarty_tpl->tpl_vars['json']->value!="1") {?>
    <li style="padding:10px">
        <div id='div-gpt-ad-1365732552334-0'>
            <?php echo insert_get_advertisement(array('AID' => 10),$_smarty_tpl);?>

        </div>
    </li>
    <?php }?>
<?php endfor; endif; ?>
<?php if ($_smarty_tpl->tpl_vars['loadmore']->value=="1") {?>
<?php echo $_smarty_tpl->getSubTemplate ('js_vote.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=455350294564519";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php }} ?>
