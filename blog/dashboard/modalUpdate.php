<?php
include 'backend/config.php';
include 'backend/conexion.php'; 
?>
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="actualizarModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="actualizarModalTitle">Actualizar Noticia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <form class="form" id="frminsertentradas" onsubmit="return actualizarDatos()" method="POST">
                    <input type="text" id="id" name="id" hidden="">
                    <label for="encabezado" class="col-form-label colorl">Titulo de Noticía *</label>
                    <input class="form-control" type="text" placeholder="Titulo" autocomplete="off" id="titulou" name="titulou" maxlength="100">
                    <input class="form-control" type="hidden" placeholder="Titulo" autocomplete="off" id="idareau" name="idareau" value="<?php echo $idarea;?>">

                    <label for="encabezado" class="col-form-label colorl">Descripcion Corta *</label>
                    <textarea class="form-control" id="descripcion_cu" name="descripcion_cu" placeholder="Agregar Descripción" maxlength="350"></textarea>
                    <p>Limitado a 350 caracteres.</p>

                    <label for="encabezado" class="col-form-label colorl">Plabras Clave *</label>
                    <textarea class="form-control" id="keywordsu" name="keywordsu" placeholder="Keywords separadas por comas "></textarea>
                    
                    <label for="encabezado" class="col-form-label colorl">Tipo *</label>
                                        <select class="custom-select" id="idtipo" name="idtipo">
                                            <?php
                                                  $tipos=$pdo->prepare("SELECT * FROM tipo where estatus = 1");
                                                  $tipos->execute();
                                                  $listaTipos=$tipos->fetchALL(PDO::FETCH_ASSOC);
                                                ?>
                                            <option selected>Seleccione..</option>
                                            <?php foreach($listaTipos as $tipo){?>
                                            <option value="<?php echo $tipo['idtipo']; ?>">
                                                <?php echo $tipo['descripcion']; ?></option>
                                            <?php } ?>
                                        </select>


                    <label for="encabezado" class="col-form-label colorl">Categoria *</label>
                    <select class="custom-select" id="categoriau" name="categoriau">
                    <?php
                        $sentencia=$pdo->prepare("SELECT * FROM categorias where idarea = $idarea");
                        $sentencia->execute();
                        $listaCategorias=$sentencia->fetchALL(PDO::FETCH_ASSOC);
                    ?>
                        <option selected>Seleccione..</option>
                        <?php foreach($listaCategorias as $categoria){?>
                            <option value="<?php echo $categoria['categoria_nombre']; ?>"><?php echo $categoria['categoria_nombre']; ?></option>
                        <?php } ?>
                    </select>

                    <label for="encabezado" class="col-form-label colorl">Ciudad *</label>
                    <select class="custom-select" id="ciudadu" name="ciudadu">
                    <?php
                        $sentencia=$pdo->prepare("SELECT * FROM estados");
                        $sentencia->execute();
                        $listaCiudades=$sentencia->fetchALL(PDO::FETCH_ASSOC);
                    ?>
                        <option selected>Seleccione..</option>
                        <?php foreach($listaCiudades as $ciudades){?>
                            <option value="<?php echo $ciudades['descripcion']; ?>"><?php echo $ciudades['descripcion']; ?></option>
                        <?php } ?>
                    </select>

                    <label for="fija" class="col-form-label colorl">Noticia Fija *</label>
                    <select class="custom-select" id="n_fijau" name="n_fijau">
                        <option selected>Seleccione..</option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                    <p>Unicamente puede existir una noticia fija</p>
                    </div>
                </div>
                <input class="btn btn-primary" type="submit" value="Actualizar"> 
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>  
        <script>
        </script>