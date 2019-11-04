<?php  
	require_once("conexion.php");

	class tiempo_extra extends conexion{
		
		function alta($id_empleado, $horas, $pago){
			$this-> sentencia = "INSERT INTO tiempo_extra VALUES(null, '$id_empleado', '$horas', '$pago')";
			$this-> ejecutar_sentencia();
			echo $this-> sentencia;
			//echo "Datos Agregaos";
			
		}
		public function baja($id_tiempo){
			$this-> sentencia = "DELETE FROM tiempo_extra WHERE id_tiempo = $id_tiempo";
			$this-> ejecutar_sentencia();
			echo "Datos Eliminados";
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM tiempo_extra";
			return $this-> obtener_sentencia();
		}

		
	}


?>