<?php

function conectar(){

$usuario="root";
$servidor="localhost";
$contraseña="";
$db="clinica";
$con=mysqli_connect($servidor,$usuario,$contraseña,$db) or die ("error al conctarse a la base de datos");
// mysqli_select_db($db,$con);
//echo "exito";
return $con;
}
?>