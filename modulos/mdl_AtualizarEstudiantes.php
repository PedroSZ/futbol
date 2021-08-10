<?php
	include_once '../clases/usuario.php';
	include_once '../clases/estudiante.php';
	$codigo = $_POST['codigo'];
	if(!empty($_POST['codigo'])){
		
		
		$usuario = new Usuario();
		$usuario->setCodigo($_POST['codigo']);
		$usuario->setPsw(md5($_POST['psw1']));
		//$usuario->setTipo($_POST['tipo']);
		$usuario-> actualizar($codigo);
		
		$est = new Estudiante();
		$est->setCodigo($_POST['codigo']);
		$est->setNombre($_POST['nombre']);
		$est->setApellidos($_POST['apellidos']);
		$est->setEmail($_POST['Carrera']);
		$est->setTelefono($_POST['grado']);
		$est->setTelefono($_POST['grupo']);
		
		$est->actualizar($codigo);
		
		header ("Location: ../listActualizarEstudiante.php");
	}
?>