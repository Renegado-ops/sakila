<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <?php
    echo "<hr>";
    ?> <form action="" method="get">
        <div class="container w-25">
            <h5>Ingrese dia de la semana</h5>

            <div class="mb-3">
                <label for="">Día</label>
                <input type="text" name="dia" class="form-control">
            </div>

            <div class="mb-3">
                <button class="btn btn-primary">Resultado</button>
            </div>

        </div>
    </form>


</body>

</html>

<?php
    $semana= $_GET['dia'];
    
    if ($semana == 1){
        echo "el dia es lunes";
    }
    if ($semana == 2){
        echo "el dia es marte";
    }
    if ($semana == 3){
        echo "el dia es miercoles";
    }
    if ($semana == 4){
        echo "el dia es jueves";
    }
    if ($semana == 5){
        echo "el dia es viernes";
    }
    if ($semana == 6){
        echo "el dia es sabado";
    }
    if ($semana == 7){
        echo "el dia es domingo";
    }
    elseif ($semana >7){
        echo "El numero de dias son 7";
    }
?>