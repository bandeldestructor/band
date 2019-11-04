<section>
	<form action="" method="post" require>
		Id Recuso: <input type="text" name="ir" required><br>
		Id Empleado: <input type="text" name="ie" required><br>
		Fecha: <input type="date" name="fe" required><br>
		Razón Social: <input type="text" name="ras" required><br>

		<div>
			<input type="submit" name="altaMan" value="Ingresar">
		</div>
		
	</form>
	<?php 
		require_once("mantenimiento.php");
		$obj = new mantenimiento();
		if (isset($_POST["idE"])) {
			$id = $_POST["idE"];
			$obj->baja($id);
			echo "<script>;
			alert('Mantenimiento Eliminado');
			window.location='home.php?s=mant';
			</script>";
		}
		if (isset($_POST["altaMan"])) {
			$i = $_POST["ir"];
			$r = $_POST["ie"];
			$f = $_POST["fe"];
			$ra = $_POST["ras"];
			$obj->alta($i, $r, $f, $ra);
			echo "<script>;
			alert('Mantenimiento Registrado');
			window.location='home.php?s=mant';
			</script>";
		}
		$resultado = $obj->consulta();
	 ?>
	 <table>
	 	<tr>
	 		<td>Mantenimineto</td>
	 		<td>Recurso</td>
	 		<td>Empleado</td>
	 		<td>Fecha</td>
	 		<td>Razón Social</td>
	 	</tr>
	 	<?php 
			while ($fila = $resultado->fetch_assoc()) {
				echo "<tr>";
				echo "<th>".$fila["id_mantenimiento"]."</th>";
				echo "<th>".$fila["id_recurso"]."</th>";
				echo "<th>".$fila["id_empleado"]."</th>";
				echo "<th>".$fila["fecha"]."</th>";
				echo "<th>".$fila["razon"]."</th>";
				?>
	 			<td id="celdaEliminar">
	 				<form action="" method="post">
	 					<input type="hidden" name="idE" value="<?php echo $fila['id_mantenimiento'];?>">
	 					<input type="image" src="img/eli.jpg">
	 				</form>
	 			</td>
	 			<?php
				echo "</tr>";	
			}
		 ?>
	 </table>
</section>