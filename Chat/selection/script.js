$(document).ready(function(){
	setInterval(function(){
		$.ajax({
			type: "POST",
			url: 'list.php',
			dataType: "JSON",
			success: function(data)
			{
				var output = '';
				for(var i in data){
					output +='<a href="../room/index.html" class="select_chat">'+
							        '<div class="media">'+
							            '<div class="media-left">'+
							                '<p class="image is-96x96">'+
							                    '<img src="https://bulma.io/images/placeholders/128x128.png">'+
							            	'</p>'+
							            '</div>'+
							            '<div class="media-content">'+
							                '<div class="content">'+
							                    '<p>'+
							                        '<strong>'+data[i].user_name+'</strong> <small>'+data[i].user_email+'</small> <!--<small class="time_passed">31m</small>-->'+
							                        '<br>'+
							                        '<span class="chat_preview truncate"><span class="name_of_sender">Person Name: </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</span>'+
							                    '</p>'+
							                '</div>'+
							            '</div>'+
							            '<div class="media-right">'+
							                '<small class="time_received">10:00PM</small>'+
							            '</div>'+
							        '</div>'+
							    '</a>';	
				}
				$('#log').html(output);
			}
		});
	}, 100);
});