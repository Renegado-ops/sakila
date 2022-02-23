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
    ?>

    <form action="" method="get">
        <div class="container w-25">
            <h5>Ingrese el año de su nacimiento </h5>

            <div class="mb-3">
                <label for="">Año</label>
                <input type="text" name="año" class="form-control">
            </div>

            <div class="mb-3">
                <button class="btn btn-primary">calcular</button>
            </div>

        </div>
    </form>

    <?php
    $mes= 2022; 
    $año= $_GET['año'];
    
    $edad= $mes - $año;
    echo "$edad"; 
    ?>

</body>

</html>