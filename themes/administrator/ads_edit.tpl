 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="{$adminurl}/dashboard.php">{$site_name} Admin Panel</a> &rsaquo; Advertising &rsaquo; Edit Ad #{$ad.AID}</div> 
        </div>

		{if $message ne ""}
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert green hideit"><p><span class="green-icon"></span>{$message}</p></div>
           </div> 
		<!--Alerts end-->
		{/if}
		{if $error ne ""}
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert red hideit"><p><span class="red-icon"></span>{$error}</p></div>
           </div> 
		<!--Alerts end-->
		{/if}

		<!--Form-->
        <div class="grid-1">
           <div class="title-grid">General Settings</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="{$adminurl}/ads_edit.php?AID={$ad.AID}">
                 <div class="elem">
                        <label>Ad ID:</label>
                        <div class="indent">
                            <label>{$ad.AID}</label>
							<a href="{$adminurl}/ads_all.php?delete=1&AID={$ad.AID}" class="right" style="color:red;">Delet Ad</a>
                        </div>
                 </div>

				 
				 <div class="elem">
                        <label>Description:</label>
                        <div class="indent">
                            <input type="text" id="description" name="description" value="{$ad.description}" class="medium tip-right" title="Ad space description"> 
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Advertising Code:</label>
                        <div class="indent">
                            <textarea  class="medium"  id="adcode" name="adcode" rows="5">{$ad.code|stripslashes}</textarea>
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Active:</label>
                        <div class="indent">
                         <select id="active" name="active" class="chzn-select medium-select select" > 
                            <option value="1" {if $ad.active eq "1"}selected{/if}>Active</option>
                            <option value="0" {if $ad.active eq "0"}selected{/if}>Not Active</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>AD CODE:</label>
                        <div class="indent">
                        {literal}
						{insert name=get_advertisement AID={/literal}{$ad.AID}{literal}}
						{/literal}
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
