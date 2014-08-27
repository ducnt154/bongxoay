{if $loadmore eq "1"}
	<div id="fb-root"></div>
	<script src="http://connect.facebook.net/{if $smarty.session.language eq "ar"}ar_AR{else}en_US{/if}/all.js"></script>
	{if $enable_fc eq "1"}
		{literal}
			<script>
			  FB.init({appId: '{/literal}{$FACEBOOK_APP_ID}{literal}', status: true,cookie: true, xfbml: true});
			</script>
		{/literal}
	{/if}
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src='http://static.ak.fbcdn.net/connect.php/js/FB.Share' type='text/javascript'></script>
{/if}
{section name=i loop=$posts}
					<li class=" gag-link" data-url="{$baseurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}" data-text="{$posts[i].story|stripslashes|truncate:20:"...":true}" gagId="{$posts[i].PID}" itemType="list" id="entry-{$posts[i].PID}">
                        <div class="content">
                            <div class="img-wrap">
                                {if $posts[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}
                                	<a href="{$baseurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}" target="_blank"><img src="{$baseurl}/images/nsfw.jpg" alt="{$posts[i].story|stripslashes}" /></a>
                                {else}
                                	{if $posts[i].pic ne ""}
                                        {if $posts[i].pic ne "" AND $posts[i].gif eq "1"}
                                            <a href="{$baseurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}" target="_blank"><img src="{$purl}/t/{$posts[i].PID}.jpg" alt="{$posts[i].story|stripslashes}" width="400" /><span class="play">Play</span>
                                            </a>
                                    {elseif $posts[i].status_che eq "1"}
                                    <a href="{$baseurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}" target="_blank"><img src="{$baseurl}/meme/c/{$posts[i].pic}" alt="{$posts[i].story|stripslashes}" width="400" />
                                    </a>
                                        {else}
                                            <a href="{$baseurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}" target="_blank"><img src="{$purl}/t/{$posts[i].pic}" alt="{$posts[i].story|stripslashes}" /></a>
                                        {/if}

                                    {else}
                                        {if $posts[i].youtube_key != ""}
                                      <!--  <center>
                                        {insert name=return_youtube2 value=a assign=youtube youtube=$posts[i].youtube_key}{$youtube}
                                        </center>-->
                                <center style="height:350px">
                                    <a target="_blank" href="{$baseurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}">
                                    <img style="max-width:460px" src="http://img.youtube.com/vi/{$posts[i].youtube_key}/0.jpg" alt="{$posts[i].story|stripslashes}" />
                                    <img style="position:relative;top:-224px;height: 87px" src="{$baseurl}/images/play.png"></img></a>
                                </center>
                                        {elseif $posts[i].fod_key != ""}
                                        <center>
                                        {insert name=return_fod2 value=a assign=fod fod=$posts[i].fod_key}{$fod}
                                        </center>
										{elseif $posts[i].vfy_key != ""}
										<center>{insert name=return_vfy2 value=a assign=vfy vfy=$posts[i].vfy_key}{$vfy}</center>
										{elseif $posts[i].vmo_key != ""}
										<center>{insert name=return_vmo2 value=a assign=vmo vmo=$posts[i].vmo_key}{$vmo}</center>
                                        {elseif $posts[i].contents != ""}
                                    <center style="width:460px; overflow: hidden;margin-top: -11px">
                                        {$posts[i].contents|strip_mq_gpc}
                                    </center>
                                        {else}
										<center>{$lang264}</center>
                                        {/if}
                                    {/if}
                                {/if}
                            </div>
                            {if $displaywm eq "0" AND $posts[i].pic ne "" AND $posts[i].gif ne "1"}
							<div class="watermark-clear"></div>
							{/if}
                        </div>
                        <div style="position:relative;width:220px;float:right">
                            <div class="info b9gcs-stop" id="action-{$posts[i].PID}" >
                                <h1><a href="{$baseurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}" class="jump_focus" target="_blank">
                                 {if $posts[i].pic ne "" AND $posts[i].gif eq "1"}
                                     {$lang287}
                                 {/if}
                                {if $truncate eq "1"}{$posts[i].title|stripslashes|truncate:20:"...":true}{else}{$posts[i].title|stripslashes}{/if}</a></h1>
                                <h4>
                                    <span style="color: #999999; float: left;">Đăng bởi: <a href="{$baseurl}/user/{$posts[i].username|stripslashes}">{$posts[i].username|stripslashes}</a></span>
                                    <p>{insert name=get_time_to_days_ago time=$posts[i].time_added}</p>
                                </h4>
                                <p>

                                    <span>
                                    <!--<fb:comments-count href="{$baseurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}"></fb:comments-count> {$lang289}-->
                                    {insert name=get_fav_count value=var assign=fcount PID=$posts[i].PID}
									<a title="Lượt xem"><span class="viewed">Lượt xem: {$posts[i].postviewed}</span></a>
                                    </span>

                                </p>

                               <!--
                                <p>
                                    <font style="color: red; font-size:120%">{$lang284}</font>
                                </p>

                                -->

                               <!-- <div class="sharing-box ">
                                    <hr class="arrow" />
                                    <ul class="sharing ">
                                        <li class="facebook" id="share1-{$posts[i].PID}">
                                        	<div id="list-share-1-{$posts[i].PID}" style="width:90px;overflow:hidden;float:{if $smarty.session.language eq "ar"}left{else}right{/if};">
												{if $share1 eq 1}
												&lt;!&ndash; remove g+
                                                <g:plusone size="medium" href="{$baseurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}"></g:plusone>
                                                &ndash;&gt;
												{elseif $share1 eq 2}
													<fb:share-button type="button_count" href="{$baseurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}"></fb:share-button>
												{else}
													<fb:like href="{$baseurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}?ref=fb" send="false" layout="button_count" width="90px" show_faces="false" font="" label="Post"></fb:like>
												{/if}
                                            </div>
											<div id="list-share-2-{$posts[i].PID}" style="width:110px;overflow:hidden;">
												{if $share2 eq 1}
                                                &lt;!&ndash; remove g+
													<g:plusone size="medium" href="{$baseurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}"></g:plusone>

                                                 &ndash;&gt;
												{elseif $share2 eq 2}
													<fb:share-button type="button_count" href="{$baseurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}"></fb:share-button>
												{else}
													<fb:like href="{$baseurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}?ref=fb" send="false" layout="button_count" width="90px" show_faces="false" font="" label="Post"></fb:like>
												{/if}
											<div>
                                        </li>
                                    </ul>
                                </div>-->
                                {literal}
                                <div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=282858068538138";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                                {/literal}
                                                <div class="sharing-box ">
                                                    <hr class="arrow" />
                                                  <div class="fb-like" data-href="{$baseurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                                                    <!--<div class="fb-like" data-href="{$baseurl}{$postfolder}{$posts[i].PID}/{if $SEO eq "1"}{$posts[i].story|makeseo}.html{/if}" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>-->
                            </div>
                                <div class="tags">
                                	<span>
                                		{$posts[i].tags|tagsexplode}
                                	</span>
                                </div>
                            <div class="baovipham">
                                <a style="margin-top: 20px" class="report" entryId="{$posts[i].PID}" href="javascript:void(0);">{$lang146}</a>
                            </div>
                        </div>
                        </div>
                    </li>

      {if $smarty.section.i.iteration EQ 3 AND $json ne "1"}
			<li style="padding:10px">
				<div id='div-gpt-ad-1365732552334-0'>
					{insert name=get_advertisement AID=7}
				</div>
			</li>
	 {/if}
    {if $smarty.section.i.iteration EQ 15 AND $json ne "1"}
        <li style="padding:10px">
            <div id='div-gpt-ad-1365732552334-0'>
                {insert name=get_advertisement AID=9}
            </div>
        </li>
    {/if}
    {if $smarty.section.i.iteration EQ 8 AND $json ne "1"}
    <li style="padding:10px">
        <div id='div-gpt-ad-1365732552334-0'>
            {insert name=get_advertisement AID=10}
        </div>
    </li>
    {/if}
{/section}
{if $loadmore eq "1"}
{include file='js_vote.tpl'}
{/if}