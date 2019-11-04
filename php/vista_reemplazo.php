<section>
	<form action="" method="post" require>
		Id Recurso: <input type="text" name="ir" required=""><br>
		Id Empleado: <input type="text" name="ie" required=""><br>
		Fecha: <input type="date" name="fe" required=""><br>
		Descripción de Falla: <input type="text" name="df"><br>

		<div>
			<input type="submit" name="altaRee" value="Ingresar">
		</div>
	</form>
	<?php 
		require_once("reemplazo.php");
		$obj = new reemplazo();
		if (isset($_POST["idE"])) {
			$id = $_POST["idE"];
			$obj->baja($id);
			echo "<script>;
			alert('Reemplazo Eliminado');
			window.location='home.php?s=ree';
			</script>";
		}
		if (isset($_POST["altaRee"])) {
			$i = $_POST["ir"];
			$id = $_POST["ie"];
			$f = $_POST["fe"];
			$d = $_POST["df"];
			$obj->alta($i, $id, $f, $d);
			echo "<script>;
			alert('Reemplazo Agregado');
			window.location='home.php?s=ree';
			</script>";
		}
		$resultado = $obj->consulta();

	 ?>
	 <table>
	 	<tr style="background: gold">
	 		<th>Reemplazo</th>
	 		<th>Recurso</th>
	 		<th>Empleado</th>
	 		<th>Fecha</th>
	 		<th>Falla</th>
	 		
	 	</tr>
	 	<?php  
	 		while ($fila = $resultado->fetch_assoc()) {
	 			echo "<tr>";
	 			echo "<td>".$fila["id_reemplazo"]."</td>";
	 			echo "<td>".$fila["id_recurso"]."</td>";
	 			echo "<td>".$fila["id_empleado"]."</td>";
	 			echo "<td>".$fila["fecha"]."</td>";
	 			echo "<td>".$fila["falla"]."</td>";
	 			?>
	 			<td id="celdaEliminar">
	 				<form action="" method="post">
	 					<input type="hidden" name="idE" value="<?php echo $fila['id_reemplazo'];?>">
	 					<input type="image" src="img/eli.jpg">
	 				</form>
	 			</td>
	 			<?php
	 			echo "</tr>";
	 		}

	 	?>
	 </table