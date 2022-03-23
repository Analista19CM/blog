<?php
session_start();
if(empty($_SESSION))
{
header('Location: index.php');
}

$nombre = $_SESSION['n_completo'];
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
 </head>
 <body class="">
    <?php require_once 'menu.php';?>
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
                              <h4 class="card-title">Home</h4>
                              <p class="card-category">Actualización del sitio en tiempo real</p>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="card-body">
                                <div class="iframe-container d-none d-lg-block">
                                  <iframe src="http://tuasistente.net/DEMO/BLOG/index.php"> <!-- Modificar esta URL por la URL del sitio final -->
                                    <p>Tu navegador no es compatible con iframes.</p>
                                  </iframe>
                                </div>
                                <div class="col-md-12 d-none d-sm-block d-md-block d-lg-none d-block d-sm-none text-center ml-auto mr-auto">
                                  <h5>La vista del sitio en tiempo real solo es visible en modo escritorio, tu dispositivo no es complatible con iframes. Iframe no es complatible con dispositivos moviles.
                                  </h5>
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
 </body>
 
 </html>
 