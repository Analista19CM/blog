<div class="modal fade" id="insertarModalCategorias" tabindex="-1" role="dialog" aria-labelledby="insertarModalCategoriasLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="insertarModalCategoriasLabel">Registro de Categorias</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>  
        <div class="modal-body">
        <form class="form" id="insertCategorias" onsubmit="return insertarCategorias()" method="POST" autocomplete="off">
            <div class="form-group">
              <label for="nombre_c" class="col-form-label">Nombre de la categoría:</label>
              <input type="text" class="form-control" id="categoria_nombre" name="categoria_nombre" required>
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