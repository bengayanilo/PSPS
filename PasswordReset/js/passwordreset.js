$(document).ready(function(){
    $('#resetpassform').submit(function(e){
    	e.preventDefault();
    	$.ajax({
	       type: "POST",
	       url: '../html/passwordreseter.php',
	       data: $(this).serialize(),
	       success: function(data)
	       {
	       		$('.confirm-notice').html(data);
	       }
	   	});
    });
});