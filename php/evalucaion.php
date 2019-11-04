<?php 
	require_once("conexion.php");
	
	class evalucaion extends Conexion{
		
		public function alta($id_empleado, $R1, $R2, $R3, $R4, $R5, $R6, $R7, $R8, $R9, $R10, $id_cuestionario){

			$this-> sentencia = "INSERT INTO evaluacion VALUES (null, '$id_empleado', '$R1', '$R2', '$R3', '$R4', '$R5', '$R6', '$R7', '$R8', '$R9', '$R10', '$id_cuestionario')";
			
			$this-> ejecutar_sentencia();
			//echo "Datos Guardados";
			echo $this->sentencia;
		}
		public function baja($id_evaluacion){
			$this-> sentencia = "DELETE FROM evaluacion WHERE id_evaluacion = $id_evaluacion";
			$this-> ejecutar_sentencia();
			echo "Datos Eliminados";
		}
		public function consulta(){
			$this-> sentencia = "SELECT * FROM evaluacion";
			return $this-> obtener_sentencia();
		}
	}

?>