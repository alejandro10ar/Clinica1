<!-- Pagina Doctor-->

<!-- Session abierta -->
<?php
session_start();
?>
<!-- Mensaje de alertify bienvenida-->
<script> 
  
  function funcion_primera(){  alertify.success("Bienvenido  Señor(a)   <?php echo$_SESSION["nombre"] ?>");}
     
    function lanzadera(){
        funcion_primera();
    
    }
    
    window.onload = lanzadera;



</script>


<!--css de barra de navegacion y fondo de pantalla estilo de letras y tamaño -->

<style >
  
   
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
<title>Consultorio | Doctor</title>

<!-- Librerias de Alertify-->
<link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
<link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">
<link href="css/login.css" type="text/css" rel="stylesheet" media="screen,projection"/>



<script  src="jquery-3.3.1.min.js"></script>
<script src="alertifyjs/alertify.js"></script>

<meta  name="viewport"  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">  

<!-- Último CSS compilado y minificado bootstrap -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/pagina_adm.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="shortcut icon"  href="img/sis.jpg">

<!--dtapicker-->

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/eggplant/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>


<!--dtapicker-->      
<script>
   $(function() {
   $('#datepicker').datepicker({ 
       beforeShowDay: $.datepicker.noWeekends 
   });
});
</script>


<script type="text/javascript">

//MOSTRAR PAGINA DE REGISTRO
  function registrrse()
  {
  var uno=document.getElementById('banner');
  var dos=document.getElementById('formulario');
  var tres=document.getElementById('activar');
  var cuatro=document.getElementById('novedades');
  var cinco=document.getElementById('uno');
  var seis=document.getElementById('historia');
  
  
           uno.style.display = 'none';
           tres.style.display= 'none'; 
           cuatro.style.display= 'none'; 
           cinco.style.display= 'none'; 
           dos.style.display = 'block'; //none//  
           seis.style.display = 'none'; 
  
  }

//MOSTRAR PAGINA DE ACTIVACION O DESACTIVACION DE USUARIOS
 function activar()
  {
  var uno=document.getElementById('banner');
  var dos=document.getElementById('formulario');
  var tres=document.getElementById('activar');
  var cuatro=document.getElementById('novedades');
  var cinco=document.getElementById('uno');
   var seis=document.getElementById('historia');
  
  
           uno.style.display = 'none';
           dos.style.display = 'none';  
            cuatro.style.display= 'none'; 
             cinco.style.display= 'none';  
           tres.style.display= 'block';  
            seis.style.display = 'none'; 
  }

//MOSTRAR PAGINA PARA CONSUSTAR CITAS
MOSTRAR
  function novedad()
  {
  var uno=document.getElementById('banner');
  var dos=document.getElementById('formulario');
  var tres=document.getElementById('activar');
  var cuatro=document.getElementById('novedades');
  var cinco=document.getElementById('uno');
   var seis=document.getElementById('historia');
  
  
           uno.style.display = 'none';
           dos.style.display = 'none';  
            cuatro.style.display= 'block';
             cinco.style.display= 'none';   
           tres.style.display= 'none';  
            seis.style.display = 'none'; 
  }



//MOSTRAR PAGINA PARA GENERAR NUEVA CITA
   function nuev()
  {
  var uno=document.getElementById('banner');
  var dos=document.getElementById('formulario');
  var tres=document.getElementById('activar');
  var cuatro=document.getElementById('novedades');
  var cinco=document.getElementById('uno');
   var seis=document.getElementById('historia');
  
  
           uno.style.display = 'none';
           dos.style.display = 'none';  
            cuatro.style.display= 'none';
             cinco.style.display= 'block';   
           tres.style.display= 'none';  
          seis.style.display = 'none'; 
  
  }

//MOSTRAR PAGINA PARA AGREGAR HISTORIA CLINICA DE USUARIO
 

   function historia()
  {
  var uno=document.getElementById('banner');
  var dos=document.getElementById('formulario');
  var tres=document.getElementById('activar');
  var cuatro=document.getElementById('novedades');
  var cinco=document.getElementById('uno');
   var seis=document.getElementById('historia');
  
  
           uno.style.display = 'none';
           dos.style.display = 'none';  
            cuatro.style.display= 'none';
             cinco.style.display= 'none';   
           tres.style.display= 'none';  
            seis.style.display = 'block'; 
  
  }



</script>

<!-- metodo ajax -->
<script type="text/javascript">

//ENVIAR DATOS DE REGISTRO DE USUARIO
  function reg()
  {
    var name=document.getElementById('name').value;
    var name1=document.getElementById('name1').value;
    var name3=document.getElementById('name3').value;
    var email=document.getElementById('email').value;
    var select=document.getElementById('select').value;
    var select1=document.getElementById('select1').value;

    $.ajax({
      type:'post',
      url:'resgistro_adm.php',
      data:('name='+name+'&name1='+name1+'&name3='+name3+'&email='+email+'&select='+select+'&select1='+select1),
      success:function(respuesta)
      {
       if(respuesta==2)
        {
          //alert("usuario ya registrado");
          alertify.error('usuario ya registrado');

        }
        else
        {
             alertify.success('registro exitoso!!!'); 
          
            var name=document.getElementById('name').value="";
            var name1=document.getElementById('name1').value="";
            var name3=document.getElementById('name3').value="";
            var email=document.getElementById('email').value="";
            var select=document.getElementById('select').value="";
            var select1=document.getElementById('select1').value="";
        }
      }
    })

  }

//ENVIAR DATOS PARA ACTIVAR O DESACTIVAR UN USUARIO
   function activaradm()
  {
    var cedula=document.getElementById('cedula').value;
    var estado=document.getElementById('estado').value;
    
  
    $.ajax({
      type:'post',
      url:'activar_adm.php',
      data:('cedula='+cedula+'&estado='+estado),
      success:function(respuesta)
      {
        //alert("registro exitoso!!!");
         alertify.success('registro exitoso!!!'); 
      }
    })

  }


//ENVIAR DATOS PARA CAMBIAR EL ESTADO DE UNA CITA
  function actestado()
  {
    var seleccion=document.getElementById('seleccion').value;
    var id=document.getElementById('id').value;

    $.ajax({
      type:'post',
      url:'actestadocita.php',
      data:('seleccion='+seleccion+'&id='+id),
      success:function(respuesta)
      {
        if(respuesta==1){
       // alert("hora no disponible");
              alertify.error('hora no disponible');
      }
      else{
        //alert("Registro exitoso!!");
        alertify.success('registro exitoso!!!'); 
      }
    }
    })

  }











//ENVIR DATOS PARA AGREGAR UNA NUEVA CITA
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
       // alert("hora no disponible");
         alertify.error('hora no disponible');

      }
       }   
  })
  }

//ENVIAR DATOS PARA GENERAR PDF DE HISTORIA CLINICA
    function pdf()
  {
    var cedul=document.getElementById('cedul').value;
    var resumen=document.getElementById('resumen').value;
    var nombre=document.getElementById('nombre').value;
    var doctor=document.getElementById('doctor').value;
     var idh=document.getElementById('idh').value;


   
   

    $.ajax({
      type:'post',
      url:'pdf.php',
      data:('cedul='+cedul+'&resumen='+resumen+'nombre='+nombre+'doctor='+doctor+'idh='+idh), 
    })

  }

</script>

</head>

<body>


<!--MENU DE NAVEGACION-->

<div class="container-fluid">

<div class="row" >

<style>
 
  div.menu {

margin-top: 30px;
 
}
</style>  

<div class="col-sm-6 col-md-2" id="menu"   style="background:#11A8D4" >

 <img id="profile-img" class="profile-img-card" src="img/sis.jpg" />
  
  
<strong><center>  <span style="color:#FFF">Bienvenido(a) </span></center><input class="form-control" type="text"  value="<?php echo$_SESSION["nombre"] ?>" disabled></strong>


<form class="form">
<div class="container col-md-offset-1 menu">




<!-- <div class="form-group">  

    <a style="color:#33CAFF" onclick="registrrse()"><h3 class=" glyphicon glyphicon-ok-circle" style="color:#FFF" ></h3>    <span  style="color:#FFF">Registro usuario</a><br>
</div>


  <div class="form-group">
    <a style="color:#33CAFF" onclick="activar()"> <h3 class=" glyphicon glyphicon-refresh" style="color:#FFF" ></h3>    <span  style="color:#FFF">Activar usuario</a><br>
  </div> -->


 <div class="form-group">
    <a style="color:#33CAFF" onclick="novedad()"> <h3 class=" glyphicon glyphicon-list-alt" style="color:#FFF" ></h3>    <span  style="color:#FFF">Consultar citas </a><br>
  </div>




 <div class="form-group">
    <a style="color:#33CAFF"  onclick="nuev()"> <h3 class=" glyphicon glyphicon-pencil" style="color:#FFF" ></h3>    <span  style="color:#FFF">Agregar citas </a><br>
  </div>



 <div class="form-group">
    <a style="color:#33CAFF" onclick="historia()" > <h3 class="glyphicon glyphicon-download-alt" style="color:#FFF" ></h3>    <span  style="color:#FFF">Incapacidades</a><br>
  </div>

 

<!-- 
 <div class="form-group">
    <a style="color:#33CAFF"  href="demo.php" > <h3 class=" glyphicon glyphicon-save-file" style="color:#FFF" ></h3>    <span  style="color:#FFF">Generar Factura </a><br>
  </div>
 -->



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

<div class="container col-sm-6 col-md-8  col-md-offset-4" id="banner">



      <div id="logo">
        <img src="img/card4.png">
      </div>
        <h1 >Servicios y promociones</h1>



<hr>


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


</div>







<!-- a qui se incluye el pie de pagina-->
  <?php
  include("footer.php");
  ?>







<!--REGISTRAR USUARIOS-->
<div class="bootstrap-iso formulario col-md-offset-3" id="formulario">
 <div class="container-fluid">
  <div class="row">
 
  



   <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <br><br>
    <form method="post" action="resgistro_adm.php">
     <div class="form-group ">
      <label class="control-label " for="name"   style="color:#11A8D4">
       Cedula
      </label>
      <input class="form-control" id="name" name="name" type="text" placeholder="Cedula"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="name1"  style="color:#11A8D4">
       Nombre
      </label>
      <input class="form-control" id="name1" name="name1" type="text" placeholder="Nombre"/>
     </div>

     <div class="form-group ">
      <label class="control-label requiredField" for="email"  style="color:#11A8D4">
       Correo
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="email" name="email" type="email" placeholder="Correo"/>
     </div>

      <div class="form-group ">
      <label class="control-label " for="select"  style="color:#11A8D4">
       rol
      </label>
      <select class="select form-control" id="select" name="select"  >
       <option value="paciente">
      paciente
       </option>
       <option value="doctor">
      doctor
       </option>
      </select>
     </div>

     <div class="form-group ">
      <label class="control-label " for="select1"  style="color:#11A8D4">
       Estado
      </label>
      <select class="select form-control" id="select1" name="select1">
       <option value="activo"  style="color:#11A8D4">
      Activo
       </option>
       <option value="inactivo" style="color:#11A8D4">
       Inactivo
       </option>
      </select>
     </div>

     <div class="form-group ">
      <label class="control-label " for="name3"  style="color:#11A8D4">
       Contraseña
      </label>
      <input class="form-control" id="name3" name="name3" type="password" placeholder="Contraseña"/>
     </div>

     <div class="form-group">
      <div>
       <input class="btn btn-success " name="submit" type="button"  style="background:#11A8D4" value="ENVIAR" onclick="javascript:reg();">
      </div>
     </div>
     </form>
   </div>
   </fieldset>
  </div>
 </div>
</div>

<!--ACTIVAR O DESACTIVAR USUARIOS-->
<div class="bootstrap-iso formulario col-md-offset-3" id="activar">
 <div class="container-fluid">
  <div class="row">
    <br><br><br>
    <fieldset>
      <center><legend><h4 class="glyphicon glyphicon-object-align-bottom"  style="color:#11A8D4"> FORMULARIO DE ACTIVACION</legend></center>
   <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <br><br>
    <form method="post" action="activar_adm.php">
     <div class="form-group ">
      <label class="control-label " for="cedila"  style="color:#11A8D4">
       Cedula
      </label>
      <input class="form-control" id="cedula" name="cedula" type="text" placeholder="Cedula"/>
     </div>

    <div class="form-group ">
      <label class="control-label " for="estado"  style="color:#11A8D4">
       Estado
      </label>
      <select class="  form-control" id="estado" name="estado">
       <option value="activo">
      Activo
       </option>
       <option value="inactivo">
      Inactivo
       </option>
      </select>
     </div>

     <div class="form-group">
      <div>
       <input class="btn btn-success " name="submit" type="button"  style="background:#11A8D4" onclick="activaradm();" value="ENVIAR">
      </div>
     </div>
    </form>
   </div>
   </fieldset>
  </div>
 </div>
</div>



<!-- Incapacidad medica -->

 <div class="bootstrap-iso formulario  col-sm-6 col-md-6  col-md-offset-4" id="historia">
 <div class="container-fluid">
  <div class="row">
   
    <fieldset>
          
     <center>
 
      <div id="logo">
        <img src="img/card4.png">
      </div>
        <h1 <h4 class="glyphicon glyphicon-globe" style="color:#11A8D4">Incapacidad Medica</h1>
</center>   
   <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <br><br>
    <form method="post" action="pdf.php">
    

      <div class="form-group ">
      <label class="control-label " for="cedul"  style="color:#11A8D4">
       Dias incapacidad
      </label>
      <input class="form-control" id="idh" name="idh" type="number" placeholder="dias"/>
     </div>


     <div class="form-group ">
      <label class="control-label " for="cedul"  style="color:#11A8D4">
       Cedula
      </label>
      <input class="form-control" id="cedul" name="cedul" type="number" placeholder="Cedula"/>
     </div>

     
      <div class="form-group ">
      <label class="control-label " for="nombre"  style="color:#11A8D4">
      Nombre Paciente:
      </label>
      <textarea class="  form-control" type="text" id="nombre" name="nombre"  placeholder="usuario" ></textarea>
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
      <label class="control-label " for="resumen"  style="color:#11A8D4">
       Resumen:
      </label>
      <textarea class="  form-control" type="text" id="resumen" name="resumen" placeholder="Diagnostico" ></textarea>
     </div>



     <div class="form-group">
      <div>
       <input class="btn btn-success " name="Generar" type="submit"  target="blank" style="background:#11A8D4" onclick="pdf();" value="Generar">

      </div>
     </div>
    </form>


    
   </div>
   </fieldset>
  </div>
 </div>
</div>











<!-- AGREGAR CITA -->
<div class="bootstrap-iso formulario col-md-offset-3" id="uno">
 <div class="container-fluid">
  <div class="row">

    <fieldset>
      
     <center>
 
      <div id="logo">
        <img src="img/card4.png">
      </div>
        <h1 <h4 class="glyphicon glyphicon-globe" style="color:#11A8D4"> Datos de Usuarios</h1>
</center>          

      <form method="post" action="nuevacita.php">
   <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
 

      <div class="form-group ">
      <label class="control-label " for="cedula1"  style="color:#11A8D4">
       Cedula del paciente:
      </label>
     <input class="form-control" type="text" name="cedula1" id="cedula1"  placeholder="Cedula" />
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
     
      <input class="form-control"  id="doctor" name="doctor" type="text" value="<?php echo$_SESSION["nombre"] ?>" disabled />



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

      <select class=" form-control" id="hora" name="hora">
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



<!--CONSULTAR CITAS -->



<div class="bootstrap-iso" id="novedades">



 <div class="container-fluid">
  <div class="row">

   <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
    <br><br>
    <?php

    $x=0;

  include "conexion_sql.php";

  $con=conectar();

  $z=$_SESSION["nombre"];

?>
<div class="container">
<?php

 //GENERAR TABLA

echo "<table class='table table-bordered table-hover'> 

<tr class='btn-default'>

    <th>ID No.</th> 
    <th><form>Fecha</form></th> 
     
    <th><form>Tipo</form></th> 
 
     <th><form>Estado</form></th> 
    
    <th><form>Hora</form></th> 
    
    <th><form>Doctor</form></th> 

          <th><form>cc paciente</form></th> 
   
    <th><form>Actualizar</form></th> 

</tr>";

//HACER CONSULTA Y RECIVIR DATOS
$entrar= $con -> query("SELECT id,fecha,tipo,estado,hora,doctor,cedula FROM citas WHERE doctor='$z' ORDER BY fecha DESC");

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

    <td><?php echo"$row[4]" ?></td>   <td> <?php echo"$row[5]" ?></td>
        <td> <?php echo"$row[6]" ?></td>


    <th>
      <form method='post' action="actestadocita.php">
      <select  name='select'  style="color:black" id="seleccion">
           <option value='realizada' >
            <b>Realizada
           </option>
           <option value='cancelada'>
            <b style="color: :#11A8D4">Cancelada
           </option>
      </select>
      


      <button type="button" value="<?php echo $x; ?>" name="act"  id="id" style="background:#33CAFF" onclick="actestado();"><b style="color:#fff"><span class="glyphicon glyphicon-ok-circle" ></span></button>



      </form>
        </th>
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






</div>





<!--CONSULTAR DATOS   id="consultar"-->


<center>
 
 
      <div id="logo">
        <img src="img/card4.png">
      </div>
        <h1 <h4 class="glyphicon glyphicon-globe" style="color:#11A8D4"> Datos de Usuarios</h1>
</center>          

      


<div class="bootstrap-iso"  id="consultar">
 <div class="container-fluid">
  <div class="row">

   <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">


    <?php

    $x=0;



 // include "conexion_sql.php";

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


      <form method='post' action="pagina_doctor.php" >
      
      <!--<label for="in">rellene todos los campos (para actualizar la informaciòn)</label>-->
      <input  type="password" name="contrasena" style="color:black" placeholder="nueva contraseña" required>

    

 
    

      
       <button type="submit" id="enviar"  name="datos" class="btn btn-default" >
          
           <span class="glyphicon glyphicon-ok-circle" ></span>  </button>




      </form>
        </th>



  </tr>


<?php

}
}



if($_POST)
{
  if(isset($_POST['datos']))
  {

  include_once("conexion_sql.php");

  $con=conectar();

  $a=$_SESSION["cedula"];
  $contra=$_POST["contrasena"];



  $con -> query("UPDATE usuarios SET contrasena='$contra' WHERE cedula='$a'");

    
  }

}






?>
   </div>
  </div>
 </div>
</div>
</div>




 <script src="js/jquery.js"></script>

    <script src="js/jquery-ui.min.js"></script>

    <script src="js/datepicker-es.js"></script>

    <script type="text/javascript">
      
    $("#datepicker").datepicker($.datepicker.regional[ "es" ] );


    </script>
</body>
</html>