<?php
if (isset($_POST['editar'])) {
    //variable a tomar
    $fl = $_POST['fl'];
    $pelicula = $_POST['pelicula'];
    $estreno = $_POST['estreno'];
    $precio = $_POST['precio'];
    $duracion = $_POST['duracion'];
    $disponible = $_POST['disponible'];

    //conexion
    include "sql/conexion.php";
    //CODIGO SQL
    $sql = "UPDATE Sasha SET folio='$fl', pelicula='$pelicula', estreno='$estreno', precio='$precio', duracion='$duracion', disponible='$disponible'  WHERE folio='$fl' ";

    //if para comparar
    if ($conn->query($sql) == TRUE) {
?>
        <div class="alert alert-success d-flex align-items-center " role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" height="50">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                Editado exitosamente.
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
                ERROR AL EDITAR.
            </div>
        </div>
<?php
    }
    $conn->close();
}

?>