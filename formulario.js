
$(document).ready(function() { 

var inputFields = $("input:text, input:password, textarea");

inputFields.focus(function(){
$(this).css("box-shadow", "0 0 4px #666");
});

inputFields.blur(function() {
$(this).css("box-shadow", "none");
});




$("#nombre").blur(function() {
	var text = $(this).val();
	if (text.trim().length < 3) {
		$(this).css("box-shadow", "0 0 4px #811");
	} else {
		$(this).css("box-shadow", "0 0 4px #181");
	} 
});

$("#correo").blur(function() {
	var text = $(this).val();
	if (text.trim().length < 3) {
		$(this).css("box-shadow", "0 0 4px #811");
	}
	else
	{
		$(this).css("box-shadow", "0 0 4px #181");
	}
});


$("#edad").blur(function() {
	var text = $(this).val();
	if (text.trim().length < 3) {
		$(this).css("box-shadow", "0 0 4px #811");
	} else {
		$(this).css("box-shadow", "0 0 4px #181");
	} 
	});



$("#contrasena").blur(function() {
	var text = $(this).val();
	if (text.trim().length < 3) {
		$(this).css("box-shadow", "0 0 4px #811");
	}
	else
	{
		$(this).css("box-shadow", "0 0 4px #181");
	}
	});

$("#form").submit(function(event) {

var nombre = $("#nombre").val();
var correo = $("#correo").val();
var edad = $("#edad").val();
var password = $("#contrasena").val();



validateNombreField(nombre, event);
validateCorreoField(correo, event);
validateDireccionField(edad, event);
validatePasswordField(password, event);
});





function isValidNombre(nombre){
	return nombre.trim() != "";
}

function isValidCorreo(correo){
	return correo.trim() != "";
}



function isValidDireccion(edad){
	return edad.trim() != "";
}



function isValidPassword(password){
	return password.length >= 8;
}




function validateNombreField(nombre, event) {
 if (!isValidNombre(nombre)) {
 	$("#nombre-feedback").text("por favor introduzca Su nombre completo");
 	event.preventDefault();
 }	else {
$("#nombre-feedback").text("");
 }
}

function validateCorreoField(correo, event) {
	if (!isValidCorreo(correo)) {
		$("#correo-feedback").text("por favor introduzca un correo valido");
		event.preventDefault();
	}	else {
   $("#correo-feedback").text("");
	}
   
}



function validateDireccionField(edad, event) {
	if (!isValidDireccion(edad)) {
		$("#direccion-feedback").text("por favor introduzca su edad");
		event.preventDefault();
	}	else {
   $("#direccion-feedback").text("");
	}
}



function validatePasswordField(password, event) {
	if (!isValidPassword(password)) {
		$("#password-feedback").text("Minimo 8 caracteres ");
		event.preventDefault();
	}	else {
   $("#password-feedback").text("");
	}
   }



});