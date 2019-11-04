<section>
	<?php 
		if (!isset($_POST["idM"])) {
			
		
	 ?>
	<form action="" method="post" require>
Usuario: 	  <input type="text" name="ur"required><br>
Fecha:   <input type="date" name="fe"required><br>
Movimiento:     <input type="text" name="mo"required><br>
<div>
	<input type="submit" name="altaAct" value="Ingresar">
</div>
</form>
	<?php 
		}else{
			require_once("actividad.php");
			$obj = new actividad();
			$res = $obj->buscar($_POST["idM"]);
			$a = $res->fetch_assoc();
 	?>
 	<form action="" method="post" require>
Usuario: 	  <input type="text" value="<?php echo $a['id_usuario']; ?>" name="ur"required><br>
Fecha:   <input type="date" value="<?php echo $a['fecha']; ?>" name="fe"required><br>
Movimiento:     <input type="text" value="<?php echo $a['movimiento']; ?>" name="mo"required><br>
<input type="hidden" name="id" value="<?php echo $_POST['idM']?>">
<div>
	<input type="submit" name="modificacionAct" value="Modificar">
</div>
</form>

	<?php 
			}
		require_once("actividad.php");
		$obj = new actividad();
		if (isset($_POST["idE"])) {
			$id = $_POST["idE"];
			$obj->baja($id);
			echo "<script>;
			alert('Actividad Eliminada');
			window.location='home.php?s=act';
			</script>";
		}
		if (isset($_POST["altaAct"])) {
			$u = $_POST["ur"];
			$f = $_POST["fe"];
			$m = $_POST["mo"];
			$obj->alta($u, $f, $m);
			echo "<script>;
			alert('Actividad Regisrada');
			window.location='home.php?s=act';
			</script>";
		}
		if (isset($_POST["modificacionAct"])) {
			$u = $_POST["ur"];
			$f = $_POST["fe"];
			$m = $_POST["mo"];
			$id  =$_POST["id"];
			$obj->alta($u, $f, $m, $id);
			echo "<script>;
			alert('Actividad Modificada');
			window.location='home.php?s=act';
			</script>";
		}

		$resultado = $obj->consulta();
	?>
	 <table>
	 	<tr>
	 		<th>Actividad</th>
	 		<th>Usuario</th>
	 		<th>Fecha</th>
	 		<th>Movimiento</th>
	 		
	 	</tr>
	 	<?php  
	 		while ($fila = $resultado->fetch_assoc()) {
	 			echo "<tr>";
	 			echo "<td>".$fila["id_actividad"]."</td>";
	 			echo "<td>".$fila["id_usuario"]."</td>";
	 			echo "<td>".$fila["fecha"]."</td>";
	 			echo "<td>".$fila["movimiento"]."</td>";
	 			?>
	 			<td id="celdaEliminar">
	 				<form action="" method="post">
	 					<input type="hidden" name="idE" value="<?php echo $fila['id_actividad'];?>">
	 					<input type="image" src="img/eli.jpg">
	 				</form>
	 			</td>
					<td id="celdaModificar">
	 				<form action="" method="post" onsubmit="return confirmarM()">
	 					<input type="hidden" name="idM" value="<?php echo $fila['id_actividad'];?>">
	 					<input type="image" src="img/mod.jpg">
	 				</form>
	 			</td>

	 			<?php
	 			echo "</tr>";
	 		}

	 	?>
	 </table>


</section>

<script type="text/javascript">
	function confirmar(){
		var algo = confirm("Estas seguro de eliminar?");
		return algo;
	}
	function confirmarM(){
		var algo = confirm("Estas seguro de modificar?");
		return algo;
	}

</script>