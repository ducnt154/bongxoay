<?php /* Smarty version Smarty-3.1.16, created on 2014-02-28 15:23:41
         compiled from "/var/www/html/bongxoay/themes/submit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12582946255310478d17c754-00412481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea3059c99a4facfc1fc3bbb8e0c1e3dee42e3c35' => 
    array (
      0 => '/var/www/html/bongxoay/themes/submit.tpl',
      1 => 1392964627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12582946255310478d17c754-00412481',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'message' => 0,
    'baseurl' => 0,
    'lang100' => 0,
    'vupload' => 0,
    'lang101' => 0,
    'tupload' => 0,
    'lang102' => 0,
    'lang103' => 0,
    'lang106' => 0,
    'lang107' => 0,
    'lang104' => 0,
    'url' => 0,
    'lang105' => 0,
    'lang111' => 0,
    'lang112' => 0,
    'channels' => 0,
    'lang269' => 0,
    'c' => 0,
    'lang271' => 0,
    'lang113' => 0,
    'lang114' => 0,
    'lang118' => 0,
    'lang115' => 0,
    'lang116' => 0,
    'lwm' => 0,
    'safemode' => 0,
    'lang117' => 0,
    'lang119' => 0,
    'lang120' => 0,
    'lang121' => 0,
    'quota' => 0,
    'lang122' => 0,
    'lang123' => 0,
    'lang124' => 0,
    'lang125' => 0,
    'lang126' => 0,
    'lang127' => 0,
    'lang128' => 0,
    'lang129' => 0,
    'lang130' => 0,
    'lang131' => 0,
    'lang132' => 0,
    'lang133' => 0,
    'lang134' => 0,
    'lang135' => 0,
    'lang136' => 0,
    'lang137' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5310478d2cdfc2_37055076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5310478d2cdfc2_37055076')) {function content_5310478d2cdfc2_37055076($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['error']->value!='') {?>
<p class="form-message error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['message']->value!='') {?>
<p class="form-message success"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
<?php }?>
<div id="main">
    <div id="content-holder">
        <div id="b9gcs-soft-post" class="b9gcs-soft-box static">

            <div class="head">
                <ul class="switch">
                	<li class="tab_photo current"><a class="photo" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/submit"><?php echo $_smarty_tpl->tpl_vars['lang100']->value;?>
</a></li>
					<?php if ($_smarty_tpl->tpl_vars['vupload']->value=="1") {?>
                	<li class="tab_video "><a class="video" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/submit?t=v"><?php echo $_smarty_tpl->tpl_vars['lang101']->value;?>
</a></li>
					<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['tupload']->value=="1") {?>
                    <li class="tab_text "><a class="text" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/submit?t=t">Text</a></li>
                    <?php }?>
                </ul>
            </div>

            <div class="content form_photo">
                <form id="form-b9gcs-soft-post-image" class="modal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/submit<?php if ($_REQUEST['file']=="1") {?>?file=1<?php }?>" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="type" value="Photo"/>
                    <input id="post_type" type="hidden" name="post_type" value="Photo"/>
                    <h3><?php echo $_smarty_tpl->tpl_vars['lang102']->value;?>
</h3>
                    <?php if ($_REQUEST['file']=="1") {?>
                    <div class="field">
                        <label>
                            <h4><?php echo $_smarty_tpl->tpl_vars['lang103']->value;?>
(<span style="color: #ff0000">*</span>):</h4>
                            <input id="photo_file_upload" class="file text " type="file" name="image" style="display:block;"></input>
                        </label>
                    	<p class="info"><a class="upload_photo" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/submit"><strong><?php echo $_smarty_tpl->tpl_vars['lang106']->value;?>
</strong></a> <?php echo $_smarty_tpl->tpl_vars['lang107']->value;?>
</p>
                    </div>
                    <?php } else { ?>
                    <div class="field">
                        <label>
                            <h4><?php echo $_smarty_tpl->tpl_vars['lang104']->value;?>
(<span style="color: #ff0000">*</span>):</h4>
                            <input id="photo_post_url" type="text" class="text" name="url" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['url']->value);?>
" style="display:block;"></input>
                        </label>
                        <p class="info"><a class="upload_photo" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/submit?file=1"><strong><?php echo $_smarty_tpl->tpl_vars['lang105']->value;?>
</strong></a> <?php echo $_smarty_tpl->tpl_vars['lang107']->value;?>
</p>
                    </div>
                    <?php }?>
                    <div class="field">
                        <label>
                            <h4><?php echo $_smarty_tpl->tpl_vars['lang111']->value;?>
(<span style="color: #ff0000">*</span>):</h4>
                            <input id="post_title" type="text" class="text tipped" name="title" maxlength="200" value=""/>
                            <p class="info" style="visibility:hidden"><?php echo $_smarty_tpl->tpl_vars['lang112']->value;?>
</p>
                        </label>
                    </div>
					<?php if ($_smarty_tpl->tpl_vars['channels']->value=="1") {?>
					<div class="field">
                        <label>
                            <h4><?php echo $_smarty_tpl->tpl_vars['lang269']->value;?>
</h4>
							<select name="CID" id="CID">

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['c']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CID'];?>
" <?php if ($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CID']==13) {?>selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cname'];?>
</option>
							<?php endfor; endif; ?>
                            </select>
							<p class="info" style="visibility:hidden"><?php echo $_smarty_tpl->tpl_vars['lang271']->value;?>
</p>
                        </label>
                    </div>
					<?php }?>
                    <!-- tags-->
                    <div class="field">
                        <label>
                            <h4><?php echo $_smarty_tpl->tpl_vars['lang113']->value;?>
<span>(<?php echo $_smarty_tpl->tpl_vars['lang114']->value;?>
)</span></h4>
                            <input id="photo_tag_input" type="text" class="text tag_input tipped" name="tags" value="" placeholder="tag 1, tag 2, tag 3, tag 4, tag 5"/>
                            <p class="info" style="visibility:hidden"><?php echo $_smarty_tpl->tpl_vars['lang118']->value;?>
</p>
                        </label>
                    </div>

                    <div class="field">
                        <label>
                            <h4><?php echo $_smarty_tpl->tpl_vars['lang115']->value;?>
 <span>(<?php echo $_smarty_tpl->tpl_vars['lang114']->value;?>
)</span></h4>
                            <input type="text" class="text tipped" name="source" value="" maxlength="300"/>
                            <p class="info" style="visibility:hidden"><?php echo $_smarty_tpl->tpl_vars['lang116']->value;?>
</p>
                        </label>
                    </div>

                     <?php if ($_smarty_tpl->tpl_vars['lwm']->value=="1") {?>
                     <div class="field">

                    <h4>Vị trí logo</h4>
                           <input id="traitren" type="radio" name="watermark" value="1"><label style="display:inline;" for="traitren"> Trái Trên</label>
						   <input id="phaitren" type="radio" name="watermark" value="2" style="margin-left:15px;"><label style="display:inline;" for="phaitren"> Phải Trên</label>
						   <input id="giua" type="radio" name="watermark" value="3" style="margin-left:15px;"><label style="display:inline;" for="giua">Giữa</label>
						   <input id="traiduoi" type="radio" name="watermark" value="4" style="margin-left:15px;"><label style="display:inline;" for="traiduoi"> Trái Dưới</label>
						   <input id="phaiduoi" type="radio" name="watermark" value="5" style="margin-left:15px;" checked=""><label style="display:inline;" for="phaiduoi"> Phải Dưới</label>

                    </div>

					<?php }?>
                    <hr />
					<?php if ($_smarty_tpl->tpl_vars['safemode']->value=="1") {?>
                    <div class="field checkbox">
                    	<label for="submit-nsfw">
                    	<input id="submit-nsfw" type="checkbox" class="checkbox" name="nsfw" value="1" /><?php echo $_smarty_tpl->tpl_vars['lang117']->value;?>
</label>
                    </div>
					<?php }?>


                </form>
            </div>


            <div class="actions">
                <ul class="buttons">
                    <li class="loading-btn" style="visibility:hidden"><a class="button loading"></a></li>
                    <li class="form-btn"><a class="cancel" href="/"><?php echo $_smarty_tpl->tpl_vars['lang119']->value;?>
</a></li>
                    <li class="form-btn"><a class="button send" id="ekle" ><?php echo $_smarty_tpl->tpl_vars['lang120']->value;?>
</a></li>
                </ul>
            </div>
        	
			<script type="text/javascript">
            $('input').each(function()
			{
            	$(this).focus(function()
				{
            		$(this ).next('.info').css('visibility','visible');
            	})
            	$(this).blur(function()
				{
            		$(this).next('.info').css('visibility','hidden');
            	})
            });
            $('#ekle').click(function(){
            	$('#form-b9gcs-soft-post-image').submit();
            });
            </script>
            
        </div>
    </div>
</div>

<div class="side-bar">
    <div class="msg-box notice">
    	<h3><?php echo $_smarty_tpl->tpl_vars['lang121']->value;?>
</h3>
    	<p><?php echo $_smarty_tpl->tpl_vars['quota']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang122']->value;?>
</p>
    </div>

    <div class="msg-box">
        <h3><?php echo $_smarty_tpl->tpl_vars['lang123']->value;?>
</h3>
        <ul class="submit-info">
            <li><b><?php echo $_smarty_tpl->tpl_vars['lang124']->value;?>
</b></li>
            <li><b><?php echo $_smarty_tpl->tpl_vars['lang125']->value;?>
 </b><a href="http://www.google.com/imghp" target="_blank"><?php echo $_smarty_tpl->tpl_vars['lang126']->value;?>
</a><b></b></li>
            <li><b><?php echo $_smarty_tpl->tpl_vars['lang127']->value;?>
</b></li>
            <li><b><?php echo $_smarty_tpl->tpl_vars['lang128']->value;?>
</b></li>
            <li><b><?php echo $_smarty_tpl->tpl_vars['lang129']->value;?>
</b></li>
            <li><?php echo $_smarty_tpl->tpl_vars['lang130']->value;?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['lang131']->value;?>
</li>
            <li><b><?php echo $_smarty_tpl->tpl_vars['lang132']->value;?>
</b></li>
            <li><b><?php echo $_smarty_tpl->tpl_vars['lang133']->value;?>
</b></li>
            <li><?php echo $_smarty_tpl->tpl_vars['lang134']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/rules" target="blank"><?php echo $_smarty_tpl->tpl_vars['lang135']->value;?>
</a>.</li>
        </ul>
        <p class="memo"><b><?php echo $_smarty_tpl->tpl_vars['lang136']->value;?>
:</b> <?php echo $_smarty_tpl->tpl_vars['lang137']->value;?>
<span class="badge-js" key="!"></span></p>
    </div>
</div>
<div id="footer" class=""><?php }} ?>
