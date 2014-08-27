<?php /* Smarty version Smarty-3.1.16, created on 2014-03-26 11:01:35
         compiled from "/var/www/html/bongxoay/themes/js_social.tpl" */ ?>
<?php /*%%SmartyHeaderCode:932469480531044310552d9-52393028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fecfbd12af5a0f0fce0a38b22aaf6f34e5aa2808' => 
    array (
      0 => '/var/www/html/bongxoay/themes/js_social.tpl',
      1 => 1395800256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '932469480531044310552d9-52393028',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531044310684f3_19178134',
  'variables' => 
  array (
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531044310684f3_19178134')) {function content_531044310684f3_19178134($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/fbshare.js" type="text/javascript"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

<script type="text/javascript">
  <?php if ($_SESSION['language']=="ar") {?>window.___gcfg = {lang: 'ar'};<?php }?>
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<!-- Pinterest Pin Button -->
<!-- Include ONCE for ALL buttons in the page -->
<script type="text/javascript">
(function() {
    window.PinIt = window.PinIt || { loaded:false };
    if (window.PinIt.loaded) return;
    window.PinIt.loaded = true;
    function async_load(){
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        if (window.location.protocol == "https:")
            s.src = "https://assets.pinterest.com/js/pinit.js";
        else
            s.src = "http://assets.pinterest.com/js/pinit.js";
        var x = document.getElementsByTagName("script")[0];
        x.parentNode.insertBefore(s, x);
    }
    if (window.attachEvent)
        window.attachEvent("onload", async_load);
    else
        window.addEventListener("load", async_load, false);
})();
</script>
<?php }} ?>
