<?php /* Smarty version 2.6.6, created on 2014-04-21 00:00:17
         compiled from administrator/settings_points.tpl */ ?>
 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/dashboard.php"><?php echo $this->_tpl_vars['site_name']; ?>
 Admin Panel</a> &rsaquo; Settings &rsaquo; Points</div> 
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
           <div class="title-grid">Points</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="<?php echo $this->_tpl_vars['adminurl']; ?>
/settings_points.php">
				 
                 <div class="elem">
                        <label>Uploading Points: </label>
                        <div class="indent">
                            <input type="text" id="up_points" name="up_points" value="<?php echo $this->_tpl_vars['up_points']; ?>
" class="medium tip-right" title="Points for submitting new post">
                        </div>
                 </div>
                 
				 <div class="elem">
                        <label>View Points : </label>
                        <div class="indent">
                            <input type="text" id="view_points" name="view_points" value="<?php echo $this->_tpl_vars['view_points']; ?>
" class="medium tip-right" title="Points for each post view">
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