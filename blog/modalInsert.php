<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="NuevaEntrada" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="NuevaEntradaTitle">Nueva entrada</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                <form class="form" id="frminsert" onsubmit="return insertarDatos()" method="POST">
                    <label for="encabezado" class="col-form-label colorl">Titulo de Noticía *</label>
                    <input class="form-control" type="text" placeholder="Titulo" autocomplete="off" id="titulo" name="titulo" maxlength="100" >

                    <label for="encabezado" class="col-form-label colorl">Descripcion Corta *</label>
                    <textarea class="form-control" id="descripcion_c" name="descripcion_c" placeholder="Agregar Descripción" maxlength="350" ></textarea>
                    <p>Limitado a 350 caracteres.</p>

                    <label for="encabezado" class="col-form-label colorl">Plabras Clave *</label>
                    <textarea class="form-control" id="keywords" name="keywords" placeholder="Keywords separadas por comas" ></textarea>
                </div>

                <div class="col-md-6">
                    <label for="encabezado" class="col-form-label colorl">Categoria *</label>
                    <select class="custom-select" id="categoria" name="categoria" >
                        <option selected>Seleccione..</option>
                        <option value="Tecnología">Tecnología</option>
                        <option value="Infraestructura">Infraestructura</option>
                        <option value="Comida">Comida</option>
                        <option value="Comida">Cultura</option>
                        <option value="Deporte">Deporte</option>
                    </select>

                    <label for="encabezado" class="col-form-label colorl">Ciudad *</label>
                    <select class="custom-select" id="ciudad" name="ciudad">
                        <option selected>Seleccione..</option>
                        <option value="Querétaro">Querétaro</option>
                        <option value="León">León</option>
                        <option value="San Luis Potosí">San Luis Potosí</option>
                        <option value="CDMX">CDMX</option>
                        <option value="Cancún">Cancún</option>
                    </select>

                    <label for="fija" class="col-form-label colorl">Noticia Fija *</label>
                    <select class="custom-select" id="n_fija" name="n_fija">
                        <option selected>Seleccione..</option>
                        <option value="Si">SI</option>
                        <option value="No">NO</option>
                    </select>
                    <p>Unicamente puede existir una noticia fija</p>
                    </div>
                </div>
                                
                    <label for="encabezado" class="col-form-label colorl">Contenido *</label>
                    <textarea id="long_desc" name="long_desc"></textarea> <!-- CKEDITOR -->
                        <script>
                    // Replace the <textarea id="editor1"> with a CKEditor
                    // instance, using default configuration.
                            CKEDITOR.replace( 'long_desc' );
                        </script>

                    <br>
                    <div class="row">
                    <div class="col-md-6">
                            <label for="encabezado" class="col-form-label colorl">Imagen</label>
                            <input type="file" class="form-control-file" id="imagen_1" name="imagen_1" accept="image/*">
                            <p>Los formatos recomendados de carga son jpg, png. Las medidas recomendadas son 500 x 340 px.</p>
                        </div>
                        <div class="col-md-6">
                            <label for="encabezado" class="col-form-label colorl">Imagen</label>
                            <input type="file" class="form-control-file" id="imagen_2" name="imagen_2" accept="image/*">
                            <p>Los formatos recomendados de carga son jpg, png. Las medidas recomendadas son 500 x 340 px.</p>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" name="submit">Publicar</button>
                </form>
                <?php
                if(isset($_POST['long_desc'])){
                    $text = $_POST['long_desc'];

                    echo "$text";
                }
                ?>
                </div>
              </div>
            </div>
          </div>
        </div> 