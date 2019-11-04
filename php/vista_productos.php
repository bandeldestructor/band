<section>
	 <form action="" method="post" require>
	 	Nombre: <input type="text" name="no" required=""><br>
	 	Costo: <input type="text" name="co" required=""><br>
	 	Unidad: <input type="text" name="un" required=""><br>
	 	Stock Minimo: <input type="text" name="sm" required=""><br>
	 	Existencia: <input type="text" name="ex" required=""><br>
	 	Código: <input type="text" name="cd" required=""><br>
	 	Descripción: <input type="text" name="des" required=""><br>
	 	Almacen: <input type="text" name="al" required=""><br>
	 	Categoria: <input type="text" name="cat" required=""><br>
	 	
	 	<div>
	 		<input type="submit" name="altaProd" value="Ingresar">
	 	</div>
	 </form>
	<?php 
		require_once("producto.php");
		$obj = new producto();
		if (isset($_POST["idE"])) {
			$id = $_POST["idE"];
			$obj->baja($id);
			echo "<script>;
			alert('Producto Eliminado');
			window.location='home.php?s=pdc';
			</script>";
		}
		if (isset($_POST["altaProd"])) {
			$n = $_POST["no"];
			$c = $_POST["co"];
			$u = $_POST["un"];
			$s = $_POST["sm"];
			$e = $_POST["ex"];
			$d = $_POST["cd"];
			$de = $_POST["des"];
			$a = $_POST["al"];
			$ca = $_POST["cat"];
			$obj->alta($n, $c, $u, $s, $e, $d, $de, $a, $ca);
			echo "<script>;
			alert('Producto Agregado');
			window.location='home.php?s=pdc';
			</script>";


		}
		$resultado = $obj->consulta();

	 ?>
	 <table>
	 	<tr>
	 		<th>Id</th>
	 		<th>Nombre</th>
	 		<th>Costo</th>
	 		<th>Unidad</th>
	 		<th>Stock Minimo</th>
	 		<th>Existencia</th>
	 		<th>Codigo</th>
	 		<th>Descripción</th>
	 		<th>Almacen</th>
	 		<th>Categoria</th>
	 	</tr>
	 	<?php  
	 		while ($fila = $resultado->fetch_assoc()) {
	 			echo "<tr>";
	 			echo "<td>".$fila["id_producto"]."</td>";
	 			echo "<td>".$fila["nombre"]."</td>";
	 			echo "<td>".$fila["costo"]."</td>";
	 			echo "<td>".$fila["unidad"]."</td>";
	 			echo "<td>".$fila["stock_min"]."</td>";
	 			echo "<td>".$fila["existencia"]."</td>";
	 			echo "<td>".$fila["codigo"]."</td>";
	 			echo "<td>".$fila["descripcion"]."</td>";
	 			echo "<td>".$fila["almacen"]."</td>";
	 			echo "<td>".$fila["categoria"]."</td>";
	 			?>
	 			<td id="celdaEliminar">
	 				<form action="" method="post">
	 					<input type="hidden" name="idE" value="<?php echo $fila['id_producto'];?>">
	 					<input type="image" src="img/eli.jpg">
	 				</form>
	 			</td>
	 			<?php
	 			echo "</tr>";
	 		}

	 	?>
	 </table>