<?php
//arreglos de una dimension
$precios=array(1600,5000,2500);
$nombre=array("arroz","salchicha","azucar");
$marca=array("diana","zenu","incauca");


//arreglos en multiples dimensiones
$productos=array(
    "producto1"=>array("nombre"=>"arroz","precio"=>1600,"marca"=>"diana"),
    "producto2"=>array("nombre"=>"salchicha","precio"=>5000,"marca"=>"zenu"),
    "producto3"=>array("nombre"=>"azucar","precio"=>2500,"marca"=>"incauca"));

    print_r($productos);

    echo("<br>");
    echo("<br>");

    foreach($productos as $productos){
        print_r($productos["nombre"]);
        echo("<br>");
    }
    
?>