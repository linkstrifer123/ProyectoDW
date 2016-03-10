<?php
require_once 'conexion.php';
class ProyectoGrado {
	private $id;
	private $nameproyec;
	private $aut1;
	private $aut2;
	private $aut3;
	private $nomasesor;
	private $fech;
	private $notaproyec;
	private $lineainves;
	const bdtabla = 'proyecto';

	public function getId(){
		return $this->id;
	}
	public function getNameproyec() {
		 return $this->nameproyec;
	}
	public function getAut1() {
		 return $this->aut1;
	}
	public function getAut2() {
		 return $this->aut2;
	}
	public function getAut3() {
		 return $this->aut3;
	}
	public function getNomasesor() {
		 return $this->nomasesor;
	}
	public function getFech() {
		 return $this->fech;
	}
	public function getNotaproyec() {
		 return $this->notaproyec;
	}
	public function getLineainves() {
		 return $this->lineainves;
	}
	public function setId($ides){
		$this->id = $ides;
	}
	public function setNameproyec($nomproyec) {
		 $this->nameproyec = $nomproyec;
	}
	public function setAut1($autornum1) {
		 $this->aut1 = $autornum1;
	}
	public function setAut2($autornum2) {
		 $this->aut2 = $autornum2;
	}
	public function setAut3($autornum3) {
		 $this->aut3 = $autornum3;
	}
	public function setNomasesor($nameasesor) {
		 $this->nomasesor = $nameasesora;
	}
	public function setFech($fecha) {
		 $this->fech = $fecha;
	}
	public function setNotaproyec($notap) {
		 $this->notaproyec = $notap;
	}
	public function setLineainves($temainvest) {
		 $this->lineainves = $temainvest;
	}

	public function __construct($nameproyec, $aut1, $aut2, $aut3, $nomasesor, $fech, $notaproyec, $lineainves) {
		$this->nameproyec = $nameproyec;
		$this->aut1 = $aut1;
		$this->aut2 = $aut2;
		$this->aut3 = $aut3;
		$this->nomasesor = $nomasesor;
		$this->fech = $fech;
		$this->notaproyec = $notaproyec;
		$this->lineainves = $lineainves;
	}

	public function guardardatos(){
		 $conex = new Conexionbd();
				$c = $conex->prepare('INSERT INTO ' . self::bdtabla .' (nombre, autor1, autor2, autor3, asesor, fecha, nota, investigacion) VALUES(:nombre, :autor1, :autor2, :autor3, :asesor, :fecha, :nota, :investigacion)');
				$c->bindParam(':nombre', $this->nameproyec);
				$c->bindParam(':autor1', $this->aut1);
				$c->bindParam(':autor2', $this->aut2);
				$c->bindParam(':autor3', $this->aut3);
				$c->bindParam(':asesor', $this->nomasesor);
				$c->bindParam(':fecha', $this->fech);
				$c->bindParam(':nota', $this->notaproyec);
				$c->bindParam(':investigacion', $this->lineainves);
				$c->execute();
		 $conex = null;
	}

	public function actualizarformulario($id, $nameproyec, $aut1, $aut2, $aut3, $nomasesor, $notaproyec, $lineainves){
     $conex = new Conexionbd();
      $c = $conex->prepare('UPDATE ' . self::bdtabla .' SET nombre = :nombre, autor1 = :autor1, autor2 = :autor2, autor3 = :autor3, asesor = :asesor, nota = :nota, investigacion = :investigacion WHERE id = :id');
      $c->bindParam(':id', $id);
      $c->bindParam(':nombre', $nameproyec);
      $c->bindParam(':autor1', $aut1);
      $c->bindParam(':autor2', $aut2);
      $c->bindParam(':autor3', $aut3);
      $c->bindParam(':asesor', $nomasesor);
      $c->bindParam(':nota', $notaproyec);
      $c->bindParam(':investigacion', $lineainves);
      $c->execute();
     }
		 public function estadoact($id, $estado){
	      $conex = new Conexionbd();
	       $c = $conex->prepare('UPDATE ' . self::bdtabla .' SET estado = :estado WHERE id = :id');
	       $c->bindParam(':id', $id);
				 $c->bindParam(':estado', $estado);
	     	 $c->execute();
	    }
	public function recuperardatos(){
			$conex = new Conexionbd();
			$c = $conex->prepare('SELECT * FROM ' . self::bdtabla . ' WHERE estado=0');
			$c->execute();
			$datos = $c->fetchAll();
			return $datos;
	 }
	 public function buscarId($id){
       $conex = new Conexionbd();
       $c = $conex->prepare('SELECT * FROM ' . self::bdtabla . ' WHERE id = :id');
       $c->bindParam(':id', $id);
       $c->execute();
       $datos = $c->fetch();
       if($datos){
          return new self($datos['nombre'], $datos['autor1'], $datos['autor2'], $datos['autor3'], $datos['asesor'], $datos['fecha'], $datos['nota'], $datos['investigacion'], $id);
       }else{
          return false;
       }
}
	public function nuevabusqueda($id, $nameproyec, $aut1, $aut2, $aut3, $nomasesor, $notaproyec, $lineainves){
		$conex = new Conexionbd();
		$c = $conex->prepare('SELECT * FROM' . self::bdtabla. 'WHERE id LIKE "%'.$id.'%" OR nombre LIKE "%'.$nameproyec.'%" OR autor1 LIKE "%'.$aut1.'%" OR autor2 LIKE "%'.$aut2.'%" OR autor3 LIKE "%'.$aut3.'%" OR asesor "%'.$nomasesor.'%" OR nota LIKE "%'.$notaproyec.'%" OR investigacion LIKE "%'.$lineainves.'%"');
		$c->execute();
		$datos = $c->fetchAll();
		return $datos;
	}
}
?>
