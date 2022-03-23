<?php
include 'backend/config.php';
include 'backend/conexion.php'; 

session_start();
if(empty($_SESSION))
{
header('Location: index.php');
}

$nombre = $_SESSION['n_completo'];

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
   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
   <!-- Fonts and icons -->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
   <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
   <script src="ckeditor/ckeditor.js"></script>
 </head>
 
 <body class="">
    <style>
    .colorl{
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
              <p class="navbar-brand" style="font-size: 12px; text-transform: uppercase; font-weight: 500;">Administrador Blog v1.0</p>
           </div>
           <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
             <span class="sr-only">Toggle navigation</span>
             <span class="navbar-toggler-icon icon-bar"></span>
             <span class="navbar-toggler-icon icon-bar"></span>
             <span class="navbar-toggler-icon icon-bar"></span>
           </button>
           <div class="collapse navbar-collapse justify-content-end">
             <ul class="navbar-nav">
               <li class="nav-item dropdown">
                 <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="material-icons">person</i> <?php echo $nombre;?> 
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
                              <h4 class="card-title">Actualizar</h4>
                              <p class="card-category">Contenido de Noticia</p>
                          </div>
                            <div class="card-body">
                                  <button class="btn btn-primary" data-toggle="modal" data-target="#actualizarImagenes"><i class="material-icons">photo</i> Editar Imagenes</button>
                              <br>
                              <div class="row">
                                <div class="col-md-12">
                                      <?php   
                                        $id = $_GET['id'];
                                        $sentencia=$pdo->prepare("SELECT * FROM entradas WHERE id='$id'");
                                        $sentencia->execute();
                                        $actualizar=$sentencia->fetchALL(PDO::FETCH_ASSOC);
                                      ?>
                                      <?php foreach($actualizar as $actualizarEntradas){?>
                                        <form class="form" action="./construct/update.php" method="POST" enctype="multipart/form-data">
                                          <input type="hidden" name="id" value="<?php echo $id?>" />
                                          <label for="encabezado" class="col-form-label colorl">Contenido *</label>
                                          <textarea class="ckeditor" name="long_desc" id="long_desc"><?php echo $actualizarEntradas['long_desc']; ?></textarea>
                                          <br>
                                          <button class="btn btn-primary" type="submit" name="submit">Actualizar</button>
                                        </form>
                                </div><br>
                              </div>
                                  <?php } ?>
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
        <?php require_once "actualizarImagenes.php"?> 
        <?php require_once 'footer.php'; ?>                                     
     </div>
   </div>
 </body>
 </html>
 