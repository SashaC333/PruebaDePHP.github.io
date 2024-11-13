<?php
if (isset($_POST['borrar'])) {///borrar registro
    //variable a tomar
    $fl = $_POST['fl'];
    //conexion
    include "sql/conexion.php";
    //CODIGO SQL
    $sql = "DELETE FROM Sasha WHERE folio='$fl'";
    if ($conn->query($sql) == TRUE) {
?>
        <div class="alert alert-success d-flex align-items-center " role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" height="50">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                Borrado exitosamente.
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
                ERROR AL BORRAR.
            </div>
        </div>
<?php
    }
    $conn->close();
}

?>