$ (document).ready(function() {
	 // body...  
	 var aler = $('#controlcamp').click(validatelogin);
	 var user = $('#controleuser').click(validateuser);
	 var vent = $('#ventemerg').click(nuevaventana);
	 var vent1 = $('#ventemerg1').click(nuevaventana1);
	 var vent2 = $('#ventemerg2').click(nuevaventana2);
	 var vent3 = $('#ventemerg3').click(nuevaventana2);
	 var jcenso =$('#boton').click(jornadacenso);
	
});
function validatelogin () {
	 var u = $('#username');
	var p = $('#password');

	if(u.length===1 && u.val()===''){
		$('#username-error').html('Debe ingresar un nombre de usuario.');
		document.getElementById('username-error').style.display='block';
	}else{
		$('#username-error').html('');
	}

	if(p.length===1 && p.val()===''){
		$('#password-error').html('Debe ingresar la contraseña de ususario.');
		document.getElementById('password-error').style.display='block';
	}else{
		$('#password-error').html('');
	}
};
function validateuser () {
	var name = $('#username');
	var lastn = $('#last_name');
	var age = $('#age_user');
	var id = $('#ident_car');
	var direction = $('#direction_user')
	var phone = $('#phone_user')
	var email = $('#email_user')

	if(name.length===1 && name.val()===''){
		$('#username-error').html('Debe ingresar su nombre.');
		document.getElementById('username-error').style.display='block';
	}else{
		$('#username-error').html('');
	}

	if(lastn.length===1 && lastn.val()===''){
		$('#last_name-error').html('Debe ingresar sus apellidos.');
		document.getElementById('last_name-error').style.display='block';
	}else{
		$('#last_name-error').html('');
	} 

	if(age.length===1 && age.val()===''){
		$('#age-error').html('Debe ingresar su edad.');
		document.getElementById('age-error').style.display='block';
	}			
	else if (age.val()<18) {
				$('#age-error').html('debe ser mayor de edad.');
		document.getElementById('age-error').style.display='block';
	}
	else{
		$('#age-error').html('');
	}

	if(id.length===1 && id.val()===''){
		$('#id-error').html('Debe ingresar el nume de identificación.');
		document.getElementById('id-error').style.display='block';
	}else{
		$('#id-error').html('');
	}

	if(direction.length===1 && direction.val()===''){
		$('#direction-error').html('Debe ingresar una direccion.');
		document.getElementById('direction-error').style.display='block';
	}else{
		$('#direction-error').html('');
	}
	if(phone.length===1 && phone.val()===''){
		$('#phone-error').html('Debe ingresar unnumero de telefono.');
		document.getElementById('phone-error').style.display='block';
	}else{
		$('#phone-error').html('');
	}
	if(email.length===1 && email.val()===''){
		$('#email-error').html('Debe ingresar un correo electronico.');
		document.getElementById('email-error').style.display='block';
	}else{
		$('#email-error').html('');
	}
};
function nuevaventana () {

	window.open(this.href, this.target,'width=760,height=700'); return false;
};
function nuevaventana1 () {

	window.open(this.href, this.target,'width=860,height=700'); return false;
};
function nuevaventana2 () {

	window.open(this.href, this.target,'width=820,height=700'); return false;
};
function jornadacenso () {
	 
	 $("#capa").load("jornadascenso.html",{valor1:'primer valor', valor2:'segundo valor'}, function(response, status, xhr) {
              if (status == "error") {
                var msg = "Error!, algo ha sucedido: ";
                $("#capa").html(msg + xhr.status + " " + xhr.statusText);
              }
            });
}
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
$(function (){
	$("#fecha1").datepicker({
			showButtonPanel: true,
			});
});