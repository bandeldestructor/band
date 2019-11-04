<?php 
	require_once("conexion.php");
	class actividad extends conexion{
		
		function alta($id_usuario, $fecha, $movimiento){
			$this-> sentencia = "INSERT INTO actividad VALUES (null, '$id_usuario', '$fecha', '$movimiento')";
			$this-> ejecutar_sentencia();
			//echo "Datos Guardados";
			//echo $this->sentencia;
		}

		public function baja($id_actividad){
			$this-> sentencia = "DELETE FROM actividad WHERE id_actividad = $id_actividad";
			$this-> ejecutar_sentencia();
			//echo "Datos Eliminados";
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM actividad";
			return $this-> obtener_sentencia();
		}
		public function buscar($id){
			$this->sentencia = "SELECT * FROM actividad WHERE id_actividad=$id";
			return $this->obtener_sentencia();
		}

	
		public function modificacion($id_usuario, $fecha, $movimiento, $id_actividad){
			$this->sentencia = "UPDATE actividad SET id_usuario = '$id_usuario', fecha = '$fecha', movimiento = '$movimiento'WHERE id_actividad = '$id_actividad'";
			$this-> ejecutar_sentencia();
		}
	}

 ?>