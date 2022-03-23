<?php
include 'backend/config.php';
include 'backend/conexion.php';

if(!$_GET){
    header('Location:index.php?page=1');
}
?>
<html>

<?php require_once 'header.php'; ?>

<body class="sections-page section-white ">
<div class="up"><span class="icon icon-up-open"></span></div>
<?php require_once 'header-menu.php' ?>

<div class="banner" data-parallax="true" >
    <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand titulo">
                        <!-- Titulo-->
                    </div>
                </div>
            </div>
        </div>
</div>

<!-- Entradas -->
<div class="section section-basic">
    <div class="main main-raised">
        <div class="container">
            <br>
            <div class="row slide-form">
                <div class="col-md-12">
                    <p style="font-size: 14px; font-family: 'Gotham Medium';">CATEGORÍAS</p>
                <?php
                    $sentencia=$pdo->prepare("SELECT * FROM categorias");
                    $sentencia->execute();
                    $listaCategorias=$sentencia->fetchALL(PDO::FETCH_ASSOC);
                ?>
                    <?php foreach($listaCategorias as $categoria){?>
                    <a href="busqueda.php?CategoriaD=<?php echo $categoria['categoria_nombre'];?>">
                        <span class="badge badge-primary"><?php echo $categoria['categoria_nombre']; ?></span>
                    </a>
                <?php } ?>
                </div>
            </div>
            <br>


            <?php
            $sentencia3=$pdo->prepare("SELECT * FROM entradas WHERE n_fija='SI'");
            $sentencia3->execute();
            $NoticiasFijas=$sentencia3->fetch();
            ?>

            <!-- Noticia Fija -->
            <div class="card" style="background: #fbfbfb;">
                <div class="row slide-form">
                    <div class="col-md-6">
                    <a href="detalle-noticia.php?entrada=<?php echo $NoticiasFijas['id']?>&<?php echo $NoticiasFijas['titulo']?>">
                        <img src="<?php echo $NoticiasFijas['imagen_fd'];?>" width="100%">
                    </a>
                    </div>
                    <div class="col-md-6">
                        <i class="fas fa-star" style="float:right; color:gold;"></i>
                        <a href="detalle-noticia.php?entrada=<?php echo $NoticiasFijas['id']?>&<?php echo $NoticiasFijas['titulo']?>">
                            <h3 class="tituloEntrada container-fluid"><?php echo $NoticiasFijas['titulo']?></h3>
                        </a>
                        <p class="cuerpoDetalle container-fluid "> <?php echo $NoticiasFijas['descripcion_c']?> <span style="color:#fbfbfb;"> Gastón Jury Arce</span></p>
                        <p class="fecha container-fluid">Públicado el: <?php echo $NoticiasFijas['fecha']?></p>
                        <a  class="container-fluid" href="detalle-noticia.php?entrada=<?php echo $NoticiasFijas['id']?>&<?php echo $NoticiasFijas['titulo']?>">
                            <button type="button" class="btn btn-primary btn-round btn-sm">Ver más..</button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Noticia Fija -->

            <?php
            $sentencia=$pdo->prepare("SELECT * FROM entradas LIMIT 0,500");
            $sentencia->execute();
            $listaNoticias=$sentencia->fetchALL(PDO::FETCH_ASSOC);
            $entradas_pagina = 5; //Entradas
            $total_entradas_db = $sentencia->rowCount(); //Total en BD
            $paginas = $total_entradas_db/$entradas_pagina;
            $paginas = ceil($paginas);
            ?>

            <?php
            $iniciar = ($_GET['page']-1)*$entradas_pagina;
            $sentencia2=$pdo->prepare("SELECT * FROM entradas WHERE n_fija='NO' ORDER BY id DESC LIMIT :iniciar,:nentradas");
            $sentencia2->bindParam(':iniciar', $iniciar, PDO::PARAM_INT);
            $sentencia2->bindParam(':nentradas', $entradas_pagina, PDO::PARAM_INT);
            $sentencia2->execute();
            $listaNoticias2=$sentencia2->fetchALL(PDO::FETCH_ASSOC);
            ?>

            <?php foreach($listaNoticias2 as $noticia){?>
            <div class="row slide-form">
                <div class="col-md-6">
                    <a href="detalle-noticia.php?entrada=<?php echo $noticia['id']?>&<?php echo $noticia['titulo']?>">
                        <img src="<?php echo $noticia['imagen_fd'];?>" width="100%">
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="detalle-noticia.php?entrada=<?php echo $noticia['id']?>&<?php echo $noticia['titulo']?>">
                        <h3 class="tituloEntrada"><?php echo $noticia['titulo']; ?></h3>
                    </a>
                    <p class="cuerpoDetalle"> <?php echo $noticia['descripcion_c']; ?> <span style="color:white"> Gastón Jury Arce</span></p>
                    <p class="fecha">Públicado el: <?php echo $noticia['fecha'] ?></p>
                    <br>
                    <a href="detalle-noticia.php?entrada=<?php echo $noticia['id']?>&<?php echo $noticia['titulo']?>">
                        <button type="button" class="btn btn-primary btn-round btn-sm">Ver más..</button>
                    </a>
                </div>
            </div>
            <br>
            <?php } ?>
            <!-- End Productos Dinamicos -->
        </div>
        <!-- End Entradas -->
        <br>
        <hr>

        <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center text-center">
            <li class="page-item <?php echo $_GET['page']<=1 ?'disabled' : '' ?>">
                <a class="page-link" href="index.php?page=<?php echo $_GET['page']-1 ?>">Anterior</a></li>
            <?php for ($i=0;$i<$paginas;$i++): ?>
            <li class="page-item <?php echo $_GET['page'] ==$i+1 ?'active' : '' ?>">
                <a class="page-link" href="index.php?page=<?php echo $i+1; ?>"><?php echo $i+1; ?></a>
            </li> 
            <?php endfor ?>
            <li class="page-item <?php echo $_GET['page']>=$paginas ?'disabled' : '' ?>">
                <a class="page-link" href="index.php?page=<?php echo $_GET['page']+1 ?>">Siguiente</a></li>
        </ul>
        </nav>
    <br>
    </div>
</div>
<br>

    <div class="container-fluid">
        <?php require_once 'footer.php';?>
    </div>

    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/bootstrap-material-design.js"></script>
    <script src="./assets/js/plugins/bootstrap-selectpicker.js"></script>
    <script src="./assets/js/material-kit.js?v=2.0.3"></script>
    <!-- Sweet Alert js -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </body>
</html>
