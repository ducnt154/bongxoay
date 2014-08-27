 
  
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
		
		
		<!--Form-->
        <div class="grid-1">
           <div class="title-grid">Search Posts</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="{$adminurl}/posts_search.php">
                 <div class="elem">
                        <label>Start Post ID:</label>
                        <div class="indent">
                            <input type="text" id="startid" name="startid" value="{$startid}" class="medium tip-right" title="Post Title"> 
                            <br><br>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>End Post ID:</label>
                        <div class="indent">
                            <input type="text" id="endid" name="endid" value="{$endid}" class="medium tip-right" title="Post Title"> 
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Title:</label>
                        <div class="indent">
                            <input type="text" id="story" name="story" value="{$story}" class="medium tip-right" title="Post Title"> 
                            <br><br>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>User Name:</label>
                        <div class="indent">
                             <input type="text" id="username" name="username" value="{$username}" class="medium tip-right" title="Post Title"> 
                            <br><br> 
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Channel:</label>
                        <div class="indent">
                         <select id="CID" name="CID" class="chzn-select medium-select select" >
                            <option value="0" {if $CID eq ""}selected{/if}>Any</option>
						 {section name=j loop=$channels}
                            <option value="{$channels[j].CID}" {if $CID eq $channels[j].CID}selected{/if}>{$channels[j].cname}</option>
							{/section}
                        </select>   
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
				 
            	 <div class="elem">
                        <label>Phase:</label>
                        <div class="indent">
                         <select id="phase" name="phase" class="chzn-select medium-select select" > 
                            <option value="3" {if $phase eq "3"}selected{/if}>Any</option>
                            <option value="2" {if $phase eq "2"}selected{/if}>Hot</option>
                            <option value="1" {if $phase eq "1"}selected{/if}>Trending</option>
                            <option value="0" {if $phase eq "0"}selected{/if}>Vote</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>NSFW:</label>
                        <div class="indent">
                         <select id="nsfw" name="nsfw" class="chzn-select medium-select select" > 
                            <option value="2" {if $post.nsfw eq "2"}selected{/if}>Any</option>
                            <option value="1" {if $post.nsfw eq "1"}selected{/if}>Yes</option>
                            <option value="0" {if $post.nsfw eq "0"}selected{/if}>No</option>
                        </select>   
                        </div>
                 </div>
				 
				 <input type="hidden" id="submitform" name="submitform" value="1" >
				 <div style="width:330px;margin:20px;">
				<input type="submit" class="button-a red right" value="Search Posts">
				</div>
                 </form>
    		 <div class="clear"> </div>
             </div>
           </div>
        </div>  
		<!--Form end-->

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
								<li><a class="button-a red" href="{$adminurl}/posts_edit.php?PID={$posts[i].PID}" target="_blank"><span class="edits icon-white"></span></a></li>
								<li><a class="button-a red" href="{$adminurl}/posts_all.php?delete=1&PID={$posts[i].PID}&page={$page}" target="_blank"><span class="del icon-white"></span></a></li>
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
