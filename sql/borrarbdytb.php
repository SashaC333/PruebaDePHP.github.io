<?php
if (isset($_POST['borrar'])) { ////BORRAR
    //variables
    $servername = "localhost";
    $username = "root";
    $pasword = "";
    $bdname = "Cabral";
    //coneccion
    $conn = new mysqli($servername, $username, $pasword);
    //Query SQL
    $sql = "DROP DATABASE $bdname";
    //ejecucion codigo para base
    if ($conn->query($sql) == TRUE) {
?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Base borrada exitosamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    } else {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            la base ya esta borrada.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php
    }
    //cierre de coneccion
    $conn->close();
}

?>