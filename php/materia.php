<?php 
	require_once("conexion.php");

	class materia extends conexion{
		
		public function alta($nombre, $unidad, $existencia, $costo, $id_proveedor){
			$this-> sentencia = "INSERT INTO materia VALUES (null, '$nombre', '$unidad', '$existencia', '$costo', '$id_proveedor')";
			$this-> ejecutar_sentencia();
			//echo "Datos Guardados";
			echo $this->sentencia;
			
		}

		public function baja($id_materia){
			$this-> sentencia = "DELETE FROM materia WHERE id_Materia = $id_materia";
			$this-> ejecutar_sentencia();
			echo "Datos Eliminados";
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM materia";
			return $this-> obtener_sentencia();
	}
	public function datosMateria(){
			$this->sentencia = "SELECT existencia FROM materia";
			$res = $this->obtener_sentencia();
			$datos = "";
			while ($fila = $res->fetch_assoc()) {
				$datos = $datos.$fila["existencia"].",";
			}
			$datos = substr($datos, 0, strlen($datos)-1);
			echo $datos;
		}
	public function etiquetaMateria(){
			$this->sentencia = "SELECT nombre FROM materia";
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