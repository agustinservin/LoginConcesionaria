<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Coche</title>
</head>
<body>
    <?php
    $patente = $_GET['id'];
    $query = mysqli_query($conexion,"SELECT * FROM autos WHERE patente = '".$patente."' ");
    $queryFotos = mysqli_query($conexion,"SELECT * FROM imagenes WHERE patente = '".$patente."' ");
    $fetch = mysqli_fetch_assoc($query);
    $fetchFotos = mysqli_fetch_assoc($queryFotos);
    
    ?>

</body>
</html>