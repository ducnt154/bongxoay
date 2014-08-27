<?php /* Smarty version Smarty-3.1.16, created on 2014-02-28 15:09:22
         compiled from "/var/www/html/bongxoay/themes/administrator/left_side.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143974315853104432a41656-43662117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '971da55ca3c5485f12ad7ca14d1975b641ef7804' => 
    array (
      0 => '/var/www/html/bongxoay/themes/administrator/left_side.tpl',
      1 => 1392602080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143974315853104432a41656-43662117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main_menu' => 0,
    'adminurl' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53104432af16d3_87078393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53104432af16d3_87078393')) {function content_53104432af16d3_87078393($_smarty_tpl) {?><aside id="sideLeft">
			 <span class="categories">Administrator Panel</span>
   <ul class="menu">
		<li <?php if ($_smarty_tpl->tpl_vars['main_menu']->value=="1") {?>class="expand"<?php }?>>
			<a href="#"><span class="four-prong icon">General</span><span class="num">8</span></a>
			<ul class="acitem">
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/dashboard.php"><span class="dashboard icon">Dashboard</span></a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/settings_general.php"><span class="charts icon">General Settings</span></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/settings_front.php"><span class="gallery-pic icon">Front Page</span></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/settings_social.php"><span class="cal icon">Social Connect</span></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/settings_wm.php"><span class="conversations icon">Watermarking</span></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/settings_points.php"><span class="steps icon">Points</span></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/settings_seo.php"><span class="steps icon">SEO</span></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/settings_static.php"><span class="buttons-icons icon">Static Pages</span></a></li>
			</ul>
		</li>
		<li <?php if ($_smarty_tpl->tpl_vars['main_menu']->value=="2") {?>class="expand"<?php }?>>
			<a href="#"><span class="four-prong icon">Posts</span><span class="num">5</span></a>
			<ul class="acitem">
            	<li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/posts_all.php"><span class="forms icon">All Posts</span></a></li>
            	<li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/posts_search.php"><span class="w-editor icon">Search Posts</span></a></li>
       			<li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/posts_approve.php"><span class="tables icon">Approve Posts</span></a></li>
       			<li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/posts_reports.php"><span class="tables icon">Posts Reports</span></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/posts_channels.php"><span class="grids icon">Channels</span></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/posts_channels_search.php"><span class="w-editor icon">Search Channels</span></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/posts_channels_new.php"><span class="grids icon">Create New Channels</span></a></li>
			</ul>
		</li>
		<li <?php if ($_smarty_tpl->tpl_vars['main_menu']->value=="3") {?>class="expand"<?php }?>>
			<a href="#"><span class="four-prong icon">Users</span><span class="num">3</span></a>
			<ul class="acitem">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/users_all.php"><span class="invoice icon">All Users</span></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/users_search.php"><span class="w-editor icon">Search Users</span></a></li>
       		    <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/users_banned.php"><span class="errors icon">Banned Users</span></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/users_nl.php"><span class="connection icon">News Letter</span></a></li>
			</ul>
		</li>
		<li <?php if ($_smarty_tpl->tpl_vars['main_menu']->value=="4") {?>class="expand"<?php }?>>
			<a href="#"><span class="four-prong icon">Administrators</span><span class="num">2</span></a>
			<ul class="acitem">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/admins_all.php"><span class="typo icon">All Admins</span></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/admins_search.php"><span class="w-editor icon">Search Admins</span></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/admins_new.php"><span class="typo icon">Create New Admin</span></a></li>
			</ul>
		</li>
		<li <?php if ($_smarty_tpl->tpl_vars['main_menu']->value=="5") {?>class="expand"<?php }?>>
			<a href="#"><span class="four-prong icon">Advertising</span><span class="num">2</span></a>
			<ul class="acitem">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/ads_all.php"><span class="files icon">All Ads</span></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/ads_search.php"><span class="w-editor icon">Search Ads</span></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/ads_new.php"><span class="files icon">Create New Ad</span></a></li>
			</ul>
		</li>
		<li <?php if ($_smarty_tpl->tpl_vars['main_menu']->value=="6") {?>class="expand"<?php }?>>
			<a href="#"><span class="four-prong icon">Addons</span><span class="num"><?php echo count($_smarty_tpl->tpl_vars['addons']->value);?>
</span></a>
			<ul class="acitem">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['addons']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/addons_<?php echo $_smarty_tpl->tpl_vars['addons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['code'];?>
.php"><span class="files icon"><?php echo $_smarty_tpl->tpl_vars['addons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</span></a></li>
			<?php endfor; endif; ?>
			</ul>
		</li>
	</ul>
        
	</div>
		</aside><!-- #sideLeft --><?php }} ?>
