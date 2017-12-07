<?php 
session_start();
  if($_SESSION["logueado"] == TRUE) {

    ?>
   <!DOCTYPE html5>
<html>
<head>
  <meta charset="utf-8">
  <title>Escuelas</title>
  <!-- Latest compiled and minified CSS -->
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" src="../css/estilos.css">
  <!-- Optional theme -->
  <link href="../bootstrap/css//bootstrap-theme.min.css" rel="stylesheet"/>
</head>
<body style="background-color: #f1f1f1;">
<div class="container-fluid">
<div class="row">
  <img src="../css/SAD.png" class="img-fluid" style="width:100%; height:30%;  alt="SAD de Quilmes">
</div>
</div>
<a class="btn btn-default btn-lg active" href="../tabla_datos.php" style="float:left;"><span class="glyphicon glyphicon-chevron-left"></span> Volver</a>
<div class="container" style="background-color: #fff;box-shadow: 1px 1px 8px 1px #888; margin-top: 2em;">

  <div class="page-header text-center">
    <h1>Materias<small> Base de datos</small></h1>
  </div>
    <div class="row">
        <div class="col-md-6" >
            <form action="#" method="get">
                <div class="input-group" style="margin-top: 1em;">
                    <!-- Buscador -->
                    <input class="form-control" id="system-search" name="q" placeholder="Buscar.." required >
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i style="padding: 3.5px;" class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
        <div class="col-md-12" >
       <?php
$mysqli = new mysqli("localhost", "root", "", "dato_sad");
 
if($mysqli->connect_errno) {
    echo "<b>Fallo al conectar a la BD: </b>" . $mysqli->connect_errno . "---" . $mysqli->connect_error;
}
         $consulta = "SELECT * FROM materia";         
        if($resultado = $mysqli->query($consulta)) {
            ?>
            <table class="table table-list-search  table-hover">
                     <thead>
                           <tr class="bg-info">
                                <th class="bg-primary">PID</th>
                                <th>Materia</th>
                                <th>Modulo</th>
                                <th>Año</th>
                                <th>Orientacion</th>
                                <!--<th></th>-->
                        </tr>
                    </thead>
                    <tbody>
            <?php
            if ($resultado->num_rows){
                    while($row = $resultado->fetch_array()) {
                        ?>
                       <tr>
                            <td><?php echo $row["pid"];?></td>
                            <td><?php echo $row["materia"];?></td>
                            <td><?php echo $row["modulo"];?></td>
                            <td><?php echo $row["anio"];?></td>
                            <td><?php echo $row["orientacion"];?></td>
                              <!-- <?php echo '<td><a href="modificar.php?dni='.$row['pid'].'"><span class="glyphicon glyphicon-pencil"></span></a></td>';?>-->
                        </tr> 
                         <?php
                    } 
                ?>
                    </tbody>
                </table>   
                <?php
            }
            }else{
                echo "error";
            }
        ?>  
        </div>
    </div>
</div>
<script src="../bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript">
</script>
<script type="text/javascript">
    $(document).ready(function() {
    var activeSystemClass = $('.list-group-item.active');

    //something is entered in search form
    $('#system-search').keyup( function() {
       var that = this;
        // affect all table rows on in systems table
        var tableBody = $('.table-list-search tbody');
        var tableRowsClass = $('.table-list-search tbody tr');
        $('.search-sf').remove();
        tableRowsClass.each( function(i, val) {
        
            //Lower text for case insensitive
            var rowText = $(val).text().toLowerCase();
            var inputText = $(that).val().toLowerCase();
            if(inputText != '')
            {
                $('.search-query-sf').remove();
                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Buscando por = "'
                    + $(that).val()
                    + '"</strong></td></tr>');
            }
            else
            {
                $('.search-query-sf').remove();
            }

            if( rowText.indexOf( inputText ) == -1 )
            {
                //hide rows
                tableRowsClass.eq(i).hide();
                
            }
            else
            {
                $('.search-sf').remove();
                tableRowsClass.eq(i).show();
            }
        });
        //all tr elements are hidden
        if(tableRowsClass.children(':visible').length == 0)
        {
            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No se encontro resultado.</td></tr>');
        }
    });
});
</script>
</body>
</html>

<?php
  } else {
    header("Location: ../administrador.php");
  }