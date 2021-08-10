<?//php include_once 'modulos/mdl_sesion.php'; ?>
</!DOCTYPE html>
<html>
    <head>
        <title>Taller</title> 
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/forms.css">
		<script language='javascript'>
		function consultar(codigo) {
            document.frm_ActualizarSupervisores.micodigo.value = codigo;
			alert(codigo);
            document.frm_ActualizarSupervisores.submit();
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
                 <form method="post" action="actualizarSupervisores.php" name="frm_ActualizarSupervisores" id="frm_ActualizarSupervisores" >
					<input type="hidden" id="micodigo" name="micodigo">
  <?php 
  include_once 'clases/supervisor.php';
  $sup = new Supervisor();
  $supervisores = $sup->listar();
  if($supervisores){
    echo "
    <h4>Listado de Supervisores</h4>
      <table border='1'><thead>
      <tr>
        <th style='text-align:center'>CURP</th>
        <th style='text-align:center'>Nombre</th>
        <th style='text-align:center'>Apellidos</th>
		<th style='text-align:center'>Email</th>
		<th style='text-align:center'>Telefono</th>
		<th style='text-align:center'>Editar</th>
      </tr></thead>";
    foreach ($supervisores as $supervisor) {
      echo "<tr>
      <td>".$supervisor['rfc']."</td>
      <td>".$supervisor['nombre']."</td>
      <td>".$supervisor['apellidos']."</td>
	  <td>".$supervisor['email']."</td>
	  <td>".$supervisor['telefono']."</td>
	 
      <td style='text-align:center'><img width='30' height='30' src='imgs/Actualizar.png' onClick='consultar(\"".$supervisor['rfc']."\");'></td>
      </tr>";
    }
    echo "</table>";
  }
  else{
    echo " <p>No hay supervisores registrados en la base de datos</p>";
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