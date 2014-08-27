{literal}
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
{/literal}