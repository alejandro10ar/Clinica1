<?php
// generar incapacida medica texto plano

date_default_timezone_set('UTC');
 $cedula=$_POST["cedul"];
 $resumen=$_POST["resumen"];
 $nombre=$_POST["nombre"];
 $doctor=$_POST["doctor"];
 $idhistoria=$_POST["idh"];

	$time = time();

	$f= date("d-m-Y", $time);

	$t= date('H:i:s',$time-61200);



 $html=" <meta  name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>  


<!-- Bootstrap CSS  -->


<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

<link rel='stylesheet' href='css/bootstrap.min.css'>



<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
 
<script src='http://code.jquery.com/ui/1.10.1/jquery-ui.js'></script>
<link rel='stylesheet' href='http://code.jquery.com/ui/1.10.1/themes/eggplant/jquery-ui.css'/>






 


<ol class='breadcrumb'>
  <li><a href='http://localhost:81/proyecto2%20clinica3%20terminado/' style='color:#11A8D4' >Incapacidad Medica    </a></li>
  

</ol>



       



 <table class='table table-bordered table-hover'> 

 <tr class='btn-default'>

     <th>Cedula</th> 
     <th>Fecha</th>
     <th>nombre Paciente </th>
   
     
 

 </tr>
  
   <tr style='backgroun-color:#00C98F' >

     <td>$cedula</td>
     <td>$f $t</td>
     <td>$nombre</td>
   

 

    
 	</tr>






</table>





<table class='table table-bordered table-hover'> 

 <tr class='btn-default'>

     <th><form>Doctor</form></th> 
     <th>Dias Incapacidad</th> 
     <th>Resumen</th> 
    
 </tr>
  
   <tr style='backgroun-color:#00C98F' >
     <td>$doctor</td>
     <td> $idhistoria</td>
     <td>$resumen</td>
     

    

    
  </tr>




</table>


<br><br>

<br><br>





<hr align='left' noshade='noshade' size='2' width='15%' />

 <footer>
    El archivo se creó en una computadora y es válida sin la firma y el sello.
 </footer>


<br><br>

     
        <div id='company'>
          <div class='arrow back'><div class='inner-arrow'>CONSULTORIOS ODONTOOGICOS <span></span></div></div>
          <div class='arrow back'><div class='inner-arrow'><span>Armenia - Quindio </span></div></div>

          <div class='arrow back'><div class='inner-arrow'>(036) 753-6122 <span>TEL</span></div></div>
          <div class='arrow back'><div class='inner-arrow'><a href='mailto:company@example.com'>companyodontologia@example.com</a> <span>@</span></div></div>
        </div>

";






require_once('pdf/mpdf.php');

$mpdf = new mPDF('c','A4');

$mpdf -> writeHTML($html);

$mpdf -> Output($cedula,'D');






 


  
?>
 


