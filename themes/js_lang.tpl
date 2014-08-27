{literal}
<script type="text/javascript">
function sendlang(lang){
jQuery.ajax({
type:'POST',
url:' {/literal}{$baseurl}{literal}'+ '/changelang.php',
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
{/literal}