<?php require_once "parte_head.php"; ?>

<body>
    <?php require_once "parte_menu.php";?>
    <div class="container">
        <h3><?php echo $pagina; ?></h3>
        <div class="row">
        <form class="col-6" method="post">
                <div class="mb-3">
                    <label for="">Nombre</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" name="boton-guardar">Guardar</button>
                </div>
            </form>
            <?php if (!empty($error)): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $error; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>
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
                            <th scope="col">Film id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Release year</th>
                            <th scope="col">Language id </th>
                            <th scope="col">Original language id </th>
                            <th scope="col">Rental duration</th>
                            <th scope="col">Rental rate</th>
                            <th scope="col">Length</th>
                            <th scope="col">Replacement cost</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Special_features</th>
                            <th scope="col">Last update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $query = "SELECT * FROM film";
                        $buscador = $_GET['buscador'] ??"";
                        if ($buscador != ""){
                        $query = "SELECT * FROM film where title ='$buscador'";
                        }
                        
                        $resultado = mysqli_query($conexion, $query);
                        ?>

                        <?php if ($resultado):?>
                        <?php while ($fila = mysqli_fetch_assoc($resultado)): ?>
                        <tr>
                            <td><?php echo $fila['film_id'];?></td>
                            <td><?php echo $fila['title'];?></td>
                            <td><?php echo $fila['description'];?></td>

                            <td><?php echo $fila['release_year'];?></td>
                            <td><?php echo $fila['language_id'];?></td>
                            <td><?php echo $fila['original_language_id'];?></td>

                            <td><?php echo $fila['rental_duration'];?></td>
                            <td><?php echo $fila['rental_rate'];?></td>
                            <td><?php echo $fila['length'];?></td>

                            <td><?php echo $fila['replacement_cost'];?></td>
                            <td><?php echo $fila['rating'];?></td>
                            <td><?php echo $fila['special_features'];?></td>

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