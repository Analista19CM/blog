<?php
require_once "../crud/crud.php";

$ciudades=array(
    'descripcion' => $_POST['descripcion'],
);

echo Crud::insertarEstados($ciudades);
?>