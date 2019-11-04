<?php 
	require_once("conexion.php");
	
	class usuario extends conexion{
		
		function alta($nombre, $password, $id_empleado){
			$this-> sentencia = "INSERT INTO usuario VALUES(null, '$nombre', '$password', '$id_empleado')";
			$this-> ejecutar_sentencia();
			//echo $this-> sentencia;
			//echo "Datos Agreegados";
		}

		public function baja($id_usuario){
			$this-> sentencia = "DELETE FROM usuario WHERE id_usuario = $id_usuario";
			$this-> ejecutar_sentencia();
			echo "Datos Eliminados";
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM usuario";
			return $this-> obtener_sentencia();
		}
	}

 ?>