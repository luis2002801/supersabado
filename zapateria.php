<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spring sted</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-ms navbar-dark bg-info">
            <a class="navbar-brand" href="#">Zpateria Spring sted</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-Light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">

                <form class="mt-3" action="zapateria.php" method="POST">
                    <h4>Promocion de Zapatos </h4>
                    <div class="row">
                        <div class="col">
                        <input type="text" class="form-control" placeholder="ingrese cantidad" name="cantidad">
                        </div>
                        <div class="col">
                        <input type="number" class="form-control" placeholder="ingrese precio" name="precio">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info mt-3 btn-block" name="botonCalcular">CALCULAR</button>
               
                <?php

                $preciozapatos;
                $cantidadzapatos;
                $preciototal;
                $descuento;

                if(isset($_POST["botonCalcular"])){
                    $cantidadzapatos = $_POST["cantidad"];
                    $preciozapatos = $_POST["precio"];

                    $preciototal = $preciozapatos*$cantidadzapatos;

                    if ($cantidadzapatos==3){
                        $descuento = ($preciototal*10)/100;
                        $preciototal = $preciototal-$descuento;
                        echo ("El valor de la compra total es: ".$preciototal);
                    }elseif($cantidadzapatos >3 && $cantidadzapatos <8){
                        $descuento= ($preciototal*20)/100;
                        $preciototal = $preciototal-$descuento;
                        echo ("el valor de la compra total es: ".$preciototal);
                    }elseif ($cantidadzapatos>=8){
                        $descuento= ($preciototal*50)/100;
                        $preciototal = $preciototal-$descuento;
                        echo ("el valor de la compra total es: ".$preciototal);  
                    }else{
                        echo("usted no tiene descuento");
                    }
                    
                }
                ?>
             </form>
     </div>
     </div>
     </div>
</main>
</body>
</html>