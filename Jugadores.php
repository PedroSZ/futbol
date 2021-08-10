<?php
	/********************** VALIDAMOS QUE ESTA PAGINA SEA PARA LA SESION INICIADA ****************/
    /*include_once 'clases/usuario.php';
    include_once 'clases/sesion.php';
    $userSession = new Sesion();

    if(isset($_SESSION['user'])){
        $user = new Usuario();
        $user->establecerDatos($userSession->getCurrentUser());
        $tipo = $user->getTipo();
		//mensaje de que no tiene privilegios
        if($tipo <> 3) header('location: index.php');;
    }
    else{
        $userSession->closeSession();
    }*/
	/**********************************************************************************************/
?>

</!DOCTYPE html>
<html>
    <head>
        <title>Liga-bit</title>
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/menu.css">


    </head>
    <body>

    <div id="contenedor">
        <!-- Encabezado de la pagina-->
            <?php include_once 'modulos/mdl_header.php'; ?>
        <!-- Menu para moviles
        <nav></nav>-->

        <!-- Menu lateral-->
        <aside id='cssmenu'>

       <div id="menu">
    <ul>
        <li class="has-sub"><a title="" href="">Plantillas</a>
        <li class="has-sub"><a title="" href="PlantillaPorHoja.php">Por Hoja</a>
        </li>
        <!--<li class="has-sub"><a title="" href="">Consultar Talleres</a></li> -->
        <li class="has-sub"><a title="" href="">Por equipo</a>
        </li>

        <li class="has-sub"><a title="" href="modulos/mdl_logout.php">Salir</a>

    </ul>
</div>




        </aside>

        <!-- contenido principal -->
        <section>
            <article><?php if(isset($message)) echo $message; ?></article>
        </section>

        <!-- Pie de pagina-->
            <?php include_once 'modulos/mdl_footer.php'; ?>
    </div>


    </body>
</html>
