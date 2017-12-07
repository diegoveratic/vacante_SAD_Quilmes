<?php
session_start();
  if($_SESSION["logueado"] == TRUE) {
	require 'php/conexion.php';
	$id = $_GET['dni'];
	$mysqli=getConnexion();
	$sql = "SELECT * FROM datos WHERE id_tabla = '".$id."'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
?>
<html lang="es">
    <head>
        <meta charset="utf-8">
            <title>
                Datos
            </title>
            <!-- Latest compiled and minified CSS -->
            <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" rel="stylesheet">
                <link rel="stylesheet" src="css/estilos.css" type="text/css">
                    <!-- Optional theme -->
                    <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" rel="stylesheet">
                    </link>
                </link>
            </link>
        </meta>
    </head>
    <body style="background-color: #f1f1f1;">
    <div class="container-fluid">
<div class="row">
  <img src="css/SAD.png" class="img-fluid" style="width:100%; height:25%;  alt="SAD de Quilmes">
</div>
</div>
        <div class="container" style="background-color:#fff; box-shadow: 1px 1px 8px 1px #888; margin-top: 5em;">
            <div class="row">
            <div class="page-header text-center">
                <h1>
                    MODIFICAR REGISTRO
                    <small>
                        de la Base de datos
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
            <form action="php/modi.php" autocomplete="off" class="form-horizontal" method="POST">
              
               <!--form-group Materia-->

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="materia">
                        Materia
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="materia" name="materia" placeholder="Materia" required="" type="text" value="<?php echo $row['materia']; ?>">
                        </input>
                    </div>
                </div>

                <!--form-group Modulos-->

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="modulos">
                        Modulos
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="modulos" name="modulos" placeholder="Modulos" required="" type="text" value="<?php echo $row['modulos']; ?>">
                        </input>
                    </div>
                </div>

                <!--form-group Nombre-->

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="nombre">
                        Nombre
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text" value="<?php echo $row['nombre']; ?>">
                        </input>
                    </div>
                </div>

                <!--form-group Apellido-->

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="apellido">
                        Apellido
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="apellido" name="apellido" placeholder="Apellido" type="text" value="<?php echo $row['apellido']; ?>">
                        </input>
                    </div>
                </div>

                <!--form-group Documento-->

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="dni">
                        Documento
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="dni" name="dni" placeholder="Documento" type="text" value="<?php echo $row['dni']; ?>">
                        </input>
                    </div>
                </div>

                <!--form-group Sit Rtevista-->

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="sit_rtevista">
                        Sit Rtevista
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="sit_rtevista" name="sit_rtevista" placeholder="Sit Rtevista" type="text" value="<?php echo $row['sit_rtevista']; ?>">
                        </input>
                    </div>
                </div>

                <!--form-group Fecha de ingreso-->


                <div class="form-group">
                    <label class="col-sm-2 control-label" for="fecha">
                        Fecha de ingreso
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="fecha" name="fecha" placeholder="Fecha de ingreso" type="text" value="<?php echo $row['fecha_de_ingreso']; ?>">
                        </input>
                    </div>
                </div>

                <!--form-group Accion estatutaria-->

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="accion">
                        Accion estatutaria
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="accion" name="accion" placeholder="Accion estatutaria" type="text" value="<?php echo $row['accion_estatutaria']; ?>">
                        </input>
                    </div>
                </div>

                <!--form-group Escuela-->


                <div class="form-group">
                    <label class="col-sm-2 control-label" for="escuela">
                        Escuela
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="escuela" name="escuela" placeholder="Escuela" type="text" value="<?php echo $row['escuela']; ?>">
                        </input>
                    </div>
                </div>

                <!--form-group Botones-->

                <div class="form-group">
                    <div class="col-sm-offset-10 col-sm-10">
                        <a class="btn btn-default" href="tabla_datos.php">
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

