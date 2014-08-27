{if $error ne ""}
<p class="form-message error">{$error}</p>
{elseif $message ne ""}
<p class="form-message success">{$message}</p>
{/if}
            <div class="head">
                <ul class="switch">
                	<li class="tab_photo "><a class="photo" href="{$mobileurl}/submit">{$lang100}</a></li>
					{if $vupload eq "1"}
                	<li class="tab_video current"><a class="video" href="{$mobileurl}/submit?t=v">{$lang101}</a></li>
					{/if}
                </ul>
            </div>
        
            <div class="content form_photo">
                <form id="form-b9gcs-soft-post-image" class="modal" action="{$mobileurl}/submit?t=v" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="type" value="Video"/>
                    <input id="post_type" type="hidden" name="post_type" value="Video"/>
                    <h3>{$lang108}</h3>
                    <div class="field">
                        <label>
                            <h4>{$lang109}</h4>                        
                            <input id="photo_post_url" type="text" class="text" name="url" value="{$url|stripslashes}" style="display:block;" />
                            <p class="info" style="visibility:hidden">{$lang110}</p>
                        </label>
                    </div>
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