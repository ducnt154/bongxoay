
<div id="overlay-shadow" class="hide"></div>
<div id="overlay-container" class="hide" >
{if $owner eq "1"}
{if $viewpage eq "1" AND $error eq "" AND $new eq "1"}
{include file='js_new.tpl'}
{/if}
{/if}
    <div id="b9gcs-soft-report" class="b9gcs-soft-box hide">
        <div class="content">
            <a href="javascript:void(0);" class="close-btn"></a>
            <form id="form-b9gcs-soft-report" class="modal" action="#" onsubmit="return false" >
                <h3>{$lang206}</h3>
                <h4>{$lang207}</h4>
                <input id="report_entry_id" type="hidden" name="entryId" value="{if $viewpage eq "1"}{$p.PID}{/if}"/>
                <div class="field">
                    <label for="violation"><input id="violation" type="radio" name="report-reason" value="1"/>{$lang208}</label>
                    <label for="solicitation"><input id="solicitation" type="radio" name="report-reason" value="2"/>{$lang209}</label>
                    <label for="offensive"><input id="offensive" type="radio" name="report-reason" value="3"/>{$lang210}</label>
                    <label for="repost"><input id="repost" type="radio" name="report-reason" value="4"/>{$lang211}&darr;</label>
                </div>
                <div class="field">
                	<input id="repost_link" type="text" class="text " placeholder="{$baseurl}{$postfolder}{if $viewpage eq "1"}{$p.PID}{/if}" />
                </div>
            </form>
        </div>
        <div class="actions">
            <ul class="buttons">
                <li><a class="cancel" id="rpt-cancel-btn" href="javascript:void(0);">{$lang119}</a></li>
                <li><a class="button submit-button" href="javascript:void(0);" id="report-submit">{$lang212}</a></li>
                <li class="hide"><a class="button loading" href="javascript:void(0);"></a></li>
            </ul>
        </div>
    </div>
    <div id="b9gcs-soft-share" class="b9gcs-soft-box hide">
        <div class="content">
            <a href="javascript:void(0);" class="close-btn"></a>
            <form id="form-b9gcs-soft-share" class="modal" action="">
            </form>
        </div>
    </div>
    <div id="b9gcs-soft-language" class="b9gcs-soft-box hide">
        <div class="content">
            <a href="javascript:void(0);" class="close-btn badge-language-close"></a>
            <form id="form-b9gcs-soft-language" class="modal" action="" onsubmit="return false;">
                <h3>{$lang222}</h3>
                <h4>{$lang223}</h4>
                <div class="field">

                    <label for="lang-ar">
					<input id="lang-ar" type="radio" name="language" value="ar" {if $smarty.session.language eq "ar"}class="current" checked="checked"{/if}></input>Arabic (RTL)
					</label>

					<label for="lang-en">
                    <input id="lang-en" type="radio" name="language" value="en" {if $smarty.session.language eq "en"}class="current" checked="checked"{/if}></input>english
                    </label>

                    <label for="lang-fr">
                    <input id="lang-fr" class="" type="radio" name="language" value="fr" {if $smarty.session.language eq "fr"}class="current" checked="checked"{/if}></input>fran&#xE7;ais
                    </label>

                    <label for="lang-de">
                    <input id="lang-de" class="" type="radio" name="language" value="de" {if $smarty.session.language eq "de"}class="current" checked="checked"{/if}></input>deutsch
                    </label>

                    <label for="lang-es">
                    <input id="lang-es" class="" type="radio" name="language" value="es" {if $smarty.session.language eq "es"}class="current" checked="checked"{/if}></input>espa&ntilde;ol
                    </label>

                    <label for="lang-pt">
                    <input id="lang-pt" class="" type="radio" name="language" value="pt" {if $smarty.session.language eq "pt"}class="current" checked="checked"{/if}></input>portugu&#234;s
                    </label>

                    <label for="lang-ru">
                    <input id="lang-ru" class="" type="radio" name="language" value="ru" {if $smarty.session.language eq "ru"}class="current" checked="checked"{/if}></input>pусский
                    </label>

                    <label for="lang-tr">
                    <input id="lang-tr" class="" type="radio" name="language" value="tr" {if $smarty.session.language eq "tr"}class="current" checked="checked"{/if}></input>t&uuml;rk&ccedil;e
                    </label>
                </div>
            </form>
        </div>
        <div class="actions">
            <ul class="buttons">
                <li><a id="badge-language-close" class="cancel badge-language-close" href="javascript:void(0);">{$lang119}</a></li>
                <li><a id="language-submit-button" class="button submit-button" href="javascript:void(0);">{$lang221}</a></li>
            </ul>
        </div>
    </div>
    <div class="keyboard-instruction hide">
        <h3>{$lang213}</h3>
        <div class="keyboard-img"></div>
        <ul class="key">
            <li><strong>R</strong> - {$lang214}</li>
            <li><strong>C</strong> - {$lang215}</li>
            <li><strong>H</strong> - {$lang216}</li>
            <li><strong>J</strong> - {$lang217}</li>
            <li><strong>K</strong> - {$lang218}</li>
            <li><strong>L</strong> - {$lang219}</li>
        </ul>
        <p>{$lang220}</p>
    </div>
</div>
   <a target="_blank" href="http://www.gamebai888.com"><img src="{$baseurl}/images/gamebai888/xoay_left.gif" id="banner_doc"></a>
   <!-- <a href="http://bongxoay.com"><img src="{$baseurl}/images/banner/denhatdu.jpg" id="banner_doc"></a>-->
{include file='js_social.tpl'}
{include file='js_lang.tpl'}
{if $viewpage eq "1"}
{include file='js_report_view.tpl'}
{else}
{include file='js_report_index.tpl'}
{/if}
       <!--     <div class="comment_right" id="search2">
                <div class="comment_title">CHÉM GIÓ</div>
                <div class="fb-comments" data-href="http://bongxoay.com" data-width="270" data-numposts="20" data-colorscheme="light"></div>
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
            </div>
        <a id="showhide" class="closed">
            <div id="coment_click"><img src="{$baseurl}/images/chemgio.png"></div>
        </a>
    </div>-->
    <div class="banner_right">
        <a target="_blank" href="http://www.gamebai888.com"><img src="{$baseurl}/images/gamebai888/bn_bongxoay.gif"></a>
    </div>
    {literal}

    <p id="back-top">
        <a href=""><img src="http://bongxoay.com/images/banner/backtop.png"></a>
    </p>
    {/literal}
    {literal}
    <script type="text/javascript">
        function hide_float_right() {
            var content = document.getElementById('float_content_right');
            var hide = document.getElementById('hide_float_right');
            if (content.style.display == "none")
            {content.style.display = "block"; hide.innerHTML = '<a href="javascript:hide_float_right()">[X]</a>'; }
            else { content.style.display = "none"; hide.innerHTML = '<a href="javascript:hide_float_right()">Xem quảng cáo</a>';
            }
        }
    </script>
    {/literal}
    <!--{literal}
    <style>
        .float-ck { position: fixed; bottom: 0px; z-index: 9000}
        * html .float-ck {position:absolute;bottom:auto;top:expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0))) ;}
        #float_content_right {border: 1px solid #01AEF0;}
        #hide_float_right {text-align:right; font-size: 11px;}
        #hide_float_right a {background: #01AEF0; padding: 2px 4px; color: #FFF;}
    </style>
    {/literal}
    <div class="float-ck" style="right: 0px" >
        <div id="hide_float_right">
            <a href="javascript:hide_float_right()">[X]</a></div>
        <div id="float_content_right">
            &lt;!&ndash; Start quang cao&ndash;&gt;
            <a target="_blank" href="{$baseurl}/channels/gia-cat-du"><img src="{$baseurl}/images/banner/gia-cat-du.gif" width="250" height="200"/></a>
            &lt;!&ndash; End quang cao &ndash;&gt;
        </div>
    </div>-->

    {literal}
        <script type="text/javascript">
            $(document).ready(function()
            {
                $('#coment_click').click(function() {
                    if($(this).css("margin-right") == "190px")
                    {
                        $('.comment_right').animate({"margin-right": '-=190'});
                        $('#coment_click').animate({"margin-right": '-=190'});
                    }
                    else
                    {
                        $('.comment_right').animate({"margin-right": '+=190'});
                        $('#coment_click').animate({"margin-right": '+=190'});
                    }


                });
            });
            $(document).ready(function(){
                // hide #back-top first
                $("#back-top").hide();

                // fade in #back-top
                $(function () {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 100) {
                            $('#back-top').fadeIn();
                        } else {
                            $('#back-top').fadeOut();
                        }
                    });

                    // scroll body to 0px on click
                    $('#back-top a').click(function () {
                        $('body,html').animate({
                            scrollTop: 0
                        }, 800);
                        return false;
                    });
                });

            });
            /* $("#showhide").click(function () {
                 $("#search2").animate({width:'toggle'},500);
             });*/
            /*
            function hideshow(which){
                if (!document.getElementById)
                    return
                if (which.style.display=="none")
                    which.style.display="block"
                else
                    which.style.display="none"
            }*/
        </script>
    {/literal}

{if $ganalytics ne ""}
{literal}
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '{/literal}{$ganalytics}{literal}']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
{/literal}
{/if}

</body>
</html>