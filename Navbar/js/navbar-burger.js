$(document).ready(function(){
    $(document).click(function() {
        $(".is-active").removeClass(".is-active");
        alert("me");
    });
    $("body").click(function(e) {
        e.stopPropagation(); // This is the preferred method.
        // return false;        // This should not be used unless you do not want
                             // any click events registering inside the div
    });
});