<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";
$pagina = "Peliculas";
$error ="";


try {

    #borrar esto despues
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //verificar si le da click al boton
    if (isset ($_POST['boton-guardar'])){
        
    //variables
    $title = $_POST["title"];
    $description = $_POST["description"];
    $release_year = $_POST["release_year"];
    $language = $_POST["language"];
    $original_language = $_POST["original_language"];
    $rental_duration = $_POST["rental_duration"];
    $rental_rate = $_POST["rental_rate"];
    $length = $_POST["length"];
    $replacement_cost = $_POST["replacement_cost"];
    $rating = $_POST["rating"];
    $Special_features = $_POST["Special_features"];
    //validaciones
    if (empty($title)){
        throw new Exception("El title no puede estar vacio "); 
    }
    if (empty($description)){
        throw new Exception("El description no puede estar vacio "); 
    }
    if (empty($release_year)){
        throw new Exception("El release_year no puede estar vacio "); 
    }
    if (empty($language)){
        throw new Exception("El language no puede estar vacio "); 
    }
    if (empty($original_language)){
        throw new Exception("El original_language no puede estar vacio "); 
    }
    if (empty($rental_duration)){
        throw new Exception("El rental_duration no puede estar vacio "); 
    }
    if (empty($rental_rate)){
        throw new Exception("El rental_rate no puede estar vacio "); 
    }
    if (empty($length)){
        throw new Exception("El length no puede estar vacio "); 
    }
    if (empty($replacement_cost)){
        throw new Exception("El replacement_cost no puede estar vacio "); 
    }
    if (empty($rating)){
        throw new Exception("El rating no puede estar vacio "); 
    }
    if (empty($Special_features)){
        throw new Exception("El Special_features no puede estar vacio "); 
    }
    //guardar

    $query = "INSERT INTO film (`title`, `description`, `release_year`, `language_id`, `original_language_id`, `rental_duration`, `rental_rate`, `length`, `replacement_cost`, `rating`, `special_features`) VALUES ('','','','', ,'','','','','','')";
    
    $resultado = $conexion-> query($query) or die ("Error en query");
    if ($resultado){
        $_SESSION['mensaje'] = "Datos insertados correctamente";
    }else{
        throw new Exception("No se puede insertar los datos");
    }
    //refrezcar

    refrezcar('peliculas.php');
}
} catch(Throwable $ex){
    $error = $ex ->getMessage();
}
require_once "vistas/vista_peliculas.php";