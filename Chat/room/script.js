$(document).ready(function(){
	$.ajax({
		type: "POST",
		url: 'setter.php',
		success: function(data)
		{
			console.log(data)
		}
	});

	$('#input').submit(function(e){
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: 'chat.php',
			data: $(this).serialize(),
			success: function(data)
			{
				if(data != "query success"){
					console.log("insert failed")
				}
			}
		});
	});

	setInterval(function(){
		$.ajax({
			type: "POST",
			url: 'log.php',
			dataType: "JSON",
			success: function(data)
			{
				var output = '';
				for(var i in data){
					output +=data[i].chat_user+":<br>"+data[i].message+"<br>";	
				}
				$('#log').html(output);
			}
		});
	}, 500);
});