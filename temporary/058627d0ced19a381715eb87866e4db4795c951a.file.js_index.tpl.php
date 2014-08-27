<?php /* Smarty version Smarty-3.1.16, created on 2014-03-26 11:01:35
         compiled from "/var/www/html/bongxoay/themes/js_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85808387353104430062475-60442501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '058627d0ced19a381715eb87866e4db4795c951a' => 
    array (
      0 => '/var/www/html/bongxoay/themes/js_index.tpl',
      1 => 1395800256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85808387353104430062475-60442501',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53104430066499_91122625',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53104430066499_91122625')) {function content_53104430066499_91122625($_smarty_tpl) {?>
<script type="text/javascript">	
function keyfind(e)
{
var code;
if (!e) var e = window.event;
if (e.keyCode) code = e.keyCode;
else if (e.which) code = e.which;
var character = String.fromCharCode(code);
if($('#header_searchbar').css('display')!='none'){
character=0;}
if(character =='J' || character =='j'){

     var a=new Array();
     var b=new Array();
     var c=new Array();
     var i=0;
     $('.gag-link').each(function(){
        a[i]=$(this).attr('id');
        b[i]=$(this).offset().top; 
        c[i]=$(this).height();
        
        i++;
         });
         var curloc=$(window).scrollTop();
         var j=0;
         var k=0;
         
    for(;j<a.length;){

    if(b[j]+c[j]-39>curloc && curloc >= b[j]-39){
    var k=j;
    break;
    }
    j++;
    }
    if(k == a.length-1){ $('#go-next').click();  }
    $.scrollTo(b[k+1]-38);

}
if(character =='K' || character =='k'){
     var a=new Array();
     var b=new Array();
     var c=new Array();
     var i=0;
     $('.gag-link').each(function(){
        a[i]=$(this).attr('id');
        b[i]=$(this).offset().top; 
        c[i]=$(this).height();
        i++;
         });
         var curloc=$(window).scrollTop();
         var j=0;
         var k=0;
    for(;j<a.length;){
    if(b[j]+c[j]-39>curloc && curloc >= b[j]-39){
    var k=j;
    break;
    }
    j++;
    }
    $.scrollTo(b[k-1]-38);
}
if(character=='L' || character=='l'){
 var a=new Array();
      var b=new Array();
     var i=0;
     $('.gag-link').each(function(){
        a[i]=$(this).attr('gagId');
        b[i]=$(this).offset().top; 
        i++;
         });
          var curloc=$(window).scrollTop();
         var j=0;
    for(;j<a.length;){
    if(b[j]>curloc){
    break;
    }
    j++;
    }
        $.scrollTo('.gag-link:eq('+(j)+')');
        $('#post_love_'+a[j]).trigger('click');
}
if(character=='H' || character=='h'){
 var a=new Array();
      var b=new Array();
     var i=0;
     $('.gag-link').each(function(){
        a[i]=$(this).attr('gagId');
        b[i]=$(this).offset().top; 
        i++;
         });
          var curloc=$(window).scrollTop();
         var j=0;
    for(;j<a.length;){
    if(b[j]>curloc){
    break;
    }
    j++;
    }
        $.scrollTo('.gag-link:eq('+(j)+')');
        $('#vote-down-btn-'+a[j]).trigger('click');
}
}
 $(window).scroll(function () {
    
     var a=new Array();
     var b=new Array();
     var c=new Array();
     var i=0;
     $('.gag-link').each(function(){
        a[i]=$(this).attr('gagId');
        b[i]=$(this).offset().top; 
        c[i]=$(this).height();
        i++;
         });
         var curloc=$(window).scrollTop();
         var j=0;
         var k=0;
         
    for(;j<a.length;){

    if(b[j]+c[j]>curloc && curloc > b[j]){
    var k=j;
    break;
    }
    j++;
    }            
        var winh = $(window).height();
        var ach  = $('#action-'+a[0]).height()+30;
        
        if((curloc > (b[k]+c[k] - ach)) || curloc < b[0]){
        
        $('.b9gcs-stop').css('position','static');
        $('.b9gcs-stop').css('top','!important');
        
        
            }else{
        if((k==0 && curloc >= b[k]) || k>=1){
        $('#action-'+a[k]).css('position','fixed');
        $('#action-'+a[k]).css('top','55px');
        }
            }                
    });
</script>
<?php }} ?>
