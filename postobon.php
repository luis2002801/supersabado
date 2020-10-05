<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postobon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <a class="navbar-brand" href="#">Postobon S.A</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">

                  <form class="mt-3" action="postobon.php" method="POST">
                     <h4>Tiempo laborado</h4>
                     <div class="row">
                        <div class="col">
                        <input type="text" class="input-group-prepend" placeholder="Horaslaboradas" name="horas">
                        </div>
                        <div class="col">
                        <input type="number" class="input-group-prepend" placeholder="Valorhorlab" name="valor">
                        </div>
                        <div class="col">
                        <input type="number" class="input-group-prepend" placeholder="horasextlab" name="horaext">
                        </div>
                        <div class="col">
                        <input type="number" class="input-group-prepend" placeholder="valorhorasext" name="valorhorext">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-info mt-3 btn-block" name="botonCalcular">CALCULAR</button>
                  </form>
                  <?php
                  $horasext;
                  $valorhorext;
                  $valorhor;
                  $hora;
                  $sueldosem;
                  $sueldosemtotal;

                  if(isset($_POST["botonCalcular"])){
                    $hora = $_POST["horas"];
                    $valorhor = $_POST["valor"];
                    $horaext = $_POST["horaext"];
                    $valorhorext=$_POST["valorhorext"];
                    $sueldosem = $valorhor*$hora;
                    $horasextotal = $horaext*$valorhorext;
                    $sueldosemtotal = $sueldosem + $horasextotal;


                    $sueldosemtotal = $sueldosem + $horasextotal;
                    if($sueldosemtotal <= 40){
                    echo "su sueldo semanal fue: ".$sueldosemtotal;
                    }elseif($sueldosemtotal >=40){
                        echo "su sueldo semanal es: ".$sueldosemtotal;
                    }else{

                    } 
                  }                   
                  ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>