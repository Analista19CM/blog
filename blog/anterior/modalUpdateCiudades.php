<div class="modal fade" id="actualizarMEstados" tabindex="-1" role="dialog" aria-labelledby="actualizarModalEstadosLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="actualizarModalEstadosLabel">Actualizar Ciudades</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>  
        <div class="modal-body">
        <form class="form" id="actualizarCiudades" onsubmit="return actualizarEstados()" method="POST" autocomplete="off">
        <input type="text" id="id" name="id" hidden="">
            <div class="form-group">
                <label for="nombre_c" class="col-form-label">Nombre de la ciudad:</label>
                <input type="text" class="form-control" id="descripcionu" name="descripcionu" maxlength="20" required>
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