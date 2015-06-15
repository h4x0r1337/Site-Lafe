<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="ThemeBucket">
    

		<title>StonePay - Login</title>
        <link rel="stylesheet" href="styles/main.css" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
		
		<!--Core CSS -->
		<link href="bootstrap/bs3/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-reset.css" rel="stylesheet">
		<link href="font/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/css2/style.css" rel="stylesheet">
		<link href="css/css2/css/style-responsive.css" rel="stylesheet">
    </head>
	
	
	
    <body>
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
		<body class="login-body">
         <div class="container">
          <form class="form-signin" action="includes/process_login.php" method="post" name="login_form"> 
			<h2 class="form-signin-heading">login</h2>		 
				<div class="login-wrap">			
				<div class="user-login-info">
              <input type="text" class="form-control" name="email" placeholder="Email" />
              <input type="password" class="form-control" name="password" id="password" placeholder="password"" />
            <input class="btn btn-lg btn-login btn-block" type="button" value="Login" onclick="formhash(this.form, this.form.password);" /> 
			</div>
			 <label class="checkbox">
			 <input type="checkbox" value="remember-me">Recordar mi cuenta<span class="pull-right">
                    <a data-toggle="modal" href="#myModal">Perdió la contraseña?</a>
                </span>
				</label>
				<div class="registration">No tienes cuenta?<a class="" href="register.php"> Crear una cuenta!</a>
            </div>
        </div>
        </form>
		</div>
            
       
    


    <!--Core js-->
    <script src="js/jquery.js"></script>
    <script src="bs3/js/bootstrap.min.js"></script>
</body></html>
     
	<!--	// <p>If you don't have a login, please <a href="register.php">register</a></p> //
        // <p>If you are done, please <a href="includes/logout.php">log out</a>.</p> //
        // <p>You are currently logged ///</?//php echo $logged ?>.</p> //