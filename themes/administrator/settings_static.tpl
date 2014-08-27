 
  
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
          	 <form method="post" id="customForm" action="{$adminurl}/settings_static.php">
				{section name=i loop=$statics}
            	 <div class="elem">
                        <label>Name:</label>
                        <div class="indent">
                            <input type="text" id="title{$smarty.section.i.iteration}" name="title{$smarty.section.i.iteration}" value="{$statics[i].title}" class="medium tip-right" title="Static Page Title"> 
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Content:</label>
                        <div class="indent">
                            <textarea  class="medium"  id="value{$smarty.section.i.iteration}" name="value{$smarty.section.i.iteration}" rows="15">{$statics[i].value}</textarea>
                            <br><br>
                        </div>
                 </div>
				{/section}
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
