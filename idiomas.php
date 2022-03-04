<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";
$pagina = "Idiomas";
$error ="";


try {

    #borrar esto despues
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //verificar si le da click al boton
    if (isset ($_POST['boton-guardar'])){
        
    //variables
    $name = $_POST["name"];
    //validaciones
    if (empty($name)){
        throw new Exception("El nombre no puede estar vacio "); 
    }
    //guardar

    $query = "INSERT INTO language (name) VALUE ('$name')";
    
    $resultado = $conexion-> query($query) or die ("Error en query");
    if ($resultado){
        $_SESSION['mensaje'] = "Datos insertados correctamente";
    }else{
        throw new Exception("No se puede insertar los datos");
    }
    //refrezcar

    refrezcar('idiomas.php');
}
} catch(Throwable $ex){
    $error = $ex ->getMessage();
}
require_once "vistas/vista_idiomas.php";
#no debe haber codigo despues de esta linea