<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editor.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <div class="container-edit">
        <div class="container-imagenes">
            <img src="<?php echo constant('URLC').$fetchFotos["foto1"];?>" alt="" srcset="">
            <img src="<?php echo constant('URLC').$fetchFotos["foto2"];?>" alt="" srcset="">
            <img src="<?php echo constant('URLC').$fetchFotos["foto3"];?>" alt="" srcset="">
            <img src="<?php echo constant('URLC').$fetchFotos["foto1"];?>" alt="" srcset="">
            <img src="<?php echo constant('URLC').$fetchFotos["foto2"];?>" alt="" srcset="">
            <img src="<?php echo constant('URLC').$fetchFotos["foto3"];?>" alt="" srcset="">
            <img src="<?php echo constant('URLC').$fetchFotos["foto1"];?>" alt="" srcset="">
            <img src="<?php echo constant('URLC').$fetchFotos["foto2"];?>" alt="" srcset="">
            <img src="<?php echo constant('URLC').$fetchFotos["foto3"];?>" alt="" srcset="">
        </div>
        <div class="container-info">
        <div class="card-body">
            <h5 class="card-title"><?php echo $fetch["nombre"]." ".$fetch["modelo"]; ?></h5>
            <br>
            <p class="card-text">Marca: <input type="text" value="<?php echo $fetch["nombre"]; ?>"><br>
            Modelo: <input type="text" value="<?php echo $fetch["modelo"]; ?>"><br>
            Km's: <input type="text" value="<?php echo $fetch["km"]; ?>"></p>
            <p class="card-text">Año: <input type="text" value="<?php echo $fetch["anio"]; ?>"></p>
      <br>  
      
     
    </div>
        </div>
    </div>

</body>
</html>