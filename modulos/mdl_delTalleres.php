<?php
	include_once '../clases/taller.php';

	if(!empty($_POST['micodigo'])){
		$codigo = $_POST['micodigo'];
		
		$taller = new Taller();
	
		$taller-> eliminar($codigo);
	
		
		header("Location:".$_SERVER['HTTP_REFERER']);//regresa al pagina que estaba
	}
?>