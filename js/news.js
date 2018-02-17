$(document).ready(function(){
	
	
	//see more
	$('#moreArticle1').click(function(e){
		$('#mainArticle1').fadeIn('slow');
		});

	/*$("#moreArticle1").click(function(){
		$("#mainArticle1").show("slide", { direction: "right" }, 1000);
		});*/
	
	$('#moreArticle2').click(function(e){
		$('#mainArticle2').fadeIn('slow');
		});
	
	$('#moreArticle3').click(function(e){
		$('#mainArticle3').fadeIn('slow');
		});
	
	$('#moreArticle4').click(function(e){
		$('#mainArticle4').fadeIn('slow');
		});
	
	$('#moreArticle5').click(function(e){
		$('#mainArticle5').fadeIn('slow');
		});
		
		
	//see less	
	$('#lessArticle1').click(function(e){
		$('#mainArticle1').fadeOut('slow');
		});

	/*$('#lessArticle1').click(function(e){
		$('#mainArticle1').hide("slide", {direction: "left" }, 1000);
		});*/
		
	$('#lessArticle2').click(function(e){
		$('#mainArticle2').fadeOut('slow');
		});
		
	$('#lessArticle3').click(function(e){
		$('#mainArticle3').fadeOut('slow');
		});
		
	$('#lessArticle4').click(function(e){
		$('#mainArticle4').fadeOut('slow');
		});
		
	$('#lessArticle5').click(function(e){
		$('#mainArticle5').fadeOut('slow');
		});
});