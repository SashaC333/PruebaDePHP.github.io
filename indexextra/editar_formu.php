<!--MODAL-->
<div class="modal fade bg-danger bg-opacity-25" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="modal-header bg-black text-light border-danger">
                <h1 class="modal-title fs-5" >Editor de registros.</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class=" row needs-validation justify-content-start align-items-center " action="" method="post" novalidate>


                    <label class="form-label text-danger">Folio:</label>
                        <input type="text" class="form-control border-warning bg-secondary text-light" name="fl" value="<?= $row['folio'] ?>" required>

                        <label class="form-label text-danger">Pelicula:</label>
                        <input type="text" class="form-control border-warning bg-secondary text-light" name="pelicula" value="<?= $row['pelicula'] ?>" required>

                        <label class="form-label text-danger">Estreno:</label>
                        <input type="text" class="form-control border-warning bg-secondary text-light" name="estreno" value="<?= $row['estreno'] ?>" required>

                        <label class="form-label text-danger">Precio:</label>
                        <input type="text" class="form-control border-warning bg-secondary text-light" name="precio" value="<?= $row['precio'] ?>" required>

                        <label class="form-label text-danger">Duracion:</label>
                        <input type="text" class="form-control border-warning bg-secondary text-light" name="duracion" value="<?= $row['duracion'] ?>" required>

                        <label class="form-label text-danger">Disponible:</label>
                        <input type="text" class="form-control border-warning bg-secondary text-light" name="disponible" value="<?= $row['disponible'] ?>" required>
                    
                </form>
            </div>
            <div class="modal-footer border-danger bg-black">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                <button class="btn btn-primary " name="editar" type="submit">Salvar cambios</button>
                <?php include "sql/editar.php" ?>
            </div>
        </div>
    </div>
</div>