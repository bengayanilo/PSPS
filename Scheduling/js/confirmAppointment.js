$(document).ready(function(){
	var confirmappointmentdontclose,confirmappointmentdontclose1,confirmappointmentmouseclicked;
	var confirmappointmentmousemoved = true;
	var confirmappointmentclickedinside = false;
	$('.confirm-appointment-modal-background').mousedown(function(){
		if(confirmappointmentmousemoved == true && confirmappointmentclickedinside == true)
		{
			confirmappointmentmouseclicked = false;
			confirmappointmentdontclose = true;
			confirmappointmentdontclose1 = true;
		}
		else if(confirmappointmentclickedinside != true)
		{
			confirmappointmentmouseclicked = true;
			confirmappointmentdontclose = false;
			confirmappointmentdontclose1 = false;
		}
		// alert('outside');
	});

	$("body").mousemove(function(){
		confirmappointmentmousemoved = true;
	});

	$('.confirm-appointment-modal-background').mouseup(function(){
		if(confirmappointmentclickedinside != true && confirmappointmentmouseclicked == true && confirmappointmentdontclose != true && confirmappointmentdontclose1 != true)
		{
			// $(this).addClass('modal-hidden');
			$('.appointments').fadeOut();
			$('.appointments-container').fadeOut();
			$(this).fadeOut();
			$(this).removeClass("blurred");
		}
		confirmappointmentclickedinside = false;
	});

	$('.appointments').mousedown(function(){
		confirmappointmentdontclose = true;
		confirmappointmentclickedinside = true;
	});

	$('.appointments').mouseup(function(){
		confirmappointmentdontclose = true;
	});

});