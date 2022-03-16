<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";
$pagina = "Staff";
$error ="";


try {



    //verificar si le da click al boton
    if (isset ($_POST['boton-guardar'])){
        
    //variables
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];	
    $address_id = $_POST["address_id"];
    $email = $_POST["email"];	
    $store_id = $_POST["store_id"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    //validaciones
    if (empty($first_name)){
        throw new Exception("El first name no puede estar vacio "); 
    }
    if (empty($last_name)){
        throw new Exception("El last name no puede estar vacio "); 
    }
    if (empty($address_id)){
        throw new Exception("El address no puede estar vacio "); 
    }
    if (empty($email)){
        throw new Exception("El email no puede estar vacio "); 
    }
    if (empty($store_id)){
        throw new Exception("El store no puede estar vacio "); 
    }
    if (empty($username)){
        throw new Exception("El username no puede estar vacio "); 
    }
    if (empty($password)){
        throw new Exception("El password no puede estar vacio "); 
    }
    //guardar

    $query = "INSERT INTO `staff`(`first_name`, `last_name`, `address_id`, `email`, `store_id`, `username`, `password`) VALUES ('$first_name','$last_name','$address_id','$email','$store_id','$username','$password');";
    
    $resultado = $conexion-> query($query) or die ("Error en query");
    if ($resultado){
        $_SESSION['mensaje'] = "Datos insertados correctamente";
    }else{
        throw new Exception("No se puede insertar los datos");
    }
    //refrezcar

    refrezcar('staff.php');
}
} catch(Throwable $ex){
    $error = $ex ->getMessage();
}

require_once "vistas/vista_staffs.php";