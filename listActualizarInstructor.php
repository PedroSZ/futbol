<?//php include_once 'modulos/mdl_sesion.php'; ?>
</!DOCTYPE html>
<html>
    <head>
        <title>Taller</title> 
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/forms.css">
		<script language='javascript'>
		function consultar(codigo) {
            document.frm_ActualizarInstructores.micodigo.value = codigo;
			alert(codigo);
            document.frm_ActualizarInstructores.submit();
		}
		function regresar(){
			location.href='index.php'
		}
        </script>
        <meta charset="UTF-8">
        
    </head>
    <body>

    <div id="contenedor">
        <!-- Encabezado de la pagina-->
            <?php include_once 'modulos/mdl_header.php'; ?>
        <!-- contenido principal -->
        <section style="text-align: center; margin: 0 auto;">
            <article style="width: 600px; height:auto;text-align: center; margin: 0 auto;">
               
                 <div class="datagrid">
                 <form method="post" action="actualizarInstructores.php" name="frm_ActualizarInstructores" id="frm_ActualizarInstructores" >
					<input type="hidden" id="micodigo" name="micodigo">
  <?php 
  include_once 'clases/instructor.php';
  $ins = new Instructor();
  $instructores = $ins->listar();
  if($instructores){
    echo "
    <h4>Listado de Instructores</h4>
      <table border='1'><thead>
      <tr>
        <th style='text-align:center'>Clave</th>
        <th style='text-align:center'>Nombre</th>
        <th style='text-align:center'>Apellidos</th>
		<th style='text-align:center'>Email</th>
		<th style='text-align:center'>Telefono</th>
		<th style='text-align:center'>Editar</th>
      </tr></thead>";
    foreach ($instructores as $instructor) {
      echo "<tr>
      <td>".$instructor['clave']."</td>
      <td>".$instructor['nombre']."</td>
      <td>".$instructor['apellidos']."</td>
	  <td>".$instructor['email']."</td>
	  <td>".$instructor['telefono']."</td>
	 
      <td style='text-align:center'><img width='30' height='30' src='imgs/Actualizar.png' onClick='consultar(\"".$instructor['clave']."\");'></td>
      </tr>";
    }
    echo "</table>";
  }
  else{
    echo " <p>No hay instructores registrados en la base de datos</p>";
  }
  
  
?>
</div>
<br>

<input type="button" onclick="location='menuAdmin.php'" value="Regresar" />
</form>  
            <br>
  

           </article>
        </section>
        <!-- Pie de pagina-->
            <?php include_once 'modulos/mdl_footer.php'; ?>
        
    </div>
    </body>
</html>