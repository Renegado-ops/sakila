<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Lord´s</title>
    <link rel="icon" href="MaxPixel.net-Spade-Card-Game-Suit-Of-Spades-Spades-Cards-Game-145116.png">
</head>

<body>

    <div class="row text-center">
        <div class="col-4">
            <span class="fs-1">
                <i class="bi bi-file-earmark-person-fill"></i>
            </span>
            <a href="./actores.php">
                <h3>Actores</h3>
            </a>
        </div>

        <div class="col-4">
            <span class="fs-1">
                <i class="bi bi-bookmarks-fill"></i>
            </span>
            <a href="./categorias.php">
                <h3>Categorias</h3>
            </a>
        </div>

        <div class="col-4">
            <span class="fs-1">
                <i class="bi bi-person-circle"></i>
            </span>
            <a href="./clientes.php">
                <h3>Clientes</h3>
            </a>
        </div>

        <div class="col-4">
            <span class="fs-1">
                <i class="bi bi-geo-alt-fill"></i>
            </span>
            <a href="./cuidades.php">
                <h3>Cuidades</h3>
            </a>
        </div>

        <div class="col-4">
            <span class="fs-1">
                <i class="bi bi-translate"></i>
            </span>
            <a href="./idiomas.php">
                <h3>Idiomas</h3>
            </a>
        </div>

        <div class="col-4">
            <span class="fs-1">
                <i class="bi bi-globe2"></i>
            </span>
            <a href="./paises.php">
                <h3>Paises</h3>
            </a>
        </div>

        <div class="col-4">
            <span class="fs-1">
                <i class="bi bi-film"></i>
            </span>
            <a href="./peliculas.php">
                <h3>Peliculas</h3>
            </a>
        </div>

        <div class="col-4">
            <span class="fs-1">
                <i class="bi bi-person-badge-fill"></i>
            </span>
            <a href="./staff.php">
                <h3>Staff</h3>
            </a>
        </div>

        <div class="col-4">
            <span class="fs-1">
                <i class="bi bi-person-circle"></i>
            </span>
            <a href="./tiendas.php">
                <h3>Tiendas</h3>
            </a>
        </div>

    </div>

    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
        aria-controls="offcanvasExample">
        Button with data-bs-target
    </button>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images,
                lists, etc.
            </div>
            <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="col-lg-8 mx-auto p-3 py-md-5">
        <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <i class="bi bi-suit-spade"></i>
                <span class="fs-4">Lord´s</span>
            </a>
        </header>

        <main>
            <h1><i class="bi bi-suit-spade-fill"></i>Bienvenidos a Lord´s</h1>
            <p class="fs-5 col-md-8">Las cosas son mejores como miembro de Lord´s. Obtenga acceso primero y exclusivo a
                los estilos e innovaciones más nuevos, envío gratis, recompensas de cumpleaños y más.</p>

            <div class="mb-5">
                <a href="/docs/5.1/examples/" class="btn btn-primary btn-lg px-4">Download examples</a>
            </div>

            <hr class="col-3 col-md-2 mb-5">

            <div class="row g-5">
                <div class="col-md-6">
                    <h2>Starter projects</h2>
                    <p>Ready to beyond the starter template? Check out these open source projects that you can quickly
                        duplicate to a new GitHub repository.</p>
                    <ul class="icon-list">
                        <li><a href="./explicaciones/">explicaciones</a></li>
                        <li><a href="./ejercicios/">ejercicios</a></li>
                        <li><a href=""></a></li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h2>Guides</h2>
                    <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
                    <ul class="icon-list">
                        <li><a href="/docs/5.1/getting-started/introduction/">Bootstrap quick start guide</a></li>
                        <li><a href="/docs/5.1/getting-started/webpack/">Bootstrap Webpack guide</a></li>
                        <li><a href="/docs/5.1/getting-started/parcel/">Bootstrap Parcel guide</a></li>
                        <li><a href="/docs/5.1/getting-started/contribute/">Contributing to Bootstrap</a></li>
                    </ul>
                </div>
            </div>
        </main>
        <footer class="pt-5 my-5 text-muted border-top">
            Created by the Bootstrap erick &middot; &copy; 2022
        </footer>
    </div>


    <?php require_once "vistas/parte_footer.php"; ?>
</body>

</html>