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
        $store_id = $_POST["store_id"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $address_id = $_POST["address_id"];
        $create_date = $_POST["create_date"];
        //validaciones
    
    //guardar

    $query = "INSERT INTO customer (store_id,first_name,last_name,email,address_id,create_date) VALUES ('$store_id','$first_name','$last_name','$email ','$address_id','$create_date')";
    echo $query;
    $resultado = $conexion-> query($query) or die ("Error en query");
    if ($resultado){
        $_SESSION['mensaje'] = "Datos insertados correctamente";
    }else{
        throw new Exception("No se puede insertar los datos");
    }
    //refrezcar

    refrezcar('clientes.php');
}
} catch(Throwable $ex){
    $error = $ex ->getMessage();
}
require_once "vistas/vista_clientes.php";
#no debe haber codigo despues de esta linea