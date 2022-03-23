<?php

require_once "../crud/crud.php";

$datos=array(
    'titulo' => $_POST['titulou'],
    'descripcion_c' => $_POST['descripcion_cu'],
    'keywords' => $_POST['keywordsu'],
    'categoria' => $_POST['categoriau'],
    'ciudad' => $_POST['ciudadu'],
    'n_fija' => $_POST['n_fijau'],
    'idarea' => $_POST['idareau'],
    'idtipo' => $_POST['idtipo'],
    'id' => $_POST['id']
    
);
echo json_encode(Crud::actualizarDatos($datos));
?>