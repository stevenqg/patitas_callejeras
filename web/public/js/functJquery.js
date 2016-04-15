$ (document).ready(function() {
	 // body...  
	 var aler = $('#controlcamp').click(validatelogin);
	 var user = $('#controleuser').click(validateuser);
	  var vent = $('#ventemerg').click(nuevaventana);
	  var vent2 = $('#ventemerg2').click(nuevaventana2);
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
}
function validateuser () {
	
	var age = $('#age_user');
	var email = $('#email_user')

	
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

	if(email.length===1 && email.val()===''){
		$('#email-error').html('Debe ingresar un correo electronico.');
		document.getElementById('email-error').style.display='block';
	}else{
		$('#email-error').html('');
	}
}
function nuevaventana () {

	window.open(this.href, this.target,'width=760,height=700'); return false;
}
function nuevaventana2 () {

	window.open(this.href, this.target,'width=1160,height=650'); return false;
}