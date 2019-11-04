<section>
	<form action="" method="post" require>
		Id Empleado: <input type="text" name="ie" required=""><br>
		Fecha: <input type="date" name="fe" required=""><br>
		Hora de Entrada: <input type="text" name="he" required=""><br>
		Hora de Salida: <input type="text" name="hs" required=""><br>

		<div>
			<input type="submit" name="altaPres" value="Ingresar">
		</div>
		
	</form>
	<?php 
		require_once("presencia.php");
		$obj = new presencia();
		if (isset($_POST["idE"])) {
			$id = $_POST["idE"];
			$obj->baja($id);
			echo "<script>;
			alert('Presencia Eliminada');
			window.location='home.php?s=pres';
			</script>";
		}
		if (isset($_POST["altaPres"])) {
			$e = $_POST["ie"];
			$f = $_POST["fe"];
			$h = $_POST["he"];
			$hh = $_POST["hs"];
			$obj->alta($e, $f, $h, $hh);
			echo "<script>;
			alert('Presencia Agregada')
			window.location='home.php?s=pres';
			</script>";
		}
		$resultado = $obj->consulta();

	 ?>
	 <table>
	 	<tr>	
	 		<th>Presencia</th>
	 		<th>Empleado</th>
	 		<th>Fecha</th>
	 		<th>Hora Entrada</th>
	 		<th>Hora Salida</th>
	 	</tr>
	 	<?php  
	 		while ($fila = $resultado->fetch_assoc()) {
	 			echo "<tr>";
	 			echo "<td>".$fila["id_presencia"]."</td>";
	 			echo "<td>".$fila["id_empleado"]."</td>";
	 			echo "<td>".$fila["fecha"]."</td>";
	 			echo "<td>".$fila["hora_entrada"]."</td>";
	 			echo "<td>".$fila["hora_salida"]."</td>";
	 			?>
	 			<td id="celdaEliminar">
	 				<form action="" method="post">
	 					<input type="hidden" name="idE" value="<?php echo $fila['id_presencia'];?>">
	 					<input type="image" src="img/eli.jpg">
	 				</form>
	 			</td>
	 			<?php
	 			echo "</tr>";
	 		}

	 	?>
	 </table>