<?php
	include_once '../clases/usuario.php';
	include_once '../clases/supervisor.php';

	if(!empty($_POST['micodigo'])){
		$codigo = $_POST['micodigo'];
		
		$supervisor = new Supervisor();
		$usuario = new Usuario();
		
		
		//echo "Eliminado: ".$codigo;
		
		$supervisor-> eliminar($codigo);
		$usuario-> eliminar($codigo);
		
		header("Location:".$_SERVER['HTTP_REFERER']);//regresa al pagina que estaba
	}
?>