<?php /* Smarty version 2.6.6, created on 2014-07-08 22:48:21
         compiled from administrator/posts_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'return_youtube2', 'administrator/posts_edit.tpl', 56, false),array('insert', 'return_fod2', 'administrator/posts_edit.tpl', 58, false),array('insert', 'return_vfy2', 'administrator/posts_edit.tpl', 60, false),array('insert', 'return_vmo2', 'administrator/posts_edit.tpl', 62, false),array('modifier', 'date_format', 'administrator/posts_edit.tpl', 176, false),)), $this); ?>
 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/dashboard.php"><?php echo $this->_tpl_vars['site_name']; ?>
 Admin Panel</a> &rsaquo; Users &rsaquo; Edit Post #<?php echo $this->_tpl_vars['post']['PID']; ?>
</div> 
        </div>

		<?php if ($this->_tpl_vars['message'] != ""): ?>
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert green hideit"><p><span class="green-icon"></span><?php echo $this->_tpl_vars['message']; ?>
</p></div>
           </div> 
		<!--Alerts end-->
		<?php endif; ?>
		<?php if ($this->_tpl_vars['error'] != ""): ?>
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert red hideit"><p><span class="red-icon"></span><?php echo $this->_tpl_vars['error']; ?>
</p></div>
           </div> 
		<!--Alerts end-->
		<?php endif; ?>

		<!--Form-->
        <div class="grid-1">
           <div class="title-grid">Edit Post</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="<?php echo $this->_tpl_vars['adminurl']; ?>
/posts_edit.php?PID=<?php echo $this->_tpl_vars['post']['PID']; ?>
">
                 <div class="elem">
                        <label>Post ID:</label>
                        <div class="indent">
                            <label><?php echo $this->_tpl_vars['post']['PID']; ?>
</label>
							<a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/posts_all.php?delete=1&PID=<?php echo $this->_tpl_vars['post']['PID']; ?>
" class="right" style="color:red;">Delet Post</a>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>Post:</label>
                        <div class="indent">
									<?php if ($this->_tpl_vars['post']['pic'] != ""): ?>
										<ul class="gallery">
										   <li><a class="fancybox" href="<?php echo $this->_tpl_vars['purl']; ?>
/t/l-<?php echo $this->_tpl_vars['post']['pic']; ?>
">  <img src="<?php echo $this->_tpl_vars['purl']; ?>
/t/s-<?php echo $this->_tpl_vars['post']['pic']; ?>
" width="88px" alt=""  /></a>
												 <ul class="img_options">
													<li><a class="zoom fancybox" href="<?php echo $this->_tpl_vars['purl']; ?>
/t/l-<?php echo $this->_tpl_vars['post']['pic']; ?>
"><span>View</span></a></li> 
												 </ul>
										   </li>
										</ul>
									<?php else: ?>
										<?php if ($this->_tpl_vars['post']['youtube_key'] != ""): ?>
											<center><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_youtube2', 'value' => 'a', 'assign' => 'youtube', 'youtube' => $this->_tpl_vars['post']['youtube_key'])), $this);  echo $this->_tpl_vars['youtube']; ?>
</center>
                                        <?php elseif ($this->_tpl_vars['post']['fod_key'] != ""): ?>
											<center><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_fod2', 'value' => 'a', 'assign' => 'fod', 'fod' => $this->_tpl_vars['post']['fod_key'])), $this);  echo $this->_tpl_vars['fod']; ?>
</center>
										<?php elseif ($this->_tpl_vars['post']['vfy_key'] != ""): ?>
											<center><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_vfy2', 'value' => 'a', 'assign' => 'vfy', 'vfy' => $this->_tpl_vars['post']['vfy_key'])), $this);  echo $this->_tpl_vars['vfy']; ?>
</center>
										<?php elseif ($this->_tpl_vars['post']['vmo_key'] != ""): ?>
											<center><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_vmo2', 'value' => 'a', 'assign' => 'vmo', 'vmo' => $this->_tpl_vars['post']['vmo_key'])), $this);  echo $this->_tpl_vars['vmo']; ?>
</center>
										<?php else: ?>
											<center><?php echo $this->_tpl_vars['lang264']; ?>
</center>
										<?php endif; ?>
                                    <?php endif; ?>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Title:</label>
                        <div class="indent">
                            <input type="text" id="story" name="story" value="<?php echo $this->_tpl_vars['post']['story']; ?>
" class="medium tip-right" title="Post Title"> 
                            <br><br>
                        </div>
                 </div>
                 <div class="elem">
                     <label>Set giờ:</label>
                     <div class="indent">
                         <input type="text" id="time_added" name="time_added" value="<?php echo $this->_tpl_vars['datetime']; ?>
" class="medium tip-right" title="Post Title">
                         <br><br>
                     </div>
                 </div>
				 <div class="elem">
                        <label>User Name:</label>
                        <div class="indent">
                            <label><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/users_edit.php?ID=<?php echo $this->_tpl_vars['post']['USERID']; ?>
" target="_blank"><?php echo $this->_tpl_vars['post']['username']; ?>
</a></label> 
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Channel:</label>
                        <div class="indent">
                         <select id="CID" name="CID" class="chzn-select medium-select select" >
						 <?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['channels']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>
                            <option value="<?php echo $this->_tpl_vars['channels'][$this->_sections['j']['index']]['CID']; ?>
" <?php if ($this->_tpl_vars['post']['CID'] == $this->_tpl_vars['channels'][$this->_sections['j']['index']]['CID']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['channels'][$this->_sections['j']['index']]['cname']; ?>
</option>
							<?php endfor; endif; ?>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Active:</label>
                        <div class="indent">
                         <select id="active" name="active" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['post']['active'] == '1'): ?>selected<?php endif; ?>>Active</option>
                            <option value="0" <?php if ($this->_tpl_vars['post']['active'] == '0'): ?>selected<?php endif; ?>>Not Active</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Phase:</label>
                        <div class="indent">
                         <select id="phase" name="phase" class="chzn-select medium-select select" > 
                            <option value="2" <?php if ($this->_tpl_vars['post']['phase'] == '2'): ?>selected<?php endif; ?>>Hot</option>
                            <option value="1" <?php if ($this->_tpl_vars['post']['phase'] == '1'): ?>selected<?php endif; ?>>Trending</option>
                            <option value="0" <?php if ($this->_tpl_vars['post']['phase'] == '0'): ?>selected<?php endif; ?>>Vote</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Likes:</label>
                        <div class="indent">
                            <input type="text" id="favclicks" name="favclicks" value="<?php echo $this->_tpl_vars['post']['favclicks']; ?>
" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Dislikes:</label>
                        <div class="indent">
                            <input type="text" id="unfavclicks" name="unfavclicks" value="<?php echo $this->_tpl_vars['post']['unfavclicks']; ?>
" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Tags:</label>
                        <div class="indent">
                            <input type="text" id="tags" name="tags" value="<?php echo $this->_tpl_vars['post']['tags']; ?>
" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Source:</label>
                        <div class="indent">
                            <input type="text" id="source" name="source" value="<?php echo $this->_tpl_vars['post']['source']; ?>
" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>NSFW:</label>
                        <div class="indent">
                         <select id="nsfw" name="nsfw" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['post']['nsfw'] == '1'): ?>selected<?php endif; ?>>Yes</option>
                            <option value="0" <?php if ($this->_tpl_vars['post']['nsfw'] == '0'): ?>selected<?php endif; ?>>No</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>IP:</label>
                        <div class="indent">
                            <input type="text" id="pip" name="pip" value="<?php echo $this->_tpl_vars['post']['pip']; ?>
" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>Uploaded Since:</label>
                        <div class="indent">
                            <label><?php echo ((is_array($_tmp=$this->_tpl_vars['post']['time_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['post']['time_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%I:%M %p") : smarty_modifier_date_format($_tmp, "%I:%M %p")); ?>
</label>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>Last Viewed:</label>
                        <div class="indent">
                            <label><?php echo ((is_array($_tmp=$this->_tpl_vars['post']['last_viewed'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['post']['last_viewed'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%I:%M %p") : smarty_modifier_date_format($_tmp, "%I:%M %p")); ?>
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

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'administrator/left_side.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        	</div><!-- #container main-->