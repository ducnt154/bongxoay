<?php /* Smarty version 2.6.6, created on 2014-06-04 22:21:11
         compiled from settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'get_member_profilepicture', 'settings.tpl', 18, false),array('modifier', 'stripslashes', 'settings.tpl', 32, false),)), $this); ?>
<?php if ($this->_tpl_vars['error'] != ""): ?>
<p class="form-message error middle"><?php echo $this->_tpl_vars['error']; ?>
<br /></p>
<?php elseif ($this->_tpl_vars['message'] != ""): ?>
<p class="form-message success middle"><?php echo $this->_tpl_vars['message']; ?>
<br /></p>
<?php endif; ?>
<div id="main" class="middle">
    <div id="content-holder">
        <div class="content-title">
        	<h3><?php echo $this->_tpl_vars['lang45']; ?>
</h3>
        </div>                      
                                          
        <div id="content">
            <form id="form-settings" class="page" action="" method="post" enctype="multipart/form-data" name="formsettings">
                <div class="field profile-pic">
                    <h4><?php echo $this->_tpl_vars['lang53']; ?>
</h4>
                    <div class="wrap">
                        <div class="image-wrap">
                        	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_member_profilepicture', 'assign' => 'profilepicture', 'value' => 'var', 'USERID' => $_SESSION['USERID'])), $this); ?>

                            <?php if ($this->_tpl_vars['profilepicture'] == ""): ?>
                    			<img src="http://graph.facebook.com/<?php echo $_SESSION['FACEBOOKID']; ?>
/picture?type=normal" width="160" height="160" alt="Profile Pic" /> 
                    		<?php else: ?>
                        	<img id="uploaded_img" width="160px" src="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/thumbs/<?php echo $this->_tpl_vars['profilepicture']; ?>
?<?php echo time(); ?>
" alt="avatar" />
                            <?php endif; ?>
                        </div>
                        <input class="file" type="file" name="gphoto"  />
                        <p class="info"><?php echo $this->_tpl_vars['lang54']; ?>
</p>
                        <p class="remove-avatar"><label><input type="checkbox" name="remove_avatar" value="1"/><?php echo $this->_tpl_vars['lang55']; ?>
</label></p>
                    </div>
                </div>                

                <div class="field">
                    <label><h4><?php echo $this->_tpl_vars['lang59']; ?>
</h4><input type="text" class="text tipped" name="fname" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['p']['fullname'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" maxlength="100" /></label>
                    <p class="info" style="visibility:hidden"><?php echo $this->_tpl_vars['lang60']; ?>
</p>
                </div>
                
                <div class="field">
                    <label><h4><?php echo $this->_tpl_vars['lang20']; ?>
</h4><input type="text" class="text tipped" name="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['p']['email'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" maxlength="200" disabled /></label>
                    <p class="info" style="visibility:hidden"><?php echo $this->_tpl_vars['lang61']; ?>
</p>
                </div>
                
                <div class="field">
                    <label><h4><?php echo $this->_tpl_vars['lang67']; ?>
</h4><input type="text" class="text tipped" name="details" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['p']['description'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" maxlength="120"/></label>
                    <p class="info" style="visibility:hidden"><?php echo $this->_tpl_vars['lang69']; ?>
</p>
                </div>
                
                <div class="field">
                    <label><h4><?php echo $this->_tpl_vars['lang70']; ?>
</h4><input type="text" class="text tipped" name="website" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['p']['website'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" maxlength="200"/></label>
                    <p class="info" style="visibility:hidden"><?php echo $this->_tpl_vars['lang71']; ?>
</p>
                </div>
               
                <input type="hidden" name="subform" value="1" />
            </form>
            <div class="setting-actions">
            	<a class="deactivate" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/delete-account"><?php echo $this->_tpl_vars['lang76']; ?>
</a>
                <ul class="buttons">
                	<li><a id="settings_submit" class="button" href="#" onClick="document.formsettings.submit();"><?php echo $this->_tpl_vars['lang77']; ?>
</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/jscolor.js"></script>
<div id="footer" class="middle">