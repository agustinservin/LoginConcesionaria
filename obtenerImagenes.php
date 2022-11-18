<?php
include("Conexion.php");
$patente = $_POST['patente'];
$coche=$_POST['carName'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$anio = $_POST['anio'];
$kms = $_POST['km'];
//aqui van las imagenes (Carpeta o ruta que usaras)
$path = "../newWorkspace/concesionaria2/public/coches/".$coche."/".$modelo."/".$patente."/";
if(!file_exists($path)){
    mkdir("../newWorkspace/concesionaria2/public/coches/".$coche."/".$modelo."/".$patente."/",0777,true);
}
//Hacemos un poco de código verificando que se recibieron las imagenes
if(isset($_FILES['imagenes_array'])){

    //almacenamos las propiedades de las imagenes
    $name_array = $_FILES['imagenes_array']['name'];
    $tmp_name_array = $_FILES['imagenes_array']['tmp_name'];
    $type_array = $_FILES['imagenes_array']['type'];
    $size_array = $_FILES['imagenes_array']['size'];
    $error_array = $_FILES['imagenes_array']['error'];
    //recorremos el array de imagenes para subirlas al simultane
    for($i = 0; $i < count($tmp_name_array); $i++){
      $subirImagenes =  move_uploaded_file($tmp_name_array[$i], $path.$name_array[$i]);
      $arrayImagenes = array($name_array);
    }
        $imagen1 = $path.array_pop($arrayImagenes[0]);
        $imagen2 = $path.array_pop($arrayImagenes[0]);
        $imagen3 = $path.array_pop($arrayImagenes[0]);
        echo $imagen1;
        echo "<br>";
        echo $imagen2;
        echo "<br>";
        echo $imagen3;
        $SubirInfoCoche = "INSERT INTO autos(patente, nombre, modelo, anio, km, color) values ('$patente','$coche','$modelo','$anio','$kms','$color')" ;
        $consulta= "INSERT INTO imagenes(patente,foto1,foto2,foto3)values('$patente','$imagen1', '$imagen2','$imagen3')";
        $resultado2 = mysqli_query($conexion, $SubirInfoCoche);
        $resultado = mysqli_query($conexion, $consulta); 
      
       if(!$resultado){
        echo"no se pudieron subir a la base de datos";
      }
      else if($resultado && $resultado2){
        echo "<br> todo salió perfecto";
      }
    if($subirImagenes){
        echo "subidas exitosamente";
    }
    else{
         //si ocurrio algun problema entonces
         echo "move_uploaded_file function failed for ".$name_array[$i]."<br>";
    }  
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
    </head>
    <body>
      <h1><?php echo $imagen1; ?></h1>
      <img src=<?php echo $imagen1; ?> >
      <img src=<?php echo $imagen2; ?> >
      <img width="200" height="200" src=<?php echo $imagen3; ?> >
    </body>
    </html>
<?php


  }
  header("Location: buscador.php");
  ?>