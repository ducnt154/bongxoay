<?php /* Smarty version Smarty-3.1.16, created on 2014-03-26 11:01:35
         compiled from "/var/www/html/bongxoay/themes/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97130257653104430e39719-99013406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c13c6476749f477f48b0e17fb832bad20270b45c' => 
    array (
      0 => '/var/www/html/bongxoay/themes/footer.tpl',
      1 => 1395800255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97130257653104430e39719-99013406',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53104431050b58_15960695',
  'variables' => 
  array (
    'owner' => 0,
    'viewpage' => 0,
    'error' => 0,
    'new' => 0,
    'lang206' => 0,
    'lang207' => 0,
    'p' => 0,
    'lang208' => 0,
    'lang209' => 0,
    'lang210' => 0,
    'lang211' => 0,
    'baseurl' => 0,
    'postfolder' => 0,
    'lang119' => 0,
    'lang212' => 0,
    'lang222' => 0,
    'lang223' => 0,
    'lang221' => 0,
    'lang213' => 0,
    'lang214' => 0,
    'lang215' => 0,
    'lang216' => 0,
    'lang217' => 0,
    'lang218' => 0,
    'lang219' => 0,
    'lang220' => 0,
    'ganalytics' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53104431050b58_15960695')) {function content_53104431050b58_15960695($_smarty_tpl) {?>
<div id="overlay-shadow" class="hide"></div>
<div id="overlay-container" class="hide" >
<?php if ($_smarty_tpl->tpl_vars['owner']->value=="1") {?>
<?php if ($_smarty_tpl->tpl_vars['viewpage']->value=="1"&&$_smarty_tpl->tpl_vars['error']->value==''&&$_smarty_tpl->tpl_vars['new']->value=="1") {?>
<?php echo $_smarty_tpl->getSubTemplate ('js_new.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php }?>
    <div id="b9gcs-soft-report" class="b9gcs-soft-box hide">
        <div class="content">
            <a href="javascript:void(0);" class="close-btn"></a>
            <form id="form-b9gcs-soft-report" class="modal" action="#" onsubmit="return false" >
                <h3><?php echo $_smarty_tpl->tpl_vars['lang206']->value;?>
</h3>
                <h4><?php echo $_smarty_tpl->tpl_vars['lang207']->value;?>
</h4>
                <input id="report_entry_id" type="hidden" name="entryId" value="<?php if ($_smarty_tpl->tpl_vars['viewpage']->value=="1") {?><?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
<?php }?>"/>
                <div class="field">
                    <label for="violation"><input id="violation" type="radio" name="report-reason" value="1"/><?php echo $_smarty_tpl->tpl_vars['lang208']->value;?>
</label>
                    <label for="solicitation"><input id="solicitation" type="radio" name="report-reason" value="2"/><?php echo $_smarty_tpl->tpl_vars['lang209']->value;?>
</label>
                    <label for="offensive"><input id="offensive" type="radio" name="report-reason" value="3"/><?php echo $_smarty_tpl->tpl_vars['lang210']->value;?>
</label>
                    <label for="repost"><input id="repost" type="radio" name="report-reason" value="4"/><?php echo $_smarty_tpl->tpl_vars['lang211']->value;?>
&darr;</label>
                </div>
                <div class="field">
                	<input id="repost_link" type="text" class="text " placeholder="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php if ($_smarty_tpl->tpl_vars['viewpage']->value=="1") {?><?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
<?php }?>" />
                </div>
            </form>
        </div>
        <div class="actions">
            <ul class="buttons">
                <li><a class="cancel" id="rpt-cancel-btn" href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['lang119']->value;?>
</a></li>
                <li><a class="button submit-button" href="javascript:void(0);" id="report-submit"><?php echo $_smarty_tpl->tpl_vars['lang212']->value;?>
</a></li>
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
                <h3><?php echo $_smarty_tpl->tpl_vars['lang222']->value;?>
</h3>
                <h4><?php echo $_smarty_tpl->tpl_vars['lang223']->value;?>
</h4>
                <div class="field">

                    <label for="lang-ar">
					<input id="lang-ar" type="radio" name="language" value="ar" <?php if ($_SESSION['language']=="ar") {?>class="current" checked="checked"<?php }?>></input>Arabic (RTL)
					</label>

					<label for="lang-en">
                    <input id="lang-en" type="radio" name="language" value="en" <?php if ($_SESSION['language']=="en") {?>class="current" checked="checked"<?php }?>></input>english
                    </label>

                    <label for="lang-fr">
                    <input id="lang-fr" class="" type="radio" name="language" value="fr" <?php if ($_SESSION['language']=="fr") {?>class="current" checked="checked"<?php }?>></input>fran&#xE7;ais
                    </label>

                    <label for="lang-de">
                    <input id="lang-de" class="" type="radio" name="language" value="de" <?php if ($_SESSION['language']=="de") {?>class="current" checked="checked"<?php }?>></input>deutsch
                    </label>

                    <label for="lang-es">
                    <input id="lang-es" class="" type="radio" name="language" value="es" <?php if ($_SESSION['language']=="es") {?>class="current" checked="checked"<?php }?>></input>espa&ntilde;ol
                    </label>

                    <label for="lang-pt">
                    <input id="lang-pt" class="" type="radio" name="language" value="pt" <?php if ($_SESSION['language']=="pt") {?>class="current" checked="checked"<?php }?>></input>portugu&#234;s
                    </label>

                    <label for="lang-ru">
                    <input id="lang-ru" class="" type="radio" name="language" value="ru" <?php if ($_SESSION['language']=="ru") {?>class="current" checked="checked"<?php }?>></input>pусский
                    </label>

                    <label for="lang-tr">
                    <input id="lang-tr" class="" type="radio" name="language" value="tr" <?php if ($_SESSION['language']=="tr") {?>class="current" checked="checked"<?php }?>></input>t&uuml;rk&ccedil;e
                    </label>
                </div>
            </form>
        </div>
        <div class="actions">
            <ul class="buttons">
                <li><a id="badge-language-close" class="cancel badge-language-close" href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['lang119']->value;?>
</a></li>
                <li><a id="language-submit-button" class="button submit-button" href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['lang221']->value;?>
</a></li>
            </ul>
        </div>
    </div>
    <div class="keyboard-instruction hide">
        <h3><?php echo $_smarty_tpl->tpl_vars['lang213']->value;?>
</h3>
        <div class="keyboard-img"></div>
        <ul class="key">
            <li><strong>R</strong> - <?php echo $_smarty_tpl->tpl_vars['lang214']->value;?>
</li>
            <li><strong>C</strong> - <?php echo $_smarty_tpl->tpl_vars['lang215']->value;?>
</li>
            <li><strong>H</strong> - <?php echo $_smarty_tpl->tpl_vars['lang216']->value;?>
</li>
            <li><strong>J</strong> - <?php echo $_smarty_tpl->tpl_vars['lang217']->value;?>
</li>
            <li><strong>K</strong> - <?php echo $_smarty_tpl->tpl_vars['lang218']->value;?>
</li>
            <li><strong>L</strong> - <?php echo $_smarty_tpl->tpl_vars['lang219']->value;?>
</li>
        </ul>
        <p><?php echo $_smarty_tpl->tpl_vars['lang220']->value;?>
</p>
    </div>
</div>
   <a target="_blank" href="http://www.gamebai888.com"><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/gamebai888/xoay_left.gif" id="banner_doc"></a>
   <!-- <a href="http://bongxoay.com"><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/banner/denhatdu.jpg" id="banner_doc"></a>-->
<?php echo $_smarty_tpl->getSubTemplate ('js_social.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('js_lang.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['viewpage']->value=="1") {?>
<?php echo $_smarty_tpl->getSubTemplate ('js_report_view.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ('js_report_index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
       <!--     <div class="comment_right" id="search2">
                <div class="comment_title">CHÉM GIÓ</div>
                <div class="fb-comments" data-href="http://bongxoay.com" data-width="270" data-numposts="20" data-colorscheme="light"></div>
                <div id="fb-root"></div>
                
                <script>
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=361313930589477";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                
            </div>
        <a id="showhide" class="closed">
            <div id="coment_click"><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/chemgio.png"></div>
        </a>
    </div>-->
    <div class="banner_right">
        <a target="_blank" href="http://www.gamebai888.com"><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/gamebai888/bn_bongxoay.gif"></a>
    </div>
    

    <p id="back-top">
        <a href=""><img src="http://bongxoay.com/images/banner/backtop.png"></a>
    </p>
    
    
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
    
    <!--
    <style>
        .float-ck { position: fixed; bottom: 0px; z-index: 9000}
        * html .float-ck {position:absolute;bottom:auto;top:expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0))) ;}
        #float_content_right {border: 1px solid #01AEF0;}
        #hide_float_right {text-align:right; font-size: 11px;}
        #hide_float_right a {background: #01AEF0; padding: 2px 4px; color: #FFF;}
    </style>
    
    <div class="float-ck" style="right: 0px" >
        <div id="hide_float_right">
            <a href="javascript:hide_float_right()">[X]</a></div>
        <div id="float_content_right">
            &lt;!&ndash; Start quang cao&ndash;&gt;
            <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/channels/gia-cat-du"><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/banner/gia-cat-du.gif" width="250" height="200"/></a>
            &lt;!&ndash; End quang cao &ndash;&gt;
        </div>
    </div>-->

    
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
    

<?php if ($_smarty_tpl->tpl_vars['ganalytics']->value!='') {?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo $_smarty_tpl->tpl_vars['ganalytics']->value;?>
']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php }?>

</body>
</html><?php }} ?>
