<?php
require_once '../crud/conexion-c.php';

header("Content-Type: text/html;charset=utf-8");
date_default_timezone_set('UTC'); /* Definimos zona */
date_default_timezone_set("America/Mexico_City"); /* Zona Horaria */
$fecha_actual=date("d/m/Y"); /* Se define variable */

$titulo = $_POST['titulo'];
$idarea = $_POST['idarea'];
$idtipo = $_POST['idtipo'];
$descripcion_c = $_POST['descripcion_c'];
$keywords = $_POST['keywords'];
$categoria = $_POST['categoria'];
$ciudad = $_POST['ciudad'];
$n_fija = $_POST['n_fija'];
$long_desc = $_POST['long_desc'];

$fecha_actual=date("d/m/Y");

$nombreImg1=$_FILES['imagen1']['name'];
$rutaAlmacenamiento=$_FILES['imagen1']['tmp_name'];
$carpeta='../../blog/blog_imagenes/';
$rutaFinal=$carpeta.$nombreImg1;
move_uploaded_file($rutaAlmacenamiento, $rutaFinal);


$nombreImg2=$_FILES['imagen2']['name'];
$rutaAlmacenamiento2=$_FILES['imagen2']['tmp_name'];
$carpeta='../../blog/blog_imagenes/';
$rutaFinal2=$carpeta.$nombreImg2;
move_uploaded_file($rutaAlmacenamiento2, $rutaFinal2);

$nombreImg3=$_FILES['imagen3']['name'];
$carpeta='../../blog/blog_imagenes/';
$rutaFinal3=$carpeta.$nombreImg3;
move_uploaded_file($rutaAlmacenamiento3, $rutaFinal3);

try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO entradas (titulo, descripcion_c, keywords, categoria, ciudad, n_fija, long_desc, imagen_fd, imagen_fi, imagen_fl, fecha, idarea, estatus, tipo)
    VALUES('".$titulo."','".$descripcion_c."','".$keywords."','".$categoria."','".$ciudad."','".$n_fija."','".$long_desc."','".$rutaFinal."','".$rutaFinal2."','".$rutaFinal3."','".$fecha_actual."','".$idarea."', 1 ,'".$idtipo."')";
    $conexion->exec($sql);
    echo"<script type='text/javascript'>
        alert('Noticia insertada correctamente');
        window.location='../noticias.php';
        </script>";
    }
catch(PDOException $e)
    {
        echo"<script type='text/javascript'>
        alert('Error, intentar mas tarde');
        window.location='../noticias.php';
        </script>";
    }
$conexion = null;
?>
