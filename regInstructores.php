<?//php include_once 'modulos/mdl_sesion.php'; ?>
</!DOCTYPE html>
<html>
<!-- *****ALTA USUARIO ESTUDIANTE (RF-07) -->
    <head>
        <title>Taller</title> 
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/forms.css">
        <script src="scripts/regEstudiantes.js" type="text/javascript"></script>
        <meta charset="UTF-8">   
    </head>
    <body>

    <div id="contenedor">
        <!-- Encabezado de la pagina-->
            <?php include_once 'modulos/mdl_header.php'; ?>
        <!-- contenido principal -->
        <section>
            <article id="fondo" style="width: 600px; height:auto; ">
                <P><BR></P>
               <?php include_once 'forms/frm_regInstructores.php'; ?>    
            </article> 
        </section>
        <!-- Pie de pagina-->
            <?php include_once 'modulos/mdl_footer.php'; ?>
        
    </div>
    </body>
</html>