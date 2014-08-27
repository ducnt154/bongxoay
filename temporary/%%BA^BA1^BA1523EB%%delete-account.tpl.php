<?php /* Smarty version 2.6.6, created on 2014-03-14 15:53:12
         compiled from delete-account.tpl */ ?>
<?php if ($this->_tpl_vars['error'] != ""): ?>
<p class="form-message error middle"><?php echo $this->_tpl_vars['error']; ?>
<br /></p>
<?php elseif ($this->_tpl_vars['message'] != ""): ?>
<p class="form-message success middle"><?php echo $this->_tpl_vars['message']; ?>
<br /></p>
<?php endif; ?>
<div id="main" class="middle">
    <div id="content-holder">    
        <div id="b9gcs-soft-forgotpassword"  class="b9gcs-soft-box static" >
            <div class="content">
                <form id="del_account" name="delete_account_form" class="modal" action="#" method="post">
                    <h3><?php echo $this->_tpl_vars['lang78']; ?>
</h3>
                    <h4><?php echo $this->_tpl_vars['lang79']; ?>
</h4>
                    <h4><?php echo $this->_tpl_vars['lang80']; ?>
 <?php echo $this->_tpl_vars['lang81']; ?>
 <a href="mailto:<?php echo $this->_tpl_vars['site_email']; ?>
"><?php echo $this->_tpl_vars['lang82']; ?>
</a></h4>
                    <br/>
                    <div class="field">
                        <label>
                            <h4><?php echo $this->_tpl_vars['lang2']; ?>
</h4>
                            <input type="password" class="text" name="password" id="password"/>
                            <input type="hidden" name="delsub" value="1" />
                        </label>
                        <p class="info"><?php echo $this->_tpl_vars['lang83']; ?>
</p>
                    </div>
                </form>
            </div>
            <div class="actions">
                <ul class="buttons">
                	<li><a class="button disactiviate" href="#" onclick="document.delete_account_form.submit();"><?php echo $this->_tpl_vars['lang76']; ?>
</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="footer" class="middle">