$(document).ready(function() {

	$('#password2').keyup(function() {

		var pass1 = $('#password').val();
		var pass2 = $('#password2').val();
       

		if ( pass1 == pass2 ) {
			$('#error2').text('¡Coinciden!').css("color","green")
            document.getElementById('registrar').disabled=false;
		} else {
			$('#error2').text('¡No Coinciden!').css("color","red")
            document.getElementById('registrar').disabled=true;
		}

	});

});