<?php

include("BaseDatos.php");

if(isset($_POST["botonEditar"])){

    //1. recibir datos a actualizar:
    $nombre=$_POST["nombreEditar"];
    $marca=$_POST["marcaEditar"];
    $precio=$_POST["precioEditar"];
    $descripcion=$_POST["descripcionEditar"];
    $foto=$_POST["fotoEditar"];

    //2. recibir el id del registro a actualizar
    $id=$_GET["id"];
    
    //3.Sacar copia o crear objeto de la clase 
    $transaccion=new BaseDatos();

    //4. crear una consulta para editar datos en sql
    $consultaSQL="UPDATE productos SET nombre='$nombre',marca='$marca',precio='$precio',descripcion='$descripcion',foto='$foto' WHERE idproducto='$id'";

    //5.Accerder al metodo editores
    $transaccion->editarDatos($consultaSQL);

    //6.redirrecion
    header("location:listaproductos.php");

}







?>
