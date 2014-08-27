 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="{$adminurl}/dashboard.php">{$site_name} Admin Panel</a> &rsaquo; Posts &rsaquo; All Posts</div> 
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
           <div class="title-grid">Posts</div>
           <div class="content-gird">
            	<table class="display">
                <thead>
                    <tr>
                        <th class="th_title">ID</th>
                        <th class="th_title">Browse</th>
                        <th class="th_avatar">Image</th>
                        <th class="th_status">Title</th>
                        <th class="th_status">User Name</th>
                        <th class="th_status">Channel</th>
                        <th class="th_status">Likes</th>
                        <th class="th_status">Dislikes</th>

                        <th class="th_date">Status</th>
                        <th class="th_date">Phase</th>
                        <th class="th_author">Delete</th>
                    </tr>
                </thead>
                <tbody>
				
				{section name=i loop=$posts}
				   <tr class="item">
                        <td class="subject">{$posts[i].PID}</td>
                        <td class="subject"><a href="{$baseurl}{$postfolder}{$posts[i].PID}" target="_blank">Browse</a></td>
                        <td><span class="published">
						{if $posts[i].pic ne ""}
							<ul class="gallery">
							   <li><a class="fancybox" href="{$purl}/t/l-{$posts[i].pic}">  <img src="{$purl}/t/s-{$posts[i].pic}" width="88px" alt=""  /></a>
									 <ul class="img_options">
										<li><a class="zoom fancybox" href="{$purl}/t/l-{$posts[i].pic}"><span>View</span></a></li> 
									 </ul>
							   </li>
							</ul>
						{else}
							{if $posts[i].youtube_key != ""}
							YouTube
                            {elseif $posts[i].fod_key != ""}
							FunnyOrDie Video
							{elseif $posts[i].vfy_key != ""}
							Videofy
							{elseif $posts[i].vmo_key != ""}
							Videmo
							{else}
							Something wrong with this post
							{/if}
                        {/if}
							
						</span></td>
                        <td><span class="published">{$posts[i].story}</span></td>
                        <td><span class="published">{$posts[i].username}</span></td>
                        <td><span class="published">{$posts[i].cname}</span></td>
                        <td><span class="published">{$posts[i].favclicks}</span></td>
                        <td><span class="published">{$posts[i].unfavclicks}</span></td>
                        <td>{if $posts[i].active eq "1"}Active{else}Not Active{/if}</td>
                        <td>{if $posts[i].phase eq "0"}Vote{elseif $posts[i].phase eq "1"}Trending{else}Hot{/if}</td>
                        <td class="name">
							<ul class="button-list-1">
								<li><a class="button-a red" href="{$adminurl}/posts_edit.php?PID={$posts[i].PID}"><span class="edits icon-white"></span></a></li>
								<li><a class="button-a red" href="{$adminurl}/posts_all.php?delete=1&PID={$posts[i].PID}&page={$page}"><span class="del icon-white"></span></a></li>
						    </ul>
						</td>
                    </tr>
				 {/section}
				 <tr>
                    <td colspan="11">
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
