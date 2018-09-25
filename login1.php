<?php

// login

	$x=0;
	$y=0;
	session_start(); 

    include "conexion_sql.php";

    $con=conectar();
    

  $cedula=$_POST['usuario'];
  $contraseña=$_POST['contraseña'];

  $entrar= $con -> query("SELECT cedula,contrasena,rol,estado,nombre FROM usuarios WHERE cedula = '$cedula'");

       while ($row = mysqli_fetch_row($entrar))


            foreach ($row as $espacios)
           {

           	$x++;
           	if($x==1)
           	{

            if(($cedula==$row[0])&&($contraseña==$row[1]))
            {

              if($row[3]=="activo")
              {
              	
                $_SESSION["cedula"] = $row[0];
                $_SESSION["rol"] = $row[2];
                $_SESSION["nombre"] = $row[4];



              if($row[2]=='paciente')
              {
                $y=3;

              }
              if($row[2]=='doctor')
              {
                 $y=2;

              }

              if($row[2]=='administrador')
              {
                $y=1;

              }
            }
            else{

              $y=4;
            }
           }
    	}
       }

      if($y==0)
      {
       $y=5;
   }

     echo $y;
      
?>

