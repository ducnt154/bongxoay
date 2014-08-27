<?php /* Smarty version 2.6.6, created on 2014-06-29 19:11:43
         compiled from recover.tpl */ ?>
    <div id="content">
		<h2 class="center">Request Password Reset</h2>
        <form id="form-login" action="<?php echo $this->_tpl_vars['mobileurl']; ?>
/login" method="post">
            <input id="logsub" type="hidden" name="logsub" value="1"></input>
            <input type="text" id="jsid-login-id" name="email" placeholder="Email address" tabindex="1" />

            <div class="button-container no-padding-side">
                <input type="submit" value="Recover Password" class="button left"/>
                <a class="button demote right" href="<?php echo $this->_tpl_vars['mobileurl']; ?>
/login">Login?</a>
            </div><!--end button-container-->
        </form>