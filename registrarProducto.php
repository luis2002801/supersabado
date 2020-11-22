<?php

include("BaseDatos.php");

// 1 recibir datos:
if(isset($_POST["botonEnvio"])){
    $nombre=$_POST["nombre"];
    $marca=$_POST["marca"];
    $precio=$_POST["precio"];
    $descripcion=$_POST["descripcion"];
    $foto=$_POST["foto"];

    
// 2.crear un objeto de la clase BaseDatos
// 2.sacar una copia de la clase BaseDatos
$transaccion= new BaseDatos();


//3. crear la consulta SQL para agregar datos
$consultaSQL="INSERT INTO productos(nombre, marca, precio,descripcion,foto) VALUES ('$nombre','$marca','$precio','$descripcion','$foto')";
//4.llamar al metodo agregarDatos
$transaccion->agregarDatos($consultaSQL);

}


?>