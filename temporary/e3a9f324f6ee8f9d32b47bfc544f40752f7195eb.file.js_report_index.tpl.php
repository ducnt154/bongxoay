<?php /* Smarty version Smarty-3.1.16, created on 2014-03-26 11:01:36
         compiled from "/var/www/html/bongxoay/themes/js_report_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:494122176531044310736c3-27221923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3a9f324f6ee8f9d32b47bfc544f40752f7195eb' => 
    array (
      0 => '/var/www/html/bongxoay/themes/js_report_index.tpl',
      1 => 1395800256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '494122176531044310736c3-27221923',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5310443108a882_01379530',
  'variables' => 
  array (
    'baseurl' => 0,
    'postfolder' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5310443108a882_01379530')) {function content_5310443108a882_01379530($_smarty_tpl) {?>
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
