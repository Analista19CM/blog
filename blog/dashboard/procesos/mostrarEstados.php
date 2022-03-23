<?php
require_once "../crud/crud.php";
$obj= new Crud();
$datos=$obj->mostrarEstados();

$tabla='<table class="table">
<thead class="text-primary">
    <tr class="font-weight-bold">
    <th>Nombre Ciudad</th>
    <th>Editar</th>
    <th>Borrar</th>
    </tr>
</thead>
<tbody>';

$datosTabla="";

foreach ($datos as $key => $value){
    $datosTabla=$datosTabla.'<tr>
    <td>'.$value['descripcion'].'</td>
    <td>
        <span class="btn btn-primary btn-sm" onclick="obtenerEstados('.$value['id'].')" data-toggle="modal" data-target="#actualizarMEstados">
            <i class="material-icons">edit</i>
        </span>
    </td>
    <td>
        <span class="btn btn-danger btn-sm" onclick="eliminarEstados('.$value['id'].')">
            <i class="material-icons">delete</i>
        </span>
    </td>
</tr>';
}
echo $tabla.$datosTabla.'</tbody>
</table>'
?>