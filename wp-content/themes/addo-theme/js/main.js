$(document).ready(function() {

    /* SCRIPT TO SMOOTH SCROLL */


    // $('a[href*="#"]:not([href="#"])').click(function() {
    //     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    //         var target = $(this.hash);
    //         target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    //         if (target.length) {
    //             $('html, body').animate({
    //                 scrollTop: target.offset().top
    //             }, 1000);
    //             return false;
    //         }
    //     }
    // });


    /* SCRIPT FOR SIDE MENU SLIDE OUT ON CLICK */
    $('.buttonset').click(function() {
        $('.pushmenu').toggleClass('pushmenu-open');
        $('#page').toggleClass('pushmenu-push-toright');
        $('.buttonset').toggleClass('active');
        $('.buttonset').toggleClass('pushmenu-push-toright');
        // $('#brandsModal').toggleClass('active');
        $('.modal-body').toggleClass('pushmenu-push-toright');

    });


    Typed.new('.element', {
        strings: ["For the love of toys.", "For the love of playing.", "For the love of entertainment."],
        typeSpeed: 0
    });


    /* MAIN SCRIPT FOR FULLPAGE JS */
    $('#fullpage').fullpage({
        anchors: ['Home', 'AboutUs', 'OurBrands', 'News', 'ContactUs'],
        animateAnchor: true,
        responsiveWidth: 992,
        responsiveSlides: false,
        lazyLoading: true,
        afterResponsive: function(isResponsive) {
            // alert("Is responsive: " + isResponsive);
        },

        onLeave: function(index, nextIndex, direction) {
            var leavingSection = $(this);

            //after leaving section 2
            if (index == 2 && direction == 'down') {
                // alert("Going to section 3!");
                $('.image-top').addClass('js-animate--top');
                $('.image-bottom').addClass('js-animate--bottom');

                $('.splatter').addClass('js-animate--splatter');
                $('.shop-btn button').addClass('js-animate--splatter');

            } else if (index == 3 && direction == 'up') {
                $('.image-top').removeClass('js-animate--top');
            }
        }
    });

    /* SCRIPT TOGGLE BETWEEN FORM AND MAP */
    // $('.cloud-btn').click(function() {
    //     $('.map-content').toggle();
    //     $('.form-content').toggle();
    //
    // });

    /* SCRIPT TO CHANGE CONTENT OF BUTTON ON CONTACT SECTION */
    // $("#cloud-btn").click(function() {
    //     $(".cloud-p").fadeOut(function() {
    //         $(".cloud-p").text(($(".cloud-p").text() == 'Contact Us') ? 'Find Us' : 'Contact Us').fadeIn();
    //     })
    // })

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

    $('#teamOne').hover(function() {
        $('#team-one').toggleClass('js-team-content');
        //  alert('this is working');
    });

    $('#teamTwo').hover(function() {
        $('#team-two').toggleClass('js-team-content');
        //  alert('this is working');
    });

    $('#teamThree').hover(function() {
        $('#team-three').toggleClass('js-team-content');
        //  alert('this is working');
    });

    $('#teamFour').hover(function() {
        $('#team-four').toggleClass('js-team-content');
        //  alert('this is working');
    });

    $('#teamFive').hover(function() {
        $('#team-five').toggleClass('js-team-content');
        //  alert('this is working');
    });

    $('#teamSix').hover(function() {
        $('#team-six').toggleClass('js-team-content');
        //  alert('this is working');
    });

    $('#teamSeven').hover(function() {
        $('#team-seven').toggleClass('js-team-content');
        //  alert('this is working');
    });

    $('#teamEight').hover(function() {
        $('#team-eight').toggleClass('js-team-content');
        //  alert('this is working');
    });

    $('#teamNine').hover(function() {
        $('#teamNine').toggleClass('js-team-content');
        //  alert('this is working');
    });

    $('#teamTen').hover(function() {
        $('#team-ten').toggleClass('js-team-content');
        //  alert('this is working');
    });

    $('#teamEleven').hover(function() {
        $('#team-eleven').toggleClass('js-team-content');
        //  alert('this is working');
    });

    $('#teamTwelve').hover(function() {
        $('#team-twelve').toggleClass('js-team-content');
        //  alert('this is working');
    });



    /* SCRIPT FOR BRAND SLIDER */
    $('.brandSlider').slick({
        autoplay: false,
        dots: false,
        arrows: true,
        slidesToShow: 1,
        nextArrow: '<i class="fa fa-angle-right"></i>',
        prevArrow: '<i class="fa fa-angle-left"></i>',

    });



    /* SCRIPT TO STOP SCROLL OF FULLPAGE JS ON MODAL ACTIVATION */
    $('#js-seeTeam').click(function() {
        // alert('this is working');
        $.fn.fullpage.setAllowScrolling(false);
        $.fn.fullpage.setKeyboardScrolling(false);
    })

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
            delay: 500
        });

        var machine2 = $("#machine2").slotMachine({
            active: 0,
            delay: 500,
            direction: 'down'
        });

        var machine3 = $("#machine3").slotMachine({
            active: 0,
            delay: 500
        });

        var machine4 = $("#machine4").slotMachine({
            active: 0,
            delay: 500
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
            }, 500);

            setTimeout(function() {
                machine3.shuffle(5, onComplete);
            }, 1000);

            setTimeout(function() {
                machine4.shuffle(5, onComplete);
            }, 1500);

        })
    });


});