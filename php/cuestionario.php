<?php 

	require_once("conexion.php");

	class cuestionario extends Conexion{

		public function alta($R1, $R2, $R3, $R4, $R5, $R6, $R7, $R8, $R9, $R10){
			$this-> sentencia = "INSERT INTO cuestionarios VALUES (null, '$R1', '$R2', '$R3', '$R4', '$R5', '$R6', '$R7', '$R8', '$R9', '$R10')";
			$this-> ejecutar_sentencia();
			//echo $this-> sentencia;
			//echo "Datos Guardados";
		}

			public function baja($id_cuestionario){
			$this-> sentencia = "DELETE FROM cuestionarios WHERE id_cuestionario = $id_cuestionario";
			$this-> ejecutar_sentencia();
			echo "Datos Eliminados";
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM cuestionarios";
			return $this-> obtener_sentencia();
		}

 }
 ?>
