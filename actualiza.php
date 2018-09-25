
<?php

//actualizar datos de usuarios 

if($_POST)
{
  if(isset($_POST['datos']))
  {

  include_once("conexion_sql.php");

  $con=conectar();

  $a=$_SESSION["cedula"];
  $contra=$_POST["contrasena"];
  $nombre=$_POST["nombre"];
  $correo=$_POST["correo"];


  $con -> query("UPDATE usuarios SET contrasena='$contra',nombre='$nombre',correo='$correo' WHERE cedula='$a'");

    
  }

}

?>




