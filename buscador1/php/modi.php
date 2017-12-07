<?php
 
	if(isset($_POST["editar"])) {

		$dni=$_POST['dni'];
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$materia=$_POST['materia'];
		$escuela=$_POST['escuela'];
		$modulos=$_POST['modulos'];
		$fecha=$_POST['fecha'];
		$accion=$_POST['accion'];
		$sit=$_POST['sit_rtevista'];

		
			require_once 'conexion.php';
			$mysqli = getConnexion();
			$q = "UPDATE datos SET dni='$dni', nombre='$nombre', apellido='$apellido', materia='$materia', escuela='$escuela', modulos='$modulos', fecha_de_ingreso='$fecha', accion_estatutaria='$accion', sit_rtevista='$sit'";
			$results = $mysqli->query($q);
			if($results) {

					header("Location: ../tabla_datos.php?exito=".$dni);
				
			}else{

	        		header("Location: ../modificar.php?error=modi&dni=".$dni);
    	   	 }
			mysql_close($mysqli);
		
	}