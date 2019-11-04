<?php  
	require_once("conexion.php");
	
	class mantenimiento extends Conexion{
		
		public function alta($id_recurso, $id_empleado, $fecha, $razon){

			$this-> sentencia = "INSERT INTO mantenimiento VALUES (null, '$id_recurso', '$id_empleado', '$fecha', '$razon')";
			
			$this-> ejecutar_sentencia();
			//echo "Datos Guardados";
			//echo $this->sentencia;
		}

		public function baja($id_mantenimiento){
			$this-> sentencia = "DELETE FROM mantenimiento WHERE id_mantenimiento = $id_mantenimiento";
			$this-> ejecutar_sentencia();
			echo "Datos Eliminados";
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM mantenimiento";
			return $this-> obtener_sentencia();
		}
	}
?>