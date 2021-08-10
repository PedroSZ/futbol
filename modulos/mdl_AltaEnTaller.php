<?php
	include_once '../clases/estudiante_por_taller.php';

	if(!empty($_POST['micodigo'])){
		$codigo = $_POST['micodigo'];
		
		$estudiantetaller = new EstudianteTaller();
	
		$estudiantetaller-> guardar($codigo);
	
		
		header("Location:".$_SERVER['HTTP_REFERER']);//regresa al pagina que estaba
	}
?>