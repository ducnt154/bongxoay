<?php /* Smarty version Smarty-3.1.16, created on 2014-02-28 15:08:34
         compiled from "D:\Project\bongxoay\themes\js_report_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1164353104402b56918-32643433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '860ba30de53411bf6be98045b5f35d1ca492cf10' => 
    array (
      0 => 'D:\\Project\\bongxoay\\themes\\js_report_index.tpl',
      1 => 1392631202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1164353104402b56918-32643433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'postfolder' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53104402b9df63_64622893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53104402b9df63_64622893')) {function content_53104402b9df63_64622893($_smarty_tpl) {?>
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
$('.report').click(function(){
$('#report_entry_id').val($(this).attr('entryId'));	
$('#repost_link').val('<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
' + $(this).attr('entryId'));	
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
$('#report-submit').click(function(){
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
var pid=$('#report_entry_id').val();
var x=$('#repost_link').val();
var n=$('input[name="report-reason"]:checked').val();
sendreport(x,n,pid);
}
});
function sendreport(x,n,pid){
jQuery.ajax({
type:'POST',
url:' <?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
'+ '/report.php',
data:'number='+n+'&repost_link='+x+'&pid=' + pid,
success:function(e){
$('#overlay-shadow').addClass('hide');
$('#overlay-container').addClass('hide');
$('#b9gcs-soft-report').addClass('hide');
}
});
}
</script>
<?php }} ?>
