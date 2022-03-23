<?php

require_once "../crud/crud.php";

$categoria=array(
    'categoria_nombre' => $_POST['categoria_nombreu'],
    'idarea' => $_POST['idarea'],
    'id' => $_POST['id']
);

echo json_encode(Crud::actualizarCategorias($categoria));
?>