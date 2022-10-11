<?php

require_once('data/Agregardep.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Nuevo Cliente</h1>
        <form method="POST" id="form">
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo:</label>
                <input type="text" name="titulo" id="titulo" class="form-control">

            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="text" name="precio" id="precio" class="form-control">

            </div>

      

    

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control">


            </div>
            
            <div class="mb-3">
                <label for="habitaciones" class="form-label">Habitaciones:</label>
                <input type="text" name="habitaciones" id="habitaciones" class="form-control">

            </div>

            <div class="mb-3">
                <label for="estacionamiento" class="form-label">Estacionamiento:</label>
                <input type="text" name="estacionamiento" id="estacionamiento" class="form-control">

            </div>
          
            <input type="submit" value="Grabar" id="btnAgregar" class="btn btn-primary">
        </form>
    </div>
   
</body>
</html>