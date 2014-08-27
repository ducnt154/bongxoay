<?php /* Smarty version Smarty-3.1.16, created on 2014-02-28 15:25:03
         compiled from "/var/www/html/bongxoay/themes/js_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:514659375531047dfeff988-96130200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd086b19f60755b8c62331af15ea7cb9e92fc41e8' => 
    array (
      0 => '/var/www/html/bongxoay/themes/js_new.tpl',
      1 => 1392602078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '514659375531047dfeff988-96130200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang266' => 0,
    'lang267' => 0,
    'baseurl' => 0,
    'postfolder' => 0,
    'p' => 0,
    'lang268' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531047e0041908_48721410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531047e0041908_48721410')) {function content_531047e0041908_48721410($_smarty_tpl) {?>    <div id="b9gcs-soft-share" class="b9gcs-soft-box ">
        <div class="content">
            <a href="javascript:void(0);" class="close-btn"></a>
            <form id="form-b9gcs-soft-share" class="modal" action="">
                <h3><?php echo $_smarty_tpl->tpl_vars['lang266']->value;?>
<span id="post-share-dismiss-counter"></span></h3>
                <h4><?php echo $_smarty_tpl->tpl_vars['lang267']->value;?>
</h4>
                <div class="facebook-share">
                	<a href="javascript:myWindow('Facebook Share', 'http://www.facebook.com/sharer/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
/<?php echo makeseo($_smarty_tpl->tpl_vars['p']->value['story']);?>
.html', 'Facebook-Share-After-User-Post', 'Clicked');"></a>					
                </div>
                <div class="other-social">
                    
                    <div class="google-plus">
                    	<g:plusone size="medium" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
/<?php echo makeseo($_smarty_tpl->tpl_vars['p']->value['story']);?>
.html"></g:plusone>	
                    </div>                    
                    <div class="facebook-button">
                    	<fb:like href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
/<?php echo makeseo($_smarty_tpl->tpl_vars['p']->value['story']);?>
.html?ref=fb" send="false" layout="button_count" width="90" show_faces="false" font="" label="PostShare"></fb:like>
                    </div>
                                  
                </div>
                <div class="field">
                	<p><?php echo $_smarty_tpl->tpl_vars['lang268']->value;?>
:</p>
                	<input id="post-share-entry-url" type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['postfolder']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
/<?php echo makeseo($_smarty_tpl->tpl_vars['p']->value['story']);?>
.html" placeholder="/<?php echo makeseo($_smarty_tpl->tpl_vars['p']->value['story']);?>
.html" />
                </div>
            </form>
        </div>                
    </div>
</div>

<script type="text/javascript">
$('#overlay-shadow').removeClass('hide');
$('#overlay-container').removeClass('hide');  
$('.close-btn').click(function(){
$('#overlay-shadow').addClass('hide');
$('#overlay-container').addClass('hide');
});
var i=10;		
function delayedAlert()  
{  
timeoutID = window.setTimeout(decrease, 1000);  
}  
function decrease()  
{  
$('#post-share-dismiss-counter').html('('+i+')');
i--;
if(i==-1){
$('#overlay-shadow').addClass('hide');
$('#overlay-container').addClass('hide'); 
}else{
delayedAlert() ;	  
};
}  
delayedAlert(); 
function clearAlert()  
{  
window.clearTimeout(timeoutID);  
}
</script>
<?php }} ?>
