<div class="modal fade" id="actualizarMCategorias" tabindex="-1" role="dialog" aria-labelledby="actualizarModaCategoriasLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="actualizarModaCategoriasLabel">Actualizar Categorias</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>  
        <div class="modal-body">
        <form class="form" id="actualizarCategorias" onsubmit="return actualizarCategorias()" method="POST" autocomplete="off">
        <input type="text" id="id" name="id" hidden="">
            <div class="form-group">
                <label for="nombre_c" class="col-form-label">Nombre de la categoría:</label>
                <input type="text" class="form-control" id="categoria_nombreu" name="categoria_nombreu" required>
                <input type="hidden" class="form-control" id="idarea" name="idarea" value="<?php echo $idarea;?>" required>
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