<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculaedad</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
   <header>
     <nav class="navbar navbar-expand-ms navbar-dark bg-warning">
              <a class="navbar-brand" href="#">Jugadores Colomboeuropeo</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
                <form class="form-inline my-2 my-ms-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                </form>
          </div>
      </nav>
    </header>
     <div class="container">
       <h3>Calculando la edad automaticamente</h3>
         <div class="row">
            <div class="col-sm-3">
                <label>escriba la fecha de nacimiento</label>
                  <input type="text" id="calender" name="calender" class="form-control input-sm" reandoly="">
                      <span class="label label-success">
                         <span id="edadcalculada"></span>
                       </span>
                       <?php
                        function Calcularedad($fecha_nacimiento){
                        
                       $dia=date("d");
                       $mes=date("m");
                       $ano=date("Y");
                        
                       $dianaz=date("d",strtotime($fecha_nacimiento));
                       $mesnaz=date("m",strtotime($fecha_nacimiento));
                       $anonaz=date("Y",strtotime($fecha_nacimiento));

                       if (($mesnaz == $mes) && ($dianaz > $dia)){
                         $ano=($ano-1); }
                      
                        if ($mesnaz > $mres){
                          $ano=($ano-1);}

                        $edad=($ano-$anonaz);
                        return $edad;
                            echo "la edad del jugador es: ".$edad;
                        }
                        ?>
            </div>
        </div>
     </div>
</body>
</html>
