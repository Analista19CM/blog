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

<div class="banner" data-parallax="true">
    <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand titulo">
                        <!--h1>BLOG</h1>-->
                    </div>
                </div>
            </div>
        </div>
</div>

<?php 
    $categoria = $_GET["CategoriaD"];
?>
<!-- Entradas -->
<div class="section section-basic">
    <div class="main main-raised">
        <div class="container">
            <br>
            <div class="row slide-form">
                <div class="col-md-12">
                <a href="index.php">
                    <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i> Volver</button><br>
                    <br>
                </a>
                    <span class="badge badge-info"><?php echo $categoria;?></span>
                </div>
            </div>
            <br>
            
            <?php
            $sentencia2=$pdo->prepare("SELECT * FROM entradas WHERE categoria='$categoria'");
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
                    <p class="cuerpoDetalle"> <?php echo $noticia['descripcion_c']; ?></p>
                    <p class="fecha">Públicado el: <?php echo $noticia['fecha'] ?></p>
                    <br>
                    <a href="detalle-noticia.php?entrada=<?php echo $noticia['id']?>&<?php echo $noticia['titulo']?>">
                    <button type="button" class="btn btn-primary btn-round btn-sm">Ver más..</button>
                    </a>
                </div>
            </div>
            <br>
            <?php } ?>
            <!-- End Lista Dinamica -->  
        </div>
        <!-- End Entradas -->
        <br>
        <hr>
        <!-- Paginacion -->
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
        <!-- End Paginacion -->
    <br>  
    </div>  
</div>
<br>


<!-- ************ Footer ************ -->    
    <div class="container-fluid">
        <?php require_once 'footer.php'; ?>
    </div>                    
  
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/bootstrap-material-design.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="./assets/js/plugins/bootstrap-selectpicker.js"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="./assets/js/material-kit.js?v=2.0.3"></script>
    <!-- Sweet Alert js -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </body>
</html>