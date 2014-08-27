<div class="side-bar-right">
    <div id="post-gag-stay">
        <div class="custom-block">
            <h3 class="hot">LIÊN QUAN</a></h3>
            <div class="custom-block-content">
                <ul class="new_cungloai">
                    {section name=i loop=$newsrelated}
                    {if $newsrelated[i].youtube_key !=""}
                    <li>
                        <div style="height: 74px">
                            <a class="wrap" href="{$baseurl}{$postfolder}{$newsrelated[i].PID}/{if $SEO eq "1"}{$newsrelated[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                            <img class="hot" src="http://img.youtube.com/vi/{$newsrelated[i].youtube_key}/1.jpg" alt="{$newsrelated[i].story|stripslashes}" />
                            <span>{$newsrelated[i].story|stripslashes|truncate:60:"...":true}</span><br>
                            <span style="color:#999999;font-size: 11px ;font-weight: normal">{insert name=get_time_to_days_ago time=$newsrelated[i].time_added}</span><br>
                            <span style="color:#999999;font-size: 11px ;font-weight: normal">{$newsrelated[i].postviewed} lượt xem</span>
                            </a>
                        </div>
                    </li>
                    {else}
                        <li class="text_cungloai" style="padding: 5px">
                            <img style="border: none;padding-right: 4px;float: left;margin-top: 5px;height: 7px" src="{$baseurl}/images/dot-icon.png">
                            <a href="{$baseurl}{$postfolder}{$newsrelated[i].PID}/{if $SEO eq "1"}{$newsrelated[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                            <span> {if $truncate eq "1"}{$newsrelated[i].story|stripslashes|truncate:87:"...":true}{else}{$newsrelated[i].story|stripslashes}{/if}</span><br>
                            <span style="color:#999999;font-size: 11px ;font-weight: normal">{insert name=get_time_to_days_ago time=$newsrelated[i].time_added}</span> |
                            <span style="color:#999999;font-size: 11px ;font-weight: normal">{$newsrelated[i].postviewed} lượt xem</span>
                            </a>

                        </li>
                    {/if}
                    {/section}
                </ul>
            </div>
        </div>
    </div>
    <div>
        {if $recommended eq "2"}
        <!--<div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
            <div class="custom-block">
                <h3 style="color: #00a5f0" class="top">TOP XOÁY</h3>
                <div class="custom-block-content">
                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                        <tr>
                            {section name=i loop=$users}
                            <td>
                                {if $users[i].profilepicture eq ""}
                                <img src="http://graph.facebook.com/{$users[i].facebookid|replace:' ':''}/picture?type=normal" style="width:35px;height:35px;" alt="Profile Pic" />
                                {else}
                                <img src="{$membersprofilepicurl}/thumbs/{$users[i].profilepicture}?{$smarty.now}" style="width:35px;height:35px;" alt="Profile Pic" />
                                {/if}

                                <a href="{$baseurl}/user/{$users[i].username}"  style="overflow: hidden;text-overflow: ellipsis; color:#fea700;">{$users[i].username}</a>
                                <br />
                                Bài: {$users[i].posts}
                                <br />
                                Điểm: {$users[i].points}
                            </td>
                            {if $users[i].rank % 2 == 0}
                        </tr><tr>
                        {/if}

                        {/section}
                    </table>


                </div>
            </div>
        </div>-->
        <!--<div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
            <div class="custom-block">
                <h3 class="hot">VIDEO HOT</h3>
                <div class="custom-block-content">
                    {section name=i loop=$video}
                    <div style="height:74px">
                        <a title="{$video[i].title}" class="wrap" href="{$baseurl}{$postfolder}{$video[i].PID}/{if $SEO eq "1"}{$video[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <img class="hot" src="http://img.youtube.com/vi/{$video[i].youtube_key}/1.jpg" alt="{$video[i].story|stripslashes}" />
                        <span>{$video[i].story|stripslashes|truncate:70:"...":true}</span><br>
                        <span style="color:#999999;font-size: 11px ;font-weight: normal">{insert name=get_time_to_days_ago time=$video[i].time_added}</span><br>
                        <span style="color:#999999;font-size: 11px ;font-weight: normal">{$video[i].postviewed} lượt xem</span>
                        </a>
                    </div>
                    {/section}

                </div>
            </div>
        </div>-->
        <!--<div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
            <div class="right-block">

                <h3 class="hoi-bua"><a href="{$baseurl}/channels/hoi-bua-dap-bua">HỎI BỪA ĐÁP BỰA</a></h3>
                <div class="right-block-content">

                    {section name=i loop=$hoibua}
                    <div>
                        <a class="wrap" href="{$baseurl}{$postfolder}{$hoibua[i].PID}/{if $SEO eq "1"}{$hoibua[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        {if $hoibua[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}<img src="{$baseurl}/images/nsfw_thumb.jpg" alt="{$hoibua[i].story|stripslashes}" align="left" />{else}<img src="{$purl}/t/s-{$hoibua[i].pic}" alt="{$hoibua[i].story|stripslashes}" />{/if}</a>
                        <a class="wrap" href="{$baseurl}{$postfolder}{$hoibua[i].PID}/{if $SEO eq "1"}{$hoibua[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <span>{if $truncate eq "1"}{$binhbua[i].story|stripslashes|truncate:20:"...":true}{else}{$hoibua[i].story|stripslashes}{/if}</span></a>

                        <br />
                        <a style="color: #fea700" href="{$baseurl}/user/{$hoibua[i].username|stripslashes}">{$binhbua[i].username|stripslashes|truncate:20:"...":true}</a>

                    </div>
                    {/section}

                </div>
            </div>
        </div>-->
        <!-- <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
             <div class="custom-block">
                 <h3><a href="{$baseurl}/channels/binhbua">BÌNH BỰA</a></h3>
                 <div class="custom-block-content">

                     {section name=i loop=$binhbua}
                     <div>
                         <a class="wrap" href="{$baseurl}{$postfolder}{$binhbua[i].PID}/{if $SEO eq "1"}{$binhbua[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                         {if $binhbua[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}<img src="{$baseurl}/images/nsfw_thumb.jpg" alt="{$binhbua[i].story|stripslashes}" align="left" />{else}<img src="{$purl}/t/s-{$binhbua[i].pic}" alt="{$binhbua[i].story|stripslashes}" />{/if}</a>
                         <a class="wrap" href="{$baseurl}{$postfolder}{$binhbua[i].PID}/{if $SEO eq "1"}{$binhbua[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                         <span>{if $truncate eq "1"}{$binhbua[i].story|stripslashes|truncate:20:"...":true}{else}{$binhbua[i].story|stripslashes}{/if}</span></a>

                         <br />
                         <a style="color: #fea700" href="{$baseurl}/user/{$binhbua[i].username|stripslashes}">{$binhbua[i].username|stripslashes|truncate:20:"...":true}</a>

                     </div>
                     {/section}

                 </div>
             </div>
         </div>-->
        {/if}

    </div>
    <div id="moving-boxes" style="width: 295px;color: #fff;">
        <div class="s-300" id="bottom-s300">
            <!-- {insert name=get_advertisement AID=2}-->
            <a target="_blank" href="{$baseurl}"><img src="{$baseurl}/images/banner/nguoidep.gif"></a>
        </div>
       <!-- <div class="s-300" id="bottom-s300">
            <div class="fb-like-box" data-href="http://www.facebook.com/bongxoay" data-width="300" data-height="260" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
        </div>-->
        <div class="dieukhoan">
            {include file='proviso.tpl'}
        </div>
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

</div>
<!--
{literal}
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=455350294564519";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
{/literal}-->
