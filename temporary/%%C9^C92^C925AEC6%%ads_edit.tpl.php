<?php /* Smarty version 2.6.6, created on 2014-04-07 16:56:24
         compiled from administrator/ads_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'administrator/ads_edit.tpl', 54, false),)), $this); ?>
 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/dashboard.php"><?php echo $this->_tpl_vars['site_name']; ?>
 Admin Panel</a> &rsaquo; Advertising &rsaquo; Edit Ad #<?php echo $this->_tpl_vars['ad']['AID']; ?>
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
           <div class="title-grid">General Settings</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="<?php echo $this->_tpl_vars['adminurl']; ?>
/ads_edit.php?AID=<?php echo $this->_tpl_vars['ad']['AID']; ?>
">
                 <div class="elem">
                        <label>Ad ID:</label>
                        <div class="indent">
                            <label><?php echo $this->_tpl_vars['ad']['AID']; ?>
</label>
							<a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/ads_all.php?delete=1&AID=<?php echo $this->_tpl_vars['ad']['AID']; ?>
" class="right" style="color:red;">Delet Ad</a>
                        </div>
                 </div>

				 
				 <div class="elem">
                        <label>Description:</label>
                        <div class="indent">
                            <input type="text" id="description" name="description" value="<?php echo $this->_tpl_vars['ad']['description']; ?>
" class="medium tip-right" title="Ad space description"> 
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Advertising Code:</label>
                        <div class="indent">
                            <textarea  class="medium"  id="adcode" name="adcode" rows="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['ad']['code'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea>
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Active:</label>
                        <div class="indent">
                         <select id="active" name="active" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['ad']['active'] == '1'): ?>selected<?php endif; ?>>Active</option>
                            <option value="0" <?php if ($this->_tpl_vars['ad']['active'] == '0'): ?>selected<?php endif; ?>>Not Active</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>AD CODE:</label>
                        <div class="indent">
                        <?php echo '
						{insert name=get_advertisement AID=';  echo $this->_tpl_vars['ad']['AID'];  echo '}
						'; ?>

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