<?php /* Smarty version Smarty-3.1.16, created on 2014-03-26 11:01:35
         compiled from "/var/www/html/bongxoay/themes/sopcast-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203083146653104430a9bb44-00136344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3df17c6a07fefaaca57a071c50a54b935da8578f' => 
    array (
      0 => '/var/www/html/bongxoay/themes/sopcast-home.tpl',
      1 => 1395800257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203083146653104430a9bb44-00136344',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53104430ac7996_89948501',
  'variables' => 
  array (
    'sopcast' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53104430ac7996_89948501')) {function content_53104430ac7996_89948501($_smarty_tpl) {?><div class="link-sopcast" style="padding-top: 2px">
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['f'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['f']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['name'] = 'f';
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['sopcast']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
    <?php if ($_smarty_tpl->tpl_vars['sopcast']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['result']=='') {?>
    <div class="title_sop" style="padding: 0px">
        <h2 style="text-align: center;text-transform: uppercase;padding: 0px"><?php echo $_smarty_tpl->tpl_vars['sopcast']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['title'];?>
</h2>
    </div>
        <?php echo $_smarty_tpl->tpl_vars['sopcast']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['introtext'];?>

    <?php } else { ?>
    <div class="title_sop" style="padding: 0px">
    <h2 style="text-align: center;color: #00a5f0">Kết quả <?php echo $_smarty_tpl->tpl_vars['sopcast']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['title'];?>
</h2>
    <?php echo $_smarty_tpl->tpl_vars['sopcast']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['result'];?>

    <?php }?>
    <?php endfor; endif; ?>
</div><?php }} ?>
