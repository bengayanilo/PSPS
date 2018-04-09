$(document).ready(function(){
	$('#input').submit(function(e){
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: 'chat.php',
			data: $(this).serialize(),
			success: function(data)
			{
				alert(data);
			}
		});
	});
});