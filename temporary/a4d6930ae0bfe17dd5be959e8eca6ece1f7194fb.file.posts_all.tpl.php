<?php /* Smarty version Smarty-3.1.16, created on 2014-02-28 15:09:29
         compiled from "/var/www/html/bongxoay/themes/administrator/posts_all.tpl" */ ?>
<?php /*%%SmartyHeaderCode:633557280531044397a6515-42317604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4d6930ae0bfe17dd5be959e8eca6ece1f7194fb' => 
    array (
      0 => '/var/www/html/bongxoay/themes/administrator/posts_all.tpl',
      1 => 1392602080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '633557280531044397a6515-42317604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adminurl' => 0,
    'site_name' => 0,
    'message' => 0,
    'error' => 0,
    'posts' => 0,
    'baseurl' => 0,
    'postfolder' => 0,
    'purl' => 0,
    'page' => 0,
    'pagelinks' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531044398b6b79_68092778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531044398b6b79_68092778')) {function content_531044398b6b79_68092778($_smarty_tpl) {?> 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/dashboard.php"><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
 Admin Panel</a> &rsaquo; Posts &rsaquo; All Posts</div> 
        </div>

		<?php if ($_smarty_tpl->tpl_vars['message']->value!='') {?>
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert green hideit"><p><span class="green-icon"></span><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p></div>
           </div> 
		<!--Alerts end-->
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['error']->value!='') {?>
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert red hideit"><p><span class="red-icon"></span><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p></div>
           </div> 
		<!--Alerts end-->
		<?php }?>

		<!--Table Styling-->
      <div class="grid-1">
           <div class="title-grid">Posts</div>
           <div class="content-gird">
            	<table class="display">
                <thead>
                    <tr>
                        <th class="th_title">ID</th>
                        <th class="th_title">Browse</th>
                        <th class="th_avatar">Image</th>
                        <th class="th_status">Title</th>
                        <th class="th_status">User Name</th>
                        <th class="th_status">Channel</th>
                        <th class="th_status">Likes</th>
                        <th class="th_status">Dislikes</th>

                        <th class="th_date">Status</th>
                        <th class="th_date">Phase</th>
                        <th class="th_author">Delete</th>
                    </tr>
                </thead>
                <tbody>
				
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
				   <tr class="item">
                        <td class="subject"><?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
</td>
                        <td class="subject"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
" target="_blank">Browse</a></td>
                        <td><span class="published">
						<?php if ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pic']!='') {?>
							<ul class="gallery">
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
							</ul>
						<?php } else { ?>
							<?php if ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['youtube_key']!='') {?>
							YouTube
                            <?php } elseif ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['fod_key']!='') {?>
							FunnyOrDie Video
							<?php } elseif ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['vfy_key']!='') {?>
							Videofy
							<?php } elseif ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['vmo_key']!='') {?>
							Videmo
							<?php } else { ?>
							Something wrong with this post
							<?php }?>
                        <?php }?>
							
						</span></td>
                        <td><span class="published"><?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['story'];?>
</span></td>
                        <td><span class="published"><?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'];?>
</span></td>
                        <td><span class="published"><?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cname'];?>
</span></td>
                        <td><span class="published"><?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['favclicks'];?>
</span></td>
                        <td><span class="published"><?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['unfavclicks'];?>
</span></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']=="1") {?>Active<?php } else { ?>Not Active<?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['phase']=="0") {?>Vote<?php } elseif ($_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['phase']=="1") {?>Trending<?php } else { ?>Hot<?php }?></td>
                        <td class="name">
							<ul class="button-list-1">
								<li><a class="button-a red" href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/posts_edit.php?PID=<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
"><span class="edits icon-white"></span></a></li>
								<li><a class="button-a red" href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/posts_all.php?delete=1&PID=<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><span class="del icon-white"></span></a></li>
						    </ul>
						</td>
                    </tr>
				 <?php endfor; endif; ?>
				 <tr>
                    <td colspan="11">
                    <?php echo $_smarty_tpl->tpl_vars['pagelinks']->value;?>

                    </td>
                 </tr>
                </tbody>
            </table>
			
    		
           </div>
           </div>
		<!--Table Styling end-->
             
        
        
        
			</div><!-- #content-->
		</div><!-- #container-->

		<?php echo $_smarty_tpl->getSubTemplate ('administrator/left_side.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        	</div><!-- #container main-->
<?php }} ?>
