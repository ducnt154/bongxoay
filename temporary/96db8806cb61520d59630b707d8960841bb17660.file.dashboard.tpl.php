<?php /* Smarty version Smarty-3.1.16, created on 2014-02-28 15:09:22
         compiled from "/var/www/html/bongxoay/themes/administrator/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99407972753104432969803-65879292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96db8806cb61520d59630b707d8960841bb17660' => 
    array (
      0 => '/var/www/html/bongxoay/themes/administrator/dashboard.tpl',
      1 => 1392602080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99407972753104432969803-65879292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_name' => 0,
    'posts' => 0,
    'purl' => 0,
    'users' => 0,
    'membersprofilepicurl' => 0,
    'demo_mode' => 0,
    'adminurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531044329eb013_83818429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531044329eb013_83818429')) {function content_531044329eb013_83818429($_smarty_tpl) {?> 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="#"><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
 Admin Panel</a> &rsaquo; <a href="#">Dashboard</a></div> 
        </div>
		<div class="grid-1">
           <div class="title-grid">Statics</div>        
           <div class="content-gird">
        <!-- Information data -->
        <div class="information-data">
            <div class="date">
                <p class="date-figures"><?php echo insert_get_total_m3(array(),$_smarty_tpl);?>
</p>
                <p class="date-title">Total users</p>
            </div>
            <div class="date">
                <p class="date-figures"><?php echo insert_get_total_v5(array(),$_smarty_tpl);?>
</p>
                <p class="date-title">Total Posts</p>
            </div>
            <div class="date">
                <p class="date-figures"><?php echo insert_get_total_v4(array(),$_smarty_tpl);?>
</p>
                <p class="date-title">New Posts</p>
            </div>
            <div class="date">
                <p class="date-figures"><?php echo insert_get_total_v2(array(),$_smarty_tpl);?>
</p>
                <p class="date-title">Reported Posts</p>
            </div>
			<div class="date date-last">
                <p class="date-figures"><?php echo insert_get_total_v1(array(),$_smarty_tpl);?>
</p>
                <p class="date-title">Posts Awaiting Validation</p>
            </div>
        </div>
        <!-- Information data end -->
			</div>
        </div>
        		        <!--Pictures-->
        <div class="grid-2">
           <div class="title-grid">Latest Posts</div>
           <div class="content-gird">
          		 <ul class="gallery">
				 <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['posts']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
            	   <li><a class="fancybox" href="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t/l-<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pic'];?>
">  <img src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t/s-<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pic'];?>
" width="88px" alt=""  /></a>
                         <ul class="img_options">
                            <li><a class="zoom fancybox" href="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t/l-<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pic'];?>
"><span>View</span></a></li> 
                         </ul>
                   </li>
				 <?php endfor; endif; ?>  
				</ul>
                <div class="clear"> </div>
                </div>
        </div>
		<!--Pictures end-->
        
		<!--Users-->
        <div class="grid-2 last right">
           <div class="title-grid">Latest Users</div>
           <div class="content-gird">
          	   <div class="users-list">
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
                <div class="user">
                	<div class="user-avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['membersprofilepicurl']->value;?>
/thumbs/<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['profilepicture']=='') {?>noprofilepicture.jpg<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['profilepicture'];?>
<?php }?>"></div>
                    <div class="user-info">
                    <div class="user-name"><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'];?>
</div>
                    <div class="user-email"><?php if ($_smarty_tpl->tpl_vars['demo_mode']->value=="1") {?>Email is hidden in demo mode<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['email'];?>
<?php }?></div>
                    <div class="user-link"><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/users_edit.php?ID=<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
">Edit</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/users_all.php?delete=1&ID=<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
">Delete</a></div>
                    </div>
                    <div class="clear"> </div>
                </div>	
				<?php endfor; endif; ?>
                <div class="clear"> </div>
                </div>
            </div>
        </div>
		<!--Users end-->
		        
        
        
        
			</div><!-- #content-->
		</div><!-- #container-->

		<?php echo $_smarty_tpl->getSubTemplate ('administrator/left_side.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        	</div><!-- #container main-->
<?php }} ?>
