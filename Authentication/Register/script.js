$(document).ready(function() {

	$('#form').submit(function(e) {
	    e.preventDefault();
	    $.ajax({
	       type: "POST",
	       url: '../../Authentication/Register/html/_register.php',
	       data: $(this).serialize(),
	       success: function(data)
	       {
	       	if (data == 'Registered') {
	       		alert('Your account has been made, please verify it by clicking the activation link that has been send to your email.');
	       		window.location.replace("../../index.php");
	       		DayPilot.Modal.close(data);
	       	}
	       }
	   });
	});
});
