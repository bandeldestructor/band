<section>
	<form action="" method="post" require>
		Nombre: <input type="text" name="no" required=""><br>
		Password: <input type="password" name="pa" required=""><br>
		Id Empleado: <input type="text" name="ie" required=""><br>

		<div>
			<input type="submit" name="altaUsu" value="Ingresar">
		</div>
	</form>
	<?php 
		require_once("usuario.php");
		$obj = new usuario();
		if (isset($_POST["idE"])) {
			$id = $_POST["idE"];
			$obj->baja($id);
			echo "<script>;
			alert('Usiario Eliminado');
			window.location='home.php?s=usu';
			</script>";
		}
		if (isset($_POST["altaUsu"])) {
			$n = $_POST["no"];
			$p = $_POST["pa"];
			$i = $_POST["ie"];
			$obj->alta($n, $p, $i);
			echo "<script>;
			alert('Usuario Agregado');
			window.location='home.php?s=usu';
			</script>";
		}
		$resultado = $obj->consulta();

	 ?>
	 <table>
	 	<tr>
	 		<th>Usuario</th>
			<th>Nombre</th>
			<th>Password</th>
			<th>Empleado</th>
	 		
	 	</tr>
	 	<?php  
	 		while ($fila = $resultado->fetch_assoc()) {
	 			echo "<tr>";
	 			echo "<td>".$fila["id_usuario"]."</td>";
	 			echo "<td>".$fila["nombre"]."</td>";
	 			echo "<td>".$fila["password"]."</td>";
	 			echo "<td>".$fila["id_empleado"]."</td>";
	 			?>
	 			<td id="celdaEliminar">
	 				<form action="" method="post">
	 					<input type="hidden" name="idE" value="<?php echo $fila['id_usuario'];?>">
	 					<input type="image" src="img/eli.jpg">
	 				</form>
	 			</td>
	 			<?php
	 			echo "</tr>";
	 		}

	 	?>
	 </table