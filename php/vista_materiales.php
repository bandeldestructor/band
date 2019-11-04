<section>
	<form action="" method="post" require>
		Nombre: <input type="text" name="no" required><br>
		<div>
			<input type="submit" name="altaMas" value="Ingresar">
		</div>
		
	</form>
	<?php 
		require_once("materiales.php");
		$obj = new materiales();
		if (isset($_POST["idE"])) {
			$id = $_POST["idE"];
			$obj->baja($id);
			echo "<script>;
			alert('Material Eliminado');
			window.location='home.php?s=mat';
			</script>";
		}
		if (isset($_POST["altaMas"])) {
			$n = $_POST["no"];
			$obj->alta($n);
			echo "<script>;
			alert('Materiales Agregados');
			window.location='home.php?s=mat';
			</script>";
		}
		$resultado = $obj->consulta();

	 ?>
	 <table>
	 	<tr>
	 		<th>Id Materiales</th>
	 		<th>Nombre</th>
	 	</tr>
	 	<?php  
	 		while ($fila = $resultado->fetch_assoc()) {
	 			echo "<tr>";
	 			echo "<td>".$fila["id"]."</td>";
	 			echo "<td>".$fila["nmbre"]."</td>";
	 			?>
	 			<td id="celdaEliminar">
	 				<form action="" method="post">
	 					<input type="hidden" name="idE" value="<?php echo $fila['id'];?>">
	 					<input type="image" src="img/eli.jpg">
	 				</form>
	 			</td>
	 			<?php
	 			echo "</tr>";
	 		}

	 	?>
	 </table>