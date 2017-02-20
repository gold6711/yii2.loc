(function($) {
    "use strict";

    $(window).on("load", function() {

        /***************** Loading Screen ******************/

        $('.loader').fadeOut('slow'); // End Loader
        $('body').css('overflow', 'auto');


        /***************** Waypoints ******************/

        $('.home-skills').waypoint(function() {
            $('.home-skills .skillbar').each(function(){
                $(this).find('.skillbar-bar').animate({
                    width:$(this).attr('data-percent')
                },1500);
            });
        }, { offset: '75%' }); // Skills

    });
    

    /***************** Flex Slider ******************/

    $('#reales-slider').flexslider({
        animation: "slide",
        prevText: "",
        nextText: "",
        itemWidth: 292,
        itemMargin: 0,
        move: 1
    }); // reales Slider

    $('.basic-slider, #single-slider, #sidebar-tweets, .portfolio-slider').flexslider({
        animation: "slide",
        controlNav: false,
        prevText: "",
        nextText: "",
        slideshow: false
    }); // Basic Slider

    $('#clients-slider').flexslider({
        animation: "slide",
        controlNav: false,
        prevText: "",
        nextText: "",
        slideshow: false
    }); // Clients Slider

    /***************** Animation ******************/

    $('.fadeInDown-animation').addClass('hide').viewportChecker({
        classToAdd: 'show animated fadeInDown',
        offset: 100
   });

    /***************** Mobile Navigation ******************/

    $('.main-navigation').find('ul:first').clone().appendTo('.mobile-container');

    $('.mobile-navigation').find('.mobile-btn').on("click", function(event) {
        $('body').addClass('mobile_nav-open');
        $('.mobile-navigation').find('.mobile-container').slideToggle();
        $(this).toggleClass('show-menu');
        event.preventDefault();
    });

    $('.mobile-navigation').find('.haschild').each(function() {
        var mobile_submenu = $(this).find('ul:first');
        $(this).hover(function() { 
            mobile_submenu.stop().css({overflow:'hidden', height:'auto', display:'none', paddingTop:0}).slideDown(500, function() {
                $(this).css({overflow:'visible', height:'auto'});
            }); 
        },function() {
            mobile_submenu.stop().slideUp(500, function() {   
                $(this).css({overflow:'hidden', display:'none'});
            });
        }); 
    });

    $('.mobile-navigation').find('.haschild').children('a').one('click',function() {
        return false;
    }).on("click", function() {
        return true;
    });

    /***************** Smooth Scrolling ******************/

    $('a[href*=#]:not([href=#])').on("click", function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({scrollTop: target.offset().top}, 750);
                return false;
            }
        }
    });

})(jQuery);