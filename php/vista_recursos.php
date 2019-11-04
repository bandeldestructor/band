<section>
	<form action="" method="post" require>
		Nombre: <input type="text" name="no" required=""><br>
		Marca: <input type="text" name="ma" required=""><br>
		Descripción: <input type="text" name="de" required=""><br>
		Existencia: <input type="text" name="ex" required=""><br>
		Costo: <input type="text" name="co" required=""><br>
		Id Empleado: <input type="text" name="ie" required=""><br>
		Área: <input type="text" name="ar" required=""><br>

		<div>
			<input type="submit" name="altaRec" value="Ingresar">
		</div>
	</form>
	<?php 
		require_once("recursos.php");
		$obj = new recursos();
		if (isset($_POST["idE"])) {
			$id = $_POST["idE"];
			$obj->baja($id);
			echo "<script>;
			alert('Recurso Eliminado');
			window.location='home.php?s=rec';
			</script>";
		}
		if (isset($_POST["altaRec"])) {
			$n = $_POST["no"];
			$m = $_POST["ma"];
			$d = $_POST["de"];
			$e = $_POST["ex"];
			$c = $_POST["co"];
			$i = $_POST["ie"];
			$a = $_POST["ar"];
			$obj->alta($n, $m, $d, $e, $c, $i, $a);
			echo "<script>;
			alert('Recurso Agregado');
			window.location='home.php?s=rec';
			</script>";
		}
		$resultado = $obj->consulta();

	 ?>
	 <table>
	 	<tr>	
	 		<th>Codigo</th>
	 		<th>Nombre</th>
	 		<th>Marca</th>
	 		<th>Descripcion</th>
	 		<th>Existencia</th>
	 		<th>Costo</th>
	 		<th>Empleado</th>
	 		<th>Area</th>
	 	</tr>
	 	<?php  
	 		while ($fila = $resultado->fetch_assoc()) {
	 			echo "<tr>";
	 			echo "<td>".$fila["id_recursos"]."</td>";
	 			echo "<td>".$fila["nombre"]."</td>";
	 			echo "<td>".$fila["marca"]."</td>";
	 			echo "<td>".$fila["descripcion"]."</td>";
	 			echo "<td>".$fila["existencia"]."</td>";
	 			echo "<td>".$fila["costo"]."</td>";
	 			echo "<td>".$fila["id_empleado"]."</td>";
	 			echo "<td>".$fila["area"]."</td>";
	 			?>
	 			<td id="celdaEliminar">
	 				<form action="" method="post">
	 					<input type="hidden" name="idE" value="<?php echo $fila['id_recursos'];?>">
	 					<input type="image" src="img/eli.jpg">
	 				</form>
	 			</td>
	 			<?php
	 			echo "</tr>";
	 		}

	 	?>
	 </table>