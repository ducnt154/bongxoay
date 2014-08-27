{if $error ne ""}
<p class="form-message error">{$error}</p>
{elseif $message ne ""}
<p class="form-message success">{$message}</p>
{/if}
<div id="main">
    <div id="content-holder">
        <div id="b9gcs-soft-post" class="b9gcs-soft-box static">

            <div class="head">
                <ul class="switch">
                	<li class="tab_photo "><a class="photo" href="{$baseurl}/submit">{$lang100}</a></li>
					{if $vupload eq "1"}
                	<li class="tab_video "><a class="video" href="{$baseurl}/submit?t=v">{$lang101}</a></li>
					{/if}
					{if $tupload eq "1"}
			        <li class="tab_text current"><a class="text" href="{$baseurl}/submit?t=t">Text</a></li>
					{/if}
                </ul>
            </div>
            <!--<div id="post_tab_nav" style="height: 25px">

                <ul class="switch">
                    <li class="tab_photo current"><a href="{$baseurl}/submit" class="photo">Đăng ảnh</a></li>
                    {if $vupload eq "1"}
                    <li class="tab_video "><a href="{$baseurl}/submit?t=v" class="video">Đăng Video</a></li>
                    {/if}
                    {if $tupload eq "1"}
                    <li class="tab_text current "><a style="background: #5872AF;color: #fff" href="{$baseurl}/submit?t=t" class="text">Đăng Tin</a></li>
                    {/if}
                    <li class="tab_text "><a href="#" class="text">Girl xinh</a></li>
                    <li class="tab_text "><a href="#" class="text">Đăng truyện</a></li>
                </ul>
            </div>-->
            <div class="content form_photo">
                <form id="form-b9gcs-soft-post-image" class="modal" action="{$baseurl}/submit?t=t" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="type" value="Text"/>
                    <input id="post_type" type="hidden" name="post_type" value="Text"/>
                    <h3>Thêm bài đăng văn bản</h3>
                    <div class="field">
                        <label>
                            <h4>Tiêu đề(bắt buộc):</h4>
                            <input id="post_title" type="text" class="text tipped" name="title" maxlength="60" value=""/>
                            <p class="info" style="visibility:hidden">{$lang112}</p>
                        </label>
                    </div>
                    <div class="field">
                        <label>
                            <h4>Nội dung(bắt buộc):</h4><br /><br /><br />
                            <textarea id="contents" name="contents"></textarea>
                            <script type="text/javascript">CKEDITOR.replace('contents');</script>
                        </label>
                    </div>
					<div class="field">
                        <label>
                            <h4>{$lang269}</h4>
							<select name="CID" id="CID">
                            <option value="">{$lang270}</option>
							{section name=i loop=$c}
                            <option value="{$c[i].CID}">{$c[i].cname}</option>
							{/section}
                            </select>
							<p class="info" style="visibility:hidden">{$lang271}</p>
                        </label>
                    </div>
                    <div class="field">
                        <label>
                            <h4>{$lang113}<span> ({$lang114})</span></h4>
                            <input id="photo_tag_input" type="text" class="text tag_input tipped" name="tags" value="" placeholder="tag 1, tag 2, tag 3, tag 4, tag 5"/>
                            <p class="info" style="visibility:hidden">{$lang118}</p>
                        </label>
                    </div>
                    <div class="field">
                        <label>
                            <h4>{$lang115}<span> ({$lang114})</span></h4>
                            <input type="text" class="text tipped" name="source" value="" maxlength="300"/>
                            <p class="info" style="visibility:hidden">{$lang116}</p>
                        </label>
                    </div>
                   <!-- {if $lwm eq "1"}
                    <div class="field">

                        <h4>Vị trí logo</h4>
                        <input id="traitren" type="radio" name="watermark" value="1"><label style="display:inline;" for="traitren"> Trái Trên</label>
                        <input id="phaitren" type="radio" name="watermark" value="2" style="margin-left:15px;"><label style="display:inline;" for="phaitren"> Phải Trên</label>
                        <input id="giua" type="radio" name="watermark" value="3" style="margin-left:15px;"><label style="display:inline;" for="giua">Giữa</label>
                        <input id="traiduoi" type="radio" name="watermark" value="4" style="margin-left:15px;"><label style="display:inline;" for="traiduoi"> Trái Dưới</label>
                        <input id="phaiduoi" type="radio" name="watermark" value="5" style="margin-left:15px;" checked=""><label style="display:inline;" for="phaiduoi"> Phải Dưới</label>

                    </div>

                    {/if}-->
                    <hr />
					{if $safemode eq "1"}
                    <div class="field checkbox">
                    	<label for="submit-nsfw">
                    	<input id="submit-nsfw" type="checkbox" class="checkbox" name="nsfw" value="1" />{$lang117}</label>
                    </div>
					{/if}
                </form>
            </div>


            <div class="actions">
                <ul class="buttons">
                    <li class="loading-btn" style="visibility:hidden"><a class="button loading"></a></li>
                    <li class="form-btn"><a class="cancel" href="/">{$lang119}</a></li>
                    <li class="form-btn"><a class="button send" id="ekle" >{$lang120}</a></li>
                </ul>
            </div>
        	{literal}
			<script type="text/javascript">
            $('input').each(function()
			{
            	$(this).focus(function()
				{
            		$(this ).next('.info').css('visibility','visible');
            	})
            	$(this).blur(function()
				{
            		$(this).next('.info').css('visibility','hidden');
            	})
            });
            $('#ekle').click(function(){
            	$('#form-b9gcs-soft-post-image').submit();
            });
            </script>
            {/literal}
        </div>
    </div>
</div>

<div class="side-bar">
    <div class="msg-box notice">
    	<h3>{$lang121}</h3>
    	<p>{$quota} {$lang122}</p>
    </div>

    <div class="msg-box">
        <h3>{$lang123}</h3>
        <ul class="submit-info">
            <li><b>{$lang124}</b></li>
            <li><b>{$lang125} </b><a href=\"http://www.google.com/imghp\" target=\"blank\">{$lang126}</a><b></b></li>
            <li><b>{$lang127}</b></li>
            <li><b>{$lang128}</b></li>
            <li><b>{$lang129}</b></li>
            <li>{$lang130}</li>
            <li>{$lang131}</li>
            <li><b>{$lang132}</b></li>
            <li><b>{$lang133}</b></li>
            <li>{$lang134} <a href="{$baseurl}/rules" target="blank">{$lang135}</a>.</li>
        </ul>
        <p class="memo"><b>{$lang136}:</b> {$lang137}<span class="badge-js" key="!"></span></p>
    </div>
</div>
<div id="footer" class="">