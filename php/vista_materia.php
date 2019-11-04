<section>
	<form action="" method="post" require>
		Nombre: <input type="text" name="no" required><br>
		Unidad: <input type="text" name="un" required><br>
		Existencia: <input type="text" name="ex" required><br>
		Costo: <input type="text" name="co" required><br>
		Id Proveedor: <input type="text" name="ip" required><br>

		<div>
			<input type="submit" name="altaMat" value="Igresar">
		</div>
		
	</form>
	<?php 
		require_once("materia.php");
		$obj = new materia();
		if (isset($_POST["idE"])) {
			$id = $_POST["idE"];
			$obj->baja($id);
			echo "<script>;
			alert('Materia Eliminada');
			window.location='home.php?s=mar';
			</script>";
		}
		if (isset($_POST["altaMat"])) {
			$n = $_POST["no"];
			$u = $_POST["un"];
			$e = $_POST["ex"];
			$c = $_POST["co"];
			$i = $_POST["ip"];
			$obj->alta($n, $u, $e, $c, $i);
			echo "<script>;
			alert('Materia Registrada');
			window.location='home.php?s=mar';
			</script>";
		}
		$resultado = $obj->consulta();
	 ?>
	 <table>
	 	<tr>
	 		<td>Materia</td>
	 		<td>Nombre</td>
	 		<td>Unidad</td>
	 		<td>Existencia</td>
	 		<td>Costo</td>
	 		<td>Proveedor</td>
	 	</tr>
	 	<?php 
			while ($fila = $resultado->fetch_assoc()) {
				echo "<tr>";
				echo "<th>".$fila["id_Materia"]."</th>";
				echo "<th>".$fila["nombre"]."</th>";
				echo "<th>".$fila["unidad"]."</th>";
				echo "<th>".$fila["existencia"]."</th>";
				echo "<th>".$fila["costo"]."</th>";
				echo "<th>".$fila["id_proveedor"]."</th>";
				?>
	 			<td id="celdaEliminar">
	 				<form action="" method="post">
	 					<input type="hidden" name="idE" value="<?php echo $fila['id_Materia'];?>">
	 					<input type="image" src="img/eli.jpg">
	 				</form>
	 			</td>
	 			<?php
				echo "</tr>";	
			}
		 ?>
	 </table>
</section>