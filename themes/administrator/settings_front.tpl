 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="{$adminurl}/dashboard.php">{$site_name} Admin Panel</a> &rsaquo; Settings &rsaquo; Front page</div> 
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
           <div class="title-grid">Front Page Settings</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="{$adminurl}/settings_front.php">
                 <div class="elem">
                        <label>Number Of Items: </label>
                        <div class="indent">
                            <input type="text" id="items_per_page" name="items_per_page" value="{$items_per_page}" class="medium tip-right" title="Number of posts in each page">
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Ajax Reload:</label>
                        <div class="indent">
                         <select id="AUTOSCROLL" name="AUTOSCROLL" class="chzn-select medium-select select" > 
                            <option value="1" {if $AUTOSCROLL eq "1"}selected{/if}>Ajax Reload</option>
                            <option value="0" {if $AUTOSCROLL eq "0"}selected{/if}>Normal Pagination</option>
                        </select>   
                        </div>
                 </div>
				                  
                 <div class="elem">
                        <label>Auto Scroll Reloads: </label>
                        <div class="indent">
                            <input type="text" id="autoscroll_reloads" name="autoscroll_reloads" value="{$autoscroll_reloads}" class="medium tip-right" title="Number of reloads before moving to the next page">
                        </div>
                 </div>
 
            	 <div class="elem">
                        <label>Thumbnails View:</label>
                        <div class="indent">
                         <select id="thumbs" name="thumbs" class="chzn-select medium-select select" > 
                            <option value="1" {if $thumbs eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $thumbs eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Safe Mode:</label>
                        <div class="indent">
                         <select id="safemode" name="safemode" class="chzn-select medium-select select" > 
                            <option value="1" {if $safemode eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $safemode eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>RSS :</label>
                        <div class="indent">
                         <select id="RSS" name="RSS" class="chzn-select medium-select select" > 
                            <option value="1" {if $RSS eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $RSS eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Top Posts Page:</label>
                        <div class="indent">
                         <select id="topposts" name="topposts" class="chzn-select medium-select select" > 
                            <option value="1" {if $topposts eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $topposts eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Top Users Page:</label>
                        <div class="indent">
                         <select id="topusers" name="topusers" class="chzn-select medium-select select" > 
                            <option value="1" {if $topusers eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $topusers eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Trending Page:</label>
                        <div class="indent">
                         <select id="trendingenabled" name="trendingenabled" class="chzn-select medium-select select" > 
                            <option value="1" {if $trendingenabled eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $trendingenabled eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Fixing posts:</label>
                        <div class="indent">
                         <select id="fixenabled" name="fixenabled" class="chzn-select medium-select select" > 
                            <option value="1" {if $fixenabled eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $fixenabled eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Channels :</label>
                        <div class="indent">
                         <select id="channels" name="channels" class="chzn-select medium-select select" > 
                            <option value="1" {if $channels eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $channels eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Allow Vote Page For Guests:</label>
                        <div class="indent">
                         <select id="voteforvisitor" name="voteforvisitor" class="chzn-select medium-select select" > 
                            <option value="1" {if $voteforvisitor eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $voteforvisitor eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Truncate Titles:</label>
                        <div class="indent">
                         <select id="truncate" name="truncate" class="chzn-select medium-select select" > 
                            <option value="1" {if $truncate eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $truncate eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Recommened Posts In Post Page:</label>
                        <div class="indent">
                         <select id="recommended" name="recommended" class="chzn-select medium-select select" > 
                            <option value="0" {if $recommended eq "0"}selected{/if}>Disabled</option>
                			<option value="1" {if $recommended eq "1"}selected{/if}>Under Post</option>
                			<option value="2" {if $recommended eq "2"}selected{/if}>At Right Side</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Recommended Posts In Main Pages:</label>
                        <div class="indent">
                         <select id="rhome" name="rhome" class="chzn-select medium-select select" > 
                            <option value="1" {if $rhome eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $rhome eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Redirection After Registeration:</label>
                        <div class="indent">
                         <select id="regredirect" name="regredirect" class="chzn-select medium-select select" > 
                            <option value="1" {if $regredirect eq "1"}selected{/if}>Index</option>
                			<option value="0" {if $regredirect eq "0"}selected{/if}>Settings</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Index Page:</label>
                        <div class="indent">
                         <select id="index" name="index" class="chzn-select medium-select select" > 
                            <option value="0" {if $index eq "0"}selected{/if}>Hot</option>
                			<option value="1" {if $index eq "1"}selected{/if}>Trending</option>
                			<option value="2" {if $index eq "2"}selected{/if}>Vote</option>
                        </select>   
                        </div>
                 </div>
				                 
                 <div class="elem">
                        <label>Post Folder: </label>
                        <div class="indent">
                            <input type="text" id="postfolder" name="postfolder" value="{$postfolder}" class="medium tip-right" title="Virtual folder name in posts URL. Changing this will require .htaccess changes.">
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Share Button #1 :</label>
                        <div class="indent">
                         <select id="share1" name="share1" class="chzn-select medium-select select" > 
                            <option value="1" {if $share1 eq "1"}selected{/if}>Twitter Button</option>
                			<option value="2" {if $share1 eq "2"}selected{/if}>Facebook Sharer</option>
                			<option value="3" {if $share1 eq "3"}selected{/if}>Facebook Like</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Share Button #2 :</label>
                        <div class="indent">
                         <select id="share2" name="share2" class="chzn-select medium-select select" > 
                            <option value="1" {if $share2 eq "1"}selected{/if}>Twitter Button</option>
                			<option value="2" {if $share2 eq "2"}selected{/if}>Facebook Sharer</option>
                			<option value="3" {if $share2 eq "3"}selected{/if}>Facebook Like</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Popular Posts In Post Page:</label>
                        <div class="indent">
                         <select id="populargags" name="populargags" class="chzn-select medium-select select" > 
                            <option value="1" {if $populargags eq "1"}selected{/if}>Enabled</option>
                            <option value="0" {if $populargags eq "0"}selected{/if}>Disabled</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Featured Posts In Main Pages:</label>
                        <div class="indent">
                         <select id="topgags" name="topgags" class="chzn-select medium-select select" > 
                            <option value="0" {if $topgags eq "0"}selected{/if}>Disabled</option>
                            <option value="1" {if $topgags eq "1"}selected{/if}>Daily</option>
                            <option value="2" {if $topgags eq "2"}selected{/if}>Weekly</option>
                            <option value="3" {if $topgags eq "3"}selected{/if}>Monthly</option>
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
