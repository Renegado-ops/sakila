<?php require_once "parte_head.php"; ?>

<body>
    <?php require_once "parte_menu.php";?>
    <div class="container">
        <h3><?php echo $pagina; ?></h3>
        <div class="row">
            <form class="col-6 ">
                Aqui va el formulario
            </form>
        </div>
        <div class="row">
            <form class="col-4 ">

                <div class="input-group mb-3">
                    <input type="text" name="buscador" class="form-control" placeholder="Buscador">
                    <button class="btn btn-outline-secondary" type="submit" name="boton-buscar"><i
                            class="bi bi-search"></i>Buscar</button>
                </div>

            </form>
        </div>
        <div class="row">
            <div class="col-12 ">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Language id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Last update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                         $query = "SELECT * FROM language";
                         $buscador = $_GET['buscador'] ??"";
                         if ($buscador != ""){
                             $query = "SELECT * FROM language where name ='$buscador'";
                         }
                        
                        $resultado = mysqli_query($conexion, $query);
                        ?>

                        <?php if ($resultado):?>
                        <?php while ($fila = mysqli_fetch_assoc($resultado)): ?>
                        <tr>
                            <td><?php echo $fila['language_id'];?></td>
                            <td><?php echo $fila['name'];?></td>
                            <td><?php echo $fila['last_update'];?></td>
                        </tr>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php require_once "parte_footer.php";?>
</body>

</html>