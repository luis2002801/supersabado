<?php
class BaseDatos{
// variable == atributos
public $productosBD="root";
public $passwordBD="";

//funcion especial para sacar copias de la clase(constructor)
public function _constructor(){}

//funciones == metodos
public function conectarBD(){


    try{
        $infoBD="mysql:host=localhost;dbname=tiendasabado";
        $conexionBD= new PDO($infoBD,$this->productosBD, $this->passwordBD);
        return($conexionBD);

        
    }catch(PDOExeption $error){
        echo ($error->getMessage());
    }
    
}
public function agregarDatos($consultaSQL){

    // 1. conectarme ala BD
    $conexionBD=$this->conectarBD();
    // 2. preparar la consulta
    $consultaAgregarDatos= $conexionBD->prepare($consultaSQL);
    //3. ejecutar la consulta
    $resultado=$consultaAgregarDatos->execute();
    //4. verifique el resultado
    if($resultado){
        echo("Registro agregado con exito");
    }else{
        echo ("Error agregando el registro");
    }

}
public function buscarDatos($consultaSQL){
    $conexionBD=$this->conectarBD();
    $consultabuscarDatos= $conexionBD->prepare($consultaSQL);
    //3.indicar cual es el metodo para traer los datos
    $consultabuscarDatos->setFetchMode(PDO::FETCH_ASSOC);
    //4.ejecutar la consulta
    $consultabuscarDatos->execute();
    //5. retornar los datos consultados
    return($consultabuscarDatos->fetchAll());
}
public function eliminarDatos($consultaSQL){

    // 1. conectarme ala BD
    $conexionBD=$this->conectarBD();
    // 2. preparar la consulta
    $consultaEliminarDatos= $conexionBD->prepare($consultaSQL);
    //3. ejecutar la consulta
    $resultado=$consultaEliminarDatos->execute();
    //4. verifique el resultado
    if($resultado){
        echo("Registro eliminado con exito");
    }else{
        echo ("Error al eliminar el registro");
    }
    
}
}
?>