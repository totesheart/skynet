(function ($) {
    "use strict";




    var htmlBody = $('html, body');
    var $window = $(window),
        $body = $('body');

    jQuery(document).ready(function ($) {

        /*========  CounterUp ===========*/
        $('.count').counterUp({
            delay: 10,
            time: 2000
        });

        $("#js-rotating").Morphext({
            animation: "bounceIn",
            speed: 3000,
        });
        
        // MObile menu toggle 
        $('.menu-toogle-icon').on('click', function () {
            $('.side-menu').animate({
                'width': 'toggle'
            });
            $('.menu-toogle-icon').toggleClass('active');
        })
        $('#nav-icon3').click(function () {
            $(this).toggleClass('open');
        });

        // // background video initialization
        if ($("#bgndVideo").length > 0) {
            $("#bgndVideo").YTPlayer();
        }

        // ripple effect initialization
        if ($(".homeripple").length > 0) {
            $('.homeripple').ripples({
                resolution: 500,
                dropRadius: 20,
                perturbance: 0.04
            });
        }
        // particles effect initialization for home 3
        if ($("#particles-js").length > 0) {
            particlesJS.load('particles-js', 'assets/front/js/particles.json');
        }


        /*======== Smoothscroll js ===========*/

        $('a[href*="#"]:not([href="#').on('click', function () {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    htmlBody.animate({
                        scrollTop: target.offset().top - 0
                    }, 1000);
                    return false;
                }
            }
        });
        /*======== jquery scroll spy ===========*/
        $body.scrollspy({
            target: "#ca-navbar",
            offset: 70
        });


        //    bottom to top js start
        var html_body = $('html, body');
        var amountScrolled = 300;
        var bootomclass = $('.back-top-btn');
        bootomclass.hide();
        $window.on('scroll', function () {
            if ($window.scrollTop() > amountScrolled) {
                bootomclass.fadeIn('slow');
            } else {
                bootomclass.fadeOut('slow');
            }
            var scrollPos = $window.scrollTop();
        });

        bootomclass.on('click', function () {
            html_body.animate({
                scrollTop: 0
            }, 600);
            return false;
        });


        /*======== Magnific Popup ===========*/
        $('.work-popup, .lightbox').magnificPopup({
            type: 'image'
        });

        $(document).ready(function () {
            $('.popup-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
                }
            });
        });


        // statistics jquery circle progressbar initialization
        var $section = $('#statisticsSection');
        if ($section.length > 0) {
            $(document).bind('scroll', function (ev) {
                var scrollOffset = $(document).scrollTop();
                var containerOffset = $section.offset().top - window.innerHeight;
                if (scrollOffset > containerOffset) {

                    $(".progress-circle").loading();
                    // unbind event not to load scroll again
                    $(document).unbind('scroll');
                }
            });
        }

        //  Slider
        var $slider = $('.slider');
        $slider.owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            autoplay: true,
            margin: 0,
            autoplayTimeout: 3000,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            responsive: {
                0: {
                    items: 1
                }
            }
        });

        // testimonial Slider
        var $testimonial_slider = $('.testimonial-slider');
        $testimonial_slider.owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            autoplay: true,
            margin: 0,
            autoplayTimeout: 4000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 2
                }
            }
        });
        // Client Slider
        var $client_slider = $('.client-slider');
        $client_slider.owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            autoplay: true,
            margin: 0,
            autoplayTimeout: 4000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: 3
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                }
            }
        });





        // Portfolio Gallery slick part //

        $('.big-image').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-img',

            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        vertical: false,
                        horizontal: true,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.slider-img').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 768,
                settings: {
                    vertical: false,
                    slidesToShow: 3
                }
            }],
            asNavFor: '.big-image',
            dots: false,
            arrows: true,
            prevArrow: '<i class="fa fa fa-chevron-left slidPrv4"></i>',
            nextArrow: '<i class="fa fa-chevron-right slidNext4"></i>',
            centerPadding: '0px',
            centerMode: true,
            focusOnSelect: true,
        });


    });


    $window.on('load', function () {
        setTimeout(function () {
            $('body').addClass('loaded');
        });
    });



}(jQuery));