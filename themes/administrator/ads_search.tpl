 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="{$adminurl}/dashboard.php">{$site_name} Admin Panel</a> &rsaquo; Advertising &rsaquo; All Ads</div> 
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
          	 <form method="post" id="customForm" action="{$adminurl}/ads_search.php">
                 
				 <div class="elem">
                        <label>Start Ad ID:</label>
                        <div class="indent">
                            <input type="text" id="startid" name="startid" value="{$startid}" class="medium tip-right" title="Start Ad slot ID"> 
                        </div>
                 </div>

				 <div class="elem">
                        <label>End Ad ID:</label>
                        <div class="indent">
                            <input type="text" id="endid" name="endid" value="{$endid}" class="medium tip-right" title="End Ad slot ID"> 
                        </div>
                 </div>

				 
				 <div class="elem">
                        <label>Description:</label>
                        <div class="indent">
                            <input type="text" id="description" name="description" value="{$description}" class="medium tip-right" title="Ad space description"> 
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Active:</label>
                        <div class="indent">
                         <select id="active" name="active" class="chzn-select medium-select select" > 
                            <option value="2" {if $active eq "2"}selected{/if}>Any</option>
                            <option value="1" {if $active eq "1"}selected{/if}>Active</option>
                            <option value="0" {if $active eq "0"}selected{/if}>Not Active</option>
                        </select>   
                        </div>
                 </div>
				 
				 <input type="hidden" id="submitform" name="submitform" value="1" >
				 <div style="width:330px;margin:20px;">
				<input type="submit" class="button-a red right" value="Search Ads">
				</div>
                 </form>
    		 <div class="clear"> </div>
             </div>
           </div>
        </div>  
		<!--Form end-->
		
		<!--Table Styling-->
      <div class="grid-1">
           <div class="title-grid">Advertising</div>
           <div class="content-gird">
            	<table class="display">
                <thead>
                    <tr>
                        <th class="th_title">ID</th>
                        <th class="th_status">Description</th>


                        <th class="th_date">Code</th>
                        <th class="th_date">Preview</th>
                        <th class="th_date">Status</th>
                        <th class="th_author">Delete</th>
                    </tr>
                </thead>
                <tbody>
				
				{section name=i loop=$ads}
				   <tr class="item">
                        <td class="subject">{$ads[i].AID}</td>
                        <td><span class="published">{$ads[i].description}</span></td>
                        <td style="width:250px;">
							{literal}
							{insert name=get_advertisement AID={/literal}{$ads[i].AID}{literal}}
							{/literal}
						</td>
                        <td><a href="javascript:NewWindow('{$adminurl}/ads_preview.php?AID={$ads[i].AID}','name','800','600','yes')">Perview</a></td>
                        <td>{if $ads[i].active eq "1"}Active{else}Not Active{/if}</td>
                        <td class="name">
							<ul class="button-list-1">
								<li><a class="button-a red" href="{$adminurl}/ads_edit.php?AID={$ads[i].AID}"><span class="edits icon-white"></span></a></li>
								<li><a class="button-a red" href="{$adminurl}/ads_all.php?delete=1&AID={$ads[i].AID}&page={$page}"><span class="del icon-white"></span></a></li>
						    </ul>
						</td>
                    </tr>
				 {/section}
				 <tr>
                    <td colspan="6">
                    {$pagelinks}
                    </td>
                 </tr>
                </tbody>
            </table>
			
    		
           </div>
           </div>
		<!--Table Styling end-->
             
        
        
        
			</div><!-- #content-->
		</div><!-- #container-->

		{include file='administrator/left_side.tpl'}
        	</div><!-- #container main-->
