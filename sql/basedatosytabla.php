<?php
if (isset($_POST['crear'])) { ////CREAR BASE
    //variables
    $servername = "localhost";
    $username = "root";
    $pasword = "";
    $bdname = "Cabral";
    //coneccion
    $conn = new mysqli($servername, $username, $pasword);
    //Query SQL
    $sql = "CREATE DATABASE $bdname";
    //ejecucion codigo para base
    if ($conn->query($sql) == TRUE) {
?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Base creada exitosamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    } else {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            la base ya esta creada.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php
    }
    //cierre de coneccion
    $conn->close();
}
?>

<?php
if (isset($_POST['crear'])) { ////CREAR TABLA
    //coneccion
    include "sql/conexion.php";

    //Query SQL
    $sql = "CREATE TABLE Sasha(
    folio INT NOT NULL,
    pelicula VARCHAR(40)  NOT NULL,
    estreno DATE  NOT NULL,
    duracion INT  NOT NULL,
    precio INT  NOT NULL,
    disponible VARCHAR(2)  NOT NULL,
    PRIMARY KEY(folio)
);";
    //ejecucion codigo para tabla
    if ($conn->query($sql) == TRUE) {
?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Tabla creada exitosamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    } else {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Error al crear la tabla.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php
    }
    //cierre de coneccion
    $conn->close();
}
?>

<?php
if (isset($_POST['crear'])) { ////Registros
    //coneccion
    include "sql/conexion.php";

    //Query SQL
    $sql = "INSERT INTO Sasha (folio,pelicula,estreno,duracion,precio,disponible) VALUES
    (1 ,'karate kid','1984-06-22',2,100,'si'),
    (2,'karate kid 2','1986-06-20',2,150,'si'),
    (3,'karate kid 3','1989-07-30',2,100,'no'),
    (4,'Roky','1977-05-05',2,160,'no'),
    (5,'Roky 2','1979-12-20',2,200,'si'),
    (6,'Back to the Future','1985-07-03',2,150,'si'),
    (7,'Goonies','1985-06-07',2,100,'no'),
    (8,'Exploradores','1985-07-12',2,100,'no'); ";
    //ejecucion codigo para base
    if ($conn->query($sql) == TRUE) {
?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Registros insertados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    } else {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Error con los registros.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php
    }
    //cierre de coneccion
    $conn->close();
}
?>