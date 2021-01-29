
function agregardatos(nombre,apellidos,email,usuario,pass){

	cadena="nombre=" + nombre + 
			"&apellidos=" + apellidos +
			"&email=" + email +
			"&usuario=" + usuario+
			"&pass=" + pass;

	$.ajax({
		type:"POST",
		url:"modelo/agregarUsuario.php",
		data:cadena,
		success:function(r){
			if(r==1){
				//$('#tabla').load('componentes/tabla.php');
				 //$('#buscador').load('componentes/buscador.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

////////////////////NOTICIA//////////////////////////
function llenarModal_Noticia(datos){

	d=datos.split('||');
	$("#ID").val(d[0]);
	 $("#descripcion1").val(d[1]);
    
}
////////////////////NOTICIA//////////////////////////
function llenarModal_Seccion(datos){

	d=datos.split('||');
	$("#ID").val(d[0]);
	 $("#descripcion1").val(d[1]);
    
}
//////////////////////////////////////////////////////////
function llenarModal_actualizar(datos){

	d=datos.split('||');
	$("#ID").val(d[0]);
	$("#nombre").val(d[1]);
	$("#apellidos").val(d[2]);
    $("#email").val(d[5]);
    $("#usuario").val(d[3]);
    $("#pass").val(d[4]);
	
}

function actualizaDatos(){
    ID=$('#ID').val();
	nombre=$('#nombre').val();
	apellido=$('#apellidos').val();
	email=$('#email').val();
	usuario=$('#usuario').val();
    contraseña=$('#pass').val();
	cadena= "ID=" + ID +
			"&nombre=" + nombre + 
			"&apellido=" + apellido +
			"&email=" + email +
			"&usuario=" + usuario +
			"&contraseña=" + contraseña;
    //alertify.success(cadena);
	$.ajax({
		type:"POST",
		url:"actualizaDatos.php",
		data:cadena,
		success:function(r){
		
			if(r==1){
				//window.location.replace =("usuarios.php");

				alertify.success("Actualizado con exito :)");

			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}
/////////////////////////////////ACTUALIZAR NOTICI/////////////////
function actualizaNoticia(){
    ID=$('#ID').val();
	descripcion1=$('#descripcion1').val();
	cadena= "ID=" + ID +
			"&descripcion1=" + descripcion1;
    //alertify.success(cadena);
	$.ajax({
		type:"POST",
		url:"modelo/actualizaNoticia.php",
		data:cadena,
		success:function(r){
		
			if(r==1){
				//window.location.replace =("usuarios.php");

				alertify.success("Actualizado con exito :)");

			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}
///////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////ACTUALIZAR ESTADO DE NOTICIA /////////////////
function actualizaEstadoNoticia(id,e){
	cadena= "id=" + id+
	         "&estado="+e;
    //alert(cadena);
	$.ajax({
		type:"POST",
		url:"modelo/actualizaEstadoNoticia.php",
		data:cadena,
		success:function(r){
		
			if(r==1){
				//window.location.replace =("usuarios.php");

				alertify.success("Actualizado con exito :)");

			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}
/////////////////////////////////ACTUALIZAR SECION /////////////////
function actualizaSeccion(){
    ID=$('#ID').val();
	descripcion1=$('#descripcion1').val();
	cadena= "ID=" + ID +
			"&descripcion1=" + descripcion1;
    //alertify.success(cadena);
	$.ajax({
		type:"POST",
		url:"modelo/actualizarSeccion.php",
		data:cadena,
		success:function(r){
		
			if(r==1){
				//window.location.replace =("usuarios.php");

				alertify.success("Actualizado con exito :)");

			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}
/////////////////////////////////ACTUALIZAR ESTADO DE SECCION /////////////////
function actualizaEstadoSeccion(id,e){
	cadena= "id=" + id+
	         "&estado="+e;
    //alert(cadena);
	$.ajax({
		type:"POST",
		url:"modelo/actualizaEstadoSeccion.php",
		data:cadena,
		success:function(r){
		
			if(r==1){
				//window.location.replace =("usuarios.php");

				alertify.success("Actualizado con exito :)");

			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

//////////////////////// ELIMINAR NOTICIA ///////////////////////////////////
function preguntarSiNoN(idn){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarNoticia(idn) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarNoticia(idn){

	cadena="idn=" + idn;

		$.ajax({
			type:"POST",
			url:"modelo/eliminarNoticia.php",
			data:cadena,
			success:function(r){
				if(r==1){
					//$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}
////////////////////////////////////////////////////////////////////////////
function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"modelo/eliminarUsuario.php",
			data:cadena,
			success:function(r){
				if(r==1){
					//$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}

//////////////// ELIMINAR VINCULO //////////////////////////////
function preguntarSiNoVinculo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarVinculo(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarVinculo(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"eliminar_vinculo.php",
			data:cadena,
			success:function(r){
				if(r==1){
					//$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
					window.location.href="Vinculos.php";
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}

//////////////////////////// ELIMINAR SLIDER //////////////////////////////////
function preguntarSiNoSlider(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarSlider(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarSlider(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"modelo/eliminarSlider.php",
			data:cadena,
			success:function(r){
				if(r==1){
					//$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
					window.location.href="Slider.php";
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}