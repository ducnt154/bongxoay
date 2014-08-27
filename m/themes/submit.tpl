{if $error ne ""}
<p class="form-message error">{$error}</p>
{elseif $message ne ""}
<p class="form-message success">{$message}</p>
{/if}

            <div class="head">
                <ul class="switch">
                	<li class="tab_photo current"><a class="photo" href="{$mobileurl}/submit">{$lang100}</a></li>
					{if $vupload eq "1"}
                	<li class="tab_video "><a class="video" href="{$mobileurl}/submit?t=v">{$lang101}</a></li>
					{/if}
                </ul>
            </div>
        
            <div class="content form_photo">
                <form id="form-b9gcs-soft-post-image" class="modal" action="{$mobileurl}/submit{if $smarty.request.file eq "1"}?file=1{/if}" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="type" value="Photo"/>
                    <input id="post_type" type="hidden" name="post_type" value="Photo"/>
                    <h3>{$lang102}</h3>
                    {if $smarty.request.file eq "1"}
                    <div class="field">
                        <label>
                            <h4>{$lang103}</h4>                            
                            <input id="photo_file_upload" class="file text " type="file" name="image" style="display:block;"></input>
                        </label>
                    	<p class="info"><a class="upload_photo" href="{$mobileurl}/submit"><strong>{$lang106}</strong></a> {$lang107}</p>
                    </div>
                    {else}
                    <div class="field">
                        <label>
                            <h4>{$lang104}</h4>                        
                            <input id="photo_post_url" type="text" class="text" name="url" value="{$url|stripslashes}" style="display:block;"></input>
                        </label>
                        <p class="info"><a class="upload_photo" href="{$mobileurl}/submit?file=1"><strong>{$lang105}</strong></a> {$lang107}</p>
                    </div>
                    {/if}
                    <div class="field">
                        <label>
                            <h4>{$lang111}</h4>
                            <input id="post_title" type="text" class="text tipped" name="title" maxlength="60" value=""/>
                            <p class="info" style="visibility:hidden">{$lang112}</p>
                        </label>
                    </div>
					{if $channels eq "1"}
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
					{/if}
                   
                    <div class="field">
                        <label>
                            <h4>{$lang115}<span>({$lang114})</span></h4>
                            <input type="text" class="text tipped" name="source" value="" maxlength="300"/>
                            <p class="info" style="visibility:hidden">{$lang116}</p>
                        </label>                    
                    </div>
                    
                     {if $lwm eq "1"}
                     <div class="field">
         
                    <h4>{$lang288}</h4>
                           <input id="traitren" type="radio" name="watermark" value="1"><label style="display:inline;" for="traitren"> Trái Trên</label>
						   <input id="phaitren" type="radio" name="watermark" value="2" style="margin-left:15px;"><label style="display:inline;" for="phaitren"> Phải Trên</label>
						   <input id="giua" type="radio" name="watermark" value="3" style="margin-left:15px;"><label style="display:inline;" for="giua">Giữa</label>
						   <input id="traiduoi" type="radio" name="watermark" value="4" style="margin-left:15px;"><label style="display:inline;" for="traiduoi"> Trái Dưới</label>
						   <input id="phaiduoi" type="radio" name="watermark" value="5" style="margin-left:15px;" checked=""><label style="display:inline;" for="phaiduoi"> Phải Dưới</label>
                                               
                    </div>
   
					{/if}
                    
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
            jQuery('#ekle').click(function(){
            	jQuery('#form-b9gcs-soft-post-image').submit();
            });
            </script>
            {/literal}
