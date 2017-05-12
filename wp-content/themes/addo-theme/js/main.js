$(document).ready(function() {


    /* SCRIPT FOR MENU SLIDE DOWN ON CLICK OF HAMBURGER */
    $('#nav_list').click(function() {
        $('.nav-fixed').toggleClass('nav-index');
        // setTimeout(function(){
        //     $('#fullpage').toggleClass('nav-index');
        // },600);
        $('.nav-menu').toggleClass('js-nav-menu');

        if ($(window).width() > 767) {
            $('.buttonset').toggleClass('js-buttonset');
            //     alert('This is working');
        }

    });

    /* SCRIPT TO REMOVE ADDED CLASS TO HAMBURGER ANIMATION */

    if (($(window).width() < 767) && ($('.js-buttonset').hasClass('js-buttonset'))) {
        $('.buttonset').removeClass('js-buttonset')
    }

    /* SCRIPT TO VIEW SECTIONS BEHIND MENU ON SECTION SELECT */

    if ($(window).width() < 767) {

        $('.nav-menu li').click(function() {
            /* TIMEOUT SET TO GIVE IMPRESSION OF LANDING ON PAGE DIRECTLY RATHER THAN SCROLL */
            setTimeout(function() {
                $('.nav-menu').toggleClass('js-nav-menu', function() {
                    // Animation complete.
                });
            }, 500);

        });
    }

    /* SCRIPT FOR TYPING ELEMENT ON HOME SECTION */
    Typed.new('.element', {
        strings: ["Toys for everyday play.", "Available worldwide.", "Outstanding value.", "Intelligent and thoughtful design", "Inspiring play."],
        typeSpeed: 10
    });


    /* MAIN SCRIPT FOR FULLPAGE JS */

    $('#fullpage').fullpage({
        anchors: ['Home', 'AboutUs', 'OurBrands', 'News', 'ContactUs', 'Footer'],
        menu: '.nav-fixed',
        animateAnchor: true,
        responsiveWidth: 992,
        responsiveSlides: false,
        lazyLoading: true,
        afterResponsive: function(isResponsive) {
            // alert("Is responsive: " + isResponsive);
        },

        onLeave: function(index, nextIndex, direction) {
            var leavingSection = $(this);
            //SCRIPT TO CHANGE BACKGROUND COLOR OF MENU BAR FOR FIRST SLIDE
            if (index == 2 && direction == 'up') {
                $('.nav-menu').css('background', '#00a3df');

            }
            // SCRIPT TO CHANGE BACKGROUND COLOR OF MENU BAR FOR SECOND SLIDE
            if (index == 1) {
                $('.nav-menu').css('background', '#fed100');
            }
            // SCRIPT TO CHANGE BACKGROUND COLOR OF MENU BAR FOR THIRD SLIDE
            if (index == 2 && direction == 'down') {
                $('.nav-menu').css('background', '#ef7b37');
            }
            if (index == 3 && direction == 'up') {
                $('.nav-menu').css('background', '#fed100');
                $('.image-top').removeClass('js-animate--top');
                $('.image-bottom').removeClass('js-animate--bottom');
                $('.splatter').removeClass('js-animate--splatter');
                $('.shop-btn button').removeClass('js-animate--splatter');
            }
            // SCRIPT TO CHANGE BACKGROUND COLOR OF MENU BAR FOR FOURTH SLIDE
            if (index == 3 && direction == 'down') {
                $('.nav-menu').css('background', '#de014b');
                $('.image-top').removeClass('js-animate--top');
                $('.image-bottom').removeClass('js-animate--bottom');
                $('.splatter').removeClass('js-animate--splatter');
                $('.shop-btn button').removeClass('js-animate--splatter');
            }
            if (index == 4 && direction == 'up') {
                $('.nav-menu').css('background', '#ef7b37');
                $('.image-top').addClass('js-animate--top');
                $('.image-bottom').addClass('js-animate--bottom');
                $('.splatter').addClass('js-animate--splatter');
                $('.shop-btn button').addClass('js-animate--splatter');
            }
            // SCRIPT TO CHANGE BACKGROUND COLOR OF MENU BAR FOR FIFTH SLIDE
            if (index == 4 && direction == 'down') {
                $('.nav-menu').css('background', '#00a3df');
            }
            if (index == 5 && direction == 'up') {
                $('.nav-menu').css('background', '#de014b');
            }
            //after leaving section 2
            if (index == 2 && direction == 'down') {
                // alert("Going to section 3!");
                $('.image-top').addClass('js-animate--top');
                $('.image-bottom').addClass('js-animate--bottom');

                $('.splatter').addClass('js-animate--splatter');
                $('.shop-btn button').addClass('js-animate--splatter');

            } else if (index == 3 && direction == 'up') {
                $('.image-top').removeClass('js-animate--top');
                $('.image-bottom').removeClass('js-animate--bottom');
                $('.splatter').removeClass('js-animate--splatter');
                $('.shop-btn button').removeClass('js-animate--splatter');
            }

            //SCRIPT TO FADE OUT TOP SOCIAL ON REACHING FOOTER
            if (index == 5 && direction == 'down') {
                $('.social-header--container').fadeOut('slow', function() {
                    //Animation complete;
                })
            }
            if (index == 6 && direction == 'up') {
                $('.social-header--container').fadeIn('slow', function() {
                    //Animation complete;
                })
            }
        },
        afterLoad: function(anchorLink, index) {
            var loadedSection = $(this);
            /* HOME SECTION MENU BACKGROUND COLOR CHANGE */
            if (anchorLink == 'Home') {
                $('.nav-menu').css('background', '#00a3df');
            }
            /* ABOUT SECTION MENU BACKGROUND COLOR CHANGE */
            if (anchorLink == 'AboutUs') {
                $('.nav-menu').css('background', '#fed100');
            }
            /* OUR BRANDS SECTION MENU BACKGROUND COLOR CHANGE */
            if (anchorLink == 'OurBrands') {
                $('.nav-menu').css('background', '#ef7b37');
                $('.image-top').addClass('js-animate--top');
                $('.image-bottom').addClass('js-animate--bottom');
            }
            /* NEWS SECTION MENU BACKGROUND COLOR CHANGE */
            if (anchorLink == 'News') {
                $('.nav-menu').css('background', '#de014b');
            }
            /* CONTACT US SECTION MENU BACKGROUND COLOR CHANGE */
            if (anchorLink == 'ContactUs') {
                $('.nav-menu').css('background', '#00a3df');
            }
            //SCRIPT TO FADE OUT TOP SOCIAL ON GOING TO FOOTER DIRECTLY
            if (anchorLink == 'Footer') {
                $('.social-header--container').fadeOut('slow', function() {
                    //Animation complete;
                })
            }
        }
    });

    /* SCRIPT FOR BRAND SLIDER */


    var $slider = $('.teamSlider')
        .on('init', function(slick) {
            console.log('fired!');
            $('.teamSlider').fadeIn(3000);
        })
        .slick({
            fade: true,
            focusOnSelect: true,
            lazyLoad: 'ondemand',
            speed: 1000,
            centerMode: true,
            centerPadding: '200px',
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            lazyload: 'ondemand',
            nextArrow: '<i class="fa fa-angle-right"></i>',
            prevArrow: '<i class="fa fa-angle-left"></i>',
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '400px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });

    $slider.find(".slick-slide").on("click", function() {
        $slider.slick("slickNext");
    });

    var $mobileSlider = $('.teamSlider-mobile')
        // .on('init', function(slick) {
        //     console.log('fired!');
        //     $('.teamSlider-mobile').fadeIn(3000);
        // })
    $('.teamSlider-mobile').slick({
        fade: true,
        // focusOnSelect: true,
        // lazyLoad: 'ondemand',
        speed: 1000,
        infinite: false,
        centerMode: true,
        centerPadding: '200px',
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        // lazyload: 'ondemand',
        nextArrow: '<i class="fa fa-angle-right"></i>',
        prevArrow: '<i class="fa fa-angle-left"></i>',
        asNavFor: '.slider-nav',
        respondTo: 'window',

    });

    $slider.find(".slick-slide").on("click", function() {
        $slider.slick("slickNext");
    });

    $('.slider-nav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.teamSlider-mobile',
        // dots: true,
        arrows: false,
        centerMode: false,
        centerPadding: '100px',

    });



    $('.modal').on('shown.bs.modal', function(e) {
        $('.teamSlider-mobile').resize();
        $('.slider-nav').resize();

    });

    $('#teamOne').on('click mouseenter', function() {
        // alert('This is working');
        $('#team-one').toggleClass('js-team-content')
        $(this).addClass('svg-hover');
        if ($('#team-two').hasClass('js-team-content')) {
            $('#team-two').removeClass('js-team-content');
            $('#teamTwo').removeClass('svg-hover');
        }
        if ($('#team-three').hasClass('js-team-content')) {
            $('#team-three').removeClass('js-team-content');
            $('#teamThree').removeClass('svg-hover');
        }
        if ($('#team-four').hasClass('js-team-content')) {
            $('#team-four').removeClass('js-team-content');
            $('#teamFour').removeClass('svg-hover');
        }
        if ($('#team-five').hasClass('js-team-content')) {
            $('#team-five').removeClass('js-team-content');
            $('#teamFive').removeClass('svg-hover');
        }
        if ($('#team-six').hasClass('js-team-content')) {
            $('#team-six').removeClass('js-team-content');
            $('#teamSix').removeClass('svg-hover');
        }
        if ($('#team-seven').hasClass('js-team-content')) {
            $('#team-seven').removeClass('js-team-content');
            $('#teamSeven').removeClass('svg-hover');
        }
        if ($('#team-eight').hasClass('js-team-content')) {
            $('#team-eight').removeClass('js-team-content');
            $('#teamEight').removeClass('svg-hover');
        }
        if ($('#team-nine').hasClass('js-team-content')) {
            $('#team-nine').removeClass('js-team-content');
            $('#teamNine').removeClass('svg-hover');
        }
        if ($('#team-ten').hasClass('js-team-content')) {
            $('#team-ten').removeClass('js-team-content');
            $('#teamTen').removeClass('svg-hover');
        }
        if ($('#team-eleven').hasClass('js-team-content')) {
            $('#team-eleven').removeClass('js-team-content');
            $('#teamEleven').removeClass('svg-hover');
        }
        if ($('#team-twelve').hasClass('js-team-content')) {
            $('#team-twelve').removeClass('js-team-content');
            $('#teamTwelve').removeClass('svg-hover');
        }
    });

    $('#teamTwo').on('click mouseenter', function() {
        $('#team-two').toggleClass('js-team-content')
        $(this).addClass('svg-hover');
        if ($('#team-one').hasClass('js-team-content')) {
            $('#team-one').removeClass('js-team-content');
            $('#teamOne').removeClass('svg-hover');
        }
        if ($('#team-three').hasClass('js-team-content')) {
            $('#team-three').removeClass('js-team-content');
            $('#teamThree').removeClass('svg-hover');
        }
        if ($('#team-four').hasClass('js-team-content')) {
            $('#team-four').removeClass('js-team-content');
            $('#teamFour').removeClass('svg-hover');
        }
        if ($('#team-five').hasClass('js-team-content')) {
            $('#team-five').removeClass('js-team-content');
            $('#teamFive').removeClass('svg-hover');
        }
        if ($('#team-six').hasClass('js-team-content')) {
            $('#team-six').removeClass('js-team-content');
            $('#teamSix').removeClass('svg-hover');
        }
        if ($('#team-seven').hasClass('js-team-content')) {
            $('#team-seven').removeClass('js-team-content');
            $('#teamSeven').removeClass('svg-hover');
        }
        if ($('#team-eight').hasClass('js-team-content')) {
            $('#team-eight').removeClass('js-team-content');
            $('#teamEight').removeClass('svg-hover');
        }
        if ($('#team-nine').hasClass('js-team-content')) {
            $('#team-nine').removeClass('js-team-content');
            $('#teamNine').removeClass('svg-hover');
        }
        if ($('#team-ten').hasClass('js-team-content')) {
            $('#team-ten').removeClass('js-team-content');
            $('#teamTen').removeClass('svg-hover');
        }
        if ($('#team-eleven').hasClass('js-team-content')) {
            $('#team-eleven').removeClass('js-team-content');
            $('#teamEleven').removeClass('svg-hover');
        }
        if ($('#team-twelve').hasClass('js-team-content')) {
            $('#team-twelve').removeClass('js-team-content');
            $('#teamTwelve').removeClass('svg-hover');
        }
    });

    $('#teamThree').on('click mouseenter', function() {
        $(this).addClass('svg-hover');
        $('#team-three').toggleClass('js-team-content')
        if ($('#team-one').hasClass('js-team-content')) {
            $('#team-one').removeClass('js-team-content');
            $('#teamOne').removeClass('svg-hover');
        }
        if ($('#team-two').hasClass('js-team-content')) {
            $('#team-two').removeClass('js-team-content');
            $('#teamTwo').removeClass('svg-hover');
        }
        if ($('#team-four').hasClass('js-team-content')) {
            $('#team-four').removeClass('js-team-content');
            $('#teamFour').removeClass('svg-hover');
        }
        if ($('#team-five').hasClass('js-team-content')) {
            $('#team-five').removeClass('js-team-content');
            $('#teamFive').removeClass('svg-hover');
        }
        if ($('#team-six').hasClass('js-team-content')) {
            $('#team-six').removeClass('js-team-content');
            $('#teamSix').removeClass('svg-hover');
        }
        if ($('#team-seven').hasClass('js-team-content')) {
            $('#team-seven').removeClass('js-team-content');
            $('#teamSeven').removeClass('svg-hover');
        }
        if ($('#team-eight').hasClass('js-team-content')) {
            $('#team-eight').removeClass('js-team-content');
            $('#teamEight').removeClass('svg-hover');
        }
        if ($('#team-nine').hasClass('js-team-content')) {
            $('#team-nine').removeClass('js-team-content');
            $('#teamNine').removeClass('svg-hover');
        }
        if ($('#team-ten').hasClass('js-team-content')) {
            $('#team-ten').removeClass('js-team-content');
            $('#teamTen').removeClass('svg-hover');
        }
        if ($('#team-eleven').hasClass('js-team-content')) {
            $('#team-eleven').removeClass('js-team-content');
            $('#teamEleven').removeClass('svg-hover');
        }
        if ($('#team-twelve').hasClass('js-team-content')) {
            $('#team-twelve').removeClass('js-team-content');
            $('#teamTwelve').removeClass('svg-hover');
        }
    });

    $('#teamFour').on('click mouseenter', function() {
        $(this).addClass('svg-hover');
        $('#team-four').toggleClass('js-team-content')
        if ($('#team-one').hasClass('js-team-content')) {
            $('#team-one').removeClass('js-team-content');
            $('#teamOne').removeClass('svg-hover');
        }
        if ($('#team-two').hasClass('js-team-content')) {
            $('#team-two').removeClass('js-team-content');
            $('#teamTwo').removeClass('svg-hover');
        }
        if ($('#team-three').hasClass('js-team-content')) {
            $('#team-three').removeClass('js-team-content');
            $('#teamThree').removeClass('svg-hover');
        }
        if ($('#team-five').hasClass('js-team-content')) {
            $('#team-five').removeClass('js-team-content');
            $('#teamFive').removeClass('svg-hover');
        }
        if ($('#team-six').hasClass('js-team-content')) {
            $('#team-six').removeClass('js-team-content');
            $('#teamSix').removeClass('svg-hover');
        }
        if ($('#team-seven').hasClass('js-team-content')) {
            $('#team-seven').removeClass('js-team-content');
            $('#teamSeven').removeClass('svg-hover');
        }
        if ($('#team-eight').hasClass('js-team-content')) {
            $('#team-eight').removeClass('js-team-content');
            $('#teamEight').removeClass('svg-hover');
        }
        if ($('#team-nine').hasClass('js-team-content')) {
            $('#team-nine').removeClass('js-team-content');
            $('#teamNine').removeClass('svg-hover');
        }
        if ($('#team-ten').hasClass('js-team-content')) {
            $('#team-ten').removeClass('js-team-content');
            $('#teamTen').removeClass('svg-hover');
        }
        if ($('#team-eleven').hasClass('js-team-content')) {
            $('#team-eleven').removeClass('js-team-content');
            $('#teamEleven').removeClass('svg-hover');
        }
        if ($('#team-twelve').hasClass('js-team-content')) {
            $('#team-twelve').removeClass('js-team-content');
            $('#teamTwelve').removeClass('svg-hover');
        }
    });

    $('#teamFive').on('click mouseenter', function() {
        $(this).addClass('svg-hover');
        $('#team-five').toggleClass('js-team-content')
        if ($('#team-one').hasClass('js-team-content')) {
            $('#team-one').removeClass('js-team-content');
            $('#teamOne').removeClass('svg-hover');
        }
        if ($('#team-two').hasClass('js-team-content')) {
            $('#team-two').removeClass('js-team-content');
            $('#teamTwo').removeClass('svg-hover');
        }
        if ($('#team-three').hasClass('js-team-content')) {
            $('#team-three').removeClass('js-team-content');
            $('#teamThree').removeClass('svg-hover');
        }
        if ($('#team-four').hasClass('js-team-content')) {
            $('#team-four').removeClass('js-team-content');
            $('#teamFour').removeClass('svg-hover');
        }
        if ($('#team-six').hasClass('js-team-content')) {
            $('#team-six').removeClass('js-team-content');
            $('#teamSix').removeClass('svg-hover');
        }
        if ($('#team-seven').hasClass('js-team-content')) {
            $('#team-seven').removeClass('js-team-content');
            $('#teamSeven').removeClass('svg-hover');
        }
        if ($('#team-eight').hasClass('js-team-content')) {
            $('#team-eight').removeClass('js-team-content');
            $('#teamEight').removeClass('svg-hover');
        }
        if ($('#team-nine').hasClass('js-team-content')) {
            $('#team-nine').removeClass('js-team-content');
            $('#teamNine').removeClass('svg-hover');
        }
        if ($('#team-ten').hasClass('js-team-content')) {
            $('#team-ten').removeClass('js-team-content');
            $('#teamTen').removeClass('svg-hover');
        }
        if ($('#team-eleven').hasClass('js-team-content')) {
            $('#team-eleven').removeClass('js-team-content');
            $('#teamEleven').removeClass('svg-hover');
        }
        if ($('#team-twelve').hasClass('js-team-content')) {
            $('#team-twelve').removeClass('js-team-content');
            $('#teamTwelve').removeClass('svg-hover');
        }
    });

    $('#teamSix').on('click mouseenter', function() {
        $(this).addClass('svg-hover');
        $('#team-six').toggleClass('js-team-content')
        if ($('#team-one').hasClass('js-team-content')) {
            $('#team-one').removeClass('js-team-content');
            $('#teamOne').removeClass('svg-hover');
        }
        if ($('#team-two').hasClass('js-team-content')) {
            $('#team-two').removeClass('js-team-content');
            $('#teamTwo').removeClass('svg-hover');
        }
        if ($('#team-three').hasClass('js-team-content')) {
            $('#team-three').removeClass('js-team-content');
            $('#teamThree').removeClass('svg-hover');
        }
        if ($('#team-four').hasClass('js-team-content')) {
            $('#team-four').removeClass('js-team-content');
            $('#teamFour').removeClass('svg-hover');
        }
        if ($('#team-five').hasClass('js-team-content')) {
            $('#team-five').removeClass('js-team-content');
            $('#teamFive').removeClass('svg-hover');
        }
        if ($('#team-seven').hasClass('js-team-content')) {
            $('#team-seven').removeClass('js-team-content');
            $('#teamSeven').removeClass('svg-hover');
        }
        if ($('#team-eight').hasClass('js-team-content')) {
            $('#team-eight').removeClass('js-team-content');
            $('#teamEight').removeClass('svg-hover');
        }
        if ($('#team-nine').hasClass('js-team-content')) {
            $('#team-nine').removeClass('js-team-content');
            $('#teamNine').removeClass('svg-hover');
        }
        if ($('#team-ten').hasClass('js-team-content')) {
            $('#team-ten').removeClass('js-team-content');
            $('#teamTen').removeClass('svg-hover');
        }
        if ($('#team-eleven').hasClass('js-team-content')) {
            $('#team-eleven').removeClass('js-team-content');
            $('#teamEleven').removeClass('svg-hover');
        }
        if ($('#team-twelve').hasClass('js-team-content')) {
            $('#team-twelve').removeClass('js-team-content');
            $('#teamTwelve').removeClass('svg-hover');
        }
    });

    $('#teamSeven').on('click mouseenter', function() {
        $(this).addClass('svg-hover');
        $('#team-seven').toggleClass('js-team-content')
        if ($('#team-one').hasClass('js-team-content')) {
            $('#team-one').removeClass('js-team-content');
            $('#teamOne').removeClass('svg-hover');
        }
        if ($('#team-two').hasClass('js-team-content')) {
            $('#team-two').removeClass('js-team-content');
            $('#teamTwo').removeClass('svg-hover');
        }
        if ($('#team-three').hasClass('js-team-content')) {
            $('#team-three').removeClass('js-team-content');
            $('#teamThree').removeClass('svg-hover');
        }
        if ($('#team-four').hasClass('js-team-content')) {
            $('#team-four').removeClass('js-team-content');
            $('#teamFour').removeClass('svg-hover');
        }
        if ($('#team-five').hasClass('js-team-content')) {
            $('#team-five').removeClass('js-team-content');
            $('#teamFive').removeClass('svg-hover');
        }
        if ($('#team-six').hasClass('js-team-content')) {
            $('#team-six').removeClass('js-team-content');
            $('#teamSix').removeClass('svg-hover');
        }
        if ($('#team-eight').hasClass('js-team-content')) {
            $('#team-eight').removeClass('js-team-content');
            $('#teamEight').removeClass('svg-hover');
        }
        if ($('#team-nine').hasClass('js-team-content')) {
            $('#team-nine').removeClass('js-team-content');
            $('#teamNine').removeClass('svg-hover');
        }
        if ($('#team-ten').hasClass('js-team-content')) {
            $('#team-ten').removeClass('js-team-content');
            $('#teamTen').removeClass('svg-hover');
        }
        if ($('#team-eleven').hasClass('js-team-content')) {
            $('#team-eleven').removeClass('js-team-content');
            $('#teamEleven').removeClass('svg-hover');
        }
        if ($('#team-twelve').hasClass('js-team-content')) {
            $('#team-twelve').removeClass('js-team-content');
            $('#teamTwelve').removeClass('svg-hover');
        }
    });

    $('#teamEight').on('click mouseenter', function() {
        $(this).addClass('svg-hover');
        $('#team-eight').toggleClass('js-team-content')
        if ($('#team-one').hasClass('js-team-content')) {
            $('#team-one').removeClass('js-team-content');
            $('#teamOne').removeClass('svg-hover');
        }
        if ($('#team-two').hasClass('js-team-content')) {
            $('#team-two').removeClass('js-team-content');
            $('#teamTwo').removeClass('svg-hover');
        }
        if ($('#team-three').hasClass('js-team-content')) {
            $('#team-three').removeClass('js-team-content');
            $('#teamThree').removeClass('svg-hover');
        }
        if ($('#team-four').hasClass('js-team-content')) {
            $('#team-four').removeClass('js-team-content');
            $('#teamFour').removeClass('svg-hover');
        }
        if ($('#team-five').hasClass('js-team-content')) {
            $('#team-five').removeClass('js-team-content');
            $('#teamFive').removeClass('svg-hover');
        }
        if ($('#team-six').hasClass('js-team-content')) {
            $('#team-six').removeClass('js-team-content');
            $('#teamSix').removeClass('svg-hover');
        }
        if ($('#team-seven').hasClass('js-team-content')) {
            $('#team-seven').removeClass('js-team-content');
            $('#teamSeven').removeClass('svg-hover');
        }
        if ($('#team-nine').hasClass('js-team-content')) {
            $('#team-nine').removeClass('js-team-content');
            $('#teamNine').removeClass('svg-hover');
        }
        if ($('#team-ten').hasClass('js-team-content')) {
            $('#team-ten').removeClass('js-team-content');
            $('#teamTen').removeClass('svg-hover');
        }
        if ($('#team-eleven').hasClass('js-team-content')) {
            $('#team-eleven').removeClass('js-team-content');
            $('#teamEleven').removeClass('svg-hover');
        }
        if ($('#team-twelve').hasClass('js-team-content')) {
            $('#team-twelve').removeClass('js-team-content');
            $('#teamTwelve').removeClass('svg-hover');
        }
    });

    $('#teamNine').on('click mouseenter', function() {
        $(this).addClass('svg-hover');
        $('#team-nine').toggleClass('js-team-content')
        if ($('#team-one').hasClass('js-team-content')) {
            $('#team-one').removeClass('js-team-content');
            $('#teamOne').removeClass('svg-hover');
        }
        if ($('#team-two').hasClass('js-team-content')) {
            $('#team-two').removeClass('js-team-content');
            $('#teamTwo').removeClass('svg-hover');
        }
        if ($('#team-three').hasClass('js-team-content')) {
            $('#team-three').removeClass('js-team-content');
            $('#teamThree').removeClass('svg-hover');
        }
        if ($('#team-four').hasClass('js-team-content')) {
            $('#team-four').removeClass('js-team-content');
            $('#teamFour').removeClass('svg-hover');
        }
        if ($('#team-five').hasClass('js-team-content')) {
            $('#team-five').removeClass('js-team-content');
            $('#teamFive').removeClass('svg-hover');
        }
        if ($('#team-six').hasClass('js-team-content')) {
            $('#team-six').removeClass('js-team-content');
            $('#teamSix').removeClass('svg-hover');
        }
        if ($('#team-seven').hasClass('js-team-content')) {
            $('#team-seven').removeClass('js-team-content');
            $('#teamSeven').removeClass('svg-hover');
        }
        if ($('#team-eight').hasClass('js-team-content')) {
            $('#team-eight').removeClass('js-team-content');
            $('#teeamEight').removeClass('svg-hover');
        }
        if ($('#team-ten').hasClass('js-team-content')) {
            $('#team-ten').removeClass('js-team-content');
            $('#teamTen').removeClass('svg-hover');
        }
        if ($('#team-eleven').hasClass('js-team-content')) {
            $('#team-eleven').removeClass('js-team-content');
            $('#teamEleven').removeClass('svg-hover');
        }
        if ($('#team-twelve').hasClass('js-team-content')) {
            $('#team-twelve').removeClass('js-team-content');
            $('#teamTwelve').removeClass('svg-hover');
        }
    });

    $('#teamTen').on('click mouseenter', function() {
        $(this).addClass('svg-hover');
        $('#team-ten').toggleClass('js-team-content')
        if ($('#team-one').hasClass('js-team-content')) {
            $('#team-one').removeClass('js-team-content');
            $('#teamOne').removeClass('svg-hover');
        }
        if ($('#team-two').hasClass('js-team-content')) {
            $('#team-two').removeClass('js-team-content');
            $('#teamTwo').removeClass('svg-hover');
        }
        if ($('#team-three').hasClass('js-team-content')) {
            $('#team-three').removeClass('js-team-content');
            $('#teamThree').removeClass('svg-hover');
        }
        if ($('#team-four').hasClass('js-team-content')) {
            $('#team-four').removeClass('js-team-content');
            $('#teamFour').removeClass('svg-hover');
        }
        if ($('#team-five').hasClass('js-team-content')) {
            $('#team-five').removeClass('js-team-content');
            $('#teamFive').removeClass('svg-hover');
        }
        if ($('#team-six').hasClass('js-team-content')) {
            $('#team-six').removeClass('js-team-content');
            $('#teamSix').removeClass('svg-hover');
        }
        if ($('#team-seven').hasClass('js-team-content')) {
            $('#team-seven').removeClass('js-team-content');
            $('#teamSeven').removeClass('svg-hover');
        }
        if ($('#team-eight').hasClass('js-team-content')) {
            $('#team-eight').removeClass('js-team-content');
            $('#teamEight').removeClass('svg-hover');
        }
        if ($('#team-nine').hasClass('js-team-content')) {
            $('#team-nine').removeClass('js-team-content');
            $('#teamNine').removeClass('svg-hover');
        }
        if ($('#team-eleven').hasClass('js-team-content')) {
            $('#team-eleven').removeClass('js-team-content');
            $('#teamEleven').removeClass('svg-hover');
        }
        if ($('#team-twelve').hasClass('js-team-content')) {
            $('#team-twelve').removeClass('js-team-content');
            $('#teamTwelve').removeClass('svg-hover');
        }
    });

    $('#teamEleven').on('click mouseenter', function() {
        $(this).addClass('svg-hover');
        $('#team-eleven').toggleClass('js-team-content')
        if ($('#team-one').hasClass('js-team-content')) {
            $('#team-one').removeClass('js-team-content');
            $('#teamOne').removeClass('svg-hover');
        }
        if ($('#team-two').hasClass('js-team-content')) {
            $('#team-two').removeClass('js-team-content');
            $('#teamTwo').removeClass('svg-hover');
        }
        if ($('#team-three').hasClass('js-team-content')) {
            $('#team-three').removeClass('js-team-content');
            $('#teamThree').removeClass('svg-hover');
        }
        if ($('#team-four').hasClass('js-team-content')) {
            $('#team-four').removeClass('js-team-content');
            $('#teamFour').removeClass('svg-hover');
        }
        if ($('#team-five').hasClass('js-team-content')) {
            $('#team-five').removeClass('js-team-content');
            $('#teamFive').removeClass('svg-hover');
        }
        if ($('#team-six').hasClass('js-team-content')) {
            $('#team-six').removeClass('js-team-content');
            $('#teamSix').removeClass('svg-hover');
        }
        if ($('#team-seven').hasClass('js-team-content')) {
            $('#team-seven').removeClass('js-team-content');
            $('#teamSeven').removeClass('svg-hover');
        }
        if ($('#team-eight').hasClass('js-team-content')) {
            $('#team-eight').removeClass('js-team-content');
            $('#teamEight').removeClass('svg-hover');
        }
        if ($('#team-nine').hasClass('js-team-content')) {
            $('#team-nine').removeClass('js-team-content');
            $('#teamNine').removeClass('svg-hover');
        }
        if ($('#team-ten').hasClass('js-team-content')) {
            $('#team-ten').removeClass('js-team-content');
            $('#teamTen').removeClass('svg-hover');
        }
        if ($('#team-twelve').hasClass('js-team-content')) {
            $('#team-twelve').removeClass('js-team-content');
            $('#teamTwelve').removeClass('svg-hover');
        }
    });

    $('#teamTwelve').on('click mouseenter', function() {
        $(this).addClass('svg-hover');
        $('#team-twelve').toggleClass('js-team-content')
        if ($('#team-one').hasClass('js-team-content')) {
            $('#team-one').removeClass('js-team-content');
            $('#teamOne').removeClass('svg-hover');
        }
        if ($('#team-two').hasClass('js-team-content')) {
            $('#team-two').removeClass('js-team-content');
            $('#teamTwo').removeClass('svg-hover');
        }
        if ($('#team-three').hasClass('js-team-content')) {
            $('#team-three').removeClass('js-team-content');
            $('#teamThree').removeClass('svg-hover');
        }
        if ($('#team-four').hasClass('js-team-content')) {
            $('#team-four').removeClass('js-team-content');
            $('#teamFour').removeClass('svg-hover');
        }
        if ($('#team-five').hasClass('js-team-content')) {
            $('#team-five').removeClass('js-team-content');
            $('#teamFive').removeClass('svg-hover');
        }
        if ($('#team-six').hasClass('js-team-content')) {
            $('#team-six').removeClass('js-team-content');
            $('#teamSix').removeClass('svg-hover');
        }
        if ($('#team-seven').hasClass('js-team-content')) {
            $('#team-seven').removeClass('js-team-content');
            $('#teamSeven').removeClass('svg-hover');
        }
        if ($('#team-eight').hasClass('js-team-content')) {
            $('#team-eight').removeClass('js-team-content');
            $('#teamEight').removeClass('svg-hover');
        }
        if ($('#team-nine').hasClass('js-team-content')) {
            $('#team-nine').removeClass('js-team-content');
            $('#teamNine').removeClass('svg-hover');
        }
        if ($('#team-ten').hasClass('js-team-content')) {
            $('#team-ten').removeClass('js-team-content');
            $('#teamTen').removeClass('svg-hover');
        }
        if ($('#team-eleven').hasClass('js-team-content')) {
            $('#team-eleven').removeClass('js-team-content');
            $('#teamEleven').removeClass('svg-hover');
        }
    });

    $('#teamOne-mobile').on('click mouseenter', function() {
        // alert('this is working');
        $('#team-one').toggleClass('js-team-content')
        $(this).addClass('svg-hover');
    });



    /* SCRIPT FOR BRAND SLIDER */
    $('.brandSlider').slick({
        autoplay: false,
        dots: false,
        arrows: true,
        slidesToShow: 1,
        draggable: false,
        nextArrow: '<i class="fa fa-angle-right"></i>',
        prevArrow: '<i class="fa fa-angle-left"></i>',

    });

    $('.brand-btn').click(function() {
        if ($(this).attr("href") == ".carousel-control") return; //This is the exception
        // alert('this is working');
        targetSlide = $(this).attr('data-to') - 1;
        $('#brandsliderCarousel').carousel(targetSlide);
    });

    // $('.carousel').carousel('pause');


    /* SCRIPT TO STOP SCROLL OF FULLPAGE JS ON MODAL ACTIVATION */
    $('#js-seeTeam').click(function() {
            // alert('this is working');
            $.fn.fullpage.setAllowScrolling(false);
            $.fn.fullpage.setKeyboardScrolling(false);
        })
        // $('button').click(function() {
        //     alert('this is working');
        //     $.fn.fullpage.setAllowScrolling(false);
        //     $.fn.fullpage.setKeyboardScrolling(false);
        // })


    $('#js-seeBrands').click(function() {
        // alert('this is working');
        $.fn.fullpage.setAllowScrolling(false);
        $.fn.fullpage.setKeyboardScrolling(false);
    })

    $('#js-contactUs').click(function() {
        // alert('this is working');
        $.fn.fullpage.setAllowScrolling(false);
        $.fn.fullpage.setKeyboardScrolling(false);
    })

    $('#js-findUs').click(function() {
        $.fn.fullpage.setAllowScrolling(true);
        $.fn.fullpage.setKeyboardScrolling(true);
    });

    $('.modal').click(function() {
        $.fn.fullpage.setAllowScrolling(true);
        $.fn.fullpage.setKeyboardScrolling(true);
    });

    $('.modal-backdrop').click(function() {
        $.fn.fullpage.setAllowScrolling(true);
        $.fn.fullpage.setKeyboardScrolling(true);
    });

    $('.close').click(function() {
        $.fn.fullpage.setAllowScrolling(true);
        $.fn.fullpage.setKeyboardScrolling(true);
    });


    /* SCRIPT FOR SLOT MACHINE */
    $(document).ready(function() {
        var machine1 = $("#machine1").slotMachine({
            active: 0,
            delay: 500,
            stopHidden: true
        });

        var machine2 = $("#machine2").slotMachine({
            active: 0,
            delay: 500,
            direction: 'down',
            stopHidden: true
        });

        var machine3 = $("#machine3").slotMachine({
            active: 0,
            delay: 500,
            stopHidden: true

        });

        var machine4 = $("#machine4").slotMachine({
            active: 0,
            delay: 500,
            stopHidden: true
        });

        function onComplete(active) {
            switch (this.element[0].id) {
                case 'machine1':
                    $("#machine1Result").text("Index: " + this.active);
                    break;
                case 'machine2':
                    $("#machine2Result").text("Index: " + this.active);
                    break;
                case 'machine3':
                    $("#machine3Result").text("Index: " + this.active);
                    break;
                case 'machine4':
                    $("#machine4Result").text("Index: " + this.active);
                    break;
            }
        }

        $(".ranomizeButton").click(function() {

            machine1.shuffle(5, onComplete);

            setTimeout(function() {
                machine2.shuffle(5, onComplete);
            }, 100);

            setTimeout(function() {
                machine3.shuffle(5, onComplete);
            }, 200);

            setTimeout(function() {
                machine4.shuffle(5, onComplete);
            }, 300);

        })
    });



    // SCRIPT TO FADE BRAND LOGOS TO PRODUCTS ON HOVER //

    $('.brandOne').mouseenter(function() {
        $('.first-img').fadeOut();
        $('.second-img').fadeIn('slow');
    })
    $('.brandOne').mouseleave(function() {
        $('.first-img').fadeIn();
        $('.second-img').fadeOut('slow');
    })

    $('.brandTwo').mouseenter(function() {
        $('.third-img').fadeOut('slow');
        $('.fourth-img').fadeIn('slow');
    })

    $('.brandTwo').mouseleave(function() {
        $('.third-img').fadeIn('slow');
        $('.fourth-img').fadeOut('slow');
    })

    $('.brandThree').mouseenter(function() {
        $('.fifth-img').fadeOut('slow');
        $('.sixth-img').fadeIn('slow');
    })

    $('.brandThree').mouseleave(function() {
        $('.fifth-img').fadeIn('slow');
        $('.sixth-img').fadeOut('slow');
    })

    $('.brandFour').mouseenter(function() {
        $('.seventh-img').fadeOut('slow');
        $('.eigth-img').fadeIn('slow');
    })

    $('.brandFour').mouseleave(function() {
        $('.seventh-img').fadeIn('slow');
        $('.eigth-img').fadeOut('slow');
    })

    $('.brandFive').mouseenter(function() {
        $('.nineth-img').fadeOut('slow');
        $('.tenth-img').fadeIn('slow');
    })

    $('.brandFive').mouseleave(function() {
        $('.nineth-img').fadeIn('slow');
        $('.tenth-img').fadeOut('slow');
    })

    $('.brandSix').mouseenter(function() {
        $('.eleventh-img').fadeOut('slow');
        $('.twelfth-img').fadeIn('slow');
    })

    $('.brandSix').mouseleave(function() {
        $('.eleventh-img').fadeIn('slow');
        $('.twelfth-img').fadeOut('slow');
    })

    $('.brandSeven').mouseenter(function() {
        $('.thirteenth-img').fadeOut('slow');
        $('.fourteenth-img').fadeIn('slow');
    })

    $('.brandSeven').mouseleave(function() {
        $('.thirteenth-img').fadeIn('slow');
        $('.fourteenth-img').fadeOut('slow');
    })

    $('.brandEight').mouseenter(function() {
        $('.fifteenth-img').fadeOut('slow');
        $('.sixteenth-img').fadeIn('slow');
    })

    $('.brandEight').mouseleave(function() {
        $('.fifteenth-img').fadeIn('slow');
        $('.sixteenth-img').fadeOut('slow');
    })

    $('.brandNine').mouseenter(function() {
        $('.seventeenth-img').fadeOut('slow');
        $('.eighteenth-img').fadeIn('slow');
    })

    $('.brandNine').mouseleave(function() {
        $('.seventeenth-img').fadeIn('slow');
        $('.eighteenth-img').fadeOut('slow');
    })

    $('.brandTen').mouseenter(function() {
        $('.nineteenth-img').fadeOut('slow');
        $('.twentieth-img').fadeIn('slow');
    })

    $('.brandTen').mouseleave(function() {
        $('.nineteenth-img').fadeIn('slow');
        $('.twentieth-img').fadeOut('slow');
    })



}); /* END OF DOCUMENT READY */


