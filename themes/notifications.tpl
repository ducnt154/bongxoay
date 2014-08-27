<div id="main">
    <div id="content-holder">        
        <div class="main-filter ">
            <div id="use-tips">
                <div id="view-info" class="list-tips">
                    <span style="font-size:13pt;font-family:tahoma;margin-top:10px;"><b>Notifications</b>:</span>
                </div>
            </div>
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
            <div id="entries-content" class="list" style="padding-top:0px;">
                <div style="margin:-15px 10px;font-size:13px;">
					{if $notification_msg ne ""}<div style="margin-top:15px;">{$notification_msg}</div>{/if}
					{foreach item=notification from=$notifications}
                    <h3 style="display:block;font-size:1.17em;font-weight:bold;margin-top:15px;">{$notification.date}</h3>
						{foreach item=reply from=$notification.replies}
							<a href="{$baseurl}/user/{$reply.username}" target="_blank">{$reply.username}</a>{if $reply.type eq "1"}{if $reply.favclicks GT 2} and {math equation="x - 2" x=$reply.favclicks} others{/if} upvoted{else}{if $reply.unfavclicks GT 1} and {math equation="x - 1" x=$reply.unfavclicks} others{/if} downvoted{/if} <a href="{$baseurl}{$postfolder}{$reply.PID}" target="_blank">{$reply.story}</a>.
							<span style="color:#999;">{insert name=get_time_to_days_ago time=$reply.time_added}</span><br>
						{/foreach}
					{/foreach} 
					<hr>
                 </div>
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
        </div>
    </div>
</div>
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