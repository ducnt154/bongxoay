 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="{$adminurl}/dashboard.php">{$site_name} Admin Panel</a> &rsaquo; Users &rsaquo; All Administrators</div> 
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

		<!--Table Styling-->
      <div class="grid-1">
           <div class="title-grid">Users</div>
           <div class="content-gird">
            	<table class="display">
                <thead>
                    <tr>
                        <th class="th_title">ID</th>
                        <th class="th_status">User Name</th>
                        <th class="th_status">Email</th>


                        <th class="th_author">Delete</th>
                    </tr>
                </thead>
                <tbody>
				
				{section name=i loop=$admins}
				   <tr class="item">
                        <td class="subject">{$admins[i].ADMINID}</td>
                        <td><span class="published">{$admins[i].username}</span></td>
                        <td><span class="published">{$admins[i].email}</span></td>
                        <td class="name">
							<ul class="button-list-1">
								<li><a class="button-a red" href="{$adminurl}/admins_edit.php?ID={$admins[i].ADMINID}"><span class="edits icon-white"></span></a></li>
								<li><a class="button-a red" href="{$adminurl}/admins_all.php?delete=1&ID={$admins[i].ADMINID}&page={$page}"><span class="del icon-white"></span></a></li>
						    </ul>
						</td>
                    </tr>
				 {/section}
				 <tr>
                    <td colspan="4">
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
