 
  
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
          	 <form method="post" id="customForm" action="{$adminurl}/settings_wm.php">
            	 <div class="elem">
                        <label>Logo Watermark:</label>
                        <div class="indent">
                         <select id="lwm" name="lwm" class="chzn-select medium-select select" > 
                            <option value="1" {if $lwm eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $lwm eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Text Watermark:</label>
                        <div class="indent">
                         <select id="twm" name="twm" class="chzn-select medium-select select" > 
                            <option value="1" {if $twm eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $twm eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Hidewatermark:</label>
                        <div class="indent">
                         <select id="displaywm" name="displaywm" class="chzn-select medium-select select" > 
                            <option value="1" {if $displaywm eq "1"}selected{/if}>Display</option>
                			<option value="0" {if $displaywm eq "0"}selected{/if}>Hide</option>
                        </select>   
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Watermark Font: </label>
                        <div class="indent">
                            <input type="text" id="wmfont" name="wmfont" value="{$wmfont}" class="medium tip-right" title="You MUST upload the font file into /inc/fonts/">
                        </div>
                 </div>
                 
				 <div class="elem">
                        <label>Font Size: </label>
                        <div class="indent">
                            <input type="text" id="fsize" name="fsize" value="{$fsize}" class="medium tip-right" title="Text watermark font size">
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Watermark Height: </label>
                        <div class="indent">
                            <input type="text" id="wmhieght" name="wmhieght" value="{$wmhieght}" class="medium tip-right" title="Total Watermark Height">
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>Watermark background RBG:</label>
                        <div class="indent">
                            <table class="table_form">
                            <tr>
                            <td>
                            <input type="text" name="blackr" class="small" id="blackr" value="{$blackr}" maxlength="5" size="5" /></td>
                            <td>-</td>
                            <td>
                            <input type="text" name="blackb" class="small" id="blackb" value="{$blackb}" maxlength="5" size="5" /></td>
                            <td>-</td>
                            <td>
                            <input type="text" name="blackg" class="small" id="blackg" value="{$blackg}" maxlength="5" size="5" /></td>
                            </tr>
                            </table>
                        </div>
                </div>
				
				 <div class="elem">
                        <label>Watermark Text RBG:</label>
                        <div class="indent">
                            <table class="table_form">
                            <tr>
                            <td>
                            <input type="text" name="whiter" class="small" id="whiter" value="{$whiter}" maxlength="5" size="5" /></td>
                            <td>-</td>
                            <td>
                            <input type="text" name="whiteb" class="small" id="whiteb" value="{$whiteb}" maxlength="5" size="5" /></td>
                            <td>-</td>
                            <td>
                            <input type="text" name="whiteg" class="small" id="whiteg" value="{$whiteg}" maxlength="5" size="5" /></td>
                            </tr>
                            </table>
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
