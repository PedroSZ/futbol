<?php
//******ALTA USUARIO ESTUDIANTE (RF-07)
include_once 'db.php';
class EstudianteTaller extends DB {
	private $id;
	private $estudiante;
	private $taller;
	
	

	//stters and getters ***********************************************
	public function setId($id){ $this->id = $id; }
	public function setEstudiante($estudiante){ $this->estudiante = $estudiante; }
	public function setTaller($taller){ $this->taller = $taller; }
	
	public function getId(){return $this->id; }
	public function getEstudiante(){return $this->estudiante; }
	public function getTaller(){return $this->taller; }
	

	//******************************************************************

	public function listar(){
		$query = $this->connect()->prepare('SELECT * FROM estudiante_por_taller');
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function consultarCodigo($codigo){
		$query = $this->connect()->prepare('SELECT * FROM estudiante_por_taller WHERE id = :user');
		$query->execute(['user' => $codigo]);
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	
	public function eliminar($codigo){
		$query = $this->connect()->prepare('DELETE FROM estudiante_por_taller WHERE id = :user');
		$query->execute(['user' => $codigo]);
	}

	public function actualizar(){
		$sql = "UPDATE estudiante_por_taller SET estudiante = :estudiante, taller = :taller	WHERE id = :id"; 
		$query = $this->connect()->prepare($sql);
		$query->execute([
			'estudiante' => $this->estudiante, 
			'taller' => $this->taller]);
	}

	public function guardar() {
		$sql = "INSERT INTO estudiante_por_taller (id, estudiante, taller) VALUES(:null, :estudiante, :taller)"; 
		$query = $this->connect()->prepare($sql);
		$query->execute([
			'id' => $this->id,
			'estudiante' => $this->estudiante, 
			'taller' => $this->taller]);
	}
}

?>