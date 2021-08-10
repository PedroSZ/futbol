<?php
	if(!empty($_POST['micodigo'])){
		include_once 'clases/instructor.php';
		include_once 'clases/usuario.php';
		$codigo = $_POST['micodigo'];
		$profe = new Instructor();
		$usuario = new Usuario();
		$usuario->establecerDatos($codigo);
		$tipo = $usuario->getTipo();
		$miprofe = $profe->consultarCodigo($codigo);
	}
	else{
	
	}
?>
</!DOCTYPE html>
<html>
    <head>
        <title>SIVED EPRA</title> 
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/forms.css">
        <!-- <script src="scripts/regDocentes.js" type="text/javascript"></script> onSubmit="return validar()" -->
       
        <script language='javascript'>
		function regresar(){
			location.href='listActualizarDocente.php'
		}
        </script>
        
         <meta charset="UTF-8">
    </head>
    <body>

    <div id="contenedor">
        <!-- Encabezado de la pagina-->
            <?php include_once 'modulos/mdl_header.php'; ?>
        <!-- contenido principal -->
        <section>
            <article id="fondo" style="width: 600px; height: 350px; ">
                <P><BR></P>
                
               <form method="post" style="width: 500px;"  action="modulos/mdl_AtualizarInstructores.php" id="frm_ActualizarDocentes" >
               
  <table border="0" style="color:#FFFFFF; font-weight: 600; font-size: 17px;"> 
  <?php 
echo '
  <tr>
    <td width="50%" style="text-align: right;">
   
      <p><label>Código:</label></p>
    </td>
    <td>
      <p><input name="codigo" type="text" placeholder="Ingresa el Codigo" id ="codigo" value="'.$miprofe["clave"].'"></p>
    </td>
  </tr>
  <tr>
    <td style="text-align: right;">
      <p><label>Nombre</label></p>
      
    </td>
    <td>
      <p><input name="nombre" type="text" placeholder="Ingresa el Nombre" id ="nombre" value="'.$miprofe["nombre"].'"></p>
    </td>
  </tr>
  <tr>
    <td style="text-align: right;">
      <p><label>Apellidos:</label></p>
    </td>
    <td>
      <p><input name="apellidos" type="text" placeholder="Ingresa los Apellidos" id ="apellidos" value="'.$miprofe["apellidos"].'"></p>
	  
	   <tr>
    <td style="text-align: right;">
      <p><label>Email</label></p>
      
    </td>
    <td>
      <p><input name="nombre" type="text" placeholder="Ingresa el Nombre" id ="nombre" value="'.$miprofe["email"].'"></p>
    </td>
  </tr>
	 
	  <tr>
    <td style="text-align: right;">
      <p><label>Telefono</label></p>
      
    </td>
    <td>
      <p><input name="nombre" type="text" placeholder="Ingresa el Nombre" id ="nombre" value="'.$miprofe["telefono"].'"></p>
    </td>
  </tr>
	  
    </td>
  </tr>';?>
  <tr>
    <td style="text-align: right;">
      <p><label>Contraseña:</label></p>
    </td>
    <td>
      <p><input name="psw1" type="password" placeholder="Ingresa tu Contraseña"  id ="psw1"></p>
    </td>
  </tr>
  <tr>
    <td style="text-align: right;">
      <p><label>Confirmar Contraseña:</label></p>
    </td>
    <td>
      <p><input name="psw2" type="password" placeholder="Buelve a escribir tu Contraseña"  id ="psw2"></p>
    </td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center;">
      <BR>
      <input type="submit" value="Actualizar">
      <input type="button" value="Cancelar" onClick="limpiar()">
      <input type="button" value="Regresar" onClick="regresar()">
    </td>
  </tr>
  </table>
</form>   
            </article> 
        </section>
        <!-- Pie de pagina-->
            <?php include_once 'modulos/mdl_footer.php'; ?>
        
    </div>
    </body>
</html>