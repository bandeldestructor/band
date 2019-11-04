<?php  
	require_once("conexion.php");

	class nomina extends conexion{
		
		function alta($id_empleado, $fecha, $monto){
			$this-> sentencia = "INSERT INTO nomina VALUES (null, '$id_empleado', '$fecha', '$monto')";
			$this-> ejecutar_sentencia();

			echo "Datos Guardados";
		}

		public function baja($id_nomina){
			$this-> sentencia = "DELETE FROM nomina WHERE id_nomina = $id_nomina";
			$this-> ejecutar_sentencia();
			echo "Datos Eliminados";
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM nomina";
			return $this-> obtener_sentencia();
		}
	}




?>