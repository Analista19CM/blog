<?php
require_once "../crud/crud.php";
$id=$_POST['id'];

echo Crud::eliminarEstados($id);
?>