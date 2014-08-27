<?php /* Smarty version 2.6.6, created on 2014-07-09 09:51:44
         compiled from top.tpl */ ?>
<div id="main">
    <div id="content-holder">        
        <div class="main-filter ">
            <ul class="content-type">
                <li> <a <?php if ($this->_tpl_vars['period'] == 'day'): ?>class="current"<?php else: ?>class=""<?php endif; ?> href="<?php echo $this->_tpl_vars['baseurl']; ?>
/top/day"><strong><?php echo $this->_tpl_vars['lang279']; ?>
</strong></a></li>
                <li> <a <?php if ($this->_tpl_vars['period'] == 'week'): ?>class="current"<?php else: ?>class=""<?php endif; ?> href="<?php echo $this->_tpl_vars['baseurl']; ?>
/top/week"><strong><?php echo $this->_tpl_vars['lang280']; ?>
</strong></a></li>
                <li> <a <?php if ($this->_tpl_vars['period'] == 'month'): ?>class="current"<?php else: ?>class=""<?php endif; ?> href="<?php echo $this->_tpl_vars['baseurl']; ?>
/top/month"><strong><?php echo $this->_tpl_vars['lang281']; ?>
</strong></a></li>                
                <li> <a <?php if ($this->_tpl_vars['period'] == 'all'): ?>class="current"<?php else: ?>class=""<?php endif; ?> href="<?php echo $this->_tpl_vars['baseurl']; ?>
/top/all"><strong><?php echo $this->_tpl_vars['lang282']; ?>
</strong></a></li>                
            </ul>
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
            <div id="entries-content" class="list">
                <ul id="entries-content-ul" class="col-1">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "posts_bit.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </ul>
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

            <div id="paging-buttons" class="paging-buttons">
            	<?php if ($this->_tpl_vars['tpp'] != ""): ?>
                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/top/<?php if ($this->_tpl_vars['period'] == 'all'): ?>all<?php elseif ($this->_tpl_vars['period'] == 'month'): ?>month<?php elseif ($this->_tpl_vars['period'] == 'week'): ?>week<?php else: ?>day<?php endif; ?>?page=<?php echo $this->_tpl_vars['tpp']; ?>
" class="previous">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
                <?php else: ?>
                <a href="#" onclick="return false;" class="previous disabled">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['tnp'] != ""): ?>
                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/top/<?php if ($this->_tpl_vars['period'] == 'all'): ?>all<?php elseif ($this->_tpl_vars['period'] == 'month'): ?>month<?php elseif ($this->_tpl_vars['period'] == 'week'): ?>week<?php else: ?>day<?php endif; ?>?page=<?php echo $this->_tpl_vars['tnp']; ?>
" class="older"><?php echo $this->_tpl_vars['lang167']; ?>
 &raquo;</a>
                <?php else: ?>
                <a href="#" onclick="return false;" class="older disabled"><?php echo $this->_tpl_vars['lang167']; ?>
 &raquo;</a>
                <?php endif; ?>
            </div>		
        </div>
    </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js_vote.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
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