<?php 

if(!isset($_POST['search'])) exit('No se recibió el valor a buscar');

require_once 'conexion.php';

function search()
{
  $mysqli = getConnexion();
  $search = $mysqli->real_escape_string($_POST['search']);
  $query = "SELECT * FROM ".NOM_TABLA." WHERE ".CAMPO_TABLA[0]." LIKE '%".$search."%'";
  for ($i=0; $i < count(CAMPO_TABLA); $i++) { 
      $query.= "OR ".CAMPO_TABLA[$i]." LIKE  '%".$search."%'";
    }
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
    echo '<h4 class="display-1 col-md-offset-6"> No se encontro resultados :( </h4>';
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
}

search();