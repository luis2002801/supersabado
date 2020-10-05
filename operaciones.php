<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <a class="navbar-brand" href="#">Calculadora Cesde</a>
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
<form method = "post" action = "operaciones.php" class="text-center">
<label>coloque los valores</label><br />
<input type="text" name = "num1"><br />
<input type="text" name = "num2"><br />
<label class="text-info">Selecciona la opcion:<br /><select name="opciones">
    <option value="seleccione">seleccione</option>
    <option value="suma">suma</option>
    <option value="resta">resta</option>
    <option value="multiplicacion">multiplicacion</option>
    <option value="division">division</option>
</select>
</label>
<input type="submit" name = "calcular" value = "calcular">
</form>
<?php 
      
      $operacion = $_POST["opciones"];
      
      if(isset($_POST['num1']) && !empty($_POST['num1']) &&
      isset($_POST['num2']) && !empty($_POST['num2']))
      {
        echo "El resultado de la operacion es: " ;
       switch($operacion)
       {
        case "suma":
        echo  $_POST['num1'] + $_POST['num2'];
        break;
        case "resta":
        echo $_POST['num1'] - $_POST['num2'];
        break;
        case "multiplicacion":
          echo $_POST['num1'] * $_POST['num2'];
        break;
        case "division":
            echo $_POST['num1'] / $_POST['num2'];
        break;

        default: "no se ha podido realizar la operacion" ;
       }
      }else{
        echo "debes insertar todos los campos";
      }
?>
</body>
 
</html>