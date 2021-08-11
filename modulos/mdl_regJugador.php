<?php
//******ALTA USUARIO ESTUDIANTE (RF-07)
	include_once '../clases/usuario.php';
	include_once '../clases/jugador.php';
	if(!empty($_POST['id'])){

		$persona = new Jugador();
		$persona->setNombre($_POST['nombre']);
		$persona->setApellidos($_POST['apellidos']);
		$persona->setCarrera($_POST['foto']);
		$persona->setGrado($_POST['localidad']);
		$persona->setGrupo($_POST['nacimiento']);
		$persona->setGrupo($_POST['estatus']);
		$persona->setGrupo($_POST['equipo']);

		$imgName = $_FILES['image']['name'];
		$imgTmp = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];
		$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
		$allowExt  = array('jpeg', 'jpg', 'png', 'gif');
		$userPic = persona->getId().'.'.$imgExt;
		if(in_array($imgExt, $allowExt)){
			if($imgSize < 5000000){
				move_uploaded_file($imgTmp ,$upload_dir.$userPic);
			}else{
					$errorMsg = 'Image too large';
				}
		}else{
				$errorMsg = 'Please select a valid image';
			}
		}

		$persona->guardar();
		//$est->actualizar($codigo);
		header("Location:".$_SERVER['HTTP_REFERER']);//regresa al pagina que estaba
		//header ("Location: ../listActualizarEstudiante.php");
	}
?>
