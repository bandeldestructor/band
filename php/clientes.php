<?php  
	require_once("conexion.php");

	class clientes extends Conexion{

		public function alta($nombre, $correo, $direccion, $telefono){
			$this-> sentencia = "INSERT INTO clientes VALUES (null, '$nombre', '$correo', '$direccion', $telefono)";
			$this-> ejecutar_sentencia();
			//echo "Datos agregados";
			//echo $this->sentencia;

		}
		public function baja($id_cliente){
			$this-> sentencia = "DELETE FROM clientes WHERE id_cliente = $id_cliente";
			$this-> ejecutar_sentencia();
			//echo "Datos Eliminados";
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM clientes";
			return $this-> obtener_sentencia();
		}

		public function modificacion($fecha_inicio, $fecha_fin, $total, $id_balance){
			$this->sentencia = "UPDATE balance SET fecha_inicio = '$fecha_inicio', fecha_fin = '$fecha_fin', total = '$total'WHERE id_balance = '$id_balance'";
			$this-> ejecutar_sentencia();
		}

		public function datosClie(){
			$this->sentencia = "SELECT id_cliente FROM clientes";
			$res = $this->obtener_sentencia();
			$datos = "";
			while ($fila = $res->fetch_assoc()) {
				$datos = $datos.$fila["id_cliente"].",";
			}
			$datos = substr($datos, 0, strlen($datos)-1);
			echo $datos;
		}
	public function etiquetaClie(){
			$this->sentencia = "SELECT nombre FROM clientes";
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