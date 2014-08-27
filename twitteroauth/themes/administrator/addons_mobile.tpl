 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="{$adminurl}/dashboard.php">{$site_name} Admin Panel</a> &rsaquo; Addons &rsaquo; Mobile Module</div> 
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
           <div class="title-grid">Mobile Module</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="{$adminurl}/addons_mobile.php">
            	 <div class="elem">
                        <label>Turn On/Off:</label>
                        <div class="indent">
                         <select id="mobilemode" name="mobilemode" class="chzn-select medium-select select" > 
                            <option value="1" {if $mobilemode eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $mobilemode eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Items per page: </label>
                        <div class="indent">
                            <input type="text" id="mobile_per_page" name="mobile_per_page" value="{$mobile_per_page}" class="medium tip-right" title="Number of items that'll appear in mobile site per page.">
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Mobile URL: </label>
                        <div class="indent">
                            <input type="text" id="m_url" name="m_url" value="{$m_url}" class="medium tip-right" title="Mobile site URL.">
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
