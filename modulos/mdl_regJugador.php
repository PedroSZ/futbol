<?php
//******ALTA USUARIO ESTUDIANTE (RF-07)
	include_once '../clases/usuario.php';
	include_once '../clases/jugador.php';
	if(!empty($_POST['id'])){
		$persona = new Jugador();
		$persona->setId($_POST['id']);
		$persona->setNombre($_POST['nombre']);
		$persona->setApellidos($_POST['apellidos']);
		$persona->setLocalidad($_POST['localidad']);
		$persona->setNacimiento($_POST['nacimiento']);
		$persona->setEstatus($_POST['estatus']);
		$persona->setEquipo($_POST['equipo']);
		$img = $_FILES['imgFoto']['name'];
		$imgTmp = $_FILES['imgFoto']['tmp_name'];
		$tipo = $_FILES['imgFoto']['type'];
		$tam = $_FILES['imgFoto']['size'];
		$ext = $imgExt = strtolower(pathinfo($img, PATHINFO_EXTENSION));
		$allowExt  = array('jpeg', 'jpg', 'png', 'gif');
		$directorio = $_SERVER['DOCUMENT_ROOT'].'/Futbol/fotos/';
		$nombre = $persona->getId().".".$ext;

		if (($img == !NULL) && ($_FILES['imgFoto']['size'] <= 200000))
		{
		   //indicamos los formatos que permitimos subir a nuestro servidor
		   if (in_array($imgExt, $allowExt))
		   {
		      //echo "Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente";
		      move_uploaded_file($imgTmp,$directorio.$nombre);
					$persona->setFoto($nombre);
					$persona->guardar();
		    }
		    else
		    {
		       //si no cumple con el formato
		       echo "No se puede subir una imagen con ese formato ";
		    }
		}
		else
		{
		   //si existe la variable pero se pasa del tamaño permitido
		   if($img == !NULL) echo "La imagen es demasiado grande ";
		}
				//$est->actualizar($codigo);
				//header("Refresh: 5; Location:".$_SERVER['HTTP_REFERER']);//regresa al pagina que estaba
				//header ("Location: ../listActualizarEstudiante.php");
			}
?>
