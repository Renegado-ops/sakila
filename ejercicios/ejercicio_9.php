<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="container w-25">
        <h5>Ejercicio 9</h5>

        <?php
        echo "<hr>"
        ?>

        <form action="" method="get">
            <div class="mb-3">
                <label for="">Ingrese un numero par o impar</label>
                <input type="text" name="pi" class="form-control">
            </div>

            <div class="mb-3">
                <button class="btn btn-primary">Resultado</button>
            </div>
        </form>

        <?php
        $num = $_GET['pi'];
        if (($num % 2) == 0) {
             echo 'Es un número par';
        } else {
             echo 'Es un número impar';
        }
        ?>
</div>
</body>

</html>