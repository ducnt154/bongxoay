<?php /* Smarty version 2.6.6, created on 2014-08-26 23:45:30
         compiled from posts_bit_hot.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'makeseo', 'posts_bit_hot.tpl', 17, false),array('modifier', 'stripslashes', 'posts_bit_hot.tpl', 17, false),array('modifier', 'truncate', 'posts_bit_hot.tpl', 17, false),array('modifier', 'strip_mq_gpc', 'posts_bit_hot.tpl', 59, false),array('modifier', 'tagsexplode', 'posts_bit_hot.tpl', 136, false),array('insert', 'return_youtube2', 'posts_bit_hot.tpl', 36, false),array('insert', 'return_fod2', 'posts_bit_hot.tpl', 46, false),array('insert', 'return_dai2', 'posts_bit_hot.tpl', 50, false),array('insert', 'return_vfy2', 'posts_bit_hot.tpl', 54, false),array('insert', 'return_vmo2', 'posts_bit_hot.tpl', 56, false),array('insert', 'get_time_to_days_ago', 'posts_bit_hot.tpl', 85, false),array('insert', 'get_fav_count', 'posts_bit_hot.tpl', 92, false),array('insert', 'get_advertisement', 'posts_bit_hot.tpl', 156, false),)), $this); ?>
<?php if ($this->_tpl_vars['loadmore'] == '1'): ?>
	<div id="fb-root"></div>
	<script src="http://connect.facebook.net/<?php if ($_SESSION['language'] == 'ar'): ?>ar_AR<?php else: ?>en_US<?php endif; ?>/all.js"></script>
	<?php if ($this->_tpl_vars['enable_fc'] == '1'): ?>
		<?php echo '
			<script>
			  FB.init({appId: \'';  echo $this->_tpl_vars['FACEBOOK_APP_ID'];  echo '\', status: true,cookie: true, xfbml: true});
			</script>
		'; ?>

	<?php endif; ?>
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src='http://static.ak.fbcdn.net/connect.php/js/FB.Share' type='text/javascript'></script>
<?php endif; ?>


<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['posts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<li class=" gag-link" data-url="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>" data-text="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
" gagId="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" itemType="list" id="entry-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
">
                        <div class="content">
                            <div class="img-wrap">
                                <?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['nsfw'] == '1' && $_SESSION['FILTER'] != '0'): ?>
                                	<a href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>" target="_blank"><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/nsfw.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /></a>
                                <?php else: ?>
                                	<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic'] != ""): ?>
                                		<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic'] != "" && $this->_tpl_vars['posts'][$this->_sections['i']['index']]['gif'] == '1'): ?>
                                            <a href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>" target="_blank"><img src="<?php echo $this->_tpl_vars['purl']; ?>
/t/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" width="400" /><span class="play">Play</span>
                                            </a>
                                            <?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['status_che'] == '1'): ?>
                                            <a href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>" target="_blank"><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/meme/c/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" width="400" />
                                            </a>
                                        <?php else: ?>
                                            <a href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>" target="_blank"><img src="<?php echo $this->_tpl_vars['purl']; ?>
/t/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /></a>
                                        <?php endif; ?>
                                        <?php else: ?>
                                        <?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['youtube_key'] != ""): ?>
                                       <!--<center>
                                        <a target="_blank"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_youtube2', 'value' => 'a', 'assign' => 'youtube', 'youtube' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['youtube_key'])), $this);  echo $this->_tpl_vars['youtube']; ?>
</a>
                                        </center>-->
                                       <center style="height:350px">
                                            <a target="_blank" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>">
                                            <img style="max-width:460px" src="http://img.youtube.com/vi/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['youtube_key']; ?>
/0.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
                                            <img style="position:relative;top:-224px;height: 87px" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/play.png"></img></a>
                                        </center>

                                        <?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['fod_key'] != ""): ?>
                                        <center>
                                        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_fod2', 'value' => 'a', 'assign' => 'fod', 'fod' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['fod_key'])), $this);  echo $this->_tpl_vars['fod']; ?>

                                        </center>
                                        <?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['dai_key'] != ""): ?>
                                        <center>
                                            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_dai2', 'value' => 'a', 'assign' => 'dai', 'dai' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['dai_key'])), $this);  echo $this->_tpl_vars['dai']; ?>

                                        </center>

										<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['vfy_key'] != ""): ?>
										<center><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_vfy2', 'value' => 'a', 'assign' => 'vfy', 'vfy' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['vfy_key'])), $this);  echo $this->_tpl_vars['vfy']; ?>
</center>
										<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['vmo_key'] != ""): ?>
										<center><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_vmo2', 'value' => 'a', 'assign' => 'vmo', 'vmo' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['vmo_key'])), $this);  echo $this->_tpl_vars['vmo']; ?>
</center>
                                        <?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['contents'] != ""): ?>
                                        <center style="width:460px; overflow: hidden;margin-top: -11px">
                                            <?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['contents'])) ? $this->_run_mod_handler('strip_mq_gpc', true, $_tmp) : strip_mq_gpc($_tmp)); ?>

                                        </center>
                                        <?php else: ?>
										<center><?php echo $this->_tpl_vars['lang264']; ?>
</center>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <?php if ($this->_tpl_vars['displaywm'] == '0' && $this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic'] != "" && $this->_tpl_vars['posts'][$this->_sections['i']['index']]['gif'] != '1'): ?>
							<div class="watermark-clear"></div>
							<?php endif; ?>
                        </div>
                        <div style="position:relative;width:220px;float:right">
                            <div class="info b9gcs-stop" id="action-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" >
                                <h1><a href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>" class="jump_focus" target="_blank">
                                <?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic'] != "" && $this->_tpl_vars['posts'][$this->_sections['i']['index']]['gif'] == '1'): ?>
                                     <?php echo $this->_tpl_vars['lang287']; ?>

                                <?php endif; ?>
                                <?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['contents'] != ""): ?>
                                    <?php echo $this->_tpl_vars['lang290']; ?>

                                <?php endif; ?>
                                <?php if ($this->_tpl_vars['truncate'] == '1'):  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true));  else:  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp));  endif; ?></a></h1>
                                <h4>
                                    <span style="color: #999999; float: left;">Đăng bởi: <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></span>
                                    <p>

                                        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'time' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['time_added'])), $this); ?>

                                    </p>
                                </h4>
                                <p>

                                    <span>
                                    <!--<fb:comments-count href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"></fb:comments-count> <?php echo $this->_tpl_vars['lang289']; ?>
-->
                                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_fav_count', 'value' => 'var', 'assign' => 'fcount', 'PID' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID'])), $this); ?>

									<a title="Lượt xem"><span class="viewed">Lượt xem: <?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['postviewed']; ?>
</span></a> |
                                        Chuyên mục: <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['cname'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
"" title="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['cname']; ?>
"><span><?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['cname']; ?>
</span></a>
                                    </span>

                                </p>

                                <!--<div class="sharing-box ">
                                    <hr class="arrow" />
                                    <ul class="sharing ">
                                        <li class="facebook" id="share1-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
">
                                        	<div id="list-share-1-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" style="width:90px;overflow:hidden;float:<?php if ($_SESSION['language'] == 'ar'): ?>left<?php else: ?>right<?php endif; ?>;">
												<?php if ($this->_tpl_vars['share1'] == 1): ?>
												&lt;!&ndash; remove g+
                                                <g:plusone size="medium" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"></g:plusone>
                                                &ndash;&gt;

												<?php elseif ($this->_tpl_vars['share1'] == 2): ?>
													<fb:share-button type="button_count" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"></fb:share-button>
												<?php else: ?>
													<fb:like href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>?ref=fb" send="false" layout="button_count" width="90px" show_faces="false" font="" label="Post"></fb:like>
												<?php endif; ?>
                                            </div>
											<div id="list-share-2-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" style="width:110px;overflow:hidden;">
												<?php if ($this->_tpl_vars['share2'] == 1): ?>
                                                	&lt;!&ndash; remove g+
													<g:plusone size="medium" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"></g:plusone>
                                                    &ndash;&gt;

												<?php elseif ($this->_tpl_vars['share2'] == 2): ?>
													<fb:share-button type="button_count" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"></fb:share-button>
												<?php else: ?>
													<fb:like href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>?ref=fb" send="false" layout="button_count" width="90px" show_faces="false" font="" label="Post"></fb:like>
												<?php endif; ?>
											<div>
                                        </li>
                                    </ul>
                                </div>-->
                                <div class="sharing-box ">
                                    <div class="fb-like" data-href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                                </div>

                            <div class="tags">
                                	<span>
                                		<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['tags'])) ? $this->_run_mod_handler('tagsexplode', true, $_tmp) : tagsexplode($_tmp)); ?>

                                	</span>
                            </div>
                            <div class="baovipham">
                                <a style="margin-top: 20px" class="report" entryId="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" href="javascript:void(0);"><?php echo $this->_tpl_vars['lang146']; ?>
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

        <?php if ($this->_sections['i']['iteration'] == 3 && $this->_tpl_vars['json'] != '1'): ?>
			<li style="padding:10px">
				<div id='div-gpt-ad-1365732552334-0'>
					<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_advertisement', 'AID' => 7)), $this); ?>

				</div>
			</li>
		<?php endif; ?>
    <?php if ($this->_sections['i']['iteration'] == 15 && $this->_tpl_vars['json'] != '1'): ?>
        <li style="padding:10px">
            <div id='div-gpt-ad-1365732552334-0'>
                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_advertisement', 'AID' => 9)), $this); ?>

            </div>
        </li>
    <?php endif; ?>
    <?php if ($this->_sections['i']['iteration'] == 8 && $this->_tpl_vars['json'] != '1'): ?>
    <li style="padding:10px">
        <div id='div-gpt-ad-1365732552334-0'>
            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_advertisement', 'AID' => 10)), $this); ?>

        </div>
    </li>
    <?php endif;  endfor; endif;  if ($this->_tpl_vars['loadmore'] == '1'):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js_vote.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif;  echo '
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=455350294564519";
fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>
'; ?>