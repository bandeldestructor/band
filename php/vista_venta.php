<section>
	<form action="" method="post" rquire>
		Id Cliente: <input type="text" name="ic" required=""><br>
		Fecha: <input type="date" name="fe" required=""><br>
		Total: <input type="text" name="to" required=""><br>
		Id Empleado <input type="text" name="ie" required=""><br>

		<div>
			<input type="submit" name="altaVen" value="Ingresar">
		</div>
		
	</form>
	<?php 
		require_once("ventas.php");
		$obj = new ventas();
		if (isset($_POST["altaVen"])) {
			$i = $_POST["ic"];
			$f = $_POST["fe"];
			$t = $_POST["to"];
			$e = $_POST["ie"];
			$obj->alta($i, $f, $t, $e);
			echo "<script>;
			alert('Venta Agregada');
			window.location='home.php?s=ven';
			</script>";
		}
		$resultado = $obj->consulta();

	 ?>
	 <table>
	 	<tr>
	 		<th>Venta</th>
			<th>Cliente</th>
			<th>Fecha</th>
			<th>Total</th>
			<th>Empleado</th>
	 		
	 	</tr>
	 	<?php  
	 		while ($fila = $resultado->fetch_assoc()) {
	 			echo "<tr>";
	 			echo "<td>".$fila["id_venta"]."</td>";
	 			echo "<td>".$fila["id_cliente"]."</td>";
	 			echo "<td>".$fila["fecha"]."</td>";
	 			echo "<td>".$fila["total"]."</td>";
	 			echo "<td>".$fila["id_empleado"]."</td>";
	 			echo "</tr>";
	 		}

	 	?>
	 </table