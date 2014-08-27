 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="{$adminurl}/dashboard.php">{$site_name} Admin Panel</a> &rsaquo; Users &rsaquo; Banned Users</div> 
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
           <div class="title-grid">Banned Users</div>
           <div class="content-gird">
            	<table class="display">
                <thead>
                    <tr>
                        <th class="th_title">ID</th>
                        <th class="th_avatar">Avatar</th>
                        <th class="th_status">User Name</th>
                        <th class="th_status">Posts</th>
                        <th class="th_status">Points</th>


                        <th class="th_date">Status</th>
                        <th class="th_date">Verified</th>
                        <th class="th_author">Delete</th>
                    </tr>
                </thead>
                <tbody>
				
				{section name=i loop=$users}
				   <tr class="item">
                        <td class="subject">{$users[i].USERID}</td>
                        <td><span class="published">
							<ul class="gallery">
							   <li><a class="fancybox" href="{$membersprofilepicurl}/thumbs/{if $users[i].profilepicture eq ""}noprofilepicture.jpg{else}{$users[i].profilepicture}{/if}">  <img src="{$membersprofilepicurl}/thumbs/{if $users[i].profilepicture eq ""}noprofilepicture.jpg{else}{$users[i].profilepicture}{/if}" width="88px" alt=""  /></a>
									 <ul class="img_options">
										<li><a class="zoom fancybox" href="{$membersprofilepicurl}/{if $users[i].profilepicture eq ""}noprofilepicture.jpg{else}{$users[i].profilepicture}{/if}"><span>View</span></a></li> 
									 </ul>
							   </li>
							</ul>
						</span></td>
                        <td><span class="published">{$users[i].username}</span></td>
                        <td><span class="published">{$users[i].posts}</span></td>
                        <td><span class="published">{$users[i].points}</span></td>
                        <td>{if $users[i].status eq "1"}Active{else}Banned{/if}</td>
                        <td>{if $users[i].status eq "1"}Verified{else}Not Verified{/if}</td>
                        <td class="name">
							<ul class="button-list-1">
								<li><a class="button-a red" href="{$adminurl}/users_edit.php?ID={$users[i].USERID}"><span class="edits icon-white"></span></a></li>
								<li><a class="button-a red" href="{$adminurl}/users_banned.php?approve=1&ID={$users[i].USERID}&page={$page}"><span class="open icon-white"></span></a></li>
								<li><a class="button-a red" href="{$adminurl}/users_banned.php?delete=1&ID={$users[i].USERID}&page={$page}"><span class="del icon-white"></span></a></li>
						    </ul>
						</td>
                    </tr>
				 {/section}
				 <tr>
                    <td colspan="8">
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
