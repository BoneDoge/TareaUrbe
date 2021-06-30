function validarNombres(e) { 
	tecla = (document.all) ? e.keyCode : e.which; 
	if (tecla==8) return true; 
	patron =/[A-Za-z\sáéíóúñÁÉÍÓÚÑ\']/; 
	te = String.fromCharCode(tecla); 
	return patron.test(te); 
}

function validarGenerico(e) { 
	tecla = (document.all) ? e.keyCode : e.which; 
	if (tecla==8) return true; 
	patron =/[A-Za-z\sáéíóúñÁÉÍÓÚÑ\d]/; 
	te = String.fromCharCode(tecla); 
	return patron.test(te); 
}  

function validarUsuario(e) { 
	tecla = (document.all) ? e.keyCode : e.which; 
	if (tecla==8) return true; 
	patron =/[A-Za-z\d]/; 
	te = String.fromCharCode(tecla); 
	return patron.test(te); 
} 

function validarNumeros(e) { 
	tecla = (document.all) ? e.keyCode : e.which; 
	if (tecla==8) return true; 
	patron = /\d/; 
	te = String.fromCharCode(tecla); 
	return patron.test(te); 
}

function validarCorreo(e) { 
	tecla = (document.all) ? e.keyCode : e.which; 
	if (tecla==8) return true; 
	patron = /[A-Za-z0-9@_.\-]/; 
	te = String.fromCharCode(tecla); 
	return patron.test(te); 
}