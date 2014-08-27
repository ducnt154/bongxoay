<?php /* Smarty version 2.6.6, created on 2014-07-09 10:54:20
         compiled from vote.tpl */ ?>
        <ul id="target-list-container" class="big-list">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'posts_bit.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </ul>
       
		<div class="button-container border">
			<a id="target-list-more-load-button" class="button" href="<?php echo $this->_tpl_vars['mobileurl']; ?>
/vote?page=<?php echo $this->_tpl_vars['tnp']; ?>
" data-list="vote" data-entryId="<?php echo $this->_tpl_vars['tnp']; ?>
" data-group="vote">Xem Tiếp</a>
        </div>