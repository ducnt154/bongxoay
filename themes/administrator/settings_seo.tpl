 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="{$adminurl}/dashboard.php">{$site_name} Admin Panel</a> &rsaquo; Settings &rsaquo; SEO</div> 
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
           <div class="title-grid">SEO</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="{$adminurl}/settings_seo.php">
            	 <div class="elem">
                        <label>SEO:</label>
                        <div class="indent">
                         <select id="SEO" name="SEO" class="chzn-select medium-select select" > 
                            <option value="1" {if $SEO eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $SEO eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Meta Description: </label>
                        <div class="indent">
                            <input type="text" id="metadescription" name="metadescription" value="{$metadescription}" class="medium tip-right" title="HTML meta description">
                        </div>
                 </div>
                 
				 <div class="elem">
                        <label>Meta Keywords: </label>
                        <div class="indent">
                            <input type="text" id="metakeywords" name="metakeywords" value="{$metakeywords}" class="medium tip-right" title="HTML meta keywords">
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Google Analytics: </label>
                        <div class="indent">
                            <input type="text" id="ganalytics" name="ganalytics" value="{$ganalytics}" class="medium tip-right" title="To enable, add your analytics ID only EXAMPLE : UA-12345678-1 . Leave blank to disable it.">
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Sitemap:</label>
                        <div class="indent">
							<a href="javascript:NewWindow('{$adminurl}/settings_sitemap.php','name','800','600','yes')">Create Sitemap now</a>
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
