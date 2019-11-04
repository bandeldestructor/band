<section>
	<form action="" method="post" require>
Nombre: <input type="text" name="no"required><br>
Correo: 	  <input type="email" name="co"required><br>
Dirección:   <input type="text" name="di"required><br>
Telefono <input type="text" name="te" required><br>
<div>
<input type="submit" name="altaCli" value="Ingresar">
</div>
</form>
	<?php 
		require_once("clientes.php");
		$obj = new clientes();
		if (isset($_POST["idE"])) {
			$id = $_POST["idE"];
			$obj->baja($id);
			echo "<script>;
			alert('Cliente Eliminado');
			window.location='home.php?s=clie';
			</script>";
		}
		if (isset($_POST["altaCli"])) {
			$n = $_POST["no"];
			$c = $_POST["co"];
			$d = $_POST["di"];
			$t = $_POST["te"];
			$obj->alta($n, $c, $d, $t);
			echo "<script>;
			alert('Balance Registrado');
			window.location='home.php?s=clie';
			</script>";
		}
		$resultado = $obj->consulta();

	 ?>
	 <table>
	 	<tr>
	 		<th>Id Cliente</th>
	 		<th>Nombre</th>
	 		<th>Correo</th>
	 		<th>Dirección</th>
	 		<th>Telefono</th>
	 	</tr>
	 	<?php  
	 		while ($fila = $resultado->fetch_assoc()) {
	 			echo "<tr>";
	 			echo "<td>".$fila["id_cliente"]."</td>";
	 			echo "<td>".$fila["nombre"]."</td>";
	 			echo "<td>".$fila["correo"]."</td>";
	 			echo "<td>".$fila["direccion"]."</td>";
	 			echo "<td>".$fila["telefono"]."</td>";
	 			?>
	 			<td id="celdaEliminar">
	 				<form action="" method="post">
	 					<input type="hidden" name="idE" value="<?php echo $fila['id_cliente'];?>">
	 					<input type="image" src="img/eli.jpg">
	 				</form>
	 			</td>

	 			<?php
	 			echo "</tr>";
	 		}

	 	?>
	 </table>
