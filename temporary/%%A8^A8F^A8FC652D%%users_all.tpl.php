<?php /* Smarty version 2.6.6, created on 2014-06-14 09:17:54
         compiled from administrator/users_all.tpl */ ?>
 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/dashboard.php"><?php echo $this->_tpl_vars['site_name']; ?>
 Admin Panel</a> &rsaquo; Users &rsaquo; All Users</div> 
        </div>

		<?php if ($this->_tpl_vars['message'] != ""): ?>
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert green hideit"><p><span class="green-icon"></span><?php echo $this->_tpl_vars['message']; ?>
</p></div>
           </div> 
		<!--Alerts end-->
		<?php endif; ?>
		<?php if ($this->_tpl_vars['error'] != ""): ?>
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert red hideit"><p><span class="red-icon"></span><?php echo $this->_tpl_vars['error']; ?>
</p></div>
           </div> 
		<!--Alerts end-->
		<?php endif; ?>

		<!--Table Styling-->
      <div class="grid-1">
           <div class="title-grid">Users</div>
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
				   <tr class="item">
                        <td class="subject"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['USERID']; ?>
</td>
                        <td><span class="published">
							<ul class="gallery">
							   <li><a class="fancybox" href="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/thumbs/<?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['profilepicture'] == ""): ?>noprofilepicture.jpg<?php else:  echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['profilepicture'];  endif; ?>">  <img src="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/thumbs/<?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['profilepicture'] == ""): ?>noprofilepicture.jpg<?php else:  echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['profilepicture'];  endif; ?>" width="88px" alt=""  /></a>
									 <ul class="img_options">
										<li><a class="zoom fancybox" href="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/<?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['profilepicture'] == ""): ?>noprofilepicture.jpg<?php else:  echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['profilepicture'];  endif; ?>"><span>View</span></a></li> 
									 </ul>
							   </li>
							</ul>
						</span></td>
                        <td><span class="published"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['username']; ?>
</span></td>
                        <td><span class="published"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['posts']; ?>
</span></td>
                        <td><span class="published"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['points']; ?>
</span></td>
                        <td><?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['status'] == '1'): ?>Active<?php else: ?>Banned<?php endif; ?></td>
                        <td><?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['status'] == '1'): ?>Verified<?php else: ?>Not Verified<?php endif; ?></td>
                        <td class="name">
							<ul class="button-list-1">
								<li><a class="button-a red" href="<?php echo $this->_tpl_vars['adminurl']; ?>
/users_edit.php?ID=<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['USERID']; ?>
"><span class="edits icon-white"></span></a></li>
								<li><a class="button-a red" href="<?php echo $this->_tpl_vars['adminurl']; ?>
/users_all.php?delete=1&ID=<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['USERID']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
"><span class="del icon-white"></span></a></li>
						    </ul>
						</td>
                    </tr>
				 <?php endfor; endif; ?>
				 <tr>
                    <td colspan="8">
                    <?php echo $this->_tpl_vars['pagelinks']; ?>

                    </td>
                 </tr>
                </tbody>
            </table>
			
    		
           </div>
           </div>
		<!--Table Styling end-->
             
        
        
        
			</div><!-- #content-->
		</div><!-- #container-->

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'administrator/left_side.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        	</div><!-- #container main-->