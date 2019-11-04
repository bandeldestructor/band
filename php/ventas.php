<?php  
	require_once("conexion.php");
	
	class ventas extends conexion{
		
		function alta($id_cliente, $fecha, $total, $id_empleado){
			$this-> sentencia = "INSERT INTO ventas VALUES (null, '$id_cliente', '$fecha', '$total', '$id_empleado')";
			$this-> ejecutar_sentencia();

			//echo "Datos agregados";
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM ventas";
			return $this-> obtener_sentencia();
		}
	


	public function datosVenta(){
			$this->sentencia = "SELECT id_venta FROM ventas";
			$res = $this->obtener_sentencia();
			$datos = "";
			while ($fila = $res->fetch_assoc()) {
				$datos = $datos.$fila["id_venta"].",";
			}
			$datos = substr($datos, 0, strlen($datos)-1);
			echo $datos;
		}
	public function etiquetaVenta(){
			$this->sentencia = "SELECT fecha FROM ventas";
			$res = $this->obtener_sentencia();
			$datos = "";
			while ($fila = $res->fetch_assoc()) {
				$datos.= "'".$fila["fecha"]."',";
			}
			$datos = substr($datos, 0, strlen($datos)-1);
			echo $datos;
		}
}

?>