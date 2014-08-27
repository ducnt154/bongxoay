<div id="main">
    <div id="content-holder">
            <div class="main-filter ">
                <div id="use-tips">
                    <div id="" class="list-tips">
                        <img style="height: 33px;float: left;margin: 5px 0px 0px 5px" src="{$baseurl}/images/emotion/nice.png">
                        <div style="font-size: 120%;line-height: 42px;"><b>Nếu bạn thấy hay thì ủng hộ Bóng Xoáy nhé!</b></div>
                        <div style="margin-top: -30px;float: right;margin-right: -120px;margin-left: 400px\9;padding-right: 7px\9">
                            <div class="fb-like" data-href="https://www.facebook.com/bongxoay" data-width="500" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
                        </div>
                    </div>
                </div>
                {if $thumbs eq "1"}
                <a id="changeview" class="view_thumbs" href="{$baseurl}/vote?view=thumbs" title="Toggle Views">{$lang258}</a>
                {/if}
                {if $safemode eq "1"}
                    {if $smarty.session.USERID ne ""}
                        {if $smarty.session.FILTER eq "1"}
                        <a class="safe-mode-switcher on" href="{$baseurl}/safe?m={$eurl}">&nbsp;</a>
                        {else}
                        <a class="safe-mode-switcher off" href="{$baseurl}/safe?m={$eurl}&o=1">&nbsp;</a>
                        {/if}
                    {else}
                        <a class="safe-mode-switcher on" href="{$baseurl}/login">&nbsp;</a>
                    {/if}
                {/if}
            </div>
        <div id="content" listPage="hot">
            <div id="entries-content" class="list">
                <ul id="entries-content-ul" class="col-1">
                    {include file="posts_bit_hot.tpl"}
                </ul>
            </div>
            <div id="lastPostsLoader"></div>
			{if $AUTOSCROLL eq "1"}
			<div id="load_image" style="background:url(images/load.gif) center no-repeat; width:%100; height:50px;"> </div>
			{literal}
                <script type="text/javascript">
				var ajaxstart=1;
				$(document).ready(function(){
					var tpage = 2;
					function lastAddedLiveFunc()
					{
						$('div#lastPostsLoader').html('');
						$.get("{/literal}{$baseurl}{literal}/hotjson.php?page="+tpage, function(data){
							if (data != "") {
								$(".col-1").append(data);
								$('#load_image').css('display','none');
								ajaxstart=1;
							}else{
							ajaxstart=2;
							}
							$('div#lastPostsLoader').empty();
						});
					};
					$(window).scroll(function(){
					if (document.documentElement.scrollTop)
					{ var  curloc = document.documentElement.scrollTop; }
					else
					{ var curloc=$(window).scrollTop(); }
					if  ((curloc+document.documentElement.clientHeight+1)>=($(document).height()) && ajaxstart==1 ) {
					 lastAddedLiveFunc();
					 $('#load_image').css('display','block');
					 ajaxstart=0;
					 tpage = tpage+1;
					};
					if(curloc>$(window).height()){$('#backtotop').slideDown();}else{$('#backtotop').slideUp();};
					});
					});
				</script>
			{/literal}
			{else}
 			{literal}
                <script type="text/javascript">
				$(document).ready(function(){
					$(window).scroll(function(){
					if (document.documentElement.scrollTop)
					{ var  curloc = document.documentElement.scrollTop; }
					else
					{ var curloc=$(window).scrollTop(); }
					if(curloc>$(window).height()){$('#backtotop').slideDown();}else{$('#backtotop').slideUp();};
					});
					});
				</script>
			{/literal}
            <div id="paging-buttons" class="paging-buttons">
            	{if $tpp ne ""}
                <a href="{$baseurl}/hot?page={$tpp}" class="previous">&laquo; {$lang166}</a>
                {else}
                <a href="#" onclick="return false;" class="previous disabled">&laquo; {$lang166}</a>
                {/if}
                {if $tnp ne ""}
                <a href="{$baseurl}/hot?page={$tnp}" class="older">{$lang167} &raquo;</a>
                {else}
                <a href="#" onclick="return false;" class="older disabled">{$lang167} &raquo;</a>
                {/if}

            </div>
            <div class="sologen" style="color: #000000;text-align: center;padding: 20px;font-weight: bold">Hãy xem <a href="{$baseurl}">Bongxoay</a> mỗi ngày để cập nhật những tin tức mới nhất, hài hước nhất về bóng đá</div>
			{/if}
        </div>
    </div>
</div>
{include file='right2.tpl'}
{include file='js_vote.tpl'}
{include file='js_movingboxs.tpl'}
<div id="footer" class="">