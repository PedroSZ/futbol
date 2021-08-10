<?php
	include_once '../clases/usuario.php';
	include_once '../clases/supervisor.php';
	$codigo = $_POST['codigo'];
	if(!empty($_POST['codigo'])){
		
		
		$usuario = new Usuario();
		$usuario->setCodigo($_POST['codigo']);
		$usuario->setPsw(md5($_POST['psw1']));
		//$usuario->setTipo($_POST['tipo']);
		$usuario-> actualizar($codigo);
		
		$est = new Supervisor();
		$est->setRfc($_POST['rfc']);
		$est->setNombre($_POST['nombre']);
		$est->setApellidos($_POST['apellidos']);
		$est->setEmail($_POST['email']);
		$est->setTelefono($_POST['telefono']);
		$est->actualizar($codigo);
		
		header ("Location: ../listActualizarInstructor.php");
	}
?>