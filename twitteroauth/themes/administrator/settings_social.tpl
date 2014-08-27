 
  
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
          	 <form method="post" id="customForm" action="{$adminurl}/settings_social.php">
                 <div class="elem">
                        <label>Facebook Page: </label>
                        <div class="indent">
                            <input type="text" id="FACEBOOK_PROFILE" name="FACEBOOK_PROFILE" value="{$FACEBOOK_PROFILE}" class="medium tip-right" title="Facebook fan page URL">
                        </div>
                 </div>
                 
				 <div class="elem">
                        <label>Facebook Administrator: </label>
                        <div class="indent">
                            <input type="text" id="FACEBOOK_ADMIN" name="FACEBOOK_ADMIN" value="{$FACEBOOK_ADMIN}" class="medium tip-right" title="Facebook Administrator for Facebook comments">
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Twitter Username: </label>
                        <div class="indent">
                            <input type="text" id="twitter" name="twitter" value="{$twitter}" class="medium tip-right" title="Twitter Fans account ID">
                        </div>
                 </div>
                 
            	 <div class="elem">
                        <label>Facebook Connect:</label>
                        <div class="indent">
                         <select id="enable_fc" name="enable_fc" class="chzn-select medium-select select" > 
                            <option value="1" {if $enable_fc eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $enable_fc eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Facebook APP ID:</label>
                        <div class="indent">
                            <input type="text" id="FACEBOOK_APP_ID" name="FACEBOOK_APP_ID" value="{if $demo_mode eq "1"}Hidden in demo mode{else}{$FACEBOOK_APP_ID}{/if}" class="medium" title="You'll find it in Facebook developers page"> 
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Facebook APP secret: </label>
                        <div class="indent">
                            <input type="text" id="FACEBOOK_SECRET" name="FACEBOOK_SECRET" value="{if $demo_mode eq "1"}Hidden in demo mode{else}{$FACEBOOK_SECRET}{/if}" class="medium tip-right" title="You'll find it in Facebook developers page">
                        </div>
                 </div>
                 
            	 <div class="elem">
                        <label>Twitter Connect:</label>
                        <div class="indent">
                         <select id="TC" name="TC" class="chzn-select medium-select select" > 
                            <option value="1" {if $TC eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $TC eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Twitter Customer Key:</label>
                        <div class="indent">
                            <input type="text" id="TWITTER_APP_ID" name="TWITTER_APP_ID" value="{if $demo_mode eq "1"}Hidden in demo mode{else}{$TWITTER_APP_ID}{/if}" class="medium" title="You'll find it in Twitter developers page"> 
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Twitter APP secret: </label>
                        <div class="indent">
                            <input type="text" id="TWITTER_APP_SECRET" name="TWITTER_APP_SECRET" value="{if $demo_mode eq "1"}Hidden in demo mode{else}{$TWITTER_APP_SECRET}{/if}" class="medium tip-right" title="You'll find it in Twitter developers page">
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
