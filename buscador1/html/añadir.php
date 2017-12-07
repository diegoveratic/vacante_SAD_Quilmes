<?php
 
  session_start();
  if($_SESSION["logueado"] == TRUE) {
    include '../php/conexion.php';

$mysqli = new mysqli("localhost", "root", "", "dato_sad");
 
if($mysqli->connect_errno) {
    echo "<b>Fallo al conectar a la BD: </b>" . $mysqli->connect_errno . "---" . $mysqli->connect_error;
}
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
        <div class="container " style="background-color:#fff; box-shadow: 1px 1px 8px 1px #888; margin-top: 5em;">
            <div class="row">
            <div class="page-header text-center">
                <h1>
                    Nuevo Registro
                    <small>
                        a la Base de datos
                    </small>
                </h1>
                </div>
            </div>
        <?php 
              if(isset($_GET["exito"])) {
                echo "<div class='row'> <p class='col-md-6 col-md-offset-4' style='color:green; font-size:20px;'>Datos Cargados Correctamente :)</p></div>";
              }
       ?>
    <!--FORMULARIO-->
            <form class="form-horizontal" method="POST" action="../php/guardar.php" autocomplete="off">
               <!--form-group Materia Select-->

                 <div class="form-group">
                    <label for="materia" class="col-sm-2 control-label">Materia</label>
                    <div class="col-sm-10">
                      <?php
                         $consulta = "SELECT * FROM materia";         
                         if($resultado = $mysqli->query($consulta)) {
                        ?>
                        <select class="form-control" id="materia" name="materia">
                        <?php
                          if ($resultado->num_rows){
                           while($row = $resultado->fetch_array()) {
                             echo  '<option value="'.$row["pid"].'">'.$row["pid"].' ('.$row["materia"].')</option>';
                             } 
                           }    
                        ?>

                        </select>
                    </div>
                </div>
                <?php } ?>

                 <!--form-group Modulos-->

                <div class="form-group">
                    <label for="modulo" class="col-sm-2 control-label">Modulos</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="modulo" name="modulo" placeholder="Modulo" required>
                    </div>
                </div>

                <!--form-group Nombre-->

                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                    </div>
                </div>

               <!--form-group Apellido-->

                <div class="form-group">
                    <label for="apellido" class="col-sm-2 control-label">Apellido</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
                    </div>
                </div>

               <!--form-group Documento-->
              
                <div class="form-group">
                    <label for="dni" class="col-sm-2 control-label">Documento</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="dni" name="dni" placeholder="Documento">
                    </div>
                </div>

               <!--form-group Sit-->

                <div class="form-group">
                    <label for="sit_rtevista" class="col-sm-2 control-label">Sit Rtevista</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sit_rtevista" name="sit_rtevista" placeholder="Sit Rtevista">
                    </div>
                </div>

               <!--form-group fecha-->

                 <div class="form-group">
                    <label for="fecha" class="col-sm-2 control-label">Fecha de ingeso</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Fecha de ingeso">
                    </div>
                </div>

               <!--form-group Accion-->

                <div class="form-group">
                    <label for="accion" class="col-sm-2 control-label">Accion estatutaria</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="accion" name="accion" placeholder="Accion estatutaria">
                    </div>
                </div>

               <!--form-group Escuela Select-->

                <div class="form-group">
                    <label for="escuela" class="col-sm-2 control-label">Escuela</label>
                    <div class="col-sm-10">
                     <?php
                        $consulta = "SELECT * FROM escuela";         
                         if($resultado = $mysqli->query($consulta)) {
                    ?>
                        <select class="form-control" id="escuela" name="escuela">
                        <?php
                             if ($resultado->num_rows){
                               while($row = $resultado->fetch_array()) {
                                  echo  '<option value="'.$row["servicio"].'">'.$row["servicio"].' ('.$row["tipo"].')</option>';
                                 } 
                             } 
                        ?>
                        </select>
                    </div>
                </div>
                <?php } ?>               

                <!--form-group Botones-->

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="../tabla_datos.php" class="btn btn-default">Regresar</a>
                        <button type="submit" class="btn btn-primary" name="enviar" id="enviar">Guardar</button>
                    </div>
                </div>
            </form>
    <!--FIN DE  FORMULARIO-->

        </div>
    </body>
</html>
 <?php
  } else {
    header("Location: ../administrador.php");
  }