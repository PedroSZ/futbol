<?php
	include_once '../clases/usuario.php';
	include_once '../clases/estudiante.php';

	if(!empty($_POST['micodigo'])){
		$codigo = $_POST['micodigo'];
		
		$alumno = new Estudiante();
		$usuario = new Usuario();
		
		
		$alumno-> eliminar($codigo);
		$usuario-> eliminar($codigo);
		
		header("Location:".$_SERVER['HTTP_REFERER']);//regresa al pagina que estaba
	}
?>