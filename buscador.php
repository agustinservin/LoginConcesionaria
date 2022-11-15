<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="buscador.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Buscar Coches</title>
</head>
<body>
    <?php
    include 'Conexion.php';
    ?>
    <div class="container">
        <label for="">BUSCAR Y/O EDITAR MIS COCHES</label>
        <input onkeyup="buscar($('#buscar_patente').val());" type="text" name="buscar_patente" id="buscar_patente" placeholder="busque por patente, modelo o nombre del vehiculo">
        <button onclick="buscar($('#buscar_patente').val());">BUSCAR</button>
        <a href="Form_Nuevo_Coche.php"><button>AGREGAR</button></a>
    </div>
    <div class="card busquedas">
        <div class="card-body">
            <div id="resultado"></div>
        </div>
    </div>
    <script type="text/javascript">
        function buscar(patente){
            var parametros = {"buscar":patente};
            $.ajax({
                data: parametros,
                type:'POST',
                url:'buscar.php',
                success:function(data){
                    document.getElementById("resultado").innerHTML = data;
                }
            })
        }
    </script>
</body>
</html> 