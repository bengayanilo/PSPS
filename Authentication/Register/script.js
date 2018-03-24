$(document).ready(function() {
	  $('#form').submit(function(e) {
	    e.preventDefault();
	    $.ajax({
	       type: "POST",
	       url: 'register.php',
	       data: $(this).serialize(),
	       success: function(data)
	       {
	       	$('#text').html(data)
	       }
	   });
	 });
	});