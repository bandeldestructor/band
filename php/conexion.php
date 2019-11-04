<?php 
class Conexion{
	private $host="localhost";
	private $usuario="root";
	private $password="";
	private $base="erp1";
	protected $sentencia;
	private $conexion;

	private function abrir_conexion(){
		$this -> Conexion = new mysqli($this-> host, $this-> usuario, $this -> password, $this-> base);

	}	

	private function cerrar_conexion(){
		$this -> Conexion->close();
	}
	//Altas, Bajas y Modificaciones
	public function ejecutar_sentencia(){
		$this-> abrir_conexion();
		$this-> Conexion-> query($this-> sentencia);
		$this-> cerrar_conexion();

	}
	//Consultas
	public function obtener_sentencia(){
		$this-> abrir_conexion();
		$resultado = $this-> Conexion-> query($this-> sentencia);
		return $resultado;

	}


} 