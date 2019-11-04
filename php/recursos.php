<?php  
	require_once("conexion.php");
	
	class recursos extends conexion{
		
		function alta($nombre, $marca, $descrípcion, $existencia, $costo, $id_empleado, $area){
			$this-> sentencia = "INSERT INTO recursos VALUES(null, '$nombre', '$marca', '$descrípcion', '$existencia', '$costo', '$id_empleado', '$area')";
			$this-> ejecutar_sentencia();

			echo $this-> sentencia; 
		}

		public function baja($id_recursos){
			$this-> sentencia = "DELETE FROM recursos WHERE id_recursos = $id_recursos";
			$this-> ejecutar_sentencia();
			echo "Datos Eliminados";
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM recursos";
			return $this-> obtener_sentencia();
		}

		public function datosRecursos(){
			$this->sentencia = "SELECT existencia FROM recursos";
			$res = $this->obtener_sentencia();
			$datos = "";
			while ($fila = $res->fetch_assoc()) {
				$datos = $datos.$fila["existencia"].",";
			}
			$datos = substr($datos, 0, strlen($datos)-1);
			echo $datos;
		}
		public function etiquetaRecursos(){
			$this->sentencia = "SELECT nombre FROM recursos";
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