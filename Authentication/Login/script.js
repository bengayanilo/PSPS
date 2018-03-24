$(document).ready(function() {
	  $('#loginform').submit(function(e) {
	    e.preventDefault();
	    $.ajax({
	       type: "POST",
	       url: 'login.php',
	       data: $(this).serialize(),
	       success: function(data)
	       {
	          if (data === 'Login') {
	            $('#text').html("successfully logged in")
	          }
	          else {
	            $('#text').html("log in failed")
	          }
	       }
	   });
	 });
	});