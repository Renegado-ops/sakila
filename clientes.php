<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";
$pagina = "Clientes";
$error ="";


try {

    #borrar esto despues
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //verificar si le da click al boton
    if (isset ($_POST['boton-guardar'])){
        
        //variables
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        //validaciones
    
    //guardar

    $query = "INSERT INTO customer (first_name,last_name) VALUE ('$first_name','$last_name')";
    echo $query;
    $resultado = $conexion-> query($query) or die ("Error en query");
    if ($resultado){
        $_SESSION['mensaje'] = "Datos insertados correctamente";
    }else{
        throw new Exception("No se puede insertar los datos");
    }
    //refrezcar

    refrezcar('cliente.php');
}
} catch(Throwable $ex){
    $error = $ex ->getMessage();
}
require_once "vistas/vista_clientes.php";
#no debe haber codigo despues de esta linea