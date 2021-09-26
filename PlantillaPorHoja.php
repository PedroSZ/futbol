<?php
	/********************** VALIDAMOS QUE ESTA PAGINA SEA PARA LA SESION INICIADA ****************/
  /*  include_once 'clases/usuario.php';
    include_once 'clases/sesion.php';
    $userSession = new Sesion();

    if(isset($_SESSION['user'])){
        $user = new Usuario();
        $user->establecerDatos($userSession->getCurrentUser());
        $tipo = $user->getTipo();
		$codigo = $user->getCodigo();
        if($tipo <> 1) header('location: index.php');;
    }
    else{
        $userSession->closeSession();
    }*/
	/**********************************************************************************************/
?>
</!DOCTYPE html>
<html>
    <head>
        <title>Jugadores</title>
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/forms.css">
        <meta name=”viewport” content=”width=device-width, user-scalable=no”>
        <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap-grid.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




        <script language='javascript'>

		function quitar(id) {
            document.PlantillaPorHoja.micodigo.value = id;
			alert(id);
            document.PlantillaPorHoja.submit();
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
            <article style="width:auto; height:auto;text-align: center; margin: 0 auto;">

                 <div class="datagrid">
                 <form method="post" action="PlantillaPorHoja.php" name="frm_PlantillaPorHoja" id="frm_PlantillaPorHoja" >
					<input type="hidden" id="micodigo" name="micodigo">
  <?php
  include_once 'clases/jugador.php';
  $jug = new Jugador();
  $jugadores = $jug->listar();
  if($jugadores){
    echo "
    <h4>Listado de Jugadores</h4>
      <table border='1'><thead>
      <tr>
        <th style='text-align:center'>ID</th>
        <th style='text-align:center'>Foto</th>
        <th style='text-align:center'>Nombre</th>
		    <th style='text-align:center'>Apellidos</th>
        <th style='text-align:center'>Localidad</th>
		    <th style='text-align:center'>Nacimiento</th>
        <th style='text-align:center'>Estatus</th>
        <th style='text-align:center'>Equipo</th>
        <th style='text-align:center'>Opciones</th>
      </tr></thead>";
    foreach ($jugadores as $jugador) {
      echo "<tr>
      <td>".$jugador['id']."</td>
      <td>
            <a href='".$_SERVER["HTTP_REFERER"]."'>
              <img  src='".$jugador['foto']."' width='120' height='120' title='".$jugador['nombre']."'/>
            </a>
      <td>
      <td>".$jugador['nombre']."</td>
	    <td>".$jugador['apellidos']."</td>
	    <td>".$jugador['localidad']."</td>
      <td>".$jugador['nacimiento']."</td>
      <td>".$jugador['estatus']."</td>
      <td>".$jugador['equipo_id']."</td>
      <td style='text-align:center'><img width='30' height='30' src='imgs/delete.png' onClick='quitar(\"".$jugador['id']."\");'></td>
      </tr>";
    }
    echo "</table>";
  }
  else{
    echo " <p>No hay estudiantes registrados en la base de datos</p>";
  }


?>
</div>
<br>

<input type="button" onClick="location='menuAdmin.php'" value="Regresar" />
</form>
            <br>


           </article>
        </section>
        <!-- Pie de pagina-->
            <?php include_once 'modulos/mdl_footer.php'; ?>

    </div>
    </body>
</html>
