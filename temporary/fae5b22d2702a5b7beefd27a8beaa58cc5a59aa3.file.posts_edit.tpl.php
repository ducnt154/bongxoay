<?php /* Smarty version Smarty-3.1.16, created on 2014-02-28 15:09:36
         compiled from "/var/www/html/bongxoay/themes/administrator/posts_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119426296053104440a37dc9-50644084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fae5b22d2702a5b7beefd27a8beaa58cc5a59aa3' => 
    array (
      0 => '/var/www/html/bongxoay/themes/administrator/posts_edit.tpl',
      1 => 1392602081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119426296053104440a37dc9-50644084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adminurl' => 0,
    'site_name' => 0,
    'post' => 0,
    'message' => 0,
    'error' => 0,
    'purl' => 0,
    'youtube' => 1,
    'fod' => 1,
    'vfy' => 1,
    'vmo' => 1,
    'lang264' => 0,
    'channels' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53104440bc3d70_63066495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53104440bc3d70_63066495')) {function content_53104440bc3d70_63066495($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/bongxoay/smarty/libs/plugins/modifier.date_format.php';
?> 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/dashboard.php"><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
 Admin Panel</a> &rsaquo; Users &rsaquo; Edit Post #<?php echo $_smarty_tpl->tpl_vars['post']->value['PID'];?>
</div> 
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

		<!--Form-->
        <div class="grid-1">
           <div class="title-grid">Edit Post</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/posts_edit.php?PID=<?php echo $_smarty_tpl->tpl_vars['post']->value['PID'];?>
">
                 <div class="elem">
                        <label>Post ID:</label>
                        <div class="indent">
                            <label><?php echo $_smarty_tpl->tpl_vars['post']->value['PID'];?>
</label>
							<a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/posts_all.php?delete=1&PID=<?php echo $_smarty_tpl->tpl_vars['post']->value['PID'];?>
" class="right" style="color:red;">Delet Post</a>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>Post:</label>
                        <div class="indent">
									<?php if ($_smarty_tpl->tpl_vars['post']->value['pic']!='') {?>
										<ul class="gallery">
										   <li><a class="fancybox" href="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t/l-<?php echo $_smarty_tpl->tpl_vars['post']->value['pic'];?>
">  <img src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t/s-<?php echo $_smarty_tpl->tpl_vars['post']->value['pic'];?>
" width="88px" alt=""  /></a>
												 <ul class="img_options">
													<li><a class="zoom fancybox" href="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t/l-<?php echo $_smarty_tpl->tpl_vars['post']->value['pic'];?>
"><span>View</span></a></li> 
												 </ul>
										   </li>
										</ul>
									<?php } else { ?>
										<?php if ($_smarty_tpl->tpl_vars['post']->value['youtube_key']!='') {?>
											<center><?php $_smarty_tpl->assign('youtube' , insert_return_youtube2 (array('value' => 'a', 'youtube' => $_smarty_tpl->tpl_vars['post']->value['youtube_key']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->tpl_vars['youtube']->value;?>
</center>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['fod_key']!='') {?>
											<center><?php $_smarty_tpl->assign('fod' , insert_return_fod2 (array('value' => 'a', 'fod' => $_smarty_tpl->tpl_vars['post']->value['fod_key']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->tpl_vars['fod']->value;?>
</center>
										<?php } elseif ($_smarty_tpl->tpl_vars['post']->value['vfy_key']!='') {?>
											<center><?php $_smarty_tpl->assign('vfy' , insert_return_vfy2 (array('value' => 'a', 'vfy' => $_smarty_tpl->tpl_vars['post']->value['vfy_key']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->tpl_vars['vfy']->value;?>
</center>
										<?php } elseif ($_smarty_tpl->tpl_vars['post']->value['vmo_key']!='') {?>
											<center><?php $_smarty_tpl->assign('vmo' , insert_return_vmo2 (array('value' => 'a', 'vmo' => $_smarty_tpl->tpl_vars['post']->value['vmo_key']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->tpl_vars['vmo']->value;?>
</center>
										<?php } else { ?>
											<center><?php echo $_smarty_tpl->tpl_vars['lang264']->value;?>
</center>
										<?php }?>
                                    <?php }?>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Title:</label>
                        <div class="indent">
                            <input type="text" id="story" name="story" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['story'];?>
" class="medium tip-right" title="Post Title"> 
                            <br><br>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>User Name:</label>
                        <div class="indent">
                            <label><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/users_edit.php?ID=<?php echo $_smarty_tpl->tpl_vars['post']->value['USERID'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['post']->value['username'];?>
</a></label> 
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Channel:</label>
                        <div class="indent">
                         <select id="CID" name="CID" class="chzn-select medium-select select" >
						 <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['channels']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['CID'];?>
" <?php if ($_smarty_tpl->tpl_vars['post']->value['CID']==$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['CID']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['cname'];?>
</option>
							<?php endfor; endif; ?>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Active:</label>
                        <div class="indent">
                         <select id="active" name="active" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['post']->value['active']=="1") {?>selected<?php }?>>Active</option>
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['post']->value['active']=="0") {?>selected<?php }?>>Not Active</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Phase:</label>
                        <div class="indent">
                         <select id="phase" name="phase" class="chzn-select medium-select select" > 
                            <option value="2" <?php if ($_smarty_tpl->tpl_vars['post']->value['phase']=="2") {?>selected<?php }?>>Hot</option>
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['post']->value['phase']=="1") {?>selected<?php }?>>Trending</option>
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['post']->value['phase']=="0") {?>selected<?php }?>>Vote</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Likes:</label>
                        <div class="indent">
                            <input type="text" id="favclicks" name="favclicks" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['favclicks'];?>
" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Dislikes:</label>
                        <div class="indent">
                            <input type="text" id="unfavclicks" name="unfavclicks" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['unfavclicks'];?>
" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Tags:</label>
                        <div class="indent">
                            <input type="text" id="tags" name="tags" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['tags'];?>
" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Source:</label>
                        <div class="indent">
                            <input type="text" id="source" name="source" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['source'];?>
" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>NSFW:</label>
                        <div class="indent">
                         <select id="nsfw" name="nsfw" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['post']->value['nsfw']=="1") {?>selected<?php }?>>Yes</option>
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['post']->value['nsfw']=="0") {?>selected<?php }?>>No</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>IP:</label>
                        <div class="indent">
                            <input type="text" id="pip" name="pip" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['pip'];?>
" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>Uploaded Since:</label>
                        <div class="indent">
                            <label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['time_added']);?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['time_added'],"%I:%M %p");?>
</label>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>Last Viewed:</label>
                        <div class="indent">
                            <label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['last_viewed']);?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['last_viewed'],"%I:%M %p");?>
</label>
                        </div>
                 </div>
				 <input type="hidden" id="submitform" name="submitform" value="1" >
				 <div style="width:330px;margin:20px;">
				<input type="submit" class="button-a red right" value="Save Post">
				</div>
                 </form>
    		 <div class="clear"> </div>
             </div>
           </div>
        </div>  
		<!--Form end-->
             
        
        
        
			</div><!-- #content-->
		</div><!-- #container-->

		<?php echo $_smarty_tpl->getSubTemplate ('administrator/left_side.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        	</div><!-- #container main-->
<?php }} ?>
