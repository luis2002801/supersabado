<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mejoresjug</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
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
<table class="table-ms">
<thead>
    <tr>
      <th scope="col">Jugadores</th>
      <th scope="col">Año de nacimiento</th>
      <th scope="col">Posicion</th>
      <th scope="col">Estatura</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Radamel Falcao</th>
      <td>1986</td>
      <td>Delantero</td>
      <td>1.77m</td>
    </tr>
    <tr>
      <th scope="row">James Rodriguez</th>
      <td>1991</td>
      <td>Volante Ofensivo</td>
      <td>1.81m</td>
    </tr>
    <tr>
      <th scope="row">Juan Cuadrado</th>
      <td>1988</td>
      <td>Lateral</td>
      <td>1.78m</td>
    </tr>
    <tr>
      <th scope="row">Yerri Mina</th>
      <td>1994</td>
      <td>Central</td>
      <td>1.95m</td>
    </tr>
    <tr>
      <th scope="row">David Ospina</th>
      <td>1988</td>
      <td>Portero</td>
      <td>1.83m</td>
    </tr>
    <tr>
      <th scope="row">Davinsón Sanchez</th>
      <td>1996</td>
      <td>Central</td>
      <td>1.87m</td>
    </tr>
    <tr>
      <th scope="row">Duvan Zapata</th>
      <td>1991</td>
      <td>Delantero</td>
      <td>1.86m</td>
    </tr>
    <tr>
      <th scope="row">Wilmar Barrios</th>
      <td>1993</td>
      <td>Volante Defensivo</td>
      <td>1.78m</td>
    </tr>
    <tr>
      <th scope="row">Mateus Uribe</th>
      <td>1991</td>
      <td>Volante Mixto</td>
      <td>1.80m</td>
    </tr>
  </tbody>
</table>
<div class="container">
<h3>Calculando la edad automaticamente</h3>
<div class="row">
    <div class="col-sm-3">
    <label>escriba la fecha de nacimiento</label>
    <input type="text" id="calender" name="calender" class="form-control input-sm" reandoly="">
    <span class="label label-success">
    <span id="edadcalculada"></span>
    </span>
    <button type="submit" class="btn btn-info mt-3 btn-block" name="botonCalcular">CALCULAR</button>
<?php
if(isset($_POST["botonCalcular"]))?>
<?php
function Calculandotiempo($fechainicio,$fechafin){

$datetime1 = date_create($fechainicio);
$datetime2 = date_create($fechafin);
$interval = date_diff($datetime1,$datetime2);

$tiempo = array();
foreach ($interval as $valor){
  $tiempo[]=$valor;
}
return $tiempo;

$fechainicio= $_POST['fecha'];
$fechafin=date(Y-m-d);
echo Calculandotiempo($fechainicio,$fechafin)[0];
}
 ?>   
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
  $("#calendario").datepicker({
    changeMonth: true,
    changeYear: true,
    yearRanger:'1900:' + 2020,
    dateFormat: "yy-mm-dd"
  });
  $('#calendario').change(function(){
    $.ajax({
      type:"post",
      data:"fecha=" + $('#calendario').val(),
      success:function(r){
        $('#edadCalculada'). text(r + "años");
      }
    })
  })
})
</script>