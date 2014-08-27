<?php /* Smarty version 2.6.6, created on 2014-08-26 23:45:30
         compiled from js_social.tpl */ ?>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/fbshare.js" type="text/javascript"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<?php echo '
<script type="text/javascript">
  ';  if ($_SESSION['language'] == 'ar'):  echo 'window.___gcfg = {lang: \'ar\'};';  endif;  echo '
  (function() {
    var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true;
    po.src = \'https://apis.google.com/js/plusone.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(po, s);
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
'; ?>