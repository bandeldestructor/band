<?php  
	require_once("conexion.php");

	class reemplazo extends conexion{
		
		function alta($id_recurso, $id_empleado, $fecha, $falla){
			$this-> sentencia = "INSERT INTO reemplazos VALUES(null, '$id_recurso', '$id_empleado', '$fecha', '$falla')";
			$this-> ejecutar_sentencia();

			//echo "Datos agregados";
			//echo $this-> sentencia;
		}

		public function baja($id_reemplazo){
			$this-> sentencia = "DELETE FROM reemplazos WHERE id_reemplazo = $id_reemplazo";
			$this-> ejecutar_sentencia();
			echo "Datos Eliminados";
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM reemplazos";
			return $this-> obtener_sentencia();
		}

		
	}
?>