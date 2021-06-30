$(document).ready(function(){
	$('.button-collapse').sidenav();
	$('.parallax').parallax();
	$('.modal').modal();
	$('.collapsible').collapsible();
	$('select').formSelect();
	

	$('input:radio[name=atencion]').change(function (){
		switch($('input:radio[name=atencion]:checked').val()){
			case 'peticion':
			$('#requerimiento').html(`
			<textarea name="informacionRequerimiento" class="materialize-textarea validate" required id="informacionRequerimiento" cols="30" rows="10"></textarea>
									  <label for="informacionRequerimiento">Informacion de petición...</label>`);
			Materialize.updateTextFields();
			$('#nombreDenunciado').attr('disabled','disabled');
			$('#apellidoDenunciado').attr('disabled','disabled');
			$('#cedulaDenunciado').attr('disabled','disabled');
			Materialize.updateTextFields();
									  break;
			case 'queja':
			$('#requerimiento').html(`
			<textarea name="informacionRequerimiento" class="materialize-textarea validate" required id="informacionRequerimiento" cols="30" rows="10"></textarea>
									  <label for="informacionRequerimiento">Informacion de queja...</label>`);
									  Materialize.updateTextFields();
			$('#nombreDenunciado').attr('disabled','disabled');
			$('#apellidoDenunciado').attr('disabled','disabled');
			$('#cedulaDenunciado').attr('disabled','disabled');
			Materialize.updateTextFields();
									  break;
			case 'denuncia':
			$('#requerimiento').html(`
			<textarea name="informacionRequerimiento" required id="informacionRequerimiento" class="materialize-textarea validate"  cols="30" rows="10"></textarea>
			<label for="informacionRequerimiento">Informacion de denuncia...</label>`);
			Materialize.updateTextFields();
			
			$('#nombreDenunciado').removeAttr('disabled');
			

			$('#apellidoDenunciado').removeAttr('disabled');

			$('#cedulaDenunciado').removeAttr('disabled');
			Materialize.updateTextFields();
			break;
		}
	});

	
})