<?php
require_once "../crud/crud.php";

$categoria=array(
    'categoria_nombre' => $_POST['categoria_nombre'],
    'idarea' => $_POST['idarea'],
);

echo json_encode(Crud::insertarCategorias($categoria));
?>