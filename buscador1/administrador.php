<?php
  	if(isset($_GET["error"]) && $_GET["error"] != "login") {
		header("Location: administrador.php");
	}
 
 ?>
 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Título de la página</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/login.css">

 
</head>
<body>
<div class="container">
 <div class="container-fluid">
<div class="row">
  <img src="css/SAD.png" class="img-fluid" style="width:100%; height:10%;  alt="SAD de Quilmes">
</div>
</div>
	<div class="login">
		<h1 class="login-title" >Iniciar Sesion</h1>
		<?php
 
			if(isset($_GET["error"])) {
				echo "<p class='error'>Usuario y / o Contrasea erroneos. Intentelo de nuevo.</p>";
			}
 
		 ?>
		<form action="login/login.php" method="post">
			<div class="form-group">
				<input type="text" class="form-control login-input " name="usuario" placeholder="Usuario">
			</div>
			<div class="form-group">
				<input type="password" class="form-control login-input " name="password" placeholder="Password">
			</div>
			<button type="submit" name="enviar" class="btn btn-default login-button">Entrar</button>
		</form>
	</div>
 </div>
<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
<?php 
session_start();

if(isset($_SESSION["logueado"])&& $_SESSION["logueado"] == TRUE) {
				header("Location: tabla_datos.php");

}