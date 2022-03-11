<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";
$pagina = "Paises";
$error ="";


try {

    #borrar esto despues
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //verificar si le da click al boton
    if (isset ($_POST['boton-guardar'])){
        
    //variables
    $country = $_POST["country"];
    //validaciones
    if (empty($country)){
        throw new Exception("El country no puede estar vacio "); 
    }
    //guardar

    $query = "INSERT INTO country (country) VALUE ('$country')";
    
    $resultado = $conexion-> query($query) or die ("Error en query");
    if ($resultado){
        $_SESSION['mensaje'] = "Datos insertados correctamente";
    }else{
        throw new Exception("No se puede insertar los datos");
    }
    //refrezcar

    refrezcar('paises.php');
}
} catch(Throwable $ex){
    $error = $ex ->getMessage();
}
require_once "vistas/vista_paises.php";
#no debe haber codigo despues de esta linea