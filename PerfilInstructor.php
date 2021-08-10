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
        if($tipo <> 2) header('location: index.php');;
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
		 
		 
		 include_once 'clases/instructor.php';
  $doc = new Instructor();
  $instructores = $doc->consultarCodigo($codigo);
 
    echo "
    <h4>Perfil del Instructor</h4>
      <table border='1'><thead>
      <tr>
        <th style='text-align:center'>Clave</th>
        <th style='text-align:center'>Nombre</th>
        <th style='text-align:center'>Apellidos</th>
		<th style='text-align:center'>Email</th>
		<th style='text-align:center'>Telefono</th>
        
		
      </tr></thead>";
    
      echo "<tr>
      <td>".$instructores['clave']."</td>
      <td>".$instructores['nombre']."</td>
      <td>".$instructores['apellidos']."</td>
	  <td>".$instructores['email']."</td>
	  <td>".$instructores['telefono']."</td>
	 
      </tr>";
    
    echo "</table>";
  
   echo "
    <h4>Taller Impartido</h4>
      <table border='1'><thead>
      <tr>
        <th style='text-align:center'>CURP</th>
		<td>".$instructores['clave']."</td>
		</tr>
		<tr>
        <th style='text-align:center'>Nombre</th>
		 <td>".$instructores['nombre']."</td>
		 </tr>
		<tr>
        <th style='text-align:center'>Apellidos</th>
		<td>".$instructores['apellidos']."</td>
		</tr>
		<tr>
		<th style='text-align:center'>Carrera</th>
		 <td>".$instructores['email']."</td>
		 </tr>
		<tr>
		<th style='text-align:center'>Grago</th>
		 <td>".$instructores['telefono']."</td>
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