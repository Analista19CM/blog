<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
      BLOG - Administrador
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page">
<div class="page-header header-filter" style="background-image: url('./assets/img/background.png'); background-size: cover; background-position: top center;">
      <!-- Navbar -->
      <!-- End Navbar -->
      <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-5">
                <br>
                <br>
              <div class="card" style="top:150px;">
                <div class="card-header card-header-primary">
                <div align="center">
                    <img src="assets/img/LogoBlancoCM.svg" width="220px">
                </div>
                <h4 class="card-title text-center">-</h4>
                <p class="card-category text-center">Acceso | <b>Administrador Blog</b></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive table-upgrade">
                    <form method="POST" action="./construct/validarLogin.php" onsubmit="return validarLogin(this)">
                        <label for="usuario" class="col-form-label colorl">Usuario *</label>
                        <input class="form-control" type="text" placeholder="@" autocomplete="off" id="usuario" name="usuario" maxlength="20">
                        <label for="usuario" class="col-form-label colorl">Password *</label>
                        <input class="form-control" type="password" placeholder="........." autocomplete="off" id="password" name="password" maxlength="20">
                        <br>
                        <button class="btn btn-primary" type="submit" name="submit" id="login">Ingresar</button>  
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
     
  <!--   Core JS Files   -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
function validarLogin(){
    var usuario, password, expresion;
    usuario = document.getElementById("usuario").value;
    password = document.getElementById("password").value;
    expresion = /^[0-9a-zA-Z]+$/;

    if(usuario === "" || password === ""){
    swal("¡Campos Vacios!", "Verifica tus datos de acceso", "error");
    return false;
    }
    else if(!expresion.test(usuario)){
    swal("¡Formato de Usuario Incorrecto!", "Verifica tus datos de acceso", "error");
    return false;
    }
}
</script> 

  
</body>
</html>
