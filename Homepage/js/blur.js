$(document).ready(function(){
    // if( $('.login-modal-background').css('display', 'none') )
    // {

    // }
    // else 

    if( $('.login-modal-background').hasClass('blurred') )
    {
        $('html').css({
            '-webkit-filter': 'blur(2px)',
            '-moz-filter': 'blur(2px)',
            '-o-filter': 'blur(2px)',
            '-ms-filter': 'blur(2px)',
            'filter': 'blur(2px)'
        })
    }
});