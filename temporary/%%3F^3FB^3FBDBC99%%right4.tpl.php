<?php /* Smarty version 2.6.6, created on 2014-03-19 16:57:47
         compiled from right4.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'makeseo', 'right4.tpl', 19, false),array('modifier', 'stripslashes', 'right4.tpl', 20, false),array('modifier', 'truncate', 'right4.tpl', 20, false),array('modifier', 'replace', 'right4.tpl', 64, false),array('insert', 'get_time_to_days_ago', 'right4.tpl', 34, false),array('insert', 'get_advertisement', 'right4.tpl', 151, false),)), $this); ?>
<div class="side-bar">
    <!-- <div class="custom-block-content">

                 <div style="background: ##00a5f0;">
                     Ủng hộ Bóng Xoáy nhé
               <div class="fb-like" data-href="http://www.facebook.com/<?php echo $this->_tpl_vars['FACEBOOK_PROFILE']; ?>
" data-send="false" data-width="290" data-show-faces="false" data-colorscheme="dark"></div>
                 </div>

     </div>-->
    <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
        <div class="custom-block">
            <div class="muonxem"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/bong-hong">BẠN MUỐN XEM!</a></div>
            <?php if ($this->_tpl_vars['page'] == "" / xoay / ""): ?>
            <div class="custom-block-content">
                <ul class="new_cungloai">
                    <?php unset($this->_sections['f']);
$this->_sections['f']['name'] = 'f';
$this->_sections['f']['loop'] = is_array($_loop=$this->_tpl_vars['newsrelated']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <img style="height: 20px;width: 28px;border: none;" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/icon-new.gif">
                        <a title="<?php echo $this->_tpl_vars['newsrelated'][$this->_sections['f']['index']]['title']; ?>
" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['newsrelated'][$this->_sections['f']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['newsrelated'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <span><?php if ($this->_tpl_vars['truncate'] == '1'):  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['newsrelated'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true));  else:  echo ((is_array($_tmp=$this->_tpl_vars['newsrelated'][$this->_sections['f']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp));  endif; ?></span>
                        </a>
                    </li>
                    <?php endfor; endif; ?>
                </ul>
            </div>
            <?php else: ?>
            <div class="custom-block-content">
                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['want_views']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <div style="height: 74px">
                    <a class="wrap" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['want_views'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['want_views'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                    <img class="hot" src="http://img.youtube.com/vi/<?php echo $this->_tpl_vars['want_views'][$this->_sections['i']['index']]['youtube_key']; ?>
/1.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['want_views'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
                    <!-- <span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['want_views'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 87, "...", true) : smarty_modifier_truncate($_tmp, 87, "...", true)); ?>
</span></a><br>-->
                    <span><?php echo $this->_tpl_vars['want_views'][$this->_sections['i']['index']]['title']; ?>
</span><br>
                    <span style="color:#999999;font-size: 11px ;font-weight: normal"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'time' => $this->_tpl_vars['want_views'][$this->_sections['i']['index']]['time_added'])), $this); ?>
</span><br>
                    <span style="color:#999999;font-size: 11px ;font-weight: normal"><?php echo $this->_tpl_vars['want_views'][$this->_sections['i']['index']]['postviewed']; ?>
 lượt xem</span>
                    </a>
                </div>
                <?php endfor; endif; ?>
                <span style="float: right;font-size: 11px;color: #999999;margin-right: 6px;"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/bong-hong">Xem thêm >><!--<img style="float: right;border: none;margin-top: 5px;margin-left:2px" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/readmore.png">--></a></span>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div>
        <?php if ($this->_tpl_vars['recommended'] == '2' && $this->_tpl_vars['cname2'] != "hau-truong"): ?>
        <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
            <div class="right-block">
                <h3 class="hoi-bua"><a href="#">BÓNG LĂN - SOPCAST</a></h3>
                <div class="right-block-content">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'sopcast-home.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
            </div>
        </div>
        <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
            <div class="right-block">

                <h3 style="color: #00a5f0" class="top">TOP XOÁY</h3>
                <div class="right-block-content">
                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                        <tr>
                            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <td>
                                <?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['profilepicture'] == ""): ?>
                                <img src="http://graph.facebook.com/<?php echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_sections['i']['index']]['facebookid'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
/picture?type=normal" style="width:35px;height:35px;" alt="Profile Pic" />
                                <?php else: ?>
                                <img src="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/thumbs/<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['profilepicture']; ?>
?<?php echo time(); ?>
" style="width:35px;height:35px;" alt="Profile Pic" />
                                <?php endif; ?>

                                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['username']; ?>
"  style="overflow: hidden;text-overflow: ellipsis; color:#fea700;"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['username']; ?>
</a>
                                <br />
                                Bài: <?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['posts']; ?>

                                <br />
                                Điểm: <?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['points']; ?>

                            </td>

                            <?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['rank'] % 2 == 0): ?>
                        </tr><tr>
                        <?php endif; ?>

                        <?php endfor; endif; ?>
                    </table>


                </div>
            </div>
        </div>
        <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
            <div class="custom-block">
                <h3 class="hot"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/video-bong-da">VIDEO HOT</a></h3>
                <div class="custom-block-content">
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['video']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <div style="height:74px">
                        <a class="wrap" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['video'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['video'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <img class="hot" src="http://img.youtube.com/vi/<?php echo $this->_tpl_vars['video'][$this->_sections['i']['index']]['youtube_key']; ?>
/1.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['video'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
                        <span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['video'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 70, "...", true) : smarty_modifier_truncate($_tmp, 70, "...", true)); ?>
</span><br>
                        <span style="color:#999999;font-size: 11px ;font-weight: normal"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'time' => $this->_tpl_vars['video'][$this->_sections['i']['index']]['time_added'])), $this); ?>
</span><br>
                        <span style="color:#999999;font-size: 11px ;font-weight: normal;"><?php echo $this->_tpl_vars['video'][$this->_sections['i']['index']]['postviewed']; ?>
 lượt xem</span>
                        </a>
                    </div>
                    <?php endfor; endif; ?>

                </div>
            </div>
        </div>
        <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
            <div class="right-block">

                <h3 class="hoi-bua"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/hoi-bua-dap-bua">HỎI BỪA ĐÁP BỰA</a></h3>
                <div class="right-block-content">

                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['hoibua']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <div>
                        <a class="wrap" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['hoibua'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['hoibua'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <?php if ($this->_tpl_vars['hoibua'][$this->_sections['i']['index']]['nsfw'] == '1' && $_SESSION['FILTER'] != '0'): ?><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/nsfw_thumb.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['hoibua'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" align="left" /><?php else: ?><img src="<?php echo $this->_tpl_vars['purl']; ?>
/t/s-<?php echo $this->_tpl_vars['hoibua'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['hoibua'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /><?php endif; ?></a>
                        <a class="wrap" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['hoibua'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['hoibua'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <span><?php if ($this->_tpl_vars['truncate'] == '1'):  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['binhbua'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true));  else:  echo ((is_array($_tmp=$this->_tpl_vars['hoibua'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp));  endif; ?></span></a><br>
                        Bởi: <a style="color: #fea700" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$this->_tpl_vars['hoibua'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['hoibua'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</a>
                        <span style="color:#999999;font-size: 11px ;font-weight: normal"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'time' => $this->_tpl_vars['hoibua'][$this->_sections['i']['index']]['time_added'])), $this); ?>
</span><br>
                        <span style="color:#999999;font-size: 11px ;font-weight: normal;"><?php echo $this->_tpl_vars['hoibua'][$this->_sections['i']['index']]['postviewed']; ?>
 lượt xem</span>
                    </div>
                    <?php endfor; endif; ?>

                </div>
            </div>
        </div>
        <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
            <div class="right-block">
                <h3><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/binhbua">BÌNH BỰA</a></h3>
                <div class="right-block-content">

                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['binhbua']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <div>
                        <a class="wrap" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['binhbua'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['binhbua'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <?php if ($this->_tpl_vars['binhbua'][$this->_sections['i']['index']]['nsfw'] == '1' && $_SESSION['FILTER'] != '0'): ?><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/nsfw_thumb.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['binhbua'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" align="left" /><?php else: ?><img src="<?php echo $this->_tpl_vars['purl']; ?>
/t/s-<?php echo $this->_tpl_vars['binhbua'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['binhbua'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /><?php endif; ?></a>
                        <a class="wrap" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['binhbua'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['binhbua'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <span><?php if ($this->_tpl_vars['truncate'] == '1'):  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['binhbua'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true));  else:  echo ((is_array($_tmp=$this->_tpl_vars['binhbua'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp));  endif; ?></span></a><br>
                        Bởi: <a style="color: #fea700" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$this->_tpl_vars['binhbua'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['binhbua'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</a>
                        <span style="color:#999999;font-size: 11px ;font-weight: normal"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'time' => $this->_tpl_vars['binhbua'][$this->_sections['i']['index']]['time_added'])), $this); ?>
</span><br>
                        <span style="color:#999999;font-size: 11px ;font-weight: normal;"><?php echo $this->_tpl_vars['binhbua'][$this->_sections['i']['index']]['postviewed']; ?>
 lượt xem</span>
                    </div>
                    <?php endfor; endif; ?>

                </div>
            </div>
        </div>
        <?php endif; ?>

    </div>
    <div id="moving-boxes" style="width: 295px;color: #fff;">
        <div class="s-300" id="bottom-s300">
            <!-- <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_advertisement', 'AID' => 2)), $this); ?>
-->
            <a target="_blank" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/bong-hong"><img src="../images/banner/nguoidep.gif"></a>
        </div>
        <div class="s-300" id="bottom-s300">
            <div class="fb-like-box" data-href="http://www.facebook.com/bongxoay" data-width="300" data-height="" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
        </div>
        <div class="dieukhoan">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'proviso.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
    </div>
    <?php if ($this->_tpl_vars['boxindexmax'] > 0): ?>
    <div id="jsid-buzz-block" class="popular-block" data-boxIndex="0" data-boxIndexMax="<?php echo $this->_tpl_vars['boxindexmax']; ?>
" data-boxSize="3">
        <h3><?php echo $this->_tpl_vars['lang277']; ?>

					<span style="float: right; color: #999; font-size: 13px;">
					<a id="jsid-popular-prev" class="badge-buzz-more" data-change="-1" href="javascript:void(0);" style="color:grey;cursor:default;">&laquo; Prev</a> ·
					<a id="jsid-popular-next" class="badge-buzz-more" data-change="1" href="javascript:void(0);">Next &raquo;</a>
					</span>
        </h3>
        <ol>
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['popular']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <li class="badge-buzz-post-batch badge-buzz-post-batch-<?php if ($this->_sections['i']['iteration'] > '15'): ?>5<?php elseif ($this->_sections['i']['iteration'] > '12'): ?>4<?php elseif ($this->_sections['i']['iteration'] > '9'): ?>3<?php elseif ($this->_sections['i']['iteration'] > '6'): ?>2<?php elseif ($this->_sections['i']['iteration'] > '3'): ?>1<?php else: ?>0<?php endif; ?>" <?php if ($this->_sections['i']['iteration'] > '3'): ?>style="display:none;"<?php endif; ?> >
            <a class="wrap" href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['popular'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['popular'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1);GAG.Track.event('clicked', 'psb.p', '0', '5665836');">
            <div class="mask">
                <?php if ($this->_tpl_vars['popular'][$this->_sections['i']['index']]['nsfw'] == '1' && $_SESSION['FILTER'] != '0'): ?><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/nsfw_thumb.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['popular'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /><?php else: ?><img src="<?php echo $this->_tpl_vars['purl']; ?>
/t/s-<?php echo $this->_tpl_vars['popular'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['popular'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /><?php endif; ?>
            </div>
            <h4><?php if ($this->_tpl_vars['truncate'] == '1'):  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['popular'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true));  else:  echo ((is_array($_tmp=$this->_tpl_vars['popular'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp));  endif; ?></h4>
            <p class="meta">
                <span class="comment"><fb:comments-count href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['popular'][$this->_sections['i']['index']]['PID']; ?>
/<?php if ($this->_tpl_vars['SEO'] == '1'):  echo ((is_array($_tmp=$this->_tpl_vars['popular'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
.html<?php endif; ?>"></fb:comments-count></span>
                <span class="loved"><?php echo $this->_tpl_vars['popular'][$this->_sections['i']['index']]['favclicks']; ?>
</span>
            </p>


            </a>
            </li>
            <?php endfor; endif; ?>
        </ol>
    </div>
    <?php endif; ?>

</div>
<?php echo '
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=455350294564519";
    fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>
'; ?>