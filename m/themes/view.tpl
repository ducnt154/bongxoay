	<div id="fb-root"></div>
	<script src="http://connect.facebook.net/{if $smarty.session.language eq "ar"}ar_AR{else}en_US{/if}/all.js"></script>
	{if $enable_fc eq "1"}
		{literal}
			<script>
			  FB.init({appId: '{/literal}{$FACEBOOK_APP_ID}{literal}', status: true,cookie: true, xfbml: true});	  
			</script>
		{/literal}
	{/if}
	<div id="jsid-entry-wrapper">
		<div id="content">
			<div id="jsid-content-container">
				<div id="jsid-content-item" data-key="id:{$p.PID}" data-title="{$p.story|stripslashes}" data-nsfw="">
					<h2>
                    {if $p.gif eq "1"}
                          {$lang287}
                    {/if}
                    {$p.title|stripslashes}</h2>
					<div class="post-container">
						{if $p.nsfw eq "1" AND $smarty.session.FILTER ne "0"}
							<img src="{$mobileurl}/img/nsfw_thumb.jpg" alt="{$p.story|stripslashes}" />
						{else}
							{if $p.pic ne ""}
								<a href="{$purl}/t/{$p.pic}"><img alt="{$p.story|stripslashes}" src="{$purl}/t/{$p.pic}" /></a>
							{else}
								{if $p.youtube_key != ""}
								<center>{insert name=return_youtube_mobile value=a assign=youtube youtube=$p.youtube_key}{$youtube}</center>
								{elseif $p.fod_key != ""}
								<center>{insert name=return_fod_mobile value=a assign=fod fod=$p.fod_key}{$fod}</center>
								{elseif $p.vfy_key != ""}
								<center>{insert name=return_vfy_mobile value=a assign=vfy vfy=$p.vfy_key}{$vfy}</center>
								{elseif $p.vmo_key != ""}
								<center>{insert name=return_vmo_mobile value=a assign=vmo vmo=$p.vmo_key}{$vmo}</center>
								{else}
								<center>{$lang143}</center>
								{/if}
							{/if}
						{/if}
						{if $displaywm eq "0" AND $p.pic ne "" AND $p.gif ne "1"}
							<div class="watermark-clear2"></div>
						{/if}
						{if $next ne ""}
							<a class="page-turn next badge-page-turn" href="{$mobileurl}{$postfolder}{$next}"><span>&#9654;</span></a>
						{else}
							<a class="page-turn next badge-page-turn" href="{$mobileurl}/random.php"><span>&#9654;</span></a>
						{/if}
						{if $prev ne ""}
							<a class="page-turn prev badge-page-turn" href="{$mobileurl}{$postfolder}{$prev}"><span class="rotate-180">&#9654;</span></a>
						{else}
							<a class="page-turn prev badge-page-turn" href="{$mobileurl}/random.php"><span class="rotate-180">&#9654;</span></a>
						{/if}
					</div><!--end post-container-->
                	<div class="post-meta">
						<div class="info">
							<p class="right">{insert name=get_time_to_days_ago time=$p.time_added}</p>
						</div><!--end .info-->
					</div><!--end post-meta-->
                    
					<div id="post-stats-{$p.PID}" class="post-stats bottom-20" myScore="0">
					<p><fb:like href="{$baseurl}{$postfolder}{$p.PID}/{if $SEO eq "1"}{$p.story|makeseo}.html{/if}?ref=fb" send="false" layout="button_count" width="90px" show_faces="false" font="" label="Post"></fb:like></p>
					<p class="comment-expand"><a class="badge-btn-toggle-comment" href="javascript:void(0);" entryId="{$p.PID}"><fb:comments-count href="{$baseurl}{$postfolder}{$p.PID}/{if $SEO eq "1"}{$p.story|makeseo}.html{/if}"></fb:comments-count> bình luận</a></p>
					<div class="facebook-comment" id="post-fb-comment">
						<div class="fb-comments" data-href="{$baseurl}{$postfolder}{$p.PID}/{if $SEO eq "1"}{$p.story|makeseo}.html{/if}" data-num-posts="2" data-width="320"></div>
					</div><!--end facebook-comment-->
				</div><!--end post-stats-->
				</div>
			</div>

			<!-- m.9gag-adx-top10-post-320x50 -->
			<div id='div-gpt-ad-1365732793246-0'>
			 Ad #2
			</div>
			{if $suggested||is_array}
            <div class="section-header">
				<h2>Bài Xoáy</h2>
			</div>
            <ul class="list-view">
			{section name=j loop=$suggested}
                <li>
					<a href="{$mobileurl}{$postfolder}{$suggested[j].PID}">
						<img src="{$purl}/t/s-{$suggested[j].pic}" alt=""/>
						<div class="info">
							<h3>{$suggested[j].story}</h3>
							<p>{$suggested[j].favclicks}</p>
						</div><!--end .info-->
					</a>
				</li>
			{/section}
            </ul>
			{/if}
            <!-- m.9gag-adx-top10-post-abovecomment-300x250 -->
			<div id='div-gpt-ad-1365732793246-1'>
			 Ad #3
			</div>
			<div class="button-container">
				<a class="button badge-switch-view" href="{$baseurl}{$postfolder}{$p.PID}&nomobileview=1">Phiên bản máy tính</a>
			</div>
		</div><!--end #content-->
    </div>
    	{include file='js_vote.tpl'}
		{literal}
		<script type="text/javascript">
		jQuery('.badge-btn-toggle-comment').click(function(){
		jQuery('#post-fb-comment').toggle('fast');
		});
		</script>
		{/literal}