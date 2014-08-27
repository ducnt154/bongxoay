<?php /* Smarty version 2.6.6, created on 2014-07-09 10:42:30
         compiled from bongxoaytv.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'makeseo', 'bongxoaytv.tpl', 17, false),array('modifier', 'stripslashes', 'bongxoaytv.tpl', 18, false),array('modifier', 'truncate', 'bongxoaytv.tpl', 27, false),array('insert', 'get_time_to_days_ago', 'bongxoaytv.tpl', 29, false),)), $this); ?>
<div class="box_bongxoay">
    <div class="video_today">
        <div class="title_video">
            <a href="#">Video tâm điểm</a>
        </div>
        <div class="content_today">

            <?php if (! empty ( $this->_tpl_vars['videotamdiem'] )): ?>
            <ul>
                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['videotamdiem']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <li>





                        <a href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['videotamdiem'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['videotamdiem'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <img src="http://img.youtube.com/vi/<?php echo $this->_tpl_vars['videotamdiem'][$this->_sections['i']['index']]['youtube_key']; ?>
/1.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['videotamdiem'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
                        </a>





                        <div class="title_lq">
                        <a  href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['videotamdiem'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['videotamdiem'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                            <span><?php if ($this->_tpl_vars['truncate'] == '1'):  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['videotamdiem'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true));  else:  echo ((is_array($_tmp=$this->_tpl_vars['videotamdiem'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp));  endif; ?></span></a>
                            <div>
                           <span style="color:#999999;font-size: 11px ;font-weight: normal"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'time' => $this->_tpl_vars['videotamdiem'][$this->_sections['i']['index']]['time_added'])), $this); ?>
</span><br>
                           <span style="color:#999999;font-size: 11px ;font-weight: normal">Lượt xem: <?php echo $this->_tpl_vars['videotamdiem'][$this->_sections['i']['index']]['postviewed']; ?>
</span>
                    </li>
                <?php endfor; endif; ?>
            </ul>
                <?php else: ?>
                <ul>
                    <div>KHÔNG CÓ BÀI VIẾT NÀO</div>
                </ul>
            <?php endif; ?>
        </div>
    </div>
        <div class="video_bongxoay">
        <div class="title_bongxoay">
            <a href="#">Video mới nhất</a>
        </div>
        <div class="content_bongxoay">
            <?php if (! empty ( $this->_tpl_vars['videolatest'] )): ?>
              <ul>
                <?php unset($this->_sections['f']);
$this->_sections['f']['name'] = 'f';
$this->_sections['f']['loop'] = is_array($_loop=$this->_tpl_vars['videolatest']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <a href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['videolatest'][$this->_sections['f']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['videolatest'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <img src="http://img.youtube.com/vi/<?php echo $this->_tpl_vars['videolatest'][$this->_sections['f']['index']]['youtube_key']; ?>
/1.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['videolatest'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /></a>
                    <div class="title_lq">
                        <a href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['videolatest'][$this->_sections['f']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['videolatest'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['videolatest'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 80, "...", true) : smarty_modifier_truncate($_tmp, 80, "...", true)); ?>
</span></a>
                     </div>
                    <span style="color:#999999;font-size: 11px ;font-weight: normal"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'time' => $this->_tpl_vars['videolatest'][$this->_sections['f']['index']]['time_added'])), $this); ?>
</span><br>
                    <span style="color:#999999;font-size: 11px ;font-weight: normal"><?php echo $this->_tpl_vars['videolatest'][$this->_sections['f']['index']]['postviewed']; ?>
 lượt xem</span>
                </li>
                <?php endfor; endif; ?>
            </ul>
            <?php else: ?>
                <ul>
                    <div>KHÔNG CÓ BÀI VIẾT NÀO</div>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php if ($this->_tpl_vars['cname2'] == "video-bong-da"): ?>
    <?php echo '
        <script type="text/javascript">
            $(document).ready(function(){

                 $("#entries-content-ul").removeClass("col-1");
            });

        </script>
    '; ?>

    <?php endif; ?>
<div id="footer" class="">