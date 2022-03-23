<?php
require_once "../crud/crud.php";

$usuario=array(
    'n_completo' => $_POST['n_completo'],
    'usuario' => $_POST['usuario'],
    'clave' => $_POST['clave'],
    'area' => $_POST['area']
);

echo Crud::insertarUsuarios($usuario);
?>
