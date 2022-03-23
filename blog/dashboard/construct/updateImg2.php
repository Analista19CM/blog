<?php
header("Content-Type: text/html;charset=utf-8");

require_once '../crud/conexion-c.php';

$nombreImg2=$_FILES['imagen1']['name'];
$rutaAlmacenamiento2=$_FILES['imagen1']['tmp_name'];
$carpeta='../../blog/blog_imagenes/';
$rutaFinal2=$carpeta.$nombreImg2;
move_uploaded_file($rutaAlmacenamiento2, '../../blog_imagenes/'.$nombreImg2);

$v1 = $_POST['id'];

try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE entradas SET imagen_fd = '$rutaFinal2' WHERE id='$v1'";
    $conexion->exec($sql);
    echo"<script type='text/javascript'>
        alert('Imagen header actualizada correctamente');
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
