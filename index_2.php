<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Buscar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
</head>

<body class="bg-black">
    <div class="bg-primary bg-opacity-25">
        <!--SVG-->
        <?php include "include/svg.php"; ?>

        <!--SVG-->
        <?php include "include/svg.php"; ?>

        <!--HEADER-->
        <?php include "include/header.php"; ?>

        <!--SECTION-->
        <section class="container ">
            <?php include "sql/editar.php" ?>
            <?php include "sql/borrar.php" ?>
            <div class="border border-2 border-danger rounded-2 p-2 g-3  bg-black mt-5 text-center">
                <form class="row g-2 needs-validation mb-5 mt-5 " action="" method="post" novalidate>
                    <div class="col-3 ">
                        <label class="form-label text-secondary">Buscar por nombre:</label>
                    </div>
                    <div class="col-6 ">
                        <input type="text" class="form-control" name="peli" placeholder="Nombre de la pelicula" required>
                        <div class="invalid-feedback">
                            necesitas escribir algo.
                        </div>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-primary w-100" name="buscarn" type="submit">Buscar</button>
                    </div>
                </form>

                <form class="row g-2 needs-validation mb-5 " action="" method="post" novalidate>
                    <div class="col-3 ">
                        <label class="form-label text-secondary">Buscar por fecha:</label>
                    </div>
                    <div class="col-3 ">
                        <input type="date" class="form-control" name="fechai" required>
                        <div class="invalid-feedback">
                            necesitas escribir algo.
                        </div>
                    </div>
                    <div class="col-3 ">
                        <input type="date" class="form-control" name="fechaf" required>
                        <div class="invalid-feedback">
                            necesitas escribir algo.
                        </div>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-primary w-100" name="buscarf" type="submit">Buscar</button>
                    </div>
                </form>

                <form class="row g-2 needs-validation mb-5 " action="" method="post" novalidate>
                    <div class="col-3 ">
                        <label class="form-label text-secondary">Buscar por folio:</label>
                    </div>
                    <div class="col-6 ">
                        <input type="number" class="form-control" name="folio" placeholder="Numero de folio" required>
                        <div class="invalid-feedback">
                            necesitas escribir algo.
                        </div>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-primary w-100" name="buscarfl" type="submit">Buscar</button>
                    </div>
                </form>
            </div>
            <div class="mt-3">
                <div class="container">

                    <?php include "sql/buscar.php" ?>
                </div>
            </div>

        </section>
    </div>



    <!--FOOTER-->
    <?php include "include/footer.php"; ?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/valida.js"></script>
    <script src="js/modal.js"></script>
</body>

</html>
<!--
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
-->