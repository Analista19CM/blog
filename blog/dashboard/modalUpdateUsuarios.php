<?php
include 'backend/config.php';
include 'backend/conexion.php'; 
?>
<div class="modal fade" id="actualizarMUsuarios" tabindex="-1" role="dialog"
    aria-labelledby="actualizarModalUsuariosLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="actualizarModalUsuariosLabel">Actualizar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" id="actualizarUsuarios" onsubmit="return actualizarUsuarios()" method="POST"
                    autocomplete="off">
                    <input type="text" id="id" name="id" hidden="">
                    <div class="form-group">
                        <label for="nombre_c" class="col-form-label">Nombre Completo:</label>
                        <input type="text" class="form-control" id="n_completou" name="n_completou" required>
                    </div>
                    <div class="form-group">
                        <label for="usuario" class="col-form-label">Usuario:</label>
                        <input type="text" class="form-control" id="usuariou" name="usuariou" maxlength="15" required>
                    </div>
                    <div class="form-group">
                        <label for="clave" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" id="claveu" name="claveu" maxlength="15" required><i
                            class="material-icons" onclick="ocultar()">visibility</i>
                    </div>
                    <div class="form-group">
                        <label for="area" class="col-form-label">Área:</label>
                        <!-- <select class="custom-select" >
                  <option>Selecciona una opción</option>
                </select> -->
                        <select class="custom-select" id="areau" name="areau">
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
                    <input class="btn btn-primary" type="submit" value="Actualizar">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<script>
function ocultar() {
    var x = document.getElementById("claveu");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>