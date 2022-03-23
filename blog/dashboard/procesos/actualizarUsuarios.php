<?php

require_once "../crud/crud.php";

$usuario=array(
    'n_completo' => $_POST['n_completou'],
    'usuario' => $_POST['usuariou'],
    'clave' => $_POST['claveu'],
    'area' => $_POST['areau'],
    'id' => $_POST['id']
);



echo Crud::actualizarUsuarios($usuario);
?>