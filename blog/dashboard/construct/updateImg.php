<?php
header("Content-Type: text/html;charset=utf-8");

require_once '../crud/conexion-c.php';

$nombreImg1=$_FILES['imagen3']['name'];
$rutaAlmacenamiento=$_FILES['imagen3']['tmp_name'];
$carpeta='../../blog/blog_imagenes/';
$rutaFinal=$carpeta.$nombreImg1;

move_uploaded_file($rutaAlmacenamiento, '../../blog_imagenes/'.$nombreImg1 );


$v1 = $_POST['id'];

try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE entradas SET imagen_fl = '$rutaFinal' WHERE id='$v1'";
    $conexion->exec($sql);
    echo"<script type='text/javascript'>
        alert('Imagen encabezado actualizado correctamente');
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
