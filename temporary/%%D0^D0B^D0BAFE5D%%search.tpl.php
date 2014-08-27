<?php /* Smarty version 2.6.6, created on 2014-07-09 11:13:52
         compiled from search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'search.tpl', 18, false),array('modifier', 'stripslashes', 'search.tpl', 23, false),array('modifier', 'makeseo', 'search.tpl', 37, false),array('modifier', 'truncate', 'search.tpl', 38, false),)), $this); ?>
<div class="box_bongxoay">
    <div id="content-holder">
        <div class="search-bar">
            <form id="searchbar" action="<?php echo $this->_tpl_vars['baseurl']; ?>
/search" method="get">
                <div class="field search">
                	<input id="page_search" type="text" name="query" class="search search_input" value="<?php echo $this->_tpl_vars['query']; ?>
" placeholder="<?php echo $this->_tpl_vars['lang190']; ?>
" />
                </div>
            </form>
        </div>
        <div id="content">
            <div id="view-controller">
                <div id="view-info">
                	<p style="font-weight: bold;font-size: 15px"><?php echo $this->_tpl_vars['total']; ?>
 Kết quả tìm kiếm</p>
                </div>
            </div><br><br>
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
                <ul id="grid-col-1" class="col-<?php if ($this->_sections['i']['iteration'] > 9):  echo smarty_function_math(array('equation' => "x - 9",'x' => $this->_sections['i']['iteration']), $this); elseif ($this->_sections['i']['iteration'] > 6):  echo smarty_function_math(array('equation' => "x - 6",'x' => $this->_sections['i']['iteration']), $this); elseif ($this->_sections['i']['iteration'] > 3):  echo smarty_function_math(array('equation' => "x - 3",'x' => $this->_sections['i']['iteration']), $this); else:  echo $this->_sections['i']['iteration'];  endif; ?>">
                   <li style="width: 196px;padding-right: 35px" class=" ">
                        <a href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/" class="jump_stop">
                            <div style="" class="thimage">
                            	<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['youtube_key'] != ""): ?>
                                <img src="http://img.youtube.com/vi/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['youtube_key']; ?>
/0.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" style="max-width:215px" />
                                <?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['fod_key'] != ""): ?>
                                <img src="http://www.funnyordie.com/media/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['fod_key']; ?>
/thumbnail/large.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" style="max-width:215px" />
                                <?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['vfy_key'] != ""): ?>
								 <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/9gag-logo-large.png" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
								<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['vmo_key'] != ""): ?>
								<img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/9gag-logo-large.png" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
								<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['txt'] != ""): ?>
								 <font size="3" color="black"><br><br><br><?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</font>
								<?php else: ?>
                            	<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['nsfw'] == '1' && $_SESSION['FILTER'] != '0'): ?><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/nsfw_thumb.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /><?php else: ?><img src="<?php echo $this->_tpl_vars['purl']; ?>
/t/s-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /><?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </a>
                    	<h1><a href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"><span style="color: #333"><?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</span></a></h1>
                        <h4><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</a></h4>
                    </li>
                </ul>
                <?php endfor; endif; ?>
            </div>
            <div id="paging-buttons" class="paging-buttons">
            	<?php if ($this->_tpl_vars['tpp'] != ""): ?>
                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/search?page=<?php echo $this->_tpl_vars['tpp']; ?>
&query=<?php echo $this->_tpl_vars['query']; ?>
" class="previous">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
                <?php else: ?>
                <a href="#" onclick="return false;" class="previous disabled">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['tnp'] != ""): ?>
                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/search?page=<?php echo $this->_tpl_vars['tnp']; ?>
&query=<?php echo $this->_tpl_vars['query']; ?>
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

<?php echo '
<script type="text/javascript">
var adloca=$(\'#moving-boxes\').offset().top;
 $(window).scroll(function () {
    var curloca=$(window).scrollTop();
    if(curloca>adloca){
        $(\'#moving-boxes\').css(\'position\',\'fixed\');
        $(\'#moving-boxes\').css(\'top\',\'55px\');
        $(\'#moving-boxes\').css(\'z-index\',\'200\');
    };
    if(curloca <= adloca){
        $(\'#moving-boxes\').css(\'position\',\'static\');
        $(\'#moving-boxes\').css(\'top\',\'!important\');
        $(\'#moving-boxes\').css(\'z-index\',\'!important\');
    };
    });
</script>
'; ?>

<div id="footer" class="">