<?php /* Smarty version Smarty-3.1.16, created on 2014-02-28 15:08:34
         compiled from "D:\Project\bongxoay\themes\js_movingboxs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19039531044027712f8-90227559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '171eb542311c6abce3425c471e8d562f178d7c7b' => 
    array (
      0 => 'D:\\Project\\bongxoay\\themes\\js_movingboxs.tpl',
      1 => 1392952184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19039531044027712f8-90227559',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531044027768d9_63546606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531044027768d9_63546606')) {function content_531044027768d9_63546606($_smarty_tpl) {?>
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
