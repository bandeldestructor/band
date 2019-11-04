<?php 
	require_once("conexion.php");
	class empleados extends Conexion{

		public function alta($nombre, $apellidop, $apellidom, $area, $puesto, $salario, $correo, $direccion, $fecha_N, $curp, $telefono, $estado_civil, $escolaridad, $cp){

			$this-> sentencia = "INSERT INTO empleados VALUES (null, '$nombre', '$apellidop', '$apellidom', '$area', '$puesto', '$salario', '$correo', '$direccion', '$fecha_N', '$curp', '$telefono', '$estado_civil', '$escolaridad', '$cp')";
			$this-> ejecutar_sentencia();
			echo "Datos Guardados";
			//echo $this->sentencia;
		}

		public function baja($id_empleado){
			$this-> sentencia = "DELETE FROM empleados WHERE id_empleado = $id_empleado";
			$this-> ejecutar_sentencia();
			echo "Datos Eliminados";
		}

		public function consulta(){
			$this-> sentencia = "SELECT * FROM empleados";
			return $this-> obtener_sentencia();
		}
		
	}

 ?>