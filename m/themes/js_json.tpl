		{literal}
            <script type="text/javascript">
			var ajaxstart=1;
			jQuery(document).ready(function(){
				var tpage = 2;
				function lastAddedLiveFunc()
				{
					jQuery.get("{/literal}{$mobileurl}{literal}/json.php?section={/literal}{$section}{literal}&page="+tpage, function(data){
						if (data != "") {
							jQuery(".big-list").append(data);
							ajaxstart=1;
						}else{
						ajaxstart=2;
						}
					});
				};
				jQuery(window).scroll(function(){
					if (document.documentElement.scrollTop)
					{ var  curloc = document.documentElement.scrollTop; }
					else
					{ var curloc=jQuery(window).scrollTop(); }
					if  ((curloc+document.documentElement.clientHeight+1)>=(jQuery(document).height()) && ajaxstart==1 ) {
					lastAddedLiveFunc();
					ajaxstart=0;	
					tpage = tpage+1;
					jQuery("#target-list-more-load-button").attr("href", "{/literal}{$mobileurl}/{$section}{literal}?page="+tpage);
					};
				});
			});
			</script>
		{/literal}