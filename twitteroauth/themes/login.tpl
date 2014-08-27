<!DOCTYPE html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="{$lang254}" dir="{$lang255}">
<head>
<title>{$pagetitle|stripslashes}</title>
<link rel="shortcut icon" href="{$baseurl}/favicon.ico" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta content="width=device-width; initial-scale=1.0;" name="viewport" />
<link rel="stylesheet" href="{$baseurl}/css/connect_{$lang255}.css" media="screen,projection" type="text/css" />
</head>

<body id="page-signup">
    <div class="signup-wrapper">
        <div class="header">
        	<a href="{$baseurl}"><h1></h1></a>
        </div>
        <div class="content">
            <div class="description">
                <h2>{$lang91}</h2>
                <div class="spcl-button-wrap">
					{if $enable_fc eq "1"}
                	<a class="spcl-button facebook badge-facebook-connect" label="LoginFormFacebookButton" next="" <a class="spcl-button facebook badge-facebook-connect" label="LoginFormFacebookButton" next="" href="https://www.facebook.com/dialog/permissions.request?app_id={$FACEBOOK_APP_ID}&display=page&next={$baseurl}/&response_type=code&fbconnect=1&perms=email,user_birthday,user_about_me,publish_stream">{$lang25}</a><br>
					{/if}
					{if $TC eq "1"}
					<a class="spcl-button twitter" label="LoginFormTwitterButton" next="" href="{$baseurl}/twitter_signin.php">{$lang256}</a>
					{/if}
                </div>
                <p class="message"> </p>
            </div>
           
        </div>
    </div>
    <div id="fb-root"></div>
    <script type="text/javascript" src="{$baseurl}/js/connect.js"></script>
</body>
</html>