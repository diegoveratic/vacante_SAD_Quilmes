<?php 
require_once 'variables.php';
function getConnexion()
{
  $mysqli = new Mysqli(HOST, DB_USER, DB_PASS, NOM_BASE);
  if($mysqli->connect_errno) exit('Error en la conexión: ' . $mysqli->connect_errno);
  $mysqli->set_charset('utf8');
  return $mysqli;
}
function mostrarArray($m,$array,$m2)
{
 for ($i=0; $i < count($array); $i++) { 
 		echo $m.$array[$i].$m2;
 }
}