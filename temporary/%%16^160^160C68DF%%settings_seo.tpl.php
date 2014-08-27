<?php /* Smarty version 2.6.6, created on 2014-04-21 00:00:19
         compiled from administrator/settings_seo.tpl */ ?>
 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/dashboard.php"><?php echo $this->_tpl_vars['site_name']; ?>
 Admin Panel</a> &rsaquo; Settings &rsaquo; SEO</div> 
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
           <div class="title-grid">SEO</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="<?php echo $this->_tpl_vars['adminurl']; ?>
/settings_seo.php">
            	 <div class="elem">
                        <label>SEO:</label>
                        <div class="indent">
                         <select id="SEO" name="SEO" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['SEO'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['SEO'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Meta Description: </label>
                        <div class="indent">
                            <input type="text" id="metadescription" name="metadescription" value="<?php echo $this->_tpl_vars['metadescription']; ?>
" class="medium tip-right" title="HTML meta description">
                        </div>
                 </div>
                 
				 <div class="elem">
                        <label>Meta Keywords: </label>
                        <div class="indent">
                            <input type="text" id="metakeywords" name="metakeywords" value="<?php echo $this->_tpl_vars['metakeywords']; ?>
" class="medium tip-right" title="HTML meta keywords">
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Google Analytics: </label>
                        <div class="indent">
                            <input type="text" id="ganalytics" name="ganalytics" value="<?php echo $this->_tpl_vars['ganalytics']; ?>
" class="medium tip-right" title="To enable, add your analytics ID only EXAMPLE : UA-12345678-1 . Leave blank to disable it.">
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Sitemap:</label>
                        <div class="indent">
							<a href="javascript:NewWindow('<?php echo $this->_tpl_vars['adminurl']; ?>
/settings_sitemap.php','name','800','600','yes')">Create Sitemap now</a>
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