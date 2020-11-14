<?php


    include("BaseDatos.php");

    //0. recibir el id del registro a eliminar
    $id=$_GET["id"];
    

    //1.utilizar la base datos(istanciar una clase sacarle una copia)
    $transaccion= new BaseDatos();

    //2. crear la consulta sql para eliminar registros
    $consultaSQL="DELETE FROM productos WHERE idproducto='$id'";

    //3. llmar y utlizar el metodo eliminardatos
    $transaccion->eliminardatos($consultaSQL);






?>