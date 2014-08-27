<?php /* Smarty version Smarty-3.1.16, created on 2014-02-28 15:08:32
         compiled from "D:\Project\bongxoay\themes\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21437531044008faee8-28601631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8ed75531d1afb8ca8f6ba8b3dae5e280bba841f' => 
    array (
      0 => 'D:\\Project\\bongxoay\\themes\\index.tpl',
      1 => 1392776227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21437531044008faee8-28601631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'thumbs' => 0,
    'lang258' => 0,
    'safemode' => 0,
    'eurl' => 0,
    'AUTOSCROLL' => 0,
    'tpp' => 0,
    'lang166' => 0,
    'tnp' => 0,
    'lang167' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53104400a97ea5_56460767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53104400a97ea5_56460767')) {function content_53104400a97ea5_56460767($_smarty_tpl) {?><div>
<div id="main">
    <div id="content-holder">
            <div class="main-filter ">
                <div id="use-tips">
                    <div id="" class="list-tips">
                        <img style="height: 45px;float: left" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/emotion/nice.png">
                        <div style="font-size: 120%;line-height: 42px;"><b>Nếu bạn thấy hay thì ủng hộ Bóng Xoáy nhé!</b></div>
                        <div style="margin-top: -30px;float: right;margin-right: -155px;margin-left: 400px\9;padding-right: 7px\9">
                            <div class="fb-like" data-href="https://www.facebook.com/bongxoay" data-width="500" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
                        </div>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['thumbs']->value=="1") {?>
                <a id="changeview" class="view_thumbs" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/vote?view=thumbs" title="Toggle Views"><?php echo $_smarty_tpl->tpl_vars['lang258']->value;?>
</a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['safemode']->value=="1") {?>
                    <?php if ($_SESSION['USERID']!='') {?>
                        <?php if ($_SESSION['FILTER']=="1") {?>
                        <a class="safe-mode-switcher on" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/safe?m=<?php echo $_smarty_tpl->tpl_vars['eurl']->value;?>
">&nbsp;</a>
                        <?php } else { ?>
                        <a class="safe-mode-switcher off" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/safe?m=<?php echo $_smarty_tpl->tpl_vars['eurl']->value;?>
&o=1">&nbsp;</a>
                        <?php }?>
                    <?php } else { ?>
                        <a class="safe-mode-switcher on" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/login">&nbsp;</a>
                    <?php }?>
                <?php }?>
            </div>
        <div id="content" listPage="hot">
            <div id="entries-content" class="list">
                <ul id="entries-content-ul" class="col-1">
                    <?php echo $_smarty_tpl->getSubTemplate ("posts_bit_hot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </ul>
            </div>
            <div id="lastPostsLoader"></div>
			<?php if ($_smarty_tpl->tpl_vars['AUTOSCROLL']->value=="1") {?>
			<div id="load_image" style="background:url(images/load.gif) center no-repeat; width:%100; height:50px;"> </div>
			
                <script type="text/javascript">
				var ajaxstart=1;
				$(document).ready(function(){
					var tpage = 2;
					function lastAddedLiveFunc()
					{
						$('div#lastPostsLoader').html('');
						$.get("<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/hotjson.php?page="+tpage, function(data){
							if (data != "") {
								$(".col-1").append(data);
								$('#load_image').css('display','none');
								ajaxstart=1;
							}else{
							ajaxstart=2;
							}
							$('div#lastPostsLoader').empty();
						});
					};
					$(window).scroll(function(){
					if (document.documentElement.scrollTop)
					{ var  curloc = document.documentElement.scrollTop; }
					else
					{ var curloc=$(window).scrollTop(); }
					if  ((curloc+document.documentElement.clientHeight+1)>=($(document).height()) && ajaxstart==1 ) {
					 lastAddedLiveFunc();
					 $('#load_image').css('display','block');
					 ajaxstart=0;
					 tpage = tpage+1;
					};
					if(curloc>$(window).height()){$('#backtotop').slideDown();}else{$('#backtotop').slideUp();};
					});
					});
				</script>
			
			<?php } else { ?>
 			
                <script type="text/javascript">
				$(document).ready(function(){
					$(window).scroll(function(){
					if (document.documentElement.scrollTop)
					{ var  curloc = document.documentElement.scrollTop; }
					else
					{ var curloc=$(window).scrollTop(); }
					if(curloc>$(window).height()){$('#backtotop').slideDown();}else{$('#backtotop').slideUp();};
					});
					});
				</script>
			
            <div id="paging-buttons" class="paging-buttons">
            	<?php if ($_smarty_tpl->tpl_vars['tpp']->value!='') {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/hot?page=<?php echo $_smarty_tpl->tpl_vars['tpp']->value;?>
" class="previous">&laquo; <?php echo $_smarty_tpl->tpl_vars['lang166']->value;?>
</a>
                <?php } else { ?>
                <a href="#" onclick="return false;" class="previous disabled">&laquo; <?php echo $_smarty_tpl->tpl_vars['lang166']->value;?>
</a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['tnp']->value!='') {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/hot?page=<?php echo $_smarty_tpl->tpl_vars['tnp']->value;?>
" class="older"><?php echo $_smarty_tpl->tpl_vars['lang167']->value;?>
 &raquo;</a>
                <?php } else { ?>
                <a href="#" onclick="return false;" class="older disabled"><?php echo $_smarty_tpl->tpl_vars['lang167']->value;?>
 &raquo;</a>
                <?php }?>

            </div>
            <div class="sologen" style="color: #000000;text-align: center;padding: 20px;font-weight: bold">Hãy xem <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
">Bongxoay</a> mỗi ngày để cập nhật những tin tức mới nhất, hài hước nhất về bóng đá</div>
			<?php }?>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('right2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('js_vote.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('js_movingboxs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="footer" class=""><?php }} ?>
