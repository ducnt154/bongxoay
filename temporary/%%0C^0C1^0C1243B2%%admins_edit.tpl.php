<?php /* Smarty version 2.6.6, created on 2014-05-11 17:32:05
         compiled from administrator/admins_edit.tpl */ ?>
 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/dashboard.php"><?php echo $this->_tpl_vars['site_name']; ?>
 Admin Panel</a> &rsaquo; Users &rsaquo; Edit Member #<?php echo $this->_tpl_vars['user']['USERID']; ?>
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
           <div class="title-grid">Edit User</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="<?php echo $this->_tpl_vars['adminurl']; ?>
/admins_edit.php?ID=<?php echo $this->_tpl_vars['user']['ADMINID']; ?>
">
                 <div class="elem">
                        <label>Administrator ID:</label>
                        <div class="indent">
                            <label><?php echo $this->_tpl_vars['user']['ADMINID']; ?>
</label>
							<a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/admins_all.php?delete=1&ID=<?php echo $this->_tpl_vars['user']['ADMINID']; ?>
" class="right" style="color:red;">Delet Administrator</a>
                        </div>
                 </div>

				 <div class="elem">
                        <label>User Name:</label>
                        <div class="indent">
                            <input type="text" id="username" name="username" value="<?php echo $this->_tpl_vars['user']['username']; ?>
" class="medium tip-right" title="Username that appears all over ths site."> 
                        </div>
                 </div>

            	 <div class="elem">
                        <label>email:</label>
                        <div class="indent">
                            <input type="text" id="email" name="email" value="<?php echo $this->_tpl_vars['user']['email']; ?>
" class="medium tip-right" title="User email address"> 
                            <br><br>
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Password:</label>
                        <div class="indent">
                            <input type="password" id="password" name="password" class="medium"> 
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