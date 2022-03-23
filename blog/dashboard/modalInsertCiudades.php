<div class="modal fade" id="insertarModalEstados" tabindex="-1" role="dialog" aria-labelledby="insertarModalEstadosLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="insertarModalEstadosLabel">Registro de Ciudades</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>  
        <div class="modal-body">
        <form class="form" id="insertEstados" onsubmit="return insertarEstados()" method="POST" autocomplete="off">
            <div class="form-group">
              <label for="nombre_c" class="col-form-label">Nombre de la ciudad:</label>
              <input type="text" class="form-control" id="descripcion" name="descripcion" maxlength="20" required>
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