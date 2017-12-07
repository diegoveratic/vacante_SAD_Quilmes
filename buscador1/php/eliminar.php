<?php
 
	
	require 'conexion.php';
	$mysqli=getConnexion();
	$id = $_GET['id'];
	
	$sql = "DELETE FROM datos WHERE id_tabla = '$id'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../bootstrap/css/bootstrap-theme.css" rel="stylesheet">
		<script src="../bootstrap/js/jquery-3.1.1.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>	
	</head>
	
	<body style="background-color:#f1f1f1;">
		<div class="container-fluid">
			<div class="row">
 				 <img src="../css/SAD.png" class="img-fluid" style="width:100%; height:25%;  alt="SAD de Quilmes">
			</div>
		</div>
		<div class="container"  style="background-color: #fff;box-shadow: 1px 1px 8px 1px #888; margin-top: 2em; padding: 10%">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3 class="display-1">REGISTRO ELIMINADO</h3>
				<?php } else { ?>
				<h3 class="display-1">ERROR AL ELIMINAR</h3>
				<?php } ?>
				
				<a href="../tabla_datos.php" class="btn btn-lg active btn-info">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>
