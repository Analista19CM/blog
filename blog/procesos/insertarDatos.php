<?php
require_once "../crud/crud.php";
//header("Content-Type: text/html;charset=utf-8");
date_default_timezone_set('UTC'); /* Definimos zona */
date_default_timezone_set("America/Mexico_City"); /* Zona Horaria */
$fecha_actual=date("d/m/Y"); /* Se define variable */

$datos=array(
    'titulo' => $_POST['titulo'],
    'descripcion_c' => $_POST['descripcion_c'],
    'keywords' => $_POST['keywords'],
    'categoria' => $_POST['categoria'],
    'ciudad' => $_POST['ciudad'],
    'n_fija' => $_POST['n_fija'],
    'long_desc' => $_POST['long_desc'],
    'imagen_1' => $_POST['imagen_1'],
    'imagen_2' => $_POST['imagen_2'],
    'fecha' => $fecha_actual
);

echo Crud::insertarDatos($datos);
?>