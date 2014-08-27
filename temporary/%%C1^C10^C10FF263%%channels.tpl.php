<?php /* Smarty version 2.6.6, created on 2014-07-09 11:03:29
         compiled from channels.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'makeseo', 'channels.tpl', 59, false),)), $this); ?>


<div id="main">
    <div id="content-holder">


        <div class="main-filter ">

            <div id="use-tips">
                <div id="view-info" class="list-tips">
                    <img style="height: 45px;float: left" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/emotion/nice.png">
                    <div style="font-size: 120%;line-height: 42px;padding-right: 10px"><b>Nếu bạn thấy hay thì ủng hộ Bóng Xoáy nhé!</b></div>
                    <div style="margin-top: -46px;margin-left: 338px;">
                        <div class="fb-like" data-href="https://www.facebook.com/bongxoay" data-width="500" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
                    </div>
                </div>
            </div>

			<?php if ($this->_tpl_vars['thumbs'] == '1'): ?>
			<a id="changeview" class="view_thumbs" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/vote?view=thumbs" title="Toggle Views"><?php echo $this->_tpl_vars['lang258']; ?>
</a>
			<?php endif; ?>
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
                    <?php  $cname2 = cleanit($_REQUEST['cname']);
                     ?>
                    <?php if ($this->_tpl_vars['cname2'] == "video-bong-da"): ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bongxoaytv.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php elseif ($this->_tpl_vars['cname2'] == "link-sopcast"): ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sopcast.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php elseif ($this->_tpl_vars['cname2'] == "my-nham"): ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "mynhan.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        <?php else: ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "posts_bit.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div id="lastPostsLoader"></div>
			<?php if ($this->_tpl_vars['AUTOSCROLL'] == '1'): ?>
			<div id="load_image" style="background:url(images/load.gif) center no-repeat; width:%100; height:50px;"> </div>
			<?php echo '
                <script type="text/javascript">
				var ajaxstart=1;
				$(document).ready(function(){
					var tpage = 2, cname = \'';  echo ((is_array($_tmp=$this->_tpl_vars['cname'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp));  echo '\' ;
					function lastAddedLiveFunc()
					{
						$(\'div#lastPostsLoader\').html(\'\');
						$.get(\'';  echo $this->_tpl_vars['baseurl'];  echo '/channelsjson.php?page=\' + tpage + "&cname=" + cname, function (data){
							if (data != "") {
								$(".col-1").append(data);
								$(\'#load_image\').css(\'display\',\'none\');
								ajaxstart=1;
							}else{
							ajaxstart=2;
							}
							$(\'div#lastPostsLoader\').empty();
						});
					};
					$(window).scroll(function(){
					if (document.documentElement.scrollTop)
					{ var  curloc = document.documentElement.scrollTop; }
					else
					{ var curloc=$(window).scrollTop(); }
					if  ((curloc+document.documentElement.clientHeight+1)>=($(document).height()) && ajaxstart==1 ) {
					 lastAddedLiveFunc();
					 $(\'#load_image\').css(\'display\',\'block\');
					 ajaxstart=0;
					 tpage = tpage+1;
					};
					if(curloc>$(window).height()){$(\'#backtotop\').slideDown();}else{$(\'#backtotop\').slideUp();};
					});
					});
				</script>
			'; ?>

			<?php else: ?>
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
/channels/<?php echo ((is_array($_tmp=$this->_tpl_vars['cname2'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
/?page=<?php echo $this->_tpl_vars['tpp']; ?>
" class="previous">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
                <?php else: ?>
                <a href="#" onclick="return false;" class="previous disabled">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['tnp'] != ""): ?>
                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/channels/<?php echo ((is_array($_tmp=$this->_tpl_vars['cname2'])) ? $this->_run_mod_handler('makeseo', true, $_tmp) : smarty_modifier_makeseo($_tmp)); ?>
/?page=<?php echo $this->_tpl_vars['tnp']; ?>
" class="older"><?php echo $this->_tpl_vars['lang167']; ?>
 &raquo;</a>
                <?php else: ?>
                <a href="#" onclick="return false;" class="older disabled"><?php echo $this->_tpl_vars['lang167']; ?>
 &raquo;</a>
                <?php endif; ?>
            </div>


			<?php endif; ?>
        </div>
    </div>
</div>
<?php if ($this->_tpl_vars['cname2'] != "video-bong-da"):  if ($this->_tpl_vars['cname2'] != "ngoi-sao"): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'right3.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif;  endif;  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js_vote.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js_movingboxs.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="footer" class="">