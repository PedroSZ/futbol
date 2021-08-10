<?php
	if(!empty($_POST['micodigo'])){
		include_once 'clases/taller.php';
		
		$codigo = $_POST['micodigo'];
		 $doc = new Taller();
		
		//$taller->establecerDatos($codigo);
		$mitaller = $doc->consultarCodigo($codigo);
		
	}
	else{
	
	}
?>
</!DOCTYPE html>
<html>
    <head>
        <title>Talleres</title> 
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/forms.css">
        <!-- <script src="scripts/regDocentes.js" type="text/javascript"></script> onSubmit="return validar()" -->
       
        <script language='javascript'>
		function regresar(){
			location.href='listActualizarEstudiante.php'
		}
        </script>
        
         <meta charset="UTF-8">
    </head>
    <body>

    <div id="contenedor">
        <!-- Encabezado de la pagina-->
            <?php include_once 'modulos/mdl_header.php'; ?>
        <!-- contenido principal -->
        <section>
            <article id="fondo" style="width: 600px; height:auto; ">
                <P><BR></P>
                
               <form method="post" style="width: 500px;"  action="modulos/mdl_ActualizarTalleres.php" id="frm_ActualizarTalleres" >
               
  <table border="0" style="color:#FFFFFF; font-weight: 600; font-size: 17px;"> 
  <?php 
  
echo '
  <tr>
    <td width="50%" style="text-align: right;">
   
      <p><label>Is:</label></p>
    </td>
    <td>
      <p><input name="codigo:" type="text" placeholder="Ingresa el Id" id ="codigo" value="'.$mitaller["id"].'"></p>
    </td>
  </tr>
  <tr>
    <td style="text-align: right;">
      <p><label>Nombre</label></p>
      
    </td>
    <td>
      <p><input name="nombre" type="text" placeholder="Ingresa el Nombre" id ="nombre" value="'.$mitaller["nombre"].'"></p>
    </td>
  </tr>
  <tr>
    <td style="text-align: right;">
      <p><label>Area:</label></p>
    </td>
    <td>
      <p><input name="apellidos" type="text" placeholder="Ingresa el Lugar" id ="apellidos" value="'.$mitaller["area"].'"></p>
    </td>
  </tr>
  <tr>
    <td style="text-align: right;">
      <p><label>Horario:</label></p>
    </td>
    <td>
      <p><input name="email" type="text" placeholder="Ingresa el Horario" id ="email" value="'.$mitaller["horario"].'"></p>
    </td>
  </tr>
  </tr>';?>
  
  <tr>
    <td style="text-align: right;">
      <p><label>Instructor:</label></p>
    </td>
    <td>
       <p><select name="instructor" type="text" id ="instructor"> 
     <option value="listarInstructor()">Seleccione:</option>
     
     
     <?php 
  include_once 'clases/instructor.php';
  $doc = new Instructor();
  $instructores = $doc->listar();
  if($instructores){ 
    foreach ($instructores as $instructor) {
      echo "<option value='".$instructor['clave']."'>".$instructor['nombre']." ".$instructor['apellidos']."</option>";
	  
    }
  	}
 	 else{
   		 echo "No ha registrado Supervisores";
  		}
	?>
     
     
     
     
     </p>
      
      
    </td>
  </tr>
  
   <tr>
    <td style="text-align: right;">
      <p><label>Supervisor:</label></p>
    </td>
    <td>
     
      <p><select name="supervisor" type="text" id ="supervisor"> 
     <option value="listarSupervisor()">Seleccione:</option>
     
     
      <?php 
  include_once 'clases/supervisor.php';
  $doc = new Supervisor();
  $supervisores = $doc->listar();
  if($supervisores){ 
    foreach ($supervisores as $supervisor) {
      echo "<option value='".$supervisor['rfc']."'>".$supervisor['nombre']." ".$supervisor['apellidos']."</option>";
	  
    }
  	}
 	 else{
   		 echo "No ha registrado Supervisores";
  		}
	?>
     
     
     
     
     </p>
      
      
      
      
    </td>
  </tr>
  
  <tr>
    <td colspan="2" style="text-align: center;">
      <BR>
      <input type="submit" value="Actualizar">
      <input type="button" value="Cancelar" onClick="limpiar()">
      <input type="button" value="Regresar" onClick="regresar()">
    </td>
  </tr>
  </table>
</form>   
            </article> 
        </section>
        <!-- Pie de pagina-->
            <?php include_once 'modulos/mdl_footer.php'; ?>
        
    </div>
    </body>
</html>