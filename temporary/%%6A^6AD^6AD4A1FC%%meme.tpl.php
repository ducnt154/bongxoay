<?php /* Smarty version 2.6.6, created on 2014-07-02 14:55:48
         compiled from meme.tpl */ ?>
<!-- Le styles -->
<link href="css/bootstrap.css" rel="stylesheet">
<link rel='stylesheet' href="css/spectrum.css" />
<link rel='stylesheet' href="css/ajaxupload.css" />
<?php echo '
<script src="js/jquery.js"></script>
<script src="js/kinetic-v4.0.5.min.js"></script>
<script src="js/meme.min.js"></script>
<script src="js/spectrum.js"></script>
<script src="js/bootstrap-transition.js"></script>
<script src="js/bootstrap-alert.js"></script>
<script src="js/bootstrap-modal.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/bootstrap-scrollspy.js"></script>
<script src="js/bootstrap-tab.js"></script>
<script src="js/bootstrap-tooltip.js"></script>
<script src="js/bootstrap-popover.js"></script>
<script src="js/bootstrap-button.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/bootstrap-carousel.js"></script>
<script src="js/bootstrap-typeahead.js"></script>
'; ?>

        <?php 
$SID = $_SESSION['USERID'];

 ?>
<div class="row-cread">
    <!-- Span 4 start -->
    <div class="span4">
        <h4>Thông số</h4>
        <?php echo '
        <script>
            function validateForm()
            {

                var x=document.forms["myForm"]["title"].value;
                if (x==null || x=="")
                {
                    alert("Bạn phải nhập tiêu đề cho ảnh");
                    return false;
                }
            }
        </script>
        '; ?>


        <form name="myForm" id="createimg" action="view.php" method="post" onsubmit="return validateForm();">
            <br>Font Size <select id="fontsizesel">
            <option value="24">24pt</option>
            <option value="32" selected>32pt</option>
            <option value="48">48pt</option>
            <option value="72">72pt</option>
            <option value="144">144pt</option>
        </select> <br> <br> Font Color <input type='text' id="custom"value="#ffffff" /><br><br>
            Outline Color <input type='text' id="strokesel" value="#000000" /><br>
            <hr>
            Caption 1
            <textarea id="tc1" style="margin: 0px 0px 10px; width: 301px; height: 71px;"></textarea>
            <br>
            <button type="button" class="btn btn-success" id="cap1">Update</button>
            <button type="button" class="btn btn-danger" id="rcap1">Remove</button>
            <br> <br>Caption 2
            <textarea id="tc2" style="margin: 0px 0px 10px; width: 301px; height: 71px;"></textarea>
            <br>
            <button type="button" class="btn btn-success" id="cap2">Update</button>
            <button type="button" class="btn btn-danger" id="rcap2">Remove</button>
            <hr>

            <label>Tiêu đề:</label>
            <div class="">
            <input class="form-control" type="text" name="title"></div>
            <?php if ($this->_tpl_vars['channels'] == '1'): ?>
            <div class="field">
                <label>
                    <?php echo $this->_tpl_vars['lang269']; ?>
:
                    <select name="CID" id="CID">
                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['c']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                        <option value="<?php echo $this->_tpl_vars['c'][$this->_sections['i']['index']]['CID']; ?>
" <?php if ($this->_tpl_vars['c'][$this->_sections['i']['index']]['CID'] == 13): ?>selected="selected"<?php endif; ?> ><?php echo $this->_tpl_vars['c'][$this->_sections['i']['index']]['cname']; ?>
</option>
                        <?php endfor; endif; ?>
                    </select>
                    <p class="info" style="visibility:hidden"><?php echo $this->_tpl_vars['lang271']; ?>
</p>
                </label>
            </div>
            <?php endif; ?>
            <p>
                <button id="cands" class="btn btn-large btn-primary" type="button">Submit</button>
                <input type="hidden" id="imgdata" name="imgdata">
            </p>
        </form>
    </div>
    <!-- Span 4 start -->
    <div class="span8">
        <div id="memestage"></div>
    </div>
</div>
</div>
<!-- /container -->
<div id="heightStage" style="display: none;"></div>
<!-- Le javascript