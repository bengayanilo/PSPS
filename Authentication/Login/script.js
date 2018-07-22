$(document).ready(function(){
	$('#loginform').submit(function(e) {
	    e.preventDefault();
	    $.ajax({
	       type: "POST",
	       url: '../../Authentication/Login/login.php',
	       data: $(this).serialize(),
	       success: function(data)
	       {
	          if (data == 'Login') {
	            alert("successfully logged in")
	            window.location.replace("../../index.php");
	            DayPilot.Modal.close(data);
	          }
	          else if(data == 'already logged in'){
	          	alert("Already logged in");
	          	window.location.replace("../../index.php");
	          }
	          else {
	            $('#text').html("log in failed")
	          }
	       }
	   	});
	});


	var dontclose,dontclose1,mouseclicked;
	var mousemoved = true;
	var clickedinside = false;
	$('.login-modal-background').mousedown(function(){
		if(mousemoved == true && clickedinside == true)
		{
			mouseclicked = false;
			dontclose = true;
			dontclose1 = true;
		}
		else if(clickedinside != true)
		{
			mouseclicked = true;
			dontclose = false;
			dontclose1 = false;
		}
		// alert('outside');
	});

	$("body").mousemove(function(){
		mousemoved = true;
	});

	$('.login-modal-background').mouseup(function(){
		if(clickedinside != true && mouseclicked == true && dontclose != true && dontclose1 != true)
		{
			// $(this).addClass('modal-hidden');
			$('.login-modal').fadeOut();
			$('.login-modal-container').fadeOut();
			$('.register-modal').fadeOut();
			$('.register-modal-container').fadeOut();
			$(this).fadeOut();
		}
		clickedinside = false;
	});

	$('.login-modal').mousedown(function(){
		dontclose = true;
		clickedinside = true;
	});

	$('.login-modal').mouseup(function(){
		dontclose = true;
	});


	$('.go-to-register').click(function(){
		$('.login-modal').fadeOut();
		$('.login-modal-container').fadeOut();
		$('.register-modal-container').delay().fadeIn();
		$('.register-modal').delay(420).fadeIn(400);
		document.getElementById("reg_user").focus();
	});

	$('.register-modal').mousedown(function(){
		dontclose1 = true;
		clickedinside = true;
	});

	$('.register-modal').mouseup(function(){
		dontclose1 = true;
	});

});