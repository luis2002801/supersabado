<?php

//arreglo indexado
$productos = array("lentejas","papa","huevos");
print_r($productos);
echo("<br>");
echo($productos[1]);


// arreglo asociativos
echo("<br>");
echo("<br>");
$productosAsociativos=array("producto1"=>"lenteja","producto2"=>"papa","producto3"=>"huevos");
print_r($productosAsociativos);
echo("<br>");
echo($productosAsociativos["producto2"]);

//bucle for
echo("<br>");
echo("<br>");
for($centinela=0; $centinela<count($productos); $centinela++){

    echo($productos[$centinela]);
    echo("<br>");
}


// bucle foreach
echo("<br>");
echo("<br>");

foreach($productosAsociativos as $clave=>$valor){
    echo($clave."---".$valor);
    echo("<br>");


}






?>