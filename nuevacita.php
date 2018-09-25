<?php

//codigo insertar citas
   include "conexion_sql.php";

   $con=conectar();
   $x=0;
  $tipo_cita=$_POST["select4"];
  $doctor=$_POST["doctor"];
  $fecha=$_POST["datepicker"];
  $cedula=$_POST["cedula1"];
  $hora=$_POST["hora"];

  $entrar= $con -> query("SELECT hora FROM citas WHERE doctor='$doctor' AND fecha='$fecha'");

       while ($row = mysqli_fetch_row($entrar))

            foreach ($row as $espacios)
            {
            	if($row[0]==$hora)
            	{
            		$x=1;
            	}
            }
           


  if($x==0)
  {
  $con -> query("INSERT INTO citas (tipo, doctor,fecha,cedula,hora,estado) VALUES ('$tipo_cita','$doctor','$fecha','$cedula','$hora','pendiente')");

  echo 2; 
 }

 else
 {
  echo 1;
 }

?>