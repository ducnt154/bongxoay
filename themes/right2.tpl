<div class="side-bar">
    <!-- <div class="custom-block-content">

                 <div style="background: ##00a5f0;">
                     Ủng hộ Bóng Xoáy nhé
               <div class="fb-like" data-href="http://www.facebook.com/{$FACEBOOK_PROFILE}" data-send="false" data-width="290" data-show-faces="false" data-colorscheme="dark"></div>
                 </div>

     </div>-->
    <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
        <div class="custom-block">
            <div class="muonxem"><a href="{$baseurl}/channels/bong-hong">BẠN MUỐN XEM!</a></div>
            {if $page eq ""/xoay/""}
            <div class="custom-block-content">
                <ul class="new_cungloai">
                    {section name=f loop=$newsrelated}
                    <li>
                        <img style="height: 20px;width: 28px;border: none;" src="{$baseurl}/images/icon-new.gif">
                        <a title="{$newsrelated[f].title}" href="{$baseurl}{$postfolder}{$newsrelated[f].PID}/{if $SEO eq "1"}{$newsrelated[f].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <span>{if $truncate eq "1"}{$newsrelated[f].story|stripslashes|truncate:20:"...":true}{else}{$newsrelated[f].story|stripslashes}{/if}</span>
                        </a>
                    </li>
                    {/section}
                </ul>
            </div>
            {else}
            <div class="custom-block-content">
                {section name=i loop=$want_views}
                <div style="height: 74px">
                    <a class="wrap" href="{$baseurl}{$postfolder}{$want_views[i].PID}/{if $SEO eq "1"}{$want_views[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                    <img class="hot" src="http://img.youtube.com/vi/{$want_views[i].youtube_key}/1.jpg" alt="{$want_views[i].story|stripslashes}" />
                    <!-- <span>{$want_views[i].story|stripslashes|truncate:87:"...":true}</span></a><br>-->
                    <span>{$want_views[i].title}</span><br>
                    <span style="color:#999999;font-size: 11px ;font-weight: normal">{insert name=get_time_to_days_ago time=$want_views[i].time_added}</span><br>
                    <span style="color:#999999;font-size: 11px ;font-weight: normal">{$want_views[i].postviewed} lượt xem</span>
                    </a>
                </div>
                {/section}
                <span style="float: right;font-size: 11px;color: #999999;margin-right: 6px;"><a href="{$baseurl}/channels/bong-hong">Xem thêm >><!--<img style="float: right;border: none;margin-top: 5px;margin-left:2px" src="{$baseurl}/images/readmore.png">--></a></span>
            </div>
            {/if}
        </div>
    </div>
    <div>
        {if $recommended eq "2" AND $cname2 ne "hau-truong"}
        <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
            <div class="right-block">
                <h3 class="hoi-bua"><a href="#">BÓNG LĂN - SOPCAST</a></h3>
                <div class="right-block-content">
                    {include file='sopcast-home.tpl'}
                </div>
            </div>
        </div>
        <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
            <div class="right-block">

                <h3 style="color: #00a5f0" class="top">TOP XOÁY</h3>
                <div class="right-block-content">
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
        </div>
        <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
            <div class="custom-block">
                <h3 class="hot"><a href="{$baseurl}/channels/video-bong-da">VIDEO HOT</a></h3>
                <div class="custom-block-content">
                    {section name=i loop=$video}
                    <div style="height:74px">
                        <a class="wrap" href="{$baseurl}{$postfolder}{$video[i].PID}/{if $SEO eq "1"}{$video[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <img class="hot" src="http://img.youtube.com/vi/{$video[i].youtube_key}/1.jpg" alt="{$video[i].story|stripslashes}" />
                        <span>{$video[i].story|stripslashes|truncate:70:"...":true}</span><br>
                        <span style="color:#999999;font-size: 11px ;font-weight: normal">{insert name=get_time_to_days_ago time=$video[i].time_added}</span><br>
                        <span style="color:#999999;font-size: 11px ;font-weight: normal;">{$video[i].postviewed} lượt xem</span>
                        </a>
                    </div>
                    {/section}

                </div>
            </div>
        </div>
        <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
            <div class="right-block">

                <h3 class="hoi-bua"><a href="{$baseurl}/channels/hoi-bua-dap-bua">HỎI BỪA ĐÁP BỰA</a></h3>
                <div class="right-block-content">

                    {section name=i loop=$hoibua}
                    <div>
                        <a class="wrap" href="{$baseurl}{$postfolder}{$hoibua[i].PID}/{if $SEO eq "1"}{$hoibua[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        {if $hoibua[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}<img src="{$baseurl}/images/nsfw_thumb.jpg" alt="{$hoibua[i].story|stripslashes}" align="left" />{else}<img src="{$purl}/t/s-{$hoibua[i].pic}" alt="{$hoibua[i].story|stripslashes}" />{/if}</a>
                        <a class="wrap" href="{$baseurl}{$postfolder}{$hoibua[i].PID}/{if $SEO eq "1"}{$hoibua[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <span>{if $truncate eq "1"}{$binhbua[i].story|stripslashes|truncate:20:"...":true}{else}{$hoibua[i].story|stripslashes}{/if}</span></a><br>
                        Bởi: <a style="color: #fea700" href="{$baseurl}/user/{$hoibua[i].username|stripslashes}">{$hoibua[i].username|stripslashes|truncate:20:"...":true}</a>
                        <span style="color:#999999;font-size: 11px ;font-weight: normal">{insert name=get_time_to_days_ago time=$hoibua[i].time_added}</span><br>
                        <span style="color:#999999;font-size: 11px ;font-weight: normal;">{$hoibua[i].postviewed} lượt xem</span>
                    </div>
                    {/section}

                </div>
            </div>
        </div>
        <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
            <div class="right-block">
                <h3><a href="{$baseurl}/channels/binhbua">BÌNH BỰA</a></h3>
                <div class="right-block-content">

                    {section name=i loop=$binhbua}
                    <div>
                        <a class="wrap" href="{$baseurl}{$postfolder}{$binhbua[i].PID}/{if $SEO eq "1"}{$binhbua[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        {if $binhbua[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}<img src="{$baseurl}/images/nsfw_thumb.jpg" alt="{$binhbua[i].story|stripslashes}" align="left" />{else}<img src="{$purl}/t/s-{$binhbua[i].pic}" alt="{$binhbua[i].story|stripslashes}" />{/if}</a>
                        <a class="wrap" href="{$baseurl}{$postfolder}{$binhbua[i].PID}/{if $SEO eq "1"}{$binhbua[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <span>{if $truncate eq "1"}{$binhbua[i].story|stripslashes|truncate:20:"...":true}{else}{$binhbua[i].story|stripslashes}{/if}</span></a><br>
                        Bởi: <a style="color: #fea700" href="{$baseurl}/user/{$binhbua[i].username|stripslashes}">{$binhbua[i].username|stripslashes|truncate:20:"...":true}</a>
                        <span style="color:#999999;font-size: 11px ;font-weight: normal">{insert name=get_time_to_days_ago time=$binhbua[i].time_added}</span><br>
                        <span style="color:#999999;font-size: 11px ;font-weight: normal;">{$binhbua[i].postviewed} lượt xem</span>
                    </div>
                    {/section}

                </div>
            </div>
        </div>
        {/if}

    </div>
    <div id="moving-boxes" style="width: 295px;color: #fff;">
        <div class="s-300" id="bottom-s300">
            <!-- {insert name=get_advertisement AID=2}-->
            <a target="_blank" href="{$baseurl}/channels/bong-hong"><img src="../images/banner/nguoidep.gif"></a>
        </div>
        <div class="s-300" id="bottom-s300">
            <div class="fb-like-box" data-href="http://www.facebook.com/bongxoay" data-width="300" data-height="" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
        </div>
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
{literal}
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=455350294564519";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
{/literal}