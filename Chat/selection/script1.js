$(document).ready(function(){
	$.ajax({
		type: "POST",
		url: 'list.php',
		dataType: "JSON",
		success: function(data)
		{
			var output = '';
			for(var i in data){
				var picture = (data[i].picture)?(data[i].picture):('Static/images/profile-placeholder.jpg')
				output +='<button class="select-convo" onclick="chat('+data[i].user_id+')">'+
						        '<div class="media">'+
						            '<div class="media-left">'+
										'<figure class="image is-128x128 user-pic-fig">'+
											'<span class="user-pic-span">'+
												'<img class="user-pic-img" src="http://localhost:8080/Web/'+picture+'">'+
											'</span>'+
										'</figure>'+
						            '</div>'+
						            '<div class="media-content">'+
						                '<div class="content">'+
						                    '<p>'+
						                        '<strong>'+data[i].firstname+' '+data[i].surname+'</strong> <small>'+data[i].user_email+'</small> <!--<small class="time_passed">31m</small>-->'+
						                        '<br>'+
						                        '<span class="chat_preview truncate"><span class="name_of_sender"></span>'+data[i].message+'</span>'+
						                    '</p>'+
						                '</div>'+
						            '</div>'+
						            '<div class="media-right">'+
						                '<small class="time_received">10:00PM</small>'+
						            '</div>'+
						        '</div>'+
							'</button>';	
			}
			$('#log').html(output);
			
		}
	});
});

function chat(target){
	$.ajax({
		type: "GET",
		url: 'setter.php',
		data: "target="+target,
		dataType: "JSON",
		success: function(data)
		{
			window.open('../room/index.php?chat_id='+data[0].chat_id,'windowNew','width=500, height=500');
		}
	});
}