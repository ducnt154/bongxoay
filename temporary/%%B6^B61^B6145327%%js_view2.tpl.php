<?php /* Smarty version 2.6.6, created on 2014-07-09 11:26:50
         compiled from js_view2.tpl */ ?>
	<?php echo '
	<script type="text/javascript">
    var adloca2=$(\'#post-control-bar\').offset().top; 
     $(window).scroll(function () { 
        var curloca2=$(window).scrollTop();
        if(curloca2>adloca2){
            $(\'#post-control-bar\').css(\'position\',\'fixed\');
            $(\'#post-control-bar\').css(\'top\',\'53px\');
            $(\'#post-control-bar\').css(\'z-index\',\'10\');
        };
        if(curloca2 <= adloca2){
            $(\'#post-control-bar\').css(\'position\',\'absolute\');
            $(\'#post-control-bar\').css(\'top\',\'auto\');
            $(\'#post-control-bar\').css(\'z-index\',\'!important\');
        };
        });    
    </script>
    <script type="text/javascript">
    $(\'#post_view_love\').click(function(){
        if( $(\'#post_view_love\').hasClass(\'current\')){
            $(\'#post_view_love\').removeClass(\'current\');
        likedeg(';  echo $this->_tpl_vars['p']['PID'];  echo ',-1,0);
        }else{
            likedeg(';  echo $this->_tpl_vars['p']['PID'];  echo ',1,0);
        $(\'#post_view_love\').addClass(\'current\');
        }
        });
    function likedeg(p,l,u){
        jQuery.ajax({
            type:\'POST\',
            url:\'';  echo $this->_tpl_vars['baseurl'];  echo '\'+ \'/votegag.php\',
			data:\'l=\'+l+\'&pid=';  echo $this->_tpl_vars['p']['PID'];  echo '&u=\'+u,
            success:function(e){
                $(\'#love_count\').html(e);}
            });
        }
    </script>
    <script type="text/javascript">
         var barloc=$(\'#post-control-bar\').offset().top; 
         $(window).scroll(function () {
              var curloc=$(window).scrollTop();
              if(curloc>barloc){
        $(\'#post-control-bar\').addClass(\'topbarfixed\');
              }else{
                $(\'#post-control-bar\').removeClass(\'topbarfixed\'); 
                 }
         });
    </script>
	<script type="text/javascript">
		$(\'.badge-buzz-more\').click(function()
			{
			var currIndex=parseInt($("#jsid-buzz-block").attr(\'data-boxIndex\'),10);
			var maxIndex=parseInt($("#jsid-buzz-block").attr(\'data-boxIndexMax\'),10);
			var change=parseInt($(this).attr(\'data-change\'),10);
			var newIndex=currIndex+change;
			if(newIndex>=0&&newIndex<=maxIndex){
			$$("#jsid-buzz-block").set("data-boxIndex",newIndex);
			$$(".badge-buzz-post-batch").setStyle("display","none");
			$$(".badge-buzz-post-batch-"+newIndex).setStyle("display","");
			$$("#jsid-popular-prev").setStyle("color",newIndex===0?"grey":"#00A5F0");
			$$("#jsid-popular-prev").setStyle("cursor",newIndex===0?"default":"pointer");
			$$("#jsid-popular-next").setStyle("color",newIndex===maxIndex?"grey":"#00A5F0");
			$$("#jsid-popular-next").setStyle("cursor",newIndex===maxIndex?"default":"popular");
			}
			});
	</script>
    '; ?>