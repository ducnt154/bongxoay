<?php /* Smarty version 2.6.6, created on 2014-07-09 11:27:15
         compiled from view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'view.tpl', 13, false),array('modifier', 'makeseo', 'view.tpl', 60, false),array('insert', 'return_youtube_mobile', 'view.tpl', 27, false),array('insert', 'return_fod_mobile', 'view.tpl', 29, false),array('insert', 'return_vfy_mobile', 'view.tpl', 31, false),array('insert', 'return_vmo_mobile', 'view.tpl', 33, false),array('insert', 'get_time_to_days_ago', 'view.tpl', 55, false),)), $this); ?>
	<div id="fb-root"></div>
	<script src="http://connect.facebook.net/<?php if ($_SESSION['language'] == 'ar'): ?>ar_AR<?php else: ?>en_US<?php endif; ?>/all.js"></script>
	<?php if ($this->_tpl_vars['enable_fc'] == '1'): ?>
		<?php echo '
			<script>
			  FB.init({appId: \'';  echo $this->_tpl_vars['FACEBOOK_APP_ID'];  echo '\', status: true,cookie: true, xfbml: true});	  
			</script>
		'; ?>

	<?php endif; ?>
	<div id="jsid-entry-wrapper">
		<div id="content">
			<div id="jsid-content-container">
				<div id="jsid-content-item" data-key="id:<?php echo $this->_tpl_vars['p']['PID']; ?>
" data-title="<?php echo ((is_array($_tmp=$this->_tpl_vars['p']['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" data-nsfw="">
					<h2>
                    <?php if ($this->_tpl_vars['p']['gif'] == '1'): ?>
                          <?php echo $this->_tpl_vars['lang287']; ?>

                    <?php endif; ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['p']['title'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</h2>
					<div class="post-container">
						<?php if ($this->_tpl_vars['p']['nsfw'] == '1' && $_SESSION['FILTER'] != '0'): ?>
							<img src="<?php echo $this->_tpl_vars['mobileurl']; ?>
/img/nsfw_thumb.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['p']['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
						<?php else: ?>
							<?php if ($this->_tpl_vars['p']['pic'] != ""): ?>
								<a href="<?php echo $this->_tpl_vars['purl']; ?>
/t/<?php echo $this->_tpl_vars['p']['pic']; ?>
"><img alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['p']['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" src="<?php echo $this->_tpl_vars['purl']; ?>
/t/<?php echo $this->_tpl_vars['p']['pic']; ?>
" /></a>
							<?php else: ?>
								<?php if ($this->_tpl_vars['p']['youtube_key'] != ""): ?>
								<center><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_youtube_mobile', 'value' => 'a', 'assign' => 'youtube', 'youtube' => $this->_tpl_vars['p']['youtube_key'])), $this);  echo $this->_tpl_vars['youtube']; ?>
</center>
								<?php elseif ($this->_tpl_vars['p']['fod_key'] != ""): ?>
								<center><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_fod_mobile', 'value' => 'a', 'assign' => 'fod', 'fod' => $this->_tpl_vars['p']['fod_key'])), $this);  echo $this->_tpl_vars['fod']; ?>
</center>
								<?php elseif ($this->_tpl_vars['p']['vfy_key'] != ""): ?>
								<center><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_vfy_mobile', 'value' => 'a', 'assign' => 'vfy', 'vfy' => $this->_tpl_vars['p']['vfy_key'])), $this);  echo $this->_tpl_vars['vfy']; ?>
</center>
								<?php elseif ($this->_tpl_vars['p']['vmo_key'] != ""): ?>
								<center><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_vmo_mobile', 'value' => 'a', 'assign' => 'vmo', 'vmo' => $this->_tpl_vars['p']['vmo_key'])), $this);  echo $this->_tpl_vars['vmo']; ?>
</center>
								<?php else: ?>
								<center><?php echo $this->_tpl_vars['lang143']; ?>
</center>
								<?php endif; ?>
							<?php endif; ?>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['displaywm'] == '0' && $this->_tpl_vars['p']['pic'] != "" && $this->_tpl_vars['p']['gif'] != '1'): ?>
							<div class="watermark-clear2"></div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['next'] != ""): ?>
							<a class="page-turn next badge-page-turn" href="<?php echo $this->_tpl_vars['mobileurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['next']; ?>
"><span>&#9654;</span></a>
						<?php else: ?>
							<a class="page-turn next badge-page-turn" href="<?php echo $this->_tpl_vars['mobileurl']; ?>
/random.php"><span>&#9654;</span></a>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['prev'] != ""): ?>
							<a class="page-turn prev badge-page-turn" href="<?php echo $this->_tpl_vars['mobileurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['prev']; ?>
"><span class="rotate-180">&#9654;</span></a>
						<?php else: ?>
							<a class="page-turn prev badge-page-turn" href="<?php echo $this->_tpl_vars['mobileurl']; ?>
/random.php"><span class="rotate-180">&#9654;</span></a>
						<?php endif; ?>
					</div><!--end post-container-->
                	<div class="post-meta">
						<div class="info">
							<p class="right"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'time' => $this->_tpl_vars['p']['time_added'])), $this); ?>
</p>
						</div><!--end .info-->
					</div><!--end post-meta-->
                    
					<div id="post-stats-<?php echo $this->_tpl_vars['p']['PID']; ?>
" class="post-stats bottom-20" myScore="0">
					<p><fb:like href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['p']['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>?ref=fb" send="false" layout="button_count" width="90px" show_faces="false" font="" label="Post"></fb:like></p>
					<p class="comment-expand"><a class="badge-btn-toggle-comment" href="javascript:void(0);" entryId="<?php echo $this->_tpl_vars['p']['PID']; ?>
"><fb:comments-count href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['p']['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"></fb:comments-count> bình luận</a></p>
					<div class="facebook-comment" id="post-fb-comment">
						<div class="fb-comments" data-href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['p']['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>" data-num-posts="2" data-width="320"></div>
					</div><!--end facebook-comment-->
				</div><!--end post-stats-->
				</div>
			</div>

			<!-- m.9gag-adx-top10-post-320x50 -->
			<div id='div-gpt-ad-1365732793246-0'>
			 Ad #2
			</div>
			<?php if ($this->_tpl_vars['suggested'] || is_array): ?>
            <div class="section-header">
				<h2>Bài Xoáy</h2>
			</div>
            <ul class="list-view">
			<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['suggested']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>
                <li>
					<a href="<?php echo $this->_tpl_vars['mobileurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['suggested'][$this->_sections['j']['index']]['PID']; ?>
">
						<img src="<?php echo $this->_tpl_vars['purl']; ?>
/t/s-<?php echo $this->_tpl_vars['suggested'][$this->_sections['j']['index']]['pic']; ?>
" alt=""/>
						<div class="info">
							<h3><?php echo $this->_tpl_vars['suggested'][$this->_sections['j']['index']]['story']; ?>
</h3>
							<p><?php echo $this->_tpl_vars['suggested'][$this->_sections['j']['index']]['favclicks']; ?>
</p>
						</div><!--end .info-->
					</a>
				</li>
			<?php endfor; endif; ?>
            </ul>
			<?php endif; ?>
            <!-- m.9gag-adx-top10-post-abovecomment-300x250 -->
			<div id='div-gpt-ad-1365732793246-1'>
			 Ad #3
			</div>
			<div class="button-container">
				<a class="button badge-switch-view" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['p']['PID']; ?>
&nomobileview=1">Phiên bản máy tính</a>
			</div>
		</div><!--end #content-->
    </div>
    	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js_vote.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php echo '
		<script type="text/javascript">
		jQuery(\'.badge-btn-toggle-comment\').click(function(){
		jQuery(\'#post-fb-comment\').toggle(\'fast\');
		});
		</script>
		'; ?>