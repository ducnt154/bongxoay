 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="{$adminurl}/dashboard.php">{$site_name} Admin Panel</a> &rsaquo; Settings &rsaquo; Points</div> 
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
           <div class="title-grid">Points</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="{$adminurl}/settings_points.php">
				 
                 <div class="elem">
                        <label>Uploading Points: </label>
                        <div class="indent">
                            <input type="text" id="up_points" name="up_points" value="{$up_points}" class="medium tip-right" title="Points for submitting new post">
                        </div>
                 </div>
                 
				 <div class="elem">
                        <label>View Points : </label>
                        <div class="indent">
                            <input type="text" id="view_points" name="view_points" value="{$view_points}" class="medium tip-right" title="Points for each post view">
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
