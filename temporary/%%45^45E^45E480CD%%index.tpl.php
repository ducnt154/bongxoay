<?php /* Smarty version 2.6.6, created on 2014-08-26 23:45:30
         compiled from index.tpl */ ?>
<div id="main">
    <div id="content-holder">
            <div class="main-filter ">
                <div id="use-tips">
                    <div id="" class="list-tips">
                        <img style="height: 33px;float: left;margin: 5px 0px 0px 5px" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/emotion/nice.png">
                        <div style="font-size: 120%;line-height: 42px;"><b>Nếu bạn thấy hay thì ủng hộ Bóng Xoáy nhé!</b></div>
                        <div style="margin-top: -30px;float: right;margin-right: -120px;margin-left: 400px\9;padding-right: 7px\9">
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
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "posts_bit_hot.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </ul>
            </div>
            <div id="lastPostsLoader"></div>
			<?php if ($this->_tpl_vars['AUTOSCROLL'] == '1'): ?>
			<div id="load_image" style="background:url(images/load.gif) center no-repeat; width:%100; height:50px;"> </div>
			<?php echo '
                <script type="text/javascript">
				var ajaxstart=1;
				$(document).ready(function(){
					var tpage = 2;
					function lastAddedLiveFunc()
					{
						$(\'div#lastPostsLoader\').html(\'\');
						$.get("';  echo $this->_tpl_vars['baseurl'];  echo '/hotjson.php?page="+tpage, function(data){
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
/hot?page=<?php echo $this->_tpl_vars['tpp']; ?>
" class="previous">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
                <?php else: ?>
                <a href="#" onclick="return false;" class="previous disabled">&laquo; <?php echo $this->_tpl_vars['lang166']; ?>
</a>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['tnp'] != ""): ?>
                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/hot?page=<?php echo $this->_tpl_vars['tnp']; ?>
" class="older"><?php echo $this->_tpl_vars['lang167']; ?>
 &raquo;</a>
                <?php else: ?>
                <a href="#" onclick="return false;" class="older disabled"><?php echo $this->_tpl_vars['lang167']; ?>
 &raquo;</a>
                <?php endif; ?>

            </div>
            <div class="sologen" style="color: #000000;text-align: center;padding: 20px;font-weight: bold">Hãy xem <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
">Bongxoay</a> mỗi ngày để cập nhật những tin tức mới nhất, hài hước nhất về bóng đá</div>
			<?php endif; ?>
        </div>
    </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'right2.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js_vote.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js_movingboxs.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="footer" class="">