<?php /* Smarty version 2.6.6, created on 2014-04-21 00:00:15
         compiled from administrator/settings_wm.tpl */ ?>
 
  
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
/settings_wm.php">
            	 <div class="elem">
                        <label>Logo Watermark:</label>
                        <div class="indent">
                         <select id="lwm" name="lwm" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['lwm'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['lwm'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Text Watermark:</label>
                        <div class="indent">
                         <select id="twm" name="twm" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['twm'] == '1'): ?>selected<?php endif; ?>>Enabled</option>
                            <option value="0" <?php if ($this->_tpl_vars['twm'] == '0'): ?>selected<?php endif; ?>>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Hidewatermark:</label>
                        <div class="indent">
                         <select id="displaywm" name="displaywm" class="chzn-select medium-select select" > 
                            <option value="1" <?php if ($this->_tpl_vars['displaywm'] == '1'): ?>selected<?php endif; ?>>Display</option>
                			<option value="0" <?php if ($this->_tpl_vars['displaywm'] == '0'): ?>selected<?php endif; ?>>Hide</option>
                        </select>   
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Watermark Font: </label>
                        <div class="indent">
                            <input type="text" id="wmfont" name="wmfont" value="<?php echo $this->_tpl_vars['wmfont']; ?>
" class="medium tip-right" title="You MUST upload the font file into /inc/fonts/">
                        </div>
                 </div>
                 
				 <div class="elem">
                        <label>Font Size: </label>
                        <div class="indent">
                            <input type="text" id="fsize" name="fsize" value="<?php echo $this->_tpl_vars['fsize']; ?>
" class="medium tip-right" title="Text watermark font size">
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Watermark Height: </label>
                        <div class="indent">
                            <input type="text" id="wmhieght" name="wmhieght" value="<?php echo $this->_tpl_vars['wmhieght']; ?>
" class="medium tip-right" title="Total Watermark Height">
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>Watermark background RBG:</label>
                        <div class="indent">
                            <table class="table_form">
                            <tr>
                            <td>
                            <input type="text" name="blackr" class="small" id="blackr" value="<?php echo $this->_tpl_vars['blackr']; ?>
" maxlength="5" size="5" /></td>
                            <td>-</td>
                            <td>
                            <input type="text" name="blackb" class="small" id="blackb" value="<?php echo $this->_tpl_vars['blackb']; ?>
" maxlength="5" size="5" /></td>
                            <td>-</td>
                            <td>
                            <input type="text" name="blackg" class="small" id="blackg" value="<?php echo $this->_tpl_vars['blackg']; ?>
" maxlength="5" size="5" /></td>
                            </tr>
                            </table>
                        </div>
                </div>
				
				 <div class="elem">
                        <label>Watermark Text RBG:</label>
                        <div class="indent">
                            <table class="table_form">
                            <tr>
                            <td>
                            <input type="text" name="whiter" class="small" id="whiter" value="<?php echo $this->_tpl_vars['whiter']; ?>
" maxlength="5" size="5" /></td>
                            <td>-</td>
                            <td>
                            <input type="text" name="whiteb" class="small" id="whiteb" value="<?php echo $this->_tpl_vars['whiteb']; ?>
" maxlength="5" size="5" /></td>
                            <td>-</td>
                            <td>
                            <input type="text" name="whiteg" class="small" id="whiteg" value="<?php echo $this->_tpl_vars['whiteg']; ?>
" maxlength="5" size="5" /></td>
                            </tr>
                            </table>
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