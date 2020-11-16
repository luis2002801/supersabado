<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El RAYO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body> 

    <nav class="navbar navbar-light bg-success">
        <a class="navbar-brand" href="#">
        TIENDA EL RAYO
        </a>
    </nav>
    <section id="local">
        <div class="container">
            <main>
                 <div class="container">
                 <form action="registrarProducto.php" method="POST">
                     <h1 class="text-center">ADMINISTRACION DE PRODUCTOS</h1>
                
                        <div class="row">
                             <div class="col">
                                <input type="text" class="form-control" placeholder="nombre" name="nombre">
                        </div>
                     <div class="col">
                        <input type="text" class="form-control" placeholder="marca" name="marca">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                         <input type="text" class="form-control" placeholder="precio" name="precio">
                         <label class="form-check-label" for="invalidCheck2">
                            olvido agregar precio
                         </label>
                    </div>
                </div>
                <div class="row mt-3">
                    
                    <div class="col">
                        <label class="font-weight-bold">Descripción:</label>
                        <textarea class="form-control" rows="4" name="descripcion"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                    <label class="font-weight-bold">foto:<label>
                        <input type="text" class="form-control" placeholder="Foto Url" name="foto">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-success btn-block" name="botonEnvio">Registrar</button>
            </form>
        </div>
    </main>
    </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>