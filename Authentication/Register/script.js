$(document).ready(function() {
	  
	  $('#form').submit(function(e) {
	    e.preventDefault();
	    $.ajax({
	       type: "POST",
	       url: '_register.php',
	       data: $(this).serialize(),
	       success: function(data)
	       {
	       	if (data == 'Registered') {
	       		alert('Registration Successful');
	       		window.location.replace("../../../index.php");
	       		DayPilot.Modal.close(data);
	       	}
	       	else{
	       		alert(data);
	       	}	       	
	       }
	   });
	 });
	});