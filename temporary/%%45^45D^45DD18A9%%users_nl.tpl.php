<?php /* Smarty version 2.6.6, created on 2014-04-21 00:01:27
         compiled from administrator/users_nl.tpl */ ?>
 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/dashboard.php"><?php echo $this->_tpl_vars['site_name']; ?>
 Admin Panel</a> &rsaquo; News Letter</div> 
        </div>

		<?php if ($this->_tpl_vars['message'] != ""): ?>
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert green hideit"><p><span class="green-icon"></span><?php echo $this->_tpl_vars['message']; ?>
</p></div>
           </div> 
		<!--Alerts end-->
		<?php endif; ?>
		<?php if ($this->_tpl_vars['message2'] != ""): ?>
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert orange hideit"><p><span class="orange-icon"></span><?php echo $this->_tpl_vars['message2']; ?>
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
		<?php if ($this->_tpl_vars['no_form'] != '1'): ?>
		<!--Form-->
        <div class="grid-1">
           <div class="title-grid">General Settings</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="<?php echo $this->_tpl_vars['adminurl']; ?>
/users_nl.php">
                 <div class="elem">
                        <label>Subject:</label>
                        <div class="indent">
                            <input type="text" id="title" name="title" value="" class="medium tip-right" title="Email Subject"> 
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Email Body:</label>
                        <div class="indent">
                            <textarea  class="medium"  id="body" name="body" rows="30"></textarea>
                            <br><br>
                        </div>
                 </div>
				 
				 <input type="hidden" id="submitform" name="submitform" value="1" >
				 <div style="width:330px;margin:20px;">
				<input type="submit" class="button-a red right" value="Send News Letter">
				</div>
                 </form>
    		 <div class="clear"> </div>
             </div>
           </div>
        </div>  
		<!--Form end-->
		<?php endif; ?>
        
        
        
			</div><!-- #content-->
		</div><!-- #container-->

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'administrator/left_side.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        	</div><!-- #container main-->