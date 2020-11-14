<?php


/*$nombre1="catalina";
$nombre2="pedro";
echo ("buenos dias ".$nombre1);
echo("<br>");
echo ("buenos dias ".$nombre2);*/
$nombre="juan carlos";

//declaracion o construccion de una funcion

function saludar($nombre){
    return("buen dia ".$nombre);
}
//usar la funcion o llamar la funcion

echo(saludar("juan"));
saludar("catalina");
saludar($nombre);

//funcion que sume 2 numeros 
//retornar la suma multiplicar el resultado por 2

$multi = 2;
function suma($num1,$num2)
{
    $resultado =($num1+$num2);
    return($resultado);
}
echo("la suma es " .suma (3,3)." y la multiplicacion es: ".suma(3,3)* $multi);






?>