<?php require_once "parte_head.php"; ?>

<body>
    <?php require_once "parte_menu.php"; ?>
    <div class="container">
        <h3><?php echo $pagina; ?></h3>
        <div class="row">
            <form class="col-6" method="post">
                <div class="mb-3">

                    <label for="">Manager staff id</label>
                    <select class="form-select" name="manager_staff_id" aria-label="Default select example">
                        <option selected>Selecciona</option>
                        <?php
                        $query = "SELECT * FROM staff";
                        $resultado = mysqli_query($conexion, $query);

                        if ($resultado) {
                            while ($fila = mysqli_fetch_object($resultado)) {
                                echo "<option value='$fila->staff_id'>$fila->first_name</option>";
                            }
                        }
                        ?>
                    </select>


                    <label for="">Address id</label>
                    <select class="form-select" name="address_id" aria-label="Default select example">
                        <option selected>Selecciona</option>
                        <?php
                        $query = "SELECT * FROM address";
                        $resultado = mysqli_query($conexion, $query);

                        if ($resultado) {
                            while ($fila = mysqli_fetch_object($resultado)) {
                                echo "<option value='$fila->address_id'>$fila->address</option>";
                            }
                        }
                        ?>
                    </select>
                </div>


                <div class="mb-3">
                    <button class="btn btn-primary" name="boton-guardar">Guardar</button>
                </div>
            </form>
            <?php if (!empty($error)) : ?>
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
                            <th scope="col">Store id</th>
                            <th scope="col">Manager staff id</th>
                            <th scope="col">Address id</th>
                            <th scope="col">Last update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM store";
                        $buscador = $_GET['buscador'] ?? "";
                        if ($buscador != "") {
                            $query = "SELECT * FROM store where store_id ='$buscador'";
                        }
                        $resultado = mysqli_query($conexion, $query);
                        ?>

                        <?php if ($resultado) : ?>
                        <?php while ($fila = mysqli_fetch_assoc($resultado)) : ?>
                        <tr>
                            <td><?php echo $fila['store_id']; ?></td>
                            <td><?php echo $fila['manager_staff_id']; ?></td>
                            <td><?php echo $fila['address_id']; ?></td>

                            <td><?php echo $fila['last_update']; ?></td>
                            <td>
                                <a
                                    href='<?php echo $_SERVER['PHP_SELF'] . "?editar=" . $fila['store_id']; ?>'>Editar</a>
                                <a
                                    href='<?php echo $_SERVER['PHP_SELF'] . "?eliminar" . $fila['store_id']; ?>'>Eliminar</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php require_once "parte_footer.php"; ?>
</body>

</html>