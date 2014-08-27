<?php /* Smarty version 2.6.6, created on 2014-06-17 22:16:10
         compiled from thumbs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'thumbs.tpl', 30, false),array('modifier', 'makeseo', 'thumbs.tpl', 33, false),array('modifier', 'stripslashes', 'thumbs.tpl', 35, false),array('modifier', 'truncate', 'thumbs.tpl', 66, false),array('insert', 'return_vfy', 'thumbs.tpl', 45, false),array('insert', 'return_vmo', 'thumbs.tpl', 49, false),)), $this); ?>
<div id="main">
    <div id="content-holder">        
        <div class="main-filter ">
            <ul class="content-type">
                <li> <a class="current" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/hot"><strong><?php echo $this->_tpl_vars['lang172']; ?>
</strong></a></li>
                <?php if ($this->_tpl_vars['trendingenabled'] == '1'): ?><li> <a class="" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/trending"><strong><?php echo $this->_tpl_vars['lang173']; ?>
</strong></a></li><?php endif; ?>
                <li> <a class="" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/vote"><strong><?php echo $this->_tpl_vars['lang174']; ?>
</strong></a></li>                
            </ul>
			<a id="changeview" class="view_list" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/hot?view=list" title="Toggle Views"><?php echo $this->_tpl_vars['lang259']; ?>
</a>			
            <?php if ($_SESSION['USERID'] != ""): ?>
                <?php if ($_SESSION['FILTER'] == '1'): ?>
                <a class="safe-mode-switcher on" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/safe?m=<?php echo $this->_tpl_vars['eurl']; ?>
">&nbsp;</a>
                <?php else: ?>
                <a class="safe-mode-switcher off" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/safe?m=<?php echo $this->_tpl_vars['eurl']; ?>
&o=1">&nbsp;</a>
                <?php endif; ?>
            <?php else: ?>
            	<a class="safe-mode-switcher on" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/login">&nbsp;</a>
            <?php endif; ?>
        </div>
        <div id="content" listPage="hot">            
            <div id="use-tips" style="display:none;">
                <div id="view-info" class="list-tips">
                    <div id="shortcut-event-label" style="display:none"><?php echo $this->_tpl_vars['lang171']; ?>
</div>
                    <span><b><?php echo $this->_tpl_vars['lang169']; ?>
</b>: <?php echo $this->_tpl_vars['lang170']; ?>
</span>
                    <a href="#keyboard" class="keyboard_link"><?php echo $this->_tpl_vars['lang168']; ?>
</a>                    
                </div>
            </div>
                   <div id="entries-content" class="grid"> 
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
						<ul id="grid-col-<?php if ($this->_sections['i']['iteration'] > 3):  echo smarty_function_math(array('equation' => "ceil(x / 3)",'x' => $this->_sections['i']['iteration']), $this); else: ?>1<?php endif; ?>" class="col-<?php if ($this->_sections['i']['iteration'] > 3):  echo smarty_function_math(array('equation' => "x % 3",'x' => $this->_sections['i']['iteration'],'assign' => 'remin'), $this); if ($this->_tpl_vars['remin'] == '0'): ?>3<?php else:  echo $this->_tpl_vars['remin'];  endif;  else:  echo $this->_sections['i']['iteration'];  endif; ?>">

                            <li class=" ">
                                <a href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>" class="jump_stop">
                                    <div style="" class="thimage">
                                        <?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['nsfw'] == '1' && $_SESSION['FILTER'] != '0'): ?><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/nsfw_thumb.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /><?php else: ?>

<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic'] != ""): ?>
<img src="<?php echo $this->_tpl_vars['purl']; ?>
/t/s-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['youtube_key'] != ""): ?>
<img src="http://img.youtube.com/vi/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['youtube_key']; ?>
/0.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" style="max-width:215px" />
<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['fod_key'] != ""): ?>
<img src="http://www.funnyordie.com/media/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['fod_key']; ?>
/thumbnail/large.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" style="max-width:215px" />
<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['vfy_key'] != ""): ?>
<center>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_vfy', 'value' => 'a', 'assign' => 'vfy', 'vfy' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['vfy_key'])), $this);  echo $this->_tpl_vars['vfy']; ?>

</center>
<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['vmo_key'] != ""): ?>
<center>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_vmo', 'value' => 'a', 'assign' => 'vmo', 'vmo' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['vmo_key'])), $this);  echo $this->_tpl_vars['vmo']; ?>

</center>
<?php else: ?>
<center>
<?php echo $this->_tpl_vars['lang264']; ?>

</center>
<?php endif; ?>	
										
										<?php endif; ?>
                                    </div>
                                </a>
                                <p>
                                    <span class="comment">
                                    	<fb:comments-count href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"></fb:comments-count>
                                    </span>
                                    <span id="love_count_<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="loved" votes="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['favclicks']; ?>
" score="0"><?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['favclicks']; ?>
</span>
                                </p>
                                <h1><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
 - <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</h1>
                                <h4></h4>
                            </li>
                        </ul>
                    <?php endfor; endif; ?>			
				</div>
            <div id="lastPostsLoader"></div>                
			<?php echo '
                <script type="text/javascript">
				$(document).ready(function(){
	$(window).scroll(function(){
	if (document.documentElement.scrollTop)
	{ var  curloc = document.documentElement.scrollTop; }
	else
	{ var curloc=$(window).scrollTop(); }
	var wintop = $(window).scrollTop(), docheight = $(document).height(), winheight = $(window).height();
	var  scrolltrigger = 0.95;
				 
	if  ((wintop/(docheight-winheight)) > scrolltrigger) {
	 lastAddedLiveFunc();
	 tpage = tpage+1;
	};
	if(curloc>$(window).height()){$(\'#backtotop\').slideDown();}else{$(\'#backtotop\').slideUp();};
});
});
</script>
				'; ?>

            <div id="paging-buttons" class="paging-buttons">
            	<?php if ($this->_tpl_vars['tpp'] != ""): ?>
                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/hot?page=<?php echo $this->_tpl_vars['tpp']; ?>
" class="previous">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
                <?php else: ?>
                <a href="#" onclick="return false;" class="previous disabled">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['tnp'] != ""): ?>
                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/hot?page=<?php echo $this->_tpl_vars['tnp']; ?>
" class="older"><?php echo $this->_tpl_vars['lang167']; ?>
 &raquo;</a>
                <?php else: ?>
                <a href="#" onclick="return false;" class="older disabled"><?php echo $this->_tpl_vars['lang167']; ?>
 &raquo;</a>
                <?php endif; ?>
            </div>		
        </div>
    </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'right.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js_movingboxs.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="footer" class="">