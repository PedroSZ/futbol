<?php /*
PAGINA ACTUALIZADA: PARTE DEL ENCABEZADO, LOGOTIPO Y PIE DE PAGINA
*/
?>
<?php include_once 'modulos/mdl_login.php'; ?>
</!DOCTYPE html>
<html><!-- ******* AUTENTICAR ADMINISTRADOR, DOCENTE, REVIZOR Y ESTUDIANTE (RF-01)(RF-02)(RF-03) -->
    <head>
        <title>Título</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/menu.css">
        <meta charset="UTF-8">
    </head>
    <body>

    <div id="contenedor">
        <!-- Encabezado de la pagina-->
        <header style="text-align: center;">
          <a href="#">
            <img id ="logotipo" src="imgs/fb_Logo.png" style=" height: 170px;"/>
          </a>
          <?php
            if(isset($_SESSION['user'])) echo "->".$_SESSION['user'];
          ?>
          <h3>Sistema Virtual Liga de Futbol.</h3>
        </header>
        <!-- contenido principal -->
        <section id="contenidoLogin">
            <article style="text-align: center;">
               	<form action="login.php" method="POST" style="margin: 0 auto; width: 200px; height: 270px;">
                    <h2>Iniciar sesión</h2>
                    <p>Usuario: <br>
                    <input type="text" name="codigo"></p>
                    <p>Contraseña: <br>
                    <input type="password" name="password"></p>
                    <p class="center"><input type="submit" value="Iniciar Sesión"></p>
                </form>
                <p style="color: RED;">
                    <?php if(isset($alert)) echo $alert; ?>
                </p>
            </article>
        </section>
        <!-- Pie de pagina-->
        <footer style="text-align: center;">
          <p>Liga Intercomunidades de Ameca<br>
              Ameca, Jal. <br>
          <b>Tels:</p>
        </footer>
    </div>
    </body>
</html>
