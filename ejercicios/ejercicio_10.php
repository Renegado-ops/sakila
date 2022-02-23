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
    <div class="container w-50">
    <h5>Numeros pares o impares, del 1 al 100</h5>


    <label for="">Generador de numeros pares o impares</label>
        <hr>
        <?php

$i = 0;
while ($i <= 99):
    $i++;
    if (($i % 2) == 0) {
        echo "Es un número par &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp$i<br>";
   } else {
        echo "Es un número impar &nbsp;&nbsp$i<br>";
   }
endwhile;

?>


</body>

</html>