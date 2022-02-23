<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
    <!-- CSS only CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <?php
    echo "<hr>";
    ?>

    <form action="" method="get">
        <div class="container w-25">
            <h5>Buscar la hipotenusa</h5>

            <div class="mb-3">
                <label for="">Base</label>
                <input type="text" name="Base" class="form-control">
            </div>


            <div class="mb-3">
                <label for="">Altura</label>
                <input type="text" name="Altura" class="form-control">
            </div>

            <div class="mb-3">
                <button class="btn btn-primary">calcular</button>
            </div>

        </div>
    </form>

    <?php
    $base = intval($_GET['Base']);
    $altura = intval($_GET['Altura']);

    $hipoo = sqrt(pow($base, 2) + pow($altura, 2));
    echo "La hipotenusa es $hipoo";
    ?>
</body>

</html>