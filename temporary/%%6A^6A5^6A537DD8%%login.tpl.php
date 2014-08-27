<?php /* Smarty version 2.6.6, created on 2014-07-09 10:42:23
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'login.tpl', 4, false),)), $this); ?>
<!DOCTYPE html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="<?php echo $this->_tpl_vars['lang254']; ?>
" dir="<?php echo $this->_tpl_vars['lang255']; ?>
">
<head>
<title><?php echo ((is_array($_tmp=$this->_tpl_vars['pagetitle'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</title>
<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/favicon.ico" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta content="width=device-width; initial-scale=1.0;" name="viewport" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/css/connect_<?php echo $this->_tpl_vars['lang255']; ?>
.css" media="screen,projection" type="text/css" />
</head>

<body id="page-signup">
    <div class="signup-wrapper">
        <div class="header">
        	<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
"><h1></h1></a>
        </div>
        <div class="content">
            <div class="description">
                <h2><?php echo $this->_tpl_vars['lang91']; ?>
</h2>
                <div class="spcl-button-wrap">
					<?php if ($this->_tpl_vars['enable_fc'] == '1'): ?>
                	<a class="spcl-button facebook badge-facebook-connect" label="LoginFormFacebookButton" next="" <a class="spcl-button facebook badge-facebook-connect" label="LoginFormFacebookButton" next="" href="https://www.facebook.com/dialog/permissions.request?app_id=<?php echo $this->_tpl_vars['FACEBOOK_APP_ID']; ?>
&display=page&next=<?php echo $this->_tpl_vars['baseurl']; ?>
/&response_type=code&fbconnect=1&perms=email,user_birthday,user_about_me,publish_stream"><?php echo $this->_tpl_vars['lang25']; ?>
</a><br>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['TC'] == '1'): ?>
					<a class="spcl-button twitter" label="LoginFormTwitterButton" next="" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/twitter_signin.php"><?php echo $this->_tpl_vars['lang256']; ?>
</a>
					<?php endif; ?>
                </div>
                <p class="message"> </p>
            </div>
           
        </div>
    </div>
    <div id="fb-root"></div>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/connect.js"></script>
</body>
</html>