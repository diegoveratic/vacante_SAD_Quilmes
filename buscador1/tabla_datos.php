<?php
 
  session_start();
  if($_SESSION["logueado"] == TRUE) {
    require_once 'php/conexion.php';
    ?>
 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Datos</title>
  <!-- Latest compiled and minified CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" src="css/estilos.css">
  <!-- Optional theme -->
  <link href="bootstrap/css//bootstrap-theme.min.css" rel="stylesheet"/>
</head>
<body style=" background: #f1f1f1;">
<div class="container-fluid">
<div class="row">
  <img src="css/SAD.png" class="img-fluid" style="width:100%; max-height:15%;  alt="SAD de Quilmes">
</div>
</div>
<div class="container-fluid" style="margin-top: 1em;">
<div class="btn-group">
        <a href="login/salir.php" alt="Salir" class="btn btn-danger btn-lg active">Salir</a>
      </div>
      <div class="btn-group col-md-offset-7">
            <a href="html/añadir.php" class="btn btn-success btn-lg active ">Añadir</a>
      </div>
       <div class="btn-group">
        <a href="html/escuela.php" class="btn btn-default btn-lg active">Escuelas</a>
      </div>
       <div class="btn-group">
        <a href="html/materia.php" class="btn btn-warning btn-lg active">Materias</a>
      </div>
    <!--<div class="btn-group">
        <a href="login/reg.php" class="btn btn-primary btn-lg active">Validar cuenta</a>
      </div>-->
</div>
<div class="container "  style="background-color: #fff;box-shadow: 1px 1px 8px 1px #888; margin-top: 2em;">
  <div class="page-header text-center">
    <h1>Vista de consultas<small> de la Base de datos</small></h1>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3" style="margin-bottom: 1em;">
      <div class="input-group">
        <span class="input-group-addon" class="btn-info" id="boton"><span class="glyphicon glyphicon glyphicon-search" aria-hidden="true"></span></span>
        <input type="text" class="form-control" id="search" placeholder="Buscar">
      </div>
      
    </div>
    <?php
 
      if(isset($_GET["exito"])) {
        echo "<p class='col-md-6 col-md-offset-4' style='color:green; font-size:20px;'>Tabla ".$_GET["exito"]." Modificada Correctamente :)</p>";
      }
 
     ?>
    <div id="result" class="container-fluid">
    <?php  $mysqli = getConnexion();
  $query = "SELECT * FROM ".NOM_TABLA." ";
  $res = $mysqli->query($query);
  if ($res->num_rows > 0) {
    echo '<div class="main">
      <div class="row tab">
        <div class="col-md-12">
              <div class="table-responsive">
              <table class="table table-hover table-striped"> 
                <thead>
                <tr class="bg-primary">';
      mostrarArray($string ='<th width="100">',CAMPO_TABLA,$string2='</th>');
       echo '                  <th width="100">edit</th>
                    <th width="100">borrar</th>';

    echo'</tr>
                </thead>
                <tbody>';
  }else{
    echo '<h4 class="display-1 col-md-offset-5"> No se encontro resultados :( </h4>';
  }
  while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
    echo "<tr>";
     for ($i=0; $i < count(CAMPO_TABLA); $i++) { 
      echo "<td>".$row[CAMPO_TABLA[$i]]."</td>"
      ;
    }
     echo '          <td><a href="modificar.php?dni='.$row['id_tabla'].'"><span class="glyphicon glyphicon-pencil"></span></a></td>
                     <td><a href="#" data-href="php/eliminar.php?id='. $row['id_tabla'].'" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>

            </tr>';
    echo"</tr>";
  }
  echo " </tbody>
              </table>
              </div>
        </div>
        </div>";
?>
    </div>
  </div>
  <!--Modal-->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
          </div>
          
          <div class="modal-body">
            ¿Desea eliminar este registro?
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger btn-ok" id="borrar">Delete</a>
          </div>
        </div>
      </div>
    </div>
</div>
<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/index.js"></script>
<script>
      $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        
        $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
      });
    </script> 
</body>
</html> 
 
    <?php
  } else {
    header("Location: administrador.php");
  }
 
 ?>
 