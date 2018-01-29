$(document).ready(function(){
	
	$('#topage2').click(function(e){
		$('#reg-container').fadeOut('slow', function(e){
			$('#reg2').fadeIn('slow');
		});      
	});
	
	$('#topage3').click(function(e){
		$('input[type=radio]:checked').prop('checked', false);
		$('#div-patient, #div-psychologist, #div-intern, #div-review').hide();
		$('#reg2').fadeOut('slow', function(e){
			$('#reg3').fadeIn('slow');
		});      
	});
	
	$('#topage1').click(function(e){
		$('#reg2').fadeOut('slow', function(e){
			$('#reg-container').fadeIn('slow');
		});      
	});
	
	$('#backtopage2').click(function(e){
		$('#reg3').fadeOut('slow', function(e){
			$('#reg2').fadeIn('slow');
		});      
	});
	
	$('#patient').click(function(e){
		$('#div-psychologist, #div-intern, #div-review').hide(function(e){
			$('#div-patient').fadeIn('slow');
		});      
	});
	
	$('#psychologist').click(function(e){
		$('#div-patient, #div-intern, #div-review').hide(function(e){
			$('#div-psychologist').fadeIn('slow');
		});      
	});
	
	$('#intern').click(function(e){
		$('#div-patient, #div-psychologist, #div-review').hide(function(e){
			$('#div-intern').fadeIn('slow');
		});      
	});
	
	$('#review').click(function(e){
		$('#div-patient, #div-psychologist, #div-intern').hide(function(e){
			$('#div-review').fadeIn('slow');
		});      
	});

	$('#btn').click(function(e){    
		$('#fancy, #btn').fadeOut('slow', function(){
			$('#bank, #btn-bk').fadeIn('slow');
		});
	});

	$('#btn-bk').click(function(e){    
		$('#bank, #btn-bk').fadeOut('slow', function(){
			$('#fancy, #btn').fadeIn('slow');
		});
	});
	
});