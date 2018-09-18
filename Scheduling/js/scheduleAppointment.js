$(document).ready(function(){
	var appointmentdontclose,appointmentdontclose1,appointmentmouseclicked;
	var appointmentmousemoved = true;
	var appointmentclickedinside = false;
	$('.schedule-appointment-modal-background').mousedown(function(){
		if(appointmentmousemoved == true && appointmentclickedinside == true)
		{
			appointmentmouseclicked = false;
			appointmentdontclose = true;
			appointmentdontclose1 = true;
		}
		else if(appointmentclickedinside != true)
		{
			appointmentmouseclicked = true;
			appointmentdontclose = false;
			appointmentdontclose1 = false;
		}
		// alert('outside');
	});

	$("body").mousemove(function(){
		appointmentmousemoved = true;
	});

	$('.schedule-appointment-modal-background').mouseup(function(){
		if(appointmentclickedinside != true && appointmentmouseclicked == true && appointmentdontclose != true && appointmentdontclose1 != true)
		{
			// $(this).addClass('modal-hidden');
			$('.shifts-add').fadeOut();
			$('.shifts-add-container').fadeOut();
			$(this).fadeOut();
			$(this).removeClass("blurred");
		}
		appointmentclickedinside = false;
	});

	$('.schedule-appointment-modal').mousedown(function(){
		appointmentdontclose = true;
		appointmentclickedinside = true;
	});

	$('.schedule-appointment-modal').mouseup(function(){
		appointmentdontclose = true;
	});

});