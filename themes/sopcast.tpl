<div id="link-sopcast">
    {section name= f loop= $sopcast}
        <span>{$sopcast[f].fulltext}</span>
    {/section}
</div>
<br><br>
<div id="fb-root"></div>
{literal}
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=361313930589477";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
{/literal}
<div class="fb-comments" data-href="http://bongxoay.com/channels/link-sopcast" data-width="650" data-numposts="4" data-colorscheme="light"></div>

