<?php
header("Content-Type: text/html;charset=utf-8");

require_once '../crud/conexion-c.php';

$nombreImg1=$_FILES['imagen1']['name'];
$rutaAlmacenamiento=$_FILES['imagen1']['tmp_name'];
$carpeta='../BLOG/blog_imagenes/';
$rutaFinal=$carpeta.$nombreImg1;
move_uploaded_file($rutaAlmacenamiento, $rutaFinal);

$nombreImg2=$_FILES['imagen2']['name'];
$rutaAlmacenamiento2=$_FILES['imagen2']['tmp_name'];
$carpeta='../BLOG/blog_imagenes/';
$rutaFinal2=$carpeta.$nombreImg2;
move_uploaded_file($rutaAlmacenamiento2, $rutaFinal2);

$nombreImg3=$_FILES['imagen3']['name'];
$rutaAlmacenamiento3=$_FILES['imagen3']['tmp_name'];
$carpeta='../BLOG/blog_imagenes/';
$rutaFinal3=$carpeta.$nombreImg3;
move_uploaded_file($rutaAlmacenamiento3, $rutaFinal3);

$v1 = $_POST['id'];

try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE entradas SET imagen_fd = '$rutaFinal', imagen_fi = '$rutaFinal2', imagen_fl = '$rutaFinal3'  WHERE id='$v1'";  
    $conexion->exec($sql);
    echo"<script type='text/javascript'>
        alert('Imagenes actualizadas correctamente');
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
