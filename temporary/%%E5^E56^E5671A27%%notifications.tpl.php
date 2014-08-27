<?php /* Smarty version 2.6.6, created on 2014-06-24 21:43:10
         compiled from notifications.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'notifications.tpl', 28, false),array('insert', 'get_time_to_days_ago', 'notifications.tpl', 29, false),)), $this); ?>
<div id="main">
    <div id="content-holder">        
        <div class="main-filter ">
            <div id="use-tips">
                <div id="view-info" class="list-tips">
                    <span style="font-size:13pt;font-family:tahoma;margin-top:10px;"><b>Notifications</b>:</span>
                </div>
            </div>
            <?php if ($this->_tpl_vars['safemode'] == '1'): ?>
			<?php if ($_SESSION['USERID'] != ""): ?>
                <?php if ($_SESSION['FILTER'] == '1'): ?>
                <a class="safe-mode-switcher on" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/safe?m=<?php echo $this->_tpl_vars['eurl']; ?>
">&nbsp;</a>
                <?php else: ?>
                <a class="safe-mode-switcher off" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/safe?m=<?php echo $this->_tpl_vars['eurl']; ?>
&o=1">&nbsp;</a>
                <?php endif; ?>
            <?php else: ?>
            	<a class="safe-mode-switcher on" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/login">&nbsp;</a>
            <?php endif; ?>
			<?php endif; ?>
        </div>
        <div id="content" listPage="hot">            
            <div id="entries-content" class="list" style="padding-top:0px;">
                <div style="margin:-15px 10px;font-size:13px;">
					<?php if ($this->_tpl_vars['notification_msg'] != ""): ?><div style="margin-top:15px;"><?php echo $this->_tpl_vars['notification_msg']; ?>
</div><?php endif; ?>
					<?php if (count($_from = (array)$this->_tpl_vars['notifications'])):
    foreach ($_from as $this->_tpl_vars['notification']):
?>
                    <h3 style="display:block;font-size:1.17em;font-weight:bold;margin-top:15px;"><?php echo $this->_tpl_vars['notification']['date']; ?>
</h3>
						<?php if (count($_from = (array)$this->_tpl_vars['notification']['replies'])):
    foreach ($_from as $this->_tpl_vars['reply']):
?>
							<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo $this->_tpl_vars['reply']['username']; ?>
" target="_blank"><?php echo $this->_tpl_vars['reply']['username']; ?>
</a><?php if ($this->_tpl_vars['reply']['type'] == '1'):  if ($this->_tpl_vars['reply']['favclicks'] > 2): ?> and <?php echo smarty_function_math(array('equation' => "x - 2",'x' => $this->_tpl_vars['reply']['favclicks']), $this);?>
 others<?php endif; ?> upvoted<?php else:  if ($this->_tpl_vars['reply']['unfavclicks'] > 1): ?> and <?php echo smarty_function_math(array('equation' => "x - 1",'x' => $this->_tpl_vars['reply']['unfavclicks']), $this);?>
 others<?php endif; ?> downvoted<?php endif; ?> <a href="<?php echo $this->_tpl_vars['baseurl'];  echo $this->_tpl_vars['postfolder'];  echo $this->_tpl_vars['reply']['PID']; ?>
" target="_blank"><?php echo $this->_tpl_vars['reply']['story']; ?>
</a>.
							<span style="color:#999;"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'time' => $this->_tpl_vars['reply']['time_added'])), $this); ?>
</span><br>
						<?php endforeach; unset($_from); endif; ?>
					<?php endforeach; unset($_from); endif; ?> 
					<hr>
                 </div>
            </div>	
            <div id="lastPostsLoader"></div>                
 			<?php echo '
                <script type="text/javascript">
				$(document).ready(function(){
					$(window).scroll(function(){
					if (document.documentElement.scrollTop)
					{ var  curloc = document.documentElement.scrollTop; }
					else
					{ var curloc=$(window).scrollTop(); }
					if(curloc>$(window).height()){$(\'#backtotop\').slideDown();}else{$(\'#backtotop\').slideUp();};
					});
					});
				</script>
			'; ?>

        </div>
    </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'right.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '
<script type="text/javascript">
var adloca=$(\'#moving-boxes\').offset().top; 
 $(window).scroll(function () { 
    var curloca=$(window).scrollTop();
    if(curloca>adloca){
        $(\'#moving-boxes\').css(\'position\',\'fixed\');
        $(\'#moving-boxes\').css(\'top\',\'55px\');
        $(\'#moving-boxes\').css(\'z-index\',\'0\');
    };
    if(curloca <= adloca){
        $(\'#moving-boxes\').css(\'position\',\'static\');
        $(\'#moving-boxes\').css(\'top\',\'!important\');
        $(\'#moving-boxes\').css(\'z-index\',\'!important\');
    };
    });
</script> 
'; ?>
   
<div id="footer" class="">