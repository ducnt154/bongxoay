<?php /* Smarty version 2.6.6, created on 2014-07-08 22:00:11
         compiled from administrator/dashboard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'get_total_m3', 'administrator/dashboard.tpl', 19, false),array('insert', 'get_total_v5', 'administrator/dashboard.tpl', 23, false),array('insert', 'get_total_v4', 'administrator/dashboard.tpl', 27, false),array('insert', 'get_total_v2', 'administrator/dashboard.tpl', 31, false),array('insert', 'get_total_v1', 'administrator/dashboard.tpl', 35, false),)), $this); ?>
 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="#"><?php echo $this->_tpl_vars['site_name']; ?>
 Admin Panel</a> &rsaquo; <a href="#">Dashboard</a></div> 
        </div>
		<div class="grid-1">
           <div class="title-grid">Statics</div>        
           <div class="content-gird">
        <!-- Information data -->
        <div class="information-data">
            <div class="date">
                <p class="date-figures"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_total_m3')), $this); ?>
</p>
                <p class="date-title">Total users</p>
            </div>
            <div class="date">
                <p class="date-figures"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_total_v5')), $this); ?>
</p>
                <p class="date-title">Total Posts</p>
            </div>
            <div class="date">
                <p class="date-figures"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_total_v4')), $this); ?>
</p>
                <p class="date-title">New Posts</p>
            </div>
            <div class="date">
                <p class="date-figures"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_total_v2')), $this); ?>
</p>
                <p class="date-title">Reported Posts</p>
            </div>
			<div class="date date-last">
                <p class="date-figures"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_total_v1')), $this); ?>
</p>
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
				 <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['posts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            	   <li><a class="fancybox" href="<?php echo $this->_tpl_vars['purl']; ?>
/t/l-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic']; ?>
">  <img src="<?php echo $this->_tpl_vars['purl']; ?>
/t/s-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic']; ?>
" width="88px" alt=""  /></a>
                         <ul class="img_options">
                            <li><a class="zoom fancybox" href="<?php echo $this->_tpl_vars['purl']; ?>
/t/l-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic']; ?>
"><span>View</span></a></li> 
                         </ul>
                   </li>
				 <?php endfor; endif; ?>  
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
			   <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <div class="user">
                	<div class="user-avatar"><img src="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/thumbs/<?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['profilepicture'] == ""): ?>noprofilepicture.jpg<?php else:  echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['profilepicture'];  endif; ?>"></div>
                    <div class="user-info">
                    <div class="user-name"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['username']; ?>
</div>
                    <div class="user-email"><?php if ($this->_tpl_vars['demo_mode'] == '1'): ?>Email is hidden in demo mode<?php else:  echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['email'];  endif; ?></div>
                    <div class="user-link"><a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/users_edit.php?ID=<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['USERID']; ?>
">Edit</a> | <a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/users_all.php?delete=1&ID=<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['USERID']; ?>
">Delete</a></div>
                    </div>
                    <div class="clear"> </div>
                </div>	
				<?php endfor; endif; ?>
                <div class="clear"> </div>
                </div>
            </div>
        </div>
		<!--Users end-->
		        
        
        
        
			</div><!-- #content-->
		</div><!-- #container-->

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'administrator/left_side.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        	</div><!-- #container main-->