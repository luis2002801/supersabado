<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
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

//print_r($productos);
?>
<section id="local">
<div class="container">
    <div class="row row-cols-1 row-cols-md-3">
        <?php foreach($productos as $producto):?>
            
            <div class="col mb-4">
               <div class="card h-100">
                    <img src="<?php echo($producto["foto"])?>" class="card-img-top" width="80" heigth="400">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo($producto["nombre"])?></h5>
                        <p class="card-text"><?php echo($producto["descripcion"])?></p>
                        <a href="eliminarproductos.php?id=<?php echo($producto["idproducto"]) ?>" class="btn btn-danger">Eliminar</a>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($producto["idproducto"]) ?>">
                            Editar
                        </button>
                    </div>
                </div>
                <div class="modal fade" id="editar<?php echo($producto["idproducto"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="editarProductos.php?id=<?php echo($producto["idproducto"])?>" method="POST">
                                    <div class="form-group">
                                        <label>nombre del producto</label>
                                        <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto["nombre"]) ?>">
                                        <label>marca del producto</label>
                                        <input type="text" class="form-control" name="marcaEditar" value="<?php echo($producto["marca"]) ?>">
                                        <label >precio del producto</label>
                                        <input type="text" class="form-control" name="precioEditar" value="<?php echo($producto["precio"]) ?>">
                                        <label >descripcion del producto</label>
                                        <textarea name="descripcionEditar" class="form-control" cols="30" rows="3"></textarea>
                                        <label >foto del producto</label>
                                        <input type="url" name="fotoEditar" class="card-img-top" width="100" heigth="1000">
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="botonEditar">Editar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        <?php endforeach?>
  </div>

</div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>   
</body>
</html>