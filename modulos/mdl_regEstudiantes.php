<?php
//******ALTA USUARIO ESTUDIANTE (RF-07)
	include_once '../clases/usuario.php';
	include_once '../clases/estudiante.php';
	if(!empty($_POST['codigo'])){
		echo "registrado";
		
		$usuario = new Usuario();
		$usuario->setCodigo($_POST['codigo']);
		$usuario->setPsw(md5($_POST['psw1']));
		$usuario->setTipo('3');
		$usuario->guardar();

		$alumno = new Estudiante();
		$alumno->setCodigo($_POST['codigo']);
		$alumno->setNombre($_POST['nombre']);
		$alumno->setApellidos($_POST['apellidos']);
		$alumno->setCarrera($_POST['carrera']);
		$alumno->setGrado($_POST['grado']);
		$alumno->setGrupo($_POST['grupo']);
		
		$alumno->guardar();
		header("Location:".$_SERVER['HTTP_REFERER']);//regresa al pagina que estaba
	}
?>