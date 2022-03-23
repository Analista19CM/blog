<?php
require_once "../crud/crud.php";
$id=$_POST['id'];

echo json_encode(Crud::obtenerCategorias($id));
?>