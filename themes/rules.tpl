<div id="main">
    <div class="static-block">
        <h3>{insert name=get_static value=var sel=title ID=4}</h3>
        <div class="info">
            <p>{insert name=get_static value=var sel=value ID=4}</p>
        </div>
    </div>
</div>
{include file='right2.tpl'}
{include file='js_movingboxs.tpl'}
{include file='js_view2.tpl'}
{literal}
<script type="text/javascript">
var adloca=$('#moving-boxes').offset().top; 
 $(window).scroll(function () { 
    var curloca=$(window).scrollTop();
    if(curloca>adloca){
        $('#moving-boxes').css('position','fixed');
        $('#moving-boxes').css('top','55px');
        $('#moving-boxes').css('z-index','200');
    };
    if(curloca <= adloca){
        $('#moving-boxes').css('position','static');
        $('#moving-boxes').css('top','!important');
        $('#moving-boxes').css('z-index','!important');
    };
    });
</script> 
{/literal}   
<div id="footer" class="">