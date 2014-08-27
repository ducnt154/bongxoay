 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="{$adminurl}/dashboard.php">{$site_name} Admin Panel</a> &rsaquo; Users &rsaquo; Comments</div> 
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

        <!--Messages-->
      <div class="grid-1">
           <div class="title-grid">Comments</div>
           <div class="content-gird">
            	<div class="message-list"> 
               
               {section name=i loop=$comments}
                  <div class="message">
                  <div class="avatar"><img src="{$usersavatarurl}/200p/{if $comments[i].avatar eq ""}noavatar.jpg{else}{$comments[i].avatar}{/if}" alt=""  /></div>
                  <div class="message-content">
          		   <div class="message-info">
                    <div class="message-author"><p>Sender : {$comments[i].username}</p></div>
                    <div class="message-date"><p><a href="{$adminurl}/posts_comments.php?delete=1&page={$page}&CMID={$comments[i].CMID}">Delete</a></p></div>
                    <div class="message-border-head"></div>
                    <div class="message-text"><p>{$comments[i].cm_txt}</p></div>
                   </div>
                   </div>
                   <div class="clear"></div>
                  </div>
               {/section}
        
           </div>
		    <div>{$pagelinks}</div>
			</div> 
        </div>  
		<!--Messages end-->
             
			</div><!-- #content-->
		</div><!-- #container-->

		{include file='admin/left_side.tpl'}
        	</div><!-- #container main-->
