$(document).ready(function(){
	$('#loginform').submit(function(e) {
	    e.preventDefault();
	    $.ajax({
	       type: "POST",
	       url: 'login.php',
	       data: $(this).serialize(),
	       success: function(data)
	       {
	          if (data === 'Login') {
	            alert("successfully logged in")
	            // window.location.href("../../index.php");
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
});