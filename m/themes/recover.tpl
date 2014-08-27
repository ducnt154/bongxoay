    <div id="content">
		<h2 class="center">Request Password Reset</h2>
        <form id="form-login" action="{$mobileurl}/login" method="post">
            <input id="logsub" type="hidden" name="logsub" value="1"></input>
            <input type="text" id="jsid-login-id" name="email" placeholder="Email address" tabindex="1" />

            <div class="button-container no-padding-side">
                <input type="submit" value="Recover Password" class="button left"/>
                <a class="button demote right" href="{$mobileurl}/login">Login?</a>
            </div><!--end button-container-->
        </form>