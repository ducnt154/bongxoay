 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="#">{$site_name} Admin Panel</a> &rsaquo; <a href="#">Dashboard</a></div> 
        </div>
		<div class="grid-1">
           <div class="title-grid">Statics</div>        
           <div class="content-gird">
        <!-- Information data -->
        <div class="information-data">
            <div class="date">
                <p class="date-figures">{insert name=get_total_m3}</p>
                <p class="date-title">Total users</p>
            </div>
            <div class="date">
                <p class="date-figures">{insert name=get_total_v5}</p>
                <p class="date-title">Total Posts</p>
            </div>
            <div class="date">
                <p class="date-figures">{insert name=get_total_v4}</p>
                <p class="date-title">New Posts</p>
            </div>
            <div class="date">
                <p class="date-figures">{insert name=get_total_v2}</p>
                <p class="date-title">Reported Posts</p>
            </div>
			<div class="date date-last">
                <p class="date-figures">{insert name=get_total_v1}</p>
                <p class="date-title">Posts Awaiting Validation</p>
            </div>
        </div>
        <!-- Information data end -->
			</div>
        </div>
        		        <!--Pictures-->
        <div class="grid-2">
           <div class="title-grid">Latest Posts</div>
           <div class="content-gird">
          		 <ul class="gallery">
				 {section name=i loop=$posts}
            	   <li><a class="fancybox" href="{$purl}/t/l-{$posts[i].pic}">  <img src="{$purl}/t/s-{$posts[i].pic}" width="88px" alt=""  /></a>
                         <ul class="img_options">
                            <li><a class="zoom fancybox" href="{$purl}/t/l-{$posts[i].pic}"><span>View</span></a></li> 
                         </ul>
                   </li>
				 {/section}  
				</ul>
                <div class="clear"> </div>
                </div>
        </div>
		<!--Pictures end-->
        
		<!--Users-->
        <div class="grid-2 last right">
           <div class="title-grid">Latest Users</div>
           <div class="content-gird">
          	   <div class="users-list">
			   {section name=i loop=$users}
                <div class="user">
                	<div class="user-avatar"><img src="{$membersprofilepicurl}/thumbs/{if $users[i].profilepicture eq ""}noprofilepicture.jpg{else}{$users[i].profilepicture}{/if}"></div>
                    <div class="user-info">
                    <div class="user-name">{$users[i].username}</div>
                    <div class="user-email">{if $demo_mode eq "1"}Email is hidden in demo mode{else}{$users[i].email}{/if}</div>
                    <div class="user-link"><a href="{$adminurl}/users_edit.php?ID={$users[i].USERID}">Edit</a> | <a href="{$adminurl}/users_all.php?delete=1&ID={$users[i].USERID}">Delete</a></div>
                    </div>
                    <div class="clear"> </div>
                </div>	
				{/section}
                <div class="clear"> </div>
                </div>
            </div>
        </div>
		<!--Users end-->
		        
        
        
        
			</div><!-- #content-->
		</div><!-- #container-->

		{include file='administrator/left_side.tpl'}
        	</div><!-- #container main-->
