$(document).ready(function(){
    $(".appointments-sort").click(function(event)
    {
        if($(".button",this).hasClass(".is-selected"))
        {
            
        }
        else
        {
            $(this).closest(".appointments-sort-buttons").find(".is-selected").removeClass("is-dark");
            $(this).closest(".appointments-sort-buttons").find(".is-selected").removeClass("is-selected");
            $(".button",this).addClass("is-selected");
            $(".button",this).addClass("is-dark");
        }
    });
});