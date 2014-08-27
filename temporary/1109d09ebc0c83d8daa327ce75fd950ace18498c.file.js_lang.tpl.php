<?php /* Smarty version Smarty-3.1.16, created on 2014-03-26 11:01:35
         compiled from "/var/www/html/bongxoay/themes/js_lang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11385359435310443106a4e4-20145542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1109d09ebc0c83d8daa327ce75fd950ace18498c' => 
    array (
      0 => '/var/www/html/bongxoay/themes/js_lang.tpl',
      1 => 1395800256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11385359435310443106a4e4-20145542',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53104431071580_59635683',
  'variables' => 
  array (
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53104431071580_59635683')) {function content_53104431071580_59635683($_smarty_tpl) {?>
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
