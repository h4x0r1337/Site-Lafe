<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<html lang="en"><head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    

    <title>StoneBitcoin - Register</title>
<?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
    <!--Core CSS -->
    <link href="bootstrap/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="font/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/css2/style.css" rel="stylesheet">
    <link href="css/css2/css/style-responsive.css" rel="stylesheet">
	<script type="text/JavaScript" src="js/sha512.js"></script> 
    <script type="text/JavaScript" src="js/forms.js"></script>
    <link rel="stylesheet" href="styles/main.css" />
</head>
  <body class="login-body">
  
    <div class="container">

      <form class="form-signin" method="post" name="registration_form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
        <h2 class="form-signin-heading">REGISTER ACCOUNT</h2>
        <div class="login-wrap">
            <p>Ingrese los datos de la cuenta</p>
            <input type='text' name='username' id='username' class="form-control" placeholder="Nombre de usuario" autofocus="">
            <input type="text" name="email" id="email" class="form-control" placeholder="Email" autofocus="">
            <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
            <input type="password" name="confirmpwd" id="confirmpwd" class="form-control" placeholder="Repetir Contraseña">
            <label class="checkbox">
                <input type="checkbox" value="agree this condition"> Estoy de acuerdo con los Términos de Servicio y Política de Privacidad
            </label>
            <input class="btn btn-lg btn-login btn-block" type="button" 
                   value="Register" 
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);"/>

            <div class="registration">Si estas registrado<a class="" href="login.php"> Conectate!</a>
            </div>

        </div>

      </form>

    </div>


    <!--Core js-->
    <script src="js/jquery.js"></script>
    <script src="bs3/js/bootstrap.min.js"></script>

  
</body></html>		