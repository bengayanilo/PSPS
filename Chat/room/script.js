var $_GET = {};
if(document.location.toString().indexOf('?') !== -1) {
	var query = document.location
					.toString()
					// get the query string
					.replace(/^.*?\?/, '')
					// and remove any existing hash string (thanks, @vrijdenker)
					.replace(/#.*$/, '')
					.split('&');

	for(var i=0, l=query.length; i<l; i++) {
	   var aux = decodeURIComponent(query[i]).split('=');
	   $_GET[aux[0]] = aux[1];
	}
}

const log_div = document.getElementById('log');

function scrollToBottom() {
	log_div.scrollTop = log_div.scrollHeight;
  }

$(document).ready(function(){
	if($('#log-outer').scrollTop >= $('#log').css('height')){
		$('#new-message-container').addClass('hidden-notice');
	}
	$('#log-outer').stop().animate({
		//   scrollTop: $(hash).offset().top
		  scrollTop:$('#log').css('height')
		}, 700, function(){
	 
		  // Add hash (#) to URL when done scrolling (default click behavior)
		  // window.location.hash = hash;
		});

	log();

	$('#input').submit(function(e){
		e.preventDefault();
		if($('#message').val().length!=0){
			$.ajax({
				type: "POST",
				url: 'chat.php',
				data: $(this).serialize()+"&chat_id="+$_GET['chat_id'],
				success: function(data)
				{
					if(data != "query success"){
						console.log("insert failed")
					}
					else{
						$('#message').val('');
						log()
					}
				}
			});
		}
		
	});

	setInterval(log, 1000);
});

function log(){
		$.ajax({
			type: "POST",
			url: 'log.php',
			// data: "chat_id="+$_GET['chat_id'],
			data: "chat_id="+$_GET['chat_id'],
			data2: "chat_id="+$_GET['$user_id'],
			dataType: "JSON",
			success: function(data, data2)
			{
				var output = '';
				for(var i in data){
					output +="<span class='sender'>"+data[i].firstname+' '+data[i].surname+"</span>:<br><div class='text-message-container'><span class='text-message'>"+data[i].message+"</span></div>";	
				}
				$('#log').html(output);

				var lastHeight = $("#log").css('height');
				function checkForChanges()
				{
    				if ($("#log").css('height') != lastHeight)
    				{
						if($('#log-outer').scrollTop() < $('#log').attr('height'))
						{
							alert('scrolled up');
							// $('#new-message-container').removeClass('hidden-notice');
						}
						else
						{
							$('#log-outer').stop().animate({
								scrollTop:$('#log').css('height')
								}, 100, function(){
							});
							// $('#new-message-container').removeClass('hidden-notice');
							lastHeight = $('#log').css('height'); 
						}
    				}
					setTimeout(checkForChanges, 1);
				}

				// if( $('#log-outer').scrollTop() < $('#log').css('height') )
				// {
				// 	newMessageAlert();
				// }
				// else
				// {
					checkForChanges();
				// }
			}
		});
	}