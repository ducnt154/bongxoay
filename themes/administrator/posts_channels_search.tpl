 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="{$adminurl}/dashboard.php">{$site_name} Admin Panel</a> &rsaquo; Posts &rsaquo; Channels</div> 
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
           <div class="title-grid">Channels</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="{$adminurl}/posts_channels_search.php">
			    
				<div class="elem">
                        <label>Channel Start ID:</label>
                        <div class="indent">
                            <input type="text" id="startid" name="startid" value="{$startid}" class="medium tip-right" title="Channel ID"> 
                        </div>
                 </div>
                
				<div class="elem">
                        <label>Channel End ID:</label>
                        <div class="indent">
                            <input type="text" id="endid" name="endid" value="{$endid}" class="medium tip-right" title="Channel ID"> 
                        </div>
                 </div>
                
				<div class="elem">
                        <label>Channel Name:</label>
                        <div class="indent">
                            <input type="text" id="cname" name="cname" value="{$cname}" class="medium tip-right" title="Name used in channels menu"> 
                        </div>
                 </div>

				 <input type="hidden" id="submitform" name="submitform" value="1" >
				 <div style="width:330px;margin:20px;">
				<input type="submit" class="button-a red right" value="Search Channels">
				</div>
                 </form>
    		 <div class="clear"> </div>
             </div>
           </div>
        </div>  
		<!--Form end-->
             

		<!--Table Styling-->
      <div class="grid-1">
           <div class="title-grid">Channels Search</div>
           <div class="content-gird">
            	<table class="display">
                <thead>
                    <tr>
                        <th class="th_title">ID</th>
                        <th class="th_status">Channel Name</th>


                        <th class="th_author">Delete</th>
                    </tr>
                </thead>
                <tbody>
				
				{section name=i loop=$channels}
				   <tr class="item">
                        <td class="subject">{$channels[i].CID}</td>
                        <td><span class="published">{$channels[i].cname}</span></td>
						<td class="name">
							<ul class="button-list-1">
								<li><a class="button-a red" href="{$adminurl}/posts_channels_edit.php?CID={$channels[i].CID}"><span class="edits icon-white"></span></a></li>
								<li><a class="button-a red" href="{$adminurl}/posts_channels.php?delete=1&CID={$channels[i].CID}&page={$page}"><span class="del icon-white"></span></a></li>
						    </ul>
						</td>
                    </tr>
				 {/section}
				 <tr>
                    <td colspan="3">
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
