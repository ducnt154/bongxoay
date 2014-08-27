<?php /* Smarty version 2.6.6, created on 2014-07-08 22:00:11
         compiled from administrator/index.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $this->_tpl_vars['site_name']; ?>
 | Login</title>
	<meta name="description" content="">
    <link rel="shortcut icon" href="images/favicon.ico" />
    
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen"  />
	<link rel="stylesheet" href="css/login.css" type="text/css" media="screen"  />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cuprum" />
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

    <script src="lib/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
    <script src="lib/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
	<?php echo '
    <script>
            jQuery(document).ready(function(){
                // binds form submission and fields to the validation engine
                jQuery("#form-login").validationEngine();
            });
						
	
    </script>
	'; ?>

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
	
        
    <section id="form">
           <?php if ($this->_tpl_vars['error'] != ""): ?>
				<div class="alerts">
					<div class="alert red hideit"><p><span class="red-icon"></span><?php echo $this->_tpl_vars['error']; ?>
</p></div>
				</div> 
			<?php endif; ?>
		<form id="form-login" action=""  class="formular" method="post">
			<div id="content-header">

				  <p id="logo">Admin Panel Login</p>
                  <p>To log into the admin panel, type your password and log.</a></p>
                </div> 
    	
     		<div id="content">
            
                 <input type="text" name="username" id="req" class="validate[required] text-input" placeholder="Username"><br><br>
                 <input type="password" name="password" id="pass" class="validate[required] text-input" placeholder="Password"><br><br>
                 <input type="hidden" name="login" value="Login" />

                 <div class="buttons">
                 <input type="submit"  name="go"  class="button-a blue" value="LOG IN">
                 </div>
            </div>
		</form>
     
    </section>

</body>
</html>