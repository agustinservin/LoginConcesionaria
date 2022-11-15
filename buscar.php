<?php
include 'Conexion.php';
//desactivo advertencias de php
ini_set('display_errors','Off'); 
ini_set('error_reporting', E_ALL ); 
define('WP_DEBUG', false); 
define('WP_DEBUG_DISPLAY', false);
$buscador = mysqli_query($conexion,"SELECT * FROM autos WHERE patente LIKE LOWER('%".$_POST["buscar"]."%')OR nombre LIKE LOWER('%".$_POST["buscar"]."%')OR modelo LIKE LOWER('%".$_POST["buscar"]."%')");
$resultados = mysqli_num_rows($buscador);
if(!$resultados){
    echo "<h2 class='tittle-card error'>Auto inexistente</h2>";
}
else{
?>
<h2 class="tittle-card">resultados encontrados( <?php echo $resultados?> )</h2>
<?php
while($resultado = mysqli_fetch_assoc($buscador))
{
?>
<p class="card-text">
    <?php echo $resultado["patente"]; echo ' ( '.$resultado["nombre"]." ".$resultado["modelo"].' )'?><span class="options"> <a target="_blank" href="http://localhost/newWorkspace/concesionaria2/vehiculos/modelo/<?php echo $resultado["nombre"]."/";
        echo $resultado["anio"]."/";
        echo $resultado["modelo"]; ?>">
        <i class="fa-solid fa-eye"></i></a>
        <a href="editarAuto.php?id=<?php echo $resultado["patente"]; ?>"><i class="fa-solid fa-pen-to-square"></i></a> 

        <a><i class="fa-solid fa-trash"></i></a>

    </span> </p>
<?php

}

}
?>