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
        <link rel="stylesheet" href="css/credencial.css"/>



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
    <h4>Listado de Jugadores</h4>";
    foreach ($jugadores as $jugador) {
<<<<<<< HEAD
      echo"

      <div class='credencial'>
  <div class='heading'>

    <ul class='subtitle'>

      <li>LIGA PREMIER MASTER</li>
      <li>40 SABATINA</li>
    </ul>
  </div>

  <div class='foto'>
  <img  src='./imgs/logoMinsa.jpg'/>
  </div>

   <div class='foto2'>
    <img  src='./imgs/logoLiga.jpg'/>
  </div>

   <div class='foto3'>

    <a href='".$_SERVER["HTTP_REFERER"]."'>
      <img  src='".$jugador['foto']."'  title='".$jugador['nombre']."'/>
    </a>
  </div>


  <ul class='datos'>
      <li>
        PREMIER MASTER SABATINA 40
      </li>
      <li>
       Certifica que el equipo:
      </li>
      <li>
        Tiene registrado
      </li>
      <li>
        al Jugador: <a>".$jugador['nombre']. " ".$jugador['nombre']."</a>
      </li>
     <li>
        Fecha de nacimiento: <a>".$jugador['nacimiento']."</a>
      </li>
     <li>
        Temporada:
      </li>
     <li>
        ____De_____________de 2020:
      </li>
    </ul>

  <ul class='firma'>


<a>Firma del Jugador </a> <a> Presidente o Secretario de la liga</a>
</ul>
</div>";}

=======
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
>>>>>>> 6037d6d51faea8299e9c2c8f3e8804823bffc442
  }
  else{
    echo " <p>No hay jugadores registrados en la base de datos</p>";
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
