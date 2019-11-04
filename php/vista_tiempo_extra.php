<section>
	<form action="" method="post" require>
		Id Empleado: <input type="text" name="ie" required=""><br>
		Horas Trabajadas: <input type="text" name="ht" required=""><br>
		Pago: <input type="text" name="pa" required=""><br>

		<div>
			<input type="submit" name="altaTex" value="Ingresar">
		</div>
	</form>
	<?php 
		require_once("tiempo_extra.php");
		$obj = new tiempo_extra();
		if (isset($_POST["idE"])) {
			$id = $_POST["idE"];
			$obj->baja($id);
			echo "<script>;
			alert('Tiempo Extra Eliminado');
			window.location='home.php?s=tie';
			</script>";
		}
		if (isset($_POST["altaTex"])) {
			$i = $_POST["ie"];
			$h = $_POST["ht"];
			$p = $_POST["pa"];
			$obj->alta($i, $h, $p);
			echo "<script>;
			alert('Tiempo Extra Agregado');
			window.location='home.php?s=tie';
			</script>";
		}
		$resultado = $obj->consulta();

	 ?>
	 <table>
	 	<tr>
	 		<th>Codigo</th>
			<th>Empleado</th>
			<th>Horas</th>
			<th>Pago</th>
	 		
	 	</tr>
	 	<?php  
	 		while ($fila = $resultado->fetch_assoc()) {
	 			echo "<tr>";
	 			echo "<td>".$fila["id_tiempo"]."</td>";
	 			echo "<td>".$fila["id_empleado"]."</td>";
	 			echo "<td>".$fila["horas"]."</td>";
	 			echo "<td>".$fila["pago"]."</td>";
	 			?>
	 			<td id="celdaEliminar">
	 				<form action="" method="post">
	 					<input type="hidden" name="idE" value="<?php echo $fila['id_tiempo'];?>">
	 					<input type="image" src="img/eli.jpg">
	 				</form>
	 			</td>
	 			<?php
	 			echo "</tr>";
	 		}

	 	?>
	 </table