<div class="modal fade" id="insertarModalUsuarios" tabindex="-1" role="dialog" aria-labelledby="insertarModalUsuariosLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="insertarModalUsuariosLabel">Registro de Usuarios</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>  
        <div class="modal-body">
        <form class="form" id="insertusuarios" onsubmit="return insertarUsuarios()" method="POST" autocomplete="off">
            <div class="form-group">
              <label for="nombre_c" class="col-form-label">Nomre Completo:</label>
              <input type="text" class="form-control" id="n_completo" name="n_completo" required>
            </div>
            <div class="form-group">
                <label for="usuario" class="col-form-label">Usuario:</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>
            <div class="form-group">
              <label for="clave" class="col-form-label">Password:</label>
              <input type="text" class="form-control" id="clave" name="clave" required>
            </div>
            <div class="form-group">
              <label for="area" class="col-form-label">Área:</label>
              <input type="text" class="form-control" id="area" name="area" required>
            </div>
            <div class="form-group">
            <label for="p_usuario" class="col-form-label colorl">Usuarios *</label>
                    <select class="custom-select" id="p_usuarios" name="p_usuarios" required>
                        <option selected>Seleccione..</option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
            </div>
            <div class="form-group">
            <label for="p_noticias" class="col-form-label colorl">Entradas *</label>
                    <select class="custom-select" id="p_noticias" name="p_noticias" required>
                        <option selected>Seleccione..</option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
            </div>
            <div class="form-group">
            <label for="p_entradas" class="col-form-label colorl">Noticias *</label>
                    <select class="custom-select" id="p_entradas" name="p_entradas" required>
                        <option selected>Seleccione..</option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
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