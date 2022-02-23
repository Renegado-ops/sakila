<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
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
    print_r($_GET);

    $base = $_GET['Base'];
    $altura = $_GET['Altura'];

    $area = ($base * $altura) / 2;

    echo "el area es $area";
    ?>


    <hr>


    <form action="" method="get">
        <div class="container w-25">
            <h5>Promedio</h5>

            <div class="mb-3">
                <label for="">nota 1</label>
                <input type="text" name="nota_1" class="form-control">
            </div>


            <div class="mb-3">
                <label for="">nota 2</label>
                <input type="text" name="nota_2" class="form-control">
            </div>


            <div class="mb-3">
                <label for="">nota 3</label>
                <input type="text" name="nota_3" class="form-control">
            </div>


            <div class="mb-3">
                <label for="">nota 4</label>
                <input type="text" name="nota_4" class="form-control">
            </div>

            <div class="mb-3">
                <button class="btn btn-primary">calcular</button>
            </div>
        </div>
    </form>

    <?php
    print_r($_GET);

    $nota1 = $_GET['nota_1'];
    $nota2 = $_GET['nota_2'];
    $nota3 = $_GET['nota_3'];
    $nota4 = $_GET['nota_4'];
    $promedio = ($nota1+$nota2+$nota3+$nota4)/4;
    echo "el promedio es $promedio"
    ?>
</body>

</html>