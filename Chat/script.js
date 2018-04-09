$(document).ready(function(){
	$('#input').submit(function(e){
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: 'chat.php',
			data: $(this).serialize(),
			success: function(data)
			{
				if(data == "query success"){
					
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
					output +="<p>"+data[i].message+"</p>";	
				}
				$('#log').html(output);
			}
		});
	}, 100);
});