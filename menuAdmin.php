<?php
	/********************** VALIDAMOS QUE ESTA PAGINA SEA PARA LA SESION INICIADA ****************/
    include_once 'clases/usuario.php';
    include_once 'clases/sesion.php';
    $userSession = new Sesion();
	
    if(isset($_SESSION['user'])){
        $user = new Usuario();
        $user->establecerDatos($userSession->getCurrentUser());
        $tipo = $user->getTipo();
		//mensaje de que no tiene privilegios
        if($tipo <> 1) header('location: index.php');
    }
    else{
        $userSession->closeSession();
    }
	/**********************************************************************************************/
?>


</!DOCTYPE html>
<html>
    <head>
        <title>Talleres</title> 
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
        <li class="has-sub"><a title="" href="">Inicio</a>
        <li class="has-sub"><a title="" href="">Estudiantes</a>
        	 <ul>
                <li class="has-sub"><a title="" href="#">Opciones</a>
                    <ul>
                        <li><a title="" href="regEstudiantes.php">Registrar</a></li> 
                        <li><a title="" href="listActualizarEstudiante.php">Actualizar</a></li>  
                        <li><a title="" href="listEstudiantes.php">Eliminar</a></li>  
                    </ul>
                 </li>
        	 </ul>
             
        </li>
        <li class="has-sub"><a title="" href="">Instructores</a>
        	<ul>
                <li class="has-sub"><a title="" href="#">Opciones</a>
                    <ul>
                        <li><a title="" href="regInstructores.php">Registrar</a></li>  
                        <li><a title="" href="listActualizarInstructor.php">Actualizar</a></li>  
                        <li><a title="" href="listInstructores.php">Eliminar</a></li>  
                    </ul>
                 </li>
        	 </ul>
             
        </li>
        
         <li class="has-sub"><a title="" href="">Supervisores</a>
        		<ul>
                <li class="has-sub"><a title="" href="#">Opciones</a>
                    <ul>
                        <li><a title="" href="regSupervisores.php">Registrar</a></li>  
                        <li><a title="" href="listActualizarSupervisor.php">Actualizar</a></li>  
                        <li><a title="" href="listSupervisores.php">Eliminar</a></li>  
                    </ul>
                 </li>
        	 </ul>
             
        </li>
        
        <li class="has-sub"><a title="" href="">Talleres</a>
        		<ul>
                <li class="has-sub"><a title="" href="#">Opciones</a>
                    <ul>
                        <li><a title="" href="regTalleres.php">Registrar</a></li>  
                        <li><a title="" href="listActualizarTaller.php">Actualizar</a></li>
                        <li><a title="" href="listTalleres.php">Eliminar</a></li>  
                    </ul>
                 </li>
        	 </ul>
             
        </li>
        <li class="has-sub"><a title="" href="modulos/mdl_logout.php">Cerrar Sesión</a>
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
