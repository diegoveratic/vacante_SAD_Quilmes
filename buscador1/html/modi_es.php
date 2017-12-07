<?php
session_start();
  if($_SESSION["logueado"] == TRUE) {
	require '../php/conexion.php';
	$id = $_GET['dni'];
	$mysqli=getConnexion();
	$sql = "SELECT * FROM escuela WHERE servicio = '".$id."'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
?>
<html lang="es">
    <head>
        <meta charset="utf-8">
            <title>
                Datos
            </title>
        </meta>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../bootstrap/css/bootstrap-theme.css" rel="stylesheet">
        <script src="../bootstrap/js/jquery-3.1.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script> 
    </head>
    </head>
    <body style="background-color: #f1f1f1;">
    <div class="container-fluid">
<div class="row">
  <img src="../css/SAD.png" class="img-fluid" style="width:100%; height:25%;  alt="SAD de Quilmes">
</div>
</div>
        <div class="container" style="background-color:#fff; box-shadow: 1px 1px 8px 1px #888; margin-top: 5em;">
            <div class="row">
            <div class="page-header text-center">
                <h1>
                    MODIFICAR REGISTRO
                    <small>
                        de la Base de datos Escuela
                    </small>
                </h1>
                </div>
            </div>
            <?php
 
      if(isset($_GET["error"])) {
        if ($_GET["error"]=="vacio") {
            echo "<div class='container'><p class='col-md-6 col-md-offset-4' style='color:green; font-size:20px;'>Los Datos estan vacios</p></div>";
        }
        else{
            echo "<div class='container'><p class='col-md-6 col-md-offset-4' style='color:green; font-size:20px;'>Error en modificar los datos</p></div>";
        }
      }
 
     ?>
     <!--FORMULARIO-->
            <form action="../php/modi_es.php" autocomplete="off" class="form-horizontal" method="POST">
              
               <!--form-group Servicio-->

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="servicio">
                        Servicio
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="servicio" name="servicio" placeholder="Servicio" required="" type="text" value="<?php echo $row['servicio']; ?>">
                        </input>
                    </div>
                </div>

                <!--form-group Procedencia-->

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="procedencia">
                        Procedencia
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="procedencia" name="procedencia" placeholder="Procedencia" required="" type="text" value="<?php echo $row['procedencia']; ?>">
                        </input>
                    </div>
                </div>

                <!--form-group Def-->

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="def">
                        Def
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="def" name="def" placeholder="Def" type="text" value="<?php echo $row['def']; ?>">
                        </input>
                    </div>
                </div>

                <!--form-group Direccion-->

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="direccion">
                        Direccion
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="direccion" name="direccion" placeholder="Direccion" type="text" value="<?php echo $row['direccion']; ?>">
                        </input>
                    </div>
                </div>

                <!--form-group Localidad-->

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="localidad">
                        Localidad
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="localidad" name="localidad" placeholder="Localidad" type="text" value="<?php echo $row['localidad']; ?>">
                        </input>
                    </div>
                </div>

                <!--form-group Tipo-->

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="tipo">
                        Tipo
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="tipo" name="tipo" placeholder="Tipo" type="text" value="<?php echo $row['tipo']; ?>">
                        </input>
                    </div>
                </div>

                <!--form-group Botones-->

                <div class="form-group">
                    <div class="col-sm-offset-10 col-sm-10">
                        <a class="btn btn-default" href="escuela.php">
                            Regresar
                        </a>
                        <button class="btn btn-primary" name="editar" type="submit">
                            Actualizar
                        </button>
                    </div>
                </div>
            </form>

            <!--FIN DE FORMULARIO-->

        </div>
    </body>
</html>
<?php }else {
    header("Location: administrador.php");
  }
?>

