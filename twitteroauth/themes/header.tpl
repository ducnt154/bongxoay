<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" onkeypress="keyfind(event)" lang="{$lang254}" dir="{$lang255}">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<title>{if $pagetitle ne ""}{$pagetitle} - {/if}{$site_name}</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="{if $pagetitle ne ""}{$pagetitle} - {/if}{if $metadescription ne ""}{$metadescription} - {/if}{$site_name}">
<meta name="keywords" content="{if $pagetitle ne ""}{$pagetitle},{/if}{if $metakeywords ne ""}{$metakeywords},{/if}{$site_name}">
<meta name="title" content="{if $pagetitle ne ""}{$pagetitle} - {/if}{$site_name}" />
{if $p.gif eq 1}
<meta property="og:title" content="{if $pagetitle ne ""}{$lang287} {$pagetitle} - {/if}{$site_name}"/>
{else}
<meta property="og:title" content="{if $pagetitle ne ""}{$pagetitle} - {/if}{$site_name}"/>
{/if}

<meta property="og:site_name" content="{$site_name}"/>
{if $p.PID ne ""}
	<meta property="og:url" content="{$baseurl}{$postfolder}{$p.PID}/"/>
	{if $p.pic ne ""}
    	{if $p.gif eq "1"}
            <meta property="og:image" content="{$purl}/t/{$p.PID}.jpg" />
        {else}
        	<meta property="og:image" content="{$purl}/t/l-{$p.pic}" />
        {/if}

	{elseif $p.youtube_key != ""}
		<meta property="og:image" content="http://img.youtube.com/vi/{$p.youtube_key}/0.jpg" />
	{elseif $p.fod_key != ""}
		<meta property="og:image" content="http://www.funnyordie.com/media/{$p.fod_key}/thumbnail/large.jpg" />
	{else}
		<meta property="og:image" content="{$baseurl}/images/9gag-logo-large.png" />
	{/if}
{else}
	<meta property="og:url" content="{$baseurl}/"/>
	<meta property="og:image" content="{$baseurl}/images/9gag-logo-large.png" />
{/if}

<meta property="og:description" content="Nhấn vào để xem ảnh hài bóng đá và tham gia chém gió với bongxoay.vn" />
<meta property="og:type" content="article" />
<meta property="fb:app_id" content="{$FACEBOOK_APP_ID}"/>
<meta property="fb:admins" content="{$FACEBOOK_ADMIN}"/>


<link href="{$baseurl}/css/style_{$lang255}.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="{$baseurl}/slide/jquery.bxslider.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="icon" href="{$baseurl}/images/icon.png" />
<link rel="shortcut icon" href="{$baseurl}/images/icon.png" />
    <script type="text/javascript" src="{$baseurl}/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="{$baseurl}/js/jquery.min.js"></script>

<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script type="text/javascript" src="{$baseurl}/js/jquery.scrollTo-1.4.2-min.js"></script>

<script type="text/javascript" src="{$baseurl}/slide/jquery.bxslider.min.js"></script>

    <script type="text/javascript" src="{$baseurl}/js/embeddable.js"></script>

    <script type="text/javascript" src="{$baseurl}/js/moo-clientcide-1.3.js"></script>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js"></script>-->
    {literal}
    <script type="text/javascript" >
     $(document).ready(function(){
                $(function () {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 250) {
                        $('#head-wrapper').css("position","fixed").css("top","0").css("box-shadow","0 2px 4px #333");
                        }
                        else{
                            $('#head-wrapper').css("position","relative").css("box-shadow","none");
                        }
                    });
                });
            });
    </script>
    {/literal}

{if $RSS eq "1"}
<link rel="alternate" type="application/rss+xml" title="RSS For {$site_name}" href="{$baseurl}/rss.php" />
{/if}


</head>
<body id="page-landing" class="main-body ">

<div id="fb-root"></div>
<script src="http://connect.facebook.net/{if $smarty.session.language eq "ar"}ar_AR{else}en_US{/if}/all.js"></script>
{literal}
<script>
  FB.init({appId: '{/literal}{$FACEBOOK_APP_ID}{literal}', status: true,cookie: true, xfbml: true});
</script>
{/literal}
<div id="tmp-img" style="display:none"></div>
{literal}
<script type="text/javascript">
function myWindow(location, address, gaCategory, gaAction, entryLink) { var w = 640; var h = 460; var sTop = window.screen.height/2-(h/2); var sLeft = window.screen.width/2-(w/2); var sharer = window.open(address, "Share on Facebook", "status=1,height="+h+",width="+w+",top="+sTop+",left="+sLeft+",resizable=0"); }
</script>
{/literal}
<div id="top">
<div id="logo">
<h1><a href="{$baseurl}/"><img src="{$baseurl}/images/logo.png" alt="Bóng Xoáy" /> </a></h1>
</div>
    <div class="facebook-box">
                <div class="icon_face">
                    <img src="{$baseurl}/images/menu/likevachem.png" alt="">
                    <h3>LIKE VÀ CÙNG CHÉM</h3>
                </div>
                <div class="facebook-like">
                    <div class="fb-like" data-href="http://www.facebook.com/{$FACEBOOK_PROFILE}" data-send="false" data-width="290" data-show-faces="false" data-colorscheme="dark"></div>
                </div>
    </div>
    <div class="box_cate">

    </div>
</div>
<div id="searchbar_container">
        <div id="searchbar_wrapper">
            <div id="header_searchbar"  style="display:none;">
                <div id="search_wrapper">
                    <form action="{$baseurl}/search">
                        <input id="sitebar_search_header" type="text" class="search search_input" name="query" tabindex="1" placeholder="{$lang189}"/>
                    </form>
                </div>
            </div>
        </div>
</div>

<div id="head-wrapper" style="position:relative; box-shadow:none; top:0;">



    <div id="head-bar">

        <ul class="main-3-menu">
            <li id="jsid-header-user-menu">
                    <a class="profile-menu-new" style="background:#536da5;" href="#">
                        <img src="{$baseurl}/images/menu.png" alt="Danh mục" />
                    </a>
                    <div class="profile-menu-new-menu">
                        <ul>
                            {if $allchannels}

                                {section name=i loop=$allchannels}
                                    {if $allchannels[i].CID ne 13}
                                        <li style="border-bottom:#bfb8b8 1px solid;">

                                        <a href="{$baseurl}/channels/{$allchannels[i].cname|makeseo}">
                                        <img src="{$baseurl}/images/menu_bx/{$allchannels[i].CID}.png" style="margin-bottom:-7px; padding-right:5px;" />


                                        {if $allchannels[i].CID eq 7}
                                            {$date_month}/Năm Xưa
                                        {else}
                                            {$allchannels[i].cname}
                                        {/if}

                                        </a>
                                        </li>
                                   {/if}
                                {/section}

                            {/if}
                            <li style="border-bottom:#bfb8b8 1px solid;">
                            <a href="{$baseurl}/channels/video-bong-da">
                            <img src="{$baseurl}/images/menu_bx/9.png" style="margin-bottom:-7px; padding-right:5px;" />
                            Bóng Xoáy TV
                            </a></li>

                            <li style="border-bottom:#bfb8b8 1px solid;">
                            <a href="{$baseurl}/channels/hinh-dong">
                            <img src="{$baseurl}/images/menu/gif.png" style="margin-bottom:-7px; padding-right:5px;" />
                            Hình động
                            </a></li>

                             <li style="border-bottom:#bfb8b8 1px solid;">
                            <a href="{$baseurl}/vote">
                            <img src="{$baseurl}/images/menu/vote.png" style="margin-bottom:-7px; padding-right:5px;" />
                            Chờ Duyệt
                            </a></li>

                             <li style="border-bottom:#bfb8b8 1px solid;">
                            <a href="http://www.facebook.com/bongxoay" target="_blank">
                            <img src="{$baseurl}/images/menu/facebook.png" style="margin-bottom:-7px; padding-right:5px;" />
                           Facebook Bóng Xoáy
                            </a></li>

                        </ul>
                    </div>
                </li>
        </ul>
        <!--<h1><a href="{$baseurl}/">{$site_name}</a></h1>-->
        <ul id="nav" class="main-menu" style="overflow:visible">
            <li><a href="{$baseurl}" title="Trang Chủ"><img src="{$baseurl}/images/menu/noibat.png" style="margin-bottom:-15px; padding-right:5px;" />
                    <span class="{if $menu eq 1}current_active{/if}">Nổi Bật</span>
                </a>
            </li>
            {if $trendingenabled eq "1"}<li><a class="{if $menu eq 2}current{/if}" href="{$baseurl}/trending">{$lang173}</a></li>{/if}
            {if $allchannels}
				{section name=i loop=$allchannels}
                      {if $allchannels[i].fav eq 1}
                    	<li><a href="{$baseurl}/channels/{$allchannels[i].cname|makeseo}">
                            <img src="{$baseurl}/images/menu/{$allchannels[i].CID}.png" style="margin-bottom:-15px; padding-right:5px;" />
                            <span class="{if $allchannels[i].cname|makeseo eq $cname2}current_active{/if}">{$allchannels[i].cname}</span>
                        </a>
                        </li>
                      {/if}
             	{/section}

			{/if}
             <li><a  href="{$baseurl}/channels/video-bong-da"><img src="{$baseurl}/images/menu/bongxoaytv.png" style="margin-bottom:-15px; padding-right:5px;" /><span class="{if $cname2 eq 'video-bong-da'}current_active{/if}" style="text-decoration: none;">
                     Bóng Xoáy TV</span>
                 </a>
             </li>
             <li><a href="{$baseurl}/vote"><img src="{$baseurl}/images/menu/choduyet.png" style="margin-bottom:-19px; padding-right:5px;" /><span class="{if $menu eq 3}current_active{/if}">{$lang174}</span></a></li>
            <li style="margin-right: 5px;">
                <a href=""><img src="{$baseurl}/images/menu/cheanh.png" style="margin-bottom:-14px; padding-right:5px;" />
                    <span class="{if $menu eq 12}current_active{/if}">Chế ảnh</span></a>
                    <ul>
                        <li><a href="{$baseurl}/meme">Chế meme</a></li>
                        <li><a href="{$baseurl}/comic">Chế comic</a></li>
                    </ul>
                </a>
            </li>
			{if $topposts OR $topusers}
			<li><a class="{if $menu eq 4}current_active{/if}">Top</a>
				<ul>
					{if $topusers EQ 1}<li><a href="{$baseurl}/top-users">{$lang260}</a></li>{/if}
					{if $topposts EQ 1}<li><a href="{$baseurl}/top-posts">{$lang278}</a></li>{/if}
				</ul>
			</li>
			{/if}
        </ul>
        <ul class="main-2-menu">
			<li><a class="add-post {if $menu eq 6}current{/if}" href="{$baseurl}/submit"><span class="add-post {if $menu eq 6}current_active{/if}">{$lang199}</span></a></li>
            {if $smarty.session.USERID ne ""}
			<li><a class="notification-count {if $smarty.session.NTOTAL ne "0"}new{/if}" href="{$baseurl}/notifications"><span id="">{$smarty.session.NTOTAL}</span></a></li>
            <li id="jsid-header-user-menu">
				{insert name=get_member_profilepicture assign=profilepicture value=var USERID=$smarty.session.USERID}
                <a class="profile-menu-new" style="margin:5px;" href="{$baseurl}/user/{$smarty.session.USERNAME|stripslashes}">
                	{if $profilepicture eq ""}
                    	<img src="http://graph.facebook.com/{$smarty.session.FACEBOOKID}/picture?type=normal" width="40" height="40" alt="Profile Pic" />
                    {else}
                    	<img src="{$membersprofilepicurl}/thumbs/{$profilepicture}" width="40" height="40" alt="Profile Pic" />
                    {/if}
                    <span class="drop"></span>
                </a>
                <div class="profile-menu-new-menu">
                    <ul>
                        <li><a href="{$baseurl}/user/{$smarty.session.USERNAME|stripslashes}">Bài của bạn</a></li>
                        <li><a href="{$baseurl}/settings">Cài đặt</a></li>
                        <li><a href="{$baseurl}/logout">{$lang198}</a></li>
                    </ul>
				</div>
			</li>
            {else}

            <li>

            <a class="button" label="LoginFormFacebookButton" next="" href="https://www.facebook.com/dialog/permissions.request?app_id={$FACEBOOK_APP_ID}&display=page&next={$baseurl}/&response_type=code&fbconnect=1&perms=email,user_birthday,user_about_me,publish_stream">{$lang197}</a>


            </li>

            {/if}

            <li><a class="search-button search-toggler" href="javascript:void(0);"><strong>{$lang189}</strong></a></li>



        </ul>
    </div>

</div>
{literal}
<script type="text/javascript">
$('.search-button').click(function(){$('#header_searchbar').toggle('slow');});
</script>
{/literal}
<div id="container" style="">
{if $topgags|is_array}
<div class="feature-bar-wraper">
<div class="feature-title-left">
</div>
<div class="feature-title">
NÓNG HỔI VỪA THỔI VỪA ĐỌC
    <div class="gamebai">
        <div style="text-decoration:blink;float: left;margin-right: 5px"><img src="{$baseurl}/images/gamebai888/choingay.gif" alt=""></div>
        <a style="margin-right: 8px"  title="Tiến lên miền nam" href="http://gamebai888.com/tien-len-mien-nam.888" target="_blank"><img height="50px" src="{$baseurl}/images/gamebai888/tienlenmiennam.png"/></a>&nbsp;&nbsp;
        <a style="margin-right: 8px" title="Sâm" href="http://gamebai888.com/sam.888" target="_blank"><img height="50px" src="{$baseurl}/images/gamebai888/sam.png" /></a>&nbsp;&nbsp;
        <a style="margin-right: 15px" title="Mậu binh" href="http://gamebai888.com/mau-binh.888" target="_blank"><img height="50px" src="{$baseurl}/images/gamebai888/maubinh.png" /></a>
        <a style="margin-right: 15px" title="Phỏm" href="http://gamebai888.com/phom.888" target="_blank"><img height="50px" src="{$baseurl}/images/gamebai888/phom.png" /></a>
        <span style="float:right;margin-top: 8px">
            <a title="Phiên bản Mobile" href="http://m.bongxoay.com"><img height="32px" src="{$baseurl}/images/mobile_icon.png"/></a>&nbsp;&nbsp;
            <a href="http://www.facebook.com/bongxoay" target="_blank"><img src="{$baseurl}/images/fb-nav.png" /></a>&nbsp;&nbsp;
            <a href="https://twitter.com/bongxoay" target="_blank"><img src="{$baseurl}/images/twitter_nav.png" /></a>
        </span>
    </div>

</div>
<div class="feature-title-right">
</div>
</div>
    {literal}
        <script type="text/javascript">
            $(document).ready(function(){
                jQuery('.bxslider').bxSlider({
                    auto: true,
                    autoControls: true,
                    minSlides:5,
                    maxSlides: 5,
                    slideWidth: 190,
                    slideHeight: 190,
                    slideMargin: 12
                });
            });
        </script>
    {/literal}
<div class="feature-bar">
    <ul class="bxslider">
            {section name=f loop=$topgags}
            <li style="height: 140px">
                <a href="{$baseurl}{$postfolder}{$topgags[f].PID}/{if $SEO eq "1"}{$topgags[f].story|makeseo}.html{/if}">
                <img src="{$purl}/t/s-{$topgags[f].pic}" alt="{$topgags[f].story|stripslashes}">
                <span class="title">{$topgags[f].story}</span>
                </a>
            </li>
        {/section}
    </ul>
</div>
{/if}
{if $viewpage eq "1"}
{include file='js_view.tpl'}
{else}
{include file='js_index.tpl'}
{/if}