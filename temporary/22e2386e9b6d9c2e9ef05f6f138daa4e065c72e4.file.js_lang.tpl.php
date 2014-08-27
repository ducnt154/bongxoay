<?php /* Smarty version Smarty-3.1.16, created on 2014-02-28 15:08:34
         compiled from "D:\Project\bongxoay\themes\js_lang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26653104402adf522-71987188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22e2386e9b6d9c2e9ef05f6f138daa4e065c72e4' => 
    array (
      0 => 'D:\\Project\\bongxoay\\themes\\js_lang.tpl',
      1 => 1392631202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26653104402adf522-71987188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53104402aef7a9_68820129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53104402aef7a9_68820129')) {function content_53104402aef7a9_68820129($_smarty_tpl) {?>
<script type="text/javascript">
function sendlang(lang){
jQuery.ajax({
type:'POST',
url:' <?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
'+ '/changelang.php',
data:'language='+lang,
success:function(e){
$('#overlay-shadow').addClass('hide');
$('#overlay-container').addClass('hide');
$('#b9gcs-soft-language').addClass('hide');
location.reload();
}
});
}
$('.badge-language-selector').click(function(){
$("#overlay-shadow").removeClass("hide");
$("#overlay-container").removeClass("hide");
$("#b9gcs-soft-language").removeClass("hide");
$("#language-submit-button").click(function(){
sendlang($('input[name=language]:checked').val());
});
$("#badge-language-close").click(function(){
$('#overlay-shadow').addClass('hide');
$('#overlay-container').addClass('hide');
$('#b9gcs-soft-language').addClass('hide');
});
});
</script>
<?php }} ?>
