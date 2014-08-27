<aside id="sideLeft">
			 <span class="categories">Administrator Panel</span>
   <ul class="menu">
		<li {if $main_menu eq "1"}class="expand"{/if}>
			<a href="#"><span class="four-prong icon">General</span><span class="num">8</span></a>
			<ul class="acitem">
				<li><a href="{$adminurl}/dashboard.php"><span class="dashboard icon">Dashboard</span></a></li>
				<li><a href="{$adminurl}/settings_general.php"><span class="charts icon">General Settings</span></a></li>
                <li><a href="{$adminurl}/settings_front.php"><span class="gallery-pic icon">Front Page</span></a></li>
                <li><a href="{$adminurl}/settings_social.php"><span class="cal icon">Social Connect</span></a></li>
                <li><a href="{$adminurl}/settings_wm.php"><span class="conversations icon">Watermarking</span></a></li>
                <li><a href="{$adminurl}/settings_points.php"><span class="steps icon">Points</span></a></li>
                <li><a href="{$adminurl}/settings_seo.php"><span class="steps icon">SEO</span></a></li>
                <li><a href="{$adminurl}/settings_static.php"><span class="buttons-icons icon">Static Pages</span></a></li>
			</ul>
		</li>
		<li {if $main_menu eq "2"}class="expand"{/if}>
			<a href="#"><span class="four-prong icon">Posts</span><span class="num">5</span></a>
			<ul class="acitem">
            	<li><a href="{$adminurl}/posts_all.php"><span class="forms icon">All Posts</span></a></li>
            	<li><a href="{$adminurl}/posts_search.php"><span class="w-editor icon">Search Posts</span></a></li>
       			<li><a href="{$adminurl}/posts_approve.php"><span class="tables icon">Approve Posts</span></a></li>
       			<li><a href="{$adminurl}/posts_reports.php"><span class="tables icon">Posts Reports</span></a></li>
                <li><a href="{$adminurl}/posts_channels.php"><span class="grids icon">Channels</span></a></li>
                <li><a href="{$adminurl}/posts_channels_search.php"><span class="w-editor icon">Search Channels</span></a></li>
                <li><a href="{$adminurl}/posts_channels_new.php"><span class="grids icon">Create New Channels</span></a></li>
			</ul>
		</li>
		<li {if $main_menu eq "3"}class="expand"{/if}>
			<a href="#"><span class="four-prong icon">Users</span><span class="num">3</span></a>
			<ul class="acitem">
                <li><a href="{$adminurl}/users_all.php"><span class="invoice icon">All Users</span></a></li>
                <li><a href="{$adminurl}/users_search.php"><span class="w-editor icon">Search Users</span></a></li>
       		    <li><a href="{$adminurl}/users_banned.php"><span class="errors icon">Banned Users</span></a></li>
                <li><a href="{$adminurl}/users_nl.php"><span class="connection icon">News Letter</span></a></li>
			</ul>
		</li>
		<li {if $main_menu eq "4"}class="expand"{/if}>
			<a href="#"><span class="four-prong icon">Administrators</span><span class="num">2</span></a>
			<ul class="acitem">
                <li><a href="{$adminurl}/admins_all.php"><span class="typo icon">All Admins</span></a></li>
                <li><a href="{$adminurl}/admins_search.php"><span class="w-editor icon">Search Admins</span></a></li>
                <li><a href="{$adminurl}/admins_new.php"><span class="typo icon">Create New Admin</span></a></li>
			</ul>
		</li>
		<li {if $main_menu eq "5"}class="expand"{/if}>
			<a href="#"><span class="four-prong icon">Advertising</span><span class="num">2</span></a>
			<ul class="acitem">
                <li><a href="{$adminurl}/ads_all.php"><span class="files icon">All Ads</span></a></li>
                <li><a href="{$adminurl}/ads_search.php"><span class="w-editor icon">Search Ads</span></a></li>
                <li><a href="{$adminurl}/ads_new.php"><span class="files icon">Create New Ad</span></a></li>
			</ul>
		</li>
		<li {if $main_menu eq "6"}class="expand"{/if}>
			<a href="#"><span class="four-prong icon">Addons</span><span class="num">{$addons|@count}</span></a>
			<ul class="acitem">
			{section name=i loop=$addons}
                <li><a href="{$adminurl}/addons_{$addons[i].code}.php"><span class="files icon">{$addons[i].name}</span></a></li>
			{/section}
			</ul>
		</li>
	</ul>
        
	</div>
		</aside><!-- #sideLeft -->