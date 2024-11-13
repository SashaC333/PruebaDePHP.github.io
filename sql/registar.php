<?php
if (isset($_POST['insertar'])) {
    //variable a tomar
    $fl = $_POST['fl'];
    $pelicula = $_POST['pelicula'];
    $estreno = $_POST['estreno'];
    $precio = $_POST['precio'];
    $duracion = $_POST['duracion'];
    $disponible = $_POST['disponible'];
    //conexion
    include "sql/conexion.php";
    //Query SQL
    $sql = "INSERT INTO Sasha (folio,pelicula,estreno,duracion,precio,disponible) VALUES('$fl','$pelicula','$estreno','$precio','$duracion','$disponible')";
    //ejecucion codigo para base
    if ($conn->query($sql) == TRUE) {
?>
        <div class="alert alert-success d-flex align-items-center " role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" height="50">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                Registrado exitosamente.
            </div>
        </div>
    <?php
    } else {
    ?>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" height="50">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <div>
                ERROR AL REGISTRAR.
            </div>
        </div>
<?php
    }
    $conn->close();
}

?>