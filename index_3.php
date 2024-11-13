<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registrar</title>
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
        <?php include "include/headerf.php"; ?>

        <!--SECTION-->
        <section class="container centro ">
            <div>
                <?php include "sql/registar.php" ?>
                <div class="border border-2 border-danger rounded-2 p-3 g-3 bg-black">
                    <h3 class="text-warning">Registrar peliculas:</h3>
                    <form class="row justify-content-center needs-validation g-3" action="" method="post" novalidate>
                        <div class="col-3">
                            <label class="form-label text-secondary">Folio:</label>
                            <input type="text" class="form-control border-danger " name="fl" required>
                            <div class="invalid-feedback">
                                necesitas escribir algo.
                            </div>
                        </div>

                        <div class="col-6">
                            <label class="form-label text-secondary">Pelicula:</label>
                            <input type="text" class="form-control border-danger " name="pelicula" required>
                            <div class="invalid-feedback">
                                necesitas escribir algo.
                            </div>
                        </div>

                        <div class="col-3">
                            <label class="form-label text-secondary">Estreno:</label>
                            <input type="date" class="form-control border-danger " name="estreno" required>
                            <div class="invalid-feedback">
                                necesitas escribir algo.
                            </div>
                        </div>

                        <div class="col-4">
                            <label class="form-label text-secondary">Precio:</label>
                            <input type="number" class="form-control border-danger " name="precio" required>
                            <div class="invalid-feedback">
                                necesitas escribir algo.
                            </div>
                        </div>

                        <div class="col-4">
                            <label class="form-label text-secondary">Duracion:</label>
                            <input type="number" class="form-control border-danger " name="duracion" required>
                            <div class="invalid-feedback">
                                necesitas escribir algo.
                            </div>
                        </div>

                        <div class="col-4">
                            <label class="form-label text-secondary">Disponible:</label>
                            <input type="text" class="form-control border-danger " name="disponible" required>
                            <div class="invalid-feedback">
                                necesitas escribir algo.
                            </div>
                        </div>
                        <div class="col-10">
                            <button class="btn btn-primary col-12 " type="submit" name="insertar">Registrar</button>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </div>



    <!--FOOTER-->
    <?php include "include/footerf.php"; ?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/valida.js"></script>
</body>

</html>