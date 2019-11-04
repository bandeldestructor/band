<?php  
require_once("conexion.php");

	class materia_compra extends conexion{
		
		function alta($id_materia, $cantidad){
			$this-> sentencia = "INSERT INTO materia_compra VALUES (null, '$id_materia', '$cantidad')";
			$this-> ejecutar_sentencia();
			 //echo $this-> sentencia;
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM materia_compra";
			return $this-> obtener_sentencia();
		}
	}

?>