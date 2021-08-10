<?php
//******ALTA USUARIO INSTRUCTOR (RF-07)
	include_once '../clases/usuario.php';
	include_once '../clases/instructor.php';
	if(!empty($_POST['codigo'])){
		echo "registrado";
		
		$usuario = new Usuario();
		$usuario->setCodigo($_POST['codigo']);
		$usuario->setPsw(md5($_POST['psw1']));
		$usuario->setTipo('2');
		$usuario->guardar();

		$instructor = new Instructor();
		$instructor->setCodigo($_POST['codigo']);
		$instructor->setNombre($_POST['nombre']);
		$instructor->setApellidos($_POST['apellidos']);
		$instructor->setEmail($_POST['email']);
		$instructor->setTelefono($_POST['telefono']);
		
		
		$instructor->guardar();
		header("Location:".$_SERVER['HTTP_REFERER']);//regresa al pagina que estaba
	}
?>