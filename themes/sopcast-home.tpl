<div class="link-sopcast" style="padding-top: 2px">
    {section name= f loop= $sopcast}
    {if $sopcast[f].result eq '' }
    <div class="title_sop" style="padding: 0px">
        <h2 style="text-align: center;text-transform: uppercase;padding: 0px">{$sopcast[f].title}</h2>
    </div>
        {$sopcast[f].introtext}
    {else}
    <div class="title_sop" style="padding: 0px">
    <h2 style="text-align: center;color: #00a5f0">Kết quả {$sopcast[f].title}</h2>
    {$sopcast[f].result}
    {/if}
    {/section}
</div>