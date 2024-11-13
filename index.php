<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Proyecto_Inicio</title>
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
        <?php include "sql/basedatosytabla.php"; ?>
        <?php include "sql/borrarbdytb.php"; ?>
        
        <div class="card mb-3 bg-black text-light text-center border border-danger " style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4 bg-danger">
              <img src="img/video.png" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Bienvenido!</h5>
                <p class="card-text text-secondary">En la parte superior, se creara la base y tablas. Para poder registrar sus peliculas.</p>
                <div class=" container  justify-content-center">
                  <form class="row " method="post" action="">
                    <div class="col-6">
                      <button type="submit" class="btn btn-success  me-2 w-100" name="crear">Instalar</button>
                    </div>
                    <div class="col-6">
                      <button type="submit" class="btn btn-danger w-100" name="borrar">Desinstalar</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
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