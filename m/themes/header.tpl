<!DOCTYPE html>

<html lang="en" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head> 
	<title>{if $pagetitle ne ""}{$pagetitle} - {/if}{$site_name}</title>
	<meta charset="utf-8">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport'>
	<meta name="keywords" content="{if $pagetitle ne ""}{$pagetitle},{/if}{if $metakeywords ne ""}{$metakeywords},{/if}{$site_name}"/>
	<meta name="description" content="{if $pagetitle ne ""}{$pagetitle} - {/if}{if $metadescription ne ""}{$metadescription} - {/if}{$site_name}"/>
	<meta name="twitter:card" value="summary"/>
	<meta name="twitter:site" value="@{$twitter}"/>
	<meta name="twitter:image" value="{$mobileurl}/img/9gag-fb-pic.png"/>

	<meta property="og:title" content="{if $pagetitle ne ""}{$pagetitle} - {/if}{$site_name}"/>
	<meta property="og:site_name" content="{$site_name}"/>
	{if $p.PID ne ""}
		<meta property="og:url" content="{$baseurl}{$postfolder}{$p.PID}/"/>
		{if $p.pic ne ""}
			<meta property="og:image" content="{$purl}/t/l-{$p.pic}" />
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
	<meta property="og:description" content="Nhấn vào để xem ảnh và tham gia chém gió với bongxoay.com" />
	<meta property="og:type" content="article" />
	<meta property="fb:app_id" content="{$FACEBOOK_APP_ID}"/>
	<meta property="fb:admins" content="{$FACEBOOK_ADMIN}"/>
    

	<link href="{$mobileurl}/css/screen.css" media="screen" rel="stylesheet" type="text/css" >
	<link href="{$mobileurl}/css/jquery.mobile.structure-1.3.1.min.css" media="screen" rel="stylesheet" type="text/css" >
    
   
    
	<script type="text/javascript" src="{$mobileurl}/js/jquery.min.1.7.2.js"></script>
	<script type="text/javascript" src="{$mobileurl}/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="{$mobileurl}/js/jquery.tmpl.min.js"></script>
	<script type="text/javascript" src="{$mobileurl}/js/underscore-min-1.4.4.js"></script>
	<script type="text/javascript" src="{$mobileurl}/js/b9gcs_v4.1.js"></script>


    
  
	<link rel="shortcut icon" href="{$mobileurl}/img/favicon_v2.png" />
	<link rel="apple-touch-icon-precomposed" media="screen and (resolution: 163dpi)" href="{$mobileurl}/img/icon57.png" />
	<link rel="apple-touch-icon-precomposed" media="screen and (resolution: 132dpi)" href="{$mobileurl}/img/icon72.png" />
	<link rel="apple-touch-icon-precomposed" media="screen and (resolution: 326dpi)" href="{$mobileurl}/img/icon114.png" />
<script type="text/javascript"> 
	var themobileurl = '{$mobileurl}';
</script>


</head>
<body>
<div id="tmp-img" style="display:none"></div>
{literal}
<script type="text/javascript"> 
if (!window.console) { window.console = {log: function(){}} };
function rmt(l) { var img = new Image(); img.src = l; document.getElementById('tmp-img').appendChild(img); }
function fbWindow(location, address) { var w = 640; var h = 460; var sTop = window.screen.height/2-(h/2); var sLeft = window.screen.width/2-(w/2); var sharer = window.open(address, "Share", "status=1,height="+h+",width="+w+",top="+sTop+",left="+sLeft+",resizable=0"); }
function twttrWindow(location, address) {var w = 640; var h = 460; var sTop = window.screen.height/2-(h/2); var sLeft = window.screen.width/2-(w/2); var sharer = window.open(address, "Share", "status=1,height="+h+",width="+w+",top="+sTop+",left="+sLeft+",resizable=0"); }
</script>
{/literal}
<div id="container">
    <div id="head-bar">
       <!-- <h1><a href="{$mobileurl}">{$site_name}</a></h1> -->
 
         <a id="target-head-list-toggle" class="left" href="javascript:void(0);" ><img src="{$mobileurl}/img/menu.png" /></a>
         <a class="left current" href="{$mobileurl}" ><img src="{$mobileurl}/img/home-icon.png" /></a>
         
          
           {if $allchannels}
				
				{section name=i loop=$allchannels}
                      {if $allchannels[i].mfav eq 1}
                    	<a href="{$mobileurl}/channels/{$allchannels[i].CID}" class="left">
                        <span>{$allchannels[i].cname}</span>
                        </a>
                      {/if}
             	{/section} 
             
			{/if}
            
            <a {if $section eq "vote"}class="left current" {else} class="left"{/if} href="{$mobileurl}/vote"><span>{$lang174}</span></a>
            <a href="{$baseurl}?nomobileview=1"><img src="{$mobileurl}/img/desktop.png" style="padding: 10px 0px 0px 2px;" /></a>
	</div><!--end head-bar-->
   

    <div id="content">
        <div class="main-menu">
			
			<div id="target-list-main-nav" class="main-nav" style="display:none; position:fixed; float:right; z-index:100; width:200px; margin-top:-16px;">
				<ul>
                	<li><a href="{$mobileurl}"><img src="{$mobileurl}/img/home-icon-menu.png" style="margin-bottom:-4px;" /> Trang chủ</a></li>
					
                     {if $allchannels}
			
                        {section name=i loop=$allchannels}
                            {if $allchannels[i].CID ne 13}
                                <li><a class="{if $CID eq $allchannels[i].CID}selected{/if}" href="{$mobileurl}/channels/{$allchannels[i].CID}">
                                <img src="{$baseurl}/images/menu/{$allchannels[i].CID}.png" width="20" style="margin-bottom:-4px;" />
                                {if $allchannels[i].CID eq 7}
                                    {$date_month}/Năm Xưa
                                {else}
                                    {$allchannels[i].cname}
                                {/if}
                                {if $CID eq $allchannels[i].CID}<span class="selected-indicator">&#10004;</span>{/if}
                                </a>
                                </li>
                           {/if}
                        {/section} 
                        
                    {/if}
                     <li><a href="{$mobileurl}/channels/video"><img width="20" src="{$baseurl}/images/menu/video.png" style="margin-bottom:-4px;" /> Bóng Xoáy TV</a></li>
                    <!--
                    <li><a {if $section eq "vote"}class="selected"{/if} href="{$mobileurl}/vote">{$lang174}{if $section eq "vote"}<span class="selected-indicator">&#10004;</span>{/if}</a></li>
                 	-->
                    {if $smarty.session.USERID eq ""}
                    <li><a  href="https://www.facebook.com/dialog/permissions.request?app_id={$FACEBOOK_APP_ID}&display=page&next={$mobileurl}/&response_type=code&fbconnect=1&perms=email,user_birthday,user_about_me,publish_stream"><img src="{$mobileurl}/img/facebook-icon.png" width="20" style="margin-bottom:-4px;" /> Đăng nhập </a></li>
                    
                    {else}
                    
                    <li><a href="/submit">Đăng Bài</a></li>
            		<li><a href="/logout">Thoát</a></li>
                   
                    {/if}
                    
                    <li><a href="{$baseurl}?nomobileview=1"><img src="{$mobileurl}/img/desktop.png" style="margin-bottom:-4px;" /> Phiên bản máy tính</a></li>
				</ul>
				{if $safemode eq "1"}
				<div class="field">
					<h3>Safe Mode</h3>
					{if $smarty.session.USERID ne ""}
						{if $smarty.session.FILTER eq "1"}
						<a class="toggle selected" href="{$mobileurl}/safe?m={$eurl}">
						{else}
						<a class="toggle" href="{$mobileurl}/safe?m={$eurl}&o=1">
						{/if}
					{else}
						<a class="toggle selected" href="{$mobileurl}/login">
					{/if}
						<div class="track">
							<span class="label on">On</span>
							<span class="knob"></span>
							<span class="label off">Off</span>
						</div><!--end track-->
					</a>
				</div><!--end .field-->
				{/if}
				
					
				
			</div><!--end main-nav-->
		</div>
        <div style="text-align:center; margin-top:50px;">
        <a href="{$mobileurl}"><img width="150px" src="{$mobileurl}/img/logo.png" /></a>
        <h3>{$lang153} <a href="https://www.facebook.com/bongxoay" target="_blank">{$site_name}</a></h3>
            <div class="facebook-like">
				<div class="fb-like" data-href="http://www.facebook.com/{$FACEBOOK_PROFILE}" data-send="false" data-width="300" data-show-faces="true"></div>
            </div>
        </div>
        