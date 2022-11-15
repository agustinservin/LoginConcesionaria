<?php
include 'config.php';
$conexion = mysqli_connect("localhost","root","","concesionaria");
if(!$conexion){
    echo "la conexion no pudo establecerse";
}

?>