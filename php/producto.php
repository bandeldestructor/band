<?php 
	require_once("conexion.php");

	class producto extends conexion{
		
		function alta($nombre, $costo, $unidad, $stock_min, $existencia, $codigo, $descripcion, $almacen, $categoria){
			$this-> sentencia = "INSERT INTO productos VALUES (null, '$nombre', '$costo', '$unidad', '$stock_min', '$existencia', '$codigo', '$descripcion', '$almacen', '$categoria')";

			$this-> ejecutar_sentencia();
			 echo $this-> sentencia;
			
		}

		public function baja($id_producto){
			$this-> sentencia = "DELETE FROM productos WHERE id_producto = $id_producto";
			$this-> ejecutar_sentencia();
			echo "Datos Eliminados";
		}
		public function consulta(){
			$this-> sentencia = "SELECT * FROM productos";
			return $this-> obtener_sentencia();
	}

		public function datosProducto(){
			$this->sentencia = "SELECT existencia FROM productos";
			$res = $this->obtener_sentencia();
			$datos = "";
			while ($fila = $res->fetch_assoc()) {
				$datos = $datos.$fila["existencia"].",";
			}
			$datos = substr($datos, 0, strlen($datos)-1);
			echo $datos;
		}
		public function etiquetaProducto(){
			$this->sentencia = "SELECT nombre FROM productos";
			$res = $this->obtener_sentencia();
			$datos = "";
			while ($fila = $res->fetch_assoc()) {
				$datos.= "'".$fila["nombre"]."',";
			}
			$datos = substr($datos, 0, strlen($datos)-1);
			echo $datos;
		}
	}

?>