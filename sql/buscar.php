<?php
if (isset($_POST['buscarn'])) {
    $peli = $_POST['peli']; ////buscar por nombre
    //ahorro de lineas(conexion)
    include "sql/conexion.php";
    //codigo para buscar
    $sql = "SELECT * FROM Sasha WHERE pelicula LIKE '%$peli%'";
    $result = $conn->query($sql);

    while ($row = mysqli_fetch_assoc($result)) {
?>
        <form class="col-11 row justify-content-start align-items-center bg-black bg-opacity-50 p-3 mb-3 border border-light rounded-3 border-2" action="" method="post">

            <div class="col-1 mb-2">
                <label class="form-label text-danger">Folio:</label>
                <input type="text" class="form-control border-danger "  value="<?= $row['folio'] ?>" readonly>
            </div>
            <div class="col-5 mb-2">
                <label class="form-label text-danger">Pelicula:</label>
                <input type="text" class="form-control border-danger "  value="<?= $row['pelicula'] ?>" readonly>
            </div>
            <div class="col-3 mb-2">
                <label class="form-label text-danger">Estreno:</label>
                <input type="text" class="form-control border-danger "  value="<?= $row['estreno'] ?>" readonly>
            </div>
            <div class="col-3 mb-2">
                <label class="form-label text-danger">Precio:</label>
                <input type="text" class="form-control border-danger "  value="<?= $row['precio'] ?>" readonly>
            </div>
            <div class="col-2 mb-2">
                <label class="form-label text-danger">Duracion:</label>
                <input type="text" class="form-control border-danger "  value="<?= $row['duracion'] ?>" readonly>
            </div>
            <div class="col-2 mb-2">
                <label class="form-label text-danger">Disponible:</label>
                <input type="text" class="form-control border-danger "  value="<?= $row['disponible'] ?>" readonly>
            </div>
            <div class="col-4 mb-2">
                <label class="form-label text-dark"> .</label>
                <button class="btn btn-danger w-100" name="borrar" type="submit">borrar</button>
            </div>
            <div class="col-4 mb-2">
                <label class="form-label text-dark"> .</label>
                <button class="btn btn-warning w-100" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Editar</button>

                <?php include "indexextra/editar_formu.php" ?>
            </div>
        </form>

<?php
    }
    $conn->close();
}
?>



<?php
if (isset($_POST['buscarfl'])) {
    $folio = $_POST['folio']; ////buscar por folio
    //ahorro de lineas(conexion)
    include "sql/conexion.php";
    //codigo para buscar
    $sql = "SELECT * FROM Sasha WHERE folio LIKE '%$folio%'";
    $result = $conn->query($sql);

    while ($row = mysqli_fetch_assoc($result)) {
?>
        <form class="col-11 row justify-content-start align-items-center bg-black bg-opacity-50 p-3 mb-3 border border-light rounded-3 border-2" action="" method="post">

            <div class="col-1 mb-2">
                <label class="form-label text-danger">Folio:</label>
                <input type="text" class="form-control border-danger "  value="<?= $row['folio'] ?>" readonly>
            </div>
            <div class="col-5 mb-2">
                <label class="form-label text-danger">Pelicula:</label>
                <input type="text" class="form-control border-danger "  value="<?= $row['pelicula'] ?>" readonly>
            </div>
            <div class="col-3 mb-2">
                <label class="form-label text-danger">Estreno:</label>
                <input type="text" class="form-control border-danger "  value="<?= $row['estreno'] ?>" readonly>
            </div>
            <div class="col-3 mb-2">
                <label class="form-label text-danger">Precio:</label>
                <input type="text" class="form-control border-danger "  value="<?= $row['precio'] ?>" readonly>
            </div>
            <div class="col-2 mb-2">
                <label class="form-label text-danger">Duracion:</label>
                <input type="text" class="form-control border-danger "  value="<?= $row['duracion'] ?>" readonly>
            </div>
            <div class="col-2 mb-2">
                <label class="form-label text-danger">Disponible:</label>
                <input type="text" class="form-control border-danger "  value="<?= $row['disponible'] ?>" readonly>
            </div>
            <div class="col-4 mb-2">
                <label class="form-label text-dark"> .</label>
                <button class="btn btn-danger w-100" name="borrar" type="submit">borrar</button>
            </div>
            <div class="col-4 mb-2">
                <label class="form-label text-dark"> .</label>
                <button class="btn btn-warning w-100" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Editar</button>

                <?php include "indexextra/editar_formu.php" ?>
            </div>
        </form>

<?php
    }
    $conn->close();
}
?>

<?php
if (isset($_POST['buscarf'])) {
    $fechai = $_POST['fechai']; ////buscar por fecha
    $fechaf = $_POST['fechaf']; ////buscar por fecha
    //ahorro de lineas(conexion)
    include "sql/conexion.php";
    //codigo para buscar
    $sql = "SELECT * FROM Sasha WHERE estreno >='$fechai' AND estreno <='$fechaf'";
    $result = $conn->query($sql);

    while ($row = mysqli_fetch_assoc($result)) {
?>
        <form class="col-11 row justify-content-start align-items-center bg-black bg-opacity-50 p-3 mb-3 border border-light rounded-3 border-2" action="" method="post">

            <div class="col-1 mb-2">
                <label class="form-label text-danger">Folio:</label>
                <input type="text" class="form-control border-danger "  value="<?= $row['folio'] ?>" readonly>
            </div>
            <div class="col-5 mb-2">
                <label class="form-label text-danger">Pelicula:</label>
                <input type="text" class="form-control border-danger "  value="<?= $row['pelicula'] ?>" readonly>
            </div>
            <div class="col-3 mb-2">
                <label class="form-label text-danger">Estreno:</label>
                <input type="text" class="form-control border-danger "  value="<?= $row['estreno'] ?>" readonly>
            </div>
            <div class="col-3 mb-2">
                <label class="form-label text-danger">Precio:</label>
                <input type="text" class="form-control border-danger " value="<?= $row['precio'] ?>" readonly>
            </div>
            <div class="col-2 mb-2">
                <label class="form-label text-danger">Duracion:</label>
                <input type="text" class="form-control border-danger "  value="<?= $row['duracion'] ?>" readonly>
            </div>
            <div class="col-2 mb-2">
                <label class="form-label text-danger">Disponible:</label>
                <input type="text" class="form-control border-danger "  value="<?= $row['disponible'] ?>" readonly>
            </div>
            <div class="col-4 mb-2">
                <label class="form-label text-dark"> .</label>
                <button class="btn btn-danger w-100" name="borrar" type="submit">borrar</button>
            </div>
            <div class="col-4 mb-2">
                <label class="form-label text-dark"> .</label>
                <button class="btn btn-warning w-100" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Editar</button>

                <?php include "indexextra/editar_formu.php" ?>
            </div>
        </form>

<?php
    }
    $conn->close();
}
?>