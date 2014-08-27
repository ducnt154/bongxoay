    <div id="content">
		<div class="button-container border"><h2></h2>
            <a class="button facebook .badge-facebook-connect" href="https://www.facebook.com/dialog/permissions.request?app_id={$FACEBOOK_APP_ID}&display=page&next={$mobileurl}/&response_type=code&fbconnect=1&perms=email,user_birthday,user_about_me">Đăng nhập bằng Facebook</a>
        </div><!--end .button-container-->
        <form id="form-login" action="{$mobileurl}/login" method="post">
            <input id="logsub" type="hidden" name="logsub" value="1"></input>
            <input type="text" id="jsid-login-id" name="username" placeholder="Email address" tabindex="1" />
            <input type="password" id="jsid-login-password" name="password" placeholder="Password" tabindex="2" />

            <div class="button-container no-padding-side">
                <input type="submit" value="Login" class="button left"/>
                <a class="button demote right" href="{$mobileurl}/recover">Quên mật khẩu?</a>
            </div><!--end button-container-->
        </form>