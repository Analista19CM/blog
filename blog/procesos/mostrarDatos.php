<?php
require_once "../crud/crud.php";

$obj= new Crud();
$datos=$obj->mostrarDatos();

$tabla='<table class="table">
<thead class="text-primary">
    <tr class="font-weight-bold">
    <th>Titulo</th>
    <th>Fecha</th>
    <th>Categoría</th>
    <th>Ciudad</th>
    <th>Noticia Fija</th>
    <th>Editar</th>
    <th>Contenido</th>
    <th>Borrar</th>
    </tr>
</thead>
<tbody>';

$datosTabla="";

foreach ($datos as $key => $value){
    $datosTabla=$datosTabla.'<tr>
    <td>'.$value['titulo'].'</td>
    <td>'.$value['fecha'].'</td>
    <td>'.$value['categoria'].'</td>
    <td>'.$value['ciudad'].'</td>
    <td>'.$value['n_fija'].'</td>
    <td>
        <span class="btn btn-primary btn-sm" onclick="obtenerDatos('.$value['id'].')" data-toggle="modal" data-target="#actualizarModal">
            <i class="material-icons">edit</i>
        </span>
    </td>
    <td>
        <a href="actualizar.php?id='.$value['id'].'">
            <span class="btn btn-warning btn-sm">
                <i class="material-icons">format_align_center</i>
            </span>
        </a>
    </td>
    <td>
        <span class="btn btn-danger btn-sm" onclick="eliminarDatos('.$value['id'].')">
            <i class="material-icons">delete</i>
        </span>
    </td>
</tr>';
}
echo $tabla.$datosTabla.'</tbody>
</table>'
?>