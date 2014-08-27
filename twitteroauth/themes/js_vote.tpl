	{literal}
	<script type="text/javascript">
		$('.votedown_{/literal}{$page}{literal}').click(function(){
        var id=$(this).attr('entryId');
        if( $(this).hasClass('unloved')){
        $(this).removeClass('unloved');
        likedeg($(this).attr('entryId'),0,-1);
        }else{
        $(this).addClass('unloved');
        if($('#post_love_'+id).hasClass('loved')){
        $('#post_love_'+id).removeClass('loved');
        }
        likedeg($(this).attr('entryId'),0,1);	
        }
        });
        $('.voteup_{/literal}{$page}{literal}').click(function(){
        var id=$(this).attr('rel');
        if( $(this).hasClass('loved')){
        $(this).removeClass('loved');
        likedeg($(this).attr('rel'),-1,0);
        }else{
        $(this).addClass('loved');
        if($('#vote-down-btn-'+id).hasClass('unloved')){
        $('#vote-down-btn-'+id).removeClass('unloved');
        }
        likedeg($(this).attr('rel'),1,0);
        }
        });
    function likedeg(p,l,u){
        jQuery.ajax({
            type:'POST',
            url:'{/literal}{$baseurl}{literal}'+ '/votegag.php',
			data:'l='+l+'&pid=' + p +'&u='+u,
            success:function(e){
                $('#love_count_'+p).html(e);
                }
            });
        }
    </script>
	{/literal}