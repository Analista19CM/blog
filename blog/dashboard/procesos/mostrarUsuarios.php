<?php
require_once "../crud/crud.php";
$obj= new Crud();
$datos=$obj->mostrarUsuarios();

$tabla='<table class="table">
<thead class="text-primary">
    <tr class="font-weight-bold">
    <th>Nombre Completo</th>
    <th>Usuario</th>
    <th>Área</th>
    <th>Editar</th>
    <th>Borrar</th>
    </tr>
</thead>
<tbody>';

$datosTabla="";

foreach ($datos as $key => $value){
    $datosTabla=$datosTabla.'<tr>
    <td>'.$value['n_completo'].'</td>
    <td>'.$value['usuario'].'</td>
    <td>'.$value['nombre'].'</td>
    <td>
        <span class="btn btn-warning btn-sm" onclick="obtenerUsuarios('.$value['id'].')" data-toggle="modal" data-target="#actualizarMUsuarios">
            <i class="material-icons">create</i>
        </span>
        
    </td>
    <td>
        <span class="btn btn-danger btn-sm" onclick="eliminarUsuarios('.$value['id'].')">
            <i class="material-icons">delete</i>
        </span>
    </td>
</tr>';
}
echo $tabla.$datosTabla.'</tbody>
</table>'
?>