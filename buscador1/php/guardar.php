<?php

 
		require("conexion.php");
		$mysqli = new mysqli("localhost", "root", "", "dato_sad");
 
		if($mysqli->connect_errno) {
  		  echo "<b>Fallo al conectar a la BD: </b>" . $mysqli->connect_errno . "---" . $mysqli->connect_error;
		}

		$nom=$_POST["nombre"];
		$ape=$_POST["apellido"];
		$dni=$_POST["dni"];
		$materia=$_POST["materia"];
		$modulo=$_POST["modulo"];
		$sit_rtevista=$_POST["sit_rtevista"];
		$fecha=$_POST["fecha"];
		$accion=$_POST["accion"];
		$escuela=$_POST["escuela"];


			if ($nom != "" && $ape != "" && $dni != ""&& $materia != "" && $modulo !="" && $sit_rtevista != "" && $fecha !="" && $accion !="" && $escuela !="") { 
		
					$query = "INSERT INTO datos (nombre, apellido, dni, materia, modulos, sit_rtevista, fecha_de_ingreso, accion_estatutaria, escuela) VALUES  ('$nom', '$ape', '$dni', '$materia', '$modulo', '$sit_rtevista', '$fecha', '$accion', '$escuela')";

					if ($res = $mysqli->query($query) === TRUE) {
 
 							header("Location: ../html/añadir.php?exito=reg"); 

					}else {
			  				header("Location: ../html/añadir.php?error=reg"); 
  						}	
			}else {
			  				header("Location: ../html/añadir.php?error=reg"); 
  						}
					
 mysqli_close($mysqli);

?>
