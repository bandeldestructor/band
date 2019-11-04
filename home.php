<!DOCTYPE html>
<html>
<head>

	<title style="color: black">ERP</title>	
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

	<header>ERP</header>

	<nav>
		<uls>

			<a href="?s=act" style="color: white;"><li>Actividad</li></a>
			<a href="?s=bal" style="color: white;"><li>Balance</li></a>
			<a href="?s=clie" style="color: white;"><li>Clientes</li></a>
			<a href="?s=com" style="color: white;"><li>Compras</li></a>
			<a href="?s=cue" style="color: white;"><li>Cuestionarios</li></a>
			<a href="?s=emp" style="color: white;"><li>Empleados</li></a>
			<a href="?s=eva" style="color: white;"><li>Evaluación</li></a>
			<a href="?s=mant" style="color: white;"><li>Mantenimiento</li></a>
			<a href="?s=mar" style="color: white;"><li>Materia</li></a>
			<a href="?s=mat" style="color: white;"><li>Materiales</li></a>
			<a href="?s=det" style="color: white;"><li>Detalle Compra</li></a>
			<a href="?s=nom" style="color: white;"><li>Nomina</li></a>
			<a href="?s=pres" style="color: white;"><li>Presencia</li></a>
			<a href="?s=dep" style="color: white;"><li>Detalle Venta</li></a>
			<a href="?s=pdc" style="color: white"><li>Productos</li></a>
			<a href="?s=prov" style="color: white"><li>Proveedor</li></a>
			<a href="?s=rec" style="color: white;"><li>Recursos</li></a>
			<a href="?s=ree" style="color: white;"><li>Reemplazo</li></a>
			<a href="?s=tie" style="color: white;"><li>Tiempo Extra</li></a>
			<a href="?s=usu" style="color: white;"><li>Usuarios</li></a>
			<a href="?s=ven" style="color: white;"><li>Ventas</li></a>
			

		</ul>

	</nav>
	<?php 
		if (isset($_GET["s"])) {
			$seccion = $_GET["s"];
			switch ($seccion) {
				case 'act':
					require_once("php/vista_actividad.php");
					break;
				case 'bal':
					require_once("php/vista_balance.php");
					break;
				case 'clie':
					require_once("php/vista_cliente.php");
					break;
				case 'com':
					require_once("php/vista_compra.php");
					break;	
				case 'cue':
					require_once("php/vista_cuestionario.php");
					break;
				case 'emp':
					require_once("php/vista_empleado.php");
					break;
				case 'eva':
					require_once("php/vista_evaluacion.php");
					break;
				case 'mant':
					require_once("php/vista_mantenimiento.php");
					break;
				case 'mar':
					require_once("php/vista_materia.php");
					break;
				case 'mat':
					require_once("php/vista_materiales.php");
					break;
				case 'det':
					require_once("php/vista_materia_compra.php");
					break;
				case 'nom':
					require_once("php/vista_nomina.php");
					break;
				case 'pres':
					require_once("php/vista_presencia.php");
					break;
				case 'pdc':
					require_once("php/vista_productos.php");
					break;
				case 'dep':
					require_once("php/vista_producto_venta.php");
					break;
				case 'prov':
					require_once("php/vista_proveedor.php");
					break;
				case 'rec':
					require_once("php/vista_recursos.php");
					break;
				case 'ree':
					require_once("php/vista_reemplazo.php");
					break;
				case 'tie':
					require_once("php/vista_tiempo_extra.php");
					break;
				case 'usu':
					require_once("php/vista_usuarios.php");
					break;
				case 'ven':
					require_once("php/vista_venta.php");
					break;
				case 'grafPro':
					require_once("php/grafica.php");
					break;
		}
		
		}

	 ?>
</body>
</html>