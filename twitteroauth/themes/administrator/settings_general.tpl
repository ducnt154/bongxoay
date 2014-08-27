 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="{$adminurl}/dashboard.php">{$site_name} Admin Panel</a> &rsaquo; Settings &rsaquo; General Settings</div> 
        </div>
		{if $message ne ""}
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert green hideit"><p><span class="green-icon"></span>{$message}</p></div>
           </div> 
		<!--Alerts end-->
		{/if}

				 <!--Form-->
        <div class="grid-1">
           <div class="title-grid">General Settings</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="{$adminurl}/settings_general.php">
                 <div class="elem">
                        <label>Site Name: </label>
                        <div class="indent">
                            <input type="text" id="site_name" name="site_name" value="{$site_name}" class="medium tip-right" title="Website Slogan">
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Script9 Replacement: </label>
                        <div class="indent">
                            <input type="text" id="website_name" name="website_name" value="{$website_name}" class="medium tip-right" title="Text that will replace script9 within the site">
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Site E-mail:</label>
                        <div class="indent">
                            <input type="text" id="site_email" name="site_email" value="{$site_email}" class="medium" title="Email used to send / receive site contacts"> 
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Email Sender: </label>
                        <div class="indent">
                            <input type="text" id="contact_email" name="contact_email" value="{$contact_email}" class="medium tip-right" title="The sender name in site emails">
                        </div>
                 </div>
                 
            	 <div class="elem">
                        <label>New posts moderation:</label>
                        <div class="indent">
                         <select id="approve_stories" name="approve_stories" class="chzn-select medium-select select" > 
                            <option value="1" {if $approve_stories eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $approve_stories eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Deleting dislikes: </label>
                        <div class="indent">
                            <input type="text" id="mno" name="mno" value="{$mno}" class="medium tip-right" title="Dislikes needed to delete post">
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Trending likes limit: </label>
                        <div class="indent">
                            <input type="text" id="mtrend" name="mtrend" value="{$mtrend}" class="medium tip-right" title="Likes needed to move post to trending page">
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Hot likes limit: </label>
                        <div class="indent">
                            <input type="text" id="myes" name="myes" value="{$myes}" class="medium tip-right" title="Likes needed to move post to hot page">
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Upload quote: </label>
                        <div class="indent">
                            <input type="text" id="quota" name="quota" value="{$quota}" class="medium tip-right" title="Number of uploads allowed per day">
                        </div>
                 </div>
                 
            	 <div class="elem">
                        <label>Video Uploads:</label>
                        <div class="indent">
                         <select id="vupload" name="vupload" class="chzn-select medium-select select" > 
                            <option value="1" {if $vupload eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $vupload eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>NSFW ADS:</label>
                        <div class="indent">
                         <select id="NSFWADS" name="NSFWADS" class="chzn-select medium-select select" > 
                            <option value="1" {if $NSFWADS eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $NSFWADS eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>

				 <input type="hidden" id="submitform" name="submitform" value="1" >
				 <div style="width:330px;margin:20px;">
				<input type="submit" class="button-a red right" value="Save Settings">
				</div>
                 </form>
    		 <div class="clear"> </div>
             </div>
           </div>
        </div>  
		<!--Form end-->
      
			</div><!-- #content-->
		</div><!-- #container-->

		{include file='administrator/left_side.tpl'}
        	</div><!-- #container main-->
