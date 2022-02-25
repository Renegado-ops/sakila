<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
$servername = "localhost";
$database = "sakila";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
//mysqli_close($conn);
?>
    <div class="container w-50">
        <h5>ejemplo 2</h5>

        <form action="" method="get">
            <div class="mb-3">
                <label for="">
                    <h4>Idiomas<h4>
                </label>
                <input type="text" name="Nombre" class="form-control">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Guardar</button>
            </div>
            <hr>
            <label for="">
                <h3>Listado de nombres</h3>
            </label>
        </form>
        <?php
        $name =$_GET['Nombre']??"";
if($name != ""){
    $insertar = "INSERT INTO `language`(`name`) VALUES ('$name')";
    $query = mysqli_query($conn, $insertar);

    if ($query){
        echo "Correcto";
    }else{
        echo "incorrecto";
    }
}
        ?>
    </div>
    <div class="container w-50">
            <table class="table">
                <tr>
                    <td>id</td>
                    <td>Idiomas</td>
                </tr>
                <?php 
$query =("SELECT * FROM language");
$result=mysqli_query($conn,$query);
while($query=mysqli_fetch_array($result)){
    
?>

                <tr>
                    <td><?php echo $query["language_id"] ?></td>
                    <td><?php echo $query["name"] ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
    </div>
</body>

</html>