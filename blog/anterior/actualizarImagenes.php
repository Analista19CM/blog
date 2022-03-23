<div class="modal fade bd-example-modal-lg" id="actualizarImagenes" tabindex="-1" role="dialog" aria-labelledby="actualizarImagenesLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="actualizarImagenesLabel">Actualizar Imagenes</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>  
        <div class="modal-body">
        <form class="form" action="/construct/updateImg.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <input type="hidden" name="id" value="<?php echo $id?>" />
            <div class="row">
                <div class="col-md-4">
                    <label for="encabezado" class="col-form-label colorl">Imagen Encabezado*</label><br>
                    <img src="assets/img/img_banner.png">
                    <input type="file" class="form-control-file" id="imagen3" name="imagen3" accept="image/*">
                    <p>Los formatos recomendados de carga son jpg, png. Las medidas recomendadas son 1200 x 400 px.</p>
                </div>
                <div class="col-md-4">
                    <label for="encabezado" class="col-form-label colorl">Imagen Header*</label><br>
                    <img src="assets/img/img_top.png">
                    <input type="file" class="form-control-file" id="imagen1" name="imagen1" accept="image/*">
                    <p>Los formatos recomendados de carga son jpg, png. Las medidas recomendadas son 1800 x 950 px.</p>
                </div>
                <div class="col-md-4">
                    <label for="encabezado" class="col-form-label colorl">Imagen Footer*</label><br>
                    <img src="assets/img/img_footer.png">
                    <input type="file" class="form-control-file" id="imagen2" name="imagen2" accept="image/*">
                    <p>Los formatos recomendados de carga son jpg, png. Las medidas recomendadas son 750 x 250 px.</p>
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="submit"> Guardar </button>
        </form>
            <!-- Imagenes Cargadas -->
            <div class="card">
                <div class="row container-fluid">
                    <div class="col-md-4">
                        <label for="encabezado" class="col-form-label colorl">Imagen Encabezado *</label>
                        <img src="<?php echo $actualizarEntradas['imagen_fl']; ?>" width="100%">
                    </div>
                    <div class="col-md-4">
                        <label for="encabezado" class="col-form-label colorl">Imagen Header *</label>
                        <img src="<?php echo $actualizarEntradas['imagen_fd']; ?>" width="100%">
                    </div>
                    <div class="col-md-4">
                        <label for="encabezado" class="col-form-label colorl">Imagen Footer *</label>
                        <img src="<?php echo $actualizarEntradas['imagen_fi']; ?>" width="100%">
                    </div>
                </div>
            </div>
            <!-- Imagenes Cargadas -->  
        </div>
      </div>
    </div>
  </div>