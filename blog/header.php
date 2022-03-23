<head>
    <title>BLOG - CIUDAD MADERAS</title>
     <meta charset="utf-8" />
    <meta name="description" content="Ciudad Maderas BLOG" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
 
    <meta property="og:url"                content="<?= "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" />
    <meta property="og:type"               content="Articulo" />
    <meta property="og:title"              content="<?= isset( $listaNoticias2[0]["titulo"] ) ? $listaNoticias2[0]["titulo"] : "Blog Ciudad Maderas" ?>" />
    <meta property="og:description"        content="<?= isset( $listaNoticias2[0]["keywords"] ) ? $listaNoticias2[0]["keywords"] : "Ciudad Maderas brinda a sus clientes la oportunidad de comprar un terreno habitacional o comercial con crédito propio, ofreciendo cómodas mensualidades que sin duda apoyarán a su economía sin descapitalizarse, convirtiéndose así en una gran inversión."?>" />
    <meta property="og:image"              content="<?= isset( $listaNoticias2[0]["imagen_fd"] ) ? "https://ciudadmaderas.com/".$listaNoticias2[0]["imagen_fd"] : "/assets/img/image_blog1.jpg"?>" />
    <meta property="og:image:secure_url"   content="<?= isset( $listaNoticias2[0]["imagen_fd"] ) ? "https://ciudadmaderas.com/".$listaNoticias2[0]["imagen_fd"] : "./assets/img/image_blog1.jpg"?>" />

    <!-- Fonts + iconos -->
    <link rel=stylesheet type="text/css" href="assets/css/fuentes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/material-kit.css?v=2.0.3">

    <!-- Bootstrap-->
    <link rel="stylesheet" href="./assets/css/material-kit.css?v=2.0.3">


    <!-- JS UP-->
    <link rel="stylesheet" href="./fuentes/fontello.css">
    <link rel="stylesheet" href="./fuentes/estilos.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="main.js"></script>
    <script src="https://kit.fontawesome.com/912bdc121f.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109318154-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-109318154-1');
    </script>
    <!-- ends Google Analytics -->
</head>
