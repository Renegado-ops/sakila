<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";
$pagina = "Cuidades";
$error ="";


try {

    #borrar esto despues
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //verificar si le da click al boton
    if (isset ($_POST['boton-guardar'])){
        
    //variables
    $city = $_POST["city"];
    $country_id = $_POST["country_id"];
    //validaciones
    if (empty($city)){
        throw new Exception("La city no puede estar vacio");
    }
    if (empty($country_id)){
        throw new Exception("La country no puede estar vacio");
    }
    //guardar

    $query = "INSERT INTO city (city, country_id) VALUE ('$city', '$country_id')";
    
    $resultado = $conexion-> query($query) or die ("Error en query");
    if ($resultado){
        $_SESSION['mensaje'] = "Datos insertados correctamente";
    }else{
        throw new Exception("No se puede insertar los datos");
    }
    //refrezcar

    refrezcar('cuidades.php');
}
} catch(Throwable $ex){
    $error = $ex ->getMessage();
}
require_once "vistas/vista_ciudades.php";
#no debe haber codigo despues de esta linea