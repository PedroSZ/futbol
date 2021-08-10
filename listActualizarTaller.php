<?//php include_once 'modulos/mdl_sesion.php'; ?>
</!DOCTYPE html>
<html>
    <head>
        <title>Taller</title> 
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/forms.css">
		<script language='javascript'>
		function consultar(codigo) {
            document.frm_ActualizarTalleres.micodigo.value = codigo;
			alert(codigo);
            document.frm_ActualizarTalleres.submit();
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
                 <form method="post" action="actualizarTalleres.php" name="frm_ActualizarTalleres" id="frm_ActualizarTalleres" >
					<input type="hidden" id="micodigo" name="micodigo">
  <?php 
  include_once 'clases/taller.php';
  $doc = new Taller();
  $talleres = $doc->listar();
  if($talleres){
    echo "
     <h4>Listado de Talleres</h4>
      <table border='1'><thead>
      <tr>
        <th style='text-align:center'>Id</th>
        <th style='text-align:center'>Nombre</th>
        <th style='text-align:center'>Horario</th>
        <th style='text-align:center'>Instructor</th>
		<th style='text-align:center'>Supervisor</th>
		<th style='text-align:center'>Actualizar</th>
      </tr></thead>";
    foreach ($talleres as $taller) {
      echo "<tr>
      <td>".$taller['id']."</td>
      <td>".$taller['nombre']."</td>
      <td>".$taller['horario']."</td>
	  <td>".$taller['instructor']."</td>
	  <td>".$taller['supervisor']."</td>
      <td style='text-align:center'><img width='30' height='30' src='imgs/Actualizar.png' onClick='consultar(\"".$taller['id']."\");'></td>
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