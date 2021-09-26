</!DOCTYPE html>
<html>
    <head>
        <title>Liga-bit</title>
      <link rel="stylesheet" href="css/main.css" />



        <meta name=”viewport” content=”width=device-width, user-scalable=no”>
        <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">


        <script src="Scripts/menu.js"></script>
        <link rel="stylesheet" href="css/menu.css" />


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
        <li class="has-sub"><a title="" href="frm_regJugadores.php">Agregar Jugador</a>
        <li class="has-sub"><a title="" href="frm_regEquipo.php">Agregar Equipo</a>

        <li class="has-sub"><a title="" href="PlantillaPorHoja.php">Platill Por Hoja</a>
        </li>
        <!--<li class="has-sub"><a title="" href="">Consultar Talleres</a></li> -->
        <li class="has-sub"><a title="" href="PlantillaPorEquipo.php">Plantilla Por Equipo</a>
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
