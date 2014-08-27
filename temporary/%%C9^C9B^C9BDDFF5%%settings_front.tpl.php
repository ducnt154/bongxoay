<?php /* Smarty version 2.6.6, created on 2014-06-10 23:13:54
         compiled from administrator/settings_front.tpl */ ?>
 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/dashboard.php"><?php echo $this->_tpl_vars['site_name']; ?>
 Admin Panel</a> &rsaquo; Settings &rsaquo; Front page</div> 
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
           <div class="title-grid">Front Page Settings</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="<?php echo $this->_tpl_vars['adminurl']; ?>
/settings_front.php">
                 <div class="elem">
                        <label>Number Of Items: </label>
                        <div class="indent">
                            <input type="text" id="items_per_page" name="items_per_page" value="<?php echo $this->_tpl_vars['items_per_page']; ?>
" class="medium tip-right" title="Number of posts in each page">
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Ajax Reload:</label>
                        <div class="indent">
                         <select id="AUTOSCROLL" name="AUTOSCROLL" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['AUTOSCROLL'] == '1'): ?>selected<?php endif; ?>>Ajax Reload</option>
                            <option value="0" <?php if ($this->_tpl_vars['AUTOSCROLL'] == '0'): ?>selected<?php endif; ?>>Normal Pagination</option>
                        </select>   
                        </div>
                 </div>
				                  
                 <div class="elem">
                        <label>Auto Scroll Reloads: </label>
                        <div class="indent">
                            <input type="text" id="autoscroll_reloads" name="autoscroll_reloads" value="<?php echo $this->_tpl_vars['autoscroll_reloads']; ?>
" class="medium tip-right" title="Number of reloads before moving to the next page">
                        </div>
                 </div>
 
            	 <div class="elem">
                        <label>Thumbnails View:</label>
                        <div class="indent">
                         <select id="thumbs" name="thumbs" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['thumbs'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['thumbs'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Safe Mode:</label>
                        <div class="indent">
                         <select id="safemode" name="safemode" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['safemode'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['safemode'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>RSS :</label>
                        <div class="indent">
                         <select id="RSS" name="RSS" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['RSS'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['RSS'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Top Posts Page:</label>
                        <div class="indent">
                         <select id="topposts" name="topposts" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['topposts'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['topposts'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Top Users Page:</label>
                        <div class="indent">
                         <select id="topusers" name="topusers" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['topusers'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['topusers'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Trending Page:</label>
                        <div class="indent">
                         <select id="trendingenabled" name="trendingenabled" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['trendingenabled'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['trendingenabled'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Fixing posts:</label>
                        <div class="indent">
                         <select id="fixenabled" name="fixenabled" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['fixenabled'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['fixenabled'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Channels :</label>
                        <div class="indent">
                         <select id="channels" name="channels" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['channels'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['channels'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Allow Vote Page For Guests:</label>
                        <div class="indent">
                         <select id="voteforvisitor" name="voteforvisitor" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['voteforvisitor'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['voteforvisitor'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Truncate Titles:</label>
                        <div class="indent">
                         <select id="truncate" name="truncate" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['truncate'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['truncate'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Recommened Posts In Post Page:</label>
                        <div class="indent">
                         <select id="recommended" name="recommended" class="chzn-select medium-select select" > 
                            <option value="0" <?php if ($this->_tpl_vars['recommended'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                			<option value="1" <?php if ($this->_tpl_vars['recommended'] == '1'): ?>selected<?php endif; ?>>Under Post</option>
                			<option value="2" <?php if ($this->_tpl_vars['recommended'] == '2'): ?>selected<?php endif; ?>>At Right Side</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Recommended Posts In Main Pages:</label>
                        <div class="indent">
                         <select id="rhome" name="rhome" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['rhome'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['rhome'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Redirection After Registeration:</label>
                        <div class="indent">
                         <select id="regredirect" name="regredirect" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['regredirect'] == '1'): ?>selected<?php endif; ?>>Index</option>
                			<option value="0" <?php if ($this->_tpl_vars['regredirect'] == '0'): ?>selected<?php endif; ?>>Settings</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Index Page:</label>
                        <div class="indent">
                         <select id="index" name="index" class="chzn-select medium-select select" > 
                            <option value="0" <?php if ($this->_tpl_vars['index'] == '0'): ?>selected<?php endif; ?>>Hot</option>
                			<option value="1" <?php if ($this->_tpl_vars['index'] == '1'): ?>selected<?php endif; ?>>Trending</option>
                			<option value="2" <?php if ($this->_tpl_vars['index'] == '2'): ?>selected<?php endif; ?>>Vote</option>
                        </select>   
                        </div>
                 </div>
				                 
                 <div class="elem">
                        <label>Post Folder: </label>
                        <div class="indent">
                            <input type="text" id="postfolder" name="postfolder" value="<?php echo $this->_tpl_vars['postfolder']; ?>
" class="medium tip-right" title="Virtual folder name in posts URL. Changing this will require .htaccess changes.">
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Share Button #1 :</label>
                        <div class="indent">
                         <select id="share1" name="share1" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['share1'] == '1'): ?>selected<?php endif; ?>>Twitter Button</option>
                			<option value="2" <?php if ($this->_tpl_vars['share1'] == '2'): ?>selected<?php endif; ?>>Facebook Sharer</option>
                			<option value="3" <?php if ($this->_tpl_vars['share1'] == '3'): ?>selected<?php endif; ?>>Facebook Like</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Share Button #2 :</label>
                        <div class="indent">
                         <select id="share2" name="share2" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['share2'] == '1'): ?>selected<?php endif; ?>>Twitter Button</option>
                			<option value="2" <?php if ($this->_tpl_vars['share2'] == '2'): ?>selected<?php endif; ?>>Facebook Sharer</option>
                			<option value="3" <?php if ($this->_tpl_vars['share2'] == '3'): ?>selected<?php endif; ?>>Facebook Like</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Popular Posts In Post Page:</label>
                        <div class="indent">
                         <select id="populargags" name="populargags" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['populargags'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['populargags'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Featured Posts In Main Pages:</label>
                        <div class="indent">
                         <select id="topgags" name="topgags" class="chzn-select medium-select select" > 
                            <option value="0" <?php if ($this->_tpl_vars['topgags'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                            <option value="1" <?php if ($this->_tpl_vars['topgags'] == '1'): ?>selected<?php endif; ?>>Daily</option>
                            <option value="2" <?php if ($this->_tpl_vars['topgags'] == '2'): ?>selected<?php endif; ?>>Weekly</option>
                            <option value="3" <?php if ($this->_tpl_vars['topgags'] == '3'): ?>selected<?php endif; ?>>Monthly</option>
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