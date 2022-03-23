<?php

require_once "../crud/crud.php";

$usuario=array(
    'n_completo' => $_POST['n_completou'],
    'usuario' => $_POST['usuariou'],
    'clave' => $_POST['claveu'],
    'area' => $_POST['areau'],
    'p_usuarios' => $_POST['p_usuariosu'],
    'p_noticias' => $_POST['p_noticiasu'],
    'p_entradas' => $_POST['p_entradasu'],
    'id' => $_POST['id']
);

echo Crud::actualizarUsuarios($usuario);
?>