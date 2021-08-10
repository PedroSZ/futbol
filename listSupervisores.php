<?//php include_once 'modulos/mdl_sesion.php'; ?>
</!DOCTYPE html>
<html>
    <head>
        <title>Taller</title> 
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/forms.css">
        <script language='javascript'>
		function borrar(codigo) {
            document.frm_listSupervisores.micodigo.value = codigo;
			alert(codigo);
            document.frm_listSupervisores.submit();
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
                 <form method="post" action="modulos/mdl_delSupervisores.php" name="frm_listSupervisores" id="frm_listSupervisores" >
					<input type="hidden" id="micodigo" name="micodigo">
                     <?php 
  include_once 'clases/supervisor.php';
  $doc = new Supervisor();
  $supervisores = $doc->listar();
  if($supervisores){
    echo "
    <h4>Listado de Instructores</h4>
      <table border='1'><thead>
      <tr>
        <th style='text-align:center'>RFC</th>
        <th style='text-align:center'>Nombre</th>
        <th style='text-align:center'>Apellidos</th>
        <th style='text-align:center'>Acciones</th>
      </tr></thead>";
    foreach ($supervisores as $supervisor) {
      echo "<tr>
      <td>".$supervisor['rfc']."</td>
      <td>".$supervisor['nombre']."</td>
      <td>".$supervisor['apellidos']."</td>
      <td style='text-align:center'><img width='30' height='30' src='imgs/delete.png' onClick='borrar(\"".$supervisor['rfc']."\");'></td>
      </tr>";
    }
    echo "</table>";
  }
  else{
    echo " <p>No hay Supervisores registrados en la base de datos</p>";
  }
?>

            <br>
            <input type="button" value="Regresar" onClick="regresar()">
</form>
           </article>
        </section>
        <!-- Pie de pagina-->
            <?php include_once 'modulos/mdl_footer.php'; ?>
        
    </div>
    </body>
</html>