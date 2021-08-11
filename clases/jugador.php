<?php
//****** CLASE DE JUGADOR
include_once 'db.php';
class Jugador extends DB {
	private $id;
	private $nombre;
	private $apellidos;
	private $foto;
	private $localidad;
	private $nacimiento;
	private $estatus;
	private $equipo_id;


	//stters and getters ***********************************************
	public function setId($id){ $this->id = $id; }
	public function setNombre($nombre){ $this->nombre = $nombre; }
	public function setApellidos($apellidos){ $this->apellidos = $apellidos; }
	public function setFoto($foto){ $this->foto = $foto; }
	public function setLocalidad($localidad){ $this->localidad = $localidad; }
	public function setNacimiento($nacimiento){ $this->nacimiento = $nacimiento; }
	public function setEstatus($estatus){ $this->estatus = $estatus; }
	public function setEquipo($equipo_id){ $this->equipo_id = $equipo_id; }

	public function getId(){ return $this->id; }
	public function getNombre(){ return $this->nombre; }
	public function getApellidos(){ return $this->apellidos; }
	public function getFoto(){ return $this->foto; }
	public function getLocalidad(){ return $this->localidad; }
	public function getNacimiento(){ return $this->nacimiento; }
	public function getEstatus(){ return $this->estatus; }
	public function getEquipo(){ return $this->equipo_id; }


	//******************************************************************

	public function listar(){
		$query = $this->connect()->prepare('SELECT * FROM jugador');
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function consultarId($id){
		$query = $this->connect()->prepare('SELECT * FROM jugador WHERE id = :id');
		$query->execute(['id' => $id]);
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function eliminar($id){
		$query = $this->connect()->prepare('DELETE FROM jugador WHERE id = :id');
		$query->execute(['id' => $id]);
	}

	public function tranferenciaDeEquipo($id){
		$sql = "UPDATE jugador SET equipo = :equipo	WHERE id = :id";
		$query = $this->connect()->prepare($sql);
		$query->execute([
			'equipo' => $this->equipo]);
	}
	public function actualizar($id){
		$sql = "UPDATE jugador SET nombre = :nombre, apellidos = :apellidos, foto = :foto, localidad = :localidad, nacimiento = :nacimiento, status = :status, equipo = :equipo	WHERE id = :id";
		$query = $this->connect()->prepare($sql);
		$query->execute([
			'nombre' => $this->nombre,
			'apellidos' => $this->apellidos,
			'foto' => $this->foto,
			'localidad' => $this->localidad,
			'nacimiento' => $this->nacimiento,
			'status' => $this->status,
			'equipo' => $this->equipo]);
	}

	public function guardar() {
		$_id = $this->id;
		$_nombre = $this->nombre;
		$_apellidos = $this->apellidos;
		$_foto = $this->foto;
		$_carrera = $this->foto;
		$_localidad = $this->localidad;
		$_nacimiento = $this->nacimiento;
		$_estatus = $this->estatus;
		$_equipo = $this->equipo_id;
		if ($_equipo == "")
			$sql = "INSERT INTO jugador (id, nombre, apellidos, foto, localidad, nacimiento, estatus) VALUES('".$_id."', '".$_nombre."', '".$_apellidos."', '".$_foto."', '".$_localidad."', ".$_nacimiento.", '".$_estatus."')";
		else
			$sql = "INSERT INTO jugador (id, nombre, apellidos, foto, localidad, nacimiento, estatus, equipo) VALUES(".$_id.", ".$_nombre.", ".$_apellidos.", ".$_foto.", ".$_localidad.", ".$_nacimiento.", ".$_estatus.", ".$_equipo.")";
		//echo $sql.";";
		$query = $this->connect()->prepare($sql);
		$query->execute();
	}
}

?>
