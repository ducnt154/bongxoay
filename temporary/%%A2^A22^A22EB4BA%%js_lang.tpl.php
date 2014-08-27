<?php /* Smarty version 2.6.6, created on 2014-08-26 23:45:30
         compiled from js_lang.tpl */ ?>
<?php echo '
<script type="text/javascript">
function sendlang(lang){
jQuery.ajax({
type:\'POST\',
url:\' ';  echo $this->_tpl_vars['baseurl'];  echo '\'+ \'/changelang.php\',
data:\'language=\'+lang,
success:function(e){
$(\'#overlay-shadow\').addClass(\'hide\');
$(\'#overlay-container\').addClass(\'hide\');
$(\'#b9gcs-soft-language\').addClass(\'hide\');
location.reload();
}
});
}
$(\'.badge-language-selector\').click(function(){
$("#overlay-shadow").removeClass("hide");
$("#overlay-container").removeClass("hide");
$("#b9gcs-soft-language").removeClass("hide");
$("#language-submit-button").click(function(){
sendlang($(\'input[name=language]:checked\').val());
});
$("#badge-language-close").click(function(){
$(\'#overlay-shadow\').addClass(\'hide\');
$(\'#overlay-container\').addClass(\'hide\');
$(\'#b9gcs-soft-language\').addClass(\'hide\');
});
});
</script>
'; ?>