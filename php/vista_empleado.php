<section>

	<form action="" method="post" require>
		Nombre: <input type="text" name="nom" required><br>
		Apellido Paterno: <input type="text" name="apep" required><br>
		Apellido Materno: <input type="text" name="apem" required><br>
		Area: <input type="text" name="are" required><br>
		Puesto: <input type="text" name="pue" required><br>
		Salario: <input type="text" name="sal" required><br>
		Correo: <input type="text" name="cor" required><br>
		Dirección: <input type="text" name="dir" required><br>
		Fecha: <input type="date" name="fec" required><br>
		Curp: <input type="text" name="cur" required><br>
		Telefono: <input type="text" name="tel" required><br>
		Estado Civil: <input type="text" name="etc" required><br>
		Escolaridad: <input type="text" name="esc" required><br>
		C.P.: <input type="text" name="c" required><br>
 		 <div>
 		 	<input type="submit" name="altaEmp" value="Ingresar">
 		 </div>
	</form>
	<?php 
		require_once("empleados.php");
		$obj = new empleados();
		if (isset($_POST["idE"])) {
			$id = $_POST["idE"];
			$obj->baja($id);
			echo "<script>;
			alert('Empleado Eliminado');
			window.location='home.php?s=emp';
			</script>";
		}
		if (isset($_POST["altaEmp"])) {
			$n = $_POST["nom"];
			$app = $_POST["apep"];
			$apm = $_POST["apem"];
			$ar = $_POST["are"];
			$pu = $_POST["pue"];
			$s = $_POST["sal"];
			$co = $_POST["cor"];
			$di = $_POST["dir"];
			$fe =$_POST["fec"];
			$cu = $_POST["cur"];
			$te = $_POST["tel"];
			$et = $_POST["etc"];
			$es = $_POST["esc"];
			$p = $_POST["c"];
			$obj->alta($n, $app, $apm, $ar, $pu, $s, $co, $di, $fe, $cu, $te, $et, $es, $p);
			echo "<script>;
			alert('Cliente Registrado');
			window.location='home.php?s=emp';
			</script>";
		}
		$resultado = $obj->consulta();
	 ?>
	 <table>
	 	<tr>
	 		<td>Id</td>
	 		<td>Nombre</td>
	 		<td>Apellido Paterno</td>
	 		<td>Apellido Materno</td>
	 		<td>Area</td>
	 		<td>Puesto</td>
	 		<td>Salario</td>
	 		<td>Correo</td>
	 		<td>Direccion</td>
	 		<td>Fecha</td>
	 		<td>Curp</td>
	 		<td>Telefono</td>
	 		<td>Estado Civil</td>
	 		<td>Escolaridad</td>
	 		<td>CP</td>
	 	</tr>
	 	<?php 
			while ($fila = $resultado->fetch_assoc()) {
				echo "<tr>";
				echo "<th>".$fila["id_empleado"]."</th>";
				echo "<th>".$fila["nombre"]."</th>";
				echo "<th>".$fila["apellidop"]."</th>";
				echo "<th>".$fila["apellidom"]."</th>";
				echo "<th>".$fila["area"]."</th>";
				echo "<th>".$fila["puesto"]."</th>";
				echo "<th>".$fila["salario"]."</th>";
				echo "<th>".$fila["correo"]."</th>";
				echo "<th>".$fila["direccion"]."</th>";
				echo "<th>".$fila["fecha_N"]."</th>";
				echo "<th>".$fila["curp"]."</th>";
				echo "<th>".$fila["telefono"]."</th>";
				echo "<th>".$fila["estado_civil"]."</th>";
				echo "<th>".$fila["escolaridad"]."</th>";
				echo "<th>".$fila["cp"]."</th>";
				?>
	 			<td id="celdaEliminar">
	 				<form action="" method="post">
	 					<input type="hidden" name="idE" value="<?php echo $fila['id_empleado'];?>">
	 					<input type="image" src="img/eli.jpg">
	 				</form>
	 			</td>
	 			<?php
				echo "</tr>";
			}
		 ?>
	 </table>
</section>