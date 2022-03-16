<?php require_once "parte_head.php"; ?>

<body>
    <?php require_once "parte_menu.php";?>
    <div class="container">
        <h3><?php echo $pagina; ?></h3>
        <div class="row">
            <form class="col-6" method="post">
                <div class="mb-3">
                    <label for="">First name</label>
                    <input type="text" name="first_name" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Last name</label>
                    <input type="text" name="last_name" class="form-control">
                </div>
                <div class="mb-3">
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
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Store id</label>
                    <select class="form-select" name="store_id" aria-label="Default select example">
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
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="text" name="password" class="form-control">
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
                            <th scope="col">Staff id</th>
                            <th scope="col">First name</th>
                            <th scope="col">Last name</th>
                            <th scope="col">Address id</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Email</th>
                            <th scope="col">Store id</th>
                            <th scope="col">Active</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Last update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $query = "SELECT * FROM staff";
                        $buscador = $_GET['buscador'] ??"";
                        if ($buscador != ""){
                            $query = "SELECT * FROM staff where first_name ='$buscador'";
                        }
                        
                        $resultado = mysqli_query($conexion, $query);
                        ?>

                        <?php if ($resultado):?>
                        <?php while ($fila = mysqli_fetch_assoc($resultado)): ?>
                        <tr>
                            <td><?php echo $fila['staff_id'];?></td>
                            <td><?php echo $fila['first_name'];?></td>
                            <td><?php echo $fila['last_name'];?></td>

                            <td><?php echo $fila['address_id'];?></td>
                            <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($fila['picture']).'"/>';?>
                            </td>
                            <td><?php echo $fila['email'];?></td>

                            <td><?php echo $fila['store_id'];?></td>
                            <td><?php echo $fila['active'];?></td>
                            <td><?php echo $fila['username'];?></td>

                            <td><?php echo $fila['password'];?></td>
                            <td><?php echo $fila['last_update'];?></td>
                            <td>
                                <a
                                    href='<?php echo $_SERVER['PHP_SELF'] . "?editar=" . $fila['staff_id']; ?>'>Editar</a>
                                <a
                                    href='<?php echo $_SERVER['PHP_SELF'] . "?eliminar" . $fila['staff_id']; ?>'>Eliminar</a>
                            </td>
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