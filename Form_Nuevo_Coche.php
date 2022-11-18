<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>FormularioDeImagenes</title>
    
</head>
<body>
    <form action="obtenerImagenes.php" method="post" enctype="multipart/form-data">
    <h3>AGREGUE UN NUEVO COCHE</h3>
    <label for="">Patente</label>
    <input type="text" name="patente">
    <label for="">Nombre</label>
    <input type="text" name="carName" id="carName">
    <label for="">Modelo</label>
    <input type="text" name="modelo">
    <label for="">Año</label>
    <input type="text" name="anio">
    <label for="">Kilometros</label>
    <input type="text" name="km">
    <label for="">Color</label>
    <input type="text" name="color">
     <span class="imagenes"><p>Seleccione 3 Imagenes del coche
    <input type="file" name="imagenes_array[]" id="imagenes" multiple></p></span>
    <div class="card-imagenes" id="preview">
        
    </div>
    <input type="submit" value="ENVIAR" name="btnenviar">
    </form>
    <script src="main.js"></script>
</body>
</html>