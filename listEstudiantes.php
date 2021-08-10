<?//php include_once 'modulos/mdl_sesion.php'; ?>
</!DOCTYPE html>
<html>
    <head>
        <title>Taller</title> 
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/forms.css">
        <script language='javascript'>
		function borrar(codigo) {
            document.frm_listEstudiantes.micodigo.value = codigo;
			alert(codigo);
            document.frm_listEstudiantes.submit();
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
            <?php //include_once 'forms/frm_listEstudiantes.php'; ?>
                 <div class="datagrid">
                 <form method="post" action="modulos/mdl_delEstudiantes.php" name="frm_listEstudiantes" id="frm_listEstudiantes" >
					<input type="hidden" id="micodigo" name="micodigo">
                     <?php 
  include_once 'clases/estudiante.php';
  $doc = new Estudiante();
  $alumnos = $doc->listar();
  if($alumnos){
    echo "
    <h4>Listado de Estudiantes</h4>
      <table border='1'><thead>
      <tr>
        <th style='text-align:center'>CURP</th>
        <th style='text-align:center'>Nombre</th>
        <th style='text-align:center'>Apellidos</th>
        <th style='text-align:center'>Acciones</th>
      </tr></thead>";
    foreach ($alumnos as $alumno) {
      echo "<tr>
      <td>".$alumno['curp']."</td>
      <td>".$alumno['nombre']."</td>
      <td>".$alumno['apellidos']."</td>
      <td style='text-align:center'><img width='30' height='30' src='imgs/delete.png' onClick='borrar(\"".$alumno['curp']."\");'></td>
      </tr>";
    }
    echo "</table>";
  }
  else{
    echo " <p>No hay Estudiantes registrados en la base de datos</p>";
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