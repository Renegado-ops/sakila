<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";
$pagina = "Clientes";
$error ="";


try {



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
        if (empty($store_id)){
            throw new Exception("La store no puede estar vacio");
        }
        if (empty($first_name)){
            throw new Exception("La first name no puede estar vacio");
        }
        if (empty($last_name)){
            throw new Exception("La last name no puede estar vacio");
        }
        if (empty($email)){
            throw new Exception("La email no puede estar vacio");
        }
        if (empty($address_id)){
            throw new Exception("La address id no puede estar vacio");
        }
        if (empty($create_date)){
            throw new Exception("La create date no puede estar vacio");
        }
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