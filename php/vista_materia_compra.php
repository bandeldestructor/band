<section>
	<form action="" method="post" require>
		Id Materia: <input type="text" name="im" required><br>
		Cantidad: <input type="text" name="ca" required><br>
		<div>
			<input type="submit" name="altaDet" value="Ingresar">
		</div>
	</form>
	<?php 
		require_once("materia_compra.php");
		$obj = new materia_compra();
		if (isset($_POST["altaDet"])) {
			$i = $_POST["im"];
			$c = $_POST["ca"];
			$obj->alta($i, $c);
			echo "<script>;
			alert('Detalle Agragado');
			window.location=home.php?s=det;
			</script>";
		}
		$resultado = $obj->consulta();

	 ?>
	 <table>
	 	<tr>
	 		<th>Materia Compra</th>
	 		<th>Materia</th>
	 		<th>Cantidad</th>
	 	</tr>
	 	<?php  
	 		while ($fila = $resultado->fetch_assoc()) {
	 			echo "<tr>";
	 			echo "<td>".$fila["id_Compra"]."</td>";
	 			echo "<td>".$fila["id_Materia"]."</td>";
	 			echo "<td>".$fila["Cantidad"]."</td>";
	 			echo "</tr>";
	 		}

	 	?>
	 </table>