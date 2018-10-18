$(document).ready(function(){
	$(".reports-sort").click(function(event)
	{
		
		if(this.id == 'sort-all'){

			$('#show').load('http://localhost/Web/Reports/html/_report.php');
		} else {
			$('#show').load('http://localhost/Web/Reports/html/patient/_patient.php');
		}

		if($(".button",this).hasClass(".is-selected"))
		{
			
		}
		else
		{
			$(this).closest(".reports-sort-buttons").find(".is-selected").removeClass("is-dark");
			$(this).closest(".reports-sort-buttons").find(".is-selected").removeClass("is-selected");
			$(".button",this).addClass("is-selected");
			$(".button",this).addClass("is-dark");
		}
	});
});