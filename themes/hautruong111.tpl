<div class="box_hautruong">
     <div class="video_hautruong">
        <div class="title_hautruong">
            <a href="#">Hậu trường sân cỏ</a>
        </div>
         <div class="content_hautruong">
             {if !empty($hautruong)}
             <ul>
                 {section name= f loop= $hautruong}

                 <li>


                     <a href="{$baseurl}{$postfolder}{$hautruong[f].PID}/{if $SEO eq "1"}{$hautruong[f].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >

                     {if $hautruong[f].pic != ""}
                     <img src="{$purl}/t/{$hautruong[f].pic}" alt="{$hautruong[f].story|stripslashes}" />
                     {elseif $hautruong[f].pic != "" AND $hautruong[f].gif eq "1"}
                        <img src="{$purl}/t/{$posts[i].PID}.jpg" alt="{$posts[i].story|stripslashes}" width="400" /><span class="play">Play</span>
                     {elseif $hautruong[f].youtube_key != ""}
                        <img src="http://img.youtube.com/vi/{$hautruong[f].youtube_key}/1.jpg" alt="{$hautruong[f].story|stripslashes}" />
                     {/if}

                     </a>
                     <div class="title_lq">
                         <a href="{$baseurl}{$postfolder}{$hautruong[f].PID}/{if $SEO eq "1"}{$hautruong[f].story|makeseo}.html{/if}"  onclick="GAG.GA.track('RelatedContent', 'Clicked-Post-Sidebar', 'Position-1', 1)"  >
                         <span>{$hautruong[f].story|stripslashes|truncate:150:"...":true}</span></a>
                     </div>
                     <span style="color:#999999;font-size: 11px ;font-weight: normal">Lượt xem: {$hautruong[f].postviewed}</span>
                 </li>
                 {/section}
             </ul>
             {else}
             <ul>
                 <div>KHÔNG CÓ TIN NÀO!</div>
             </ul>
             {/if}
         </div>
    </div>
</div>
