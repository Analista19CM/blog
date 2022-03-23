<?php
header("Content-Type: text/html;charset=utf-8");

require_once '../crud/conexion-c.php';

$long_desc = $_POST['long_desc'];
$v1 = $_POST['id'];

try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE entradas SET long_desc = '$long_desc' WHERE id='$v1'";  
    $conexion->exec($sql);
    echo"<script type='text/javascript'>
        alert('Contenido actualizado correctamente');
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
