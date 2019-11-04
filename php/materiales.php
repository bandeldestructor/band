<?php  
	require_once("conexion.php");

	class materiales extends conexion{
		
		function alta($nmbre){
			$this-> sentenica = "INSERT INTO materiales VALUES (null, '$nmbre')";
			$this-> ejecutar_sentencia();
			//echo $this-> sentenica;
			//echo "Datos Guardados";
		}

		public function baja($id){
			$this-> sentencia = "DELETE FROM materiales WHERE id = $id";
			$this-> ejecutar_sentencia();
			echo "Datos Eliminados";
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM materiales";
			return $this-> obtener_sentencia();
		}
		
	}

?>