<div class="modal fade" id="actualizarMUsuarios" tabindex="-1" role="dialog" aria-labelledby="actualizarModalUsuariosLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="actualizarModalUsuariosLabel">Actualizar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>  
        <div class="modal-body">
        <form class="form" id="actualizarUsuarios" onsubmit="return actualizarUsuarios()" method="POST" autocomplete="off">
        <input type="text" id="id" name="id" hidden="">
            <div class="form-group">
              <label for="nombre_c" class="col-form-label">Nomre Completo:</label>
              <input type="text" class="form-control" id="n_completou" name="n_completou" required>
            </div>
            <div class="form-group">
                <label for="usuario" class="col-form-label">Usuario:</label>
                <input type="text" class="form-control" id="usuariou" name="usuariou" required>
            </div>
            <div class="form-group">
              <label for="clave" class="col-form-label">Password:</label>
              <input type="text" class="form-control" id="claveu" name="claveu" required>
            </div>
            <div class="form-group">
              <label for="area" class="col-form-label">Área:</label>
              <input type="text" class="form-control" id="areau" name="areau" required>
            </div>
            <div class="form-group">
            <label for="p_usuario" class="col-form-label colorl">Usuarios *</label>
                    <select class="custom-select" id="p_usuariosu" name="p_usuariosu" required>
                        <option selected>Seleccione..</option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
            </div>
            <div class="form-group">
            <label for="p_noticias" class="col-form-label colorl">Entradas *</label>
                    <select class="custom-select" id="p_noticiasu" name="p_noticiasu" required>
                        <option selected>Seleccione..</option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
            </div>
            <div class="form-group">
            <label for="p_entradas" class="col-form-label colorl">Noticias *</label>
                    <select class="custom-select" id="p_entradasu" name="p_entradasu" required>
                        <option selected>Seleccione..</option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
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