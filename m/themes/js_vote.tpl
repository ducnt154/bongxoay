	{literal}
	<script type="text/javascript">
		jQuery('.btn-downvote-{/literal}{$page}{literal}').click(function(){
        var id=jQuery(this).attr('entryId');
        if( jQuery(this).hasClass('selected')){
        jQuery(this).removeClass('selected');
        likedeg(jQuery(this).attr('entryId'),0,-1);
        }else{
        jQuery(this).addClass('selected');
        if(jQuery('#btn-upvote-'+id).hasClass('selected')){
        jQuery('#btn-upvote-'+id).removeClass('selected');
        }
        likedeg(jQuery(this).attr('entryId'),0,1);	
        }
        });
        jQuery('.btn-upvote-{/literal}{$page}{literal}').click(function(){
        var id=jQuery(this).attr('entryId');
        if( jQuery(this).hasClass('selected')){
        jQuery(this).removeClass('selected');
        likedeg(jQuery(this).attr('entryId'),-1,0);
        }else{
        jQuery(this).addClass('selected');
        if(jQuery('#btn-downvote-'+id).hasClass('selected')){
        jQuery('#btn-downvote-'+id).removeClass('selected');
        }
        likedeg(jQuery(this).attr('entryId'),1,0);
        }
        });
    function likedeg(p,l,u){
        jQuery.ajax({
            type:'POST',
            url:'{/literal}{$mobileurl}{literal}'+ '/votegag.php',
			data:'l='+l+'&pid=' + p +'&u='+u,
            success:function(e){
                jQuery('#badge-count-like-'+p).html(e);
                }
            });
        }
    </script>
	{/literal}