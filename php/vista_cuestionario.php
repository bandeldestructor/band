<section>
	<form action="" method="post" require>
		Respuesta 1: <input type="text" name="re1" required><br>
		Respuesta 2: <input type="text" name="re2" required><br>
		Respuesta 3: <input type="text" name="re3" required><br>
		Respuesta 4: <input type="text" name="re4" required><br>
		Respuesta 5: <input type="text" name="re5" required><br>
		Respuesta 6: <input type="text" name="re6" required><br>
		Respuesta 7: <input type="text" name="re7" required><br>
		Respuesta 8: <input type="text" name="re8" required><br>
		Respuesta 9: <input type="text" name="re9" required><br>
		Respuesta 10: <input type="text" name="re10" required><br>

		<div>
			<input type="submit" name="altaCue" value="Ingresar">
		</div>
	</form>
	<?php 
		require_once("cuestionario.php");
		$obj = new cuestionario();
		if (isset($_POST["idE"])) {
			$id = $_POST["idE"];
			$obj->baja($id);
			echo "<script>;
			alert('Cuestionario Eliminado');
			window.location='home.php?s=cue';
			</script>";
		}

		if (isset($_POST["altaCue"])) {
			$r1 = $_POST["re1"];
			$r2 = $_POST["re2"];
			$r3 = $_POST["re3"];
			$r4 = $_POST["re4"];
			$r5 = $_POST["re5"];
			$r6 = $_POST["re6"];
			$r7 = $_POST["re7"];
			$r8 = $_POST["re8"];
			$r9 = $_POST["re9"];
			$r10 = $_POST["re10"];
			$obj->alta($r1, $r2, $r3, $r4, $r5, $r6,$r7, $r8, $r9, $r10);
			echo "<script>;
			alert('Cuestionario Registrado');
			window.location='home.php?s=cue';
			</script>";
		}

		$resultado = $obj->consulta();
	 ?>
	 <table>
	 	<tr>
	 		<td>Id Cuestionario</td>
	 		<td>R1</td>
	 		<td>R2</td>
	 		<td>R3</td>
	 		<td>R4</td>
	 		<td>R5</td>
	 		<td>R6</td>
	 		<td>R7</td>
	 		<td>R8</td>
	 		<td>R9</td>
	 		<td>R10</td>
	 	</tr>
	 	<?php 
			while ($fila = $resultado->fetch_assoc()) {
				echo "<tr>";
				echo "<th>".$fila["id_cuestionario"]."</th>";
				echo "<th>".$fila["R1"]."</th>";
				echo "<th>".$fila["R2"]."</th>";
				echo "<th>".$fila["R3"]."</th>";
				echo "<th>".$fila["R4"]."</th>";
				echo "<th>".$fila["R5"]."</th>";
				echo "<th>".$fila["R6"]."</th>";
				echo "<th>".$fila["R7"]."</th>";
				echo "<th>".$fila["R8"]."</th>";
				echo "<th>".$fila["R9"]."</th>";
				echo "<th>".$fila["R10"]."</th>";
				?>
	 			<td id="celdaEliminar">
	 				<form action="" method="post">
	 					<input type="hidden" name="idE" value="<?php echo $fila['id_cuestionario'];?>">
	 					<input type="image" src="img/eli.jpg">
	 				</form>
	 			</td>
	 			<?php
				echo "</tr>";
				
			}
		 ?>
	 </table>
</section>