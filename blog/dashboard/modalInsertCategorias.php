<?php
include 'backend/config.php';
include 'backend/conexion.php'; 
?>
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
              <input type="hidden" class="form-control" id="idarea" name="idarea" value="<?php echo $idarea;?>" required>
            </div>
            <!-- <div class="form-group">
              <label for="area" class="col-form-label">Área:</label>
             
              <select class="custom-select" id="area" name="area">
                            <?php
                              // $sentencia=$pdo->prepare("SELECT * FROM areas");
                              // $sentencia->execute();
                              // $listaAreas=$sentencia->fetchALL(PDO::FETCH_ASSOC);
                            ?>
                            <option selected>Seleccione..</option>
                            <?php foreach($listaAreas as $areas){?>
                            <option value="<?php echo $areas['idarea']; ?>"><?php echo $areas['nombre']; ?></option>
                            <?php } ?>
                        </select>
            </div> -->
            <input class="btn btn-primary" type="submit" value="Guardar">     
          </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>