<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gimnasio bodytech</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <a class="navbar-brand" href="#">Gimnasio Bodytech</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">

                  <form class="mt-3" action="gimnasio.php" method="POST">
                     <h4>Registro de tu masa corporal</h4>
                     <div class="row">
                        <div class="col">
                        <input type="text" class="form-control" placeholder="altura" name="altura">
                        </div>
                        <div class="col">
                        <input type="number" class="form-control" placeholder="peso" name="peso">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-info mt-3 btn-block" name="botonCalcular">CALCULAR</button>
                  </form>
                  <?php
                  if(isset($_POST["botonCalcular"])): ?>
                  <h4 class="text-danger text-center">
                  <?php
                  $altura=$_POST['altura'];
                  $peso=$_POST['peso'];
                  $superaltura = $altura * $altura;
                  $imc = $peso / $superaltura;

                  echo ("tu masa corporal es :  " .$imc);

                  $imc = $peso / $superaltura;
                  if ($imc < 18.5) {
                    echo "Usted tiene bajo peso" ;
                  } elseif ($imc >= 18.5 && $imc < 25) {
                   echo "usted tiene peso normal";
                  } elseif ($imc >= 25 && $imc < 27) {
                   echo "usted tiene sobrepeso grado 1 ";
                  } elseif ($imc >= 27 && $imc < 30) {
                   echo "usted tiene sobrepeso grado 2";
                  } elseif ($imc >= 30 && $imc < 35) {
                   echo "usted tiene obesidad grado 1";
                  } elseif ($imc >= 35 && $imc < 40) {
                   echo "usted tiene obesidad grado 2";
                  } elseif ($imc >= 40 && $imc < 50) {
                   echo "usted tiene obesidad tipo 3";
                  } elseif ($imc >= 50 ) {
                   echo "usted tienen obesidad tipo 4 (extrema)";
                  }else { 
                  }
                  ?>
                  </h4>


                  <?php endif ?>
                </div>
            </div>
        </div>
    </main>   
</body>
</html>