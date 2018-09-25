<?php

//codigo registro de  usuarios

   include "conexion_sql.php";

    $con=conectar();
  
  $cedula=$_POST["name"];
  $nombre=$_POST["name1"];
  $correo=$_POST["email"];
  $contraseña=$_POST["name3"];


  $entrar= $con -> query("SELECT cedula FROM usuarios");

       while ($row = mysqli_fetch_row($entrar))
       {

            foreach ($row as $espacios)
           {
           	if($cedula==$row[0])
           	{
           		$x=1;
           	}
           }
       }

 
if($x==0)
{
  $con -> query("INSERT INTO usuarios (cedula,nombre,rol,correo,contrasena,estado,fecha_registro) VALUES ('$cedula','$nombre','paciente','$correo','$contraseña','inactivo',current_timestamp)");
}

else
{
	echo 2;
}

?>


