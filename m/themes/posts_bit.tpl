{if $json eq "1" AND $posts||is_array}
	<div id="fb-root"></div>
	<script src="http://connect.facebook.net/{if $smarty.session.language eq "ar"}ar_AR{else}en_US{/if}/all.js"></script>
	{if $enable_fc eq "1"}
		{literal}
			<script>
			  FB.init({appId: '{/literal}{$FACEBOOK_APP_ID}{literal}', status: true,cookie: true, xfbml: true});	  
			</script>
		{/literal}
	{/if}
{/if}
{section name=i loop=$posts}
			<li id="list-item-{$posts[i].PID}" class="badge-list-item badge-list-item-unread">
				<h2><a href="{$mobileurl}{$postfolder}{$posts[i].PID}">
                	{if $posts[i].gif eq "1"}
                          {$lang287}
                    {/if}
                	{$posts[i].title|stripslashes}
                </a></h2>
				<div class="post-container">
					{if $posts[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}
					<a href="{$mobileurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}" target="_blank">
						<img src="{$mobileurl}/img/nsfw_thumb.jpg" alt="" style="display: none;" />
						<img src="{$mobileurl}/img/nsfw_thumb.jpg" alt="{$posts[i].story|stripslashes}" />
					</a>
					{else}
						{if $posts[i].pic ne ""}
							<a href="{$mobileurl}{$postfolder}{$posts[i].PID}"> 
                            	{if $posts[i].pic ne "" AND $posts[i].gif eq "1"}
                                           <img src="{$purl}/t/{$posts[i].PID}.jpg" alt="{$posts[i].story|stripslashes}" /><span class="play">Play</span>
                                           
                                {else}
                                	<img src="{$purl}/t/s-{$posts[i].pic}" border="0" alt="" style="display: none;" />
									<img src="{$purl}/t/{$posts[i].pic}" border="0" alt="{$posts[i].story|stripslashes}" />
                                {/if}
								
							</a>
						{else}
							{if $posts[i].youtube_key != ""}
								<center>{insert name=return_youtube_mobile value=a assign=youtube youtube=$posts[i].youtube_key}{$youtube}</center>
							{elseif $posts[i].fod_key != ""}
								<center>{insert name=return_fod_mobile value=a assign=fod fod=$posts[i].fod_key}{$fod}</center>
							{elseif $posts[i].vfy_key != ""}
								<center>{insert name=return_vfy_mobile value=a assign=vfy vfy=$posts[i].vfy_key}{$vfy}</center>
							{elseif $posts[i].vmo_key != ""}
								<center>{insert name=return_vmo_mobile value=a assign=vmo vmo=$posts[i].vmo_key}{$vmo}</center>
							{else}
								<center>{$lang143}</center>
							{/if}
						{/if}
					{/if}
					{if $displaywm eq "0" AND $posts[i].pic ne "" AND $posts[i].gif ne "1"}
						<div class="watermark-clear"></div>
					{/if}
                </div><!--end .post-continaer-->
                <div class="post-meta">
					<a class="profile" href="javascript:void(0);" style="cursor:default;">
                        <img src="{$membersprofilepicurl}/{$posts[i].profilepicture}" style="width:100px;height:100px;"/>
                    </a>
					<div class="info">
						<h4><a href="javascript:void(0);">{$posts[i].username}</a></h4>
					</div><!--end .info-->
				</div><!--end post-meta-->
                
				<div id="post-stats-{$posts[i].PID}" class="post-stats bottom-20" myScore="0">
                
                    <p><fb:like href="{$baseurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}?ref=fb" send="false" layout="button_count" width="90px" show_faces="false" font="" label="Post"></fb:like></p>
                    
					<p class="comment-expand"><a class="badge-btn-toggle-comment" href="javascript:void(0);" entryId="{$posts[i].PID}"><fb:comments-count href="{$baseurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}"></fb:comments-count> bình luận</a></p>
					<div class="facebook-comment" id="list-item-fb-comment-{$posts[i].PID}" style="display:none;">
						<div class="fb-comments" data-href="{$baseurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}" data-num-posts="2" data-width="320"></div>
					</div><!--end facebook-comment-->
				</div><!--end post-stats-->
			</li>
			{if $smarty.section.i.iteration EQ 3 AND $json ne "1"}
			<li><!-- m.9gag-adx-top10-list-300x250 -->
				<div id='div-gpt-ad-1365732552334-0'>
					{insert name=get_advertisement AID=8}
				</div>
			</li>
			{/if}
{/section}
{if $posts||is_array}
{literal}
<script type="text/javascript">
jQuery('.badge-btn-toggle-comment').click(function(){
var id=jQuery(this).attr('entryId');
jQuery('#list-item-fb-comment-'+id).toggle('fast');
});
</script>
{/literal}
{include file='js_vote.tpl'}
{/if}