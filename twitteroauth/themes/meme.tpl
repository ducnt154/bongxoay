<!-- Le styles -->
<link href="css/bootstrap.css" rel="stylesheet">
<link rel='stylesheet' href="css/spectrum.css" />
<link rel='stylesheet' href="css/ajaxupload.css" />
{literal}
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
{/literal}
        {php}
$SID = $_SESSION['USERID'];

{/php}
<div class="row-cread">
    <!-- Span 4 start -->
    <div class="span4">
        <h4>Thông số</h4>
        {literal}
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
        {/literal}

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
            {if $channels eq "1"}
            <div class="field">
                <label>
                    {$lang269}:
                    <select name="CID" id="CID">
                        {section name=i loop=$c}
                        <option value="{$c[i].CID}" {if $c[i].CID eq 13}selected="selected"{/if} >{$c[i].cname}</option>
                        {/section}
                    </select>
                    <p class="info" style="visibility:hidden">{$lang271}</p>
                </label>
            </div>
            {/if}
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
