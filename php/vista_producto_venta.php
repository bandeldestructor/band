<section>
	<form action="" method="post" require>
		Id Venta: <input type="text" name="iv" required=""><br>
		Cantidad: <input type="text" name="ca" required=""><br>
		<div>
			<input type="submit" name="altaDv" value="Ingresar">
		</div>
	</form>
	<?php 
		require_once("producto_vente.php");
		$obj = new producto_vente();
		if (isset($_POST["altaDv"])) {
			$i = $_POST["iv"];
			$c = $_POST["ca"];
			$obj->alta($i, $c);
			echo "<script>;
			alert('Detalle Agregado');
			window.location='home.php?s=dep'
			</script>";
		}
		$resultado = $obj->consulta();

	 ?>
	 <table>
	 	<tr>	
	 		<th>Producto</th>
	 		<th>Venta</th>
	 		<th>Cantidad</th>

	 	</tr>
	 	<?php  
	 		while ($fila = $resultado->fetch_assoc()) {
	 			echo "<tr>";
	 			echo "<td>".$fila["id_producto"]."</td>";
	 			echo "<td>".$fila["id_venta"]."</td>";
	 			echo "<td>".$fila["cantidad"]."</td>";
	 			echo "</tr>";
	 		}

	 	?>
	 </table>