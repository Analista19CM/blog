<?php
include 'backend/conexion.php'; 
?>
<div class="modal fade" id="insertarModalUsuarios" tabindex="-1" role="dialog"
    aria-labelledby="insertarModalUsuariosLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insertarModalUsuariosLabel">Registro de Usuarios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" id="insertusuarios" onsubmit="return insertarUsuarios()" method="POST"
                    autocomplete="off">
                    <div class="form-group">
                        <label for="nombre_c" class="col-form-label">Nombre Completo:</label>
                        <input type="text" class="form-control" id="n_completo" name="n_completo" required>
                    </div>
                    <div class="form-group">
                        <label for="usuario" class="col-form-label">Usuario:</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" maxlength="15" required>
                    </div>
                    <div class="form-group">
                        <label for="clave" class="col-form-label">Password:</label>
                        <input type="text" class="form-control" id="clave" name="clave" maxlength="15" required>
                    </div>
                    <div class="form-group">
                        <label for="area" class="col-form-label">Área:</label>
                        <!-- <input type="text" class="form-control" id="area" name="area" required> -->
                        <select class="custom-select" id="area" name="area">
                            <?php
                              $sentencia=$pdo->prepare("SELECT * FROM areas");
                              $sentencia->execute();
                              $listaAreas=$sentencia->fetchALL(PDO::FETCH_ASSOC);
                            ?>
                            <option selected>Seleccione..</option>
                            <?php foreach($listaAreas as $areas){?>
                            <option value="<?php echo $areas['idarea']; ?>"><?php echo $areas['nombre']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Guardar">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>