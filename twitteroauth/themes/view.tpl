{if $p.nsfw eq "1" AND $nsfw_hide eq "1"}
	<div>
        <div class="post-next-prev">
            {if $prev != ""}
            <a id="prev_post" class="prev-post" href="{$baseurl}{$postfolder}{$prev}/{$prevstory|makeseo}.html"></a>
            {else}
            <a id="prev_post" class="prev-post" href="{$baseurl}/random"></a>
            {/if}
            {if $next ne ""}
            <a id="next_post" class="next-post" href="{$baseurl}{$postfolder}{$next}/{$nextstory|makeseo}.html"></a>
            {else}
            <a id="next_post" class="next-post" href="{$baseurl}/random"></a>
            {/if}
        </div>
    </div>
    <div id="main" class="middle">
        <div id="content-holder">
            <div id="content-holder">
                <div id="content" class="nsfw">
                    <div class="content">
                        <img src="{$baseurl}/images/nsfw.jpg" alt="NSFW" />
                    </div>
                    <div class="info">
                        <h1>{$lang154}</h1>
                        <p>{$lang155}</p>
                        <div class="message-box alt">
                            <div class="inline-message">
                            	<p><a href="{$baseurl}/safe?m={$eurl}">{$lang156} &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer" class="middle">
{else}
    <div id="main">
        <div id="content-holder">
            <div class="post-info-pad">
                <h1>
                {if $p.gif eq "1"}
                     {$lang287}
                {/if}
                {$p.title|stripslashes}</h1>
                <p>
                    <a href="{$baseurl}/user/{$p.username|stripslashes}">{$p.username|stripslashes}</a>
                    <span class="seperator">|</span>
                    {$p.time_added|date_format} {$p.time_added|date_format:"%I:%M %p"}
					{if $cname ne "" AND $channels eq "1"}
                    <span class="seperator">|</span>
                    {$lang269} : <a href="{$baseurl}/channels/{$cname|makeseo}/">{$cname}</a>

					{/if}
                    <span class="comment"><fb:comments-count href="{$baseurl}{$postfolder}{$p.PID}/{if $SEO eq "1"}{$p.story|makeseo}.html{/if}"></fb:comments-count> {$lang289}</span>

                    {if $owner eq "1"}
                    <span class="seperator">|</span>
                    <a href="{$baseurl}/deletepost.php?pid={$p.PID}" class="delete" onclick="return confirm('{$lang147}');">{$lang145}</a>
                    {/if}
                </p>

            </div>

            <div id="post-control-bar" class="spread-bar-wrap">
                <div class="like-bar" style="padding: 10px 0px 0px 25px;">
                <div style="float: left;margin-right: 20px" class="fb-like" data-href="{$baseurl}{$postfolder}{$p.PID}/{if $SEO eq "1"}{$p.story|makeseo}.html{/if}" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                {insert name=get_short_url value=a assign=tto PID=$p.PID short=$p.short}
                {if $short_urls eq "1"}
                <div class="google-btn"><g:plusone size="medium" href="{$tto}"></g:plusone> </div>
                {else}
                <div class="google-btn"><g:plusone size="medium" href="{$baseurl}{$postfolder}{$p.PID}/{if $SEO eq "1"}{$p.story|makeseo}.html{/if}"></g:plusone> </div>
                {/if}
              </div>
            <!-- <div class="spread-bar" style="width: 600px">
                	<div class="facebook-btn" style="color:red; font-weight:bold; font-size:120%; line-height:150%;">
                   	 {$lang286}
                    </div>
                        <div class="facebook-btn">
                    &lt;!&ndash;<fb:like href="{$baseurl}{$postfolder}{$p.PID}/{if $SEO eq "1"}{$p.story|makeseo}.html{/if}?ref=fb" send="false" layout="button_count" width="90px" show_faces="false" font="" label="Post"></fb:like> </div>&ndash;&gt;

                    {insert name=get_short_url value=a assign=tto PID=$p.PID short=$p.short}
                    {if $short_urls eq "1"}
                    <div class="google-btn"><g:plusone size="medium" href="{$tto}"></g:plusone> </div>
                    {else}
                    <div class="google-btn"><g:plusone size="medium" href="{$baseurl}{$postfolder}{$p.PID}/{if $SEO eq "1"}{$p.story|makeseo}.html{/if}"></g:plusone> </div>
                    {/if}

                </div>-->
                <div class="post-next-prev">
                	{if $prev != ""}
                	<a id="prev_post" class="prev-post" href="{$baseurl}{$postfolder}{$prev}/{$prevstory|makeseo}.html" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Previous', 1]);"></a>
                    {else}
                    <a id="prev_post" class="prev-post" href="{$baseurl}/random" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Previous', 1]);"></a>
                    {/if}
                    {if $next ne ""}
                	<a id="next_post" class="next-post" href="{$baseurl}{$postfolder}{$next}/{$nextstory|makeseo}.html" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Next', 1]);"></a>
                    {else}
                    <a id="next_post" class="next-post" href="{$baseurl}/random" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Next', 1]);"></a>
                    {/if}
                </div>
            </div>
            <div id="content">
                <div class="post-container">

                    <div class="img-wrap">
                        {if $p.pic ne "" AND $p.status_che eq "0"}
                        <a href="{$baseurl}/random"><img src="{$purl}/t/l-{$p.pic}" alt="{$p.story|stripslashes}"/></a>
                        {elseif $p.status_che eq "1"}
                        <a href="{$baseurl}/random"><img src="{$baseurl}/meme/c/{$p.pic}" alt="{$p.story|stripslashes}"/>
                        </a>
                        {else}
                        	{if $p.youtube_key != ""}
                           <!-- <center>
                            {insert name=return_youtube value=a assign=youtube youtube=$p.youtube_key}{$youtube}
                            </center>-->
                        <center>
                            <script src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js" type="text/javascript"></script>
                            {literal}
                            <script type="text/javascript">/* <![CDATA[ */
                            var repeat = 1;
                            var vid_id = '{/literal}{$p.youtube_key}{literal}';
                            /* ]]> */</script>
                            {/literal}
                            <div style="width:660px;height:400px;">
                                <iframe width="660" height="400" frameborder="0" allowfullscreen="" src="http://www.youtube.com/embed/{$p.youtube_key}?feature=oembed&autoplay=1&wmode=transparent&rel=0&showinfo=0&modestbranding=1&version=3&ps=docs&nologo=1&theme=light&color=white&iv_load_policy=0&cc_load_policy=1">
                                </iframe>
                            </div>
                        </center>
                            {elseif $p.fod_key != ""}
                            <center>
                            {insert name=return_fod value=a assign=fod fod=$p.fod_key}{$fod}
                            </center>
                        {elseif $p.dai_key != ""}
                        <center>
                            {insert name=return_dai value=a assign=dai dai=$p.dai_key}{$dai}
                        </center>

							{elseif $p.vfy_key != ""}
                            <center>
                            {insert name=return_vfy value=a assign=vfy vfy=$p.vfy_key}{$vfy}
                            </center>
							{elseif $p.vmo_key != ""}
                            <center>
                            {insert name=return_vmo value=a assign=vmo vmo=$p.vmo_key}{$vmo}
                            </center>
                            {elseif $p.contents != ""}
                            <center style="padding: 30px">
                                {$p.contents|strip_mq_gpc}
                            </center>
							{else}
							<center>
							{$lang143}
							</center>
                            {/if}
                        {/if}
                    </div>
                </div>
				{if $displaywm eq "0" AND $p.pic ne "" AND $p.gif ne "1"}
				<div class="watermark-clear"></div>
				{/if}
                <div style="margin: 0px 19px 0px 11px ;background: #f4f4f4; border-radius: 4px;padding: 10px">
                <img style="height: 40px;float: left" src="{$baseurl}/images/emotion/nice.png">
                <span style="font-size: 15px; font-weight: bold;color: #333;">Like Bongxoay trên Facebook để được thưởng thức hài, tin tức video bóng đá mới nhất</span><br>
                <div class="fb-like" data-href="https:/facebook.com/bongxoay" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
                </div>
                <div class="comment-section" {if $displaywm eq "0" AND $p.pic ne ""}style="margin-top:-70px;"{/if}>
                    <h3 class="title" id="comments">{$lang143}</h3>
                    <span class="report-and-source">
                    <p>
                        {if $owner ne "1"}<span id="report-item-separator">|</span><a id="report-item-link" class="report report-item" entryId="{$p.PID}" href="javascript:void(0);">{$lang146}</a>{/if}
                        <span id="report-item-separator">|</span>{if $p.source eq ""}{$lang141}{else}{$p.source|stripslashes}{/if}
                    </p>
                    </span>
                    <div style="margin-left:10px">
                    	<fb:comments href="{$baseurl}{$postfolder}{$p.PID}/{if $SEO eq "1"}{$p.story|makeseo}.html{/if}" num_posts="10" width="700"></fb:comments>
                    </div>
                    <div id="fb-root"></div>
                </div>
            	<br/>
            {if $recommended eq "1"}
                <div class="post-may-like">
                    <div id="entries-content" class="grid">
                    	{section name=i loop=$r}
                        <ul id="grid-col-{if $smarty.section.i.iteration GT 3}2{else}1{/if}" class="col-{if $smarty.section.i.iteration GT 3}{math equation="x - 3" x=$smarty.section.i.iteration}{else}{$smarty.section.i.iteration}{/if}">
                            <li class=" ">
                                <a href="{$baseurl}{$postfolder}{$r[i].PID}/{$r[i].story|makeseo}.html" class="jump_stop">
                                    <div style="" class="thimage">
                                        {if $r[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}<img src="{$baseurl}/images/nsfw_thumb.jpg" alt="{$r[i].story|stripslashes}" />{else}<img src="{$purl}/t/s-{$r[i].pic}" alt="{$r[i].story|stripslashes}" />{/if}
                                    </div>
                                </a>
                                <h1>{if $truncate eq "1"}{$r[i].story|stripslashes|truncate:20:"...":true}{else}{$r[i].story|stripslashes}{/if}</h1>
                                <h4><a href="{$baseurl}/user/{$r[i].username|stripslashes}">{$r[i].username|stripslashes|truncate:20:"...":true}</a></h4>
                            </li>
                        </ul>
                        {/section}
                    </div>
                </div>
			{/if}
            </div>
        </div>
		<div id="main-bottom-ad-tray" style="margin-top:20px;">
			<div>
				{if $smarty.session.FILTER eq "0" AND $NSFWADS}
				{insert name=get_advertisement AID=6}
				{else}
				{insert name=get_advertisement AID=3}
				{/if}
			</div>
		</div>
        <div class="video_lienquan">

            {if $youtube_key ne ''}
            <div class="title_video">
                <a href="#">Các video liên quan</a>
            </div>
            <div class="content_lienquan">
                {if !empty($newsrelated)}
                    <ul>
                        {section name=f loop=$newsrelated}
                            <li>
                                <a href="{$baseurl}{$postfolder}{$newsrelated[f].PID}/{if $SEO eq "1"}{$newsrelated[f].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                                    <img src="http://img.youtube.com/vi/{$newsrelated[f].youtube_key}/1.jpg" alt="{$newsrelated[f].story|stripslashes}" /></a>
                                <div class="title_lq">
                                <a href="{$baseurl}{$postfolder}{$newsrelated[f].PID}/{if $SEO eq "1"}{$newsrelated[f].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                                    <span>{if $truncate eq "1"}{$newsrelated[f].story|stripslashes|truncate:20:"...":true}{else}{$newsrelated[f].story|stripslashes}{/if}</span>
                                </a>
                                </div>
                                </br>
                                <!--124 Views | 333 likes-->
                            </li>
                        {/section}
                    </ul>

                {else}
                    <ul>
                        <div>KHÔNG CÓ VIDEO NÀO</div>
                    </ul>
                {/if}
            </div>
            {else}
                <div class="title_video">
                    <a href="#">Các tin liên quan</a>
                </div>
                <div class="content_lienquan">
                    {if !empty($newsrelated)}
                        <ul>
                            {section name=i loop=$newsrelated}
                                <li>
                                    <a  href="{$baseurl}{$postfolder}{$newsrelated[i].PID}/{if $SEO eq "1"}{$newsrelated[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                                        {if $newsrelated[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}<img src="{$baseurl}/images/nsfw_thumb.jpg" alt="{$newsrelated[i].story|stripslashes}" align="left" />{else}<img src="{$purl}/t/s-{$newsrelated[i].pic}" alt="{$newsrelated[i].story|stripslashes}" />{/if}</a>
                                    <div class="title_lq">
                                        <a href="{$baseurl}{$postfolder}{$newsrelated[i].PID}/{if $SEO eq "1"}{$newsrelated[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                                        <span>{if $truncate eq "1"}{$newsrelated[i].story|stripslashes|truncate:20:"...":true}{else}{$newsrelated[i].story|stripslashes}{/if}</span></a>
                                     <div>
                                    </br>
                                   <!-- 124 Views | 333 likes-->
                                </li>
                            {/section}
                        </ul>
                    {else}
                        <ul>
                            <div>KHÔNG CÓ TIN NÀO</div>
                        </ul>
                    {/if}
                </div>
            {/if}
        </div>
    </div>
    {include file='right2.tpl'}
	{include file='js_movingboxs.tpl'}
	{include file='js_view2.tpl'}
</div>
<div id="footer" class="">
{/if}