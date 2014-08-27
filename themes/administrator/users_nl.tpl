 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="{$adminurl}/dashboard.php">{$site_name} Admin Panel</a> &rsaquo; News Letter</div> 
        </div>

		{if $message ne ""}
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert green hideit"><p><span class="green-icon"></span>{$message}</p></div>
           </div> 
		<!--Alerts end-->
		{/if}
		{if $message2 ne ""}
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert orange hideit"><p><span class="orange-icon"></span>{$message2}</p></div>
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
		{if $no_form ne "1"}
		<!--Form-->
        <div class="grid-1">
           <div class="title-grid">General Settings</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="{$adminurl}/users_nl.php">
                 <div class="elem">
                        <label>Subject:</label>
                        <div class="indent">
                            <input type="text" id="title" name="title" value="" class="medium tip-right" title="Email Subject"> 
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Email Body:</label>
                        <div class="indent">
                            <textarea  class="medium"  id="body" name="body" rows="30"></textarea>
                            <br><br>
                        </div>
                 </div>
				 
				 <input type="hidden" id="submitform" name="submitform" value="1" >
				 <div style="width:330px;margin:20px;">
				<input type="submit" class="button-a red right" value="Send News Letter">
				</div>
                 </form>
    		 <div class="clear"> </div>
             </div>
           </div>
        </div>  
		<!--Form end-->
		{/if}
        
        
        
			</div><!-- #content-->
		</div><!-- #container-->

		{include file='administrator/left_side.tpl'}
        	</div><!-- #container main-->
