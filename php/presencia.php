<?php  
	require_once("conexion.php");

	class presencia extends conexion{
		
		function alta($id_empleado, $fecha, $hora_entrada, $hora_salida){
			$this-> sentencia = "INSERT INTO presencia VALUES (null, '$id_empleado', '$fecha', '$hora_entrada', '$hora_salida')";
			$this-> ejecutar_sentencia();
			//echo $this-> sentencia;
		}


		public function baja($id_presencia){
			$this-> sentencia = "DELETE FROM presencia WHERE id_presencia = $id_presencia";
			$this-> ejecutar_sentencia();
			echo "Datos Eliminados";
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM presencia";
			return $this-> obtener_sentencia();
		}
	}



?>