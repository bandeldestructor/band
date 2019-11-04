<?php 
	require_once("conexion.php");
	class balance extends Conexion{

		public function alta($fecha_inicio, $fecha_fin, $total){
			$this-> sentencia = "INSERT INTO balance VALUES (null, '$fecha_inicio', '$fecha_fin', '$total')";
			$this-> ejecutar_sentencia();
			//echo "Datos agregados";

		}
		public function baja($id_balance){
			$this-> sentencia = "DELETE FROM balance WHERE id_balance = $id_balance";
			$this-> ejecutar_sentencia();
			//echo "Datos Eliminados";
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM balance";
			return $this-> obtener_sentencia();
		}
		public function modificacion($fecha_inicio, $fecha_fin, $total, $id_balance){
			$this->sentencia = "UPDATE balance SET fecha_inicio = '$fecha_inicio', fecha_fin = '$fecha_fin', total = '$total'WHERE id_balance = '$id_balance'";
			$this-> ejecutar_sentencia();
		}

	}


 ?>