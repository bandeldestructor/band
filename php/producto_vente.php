<?php  
	require_once("conexion.php");

	class producto_vente extends conexion{
		
		function alta($id_producto, $cantidad){
			$this-> sentencia = "INSERT INTO producto_venta VALUES (null, '$id_producto', '$cantidad')";
			$this-> ejecutar_sentencia();

			echo $this-> sentencia;
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM producto_venta";
			return $this-> obtener_sentencia();
		}
	}

?>