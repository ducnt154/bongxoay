<?php /* Smarty version 2.6.6, created on 2014-07-04 22:33:48
         compiled from administrator/posts_search.tpl */ ?>
 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/dashboard.php"><?php echo $this->_tpl_vars['site_name']; ?>
 Admin Panel</a> &rsaquo; Posts &rsaquo; All Posts</div> 
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
		
		
		<!--Form-->
        <div class="grid-1">
           <div class="title-grid">Search Posts</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="<?php echo $this->_tpl_vars['adminurl']; ?>
/posts_search.php">
                 <div class="elem">
                        <label>Start Post ID:</label>
                        <div class="indent">
                            <input type="text" id="startid" name="startid" value="<?php echo $this->_tpl_vars['startid']; ?>
" class="medium tip-right" title="Post Title"> 
                            <br><br>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>End Post ID:</label>
                        <div class="indent">
                            <input type="text" id="endid" name="endid" value="<?php echo $this->_tpl_vars['endid']; ?>
" class="medium tip-right" title="Post Title"> 
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Title:</label>
                        <div class="indent">
                            <input type="text" id="story" name="story" value="<?php echo $this->_tpl_vars['story']; ?>
" class="medium tip-right" title="Post Title"> 
                            <br><br>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>User Name:</label>
                        <div class="indent">
                             <input type="text" id="username" name="username" value="<?php echo $this->_tpl_vars['username']; ?>
" class="medium tip-right" title="Post Title"> 
                            <br><br> 
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Channel:</label>
                        <div class="indent">
                         <select id="CID" name="CID" class="chzn-select medium-select select" >
                            <option value="0" <?php if ($this->_tpl_vars['CID'] == ""): ?>selected<?php endif; ?>>Any</option>
						 <?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['channels']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>
                            <option value="<?php echo $this->_tpl_vars['channels'][$this->_sections['j']['index']]['CID']; ?>
" <?php if ($this->_tpl_vars['CID'] == $this->_tpl_vars['channels'][$this->_sections['j']['index']]['CID']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['channels'][$this->_sections['j']['index']]['cname']; ?>
</option>
							<?php endfor; endif; ?>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Active:</label>
                        <div class="indent">
                         <select id="active" name="active" class="chzn-select medium-select select" > 
                            <option value="2" <?php if ($this->_tpl_vars['active'] == '2'): ?>selected<?php endif; ?>>Any</option>
                            <option value="1" <?php if ($this->_tpl_vars['active'] == '1'): ?>selected<?php endif; ?>>Active</option>
                            <option value="0" <?php if ($this->_tpl_vars['active'] == '0'): ?>selected<?php endif; ?>>Not Active</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Phase:</label>
                        <div class="indent">
                         <select id="phase" name="phase" class="chzn-select medium-select select" > 
                            <option value="3" <?php if ($this->_tpl_vars['phase'] == '3'): ?>selected<?php endif; ?>>Any</option>
                            <option value="2" <?php if ($this->_tpl_vars['phase'] == '2'): ?>selected<?php endif; ?>>Hot</option>
                            <option value="1" <?php if ($this->_tpl_vars['phase'] == '1'): ?>selected<?php endif; ?>>Trending</option>
                            <option value="0" <?php if ($this->_tpl_vars['phase'] == '0'): ?>selected<?php endif; ?>>Vote</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>NSFW:</label>
                        <div class="indent">
                         <select id="nsfw" name="nsfw" class="chzn-select medium-select select" > 
                            <option value="2" <?php if ($this->_tpl_vars['post']['nsfw'] == '2'): ?>selected<?php endif; ?>>Any</option>
                            <option value="1" <?php if ($this->_tpl_vars['post']['nsfw'] == '1'): ?>selected<?php endif; ?>>Yes</option>
                            <option value="0" <?php if ($this->_tpl_vars['post']['nsfw'] == '0'): ?>selected<?php endif; ?>>No</option>
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
                        <td class="subject"><?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
</td>
                        <td class="subject"><a href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" target="_blank">Browse</a></td>
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
                        <td><span class="published"><?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['favclicks']; ?>
</span></td>
                        <td><span class="published"><?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['unfavclicks']; ?>
</span></td>
                        <td><?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['active'] == '1'): ?>Active<?php else: ?>Not Active<?php endif; ?></td>
                        <td><?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['phase'] == '0'): ?>Vote<?php elseif ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['phase'] == '1'): ?>Trending<?php else: ?>Hot<?php endif; ?></td>
                        <td class="name">
							<ul class="button-list-1">
								<li><a class="button-a red" href="<?php echo $this->_tpl_vars['adminurl']; ?>
/posts_edit.php?PID=<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" target="_blank"><span class="edits icon-white"></span></a></li>
								<li><a class="button-a red" href="<?php echo $this->_tpl_vars['adminurl']; ?>
/posts_all.php?delete=1&PID=<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
" target="_blank"><span class="del icon-white"></span></a></li>
						    </ul>
						</td>
                    </tr>
				 <?php endfor; endif; ?>
				 <tr>
                    <td colspan="11">
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