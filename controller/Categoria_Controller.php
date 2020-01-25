<?php

require '../model/Model_Categoria.php';

$obj = new CrudCategoria();
$datos = $obj->mostrarDatos();


$tabla = '<table>
		<thead>
			<tr class="font-weight-bold">
                                <td>ID</td>
		  	 	<td>Nombre Categoria</td>
		  	 	<td>Descripcion</td>
		   		<td>Fecha Creacion</td>
		  		<td>Editar</td>
		  	 	<td>Eliminar</td>
		   	</tr>
		</thead>
        <tbody>';

$datosTabla = "";

foreach ($datos as $key => $value) {
    $datosTabla = $datosTabla . '<tr>
			<td>' . $value['id'] . '</td>
			<td>' . $value['nombre_categoria'] . '</td>
                        <td>' . $value['descripcion_categoria'] . '</td>
			<td>' . $value['fecha_creacion'] . '</td>
			<td>
				<span class="btn btn-warning btn-sm" onclick="obtenerDatos(' . $value['id'] . ')" data-toggle="modal" data-target="#actualizarModal">
					<i class="fas fa-edit"></i>
				</span>
			</td>
			<td>
				<span class="btn btn-danger btn-sm" onclick="eliminarDatos(' . $value['id'] . ')">
					<li class="fas fa-trash-alt"></li>
				</span>
			</td>
		</tr>';
}
echo $tabla . $datosTabla . '</tbody></table>';
