<?php
//******ALTA USUARIO ESTUDIANTE (RF-07)
include_once 'db.php';
class Taller extends DB {
	private $id;
	private $nombre;
	private $area;
	private $horario;
	private $instructor;
	private $supervisor;
	

	//stters and getters ***********************************************
	public function setId($id){ $this->id = $id; }
	public function setNombre($nombre){ $this->nombre = $nombre; }
	public function setArea($area){ $this->area = $area; }
	public function sethorario($horario){ $this->horario = $horario; }
	public function setInstructor($instructor){ $this->instructor = $instructor; }
	public function setSupervisor($supervisor){ $this->supervisor = $supervisor; }

	public function getId(){return $this->id; }
	public function getNombre(){return $this->nombre; }
	public function getArea(){return $this->area; }
	public function gethorario(){return $this->horario; }
	public function getInstructor(){return $this->instructor; }
	public function getSupervisor(){return $this->supervisor; }

	//******************************************************************

	public function listar(){
		$query = $this->connect()->prepare('SELECT * FROM taller');
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function consultarCodigo($codigo){
		$query = $this->connect()->prepare('SELECT * FROM taller WHERE id = :user');
		$query->execute(['user' => $codigo]);
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	
	public function eliminar($codigo){
		$query = $this->connect()->prepare('DELETE FROM taller WHERE id = :user');
		$query->execute(['user' => $codigo]);
	}

	public function actualizar(){
		$sql = "UPDATE taller SET nombre = :nombre, area = :area, horario = :horario, inastructor = :instructor, supervisor = :supervisor	WHERE id = :id"; 
		$query = $this->connect()->prepare($sql);
		$query->execute([
			'nombre' => $this->nombre, 
			'area' => $this->area,
			'horario' => $this->horario,
			'instructor' => $this->instructor,
			'supervizor' => $this->supervizor]);
	}

	public function guardar() {
		$sql = "INSERT INTO taller (id, nombre, area, horario, instructor, supervisor) VALUES(:id, :nombre, :area, :horario, :instructor, :supervisor)"; 
		$query = $this->connect()->prepare($sql);
		$query->execute([
			'id' => $this->id,
			'nombre' => $this->nombre, 
			'area' => $this->area,
			'horario' => $this->horario,
			'instructor' => $this->instructor,
			'supervisor' => $this->supervisor]);
	}
}

?>