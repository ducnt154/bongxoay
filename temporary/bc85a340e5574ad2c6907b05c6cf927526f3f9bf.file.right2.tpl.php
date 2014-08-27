<?php /* Smarty version Smarty-3.1.16, created on 2014-02-28 15:08:33
         compiled from "D:\Project\bongxoay\themes\right2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8451531044015e6434-98532061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc85a340e5574ad2c6907b05c6cf927526f3f9bf' => 
    array (
      0 => 'D:\\Project\\bongxoay\\themes\\right2.tpl',
      1 => 1393574613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8451531044015e6434-98532061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NSFWADS' => 0,
    'baseurl' => 0,
    'page' => 0,
    'newsrelated' => 0,
    'postfolder' => 0,
    'SEO' => 0,
    'truncate' => 0,
    'want_views' => 0,
    'recommended' => 0,
    'users' => 0,
    'membersprofilepicurl' => 0,
    'video' => 0,
    'hoibua' => 0,
    'purl' => 0,
    'binhbua' => 0,
    'boxindexmax' => 0,
    'lang277' => 0,
    'popular' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53104401ccb322_36508819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53104401ccb322_36508819')) {function content_53104401ccb322_36508819($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\Project\\bongxoay\\smarty\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_replace')) include 'D:\\Project\\bongxoay\\smarty\\libs\\plugins\\modifier.replace.php';
?>﻿	<div class="side-bar">
       <!-- <div class="s-300" id="bottom-s300">
            <?php if ($_SESSION['FILTER']=="0"&&$_smarty_tpl->tpl_vars['NSFWADS']->value) {?>
        	<?php echo insert_get_advertisement(array('AID' => 4),$_smarty_tpl);?>

            <?php } else { ?>
        	<?php echo insert_get_advertisement(array('AID' => 1),$_smarty_tpl);?>

			<?php }?>
        </div>-->
        <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
            <div class="custom-block">
                <h3 class="hot"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/channels/bong-hong">BẠN MUỐN XEM!</a></h3>
                <?php if ($_smarty_tpl->tpl_vars['page']->value==''/'xoay'/'') {?>
                <div class="custom-block-content">
                    <ul class="new_cungloai">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['f'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['f']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['name'] = 'f';
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['newsrelated']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                            <img style="height: 20px;width: 28px;border: none;" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/icon-new.gif">
                                <a title="<?php echo $_smarty_tpl->tpl_vars['newsrelated']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['title'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['newsrelated']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['newsrelated']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['story']);?>
.html<?php }?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                                <span><?php if ($_smarty_tpl->tpl_vars['truncate']->value=="1") {?><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['newsrelated']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['story']),20,"...",true);?>
<?php } else { ?><?php echo stripslashes($_smarty_tpl->tpl_vars['newsrelated']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['story']);?>
<?php }?></span>
                                </a>
                        </li>
                        <?php endfor; endif; ?>
                    </ul>
                </div>
                <?php } else { ?>
                <div class="custom-block-content">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['want_views']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <div style="height: 74px">
                        <a class="wrap" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['want_views']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['want_views']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <img class="hot" src="http://img.youtube.com/vi/<?php echo $_smarty_tpl->tpl_vars['want_views']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['youtube_key'];?>
/1.jpg" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['want_views']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
" />
                       <!-- <span><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['want_views']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']),87,"...",true);?>
</span></a><br>-->
                        <span><?php echo $_smarty_tpl->tpl_vars['want_views']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</span><br>
                        <span style="color:#999999;font-size: 11px ;font-weight: normal"><?php echo insert_get_time_to_days_ago(array('time' => $_smarty_tpl->tpl_vars['want_views']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time_added']),$_smarty_tpl);?>
</span><br>
                        <span style="color:#999999;font-size: 11px ;font-weight: normal"><?php echo $_smarty_tpl->tpl_vars['want_views']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['postviewed'];?>
 lượt xem</span>
                        </a>
                    </div>
                    <?php endfor; endif; ?>
                    <span style="float: right;font-size: 11px;color: #999999;margin-right: 6px;"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/channels/bong-hong">Xem thêm >><!--<img style="float: right;border: none;margin-top: 5px;margin-left:2px" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/readmore.png">--></a></span>
                </div>
                <?php }?>
            </div>
        </div>
        <div>
			<?php if ($_smarty_tpl->tpl_vars['recommended']->value=="2") {?>
            <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
                <div class="custom-block">
                    <h3 class="hoi-bua"><a href="#">BÓNG LĂN - SOPCAST</a></h3>
                    <div class="custom-block-content">
                        <?php echo $_smarty_tpl->getSubTemplate ('sopcast-home.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    </div>
                </div>
            </div>
            <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
				<div class="right-block">

					<h3 style="color: #00a5f0" class="top">TOP XOÁY</h3>
				<div class="right-block-content">
                	<table cellpadding="0" cellspacing="0" border="0" width="100%">
                    <tr>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <td>
                    <?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['profilepicture']=='') {?>
                    	<img src="http://graph.facebook.com/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['facebookid'],' ','');?>
/picture?type=normal" style="width:35px;height:35px;" alt="Profile Pic" />
                    <?php } else { ?>
                    	<img src="<?php echo $_smarty_tpl->tpl_vars['membersprofilepicurl']->value;?>
/thumbs/<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['profilepicture'];?>
?<?php echo time();?>
" style="width:35px;height:35px;" alt="Profile Pic" />
                    <?php }?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/user/<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'];?>
"  style="overflow: hidden;text-overflow: ellipsis; color:#fea700;"><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'];?>
</a>
                    <br />
                    Bài: <?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['posts'];?>

                    <br />
                    Điểm: <?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['points'];?>

                    </td>

                    <?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['rank']%2==0) {?>
                    </tr><tr>
                    <?php }?>

                    <?php endfor; endif; ?>
                    </table>


                </div>
				</div>
			</div>
             <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
				<div class="custom-block">
					<h3 class="hot"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/channels/video-bong-da">VIDEO HOT</a></h3>
				<div class="custom-block-content">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['video']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<div style="height:74px">
                        <a class="wrap" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['video']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['video']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
							<img class="hot" src="http://img.youtube.com/vi/<?php echo $_smarty_tpl->tpl_vars['video']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['youtube_key'];?>
/1.jpg" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['video']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
" />
                            <span><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['video']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']),70,"...",true);?>
</span><br>
                            <span style="color:#999999;font-size: 11px ;font-weight: normal"><?php echo insert_get_time_to_days_ago(array('time' => $_smarty_tpl->tpl_vars['video']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time_added']),$_smarty_tpl);?>
</span><br>
                            <span style="color:#999999;font-size: 11px ;font-weight: normal;"><?php echo $_smarty_tpl->tpl_vars['video']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['postviewed'];?>
 lượt xem</span>
                            </a>
						</div>
					<?php endfor; endif; ?>

                </div>
				</div>
			</div>
           <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
                <div class="right-block">

                    <h3 class="hoi-bua"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/channels/hoi-bua-dap-bua">HỎI BỪA ĐÁP BỰA</a></h3>
                    <div class="right-block-content">

                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['hoibua']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                        <div>
                            <a class="wrap" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['hoibua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['hoibua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                            <?php if ($_smarty_tpl->tpl_vars['hoibua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['nsfw']=="1"&&$_SESSION['FILTER']!="0") {?><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/nsfw_thumb.jpg" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['hoibua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
" align="left" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t/s-<?php echo $_smarty_tpl->tpl_vars['hoibua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pic'];?>
" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['hoibua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
" /><?php }?></a>
                            <a class="wrap" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['hoibua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['hoibua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                            <span><?php if ($_smarty_tpl->tpl_vars['truncate']->value=="1") {?><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['binhbua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']),20,"...",true);?>
<?php } else { ?><?php echo stripslashes($_smarty_tpl->tpl_vars['hoibua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
<?php }?></span></a>

                            <br />
                            <a style="color: #fea700" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/user/<?php echo stripslashes($_smarty_tpl->tpl_vars['hoibua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
"><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['binhbua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']),20,"...",true);?>
</a>

                        </div>
                        <?php endfor; endif; ?>

                    </div>
                </div>
            </div>
           <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
                <div class="right-block">
                    <h3><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/channels/binhbua">BÌNH BỰA</a></h3>
                    <div class="right-block-content">

                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['binhbua']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                        <div>
                            <a class="wrap" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['binhbua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['binhbua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                            <?php if ($_smarty_tpl->tpl_vars['binhbua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['nsfw']=="1"&&$_SESSION['FILTER']!="0") {?><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/nsfw_thumb.jpg" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['binhbua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
" align="left" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t/s-<?php echo $_smarty_tpl->tpl_vars['binhbua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pic'];?>
" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['binhbua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
" /><?php }?></a>
                            <a class="wrap" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['binhbua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['binhbua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                            <span><?php if ($_smarty_tpl->tpl_vars['truncate']->value=="1") {?><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['binhbua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']),20,"...",true);?>
<?php } else { ?><?php echo stripslashes($_smarty_tpl->tpl_vars['binhbua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
<?php }?></span></a>

                            <br />
                            <a style="color: #fea700" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/user/<?php echo stripslashes($_smarty_tpl->tpl_vars['binhbua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
"><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['binhbua']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']),20,"...",true);?>
</a>

                        </div>
                        <?php endfor; endif; ?>

                    </div>
                </div>
            </div>
			<?php }?>

		</div>
         <div id="moving-boxes" style="width: 295px;color: #fff;">
             <div class="s-300" id="bottom-s300">
               <!-- <?php echo insert_get_advertisement(array('AID' => 2),$_smarty_tpl);?>
-->
                 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/channels/bong-hong"><img src="../images/banner/nguoidep.gif"></a>
            </div>
             <div class="s-300" id="bottom-s300">
                 <div class="fb-like-box" data-href="http://www.facebook.com/bongxoay" data-width="300" data-height="" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
             </div>
	        <div class="dieukhoan">
                <?php echo $_smarty_tpl->getSubTemplate ('proviso.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
		<?php if ($_smarty_tpl->tpl_vars['boxindexmax']->value>0) {?>
			<div id="jsid-buzz-block" class="popular-block" data-boxIndex="0" data-boxIndexMax="<?php echo $_smarty_tpl->tpl_vars['boxindexmax']->value;?>
" data-boxSize="3">
				<h3><?php echo $_smarty_tpl->tpl_vars['lang277']->value;?>

					<span style="float: right; color: #999; font-size: 13px;">
					<a id="jsid-popular-prev" class="badge-buzz-more" data-change="-1" href="javascript:void(0);" style="color:grey;cursor:default;">&laquo; Prev</a> ·
					<a id="jsid-popular-next" class="badge-buzz-more" data-change="1" href="javascript:void(0);">Next &raquo;</a>
					</span>
				</h3>
				<ol>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['popular']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					<li class="badge-buzz-post-batch badge-buzz-post-batch-<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']>"15") {?>5<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']>"12") {?>4<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']>"9") {?>3<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']>"6") {?>2<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']>"3") {?>1<?php } else { ?>0<?php }?>" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']>"3") {?>style="display:none;"<?php }?> >
					<a class="wrap" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['popular']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['popular']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1);GAG.Track.event('clicked', 'psb.p', '0', '5665836');">
						<div class="mask">
							<?php if ($_smarty_tpl->tpl_vars['popular']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['nsfw']=="1"&&$_SESSION['FILTER']!="0") {?><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/nsfw_thumb.jpg" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['popular']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t/s-<?php echo $_smarty_tpl->tpl_vars['popular']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pic'];?>
" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['popular']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
" /><?php }?>
						</div>
						<h4><?php if ($_smarty_tpl->tpl_vars['truncate']->value=="1") {?><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['popular']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']),20,"...",true);?>
<?php } else { ?><?php echo stripslashes($_smarty_tpl->tpl_vars['popular']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
<?php }?></h4>
						<p class="meta">
							<span class="comment"><fb:comments-count href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['popular']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
/<?php if ($_smarty_tpl->tpl_vars['SEO']->value=="1") {?><?php echo makeseo($_smarty_tpl->tpl_vars['popular']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story']);?>
.html<?php }?>"></fb:comments-count></span>
							<span class="loved"><?php echo $_smarty_tpl->tpl_vars['popular']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['favclicks'];?>
</span>
						</p>


					</a>
					</li>
				<?php endfor; endif; ?>
				</ol>
			</div>
		<?php }?>

	</div>
    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=455350294564519";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <?php }} ?>
