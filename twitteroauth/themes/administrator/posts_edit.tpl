 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="{$adminurl}/dashboard.php">{$site_name} Admin Panel</a> &rsaquo; Users &rsaquo; Edit Post #{$post.PID}</div> 
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
           <div class="title-grid">Edit Post</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="{$adminurl}/posts_edit.php?PID={$post.PID}">
                 <div class="elem">
                        <label>Post ID:</label>
                        <div class="indent">
                            <label>{$post.PID}</label>
							<a href="{$adminurl}/posts_all.php?delete=1&PID={$post.PID}" class="right" style="color:red;">Delet Post</a>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>Post:</label>
                        <div class="indent">
									{if $post.pic ne ""}
										<ul class="gallery">
										   <li><a class="fancybox" href="{$purl}/t/l-{$post.pic}">  <img src="{$purl}/t/s-{$post.pic}" width="88px" alt=""  /></a>
												 <ul class="img_options">
													<li><a class="zoom fancybox" href="{$purl}/t/l-{$post.pic}"><span>View</span></a></li> 
												 </ul>
										   </li>
										</ul>
									{else}
										{if $post.youtube_key != ""}
											<center>{insert name=return_youtube2 value=a assign=youtube youtube=$post.youtube_key}{$youtube}</center>
                                        {elseif $post.fod_key != ""}
											<center>{insert name=return_fod2 value=a assign=fod fod=$post.fod_key}{$fod}</center>
										{elseif $post.vfy_key != ""}
											<center>{insert name=return_vfy2 value=a assign=vfy vfy=$post.vfy_key}{$vfy}</center>
										{elseif $post.vmo_key != ""}
											<center>{insert name=return_vmo2 value=a assign=vmo vmo=$post.vmo_key}{$vmo}</center>
										{else}
											<center>{$lang264}</center>
										{/if}
                                    {/if}
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Title:</label>
                        <div class="indent">
                            <input type="text" id="story" name="story" value="{$post.story}" class="medium tip-right" title="Post Title"> 
                            <br><br>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>User Name:</label>
                        <div class="indent">
                            <label><a href="{$adminurl}/users_edit.php?ID={$post.USERID}" target="_blank">{$post.username}</a></label> 
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Channel:</label>
                        <div class="indent">
                         <select id="CID" name="CID" class="chzn-select medium-select select" >
						 {section name=j loop=$channels}
                            <option value="{$channels[j].CID}" {if $post.CID eq $channels[j].CID}selected{/if}>{$channels[j].cname}</option>
							{/section}
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Active:</label>
                        <div class="indent">
                         <select id="active" name="active" class="chzn-select medium-select select" > 
                            <option value="1" {if $post.active eq "1"}selected{/if}>Active</option>
                            <option value="0" {if $post.active eq "0"}selected{/if}>Not Active</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Phase:</label>
                        <div class="indent">
                         <select id="phase" name="phase" class="chzn-select medium-select select" > 
                            <option value="2" {if $post.phase eq "2"}selected{/if}>Hot</option>
                            <option value="1" {if $post.phase eq "1"}selected{/if}>Trending</option>
                            <option value="0" {if $post.phase eq "0"}selected{/if}>Vote</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Likes:</label>
                        <div class="indent">
                            <input type="text" id="favclicks" name="favclicks" value="{$post.favclicks}" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Dislikes:</label>
                        <div class="indent">
                            <input type="text" id="unfavclicks" name="unfavclicks" value="{$post.unfavclicks}" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Tags:</label>
                        <div class="indent">
                            <input type="text" id="tags" name="tags" value="{$post.tags}" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Source:</label>
                        <div class="indent">
                            <input type="text" id="source" name="source" value="{$post.source}" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>NSFW:</label>
                        <div class="indent">
                         <select id="nsfw" name="nsfw" class="chzn-select medium-select select" > 
                            <option value="1" {if $post.nsfw eq "1"}selected{/if}>Yes</option>
                            <option value="0" {if $post.nsfw eq "0"}selected{/if}>No</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>IP:</label>
                        <div class="indent">
                            <input type="text" id="pip" name="pip" value="{$post.pip}" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>Uploaded Since:</label>
                        <div class="indent">
                            <label>{$post.time_added|date_format} {$post.time_added|date_format:"%I:%M %p"}</label>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>Last Viewed:</label>
                        <div class="indent">
                            <label>{$post.last_viewed|date_format} {$post.last_viewed|date_format:"%I:%M %p"}</label>
                        </div>
                 </div>
				 <input type="hidden" id="submitform" name="submitform" value="1" >
				 <div style="width:330px;margin:20px;">
				<input type="submit" class="button-a red right" value="Save Post">
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
