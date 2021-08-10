<?php
//******ALTA USUARIO ESTUDIANTE (RF-07)
include_once 'db.php';
class Jugadores extends DB {
	private $id;
	private $nombre;
	private $a_paterno;
	private $a_materno;
	private $foto;
	private $localidad;
	private $nacimiento;
	private $estatus;
	private $equipo_id;


	//stters and getters ***********************************************
	public function setId($id){ $this->id = $id; }
	public function setNombre($nombre){ $this->nombre = $nombre; }
	public function setA_Paterno($a_paterno){ $this->a_paterno = $a_paterno; }
	public function setA_Materno($a_materno){ $this->a_materno = $a_materno; }
	public function setFoto($foto){ $this->foto = $foto; }
	public function setLocalidad($localidad){ $this->localidad = $localidad; }
	public function setNacimiento($nacimiento){ $this->nacimiento = $nacimiento; }
	public function setEstatus($estatus){ $this->estatus = $estatus; }
	public function setEquipo_Id($equipo_id){ $this->equipo_id = $equipo_id; }

	public function getId(){ return $this->id; }
	public function getNombre(){ return $this->nombre; }
	public function getA_Paterno(){ return $this->a_paterno; }
	public function getA_Materno(){ return $this->a_materno; }
	public function getFoto(){ return $this->foto; }
	public function getLocalidad(){ return $this->localidad; }
	public function getNacimiento(){ return $this->nacimiento; }
	public function getEstatus(){ return $this->estatus; }
	public function getEquipo_Id(){ return $this->equipo_id; }


	//******************************************************************

	public function listar(){
		$query = $this->connect()->prepare('SELECT * FROM jugador');
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function consultarCodigo($codigo){
		$query = $this->connect()->prepare('SELECT * FROM estudiante WHERE curp = :user');
		$query->execute(['user' => $codigo]);
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function eliminar($codigo){
		$query = $this->connect()->prepare('DELETE FROM estudiante WHERE curp = :user');
		$query->execute(['user' => $codigo]);
	}

	public function actualizar(){
		$sql = "UPDATE estudiante SET nombre = :nombre, apellidos = :apellidos, carrera = :carrera, grado = :grado, grupo = :grupo	WHERE curp = :codigo";
		$query = $this->connect()->prepare($sql);
		$query->execute([
			'nombre' => $this->nombre,
			'apellidos' => $this->apellidos,
			'carrera' => $this->carrera,
			'grado' => $this->grado,
			'grupo' => $this->grupo]);
	}

	public function guardar() {
		$sql = "INSERT INTO estudiante (curp, nombre, apellidos, carrera, grado, grupo) VALUES(:codigo, :nombre, :apellidos, :carrera, :grado, :grupo)";
		$query = $this->connect()->prepare($sql);
		$query->execute([
			'codigo' => $this->codigo,
			'nombre' => $this->nombre,
			'apellidos' => $this->apellidos,
			'carrera' => $this->carrera,
			'grado' => $this->grado,
			'grupo' => $this->grupo]);
	}
}

?>
