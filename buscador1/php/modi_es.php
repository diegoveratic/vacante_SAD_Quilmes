<?php
 
	if(isset($_POST["editar"])) {

		$ser=$_POST['servicio'];
		$pro=$_POST['procedencia'];
		$def=$_POST['def'];
		$dir=$_POST['direccion'];
		$loca=$_POST['localidad'];
		$tipo=$_POST['tipo'];
		
			require_once 'conexion.php';
			$mysqli = new mysqli("localhost", "root", "", "dato_sad");
 
		if($mysqli->connect_errno) {
  		  echo "<b>Fallo al conectar a la BD: </b>" . $mysqli->connect_errno . "---" . $mysqli->connect_error;
		}
			$q = "UPDATE escuela SET servicio='$ser', procedencia='$pro', def='$def', direccion='$dir', localidad='$loca', tipo='$tipo'";
			$results = $mysqli->query($q);
			if($results) {

					header("Location: ../htm/modi_es.php?exito=reg");
				
			}else{

	        		header("Location: ../html/modi_es.php?error=modi");
    	   	 }
			mysql_close($mysqli);
		
	}