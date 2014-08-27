{if $error ne ""}
<p class="form-message error middle">{$error}<br /></p>
{elseif $message ne ""}
<p class="form-message success middle">{$message}<br /></p>
{/if}
<div id="main" class="middle">
    <div id="content-holder">
        <div class="content-title">
        	<h3>{$lang45}</h3>
        </div>                      
                                          
        <div id="content">
            <form id="form-settings" class="page" action="" method="post" enctype="multipart/form-data" name="formsettings">
                <div class="field profile-pic">
                    <h4>{$lang53}</h4>
                    <div class="wrap">
                        <div class="image-wrap">
                        	{insert name=get_member_profilepicture assign=profilepicture value=var USERID=$smarty.session.USERID}
                            {if $profilepicture eq ""}
                    			<img src="http://graph.facebook.com/{$smarty.session.FACEBOOKID}/picture?type=normal" width="160" height="160" alt="Profile Pic" /> 
                    		{else}
                        	<img id="uploaded_img" width="160px" src="{$membersprofilepicurl}/thumbs/{$profilepicture}?{$smarty.now}" alt="avatar" />
                            {/if}
                        </div>
                        <input class="file" type="file" name="gphoto"  />
                        <p class="info">{$lang54}</p>
                        <p class="remove-avatar"><label><input type="checkbox" name="remove_avatar" value="1"/>{$lang55}</label></p>
                    </div>
                </div>                

                <div class="field">
                    <label><h4>{$lang59}</h4><input type="text" class="text tipped" name="fname" value="{$p.fullname|stripslashes}" maxlength="100" /></label>
                    <p class="info" style="visibility:hidden">{$lang60}</p>
                </div>
                
                <div class="field">
                    <label><h4>{$lang20}</h4><input type="text" class="text tipped" name="email" value="{$p.email|stripslashes}" maxlength="200" disabled /></label>
                    <p class="info" style="visibility:hidden">{$lang61}</p>
                </div>
                
                <div class="field">
                    <label><h4>{$lang67}</h4><input type="text" class="text tipped" name="details" value="{$p.description|stripslashes}" maxlength="120"/></label>
                    <p class="info" style="visibility:hidden">{$lang69}</p>
                </div>
                
                <div class="field">
                    <label><h4>{$lang70}</h4><input type="text" class="text tipped" name="website" value="{$p.website|stripslashes}" maxlength="200"/></label>
                    <p class="info" style="visibility:hidden">{$lang71}</p>
                </div>
               
                <input type="hidden" name="subform" value="1" />
            </form>
            <div class="setting-actions">
            	<a class="deactivate" href="{$baseurl}/delete-account">{$lang76}</a>
                <ul class="buttons">
                	<li><a id="settings_submit" class="button" href="#" onClick="document.formsettings.submit();">{$lang77}</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{$baseurl}/js/jscolor.js"></script>
<div id="footer" class="middle">