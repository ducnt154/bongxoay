<script src="{$baseurl}/js/fbshare.js" type="text/javascript"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
{literal}
<script type="text/javascript">
  {/literal}{if $smarty.session.language eq "ar"}{literal}window.___gcfg = {lang: 'ar'};{/literal}{/if}{literal}
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
{/literal}