<?php
$mysqli=new mysqli('localhost','root','','si-au-aha');

if($mysqli->connect_error){
    die('Error en la conexion'.$mysqli->connect_error);
}

?>