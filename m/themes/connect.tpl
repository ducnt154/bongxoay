    <div id="content">
		<h2 class="center">Đăng ký tên đăng nhập và mật khẩu</h2>
		<form id="form-signup-login" action="{$mobileurl}/connect.php" method="post">
            <input id="logsub" type="hidden" name="logsub" value="1"></input>
            <input type="text" id="jsid-login-id" name="username" placeholder="Email address" tabindex="1" />
            <input type="password" id="jsid-login-password" name="password" placeholder="Password" tabindex="2" />

            <div class="button-container no-padding-side">
                <input type="submit" value="Login" class="button left"/>
                <a class="button demote right" href="{$mobileurl}/recover">Lấy lại mật khẩu</a>
            </div><!--end button-container-->
        </form>