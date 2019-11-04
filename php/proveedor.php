<?php 
	require_once("conexion.php");

	class proveedor extends Conexion{

		public function alta($razonsocial, $correo, $direccion, $telefono){
			$this-> sentencia = "INSERT INTO proveedores VALUES (null, '$razonsocial', '$correo', '$direccion', '$telefono')";
			$this-> ejecutar_sentencia();
			//echo "Datos agregados";

		}

		public function baja($id_proveedor){
			$this-> sentencia = "DELETE FROM proveedores WHERE id_proveedor = $id_proveedor";
			$this-> ejecutar_sentencia();
			//echo "Datos Eliminados";
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM proveedores";
			return $this->obtener_sentencia();
		}
		public function buscar($id){
			$this->sentencia = "SELECT * FROM proveedores WHERE id_proveedor=$id";
			return $this->obtener_sentencia();
		}

		public function modificacion( $razonsocial, $correo, $diireccion, $telefono, $id_proveedor){
			$this->sentencia = "UPDATE proveedores SET  razonsocial = '$razonsocial', diireccion = '$diireccion', telefono = '$telefono', correo = '$correo' WHERE id_proveedor = '$id_proveedor'";
			//echo $this->sentencia;
			$this-> ejecutar_sentencia();
		}

	}

 ?>