<?php /* Smarty version 2.6.6, created on 2014-06-15 22:00:22
         compiled from administrator/posts_reports.tpl */ ?>
 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/dashboard.php"><?php echo $this->_tpl_vars['site_name']; ?>
 Admin Panel</a> &rsaquo; Posts &rsaquo; Posts Reports</div> 
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
           <div class="title-grid">Posts Reports</div>
           <div class="content-gird">
            	<table class="display">
                <thead>
                    <tr>
                        <th class="th_title">ID</th>
                        <th class="th_avatar">Image</th>
                        <th class="th_status">Title</th>
                        <th class="th_status">User Name</th>
                        <th class="th_status">Channel</th>
                        <th class="th_status">Reason</th>

                        <th class="th_date">Status</th>
                        <th class="th_date">Phase</th>
                        <th class="th_author">Post Action</th>
                        <th class="th_author">Report Action</th>
                    </tr>
                </thead>
                <tbody>
				
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
				   <tr class="item">
                        <td class="subject"><?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['RID']; ?>
</td>
                        <td><span class="published">
						<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic'] != ""): ?>
							<ul class="gallery">
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
							</ul>
						<?php else: ?>
							<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['youtube_key'] != ""): ?>
							YouTube
                            <?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['fod_key'] != ""): ?>
							FunnyOrDie Video
							<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['vfy_key'] != ""): ?>
							Videofy
							<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['vmo_key'] != ""): ?>
							Videmo
							<?php else: ?>
							Something wrong with this post
							<?php endif; ?>
                        <?php endif; ?>
							
						</span></td>
                        <td><span class="published"><?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['story']; ?>
</span></td>
                        <td><span class="published"><?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['username']; ?>
</span></td>
                        <td><span class="published"><?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['cname']; ?>
</span></td>
                        <td><span class="published"><?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['reason'] == '1'):  echo $this->_tpl_vars['lang208'];  elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['reason'] == '2'):  echo $this->_tpl_vars['lang209'];  elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['reason'] == '3'):  echo $this->_tpl_vars['lang210'];  elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['reason'] == '4'):  echo $this->_tpl_vars['lang211'];  endif; ?></span></td>
                        <td><?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['active'] == '1'): ?>Active<?php else: ?>Not Active<?php endif; ?></td>
                        <td><?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['phase'] == '0'): ?>Vote<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['phase'] == '1'): ?>Trending<?php else: ?>Hot<?php endif; ?></td>
                        <td class="name">
							<ul class="button-list-1">
								<li><a class="button-a red" href="<?php echo $this->_tpl_vars['adminurl']; ?>
/posts_edit.php?PID=<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
"><span class="edits icon-white"></span></a></li>
								<li><a class="button-a red" href="<?php echo $this->_tpl_vars['adminurl']; ?>
/posts_all.php?delete=1&PID=<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
" target="_blank"><span class="del icon-white"></span></a></li>
						    </ul>
						</td>
						<td class="name">
							<ul class="button-list-1">
								<li><a class="button-a red" href="<?php echo $this->_tpl_vars['adminurl']; ?>
/posts_reports.php?delete=1&RID=<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['RID']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
"><span class="del icon-white"></span></a></li>
						    </ul>
						</td>
                    </tr>
				 <?php endfor; endif; ?>
				 <tr>
                    <td colspan="10">
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