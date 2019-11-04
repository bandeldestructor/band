<?php 
	require_once("conexion.php");
	class compra extends Conexion{

		public function alta($id_proveedor, $fecha, $total){
			$this-> sentencia = "INSERT INTO compras VALUES (null, '$id_proveedor', '$fecha', '$total')";
			$this-> ejecutar_sentencia();
			echo "Datos agregados";

		}
		public function baja($id_compra){
			$this-> sentencia = "DELETE FROM compras WHERE id_compra = $id_compra";
			$this-> ejecutar_sentencia();
			//echo "Datos Eliminados";
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM compras";
			return $this-> obtener_sentencia();
		}
	}

 ?>