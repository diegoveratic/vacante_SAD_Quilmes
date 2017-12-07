<?php

 if(isset($_POST["registro"]) && $_POST["registro"]!= "") {
 
		require("../php/conexion.php");
		$mysqli=getConnexion();

		$user=$_POST["usuario"];
		$pass=md5($_POST["pass"]);
		$nom=$_POST["nombre"];
		$re=md5($_POST["re_pass"]);
		$userok="";
		if ($re != $pass) {
 			header("Location: reg.php?error=iguallcontra"); 
		}
		$consulta = "SELECT * FROM admin_user WHERE usuario='$user'";
 
		if($resultado = $mysqli->query($consulta)) {
			while($row = $resultado->fetch_array()) {
 
					$userok = $row["usuario"];
				}
		  	$resultado->close();		
 		}

 		if(isset($user)){
 
				if($user == $userok) {
 					header("Location: reg.php?error=igual"); 
 				}
 				else{

 						$query = "INSERT INTO datos_user (usuario,nombre, password) VALUES ('$user','$nom', '$pass')";

					if ($res = $mysqli->query($query) === TRUE) {
 
 					header("Location: ../tabla_datos.php"); 

					} 
				}	
		}else {
 					header("Location: reg.php?error=reg"); 
  		}
 	 mysqli_close($mysqli);
}
?>