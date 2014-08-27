<div class="box_bongxoay">
    <div class="video_today">
        <div class="title_video">
            <a href="#">Video tâm điểm</a>
        </div>
        <div class="content_today">

            {if !empty($videotamdiem)}
            <ul>
                {section name=i loop=$videotamdiem}
                    <li>





                        <a href="{$baseurl}{$postfolder}{$videotamdiem[i].PID}/{if $SEO eq "1"}{$videotamdiem[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <img src="http://img.youtube.com/vi/{$videotamdiem[i].youtube_key}/1.jpg" alt="{$videotamdiem[i].story|stripslashes}" />
                        </a>





                        <div class="title_lq">
                        <a  href="{$baseurl}{$postfolder}{$videotamdiem[i].PID}/{if $SEO eq "1"}{$videotamdiem[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                            <span>{if $truncate eq "1"}{$videotamdiem[i].story|stripslashes|truncate:20:"...":true}{else}{$videotamdiem[i].story|stripslashes}{/if}</span></a>
                            <div>
                           <span style="color:#999999;font-size: 11px ;font-weight: normal">{insert name=get_time_to_days_ago time=$videotamdiem[i].time_added}</span><br>
                           <span style="color:#999999;font-size: 11px ;font-weight: normal">Lượt xem: {$videotamdiem[i].postviewed}</span>
                    </li>
                {/section}
            </ul>
                {else}
                <ul>
                    <div>KHÔNG CÓ BÀI VIẾT NÀO</div>
                </ul>
            {/if}
        </div>
    </div>
        <div class="video_bongxoay">
        <div class="title_bongxoay">
            <a href="#">Video mới nhất</a>
        </div>
        <div class="content_bongxoay">
            {if !empty($videolatest)}
              <ul>
                {section name= f loop= $videolatest}
                <li>
                    <a href="{$baseurl}{$postfolder}{$videolatest[f].PID}/{if $SEO eq "1"}{$videolatest[f].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <img src="http://img.youtube.com/vi/{$videolatest[f].youtube_key}/1.jpg" alt="{$videolatest[f].story|stripslashes}" /></a>
                    <div class="title_lq">
                        <a href="{$baseurl}{$postfolder}{$videolatest[f].PID}/{if $SEO eq "1"}{$videolatest[f].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <span>{$videolatest[f].story|stripslashes|truncate:80:"...":true}</span></a>
                     </div>
                    <span style="color:#999999;font-size: 11px ;font-weight: normal">{insert name=get_time_to_days_ago time=$videolatest[f].time_added}</span><br>
                    <span style="color:#999999;font-size: 11px ;font-weight: normal">{$videolatest[f].postviewed} lượt xem</span>
                </li>
                {/section}
            </ul>
            {else}
                <ul>
                    <div>KHÔNG CÓ BÀI VIẾT NÀO</div>
                </ul>
            {/if}
        </div>
    </div>
</div>

{if $cname2 eq "video-bong-da"}
    {literal}
        <script type="text/javascript">
            $(document).ready(function(){

                 $("#entries-content-ul").removeClass("col-1");
            });

        </script>
    {/literal}
    {/if}
<div id="footer" class="">