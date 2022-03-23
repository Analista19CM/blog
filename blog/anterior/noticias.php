<?php

session_start();

if(empty($_SESSION))
{
header('Location: index.php');
}
$nombre = $_SESSION['n_completo'];
$p_noticias = $_SESSION['p_noticias'];
$idarea = $_SESSION['idarea'];
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
   <!-- Fonts and icons     -->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
   <!-- CSS Files -->
   <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
   <!-- CK-EDITOR -->
   <script src="ckeditor/ckeditor.js"></script>
 </head>

 <body class="">

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
                          <h4 class="card-title">Noticias</h4>
                          <p class="card-category">Listado de noticias publicadas</p>
                          <input type="hidden" name="idareaE" id="idareaE" value="<?php echo $idarea;?>">
                      </div>

                      <div class="card-body">
                          <a href="entradas.php">
                            <button class="btn btn-primary"><i class="material-icons">edit</i> Nueva Entrada</button>
                          </a>
                          <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive" id="tablaDatos">
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
      <?php require_once "modalUpdate.php"?> 
      <?php require_once "footer.php" ?>
     </div>
   </div>
   <script src="js/crud.js"></script>
   <script type="text/javascript">
      mostrar();
  </script>
 </body>
 
 </html>
 