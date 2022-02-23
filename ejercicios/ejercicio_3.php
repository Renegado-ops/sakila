<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
    <!-- CSS only CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container w-25">
        <h5>Ejercicio 3, distancia recorrida</h5>

        <?php
        echo "<hr>"
        ?>

        <form action="" method="get">
            <div class="mb-3">
                <label for="">Velocidad</label>
                <input type="text" name="velocidad" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Tiempo</label>
                <input type="text" name="tiempo" class="form-control">
            </div>

            <div class="mb-3">
                <button class="btn btn-primary">Resultado</button>
            </div>
        </form>

        <?php
        $vel = $_GET['velocidad'];
        $tiempo = $_GET['tiempo'];
        $distancia = $vel * $tiempo;
        
        echo "el resultado es $distancia desplazamiento";

        
        ?>

</body>

</html>