//mostrar
function mostrar(id){
	$.ajax({
		type:"POST",
		data:"id=" + id,
		url:"procesos/mostrarDatos.php",
		success:function(r){
			$('#tablaDatos').html(r);
		}
	});
}

//mostrarUsuarios
function mostrarUsuarios(){
	$.ajax({
		type:"POST",
		url:"procesos/mostrarUsuarios.php",
		success:function(r){
			$('#tablaUsuarios').html(r);
		}
	});
}


function mostrarCategorias(id){
	$.ajax({
		type:"POST",
		data:"id=" + id,
		url:"procesos/mostrarCategorias.php",
		success:function(r){
			$('#tablaCategorias').html(r);
		}
	});
}


//mostrarEstados
function mostrarEstados(){
	$.ajax({
		type:"POST",
		url:"procesos/mostrarEstados.php",
		success:function(r){
			$('#tablaEstados').html(r);
		}
	});
}

//obtenerDatos
function obtenerDatos(id){
	$.ajax({
		type:"POST",
		data:"id=" + id,
		url:"procesos/obtenerDatos.php",
		success:function(r){
			r=jQuery.parseJSON(r);
			
			$('#id').val(r['id']);
			$('#titulou').val(r['titulo']);
			$('#descripcion_cu').val(r['descripcion_c']);
			$('#keywordsu').val(r['keywords']);
			$('#categoriau').val(r['categoria']);
			$('#ciudadu').val(r['ciudad']);
			$('#n_fijau').val(r['n_fija']);
			$('#idtipo option[value='+r['tipo']+']').attr("selected", "selected");
		}
	});

}

//obtenerUsuarios
function obtenerUsuarios(id){
	$.ajax({
		type:"POST",
		data:"id=" + id,
		url:"procesos/obtenerUsuarios.php",
		success:function(r){
			r=jQuery.parseJSON(r);
			
			$('#id').val(r['id']);
			$('#n_completou').val(r['n_completo']);
			$('#usuariou').val(r['usuario']);
			$('#claveu').val(r['clave']);
			$('#areau option[value='+r['idarea']+']').attr("selected", "selected");
			
		}
	});

}

//obtenerCategorias
function obtenerCategorias(id){
	$.ajax({
		type:"POST",
		data:"id=" + id,
		url:"procesos/obtenerCategorias.php",
		success:function(r){
			
			r=jQuery.parseJSON(r);
			$('#id').val(r['id']);
			$('#categoria_nombreu').val(r['categoria_nombre']);

		}
	});

}

//obtenerCategorias
function obtenerEstados(id){
	$.ajax({
		type:"POST",
		data:"id=" + id,
		url:"procesos/obtenerEstados.php",
		success:function(r){
			r=jQuery.parseJSON(r);
			
			$('#id').val(r['id']);
			$('#descripcionu').val(r['descripcion']);

		}
	});

}

//actualizarDatos
function actualizarDatos(){
	$.ajax({
		type:"POST",
		url:"procesos/actualizarDatos.php",
		data:$('#frminsertentradas').serialize(),
		success:function(r){
			r=jQuery.parseJSON(r);
			if(r.respuesta==true){
				mostrar(r.idarea);
				swal("Actualizado con exito", "El registro se actualizó correctamente","success");
			}else{
				swal("error", "No se actualizó, intenta mas tarde","error");
			}
		}
	});

	return false;
}

//actualizarUsuarios
function actualizarUsuarios(){
	$.ajax({
		type:"POST",
		url:"procesos/actualizarUsuarios.php",
		data:$('#actualizarUsuarios').serialize(),
		success:function(r){
			if(r==1){
				mostrarUsuarios();
				swal("Actualizado con exito", "El registro se actualizó correctamente","success");
			}else{
				swal("error", "No se actualizó, intenta mas tarde","error");
			}
		}
	});

	return false;
}

//actualizarCategorias
function actualizarCategorias(){
	$.ajax({
		type:"POST",
		url:"procesos/actualizarCategorias.php",
		data:$('#actualizarCategorias').serialize(),
		success:function(r){
			r=jQuery.parseJSON(r);
			if(r.respuesta==true){
				mostrarCategorias(r.idarea);
				swal("Actualizado con exito", "La categoría se actualizó correctamente","success");
			}else{
				swal("error", "No se actualizó, intenta mas tarde","error");
			}
		}
	});

	return false;
}

//actualizarEstados
function actualizarEstados(){
	$.ajax({
		type:"POST",
		url:"procesos/actualizarEstados.php",
		data:$('#actualizarCiudades').serialize(),
		success:function(r){
			if(r==1){
				mostrarEstados();
				swal("Actualizado con exito", "La ciudad se actualizó correctamente","success");
			}else{
				swal("error", "No se actualizó, intenta mas tarde","error");
			}
		}
	});

	return false;
}

//eliminarDatos
		function eliminarDatos(id){
			var idareaE = $('#idareaE').val();
			swal({
				title: "¿Estas seguro de eliminar la entrada?",
				text: "Una vez eliminado no podra recuperarse",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					$.ajax({
						type:"POST",
						url:"procesos/eliminarDatos.php",
						data:"id=" + id,
						success:function(r){
							
							if(r==1){
								mostrar(idareaE);
								swal("Eliminado", "Noticia eliminada exitosamente","success");
							}else{
								swal("error", "No se pudo eliminar","error");
							}
						}
					});
				} 
			});
		}

//EliminarUsuarios		
function eliminarUsuarios(id){
	swal({
		title: "¿Estas seguro de eliminar este usuario?",
		text: "Una vez eliminado no podra recuperarse",
		icon: "info",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				url:"procesos/eliminarUsuarios.php",
				data:"id=" + id,
				success:function(r){
					if(r==1){
						mostrarUsuarios();
						swal("Eliminado", "Usuario eliminado exitosamente","success");
					}else{
						swal("error", "No se pudo eliminar","error");
					}
				}
			});
		} 
	});
}

//eliminarCategorias
function eliminarCategorias(id){
	var idarea = $("#idareaH").val();
	swal({
		title: "¿Estas seguro de eliminar la categoría?",
		text: "Una vez eliminado no podra recuperarse",
		icon: "info",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				url:"procesos/eliminarCategorias.php",
				data:"id=" + id,
				success:function(r){
					if(r==1){
						mostrarCategorias(idarea);
						swal("Eliminado", "Categoría eliminada exitosamente","success");
					}else{
						swal("error", "No se pudo eliminar","error");
					}
				}
			});
		} 
	});
}

//eliminarCategorias
function eliminarEstados(id){
	swal({
		title: "¿Estas seguro de eliminar la ciudad?",
		text: "Una vez eliminado no podra recuperarse",
		icon: "info",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				url:"procesos/eliminarEstados.php",
				data:"id=" + id,
				success:function(r){
					if(r==1){
						mostrarEstados();
						swal("Eliminado", "Ciudad eliminada exitosamente","success");
					}else{
						swal("error", "No se pudo eliminar","error");
					}
				}
			});
		} 
	});
}

//insertarDatos
function insertarDatos(){
	var idareaE = $('#idareaE').val();
	$.ajax({
		type:"POST",
		url:"procesos/insertarDatos.php",
		data:$('#frminsert').serialize(),
		success:function(r){
			if(r==1){
				$('#frminsert')[0].reset();
				//window.location = 'noticias.php'
				mostrar(idareaE);
				swal("Exito al guardar","Nueva entrada creada con exito","success");
			}else{
				swal("Error al guardar","La noticia no pudo ser creada", "error");
			}
		}
	});
	return false;
}

//insertarUsuarios
function insertarUsuarios(){
	$.ajax({
		type:"POST",
		url:"procesos/insertarUsuarios.php",
		data:$('#insertusuarios').serialize(),
		success:function(r){
			if(r==1){
				$('#insertusuarios')[0].reset();//Limpiar formulario
				mostrarUsuarios();
				swal("Exito al guardar","Nuevo usuario creada con exito","success");
			}else{
				swal("Error al guardar","El usuario no pudo ser creado", "error");
			}
		}
	});
	return false;
}

//insertarCategorias
function insertarCategorias(){
	$.ajax({
		type:"POST",
		url:"procesos/insertarCategorias.php",
		data:$('#insertCategorias').serialize(),
		success:function(r){
			data = JSON.parse(r);
			if(data.respuesta == true){
				$('#insertCategorias')[0].reset();//Limpiar formulario
				mostrarCategorias(data.idarea);
				swal("Exito al guardar","Nueva categoría creada con exito","success");
			}else{
				swal("Error al guardar","La categoría no pudo ser creada", "error");
			}
		}
	});
	return false;
}

//insertarUsuarios
function insertarEstados(){
	$.ajax({
		type:"POST",
		url:"procesos/insertarEstados.php",
		data:$('#insertEstados').serialize(),
		success:function(r){
			if(r==1){
				$('#insertEstados')[0].reset();//Limpiar formulario
				mostrarEstados();
				swal("Exito al guardar","Nueva ciudad creada con exito","success");
			}else{
				swal("Error al guardar","La ciudad no pudo ser creada", "error");
			}
		}
	});
	return false;
}


