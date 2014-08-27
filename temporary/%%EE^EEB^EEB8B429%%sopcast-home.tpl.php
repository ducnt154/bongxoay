<?php /* Smarty version 2.6.6, created on 2014-08-26 23:45:30
         compiled from sopcast-home.tpl */ ?>
<div class="link-sopcast" style="padding-top: 2px">
    <?php unset($this->_sections['f']);
$this->_sections['f']['name'] = 'f';
$this->_sections['f']['loop'] = is_array($_loop=$this->_tpl_vars['sopcast']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['f']['show'] = true;
$this->_sections['f']['max'] = $this->_sections['f']['loop'];
$this->_sections['f']['step'] = 1;
$this->_sections['f']['start'] = $this->_sections['f']['step'] > 0 ? 0 : $this->_sections['f']['loop']-1;
if ($this->_sections['f']['show']) {
    $this->_sections['f']['total'] = $this->_sections['f']['loop'];
    if ($this->_sections['f']['total'] == 0)
        $this->_sections['f']['show'] = false;
} else
    $this->_sections['f']['total'] = 0;
if ($this->_sections['f']['show']):

            for ($this->_sections['f']['index'] = $this->_sections['f']['start'], $this->_sections['f']['iteration'] = 1;
                 $this->_sections['f']['iteration'] <= $this->_sections['f']['total'];
                 $this->_sections['f']['index'] += $this->_sections['f']['step'], $this->_sections['f']['iteration']++):
$this->_sections['f']['rownum'] = $this->_sections['f']['iteration'];
$this->_sections['f']['index_prev'] = $this->_sections['f']['index'] - $this->_sections['f']['step'];
$this->_sections['f']['index_next'] = $this->_sections['f']['index'] + $this->_sections['f']['step'];
$this->_sections['f']['first']      = ($this->_sections['f']['iteration'] == 1);
$this->_sections['f']['last']       = ($this->_sections['f']['iteration'] == $this->_sections['f']['total']);
?>
    <?php if ($this->_tpl_vars['sopcast'][$this->_sections['f']['index']]['result'] == ''): ?>
    <div class="title_sop" style="padding: 0px">
        <h2 style="text-align: center;text-transform: uppercase;padding: 0px"><?php echo $this->_tpl_vars['sopcast'][$this->_sections['f']['index']]['title']; ?>
</h2>
    </div>
        <?php echo $this->_tpl_vars['sopcast'][$this->_sections['f']['index']]['introtext']; ?>

    <?php else: ?>
    <div class="title_sop" style="padding: 0px">
    <h2 style="text-align: center;color: #00a5f0">Kết quả <?php echo $this->_tpl_vars['sopcast'][$this->_sections['f']['index']]['title']; ?>
</h2>
    <?php echo $this->_tpl_vars['sopcast'][$this->_sections['f']['index']]['result']; ?>

    <?php endif; ?>
    <?php endfor; endif; ?>
</div>