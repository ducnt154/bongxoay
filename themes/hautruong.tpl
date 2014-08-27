<div class="box_hautruong">
     <div class="video_hautruong">
        <div class="title_hautruong">
            <a href="#">Hậu trường</a>
        </div>
         <div class="content_hautruong">
             <div class="hautruongmoi">
                 {section name= f loop= $hautruonglatest}
                 <div class="img-htmoi">
                    <a title="{$hautruonglatest[f].story}" href="{$baseurl}{$postfolder}{$hautruonglatest[f].PID}/{if $SEO eq "1"}{$hautruonglatest[f].story|makeseo}.html{/if}"><img src="{$purl}/t/{$hautruonglatest[f].pic}" alt="{$hautruonglatest[f].story|stripslashes}"></a>
                 </div>
                 <div class="text_htmoi">
                     <div class="title_htmoi">
                       <h3><a title="{$hautruonglatest[f].story}" href="{$baseurl}{$postfolder}{$hautruonglatest[f].PID}/{if $SEO eq "1"}{$hautruonglatest[f].story|makeseo}.html{/if}">{$hautruonglatest[f].story|stripslashes}</a></h3>
                         <span style="color:#999999;font-size: 11px ;font-weight: normal">{insert name=get_time_to_days_ago time=$hautruonglatest[f].time_added}</span> |
                         <span style="color:#999999;font-size: 11px ;font-weight: normal">{$hautruonglatest[f].postviewed} lượt xem</span>
                     </div>
                     <div class="content_htmoi">
                         <span>{$hautruonglatest[f].contents|strip_tags|substr:0:650}</span>
                     </div>
                     </div>
                 {/section}
             </div>
             {if !empty($hautruong)}
             <ul>
                 {section name= f loop= $hautruong}

                 <li>
                     <div class="img-hautruong">
                         <a title="{$hautruong[f].story}" href="{$baseurl}{$postfolder}{$hautruong[f].PID}/{if $SEO eq "1"}{$hautruong[f].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                         {if $hautruong[f].pic != ""}
                         <img src="{$purl}/t/{$hautruong[f].pic}" alt="{$hautruong[f].story|stripslashes}" />
                         {elseif $hautruong[f].pic != "" AND $hautruong[f].gif eq "1"}
                         <img src="{$purl}/t/{$posts[i].PID}.jpg" alt="{$posts[i].story|stripslashes}" width="400" /><span class="play">Play</span>
                         {elseif $hautruong[f].youtube_key != ""}
                         <img src="http://img.youtube.com/vi/{$hautruong[f].youtube_key}/1.jpg" alt="{$hautruong[f].story|stripslashes}" />
                         {/if}
                         </a>
                     </div>
                     <div class="title_ht">
                         <a title="{$hautruong[f].story}" href="{$baseurl}{$postfolder}{$hautruong[f].PID}/{if $SEO eq "1"}{$hautruong[f].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                         <span>{$hautruong[f].story|stripslashes}</span></a>
                     </div>
                     <span style="color:#999999;font-size: 11px ;font-weight: normal">{insert name=get_time_to_days_ago time=$hautruong[f].time_added}</span> | 
                     <span style="color:#999999;font-size: 11px ;font-weight: normal">{$hautruong[f].postviewed} lượt xem</span>
                     <div class="content_hautruong">
                         <span>{$hautruong[f].contents|strip_tags|substr:0:600}</span></a>
                     </div>
                     <span style="color:#999999;font-size: 11px ;font-weight: normal;float: right"><a href="{$baseurl}{$postfolder}{$hautruong[f].PID}/{if $SEO eq "1"}{$hautruong[f].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)">Xem tiếp>></a></span>
                 </li>
                 {/section}
             </ul>
             {else}
             <ul>
                 <div>KHÔNG CÓ TIN NÀO!</div>
             </ul>

             {/if}
             <div id="paging-buttons" class="paging-buttons">
                 {if $tpp ne ""}
                 <a href="{$baseurl}/channels/hau-truong?page={$tpp}" class="previous">&laquo; {$lang166}</a>
                 {else}
                 <a href="#" onclick="return false;" class="previous disabled">&laquo; {$lang166}</a>
                 {/if}
                 {if $tnp ne ""}
                 <a href="{$baseurl}/channels/hau-truong?page={$tnp}" class="older">{$lang167} &raquo;</a>
                 {else}
                 <a href="#" onclick="return false;" class="older disabled">{$lang167} &raquo;</a>
                 {/if}
             </div>
         </div>
    </div>
</div>
{include file='right2.tpl'}
