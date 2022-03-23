<?php
require_once "../crud/crud.php";
$obj= new Crud();
$datos=$obj->mostrarCategorias();

$tabla='<table class="table">
<thead class="text-primary">
    <tr class="font-weight-bold">
    <th>Categoría</th>
    <th>Editar</th>
    <th>Borrar</th>
    </tr>
</thead>
<tbody>';

$datosTabla="";

foreach ($datos as $key => $value){
    $datosTabla=$datosTabla.'<tr>
    <td>'.$value['categoria_nombre'].'</td>
    <td>
        <span class="btn btn-primary btn-sm" onclick="obtenerCategorias('.$value['id'].')" data-toggle="modal" data-target="#actualizarMCategorias">
            <i class="material-icons">edit</i>
        </span>
    </td>
    <td>
        <span class="btn btn-danger btn-sm" onclick="eliminarCategorias('.$value['id'].')">
            <i class="material-icons">delete</i>
        </span>
    </td>
</tr>';
}
echo $tabla.$datosTabla.'</tbody>
</table>'
?>