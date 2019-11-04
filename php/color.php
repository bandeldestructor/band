<?php 
	require_once("conexion.php");

	class color extends Conexion{

		public function alta($codigo){
			$this-> sentencia = "INSERT INTO color VALUES (null, '$codigo')";
			$this-> ejecutar_sentencia();
			//echo "Datos agregados";
			echo $this->sentencia;

		}
		public function baja($id_color){
			$this-> sentencia = "DELETE FROM color WHERE id_color = $id_color";
			$this-> ejecutar_sentencia();
			echo "Datos Eliminados";
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM color";
			return $this-> obtener_sentencia();
		}


	}

?>