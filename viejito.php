<?php
$producto1='arroz';
$producto2='papa';
$producto3='frijoles';
$producto4='pasta';
$producto5='leche';
$producto6='sal';
$producto7='azucar';
$producto8='cerveza';
$producto9='carne';
$producto10='huevos';

$precio1=10000;
$precio2=15000;
$precio3=4000;
$precio4=3000;
$precio5=6000;
$precio6=800;
$precio7=2000;
$precio8=49000;
$precio9=25000;
$precio10=12000;

$total=$precio1+$precio2+$precio3+$precio4+$precio5+$precio6+$precio7+$precio8+$precio9+$precio10;

$total=5000;

if($total<=80000){
  echo('gracias por su compra');
}else{
    echo('no le alcanza')
}
?>