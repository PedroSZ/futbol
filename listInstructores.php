<?//php include_once 'modulos/mdl_sesion.php'; ?>
</!DOCTYPE html>
<html>
    <head>
        <title>Taller</title> 
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/forms.css">
        <script language='javascript'>
		function borrar(codigo) {
            document.frm_listInstructores.micodigo.value = codigo;
			alert(codigo);
            document.frm_listInstructores.submit();
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
            <article style="width: 600px; height: 350px;text-align: center; margin: 0 auto;">
           
                 <div class="datagrid">
                 <form method="post" action="modulos/mdl_delInstructores.php" name="frm_listInstructores" id="frm_listInstructores" >
					<input type="hidden" id="micodigo" name="micodigo">
                     <?php 
  include_once 'clases/instructor.php';
  $doc = new Instructor();
  $instructores = $doc->listar();
  if($instructores){
    echo "
    <h4>Listado de Instructores</h4>
      <table border='1'><thead>
      <tr>
        <th style='text-align:center'>Clave</th>
        <th style='text-align:center'>Nombre</th>
        <th style='text-align:center'>Apellidos</th>
        <th style='text-align:center'>Acciones</th>
      </tr></thead>";
    foreach ($instructores as $instructor) {
      echo "<tr>
      <td>".$instructor['clave']."</td>
      <td>".$instructor['nombre']."</td>
      <td>".$instructor['apellidos']."</td>
      <td style='text-align:center'><img width='30' height='30' src='imgs/delete.png' onClick='borrar(\"".$instructor['clave']."\");'></td>
      </tr>";
    }
    echo "</table>";
  }
  else{
    echo " <p>No hay Instructres registrados en la base de datos</p>";
  }
?>

            <br>
            <input type="button" onclick="location='menuAdmin.php'" value="Regresar" />
</form>
           </article>
        </section>
        <!-- Pie de pagina-->
            <?php include_once 'modulos/mdl_footer.php'; ?>
        
    </div>
    </body>
</html>