<?php

require_once "../crud/crud.php";

$categoria=array(
    'descripcion' => $_POST['descripcionu'],
    'id' => $_POST['id']
);

echo Crud::actualizarEstados($categoria);
?>