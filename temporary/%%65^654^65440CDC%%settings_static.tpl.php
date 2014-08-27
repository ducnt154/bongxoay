<?php /* Smarty version 2.6.6, created on 2014-06-24 16:06:06
         compiled from administrator/settings_static.tpl */ ?>
 
  
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
/settings_static.php">
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['statics']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
            	 <div class="elem">
                        <label>Name:</label>
                        <div class="indent">
                            <input type="text" id="title<?php echo $this->_sections['i']['iteration']; ?>
" name="title<?php echo $this->_sections['i']['iteration']; ?>
" value="<?php echo $this->_tpl_vars['statics'][$this->_sections['i']['index']]['title']; ?>
" class="medium tip-right" title="Static Page Title"> 
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Content:</label>
                        <div class="indent">
                            <textarea  class="medium"  id="value<?php echo $this->_sections['i']['iteration']; ?>
" name="value<?php echo $this->_sections['i']['iteration']; ?>
" rows="15"><?php echo $this->_tpl_vars['statics'][$this->_sections['i']['index']]['value']; ?>
</textarea>
                            <br><br>
                        </div>
                 </div>
				<?php endfor; endif; ?>
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