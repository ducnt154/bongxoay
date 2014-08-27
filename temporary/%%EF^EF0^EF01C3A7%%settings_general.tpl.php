<?php /* Smarty version 2.6.6, created on 2014-06-15 22:00:30
         compiled from administrator/settings_general.tpl */ ?>
 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/dashboard.php"><?php echo $this->_tpl_vars['site_name']; ?>
 Admin Panel</a> &rsaquo; Settings &rsaquo; General Settings</div> 
        </div>
		<?php if ($this->_tpl_vars['message'] != ""): ?>
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert green hideit"><p><span class="green-icon"></span><?php echo $this->_tpl_vars['message']; ?>
</p></div>
           </div> 
		<!--Alerts end-->
		<?php endif; ?>

				 <!--Form-->
        <div class="grid-1">
           <div class="title-grid">General Settings</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="<?php echo $this->_tpl_vars['adminurl']; ?>
/settings_general.php">
                 <div class="elem">
                        <label>Site Name: </label>
                        <div class="indent">
                            <input type="text" id="site_name" name="site_name" value="<?php echo $this->_tpl_vars['site_name']; ?>
" class="medium tip-right" title="Website Slogan">
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Script9 Replacement: </label>
                        <div class="indent">
                            <input type="text" id="website_name" name="website_name" value="<?php echo $this->_tpl_vars['website_name']; ?>
" class="medium tip-right" title="Text that will replace script9 within the site">
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Site E-mail:</label>
                        <div class="indent">
                            <input type="text" id="site_email" name="site_email" value="<?php echo $this->_tpl_vars['site_email']; ?>
" class="medium" title="Email used to send / receive site contacts"> 
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Email Sender: </label>
                        <div class="indent">
                            <input type="text" id="contact_email" name="contact_email" value="<?php echo $this->_tpl_vars['contact_email']; ?>
" class="medium tip-right" title="The sender name in site emails">
                        </div>
                 </div>
                 
            	 <div class="elem">
                        <label>New posts moderation:</label>
                        <div class="indent">
                         <select id="approve_stories" name="approve_stories" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['approve_stories'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['approve_stories'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Deleting dislikes: </label>
                        <div class="indent">
                            <input type="text" id="mno" name="mno" value="<?php echo $this->_tpl_vars['mno']; ?>
" class="medium tip-right" title="Dislikes needed to delete post">
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Trending likes limit: </label>
                        <div class="indent">
                            <input type="text" id="mtrend" name="mtrend" value="<?php echo $this->_tpl_vars['mtrend']; ?>
" class="medium tip-right" title="Likes needed to move post to trending page">
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Hot likes limit: </label>
                        <div class="indent">
                            <input type="text" id="myes" name="myes" value="<?php echo $this->_tpl_vars['myes']; ?>
" class="medium tip-right" title="Likes needed to move post to hot page">
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Upload quote: </label>
                        <div class="indent">
                            <input type="text" id="quota" name="quota" value="<?php echo $this->_tpl_vars['quota']; ?>
" class="medium tip-right" title="Number of uploads allowed per day">
                        </div>
                 </div>
                 
            	 <div class="elem">
                        <label>Video Uploads:</label>
                        <div class="indent">
                         <select id="vupload" name="vupload" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['vupload'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['vupload'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>NSFW ADS:</label>
                        <div class="indent">
                         <select id="NSFWADS" name="NSFWADS" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['NSFWADS'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['NSFWADS'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>

				 <input type="hidden" id="submitform" name="submitform" value="1" >
				 <div style="width:330px;margin:20px;">
				<input type="submit" class="button-a red right" value="Save Settings">
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