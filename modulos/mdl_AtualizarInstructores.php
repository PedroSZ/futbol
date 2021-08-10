<?php
	include_once '../clases/usuario.php';
	include_once '../clases/instructor.php';
	$codigo = $_POST['codigo'];
	if(!empty($_POST['codigo'])){
		
		
		$usuario = new Usuario();
		$usuario->setCodigo($_POST['codigo']);
		$usuario->setPsw(md5($_POST['psw1']));
		$usuario->setTipo('2');
		$usuario-> actualizar($codigo);
		
		$profe = new Docente();
		$profe->setCodigo($_POST['codigo']);
		$profe->setNombre($_POST['nombre']);
		$profe->setApellidos($_POST['apellidos']);
		$profe->setEmail($_POST['email']);
		$profe->setTelefono($_POST['telefono']);
		$profe-> actualizar($codigo);
		
		header ("Location: ../listActualizarDocente.php");
	}
?>