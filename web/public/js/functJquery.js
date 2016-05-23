$ (document).ready(function() {
	 // body...  
	 var aler = $('#controlcamp').click(validatelogin);

	
	
	
});
function validatelogin () {
    var u = $('#email');
	var p = $('#password');

	if(u.length===1 && u.val()===''){
		$('#username-error').html('Debe ingresar el correo.');
		document.getElementById('username-error').style.display='block';
	}else{
		$('#username-error').html('');
	}

	if(p.length===1 && p.val()===''){
		$('#password-error').html('Debe ingresar la contraseña.');
		document.getElementById('password-error').style.display='block';
	}else{
		$('#password-error').html('');
	}
};

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
