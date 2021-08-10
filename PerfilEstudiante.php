<?php
	/********************** VALIDAMOS QUE ESTA PAGINA SEA PARA LA SESION INICIADA ****************/
    include_once 'clases/usuario.php';
    include_once 'clases/sesion.php';
    $userSession = new Sesion();
	
    if(isset($_SESSION['user'])){
        $user = new Usuario();
        $user->establecerDatos($userSession->getCurrentUser());
        $tipo = $user->getTipo();
		$codigo = $user->getCodigo();
		//echo($codigo);
		//mensaje de que no tiene privilegios
        if($tipo <> 3) header('location: index.php');;
    }
    else{
        $userSession->closeSession();
    }
	/**********************************************************************************************/
?>
</!DOCTYPE html>
<html>
    <head>
        <title>Taller</title> 
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/forms.css">
        <meta charset="UTF-8">
        
    </head>
    <body>

    <div id="contenedor">
        <!-- Encabezado de la pagina-->
            <?php include_once 'modulos/mdl_header.php'; ?>
        <!-- contenido principal -->
        <section style="text-align: center; margin: 0 auto;">
            <article style="width: 600px; height: 350px;text-align: center; margin: 0 auto;">
    <div class="datagrid">         
            <?php /* 
  include_once 'clases/estudiante.php';
  
  $doc = new Estudiante();
 
  $alumnos = $doc->consultarCodigo($codigo);
      echo($alumnos['curp']);
	  echo($alumnos['nombre']);
	   echo($alumnos['apellidos']);
	    echo($alumnos['grado']);
		 echo($alumnos['grupo']); 
		 */
		 
		 
		 include_once 'clases/estudiante.php';
  $doc = new Estudiante();
  $alumnos = $doc->consultarCodigo($codigo);
 
    echo "
    <h4>Perfil del Estudiantes</h4>
      <table border='1'><thead>
      <tr>
        <th style='text-align:center'>CURP</th>
        <th style='text-align:center'>Nombre</th>
        <th style='text-align:center'>Apellidos</th>
		<th style='text-align:center'>Carrera</th>
		<th style='text-align:center'>Grago</th>
        <th style='text-align:center'>Grupo</th>
		
      </tr></thead>";
    
      echo "<tr>
      <td>".$alumnos['curp']."</td>
      <td>".$alumnos['nombre']."</td>
      <td>".$alumnos['apellidos']."</td>
	  <td>".$alumnos['carrera']."</td>
	  <td>".$alumnos['grado']."</td>
	  <td>".$alumnos['grupo']."</td>
      </tr>";
    
    echo "</table>";
  
   echo "
    <h4>Taller Inscrito</h4>
      <table border='1'><thead>
      <tr>
        <th style='text-align:center'>CURP</th>
		<td>".$alumnos['curp']."</td>
		</tr>
		<tr>
        <th style='text-align:center'>Nombre</th>
		 <td>".$alumnos['nombre']."</td>
		 </tr>
		<tr>
        <th style='text-align:center'>Apellidos</th>
		<td>".$alumnos['apellidos']."</td>
		</tr>
		<tr>
		<th style='text-align:center'>Carrera</th>
		 <td>".$alumnos['carrera']."</td>
		 </tr>
		<tr>
		<th style='text-align:center'>Grago</th>
		 <td>".$alumnos['grado']."</td>
		 </tr>
		<tr>
        <th style='text-align:center'>Grupo</th>
		 <td>".$alumnos['grupo']."</td>
		 </tr>
		<tr></thead>";
    echo "</table>";
  
		 
  ?>
  
  
            </div> 
            
           
           </article>
            <input type="button" onClick="location='menuAdmin.php'" value="Regresar" />    
        </section>
        <!-- Pie de pagina-->
            <?php include_once 'modulos/mdl_footer.php'; ?>
        
    </div>
    </body>
</html>