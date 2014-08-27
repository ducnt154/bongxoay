<?php /* Smarty version 2.6.6, created on 2014-04-21 00:00:55
         compiled from administrator/ads_search.tpl */ ?>
 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/dashboard.php"><?php echo $this->_tpl_vars['site_name']; ?>
 Admin Panel</a> &rsaquo; Advertising &rsaquo; All Ads</div> 
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
           <div class="title-grid">General Settings</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="<?php echo $this->_tpl_vars['adminurl']; ?>
/ads_search.php">
                 
				 <div class="elem">
                        <label>Start Ad ID:</label>
                        <div class="indent">
                            <input type="text" id="startid" name="startid" value="<?php echo $this->_tpl_vars['startid']; ?>
" class="medium tip-right" title="Start Ad slot ID"> 
                        </div>
                 </div>

				 <div class="elem">
                        <label>End Ad ID:</label>
                        <div class="indent">
                            <input type="text" id="endid" name="endid" value="<?php echo $this->_tpl_vars['endid']; ?>
" class="medium tip-right" title="End Ad slot ID"> 
                        </div>
                 </div>

				 
				 <div class="elem">
                        <label>Description:</label>
                        <div class="indent">
                            <input type="text" id="description" name="description" value="<?php echo $this->_tpl_vars['description']; ?>
" class="medium tip-right" title="Ad space description"> 
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
				 
				 <input type="hidden" id="submitform" name="submitform" value="1" >
				 <div style="width:330px;margin:20px;">
				<input type="submit" class="button-a red right" value="Search Ads">
				</div>
                 </form>
    		 <div class="clear"> </div>
             </div>
           </div>
        </div>  
		<!--Form end-->
		
		<!--Table Styling-->
      <div class="grid-1">
           <div class="title-grid">Advertising</div>
           <div class="content-gird">
            	<table class="display">
                <thead>
                    <tr>
                        <th class="th_title">ID</th>
                        <th class="th_status">Description</th>


                        <th class="th_date">Code</th>
                        <th class="th_date">Preview</th>
                        <th class="th_date">Status</th>
                        <th class="th_author">Delete</th>
                    </tr>
                </thead>
                <tbody>
				
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['ads']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <td class="subject"><?php echo $this->_tpl_vars['ads'][$this->_sections['i']['index']]['AID']; ?>
</td>
                        <td><span class="published"><?php echo $this->_tpl_vars['ads'][$this->_sections['i']['index']]['description']; ?>
</span></td>
                        <td style="width:250px;">
							<?php echo '
							{insert name=get_advertisement AID=';  echo $this->_tpl_vars['ads'][$this->_sections['i']['index']]['AID'];  echo '}
							'; ?>

						</td>
                        <td><a href="javascript:NewWindow('<?php echo $this->_tpl_vars['adminurl']; ?>
/ads_preview.php?AID=<?php echo $this->_tpl_vars['ads'][$this->_sections['i']['index']]['AID']; ?>
','name','800','600','yes')">Perview</a></td>
                        <td><?php if ($this->_tpl_vars['ads'][$this->_sections['i']['index']]['active'] == '1'): ?>Active<?php else: ?>Not Active<?php endif; ?></td>
                        <td class="name">
							<ul class="button-list-1">
								<li><a class="button-a red" href="<?php echo $this->_tpl_vars['adminurl']; ?>
/ads_edit.php?AID=<?php echo $this->_tpl_vars['ads'][$this->_sections['i']['index']]['AID']; ?>
"><span class="edits icon-white"></span></a></li>
								<li><a class="button-a red" href="<?php echo $this->_tpl_vars['adminurl']; ?>
/ads_all.php?delete=1&AID=<?php echo $this->_tpl_vars['ads'][$this->_sections['i']['index']]['AID']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
"><span class="del icon-white"></span></a></li>
						    </ul>
						</td>
                    </tr>
				 <?php endfor; endif; ?>
				 <tr>
                    <td colspan="6">
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