<?php
require_once "../crud/crud.php";

$usuario=array(
    'n_completo' => $_POST['n_completo'],
    'usuario' => $_POST['usuario'],
    'clave' => $_POST['clave'],
    'area' => $_POST['area'],
    'p_usuarios' => $_POST['p_usuarios'],
    'p_noticias' => $_POST['p_noticias'],
    'p_entradas' => $_POST['p_entradas']
);

echo Crud::insertarUsuarios($usuario);
?>
