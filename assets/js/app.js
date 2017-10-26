/**
 * Created by pharaoh on 12/08/2017.
 */

'use strict';
$(window).on('load',function() {
    $('.page-loader').delay(350).fadeOut('slow');
});


$(document).ready(function() {
    'use strict';
    /* ==============================================
     STICKY HEADER
     =============================================== */
    var win = $(window);
    var winH = win.height()-65;
    $(window).on('scroll', function () {
        if ($(window).scrollTop() < winH) {
            $('.header_bottom').removeClass('sticky_header');
        } else {
            $('.header_bottom').addClass('sticky_header');
        }
    }).on("resize", function(){ // If the user resizes the window
        winH = $(this).height(); // you'll need the new height value
    });

    /* ------------------------------------- */
    /*   wow
     /* ------------------------------------- */
    var wow = new WOW(
        {
            animateClass: 'animated',
            offset: 10,
            mobile: true
        }
    );
    wow.init();

    /* ==============================================
     Smooth Scroll To Anchor
     =============================================== */

    $('.navbar-nav a').on('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 50
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
    $('.nav a').click(function () {
        $('.navbar-collapse').collapse('hide');
    });


    /* --------------------------------------------------------
     TEXT ROTATOR
     ----------------------------------------------------------- */
    $(".rotate").textrotator({
        animation: "dissolve", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
        separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
        speed: 3000 // How many milliseconds until the next word show.
    });


    /* ------------------------------------- */
    /* Animated progress bars
     /* ------------------------------------- */

    $('.single_progressbar').waypoint(function () {
            $('.progress-bar').progressbar({
                transition_delay: 500
            });
    }, {
        offset: '100%'
    });



    /* ==============================================
     portfolio-filter
     =============================================== */

    // filter items on button click
    $('#filtr-container').on('click', 'li', function(e) {
        e.preventDefault();
        $('#filtr-container li').removeClass('active');
        $(this).closest('li').addClass('active');
    });
    if($(".filtr-container").length > 0 ){
        $(window).load(function() {
            $('.filtr-container').filterizr();
        });
    }

    /* ==============================================
     pop up
     =============================================== */

    // portfolio-pop up

    $('.filtr-container').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title');
            }
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function (element) {
                return element.find('img');
            }
        }
    });

    // intro video pop up

    $('.popup-video').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });


    /* ==============================================
     OWL CAROUSEL
     =============================================== */
    $(".testimonial_carousel").owlCarousel({
        autoplay:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1

            },
            600:{
                items:1
            },
            1000:{
                items:1,
                dots:true
            }
        },
        slideSpeed : 1000,
        pagination:true
    });

    $(".testimonial_carousel_two").owlCarousel({
        autoplay:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1

            },
            600:{
                items:2
            },
            1000:{
                items:2,
                dots:true
            }
        },
        slideSpeed : 1000,
        pagination:true
    });

    var blog_num = $(".blog_carousel").attr("data-num");

    $(".blog_carousel").owlCarousel({
        autoplay:true,
        responsiveClass:true,
        loop:true,
        responsive:{
            0:{
                items:1

            },
            600:{
                items:2
            },
            1000:{
                items:blog_num
            }
        },
        slideSpeed : 1000,
        pagination:false
    });


    $(".brand_carousel").owlCarousel({
        loop:true,
        autoplay:true,
        smartSpeed:700,
        autoplayHoverPause:false,
        dots:false,
        nav:false,
        responsiveClass:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3

            },
            1000:{
                items:5

            }
        },
        items:5
    });

    /* --------------------------------------------------------
     COUNTER JS
     ----------------------------------------------------------- */

    $('.counter').counterUp({
        delay: 5,
        time: 3000
    });

});