<?php /* Smarty version 2.6.6, created on 2014-07-09 02:35:40
         compiled from hautruong.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'makeseo', 'hautruong.tpl', 10, false),array('modifier', 'stripslashes', 'hautruong.tpl', 10, false),array('modifier', 'strip_tags', 'hautruong.tpl', 19, false),array('modifier', 'substr', 'hautruong.tpl', 19, false),array('insert', 'get_time_to_days_ago', 'hautruong.tpl', 15, false),)), $this); ?>
<div class="box_hautruong">
     <div class="video_hautruong">
        <div class="title_hautruong">
            <a href="#">Hậu trường</a>
        </div>
         <div class="content_hautruong">
             <div class="hautruongmoi">
                 <?php unset($this->_sections['f']);
$this->_sections['f']['name'] = 'f';
$this->_sections['f']['loop'] = is_array($_loop=$this->_tpl_vars['hautruonglatest']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                 <div class="img-htmoi">
                    <a title="<?php echo $this->_tpl_vars['hautruonglatest'][$this->_sections['f']['index']]['story']; ?>
" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['hautruonglatest'][$this->_sections['f']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['hautruonglatest'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"><img src="<?php echo $this->_tpl_vars['purl']; ?>
/t/<?php echo $this->_tpl_vars['hautruonglatest'][$this->_sections['f']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['hautruonglatest'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"></a>
                 </div>
                 <div class="text_htmoi">
                     <div class="title_htmoi">
                       <h3><a title="<?php echo $this->_tpl_vars['hautruonglatest'][$this->_sections['f']['index']]['story']; ?>
" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['hautruonglatest'][$this->_sections['f']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['hautruonglatest'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['hautruonglatest'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></h3>
                         <span style="color:#999999;font-size: 11px ;font-weight: normal"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'time' => $this->_tpl_vars['hautruonglatest'][$this->_sections['f']['index']]['time_added'])), $this); ?>
</span> |
                         <span style="color:#999999;font-size: 11px ;font-weight: normal"><?php echo $this->_tpl_vars['hautruonglatest'][$this->_sections['f']['index']]['postviewed']; ?>
 lượt xem</span>
                     </div>
                     <div class="content_htmoi">
                         <span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['hautruonglatest'][$this->_sections['f']['index']]['contents'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 650) : substr($_tmp, 0, 650)); ?>
</span>
                     </div>
                     </div>
                 <?php endfor; endif; ?>
             </div>
             <?php if (! empty ( $this->_tpl_vars['hautruong'] )): ?>
             <ul>
                 <?php unset($this->_sections['f']);
$this->_sections['f']['name'] = 'f';
$this->_sections['f']['loop'] = is_array($_loop=$this->_tpl_vars['hautruong']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                 <li>
                     <div class="img-hautruong">
                         <a title="<?php echo $this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['story']; ?>
" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                         <?php if ($this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['pic'] != ""): ?>
                         <img src="<?php echo $this->_tpl_vars['purl']; ?>
/t/<?php echo $this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
                         <?php elseif ($this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['pic'] != "" && $this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['gif'] == '1'): ?>
                         <img src="<?php echo $this->_tpl_vars['purl']; ?>
/t/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" width="400" /><span class="play">Play</span>
                         <?php elseif ($this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['youtube_key'] != ""): ?>
                         <img src="http://img.youtube.com/vi/<?php echo $this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['youtube_key']; ?>
/1.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
                         <?php endif; ?>
                         </a>
                     </div>
                     <div class="title_ht">
                         <a title="<?php echo $this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['story']; ?>
" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                         <span><?php echo ((is_array($_tmp=$this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</span></a>
                     </div>
                     <span style="color:#999999;font-size: 11px ;font-weight: normal"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'time' => $this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['time_added'])), $this); ?>
</span> | 
                     <span style="color:#999999;font-size: 11px ;font-weight: normal"><?php echo $this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['postviewed']; ?>
 lượt xem</span>
                     <div class="content_hautruong">
                         <span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['contents'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 600) : substr($_tmp, 0, 600)); ?>
</span></a>
                     </div>
                     <span style="color:#999999;font-size: 11px ;font-weight: normal;float: right"><a href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['hautruong'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)">Xem tiếp>></a></span>
                 </li>
                 <?php endfor; endif; ?>
             </ul>
             <?php else: ?>
             <ul>
                 <div>KHÔNG CÓ TIN NÀO!</div>
             </ul>

             <?php endif; ?>
             <div id="paging-buttons" class="paging-buttons">
                 <?php if ($this->_tpl_vars['tpp'] != ""): ?>
                 <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/hau-truong?page=<?php echo $this->_tpl_vars['tpp']; ?>
" class="previous">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
                 <?php else: ?>
                 <a href="#" onclick="return false;" class="previous disabled">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
                 <?php endif; ?>
                 <?php if ($this->_tpl_vars['tnp'] != ""): ?>
                 <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/hau-truong?page=<?php echo $this->_tpl_vars['tnp']; ?>
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
$this->_smarty_include(array('smarty_include_tpl_file' => 'right2.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>