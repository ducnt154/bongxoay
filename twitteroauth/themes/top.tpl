<div id="main">
    <div id="content-holder">        
        <div class="main-filter ">
            <ul class="content-type">
                <li> <a {if $period eq "day"}class="current"{else}class=""{/if} href="{$baseurl}/top/day"><strong>{$lang279}</strong></a></li>
                <li> <a {if $period eq "week"}class="current"{else}class=""{/if} href="{$baseurl}/top/week"><strong>{$lang280}</strong></a></li>
                <li> <a {if $period eq "month"}class="current"{else}class=""{/if} href="{$baseurl}/top/month"><strong>{$lang281}</strong></a></li>                
                <li> <a {if $period eq "all"}class="current"{else}class=""{/if} href="{$baseurl}/top/all"><strong>{$lang282}</strong></a></li>                
            </ul>
            {if $safemode eq "1"}
			{if $smarty.session.USERID ne ""}
                {if $smarty.session.FILTER eq "1"}
                <a class="safe-mode-switcher on" href="{$baseurl}/safe?m={$eurl}">&nbsp;</a>
                {else}
                <a class="safe-mode-switcher off" href="{$baseurl}/safe?m={$eurl}&o=1">&nbsp;</a>
                {/if}
            {else}
            	<a class="safe-mode-switcher on" href="{$baseurl}/login">&nbsp;</a>
            {/if}
			{/if}
        </div>
        <div id="content" listPage="hot">            
            <div id="entries-content" class="list">
                <ul id="entries-content-ul" class="col-1">
                    {include file="posts_bit.tpl"}
                </ul>
            </div>	
            <div id="lastPostsLoader"></div>                
 			{literal}
                <script type="text/javascript">
				$(document).ready(function(){
					$(window).scroll(function(){
					if (document.documentElement.scrollTop)
					{ var  curloc = document.documentElement.scrollTop; }
					else
					{ var curloc=$(window).scrollTop(); }
					if(curloc>$(window).height()){$('#backtotop').slideDown();}else{$('#backtotop').slideUp();};
					});
					});
				</script>
			{/literal}
            <div id="paging-buttons" class="paging-buttons">
            	{if $tpp ne ""}
                <a href="{$baseurl}/top/{if $period eq "all"}all{elseif $period eq "month"}month{elseif $period eq "week"}week{else}day{/if}?page={$tpp}" class="previous">&laquo; {$lang166}</a>
                {else}
                <a href="#" onclick="return false;" class="previous disabled">&laquo; {$lang166}</a>
                {/if}
                {if $tnp ne ""}
                <a href="{$baseurl}/top/{if $period eq "all"}all{elseif $period eq "month"}month{elseif $period eq "week"}week{else}day{/if}?page={$tnp}" class="older">{$lang167} &raquo;</a>
                {else}
                <a href="#" onclick="return false;" class="older disabled">{$lang167} &raquo;</a>
                {/if}
            </div>		
        </div>
    </div>
</div>
{include file='js_vote.tpl'}
{include file='right.tpl'}
{literal}
<script type="text/javascript">
var adloca=$('#moving-boxes').offset().top; 
 $(window).scroll(function () { 
    var curloca=$(window).scrollTop();
    if(curloca>adloca){
        $('#moving-boxes').css('position','fixed');
        $('#moving-boxes').css('top','55px');
        $('#moving-boxes').css('z-index','0');
    };
    if(curloca <= adloca){
        $('#moving-boxes').css('position','static');
        $('#moving-boxes').css('top','!important');
        $('#moving-boxes').css('z-index','!important');
    };
    });
</script> 
{/literal}   
<div id="footer" class="">