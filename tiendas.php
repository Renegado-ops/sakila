<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";
$pagina = "Tiendas";
$error ="";


try {



    //verificar si le da click al boton
    if (isset ($_POST['boton-guardar'])){
        
    //variables
    $manager_staff_id = $_POST["manager_staff_id"];
    $address_id = $_POST["address_id"];


    
    //validaciones
    if (empty($manager_staff_id)){
        throw new Exception("El Manager_staff_id no puede estar vacio "); 
    }
    if (empty($address_id)){
        throw new Exception("El address_id no puede estar vacio "); 
    }
    //guardar

    $query = "INSERT INTO store (manager_staff_id,address_id) VALUE ('$manager_staff_id','$address_id')";
    
    echo $query;
    $resultado = $conexion-> query($query) or die ("Error en query");
    if ($resultado){
        $_SESSION['mensaje'] = "Datos insertados correctamente";
    }else{
        throw new Exception("No se puede insertar los datos");
    }
    //refrezcar

    refrezcar('tiendas.php');
}
} catch(Throwable $ex){
    $error = $ex ->getMessage();
}



#incluir la vista
require_once "vistas/vista_tiendas.php";

#no debe haber codigo despues de esta linea