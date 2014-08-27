<?php /* Smarty version 2.6.6, created on 2014-04-21 00:00:08
         compiled from administrator/settings_social.tpl */ ?>
 
  
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
/settings_social.php">
                 <div class="elem">
                        <label>Facebook Page: </label>
                        <div class="indent">
                            <input type="text" id="FACEBOOK_PROFILE" name="FACEBOOK_PROFILE" value="<?php echo $this->_tpl_vars['FACEBOOK_PROFILE']; ?>
" class="medium tip-right" title="Facebook fan page URL">
                        </div>
                 </div>
                 
				 <div class="elem">
                        <label>Facebook Administrator: </label>
                        <div class="indent">
                            <input type="text" id="FACEBOOK_ADMIN" name="FACEBOOK_ADMIN" value="<?php echo $this->_tpl_vars['FACEBOOK_ADMIN']; ?>
" class="medium tip-right" title="Facebook Administrator for Facebook comments">
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Twitter Username: </label>
                        <div class="indent">
                            <input type="text" id="twitter" name="twitter" value="<?php echo $this->_tpl_vars['twitter']; ?>
" class="medium tip-right" title="Twitter Fans account ID">
                        </div>
                 </div>
                 
            	 <div class="elem">
                        <label>Facebook Connect:</label>
                        <div class="indent">
                         <select id="enable_fc" name="enable_fc" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['enable_fc'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['enable_fc'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Facebook APP ID:</label>
                        <div class="indent">
                            <input type="text" id="FACEBOOK_APP_ID" name="FACEBOOK_APP_ID" value="<?php if ($this->_tpl_vars['demo_mode'] == '1'): ?>Hidden in demo mode<?php else:  echo $this->_tpl_vars['FACEBOOK_APP_ID'];  endif; ?>" class="medium" title="You'll find it in Facebook developers page"> 
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Facebook APP secret: </label>
                        <div class="indent">
                            <input type="text" id="FACEBOOK_SECRET" name="FACEBOOK_SECRET" value="<?php if ($this->_tpl_vars['demo_mode'] == '1'): ?>Hidden in demo mode<?php else:  echo $this->_tpl_vars['FACEBOOK_SECRET'];  endif; ?>" class="medium tip-right" title="You'll find it in Facebook developers page">
                        </div>
                 </div>
                 
            	 <div class="elem">
                        <label>Twitter Connect:</label>
                        <div class="indent">
                         <select id="TC" name="TC" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['TC'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['TC'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Twitter Customer Key:</label>
                        <div class="indent">
                            <input type="text" id="TWITTER_APP_ID" name="TWITTER_APP_ID" value="<?php if ($this->_tpl_vars['demo_mode'] == '1'): ?>Hidden in demo mode<?php else:  echo $this->_tpl_vars['TWITTER_APP_ID'];  endif; ?>" class="medium" title="You'll find it in Twitter developers page"> 
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Twitter APP secret: </label>
                        <div class="indent">
                            <input type="text" id="TWITTER_APP_SECRET" name="TWITTER_APP_SECRET" value="<?php if ($this->_tpl_vars['demo_mode'] == '1'): ?>Hidden in demo mode<?php else:  echo $this->_tpl_vars['TWITTER_APP_SECRET'];  endif; ?>" class="medium tip-right" title="You'll find it in Twitter developers page">
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