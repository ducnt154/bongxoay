<?php /* Smarty version Smarty-3.1.16, created on 2014-02-28 15:13:54
         compiled from "/var/www/html/bongxoay/themes/bongxoaytv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19453082865310454270e466-13592268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9440024b64abd8e72a02ec8e1185fef4629e4094' => 
    array (
      0 => '/var/www/html/bongxoay/themes/bongxoaytv.tpl',
      1 => 1393386099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19453082865310454270e466-13592268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'videotamdiem' => 0,
    'baseurl' => 0,
    'postfolder' => 0,
    'SEO' => 0,
    'truncate' => 0,
    'videolatest' => 0,
    'cname2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5310454282f965_00899983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5310454282f965_00899983')) {function content_5310454282f965_00899983($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/bongxoay/smarty/libs/plugins/modifier.truncate.php';
?><div class="box_bongxoay">
    <div class="video_today">
        <div class="title_video">
            <a href="#">Video tâm điểm trong ngày</a>
        </div>
        <div class="content_today">

            <?php if (!empty($_smarty_tpl->tpl_vars['videotamdiem']->value)) {?>
            <ul>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['videotamdiem']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['videotamdiem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['videotamdiem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                            <img src="http://img.youtube.com/vi/<?php echo $_smarty_tpl->tpl_vars['videotamdiem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['youtube_key'];?>
/1.jpg" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['videotamdiem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
" /></a>
                        <div class="title_lq">
                        <a  href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['videotamdiem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['videotamdiem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                            <span><?php if ($_smarty_tpl->tpl_vars['truncate']->value=="1") {?><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['videotamdiem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']),20,"...",true);?>
<?php } else { ?><?php echo stripslashes($_smarty_tpl->tpl_vars['videotamdiem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
<?php }?></span></a>
                            <div>
                           <span style="color:#999999;font-size: 11px ;font-weight: normal">Lượt xem: <?php echo $_smarty_tpl->tpl_vars['videotamdiem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['postviewed'];?>
</span>
                    </li>
                <?php endfor; endif; ?>
            </ul>
                <?php } else { ?>
                <ul>
                    <div>KHÔNG CÓ BÀI VIẾT NÀO</div>
                </ul>
            <?php }?>
        </div>
    </div>
        <div class="video_bongxoay">
        <div class="title_bongxoay">
            <a href="#">Video mới nhất</a>
        </div>
        <div class="content_bongxoay">
            <?php if (!empty($_smarty_tpl->tpl_vars['videolatest']->value)) {?>
              <ul>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['f'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['f']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['name'] = 'f';
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['videolatest']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<?php echo $_smarty_tpl->tpl_vars['videolatest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['videolatest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['story']);?>
.html<?php }?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <img src="http://img.youtube.com/vi/<?php echo $_smarty_tpl->tpl_vars['videolatest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['youtube_key'];?>
/1.jpg" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['videolatest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['story']);?>
" /></a>
                    <div class="title_lq">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['videolatest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['videolatest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['story']);?>
.html<?php }?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <span><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['videolatest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['story']),80,"...",true);?>
</span></a>
                     </div>
                    <span style="color:#999999;font-size: 11px ;font-weight: normal"><?php echo insert_get_time_to_days_ago(array('time' => $_smarty_tpl->tpl_vars['videolatest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['time_added']),$_smarty_tpl);?>
</span><br>
                    <span style="color:#999999;font-size: 11px ;font-weight: normal"><?php echo $_smarty_tpl->tpl_vars['videolatest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['postviewed'];?>
 lượt xem</span>
                </li>
                <?php endfor; endif; ?>
            </ul>
            <?php } else { ?>
                <ul>
                    <div>KHÔNG CÓ BÀI VIẾT NÀO</div>
                </ul>
            <?php }?>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['cname2']->value=="video-bong-da") {?>
    
        <script type="text/javascript">
            $(document).ready(function(){

                 $("#entries-content-ul").removeClass("col-1");
            });

        </script>
    
    <?php }?>
<div id="footer" class=""><?php }} ?>
