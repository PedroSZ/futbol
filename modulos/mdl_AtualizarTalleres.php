<?php
	//include_once '../clases/usuario.php';
	include_once '../clases/taller.php';
	$codigo = $_POST['codigo'];
	if(!empty($_POST['codigo'])){
		
		
		/*$usuario = new Usuario();
		$usuario->setCodigo($_POST['codigo']);
		$usuario->setPsw(md5($_POST['psw1']));
		$usuario-> actualizar($codigo);*/
		
		$taller = new Taller();
		$taller->setId($_POST['id']);
		$taller->setNombre($_POST['nombre']);
		$taller->setArea($_POST['area']);
		$taller->setHorario($_POST['horario']);
		$taller->setInstructor($_POST['instructor']);
		$taller->setSupervisor($_POST['supervisor']);
		
		$est->actualizar($codigo);
		
		header ("Location: ../listActualizarEstudiante.php");
	}
?>