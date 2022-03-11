<?php require_once "parte_head.php"; ?>

<body>
    <?php require_once "parte_menu.php";?>
    <div class="container">
        <h3><?php echo $pagina; ?></h3>
        <div class="row">
            <form class="col-6" method="post">
                <div class="mb-3">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Description</label>
                    <input type="text" name="description" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Release year</label>
                    <input type="text" name="release_year" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Language</label>
                    <select class="form-select" name="language" aria-label="Default select example">
                        <option selected>Selecciona</option>
                        <?php
                        $query = "SELECT * FROM language";
                        $resultado = mysqli_query($conexion, $query);

                        if ($resultado) {
                            while ($fila = mysqli_fetch_object($resultado)) {
                                echo "<option value='$fila->language_id'>$fila->name</option>";
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="">Original language</label>
                    <select class="form-select" name="original_language" aria-label="Default select example">
                        <option selected>Selecciona</option>
                        <?php
                        $query = "SELECT * FROM original_language";
                        $resultado = mysqli_query($conexion, $query);

                        if ($resultado) {
                            while ($fila = mysqli_fetch_object($resultado)) {
                                echo "<option value='$fila->language_id'>$fila->name</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Rental duration</label>
                    <input type="text" name="rental_duration" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Rental rate</label>
                    <input type="text" name="rental_rate" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Length</label>
                    <input type="text" name="length" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Replacement cost</label>
                    <input type="text" name="replacement_cost" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Rating</label>
                    <select class="form-select" name="rating" aria-label="Default select example">
                        <option selected>Selecciona</option>
                        <?php
                        $query = "SELECT * FROM store";
                        $resultado = mysqli_query($conexion, $query);

                        if ($resultado) {
                            while ($fila = mysqli_fetch_object($resultado)) {
                                echo "<option value='$fila->store_id'>$fila->store_id</option>";
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="">Special features</label>
                    <select class="form-select" name="Special_features" aria-label="Default select example">
                        <option selected>Selecciona</option>
                        <?php
                        $query = "SELECT * FROM store";
                        $resultado = mysqli_query($conexion, $query);

                        if ($resultado) {
                            while ($fila = mysqli_fetch_object($resultado)) {
                                echo "<option value='$fila->store_id'>$fila->store_id</option>";
                            }
                        }
                        ?>
                    </select>
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