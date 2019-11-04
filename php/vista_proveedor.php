<section>
	<?php 
		if (!isset($_POST["idM"])) {
			
		
	 ?>
	<form action="" method="post" require>
Razón Social: <input type="text" name="rs"required><br>
Correo: 	  <input type="email" name="cor"required><br>
Dirección:   <input type="text" name="dir"required><br>
Telefono:     <input type="text" name="tel"required><br>
<div>
<input type="submit" name="altaProv" value="Ingresar">
</div>
</form>
	<?php 
		}else{
			require_once("proveedor.php");
			$obj = new Proveedor();
			$res = $obj->buscar($_POST["idM"]);
			$a = $res->fetch_assoc();
 	?>
 	<form action="" method="post" require>
Razón Social: <input type="text" value="<?php echo $a['razonsocial']; ?>" name = "rs" required><br>
Correo: 	  <input type="email" value="<?php echo $a['correo']; ?>" name="cor"required><br>
Dirección:   <input type="text" value="<?php echo $a['diireccion']; ?>" name="dir"required><br>
Telefono:     <input type="text" value="<?php echo $a['telefono']; ?>" name="tel"required><br>
<input type="hidden" name="id" value="<?php echo $_POST['idM']?>">
<div>
<input type="submit" name="modificaProv" value="Modificar">
</div>
</form>
	<?php
			} 
		require_once("proveedor.php");
		$obj = new proveedor();
		if (isset($_POST["idE"])) {
			$id = $_POST["idE"];
			$obj->baja($id);
			echo "<script>;
			alert('Proveedor Eliminado');
			window.location='home.php?s=prov';
			</script>";
		}
		if (isset($_POST["altaProv"])) {
		$r = $_POST["rs"];
		$c = $_POST["cor"];
		$d = $_POST["dir"];
		$t = $_POST["tel"];
		$obj->alta($r,$c,$d,$t);
		echo "<script>;	alert('Proveedor Registrado'); window.location='home.php?s=prov'; </script>";
		}

		if (isset($_POST["modificaProv"])) {
		$r = $_POST["rs"];
		$c = $_POST["cor"];
		$d = $_POST["dir"];
		$t = $_POST["tel"];
		$id  =$_POST["id"];
		$obj->modificacion($r,$c,$d,$t,$id);
		echo "<script> alert('Proveedor Modificado'); window.location='home.php?s=prov'; </script>";
		}
		$resultado = $obj->consulta();

	 ?>
	 <table>
	 	<tr>
	 		<th>Razón Social</th>
	 		<th>Correo</th>
	 		<th>Dirección</th>
	 		<th>Telefono</th>
	 	</tr>
	 	<?php  
	 		while ($fila = $resultado->fetch_assoc()) {
	 			echo "<tr>";
	 			echo "<td>".$fila["razonsocial"]."</td>";
	 			echo "<td>".$fila["correo"]."</td>";
	 			echo "<td>".$fila["diireccion"]."</td>";
	 			echo "<td>".$fila["telefono"]."</td>";
	 			?>
	 			<td id="celdaEliminar">
	 				<form action="" method="post">
	 					<input type="hidden" name="idE" value="<?php echo $fila['id_proveedor'];?>">
	 					<input type="image" src="img/eli.jpg">
	 				</form>
	 			</td>
	 			<td id="celdaModificar">
	 				<form action="" method="post" onsubmit="return confirmarM()">
	 					<input type="hidden" name="idM" value="<?php echo $fila['id_proveedor'];?>">
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