<?php /* Smarty version Smarty-3.1.16, created on 2014-03-26 11:01:53
         compiled from "/var/www/html/bongxoay/themes/js_report_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43264847753104437af09e1-61119248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '626f2637fc81a7d8b7f9e9cd0b947cc050c5d6b4' => 
    array (
      0 => '/var/www/html/bongxoay/themes/js_report_view.tpl',
      1 => 1395800256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43264847753104437af09e1-61119248',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53104437b06b51_95212128',
  'variables' => 
  array (
    'baseurl' => 0,
    'postfolder' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53104437b06b51_95212128')) {function content_53104437b06b51_95212128($_smarty_tpl) {?>
<script type="text/javascript">
$('.keyboard_link').click(function(){
$("#overlay-shadow").removeClass("hide");
$("#overlay-container").removeClass("hide");
$(".keyboard-instruction").removeClass("hide");
$("#overlay-container").click(function(){
$("#overlay-shadow").addClass("hide");
$("#overlay-container").addClass("hide");
$(".keyboard-instruction").addClass("hide");	
});
});
$('#report-item-link').click(function(){
$('#overlay-shadow').removeClass('hide');
$('#overlay-container').removeClass('hide');
$('#b9gcs-soft-report').removeClass('hide');
});
$('.close-btn').click(function(){
$('#overlay-shadow').addClass('hide');
$('#overlay-container').addClass('hide');
$('#b9gcs-soft-report').addClass('hide');
});
$('#rpt-cancel-btn').click(function(){
$('#overlay-shadow').addClass('hide');
$('#overlay-container').addClass('hide');
$('#b9gcs-soft-report').addClass('hide');
});
$('.submit-button').click(function(){
var e=0;
if($('input[name="report-reason"]:checked').val()){
if($('input[name="report-reason"]:checked').val()==4){
var x=$('#repost_link').val();
if(! (x.match('<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
'))){ 
$('#repost_link').addClass('failed');
e=1;
}else{
$('#repost_link').removeClass('failed');
$('#repost_link').addClass('success');
};
}
}else{
e=1;
}
if(e){
return false;
}else{
var x=$('#repost_link').val();
var n=$('input[name="report-reason"]:checked').val();
sendreport(x,n);
}
});
function sendreport(x,n){
jQuery.ajax({
type:'POST',
url:' <?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
'+ '/report.php',
data:'number='+n+'&repost_link='+x+'&pid=' +  '<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
' ,
success:function(e){
$('#overlay-shadow').addClass('hide');
$('#overlay-container').addClass('hide');
$('#b9gcs-soft-report').addClass('hide');
}
});
}
</script>
<?php }} ?>
