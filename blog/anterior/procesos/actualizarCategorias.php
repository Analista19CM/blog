<?php

require_once "../crud/crud.php";

$categoria=array(
    'categoria_nombre' => $_POST['categoria_nombreu'],
    'id' => $_POST['id']
);

echo Crud::actualizarCategorias($categoria);
?>