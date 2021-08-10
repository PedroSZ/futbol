<?php
//******ALTA USUARIO SUPERVISOR (RF-07)
	include_once '../clases/usuario.php';
	include_once '../clases/supervisor.php';
	if(!empty($_POST['codigo'])){
		echo "registrado";
		
		$usuario = new Usuario();
		$usuario->setCodigo($_POST['codigo']);
		$usuario->setPsw(md5($_POST['psw1']));
		$usuario->setTipo('4');
		$usuario->guardar();

		$supervisor = new Supervisor();
		$supervisor->setCodigo($_POST['codigo']);
		$supervisor->setNombre($_POST['nombre']);
		$supervisor->setApellidos($_POST['apellidos']);
		$supervisor->setEmail($_POST['email']);
		$supervisor->setTelefono($_POST['telefono']);
		
		
		$supervisor->guardar();
		header("Location:".$_SERVER['HTTP_REFERER']);//regresa al pagina que estaba
	}
?>