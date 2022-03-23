<?php
include 'backend/config.php';
include 'backend/conexion.php'; 
?>
<html>
<?php require_once 'header.php'; ?>
<body class="sections-page section-white ">
<div class="up"><span class="icon icon-up-open"></span></div>
<?php require_once 'header-menu.php' ?>

<?php                    
    $sentencia2=$pdo->prepare("SELECT * FROM entradas WHERE id=".$_GET["entrada"]);
    $sentencia2->execute();
    $listaNoticias2=$sentencia2->fetchALL(PDO::FETCH_ASSOC);
?>

<?php foreach($listaNoticias2 as $noticiaD){?>
<div class="page-header" data-parallax="true" style="background-image: url('<?php echo $noticiaD['imagen_fl'];?>');">
    <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand titulo">
                        <!--<h1>BLOG</h1>-->
                    </div>
                </div>
            </div>
        </div>
</div>

<!-- Detalle Noticia -->
<div class="section section-basic">
    <div class="main main-raised">
        <div class="container">
            <br>
            <div class="row slide-form">
                <div class="col-md-12">
                    <a href="index.php">
                        <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i> Volver</button>
                        <br>
                    </a>
                        <br>
                        <span class="badge badge-info"><?php echo $noticiaD['categoria'];?></span>
                        <span class="badge badge-info"><?php echo $noticiaD['ciudad'];?></span>
                        <br>
                        <h3 class="tituloEntrada"><?php echo $noticiaD['titulo'];?></h3>
                        <a target="_blank" href="http://www.facebook.com/sharer.php?u=http://tuasistente.net/DEMO/BLOG/detalle-noticia.php?entrada=<?php echo $noticiaD['id'];?>&<?php echo $noticiaD['titulo'];?>"><img src="assets/img/share.png"/></a>
                    </div>
                    <div class="col-md-12">
                        <br>  
                        <img src="<?php echo $noticiaD['imagen_fd'];?>" width="100%"><br>
                        <p class="fecha">Públicado el: <?php echo $noticiaD['fecha'] ?></p>
                        <p class="contenido"><?php echo $noticiaD['long_desc'];?></div>
                        
                        <div class="col-md-12">
                            <img src="<?php echo $noticiaD['imagen_fi'];?>" width="100%;">
                            <div>
                            <br>
                            <p class="keys">Keywords: <?php echo $noticiaD['keywords'];?></p>
                            </div>
                        </div>
                    <div>
                </div>
            </div>
            <?php } ?>
            <br>    
        </div>
        <!-- End Entradas -->
        <br>
    </div>    
</div>
<br> 
    <div class="container-fluid">
        <?php
            require_once 'footer.php';
        ?>
    </div>                      
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/bootstrap-material-design.js"></script>
    <script src="./assets/js/material-kit.js?v=2.0.3"></script>
    <!-- Sweet Alert js -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>
</html>