<?php
//******ALTA TALLER
	include_once '../clases/taller.php';
	//include_once '../clases/.php';
	if(!empty($_POST['id'])){
		echo "registrado";

		$taller = new Taller();
		$taller->setId($_POST['id']);
		$taller->setNombre($_POST['nombre']);
		$taller->setArea($_POST['area']);
		$taller->setHorario($_POST['horario']);
		$taller->setInstructor($_POST['instructor']);
		$taller->setSupervisor($_POST['supervisor']);
		
		
		$taller->guardar();
		header("Location:".$_SERVER['HTTP_REFERER']);//regresa al pagina que estaba
	}
?>