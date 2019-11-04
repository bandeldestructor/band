<section>
	<form action="" method="post" require>
Fecha de Inicio <input type="date" name="fei"required><br>
Fecha  Fin: 	  <input type="date" name="fef"required><br>
Total:   <input type="text" name="to"required><br>
<div>
<input type="submit" name="altaBal" value="Ingresar">
</div>
</form>
	<?php  
		require_once("balance.php");
		$obj = new balance();
		if (isset($_POST["idE"])) {
			$id = $_POST["idE"];
			$obj->baja($id);
			echo "<script>;
			alert('Balance Eliminada');
			window.location='home.php?s=bal';
			</script>";
		}
		if (isset($_POST["altaBal"])) {
			$r = $_POST["fei"];
			$c = $_POST["fef"];
			$t = $_POST["to"];
			$obj->alta($r, $c, $t);
			echo "<script>;
			alert('Balance Registrado');
			window.location='home.php?s=bal';
			</script>";
		}
		$resultado = $obj->consulta();
	?>
	<table>
		<tr>
			<th>Balance</th>
			<th>Fecha Inicio</th>
			<th>Fecha Fin</th>
			<th>Total</th>
		</tr>

		<?php 
			while ($fila = $resultado->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$fila["id_balance"]."</td>";
				echo "<th>".$fila["fecha_inicio"]."</th>";
				echo "<th>".$fila["fecha_fin"]."</th>";
				echo "<th>".$fila["total"]."</th>";
				?>
	 			<td id="celdaEliminar">
	 				<form action="" method="post">
	 					<input type="hidden" name="idE" value="<?php echo $fila['id_balance'];?>">
	 					<input type="image" src="img/eli.jpg">
	 				</form>
	 			</td>

	 			<?php
	 			echo "</tr>";
			}
		 ?>
	</table>
	


</section>