<?php /* Smarty version Smarty-3.1.16, created on 2014-02-28 15:08:34
         compiled from "D:\Project\bongxoay\themes\js_vote.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13054531044025119a4-05862253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7f8eebc3ae816460184b434c339510d44dd5228' => 
    array (
      0 => 'D:\\Project\\bongxoay\\themes\\js_vote.tpl',
      1 => 1392631202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13054531044025119a4-05862253',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5310440252bda3_05470527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5310440252bda3_05470527')) {function content_5310440252bda3_05470527($_smarty_tpl) {?>	
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
