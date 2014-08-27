{literal}
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-48676329-1', 'bongxoay.com');
    ga('send', 'pageview');

</script>
{/literal}


</div>
	<div class="footer">
        <div style="margin:0px;padding:0px;text-align:center;">
			<p>
				{if $smarty.session.USERID ne ""}
					Xin chào, {$smarty.session.USERNAME|stripslashes}<br><a href={$mobileurl}/logout>Thoát</a> | <a href={$mobileurl}/submit>Đăng Bài</a>
				{else}  
					<a href="{$mobileurl}/login">Đăng nhập</a> để có thể đăng bài và bình chọn bài hay
				{/if}
        	<p>&copy; 2013 {$site_name}.
		<br></p>
        </div>
    </div>
</div>
</body>
</html>