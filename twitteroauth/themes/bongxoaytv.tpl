<div class="box_vdeo">
    <div class="video_today">
        <div class="title_video">
            <a href="#">Video tâm điểm trong ngày</a>
        </div>
        <div class="content_today">

            {if !empty($videotamdiem)}
            <ul>
                {section name=i loop=$videotamdiem}
                    <li>
                        <a href="{$baseurl}{$postfolder}{$videotamdiem[i].PID}/{if $SEO eq "1"}{$videotamdiem[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                            <img src="http://img.youtube.com/vi/{$videotamdiem[i].youtube_key}/1.jpg" alt="{$videotamdiem[i].story|stripslashes}" /></a>
                        <div class="title_lq">
                        <a  href="{$baseurl}{$postfolder}{$videotamdiem[i].PID}/{if $SEO eq "1"}{$videotamdiem[i].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                            <span>{if $truncate eq "1"}{$videotamdiem[i].story|stripslashes|truncate:20:"...":true}{else}{$videotamdiem[i].story|stripslashes}{/if}</span></a>
                            <div>
                            </br>
                        <!--124 Views | 333 likes-->
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
        <div class="video_latest">
        <div class="title_video">
            <a href="#">Video mới nhất</a>
        </div>
        <div class="content_latest">
            {if !empty($videolatest)}
              <ul>
                {section name= f loop= $videolatest}
                <li>
                    <a href="{$baseurl}{$postfolder}{$videolatest[f].PID}/{if $SEO eq "1"}{$videolatest[f].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <img src="http://img.youtube.com/vi/{$videolatest[f].youtube_key}/1.jpg" alt="{$videolatest[f].story|stripslashes}" /></a>
                    <div class="title_lq">
                        <a href="{$baseurl}{$postfolder}{$videolatest[f].PID}/{if $SEO eq "1"}{$videolatest[f].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                        <span>{if $truncate eq "1"}{$videolatest[f].story|stripslashes|truncate:20:"...":true}{else}{$videolatest[f].story|stripslashes}{/if}</span></a>
                     </div>
                        <br>
                   <!-- 124 Views | 333 likes-->
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
    <div class="view_more">
        <span><a href="#">Xem thêm trên Youtube</a></span>
    </div>
</div>
<div id="fb-root"></div>
{if $cname2 eq "video-bong-da"}
    {literal}
        <script type="text/javascript">
            $(document).ready(function(){

                 $("#entries-content-ul").removeClass("col-1");
            });

        </script>
    {/literal}
    {/if}
{literal}
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=361313930589477";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
{/literal}
<div class="fb-comments" data-href="http://bongxoay.com/channels/video-bong-da" data-width="650" data-numposts="4" data-colorscheme="light"></div>
