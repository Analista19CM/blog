<?php
header("Content-Type: text/html;charset=utf-8");

require_once '../crud/conexion-c.php';

$nombreImg3=$_FILES['imagen2']['name'];
$rutaAlmacenamiento3=$_FILES['imagen2']['tmp_name'];
$carpeta='../../blog/blog_imagenes/';
$rutaFinal3=$carpeta.$nombreImg3;
move_uploaded_file($rutaAlmacenamiento3, '../../blog_imagenes/'.$nombreImg3);

$v1 = $_POST['id'];

try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE entradas SET imagen_fi = '$rutaFinal3'  WHERE id='$v1'";
    $conexion->exec($sql);
    echo"<script type='text/javascript'>
        alert('Imagen footer actualizada correctamente');
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
