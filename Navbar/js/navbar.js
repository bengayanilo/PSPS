$(document).ready(function(){
if($(window).width() >= 1024){
    var navBarHeight = $(".navbar").outerHeight();
    var scrolledTop = $('.wrapper').scrollTop();

    $('.navbar-brand').hover(function() {
        $('a#company-logo').css('background-color', 'rgba(255, 255, 255, 0)');
    });
    // $('.is-hoverable').hover(function() {
    //     $('.is-hoverable').css('background-color', 'black');
    // }), function() {
    //     $('.is-hoverable').css('background-color', 'pink');
    // };
    // $('.navbar#account-menu').hover(function() {
    //     $('#account-menu').css('background-color', 'rgba(255, 255, 255, 0)');
    // });
    if($('.navbar').hasClass('scrolled'))
    {
        $('#company-logo').hover(function() {
            $('#navbarLogo').attr('src','../../Static/images/company_name.png');
        }, function() {
            $('#navbarLogo').attr('src','../../Static/images/company_name.png');
        });
    }
    
    $('.wrapper').on('scroll', function() {
        var navBarHeight = $(".navbar").outerHeight();
        var scrolledTop = $('.wrapper').scrollTop();
        if(scrolledTop > navBarHeight && !$(".navbar").data('animated'))
        {
            $('.navbar').removeClass('topOfPage');
            $('.navbar').removeClass('scrolledToTop');
            $('.navbar').addClass('scrolled');
            $('.navbarLinks').css('color', 'black');
            $('.navbar-item').hover(function() {
                $('.navbarLinks', this).css('color', 'black');
            }, function() {
                $('.navbarLinks', this).css('color', 'black');
            });
            $('.navbar').css('background-color','rgba(250, 250, 250, 0.95)');
            // $('.navbarLinks').css('color', 'black');
            $('#navbarLogo').attr('src', '../../Static/images/company_name.png');
            $('.navbar').data('animated', true);
            $('#user-name').css('color', 'black');

            $('.navbar-burger span').css('background-color', 'black');
            return false;
        }
        else if(scrolledTop <= 0)
        {
            $('.navbar').removeClass('scrolled');
            $('.navbar').addClass('scrolledToTop');
            $('.navbar').addClass('topOfPage');
            $('.navbarLinks').css('color', 'white');
            $('.navbar#account-menu').hover(function() {
                $('#user-name').css('color', 'black');
            });
            $('.navbar-item').hover(function() {
                $('.navbarLinks', this).css('color', 'black');
            }, function() {
                $('.navbarLinks', this).css('color', 'white');
            });
            $('.navbar-brand').hover(function() {
                $('a#company-logo').css('background-color', 'rgba(255, 255, 255, 0)');
            });
            $('.navbar#account-menu').hover(function() {
                $('#user-name').css('color', 'black');
            });
            $('.navbar').css('background-color','rgba(255, 255, 255, 0)');
            // $('.navbarLinks').css('color', 'white');
            $('#navbarLogo').attr('src', '../../Static/images/company_name_white.png');
            $('.navbar').removeData('animated');
            $('#user-name').css('color', 'white');

            $('.navbar-burger span').css('background-color', 'white');
            return false;

        }
    });
}

else if($(window).width() < 800){
    $('.navbar-link').css('background-color', 'rgba(0, 0, 0, 0)');
    var navBarHeight = $(".navbar").outerHeight();
    var scrolledTop = $('.wrapper').scrollTop();

    $('.navbar-brand').hover(function() {
        $('a#company-logo').css('background-color', 'rgba(255, 255, 255, 0)');
    });
    // $('.is-hoverable').hover(function() {
    //     $('.is-hoverable').css('background-color', 'black');
    // }), function() {
    //     $('.is-hoverable').css('background-color', 'pink');
    // };
    // $('.navbar#account-menu').hover(function() {
    //     $('#account-menu').css('background-color', 'rgba(255, 255, 255, 0)');
    // });
    if($('.navbar').hasClass('scrolled'))
    {
        $('#company-logo').hover(function() {
            $('#navbarLogo').attr('src','../../Static/images/company_name.png');
        }, function() {
            $('#navbarLogo').attr('src','../../Static/images/company_name.png');
        });
    }
    
    $('.wrapper').on('scroll', function() {
        var navBarHeight = $(".navbar").outerHeight();
        var scrolledTop = $('.wrapper').scrollTop();
        if(scrolledTop > navBarHeight && !$(".navbar").data('animated'))
        {
            $('#navMenubd-example').css('background-color', 'rgba(250, 250, 250, 0.95)');
            $('.navbar').removeClass('topOfPage');
            $('.navbar').removeClass('scrolledToTop');
            $('.navbar').addClass('scrolled');
            $('.navbarLinks').css('color', 'black');
            $('.navbar-item').hover(function() {
                $('.navbarLinks', this).css('color', 'black');
            }, function() {
                $('.navbarLinks', this).css('color', 'black');
            });
            $('.navbar').css('background-color','rgba(250, 250, 250, 0.95)');
            // $('.navbarLinks').css('color', 'black');
            $('#navbarLogo').attr('src', '../../Static/images/company_name.png');
            $('.navbar').data('animated', true);
            $('#user-name').css('color', 'black');

            $('.navbar-burger span').css('background-color', 'black');
            return false;
        }
        else if(scrolledTop <= 0)
        {
            $('#navMenubd-example').css('background-color', 'rgba(0, 0, 0, 0)');
            $('.navbar').removeClass('scrolled');
            $('.navbar').addClass('scrolledToTop');
            $('.navbar').addClass('topOfPage');
            $('.navbarLinks').css('color', 'white');
            $('.navbar#account-menu').hover(function() {
                $('#user-name').css('color', 'black');
            });
            $('.navbar-item').hover(function() {
                $('.navbarLinks', this).css('color', 'black');
            }, function() {
                $('.navbarLinks', this).css('color', 'white');
            });
            $('.navbar-brand').hover(function() {
                $('a#company-logo').css('background-color', 'rgba(255, 255, 255, 0)');
            });
            $('.navbar#account-menu').hover(function() {
                $('#user-name').css('color', 'black');
            });
            $('.navbar').css('background-color','rgba(255, 255, 255, 0)');
            // $('.navbarLinks').css('color', 'white');
            $('#navbarLogo').attr('src', '../../Static/images/company_name_white.png');
            $('.navbar').removeData('animated');
            $('#user-name').css('color', 'white');

            $('.navbar-burger span').css('background-color', 'white');
            return false;

        }
    });
}
});