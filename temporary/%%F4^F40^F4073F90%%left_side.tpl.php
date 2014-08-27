<?php /* Smarty version 2.6.6, created on 2014-07-08 22:48:21
         compiled from administrator/left_side.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'administrator/left_side.tpl', 55, false),)), $this); ?>
<aside id="sideLeft">
			 <span class="categories">Administrator Panel</span>
   <ul class="menu">
		<li <?php if ($this->_tpl_vars['main_menu'] == '1'): ?>class="expand"<?php endif; ?>>
			<a href="#"><span class="four-prong icon">General</span><span class="num">8</span></a>
			<ul class="acitem">
				<li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/dashboard.php"><span class="dashboard icon">Dashboard</span></a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/settings_general.php"><span class="charts icon">General Settings</span></a></li>
                <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/settings_front.php"><span class="gallery-pic icon">Front Page</span></a></li>
                <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/settings_social.php"><span class="cal icon">Social Connect</span></a></li>
                <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/settings_wm.php"><span class="conversations icon">Watermarking</span></a></li>
                <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/settings_points.php"><span class="steps icon">Points</span></a></li>
                <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/settings_seo.php"><span class="steps icon">SEO</span></a></li>
                <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/settings_static.php"><span class="buttons-icons icon">Static Pages</span></a></li>
			</ul>
		</li>
		<li <?php if ($this->_tpl_vars['main_menu'] == '2'): ?>class="expand"<?php endif; ?>>
			<a href="#"><span class="four-prong icon">Posts</span><span class="num">5</span></a>
			<ul class="acitem">
            	<li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/posts_all.php"><span class="forms icon">All Posts</span></a></li>
            	<li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/posts_search.php"><span class="w-editor icon">Search Posts</span></a></li>
       			<li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/posts_approve.php"><span class="tables icon">Approve Posts</span></a></li>
       			<li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/posts_reports.php"><span class="tables icon">Posts Reports</span></a></li>
                <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/posts_channels.php"><span class="grids icon">Channels</span></a></li>
                <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/posts_channels_search.php"><span class="w-editor icon">Search Channels</span></a></li>
                <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/posts_channels_new.php"><span class="grids icon">Create New Channels</span></a></li>
			</ul>
		</li>
		<li <?php if ($this->_tpl_vars['main_menu'] == '3'): ?>class="expand"<?php endif; ?>>
			<a href="#"><span class="four-prong icon">Users</span><span class="num">3</span></a>
			<ul class="acitem">
                <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/users_all.php"><span class="invoice icon">All Users</span></a></li>
                <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/users_search.php"><span class="w-editor icon">Search Users</span></a></li>
       		    <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/users_banned.php"><span class="errors icon">Banned Users</span></a></li>
                <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/users_nl.php"><span class="connection icon">News Letter</span></a></li>
			</ul>
		</li>
		<li <?php if ($this->_tpl_vars['main_menu'] == '4'): ?>class="expand"<?php endif; ?>>
			<a href="#"><span class="four-prong icon">Administrators</span><span class="num">2</span></a>
			<ul class="acitem">
                <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/admins_all.php"><span class="typo icon">All Admins</span></a></li>
                <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/admins_search.php"><span class="w-editor icon">Search Admins</span></a></li>
                <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/admins_new.php"><span class="typo icon">Create New Admin</span></a></li>
			</ul>
		</li>
		<li <?php if ($this->_tpl_vars['main_menu'] == '5'): ?>class="expand"<?php endif; ?>>
			<a href="#"><span class="four-prong icon">Advertising</span><span class="num">2</span></a>
			<ul class="acitem">
                <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/ads_all.php"><span class="files icon">All Ads</span></a></li>
                <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/ads_search.php"><span class="w-editor icon">Search Ads</span></a></li>
                <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/ads_new.php"><span class="files icon">Create New Ad</span></a></li>
			</ul>
		</li>
		<li <?php if ($this->_tpl_vars['main_menu'] == '6'): ?>class="expand"<?php endif; ?>>
			<a href="#"><span class="four-prong icon">Addons</span><span class="num"><?php echo count($this->_tpl_vars['addons']); ?>
</span></a>
			<ul class="acitem">
			<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['addons']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                <li><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/addons_<?php echo $this->_tpl_vars['addons'][$this->_sections['i']['index']]['code']; ?>
.php"><span class="files icon"><?php echo $this->_tpl_vars['addons'][$this->_sections['i']['index']]['name']; ?>
</span></a></li>
			<?php endfor; endif; ?>
			</ul>
		</li>
	</ul>
        
	</div>
		</aside><!-- #sideLeft -->