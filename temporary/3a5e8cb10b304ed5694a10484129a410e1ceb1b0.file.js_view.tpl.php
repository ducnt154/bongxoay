<?php /* Smarty version Smarty-3.1.16, created on 2014-03-26 11:01:53
         compiled from "/var/www/html/bongxoay/themes/js_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:732829752531044371eac24-54547887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a5e8cb10b304ed5694a10484129a410e1ceb1b0' => 
    array (
      0 => '/var/www/html/bongxoay/themes/js_view.tpl',
      1 => 1395800256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '732829752531044371eac24-54547887',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5310443721d986_08365288',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5310443721d986_08365288')) {function content_5310443721d986_08365288($_smarty_tpl) {?>
<script type="text/javascript">
function keyfind(e)
{
var code;
if (!e) var e = window.event;
if (e.keyCode) code = e.keyCode;
else if (e.which) code = e.which;
var character = String.fromCharCode(code);
var classes=$('.entry-item').length;
if($('#header_searchbar').css('display')!='none'){
character=0;}
if(character =='J' || character =='j' || character =='39'){
window.location.href=$('#next_post').attr('href');
}
if(character =='K' || character =='k' || character =='37'){
window.location.href=$('#prev_post').attr('href');
}
if(character=='L' || character=='l'){
$('#post_view_love').trigger('click');
}
}
</script>
<?php }} ?>
