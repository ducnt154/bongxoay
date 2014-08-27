	<div class="side-bar">
        <div class="social-block">
            <h3>{$lang153} <a href="https://www.facebook.com/bongxoay" target="_blank">{$site_name}</a></h3>
            <div class="facebook-like">
				<div class="fb-like" data-href="http://www.facebook.com/{$FACEBOOK_PROFILE}" data-send="false" data-width="290" data-show-faces="true"></div>
			</div>          
            <div class="google-plus">
            	<p>{$lang150}</p>
            	<g:plusone size="medium" href="{$baseurl}"></g:plusone>
            </div>
        </div>
       	<!--
		{if $channels eq "1"}
        <div class="social-block">
            <h3>{$lang272}</h3>
			{section name=i loop=8}
			{if $c[i].ctotal GT "0"}
				<font size=3><a href="{$baseurl}/channels/{$c[i].chname|makeseo}/">{$c[i].chname} </a> </font><br />
			{/if}
            {/section} 
			</div>
		{/if}
        -->
        
        <div class="s-300" id="top-s300">
        	{if $smarty.session.FILTER eq "0" AND $NSFWADS}
        	{insert name=get_advertisement AID=5}
            {else}
        	{insert name=get_advertisement AID=2}
			{/if}
        </div>
        
        {if $boxindexmax GT 0}
			<div id="jsid-buzz-block" class="popular-block" data-boxIndex="0" data-boxIndexMax="{$boxindexmax}" data-boxSize="3">
				<h3>{$lang277}
					<span style="float: right; color: #999; font-size: 13px;">
					<a id="jsid-popular-prev" class="badge-buzz-more" data-change="-1" href="javascript:void(0);" style="color:grey;cursor:default;">&laquo; Prev</a> · 
					<a id="jsid-popular-next" class="badge-buzz-more" data-change="1" href="javascript:void(0);">Next &raquo;</a>
					</span>
				</h3>
				<ol>
				{section name=i loop=$popular}
					<li class="badge-buzz-post-batch badge-buzz-post-batch-{if $smarty.section.i.iteration GT "15"}5{elseif $smarty.section.i.iteration GT "12"}4{elseif $smarty.section.i.iteration GT "9"}3{elseif $smarty.section.i.iteration GT "6"}2{elseif $smarty.section.i.iteration GT "3"}1{else}0{/if}" {if $smarty.section.i.iteration GT "3"}style="display:none;"{/if} >
					<a class="wrap" href="{$baseurl}{$postfolder}{$popular[i].PID}/{if $SEO eq "1"}{$popular[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1);GAG.Track.event('clicked', 'psb.p', '0', '5665836');">
						<div class="mask">
							{if $popular[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}<img src="{$baseurl}/images/nsfw_thumb.jpg" alt="{$popular[i].story|stripslashes}" />{else}<img src="{$purl}/t/s-{$popular[i].pic}" alt="{$popular[i].story|stripslashes}" />{/if}
						</div>
						<h4>{if $truncate eq "1"}{$popular[i].story|stripslashes|truncate:20:"...":true}{else}{$popular[i].story|stripslashes}{/if}</h4>
						<p class="meta">
							<span class="comment"><fb:comments-count href="{$baseurl}{$postfolder}{$popular[i].PID}/{if $SEO eq "1"}{$popular[i].story|makeseo}.html{/if}"></fb:comments-count></span>
							<span class="loved">{$popular[i].favclicks}</span>
						</p>


					</a>
					</li>
				{/section}
				</ol>
			</div>
		{/if}
      
        
        <div id="moving-boxes">
            <div class="s-300" id="bottom-s300">            
            {if $smarty.session.FILTER eq "0" AND $NSFWADS}
        	{insert name=get_advertisement AID=4}
            {else}
        	{insert name=get_advertisement AID=1}
			{/if}
            </div>
			{if $r[0].PID ne "" AND $rhome eq "1"}
			<div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
				<div class="popular-block">
				<h3>{$lang251}</h3>
				<ol>
				{section name=i loop=$r}                  
				<a class="wrap" href="{$baseurl}{$postfolder}{$r[i].PID}/{if $SEO eq "1"}{$r[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
					<li>
						{if $r[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}<img src="{$baseurl}/images/nsfw_thumb.jpg" alt="{$r[i].story|stripslashes}" />{else}<img src="{$purl}/t/s-{$r[i].pic}" alt="{$r[i].story|stripslashes}" />{/if}
						<h4>{if $truncate eq "1"}{$r[i].story|stripslashes|truncate:20:"...":true}{else}{$r[i].story|stripslashes}{/if}</h4>
						<h4><a href="{$baseurl}/user/{$r[i].username|stripslashes}">{$r[i].username|stripslashes|truncate:20:"...":true}</a></h4>
						<p class="meta"><span class="comment"><fb:comments-count href="{$baseurl}{$postfolder}{$r[i].PID}/{if $SEO eq "1"}{$r[i].story|makeseo}.html{/if}"></fb:comments-count></span><span class="loved">{$r[i].favclicks}</span>
						</p>
					</li>
				</a>
				{/section}
				</ol>
				</div>
			</div>
			{/if} 
			
        </div>
    </div>