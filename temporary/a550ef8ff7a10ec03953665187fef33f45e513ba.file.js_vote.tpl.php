<?php /* Smarty version Smarty-3.1.16, created on 2014-03-26 11:01:35
         compiled from "/var/www/html/bongxoay/themes/js_vote.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91388881753104430b9fad3-59029783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a550ef8ff7a10ec03953665187fef33f45e513ba' => 
    array (
      0 => '/var/www/html/bongxoay/themes/js_vote.tpl',
      1 => 1395800256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91388881753104430b9fad3-59029783',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53104430bb1c91_44565405',
  'variables' => 
  array (
    'page' => 0,
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53104430bb1c91_44565405')) {function content_53104430bb1c91_44565405($_smarty_tpl) {?>	
	<script type="text/javascript">
		$('.votedown_<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
').click(function(){
        var id=$(this).attr('entryId');
        if( $(this).hasClass('unloved')){
        $(this).removeClass('unloved');
        likedeg($(this).attr('entryId'),0,-1);
        }else{
        $(this).addClass('unloved');
        if($('#post_love_'+id).hasClass('loved')){
        $('#post_love_'+id).removeClass('loved');
        }
        likedeg($(this).attr('entryId'),0,1);	
        }
        });
        $('.voteup_<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
').click(function(){
        var id=$(this).attr('rel');
        if( $(this).hasClass('loved')){
        $(this).removeClass('loved');
        likedeg($(this).attr('rel'),-1,0);
        }else{
        $(this).addClass('loved');
        if($('#vote-down-btn-'+id).hasClass('unloved')){
        $('#vote-down-btn-'+id).removeClass('unloved');
        }
        likedeg($(this).attr('rel'),1,0);
        }
        });
    function likedeg(p,l,u){
        jQuery.ajax({
            type:'POST',
            url:'<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
'+ '/votegag.php',
			data:'l='+l+'&pid=' + p +'&u='+u,
            success:function(e){
                $('#love_count_'+p).html(e);
                }
            });
        }
    </script>
	<?php }} ?>
