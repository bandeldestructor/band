<section>
	<form action="" method="post" require>
		Proveedor: <input type="text" name="pro" required><br>
		Fecha: <input type="date" name="fe" required><br>
		Total: <input type="text" name="to" required><br>
		<div>
			<input type="submit" name="altaCom" value="Ingresar">
		</div>
	</form>
	<?php  
		require_once("compra.php");
		$obj = new compra();
		if (isset($_POST["idE"])) {
			$id = $_POST["idE"];
			$obj->baja($id);
			echo "<script>;
			alert('Compra Eliminada');
			window.location='home.php?s=com';
			</script>";
		}
		if (isset($_POST["altaCom"])){
			$p = $_POST["pro"];
			$f = $_POST["fe"];
			$t = $_POST["to"];
			$obj->alta($p, $f, $t);
			echo "<script>;
			alert('Compra Registrado');
			window.location='home.php?s=com';
			</script>";
		}
		$resultado = $obj->consulta();
	?>


	<table>
		<tr>
			<td>Compra</td>
			<td>Proveedor</td>
			<td>Fecha</td>
			<td>Total</td>
		</tr>

		<?php 
			while ($fila = $resultado->fetch_assoc()) {
				echo "<tr>";
				echo "<th>".$fila["id_compra"]."</th>";
				echo "<th>".$fila["id_proveedor"]."</th>";
				echo "<th>".$fila["fecha"]."</th>";
				echo "<th>".$fila["total"]."</th>";
				?>
	 			<td id="celdaEliminar">
	 				<form action="" method="post">
	 					<input type="hidden" name="idE" value="<?php echo $fila['id_compra'];?>">
	 					<input type="image" src="img/eli.jpg">
	 				</form>
	 			</td>

	 			<?php
				echo "</tr>";
			}
		 ?>
	</table>
</section>