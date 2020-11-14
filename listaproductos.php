<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<?php
//hacer una consulta en BD para tener todos los usuarios

//1.incluir el archivo donde esta nuestra clase BaseDatos
include("BaseDatos.php");


// 2. crear la consulta Sql para buscar datos
$consultaSQL="SELECT * FROM productos WHERE 1";

//3. Crear un objeto de la clase BaseDatos y usar 
//el metodo buscarDatos

$transaccion=new BaseDatos();
$productos=$transaccion->buscarDatos($consultaSQL);

print_r($productos);
?>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3">
        <?php foreach($productos as $producto):?>
            
            <div class="col mb-4">
               <div class="card h-100">
                 <img src="https://operaciontransformer.com/wp-content/uploads/2019/05/cooking-bananas-1583222_1280-1024x681.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title"><?php echo($producto["nombre"])?></h5>
                     <p class="card-text"><?php echo($producto["descripcion"])?></p>
                     <a href="eliminarproductos.php?id=<?php echo($producto["idproducto"]) ?>" class="btn btn-danger">Eliminar</a>
                  </div>
             </div>
         </div>
            
        <?php endforeach?>
  </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>   
</body>
</html>