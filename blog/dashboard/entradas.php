<?php

include 'backend/config.php';
include 'backend/conexion.php';

session_start();
if(empty($_SESSION))
{
header('Location: index.php');
}

$nombre = $_SESSION['n_completo'];
$idarea = $_SESSION['idarea'];

date_default_timezone_set('UTC'); /* Definimos zona */
date_default_timezone_set("America/Mexico_City"); /* Zona Horaria */
$fecha_actual=date("d/m/Y"); /* Se define variable */
//echo $fecha_actual;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        BLOG - Administrador
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
    <script src="ckeditor/ckeditor.js"></script>
</head>

<body class="">
    <style>
    .colorl {
        color: #005caa;
    }
    </style>

    <?php
      require_once 'menu.php';
    ?>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <p class="navbar-brand" style="font-size: 12px; text-transform: uppercase; font-weight: 500;">
                        Administrador Blog v1.0</p>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">person</i> <?php echo $nombre;?>
                                <!-- Usuario desde BD -->
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="./construct/logout.php">Salir</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Entradas</h4>
                                <input type="hidden" name="idareaE" id="idareaE" value="<?php echo $idarea;?>">
                                <p class="card-category">Creación de Nuevas Noticias</p>
                            </div>
                            <div class="card-body">
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <form class="form" action="./construct/insert.php" method="POST"
                                            enctype="multipart/form-data" onsubmit="return validar(this)">
                                            <label for="encabezado" class="col-form-label colorl">Titulo de Noticía
                                                *</label>
                                            <input class="form-control" type="text" placeholder="Titulo"
                                                autocomplete="off" id="titulo" name="titulo" maxlength="100">
                                            <input class="form-control" type="hidden" placeholder="Titulo"
                                                autocomplete="off" id="idarea" name="idarea"
                                                value="<?php echo $idarea;?>" maxlength="100">

                                            <label for="encabezado" class="col-form-label colorl">Descripcion Corta
                                                *</label>
                                            <textarea class="form-control" id="descripcion_c" name="descripcion_c"
                                                placeholder="Agregar Descripción" maxlength="350"></textarea>
                                            <p>Limitado a 350 caracteres.</p>

                                            <label for="encabezado" class="col-form-label colorl">Plabras Clave
                                                *</label>
                                            <textarea class="form-control" id="keywords" name="keywords"
                                                placeholder="Keywords separadas por comas"></textarea>
                                    </div>

                                    <div class="col-md-6">
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
                                        <select class="custom-select" id="categoria" name="categoria">
                                            <?php
                                                  $sentencia=$pdo->prepare("SELECT * FROM categorias where idarea = $idarea");
                                                  $sentencia->execute();
                                                  $listaCategorias=$sentencia->fetchALL(PDO::FETCH_ASSOC);
                                                ?>
                                            <option selected>Seleccione..</option>
                                            <?php foreach($listaCategorias as $categoria){?>
                                            <option value="<?php echo $categoria['categoria_nombre']; ?>">
                                                <?php echo $categoria['categoria_nombre']; ?></option>
                                            <?php } ?>
                                        </select>


                                        <label for="encabezado" class="col-form-label colorl">Ciudad *</label>
                                        <select class="custom-select" id="ciudad" name="ciudad">
                                            <?php
                                                  $sentencia=$pdo->prepare("SELECT * FROM estados");
                                                  $sentencia->execute();
                                                  $listaCiudades=$sentencia->fetchALL(PDO::FETCH_ASSOC);
                                                ?>
                                            <option selected>Seleccione..</option>
                                            <?php foreach($listaCiudades as $ciudades){?>
                                            <option value="<?php echo $ciudades['descripcion']; ?>">
                                                <?php echo $ciudades['descripcion']; ?></option>
                                            <?php } ?>

                                        </select>

                                        <label for="fija" class="col-form-label colorl">Noticia Fija *</label>
                                        <select class="custom-select" id="n_fija" name="n_fija">
                                            <option selected>Seleccione..</option>
                                            <option value="SI">SI</option>
                                            <option value="NO">NO</option>
                                        </select>
                                        <p>Unicamente puede existir una noticia fija</p>
                                    </div>
                                </div>
                                <label for="encabezado" class="col-form-label colorl">Contenido *</label>
                                <textarea class="ckeditor" name="long_desc" id="long_desc"></textarea>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="encabezado" class="col-form-label colorl">Imagen
                                            Encabezado*</label><br>
                                        <img src="assets/img/img_banner.png">
                                        <input type="file" class="form-control-file" id="imagen3" name="imagen3"
                                            accept="image/*">
                                        <p>Los formatos recomendados de carga son jpg, png. Las medidas recomendadas son
                                            1200 x 400 px.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="encabezado" class="col-form-label colorl">Imagen Header*</label><br>
                                        <img src="assets/img/img_top.png">
                                        <input type="file" class="form-control-file" id="imagen1" name="imagen1"
                                            accept="image/*">
                                        <p>Los formatos recomendados de carga son jpg, png. Las medidas recomendadas son
                                            1800 x 950 px.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="encabezado" class="col-form-label colorl">Imagen Footer*</label><br>
                                        <img src="assets/img/img_footer.png">
                                        <input type="file" class="form-control-file" id="imagen2" name="imagen2"
                                            accept="image/*">
                                        <p>Los formatos recomendados de carga son jpg, png. Las medidas recomendadas son
                                            750 x 250 px.</p>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" name="submit">Publicar</button>
                                </form>
                            </div>
                            <!-- End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <?php require_once 'footer.php'; ?>
    </div>
    </div>

    <script>
    function validar() {
        var titulo, descripcion_c, keywords, categoria, ciudad, n_fija, long_desc, imagen1, imagen2;
        titulo = document.getElementById("titulo").value;
        descripcion_c = document.getElementById("descripcion_c").value;
        keywords = document.getElementById("keywords").value;
        categoria = document.getElementById("categoria").value;
        ciudad = document.getElementById("ciudad").value;
        n_fija = document.getElementById("n_fija").value;
        long_desc = document.getElementById("long_desc").value;
        imagen1 = document.getElementById("imagen1").value;
        imagen2 = document.getElementById("imagen2").value;

        if (titulo === "" || descripcion_c === "" || keywords === "" || categoria === "" || ciudad === "" || n_fija ===
            "" || long_desc === "" || imagen1 === "" || imagen2 === "") {
            swal("¡Campos Vacios!", "Todos los campos marcados con * son obligatorios", "error");
            return false;
        } else if (titulo.length >= 99) {
            swal("¡Verifica el titulo!", "limite de caracteres excedido (100 max.)", "warning");
            return false;
        } else if (descripcion_c.length >= 349) {
            swal("¡Verifica la descripción corta!", "limite de caracteres excedido (350 max).", "warning");
            return false;
        }
    }
    </script>

</body>

</html>