<?php
	include_once '../clases/usuario.php';
	include_once '../clases/instructor.php';

	if(!empty($_POST['micodigo'])){
		$codigo = $_POST['micodigo'];
		
		$instructor = new Instructor();
		$usuario = new Usuario();
		
		
		//echo "Eliminado: ".$codigo;
		
		$instructor-> eliminar($codigo);
		$usuario-> eliminar($codigo);
		
		header("Location:".$_SERVER['HTTP_REFERER']);//regresa al pagina que estaba
	}
?>