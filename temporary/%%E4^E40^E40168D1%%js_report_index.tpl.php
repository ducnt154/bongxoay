<?php /* Smarty version 2.6.6, created on 2014-08-26 23:45:30
         compiled from js_report_index.tpl */ ?>
<?php echo '
<script type="text/javascript">
$(\'.keyboard_link\').click(function(){
$("#overlay-shadow").removeClass("hide");
$("#overlay-container").removeClass("hide");
$(".keyboard-instruction").removeClass("hide");
$("#overlay-container").click(function(){
$("#overlay-shadow").addClass("hide");
$("#overlay-container").addClass("hide");
$(".keyboard-instruction").addClass("hide");	
});
});
$(\'.report\').click(function(){
$(\'#report_entry_id\').val($(this).attr(\'entryId\'));	
$(\'#repost_link\').val(\'';  echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo '\' + $(this).attr(\'entryId\'));	
$(\'#overlay-shadow\').removeClass(\'hide\');
$(\'#overlay-container\').removeClass(\'hide\');
$(\'#b9gcs-soft-report\').removeClass(\'hide\');
});
$(\'.close-btn\').click(function(){
$(\'#overlay-shadow\').addClass(\'hide\');
$(\'#overlay-container\').addClass(\'hide\');
$(\'#b9gcs-soft-report\').addClass(\'hide\');
});
$(\'#rpt-cancel-btn\').click(function(){
$(\'#overlay-shadow\').addClass(\'hide\');
$(\'#overlay-container\').addClass(\'hide\');
$(\'#b9gcs-soft-report\').addClass(\'hide\');
});
$(\'#report-submit\').click(function(){
var e=0;
if($(\'input[name="report-reason"]:checked\').val()){
if($(\'input[name="report-reason"]:checked\').val()==4){
var x=$(\'#repost_link\').val();
if(! (x.match(\'';  echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo '\'))){ 
$(\'#repost_link\').addClass(\'failed\');
e=1;
}else{
$(\'#repost_link\').removeClass(\'failed\');
$(\'#repost_link\').addClass(\'success\');
};
}
}else{
e=1;
}
if(e){
return false;
}else{
var pid=$(\'#report_entry_id\').val();
var x=$(\'#repost_link\').val();
var n=$(\'input[name="report-reason"]:checked\').val();
sendreport(x,n,pid);
}
});
function sendreport(x,n,pid){
jQuery.ajax({
type:\'POST\',
url:\' ';  echo $this->_tpl_vars['baseurl'];  echo '\'+ \'/report.php\',
data:\'number=\'+n+\'&repost_link=\'+x+\'&pid=\' + pid,
success:function(e){
$(\'#overlay-shadow\').addClass(\'hide\');
$(\'#overlay-container\').addClass(\'hide\');
$(\'#b9gcs-soft-report\').addClass(\'hide\');
}
});
}
</script>
'; ?>