<!-- Pagina Usuarios-->

<!-- Session abierta -->
<?php
session_start();
?>

<!-- Mensaje de alertify bienvenida-->
 <script type="text/javascript">
  function funcion_primera(){  alertify.success("Bienvenido Señor(a) USUARIO <?php echo$_SESSION["nombre"] ?>");}
    
   
    function lanzadera(){
        funcion_primera();
    
    }
    
    window.onload = lanzadera;



</script>

<!--css de barra de navegacion y fondo de pantalla estilo de letras y tamaño -->

<style type="text/css">
  body {
  background: url('cream_dust.png');
  background-repeat: repeat;
   font-family: "Amatic SC", Arial, Sans-serif;
    font-size: 18px;
}

</style>



<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Consultorio | usuarios</title>


<!-- Librerias de Alertify-->
  <link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">
  <link href="css/login.css" type="text/css" rel="stylesheet" media="screen,projection"/>



  <script  src="jquery-3.3.1.min.js"></script>
  <script src="alertifyjs/alertify.js"></script>



<!-- Último CSS compilado y minificado bootstrap -->

<meta  name="viewport"  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">  
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/pagina_adm.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="shortcut icon"  href="img/sis.jpg">

<!--dtapicker-->

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/eggplant/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    
  <script type="text/javascript">
   $(function() {
   $('#datepicker').datepicker({ 
       beforeShowDay: $.datepicker.noWeekends 
   });
});
  </script>

  <script type="text/javascript">



//MOSTRAR CITAS DEL USUARIO
  function novedad()
  {
  var uno=document.getElementById('banner');
  var cuatro=document.getElementById('novedades');
  var cinco=document.getElementById('uno');
   
           uno.style.display = 'none';    
            cuatro.style.display= 'block';
             cinco.style.display= 'none';   
             
  
  }

//MOSTRAR PAGINA PARA GENERAR NUEVA CITA
   function nuev()
  {
  var uno=document.getElementById('banner');
  var cuatro=document.getElementById('novedades');
  var cinco=document.getElementById('uno');
 // var six=document.getElementById('consultar');
  
           uno.style.display = 'none'; 
            cuatro.style.display= 'none';
             cinco.style.display= 'block'; 
               // six.style.display= 'none';        
  
  }





//ENVIAR DATOS PARA CAMBIAR EL ESTADO DE UNA CITA
  function actestado()
  {

    var contraseña=document.getElementsByTagName('select').value;
        var nombre=document.getElementsByTagName('nombre').value;

    $.ajax({
      type:'post',
      url:'act_contra.php',
      data:('select='+contraseña+'&nombre='+nombre),
      success:function(respuesta)
      {
        if(respuesta==1){
       // alert("hora no disponible");
              alertify.error('contraseña no disponible');
      }
      else{
        //alert("Registro exitoso!!");
        alertify.success('registro exitoso!!!'); 
      }
    }
    })

  }





  


</script>

<!-- metodo ajax -->
<script type="text/javascript">


//ENVIAR DATOS PARA GENERAR NUEVA CITA
  function citanueva()
  {
    var select4=document.getElementById('select4').value;
    var doctor=document.getElementById('doctor').value;
    var datepicker=document.getElementById('datepicker').value;
    var hora=document.getElementById('hora').value;
    var cedula1=document.getElementById('cedula1').value;

    $.ajax({
      type:'post',
      url:'nuevacita.php',
      data:('select4='+select4+'&doctor='+doctor+'&datepicker='+datepicker+'&hora='+hora+'&cedula1='+cedula1),
      success:function(respuesta)
       {
        if(respuesta==2){
       // alert("Registro exitoso!!");
          alertify.success('registro exitoso!!!'); 
        
           var select4=document.getElementById('select4').value="";
            var doctor=document.getElementById('doctor').value="";
            var datepicker=document.getElementById('datepicker').value="";
            var hora=document.getElementById('hora').value="";
            var cedula1=document.getElementById('cedula1').value="";
      }
      else{
        alertify.error('hora no disponible');
       // alert("hora no disponible");
      }
       }
    })

  }


</script>

</head>
<body>



<!--MENU DE NAVEGACION-->

<div class="container-fluid">

<div class="row" >

<style type="text/css">
  div.menu {

margin-top: 30px;
 
}
</style>  



<div class="col-sm-6 col-md-2" id="menu"   style="background:#11A8D4" >


 <img id="profile-img" class="profile-img-card" src="img/sis.jpg" />



 
  
<strong><center> <span style="color:#FFF">Bienvenido(a) </span></center><input class="form-control" type="text"  value="<?php echo$_SESSION["nombre"] ?>" disabled></strong>


<!--col-md-offset-1-->

<form class="form">
<div class="container col-md-offset-1 menu">


 <div class="form-group">
    <a style="color:#33CAFF" onclick="novedad()"> <h3 class=" glyphicon glyphicon-list-alt" style="color:#FFF" ></h3>    <span  style="color:#FFF">Consultar citas </a><br>
  </div>




 <div class="form-group">
    <a style="color:#33CAFF"  onclick="nuev()"> <h3 class=" glyphicon glyphicon-pencil" style="color:#FFF" ></h3>    <span  style="color:#FFF">Agregar citas </a><br>
  </div>








 <div class="form-group">
    <a style="color:#33CAFF" href="index.html"> <h3 class=" glyphicon glyphicon-off" style="color:#FFF" ></h3>    <span  style="color:#FFF">cerrar sesión</a><br>
  </div>


  </div>
</form>

</div>
</div>


<!--BANNER-->

<style type="text/css">

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 90px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url(dimension.png);
}

</style>


<div class="container col-sm-6 col-md-8  col-md-offset-3" id="banner">



      <div id="logo">
        <img src="img/card4.png">
      </div>
        <h1 > Servicios y promociones</h1>




  <div class="col-sm-6 col-md-4" style="float: right;">
    <div class="thumbnail">
      <img src="img/doctor1.jpg" alt="...">
      <div class="caption">
        <h2 style="color:black";>Doctor 1</h2>
      

  <p class="text-justify" style="color:black"; ><b>Las especialidades son: cirugía bucal y maxilofacial, endodoncia, materiales dentales, odontología restauradora avanzada, odontopediatría, ortodoncia, 
      <p><a href="#" class="btn btn-success" style="background:#11A8D4" role="button">Button</a></p>
      </div>
    </div>
    </div>


  <div class="col-sm-6 col-md-4" style="float: right;">
    <div class="thumbnail" style="background:#11A8D4">
      <img src="img/Doctor2.png" alt="...">
      <div class="caption">
        <h2  style="color:white"; >Doctor 2</h2>
      

  <p class="text-justify" style="color:white"; >Las especialidades son: cirugía bucal y maxilofacial, endodoncia, materiales dentales, odontología restauradora avanzada, odontopediatría, ortodoncia... 
      <p><a href="#" class="btn btn-default"  role="button">Button</a></p>
      </div>
    </div>
    </div>

 

  <div class="col-sm-6 col-md-4" style="float: right;">
    <div class="thumbnail" style="background:#D9D9D9">
      <img src="img/doctor3.jpg" alt="...">
      <div class="caption">
        <h2>Doctor(a) 3</h2>
      

  <p class="text-justify" style="color:#1D1D1D";><b>Las especialidades son: cirugía bucal y maxilofacial, endodoncia, materiales dentales, odontología restauradora avanzada, odontopediatría, ortodoncia, 
      <p><a href="#" class="btn btn-success" style="background:#11A8D4" role="button">Button</a></p>
      </div>
    </div>
    </div>






  <div class="col-sm-6 col-md-4" style="float: right;">
    <div class="thumbnail"style="background:#D9D9D9">
      <img src="http://dentaliscolombia.com/img/estetica.jpg" alt="...">
      <div class="caption">
        <h2 style="color:black";>Odontología General</h2>
      

  <p class="text-justify"  style="color:black";>La Odontología General es el canal o puerta de entrada del paciente... 
    <h4  style="color:black";>PRECIO:<span  class="btn btn-info"  style="color:black";>50.000$</span> </h4>
      </div>
    </div>
    </div>





    <div class="col-sm-6 col-md-4" style="float: right;">
    <div class="thumbnail"  style="background:#11A8D4">
      <img src="img/par1.PNG" alt="...">
      <div class="caption">
        <h2  style="color:white";>Odontologia estetica</h2>
      

 <p class="text-justify"  style="color:white";> <b >Tener una sonrisa linda es mucho más que unos dientes blancos y alineados....</p>


     <h4  style="color:white";>PRECIO:<span  class="btn btn-default"  style="color:black";>50.000$</span> </h4>
      </div>
    </div>
    </div>




    <div class="col-sm-6 col-md-4" style="float: right;">
    <div class="thumbnail">
      <img src="img/par2.PNG" alt="...">
      <div class="caption">
        <h2 style="color:black";>Ortodoncia</h2>

        <p class="text-justify" style="color:black";>La Ortodoncia es una especialidad de la Odontología que se encarga de la a alineación de los dientes  
.</p>
            <h4>PRECIO:<span class="btn btn-info">250.000$</span> </h4>
      
      </div>
    </div>
  </div>

   <section class="mapa">


  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63636.108387662374!2d-75.70125828643958!3d4.547750485516564!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xda9d351343f7dd9e!2sDentisalud+Armenia!5e0!3m2!1ses-419!2sco!4v1537552071838" width="740" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


          
        </section>
</div>





<!-- a qui se incluye el pie de pagina-->
  <?php
  include("footer.php");
  ?>






<!-- AGREGAR CITA -->
<div class="bootstrap-iso formulario col-md-offset-3" id="uno">
 <div class="container-fluid">
  <div class="row">
 
    <fieldset>
 <center>
     <div id="logo">
        <img src="img/card4.png">
      </div>
        <h1  class="glyphicon glyphicon-globe" style="color:#11A8D4"> FORMULARIO DE CITA</h1>

</center>
     
      <form method="post" action="nuevacita.php">
   <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <br><br>

      <div class="form-group ">
      <label class="control-label " for="cedula1"  style="color:#11A8D4">
       Cedula del paciente:
      </label>
     <input class="form-control" type="text" name="cedula1" id="cedula1"  value="<?php echo$_SESSION["cedula"] ?>" disabled>
     </div>


        <div class="form-group ">
      <label class="control-label " for="select4"  style="color:#11A8D4">
       Tipo cita
      </label>
      <select class=" form-control" id="select4" name="select4">
       <option value="Odontología General">
      Odontología General
       </option>
       <option value="Odontologia estetica">
      Odontologia estetica
       </option>
       <option value="Ortodoncia">
      Ortodoncia
       </option>
       <option value="otros">
      Otros
       </option>
      </select>
     </div>

      <div class="form-group ">
      <label class="control-label " for="doctor"  style="color:#11A8D4">
       doctor
      </label>
      <select class="  form-control" id="doctor" name="doctor">
       <option value="doctor1">
      doctor1
       </option>
       <option value="doctor2">
      doctor2
       </option>
       <option value="doctor3">
      doctor3
       </option>
      </select>
     </div>

     <div class="form-group ">
      <label class="control-label " for="datepicker"  style="color:#11A8D4">
       Fecha
      </label>
     <input class="form-control " type="text" name="datepicker" id="datepicker" value="<?php echo date("d/m/Y");?>"  />
     </div>
      <div class="form-group ">

      <label class="control-label" for="hora"  style="color:#11A8D4">
       Hora
      </label>

      <select class="  form-control" id="hora" name="hora">
       <option value="7:00">
        07:00 am
       </option>
       <option value="8:00">
      08:00 am
       </option>
       <option value="9:00">
      09:00 am
       </option>
        <option value="10:00">
      10:00 am
       </option>
       <option value="11:00">
      11:00 am
       </option>
       <option value="12:00">
      12:00 am
       </option>
        <option value="1:00">
      01:00 pm
       </option>
        <option value="2:00">
      02:00 pm
       </option>
        <option value="3:00">
      03:00 pm
       </option>
         <option value="4:00">
      04:00 pm
       </option>
         <option value="5:00">
      05:00 pm
       </option>
      </select>

     </div>
     <div class="form-group">

      <div>


       <input class="btn btn-success " name="submi"  style="background:#11A8D4" type="button" value="ENVIAR" onclick="citanueva();">

      </div>
     </div>
   </div>
   </form>
   </fieldset>
  </div>
 </div>
</div>




<!--CONSULTAR CITAS   id="novedades"--> 
<div class="bootstrap-iso"   id="novedades" >
 <div class="container-fluid">
  <div class="row">
    <br><br><br>
   <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
    <br><br>
    <?php

    $x=0;

  include "conexion_sql.php";

  $con=conectar();
  $z=$_SESSION["cedula"];

?>
<div class="container">
<?php

//GENERAR TABLA

echo "<table class='table table-bordered table-hover table-responsive'> 

<tr class='btn-default'>

    <th>ID No.</th> 
    <th><form>Fecha</form></th> 
     
    <th><form>Tipo</form></th> 
 
     <th><form>Estado</form></th> 
    
    <th><form>Hora</form></th> 
    
    <th><form>Doctor</form></th> 
   

</tr>";

//HACER CONSULTA Y RECIVIR DATOS
$entrar= $con -> query("SELECT id,fecha,tipo,estado,hora,doctor,cedula FROM citas WHERE cedula=$z ORDER BY fecha DESC");

       while ($row = mysqli_fetch_row($entrar))

            foreach ($row as $espacios){

            if($row[0]!=$x){

                $x=$row[0];

?>
 <tr class="btn-primary" style="background:#11A8D4" >

    <td><?php echo"$row[0]" ?></td>
    <td><?php echo"$row[1]" ?></td>
   
    <td><?php echo"$row[2]" ?></td>
  
    <td><?php echo"$row[3]" ?></td>

    <td><?php echo"$row[4]" ?></td>   <td> <?php echo"$row[5]" ?> </td>

  </tr>


<?php

}
}



?>
   </div>
  </div>
 </div>
</div>
</div>














<!--CONSULTAR DATOS   id="consultar"-->


<CENTER>

<div id="logo">
        <img src="img/card4.png">
</div>
        <h1  class="glyphicon glyphicon-globe" style="color:#11A8D4">  Datos de usuario</h1>
</CENTER>  

<div class="bootstrap-iso"  id="consultar">
 <div class="container-fluid">
  <div class="row">
   
   <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
 

    <?php

    $x=0;





  include_once("conexion_sql.php");

  $con=conectar();
  $z=$_SESSION["cedula"];

?>

<div class="container">
<?php

//GENERAR TABLA

echo "<table class='table table-bordered table-hover table-responsive'> 

<tr class='btn-default'>

   <th><form>cedula</form></th> 

     <th><form>nombre</form></th> 
     
      <th><form>rol</form></th> 
 
      <th><form>correo</form></th> 
    
     <th><form>contraseña</form></th> 
    
    <th><form>estado</form></th> 

   <th><form>fecha afiliado</form></th> 

    <th><form>Actualizar</form></th> 
   

</tr>";




//HACER CONSULTA Y RECIVIR DATOS
$entrar= $con -> query("SELECT cedula,nombre,rol,correo,contrasena,estado,fecha_registro FROM usuarios WHERE cedula=$z");

       while ($row = mysqli_fetch_row($entrar))

            foreach ($row as $espacios){

            if($row[0]!=$x){

                $x=$row[0];

?>

 <tr class="btn-primary" style="background:#11A8D4" >

    <td><?php echo"$row[0]" ?></td>
    <td><?php echo"$row[1]" ?></td>
   
    <td><?php echo"$row[2]" ?></td>
  
    <td><?php echo"$row[3]" ?></td>

    <td><?php echo"$row[4]" ?></td>  

    <td> <?php echo"$row[5]" ?> </td>

    <td> <?php echo"$row[6]" ?> </td>

  <th>



<!--HACER ACTUALIZACIONES DE DATOS-->


      <form method='post' action="pagina_usuario.php" >
      
      <!--<label for="in">rellene todos los campos (para actualizar la informaciòn)</label>-->

      <input  type="password" name="contrasena" style="color:black" placeholder="nueva contraseña" required>

       <input type="text" name="nombre" style="color:black"  minlength="5" maxlength="40" required
         title="Tamaño mínimo: 5. Tamaño máximo: 40" placeholder="nuevo nombre" >

        <input type="email" name="correo" style="color:black"  placeholder="nueva correo" required >

 
         <button type="submit" id="enviar"  name="datos" class="btn btn-default" >
          
           <span class="glyphicon glyphicon-ok-circle" ></span>  </button>
    



      </form>

      
        </th>

      


  </tr>


<?php

}
}


//metodo para actualizar datos de el usuario como contraseña, correo, nombre.

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



<!--HACER ACTUALIZACIONES DE DATOS-->


   </div>
  </div>
 </div>
</div>
</div>













</div>

<hr>
  <?php
  include("footer.php");
  ?>

 <script src="js/jquery.js"></script>

    <script src="js/jquery-ui.min.js"></script>

    <script src="js/datepicker-es.js"></script>

    <script type="text/javascript">
      
    $("#datepicker").datepicker($.datepicker.regional[ "es" ] );


    </script>
</body>


</html>