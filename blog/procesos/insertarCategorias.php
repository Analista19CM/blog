<?php
require_once "../crud/crud.php";

$categoria=array(
    'categoria_nombre' => $_POST['categoria_nombre'],
);

echo Crud::insertarCategorias($categoria);
?>