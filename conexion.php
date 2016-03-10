<?php
class Conexionbd extends PDO {
	private $tipbase = 'mysql';
	private $lhost = 'localhost';
	private $namebase = 'proyectos';
	private $usuario = 'root';
	private $contrasena = '';
	public function __construct() {
		 try{
				parent::__construct($this->tipbase.':host='.$this->lhost.';dbname='.$this->namebase, $this->usuario, $this->contrasena);
		 }catch(PDOException $e){
				echo 'Ha ocurrido un error al conectarse a la base de datos. Detalle: ' . $e->getMessage();
				exit;
		 }
	}
}
?>
