<?php

//sql codigo de sentencias actualizacion de activacion usuarios  

 include "conexion_sql.php";

   $con=conectar();
  
  $id=$_POST["cedula"];
  $estado=$_POST["estado"];

   $entrar= $con -> query("SELECT fecha_registro FROM usuarios WHERE cedula = '$id'");

       while ($row = mysqli_fetch_row($entrar))
       		{

            foreach ($row as $espacios)
            {
            	$x=$row[0];
            }
        }

  $con -> query("UPDATE usuarios SET estado = '$estado',fecha_registro='$x' WHERE cedula = $id");

?>


