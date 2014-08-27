<?php /* Smarty version 2.6.6, created on 2014-07-09 11:28:13
         compiled from posts_bit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'posts_bit.tpl', 18, false),array('modifier', 'makeseo', 'posts_bit.tpl', 22, false),array('insert', 'return_youtube_mobile', 'posts_bit.tpl', 40, false),array('insert', 'return_fod_mobile', 'posts_bit.tpl', 42, false),array('insert', 'return_vfy_mobile', 'posts_bit.tpl', 44, false),array('insert', 'return_vmo_mobile', 'posts_bit.tpl', 46, false),array('insert', 'get_advertisement', 'posts_bit.tpl', 78, false),)), $this); ?>
<?php if ($this->_tpl_vars['json'] == '1' && $this->_tpl_vars['posts'] || is_array): ?>
	<div id="fb-root"></div>
	<script src="http://connect.facebook.net/<?php if ($_SESSION['language'] == 'ar'): ?>ar_AR<?php else: ?>en_US<?php endif; ?>/all.js"></script>
	<?php if ($this->_tpl_vars['enable_fc'] == '1'): ?>
		<?php echo '
			<script>
			  FB.init({appId: \'';  echo $this->_tpl_vars['FACEBOOK_APP_ID'];  echo '\', status: true,cookie: true, xfbml: true});	  
			</script>
		'; ?>

	<?php endif;  endif;  unset($this->_sections['i']);
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
			<li id="list-item-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="badge-list-item badge-list-item-unread">
				<h2><a href="<?php echo $this->_tpl_vars['mobileurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
">
                	<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['gif'] == '1'): ?>
                          <?php echo $this->_tpl_vars['lang287']; ?>

                    <?php endif; ?>
                	<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>

                </a></h2>
				<div class="post-container">
					<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['nsfw'] == '1' && $_SESSION['FILTER'] != '0'): ?>
					<a href="<?php echo $this->_tpl_vars['mobileurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>" target="_blank">
						<img src="<?php echo $this->_tpl_vars['mobileurl']; ?>
/img/nsfw_thumb.jpg" alt="" style="display: none;" />
						<img src="<?php echo $this->_tpl_vars['mobileurl']; ?>
/img/nsfw_thumb.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
					</a>
					<?php else: ?>
						<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic'] != ""): ?>
							<a href="<?php echo $this->_tpl_vars['mobileurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
"> 
                            	<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic'] != "" && $this->_tpl_vars['posts'][$this->_sections['i']['index']]['gif'] == '1'): ?>
                                           <img src="<?php echo $this->_tpl_vars['purl']; ?>
/t/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /><span class="play">Play</span>
                                           
                                <?php else: ?>
                                	<img src="<?php echo $this->_tpl_vars['purl']; ?>
/t/s-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic']; ?>
" border="0" alt="" style="display: none;" />
									<img src="<?php echo $this->_tpl_vars['purl']; ?>
/t/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic']; ?>
" border="0" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
                                <?php endif; ?>
								
							</a>
						<?php else: ?>
							<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['youtube_key'] != ""): ?>
								<center><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_youtube_mobile', 'value' => 'a', 'assign' => 'youtube', 'youtube' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['youtube_key'])), $this);  echo $this->_tpl_vars['youtube']; ?>
</center>
							<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['fod_key'] != ""): ?>
								<center><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_fod_mobile', 'value' => 'a', 'assign' => 'fod', 'fod' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['fod_key'])), $this);  echo $this->_tpl_vars['fod']; ?>
</center>
							<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['vfy_key'] != ""): ?>
								<center><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_vfy_mobile', 'value' => 'a', 'assign' => 'vfy', 'vfy' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['vfy_key'])), $this);  echo $this->_tpl_vars['vfy']; ?>
</center>
							<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['vmo_key'] != ""): ?>
								<center><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_vmo_mobile', 'value' => 'a', 'assign' => 'vmo', 'vmo' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['vmo_key'])), $this);  echo $this->_tpl_vars['vmo']; ?>
</center>
							<?php else: ?>
								<center><?php echo $this->_tpl_vars['lang143']; ?>
</center>
							<?php endif; ?>
						<?php endif; ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['displaywm'] == '0' && $this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic'] != "" && $this->_tpl_vars['posts'][$this->_sections['i']['index']]['gif'] != '1'): ?>
						<div class="watermark-clear"></div>
					<?php endif; ?>
                </div><!--end .post-continaer-->
                <div class="post-meta">
					<a class="profile" href="javascript:void(0);" style="cursor:default;">
                        <img src="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['profilepicture']; ?>
" style="width:100px;height:100px;"/>
                    </a>
					<div class="info">
						<h4><a href="javascript:void(0);"><?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['username']; ?>
</a></h4>
					</div><!--end .info-->
				</div><!--end post-meta-->
                
				<div id="post-stats-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="post-stats bottom-20" myScore="0">
                
                    <p><fb:like href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>?ref=fb" send="false" layout="button_count" width="90px" show_faces="false" font="" label="Post"></fb:like></p>
                    
					<p class="comment-expand"><a class="badge-btn-toggle-comment" href="javascript:void(0);" entryId="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
"><fb:comments-count href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"></fb:comments-count> bình luận</a></p>
					<div class="facebook-comment" id="list-item-fb-comment-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" style="display:none;">
						<div class="fb-comments" data-href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>" data-num-posts="2" data-width="320"></div>
					</div><!--end facebook-comment-->
				</div><!--end post-stats-->
			</li>
			<?php if ($this->_sections['i']['iteration'] == 3 && $this->_tpl_vars['json'] != '1'): ?>
			<li><!-- m.9gag-adx-top10-list-300x250 -->
				<div id='div-gpt-ad-1365732552334-0'>
					<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_advertisement', 'AID' => 8)), $this); ?>

				</div>
			</li>
			<?php endif;  endfor; endif;  if ($this->_tpl_vars['posts'] || is_array):  echo '
<script type="text/javascript">
jQuery(\'.badge-btn-toggle-comment\').click(function(){
var id=jQuery(this).attr(\'entryId\');
jQuery(\'#list-item-fb-comment-\'+id).toggle(\'fast\');
});
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js_vote.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>