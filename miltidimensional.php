<?php
//arreglos de una dimension
$precios=array(1600,5000,2500);
$nombre=array("arroz","salchicha","azucar");
$marca=array("diana","zenu","incauca");


//arreglos en multiples dimensiones
$productos=array(
    "producto1"=>array("arroz",1600,"diana"),
    "producto2"=>array("salchicha",5000,"zenu"),
    "producto3"=>array("azucar",2500,"incauca"));

    print_r($productos);
?>