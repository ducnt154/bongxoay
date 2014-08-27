<div id="main">
    <div id="content-holder">		
        <div class="profile-pad">
            <div class="profile-image">
                <a href="{$baseurl}/user/{$p.username|stripslashes}">
                {insert name=get_member_profilepicture assign=profilepicture value=var USERID=$smarty.session.USERID}
                <img src="{$membersprofilepicurl}/{$profilepicture}?{$smarty.now}" alt="{$p.username|stripslashes}" />
                </a>
            </div>
            <div class="profile-info" href="#" style="background:#{$p.color1}">
                <h3><a href="{$baseurl}/user/{$p.username|stripslashes}">{$p.username|stripslashes}</a></h3>
                <h4>{insert name=country_code_to_country value=a assign=country code=$p.country}{$country}</h4>
                <p>{$p.description|stripslashes}</p>  
                <p><a href="{$p.website|stripslashes}" target="_blank" style="color:#{$p.color2}">{$p.website|stripslashes}</a></p>              
            </div>
        </div>
        <div class="main-filter with-topping">
            <ul class="content-type">            
                <li><a href="{$baseurl}/user/{$p.username|stripslashes}"><strong>{$lang192}</strong> ({$totalposts})</a></li>
                <li><a class="current"  href="{$baseurl}/user/{$p.username|stripslashes}/likes"><strong>{$lang193}</strong> ({$totallikes})</a></li>            
            </ul>
        	{if $smarty.session.USERID ne ""}
                {if $smarty.session.FILTER eq "1"}
                <a class="safe-mode-switcher on" href="{$baseurl}/safe?m={$eurl}">&nbsp;</a>
                {else}
                <a class="safe-mode-switcher off" href="{$baseurl}/safe?m={$eurl}&o=1">&nbsp;</a>
                {/if}
            {else}
            	<a class="safe-mode-switcher on" href="{$baseurl}/login">&nbsp;</a>
            {/if}
        </div>
        <div id="content" listPage="">
            <div id="entries-content" class="list">
                <ul id="entries-content-ul" class="col-1">
                    {include file="posts_bit.tpl"}
                </ul>
            </div>
			<div id="paging-buttons" class="paging-buttons">
            	{if $tpp ne ""}
                <a href="{$baseurl}/user/{$p.username|stripslashes}/likes?page={$tpp}" class="previous">&laquo; {$lang166}</a>
                {else}
                <a href="#" onclick="return false;" class="previous disabled">&laquo; {$lang166}</a>
                {/if}
                {if $tnp ne ""}
                <a href="{$baseurl}/user/{$p.username|stripslashes}/likes?page={$tnp}" class="older">{$lang167} &raquo;</a>
                {else}
                <a href="#" onclick="return false;" class="older disabled">{$lang167} &raquo;</a>
                {/if}
            </div>	
        </div>
    </div>
</div>
{include file='right.tpl'}
{include file='js_vote.tpl'}
{include file='js_movingboxs.tpl'}   
<div id="footer" class="">