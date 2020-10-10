<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<main>

<?php

$productos=array(
    "producto1"=>array("nombre"=>"arroz","precio"=>1600,"marca"=>"diana"),
    "producto2"=>array("nombre"=>"salchicha","precio"=>5000,"marca"=>"zenu"),
    "producto3"=>array("nombre"=>"azucar","precio"=>2500,"marca"=>"incauca"));
    ?>
<table class="table">
<thead>
<tr>
    <th scope="col">nombre</th>
    <th scope="col">marca</th>
    <th scope="col">precio</th>
</tr>
</thead>

<tbody>
    <?php  foreach($productos as $producto):  ?>
        <tr>
           <th scope="row"><?php echo($producto["nombre"]) ?></th>
           <td><?php echo($producto["marca"]);?></td>
           <td><?php echo($producto["precio"]);?></td>
           
    </tr>

    <?php endforeach ?>
    
  </tbody>
</table>
 
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>    
</body>
</html>