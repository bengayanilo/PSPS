$(document).ready(function(){
	
	$('#topage2').click(function(e){
		$('#reg-container').fadeOut('slow', function(e){
			$('#reg2').fadeIn('slow');
		});      
	});
    
    $('#submit').click(function(e){

        if ($("#patientradbtn").is(":checked")) {
            $('#intern_register_primary, #intern_register_secondary').hide();
            $('#patient_register_primary').show();
        }

        if ($("#intradbtn").is(":checked")) {
            $('#patient_register_primary, #patient_register_secondary').hide();
            $('#intern_register_primary').show();
        }
	});   

	$('#topatient2').click(function(e){
		$('#patient_register_primary').fadeOut('slow', function(e){
			$('#patient_register_secondary').fadeIn('slow');
		});      
	});
	
	$('#topatient1').click(function(e){
		$('#patient_register_secondary').fadeOut('slow', function(e){
			$('#patient_register_primary').fadeIn('slow');
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