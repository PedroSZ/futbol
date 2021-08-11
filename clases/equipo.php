<?php
//****** CLASE DE EQUIPO
include_once 'db.php';
class Equipo extends DB {
	private $clave;
	private $nombre;
	private $campo1;
	private $campo2;
	private $horario;
	private $espera;


	//stters and getters ***********************************************
	public function setClave($clave){ $this->clave = $clave; }
	public function setNombre($nombre){ $this->nombre = $nombre; }
	public function setCampo1($campo1){ $this->campo1 = $campo1; }
  public function setCampo2($campo2){ $this->campo2 = $campo2; }
	public function setHorario($horario){ $this->horario = $horario; }
	public function setEspera($espera){ $this->espera = $espera; }

	public function getClave(){ return $this->clave; }
	public function getNombre(){ return $this->nombre; }
	public function getCampo1(){ return $this->campo1; }
	public function getCampo2(){ return $this->campo2; }
	public function getHorario(){ return $this->horario; }
	public function getEespera(){ return $this->espera; }


	//******************************************************************

	public function listar(){
		$query = $this->connect()->prepare('SELECT * FROM equipo');
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function consultarClave($clave){
		$query = $this->connect()->prepare('SELECT * FROM equipo WHERE clave = :clave');
		$query->execute(['clave' => $clave]);
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function eliminar($clave){
		$query = $this->connect()->prepare('DELETE FROM equipo WHERE clave = :clave');
		$query->execute(['clave' => $clave]);
	}

	public function actualizar($id){
		$sql = "UPDATE equipo SET nombre = :nombre, apellidos = :apellidos, foto = :foto, localidad = :localidad, nacimiento = :nacimiento, status = :status, equipo = :equipo	WHERE id = :id";
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
		$sql = "INSERT INTO equipo (id, nombre, apellidos, foto, localidad, nacimiento, status) VALUES(:id, :nombre, :apellidos, :foto, :localidad, :nacimiento, :status, :equipo)";
		$query = $this->connect()->prepare($sql);
		$query->execute([
			'id' => $this->id,
			'nombre' => $this->nombre,
			'apellidos' => $this->apellidos,
			'carrera' => $this->foto,
			'grado' => $this->localidad,
			'grupo' => $this->nacimiento,
			'status' => $this->status,
			'equipo' => $this->equipo]);
	}
}

?>
