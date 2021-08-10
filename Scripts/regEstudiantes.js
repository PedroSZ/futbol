function validar(){
	var txtCodigo = document.getElementById("codigo").value;
	var txtNombre = document.getElementById("nombre").value;
	var txtApellidos = document.getElementById("apellidos").value;
	
	var txtCarrera = document.getElementById("carrera").value;
	var txtGrado = document.getElementById("grado").value;
	var txtGrupo = document.getElementById("grupo").value;
	
	
	var txtPsw1 = document.getElementById("psw1").value;
	var txtPsw2 = document.getElementById("psw2").value;
	

	if (txtCodigo == null || txtCodigo.length == 0 ){ 
      	alert("Tiene que su CURP");
      	document.getElementById('codigo').focus();
      	return false; 
   	}
   	if (txtNombre == null || txtNombre.length == 0 ){ 
      	alert("Tiene que escribir el nombre");
      	document.getElementById('nombre').focus();
      	return false; 
   	}
   	if (txtApellidos == null || txtApellidos.length == 0 ){ 
      	alert("Tiene que escribir el o los apellidos");
      	document.getElementById('apellidos').focus();
      	return false; 
   	}
	
	
	
	if (txtCarrera == null || txtCarrera.length == 0 ){ 
      	alert("Tienes que escribir tu carrera");
      	document.getElementById('carrera').focus();
      	return false; 
   	}
	if (txtGrado == null || txtGrado.length == 0 ){ 
      	alert("Tienes que escribir tu grado");
      	document.getElementById('grado').focus();
      	return false; 
   	}
	if (txtGrupo == null || txtGrupo.length == 0 ){ 
      	alert("Tiene que escribir tu grupo");
      	document.getElementById('grupo').focus();
      	return false; 
   	}
	
	
	
	

   	if (txtPsw1 == null || txtPsw1.length == 0 ){ 
      	alert("Tiene que escribir una contraseña");
      	document.getElementById('psw1').focus();
      	return false; 
   	}
   	
   	if (txtPsw2 == null || txtPsw2.length == 0 ){ 
      	alert("Tiene que confirmar la contraseña");
      	document.getElementById('psw2').focus();
      	return false; 
   	}

   	if(txtPsw1 != txtPsw2){
   		alert("Las contraseñas no coinciden");
   		document.getElementById('psw1').focus();
      	return false;
   	}

   	
}

function limpiar() {
	document.getElementById("frm_regEstudiantes").reset();
}

function regresar(){
	location.href='index.php'
}