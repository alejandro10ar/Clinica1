<?php

// comprobación de la versión mínima de PHP
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
    
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
   
// si está utilizando PHP 5.3 o PHP 5.4, debe incluir la contraseña_api_compatibility_library.php
// (esta biblioteca agrega las funciones de hash de contraseñas de PHP 5.5 a versiones anteriores de PHP)
    require_once("libraries/password_compatibility_library.php");
}

// incluye las configuraciones / constantes para la conexión a la base de datos
require_once("config/db.php");


// cargar la clase de inicio de sesión
require_once("classes/Login.php");

// crea un objeto de inicio de sesión. cuando se crea este objeto, hará todas las cosas de inicio de sesión / cierre de sesión automáticamente
// entonces esta única línea maneja todo el proceso de inicio de sesión. en consecuencia, puedes simplemente ...
$login = new Login();


// ... pregunta si estamos conectados aquí:
if ($login->isUserLoggedIn() == true) {
  
// el usuario ha iniciado sesión. Puede hacer lo que quiera aquí.
// con fines de demostración, simplemente mostramos la vista "has iniciado sesión".
   header("location: facturas.php");

} else {
 
// el usuario no ha iniciado sesión. Puede hacer lo que quiera aquí.
// para fines de demostración, simplemente mostramos la vista "no estás conectado".
    ?>

	<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>


  <title>Consultorio | Login</title>
	
  <!-- Último CSS compilado y minificado -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  
  <!-- CSS  -->
   <link href="css/login.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   <link rel="shortcut icon"  href="img/sis.jpg">
   
<style>
 
   
body {
  background: url('binding_light.png');
  background-repeat: repeat;
   font-family: "Amatic SC", Arial, Sans-serif;
    font-size: 18px;
}

</style>

</head>



<body>
 
  <!--banner-->

 <div class="container" id="banner">
        <div class="card card-container">
          
            <img id="profile-img" class="profile-img-card"  src="img/aa.jpg" />
            
            <p id="profile-name" class="profile-name-card" style="background:#11A8D4">Bienvenido</p>
            <form method="post" accept-charset="utf-8" action="login.php" name="loginform" autocomplete="off" role="form" class="form-signin">
			<?php
				
        // muestra posibles errores / comentarios (desde el objeto de inicio de sesión)
				if (isset($login)) {
					if ($login->errors) {
						?>
						<div class="alert alert-danger alert-dismissible" role="alert">
						    <strong>Error!</strong> 
						
						<?php 
						foreach ($login->errors as $error) {
							echo $error;
						}
						?>
						</div>
						<?php
					}
					if ($login->messages) {
						?>
						<div class="alert alert-success alert-dismissible" role="alert">
						    <strong>Aviso!</strong>
						<?php
						foreach ($login->messages as $message) {
							echo $message;
						}
						?>
						</div> 
						<?php 
					}
				}
				?>
                <span id="reauth-email" class="reauth-email"></span>
                <input class="form-control" placeholder="Usuario" name="user_name" type="text" value="" autofocus="" required>
                <input class="form-control" placeholder="Contraseña" name="user_password" type="password" value="" autocomplete="off" required>


                <button type="submit" class="btn btn-lg btn-info btn-block btn-signin"  style="color:#FFF" name="login" id="submit">Iniciar Sesión</button>


                <a style="color:#FFF" href="index.html">  p&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <h3 class=" glyphicon glyphicon-off" style="color:#11A8D4" ></h3>    <span  style="color:#11A8D4">cerrar sesión</a><br>



            </form><!-- /form -->
            
        </div><!-- /card-container -->
    </div><!-- /container -->
  </body>
</html>

	<?php
}


