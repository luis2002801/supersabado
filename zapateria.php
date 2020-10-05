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

                <form class="mt-6" action="zapateria.php" method="post" class="text-center">
                    <h4>Registrar Tu Cantidad De Pares</h4>
                    <select type="text" name="Cantidad">
                    <option value="1 par">1 par</option>
                    <option value="2 pares">2 pares</option>
                    <option value="3 pares">3 pares</option>
                    <option value="4 pares">4 pares</option>
                    <option value="5 pares">5 pares</option>
                    <option value="6 pares">6 pares</option>
                    <option value="7 pares">7 pares</option>
                    <option value="8 pares">8 pares</option>
                    <option value="9 pares">9 pares</option>
                    <option value="10 pares">10 pares</option>
                    <option value="11 pares">11 pares</option>
                    <option value="12 pares">12 pares</option>
                </select>
                <br/><br/>
                <p>precio final:<input type="text"name="precio"/></p>
                <p>ingrese el descuento respectivo:
                    10%: <input type="radio" name = "desc" value="10"/>
                    20%: <input type="radio" name = "desc" value="20"/>
                    50%: <input type="radio" name = "desc" value="50"/>
                </p>
                <p><input value="Calcular" type="submit"/></p>
                </form>
                <?php
                if(isset($_POST["botonCalcular"])){
                    $cantidadzapatos = $_POST["zapatos"];
                    $preciozapatos = $_POST["precio"];

                    $preciototal = $preciozapatos*$cantidadzapatos;
                    if ($cantidadzapatos==3){
                        $descuento = ($preciototal*10)/100
                        $preciototal = $preciozapatos-$descuento;
                        echo ("El valor de la compra total es: ".$preciototal);
                    }elseif
                }
                ?>
     </div>
     </div>
     </div>
</body>
</html>