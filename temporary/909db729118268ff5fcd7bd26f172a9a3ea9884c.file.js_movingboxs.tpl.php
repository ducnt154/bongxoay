<?php /* Smarty version Smarty-3.1.16, created on 2014-03-26 11:01:35
         compiled from "/var/www/html/bongxoay/themes/js_movingboxs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137719507853104430bb47a4-89096223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '909db729118268ff5fcd7bd26f172a9a3ea9884c' => 
    array (
      0 => '/var/www/html/bongxoay/themes/js_movingboxs.tpl',
      1 => 1395800256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137719507853104430bb47a4-89096223',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53104430bb6d35_26064929',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53104430bb6d35_26064929')) {function content_53104430bb6d35_26064929($_smarty_tpl) {?>
<script type="text/javascript">
var adloca=$('#moving-boxes').offset().top; 
 $(window).scroll(function () { 
    var curloca=$(window).scrollTop();
    if(curloca>adloca){
        $('#moving-boxes').css('position','fixed');
        $('#moving-boxes').css('top','55px');
        $('#moving-boxes').css('z-index','0');
    };
    if(curloca <= adloca){
        $('#moving-boxes').css('position','static');
        $('#moving-boxes').css('top','!important');
        $('#moving-boxes').css('z-index','!important');
    };
    });
</script> 
<?php }} ?>
