<section>
	<form action="" method="post" require>
		Id Empleado: <input type="text" name="ie" required=""><br>
		Fecha:  <input type="date" name="fe" required=""><br>
		Monto: <input type="text" name="mo" required=""><br>
		<div>
			<input type="submit" name="altaNom" value="Ingresar">
		</div>
		
	</form>
	<?php 
		require_once("nomina.php");
		$obj = new nomina();
		if (isset($_POST["idE"])) {
			$id = $_POST["idE"];
			$obj->baja($id);
			echo "<script>;
			alert('Material Eliminado');
			window.location='home.php?s=nom';
			</script>";
		}
		if (isset($_POST["altaNom"])) {
			$i = $_POST["ie"];
			$f = $_POST["fe"];
			$m = $_POST["mo"];
			$obj->alta($i, $f, $m);
			echo "<script>;
			alert('Nomina Agregada');
			window.location='home.php?s=nom'
			</script>";
		}
		$resultado = $obj->consulta();

	 ?>
	 <table>
	 	<tr>	
	 		<th>Nomina</th>
	 		<th>Empleado</th>
	 		<th>Fecha</th>
	 		<th>Monto</th>
	 	</tr>
	 	<?php  
	 		while ($fila = $resultado->fetch_assoc()) {
	 			echo "<tr>";
	 			echo "<td>".$fila["id_nomina"]."</td>";
	 			echo "<td>".$fila["id_empleado"]."</td>";
	 			echo "<td>".$fila["fecha"]."</td>";
	 			echo "<td>".$fila["monto"]."</td>";
	 			?>
	 			<td id="celdaEliminar">
	 				<form action="" method="post">
	 					<input type="hidden" name="idE" value="<?php echo $fila['id_nomina'];?>">
	 					<input type="image" src="img/eli.jpg">
	 				</form>
	 			</td>
	 			<?php
	 			echo "</tr>";
	 		}

	 	?>
	 </table>