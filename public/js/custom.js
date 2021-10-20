/***************************************************************************************************************
||||||||||||||||||||||||||||         CUSTOM SCRIPT FOR MEDI PLUS            ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************
||||||||||||||||||||||||||||              TABLE OF CONTENT                  ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************
****************************************************************************************************************
1 revolutionSliderActiver
2 galleryMasonaryLayout
3 accrodion
4 teamCarosule
5 testiCarosule
6 CounterNumberChanger
7 stickyHeader
8 contactFormValidation
9 selectInput
10 datePicker
11 gMap
12 mobileMenu
****************************************************************************************************************
||||||||||||||||||||||||||||            End TABLE OF CONTENT                ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************/

function GalleryFancyboxActivator() {
    var galleryFcb = $('.fancybox');
    if (galleryFcb.length) {
        galleryFcb.fancybox({
            helpers: {
                overlay: {
                    locked: false
                }
            }
        });
    }
}

// 1. revolution slider
function revolutionSliderActiver() {
    if ($('.rev_slider_wrapper .slider1').length) {
        jQuery(".slider1").revolution({
            sliderType: "standard",
            sliderLayout: "auto",
            delay: 5000,
            navigation: {
                touch: {
                    touchenabled: "off"
                },
                arrows: {
                    style: "hermes",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: false,
                    tmp: '<div class="tp-arr-allwrapper">   <div class="tp-arr-imgholder"></div>    <!--<div class="tp-arr-titleholder">{{title}}</div>--> </div>',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 0,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 0,
                        v_offset: 0
                    }
                }
            },
            gridwidth: 1170,
            gridheight: 920
        });
    };
}



function menu() {
    //Submenu Dropdown Toggle
    if ($('.main-header li.dropdown ul').length) {
        $('.main-header li.dropdown').append('<div class="dropdown-btn"></div>');

        //Dropdown Button
        $('.main-header li.dropdown .dropdown-btn').on('click', function() {
            $(this).prev('ul').slideToggle(500);
        });
    }

}



// Accordion
function accordion() {
    if ($('.accordion-box').length) {
        $('.accordion-box .acc-btn').on('click', function() {
            if ($(this).hasClass('active') !== true) {
                $('.accordion-box .acc-btn').removeClass('active');
            }

            if ($(this).next('.acc-content').is(':visible')) {
                $(this).removeClass('active');
                $(this).next('.acc-content').slideUp(500);
            } else {
                $(this).addClass('active');
                $('.accordion-box .acc-content').slideUp(500);
                $(this).next('.acc-content').slideDown(500);
            }
        });
    }
}




// Brand Carousel
function brandCarousel() {
    if ($('.brand').length) {
        $('.brand').owlCarousel({
            dots: false,
            loop: true,
            margin: 30,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            autoplayHoverPause: true,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 3
                },
                1024: {
                    items: 4
                },
                1100: {
                    items: 5
                },
                1200: {
                    items: 6
                }
            }
        });
    }
}


// Brand Carousel
function testiCarosule() {
    if ($('.testi-owl').length) {
        $('.testi-owl').owlCarousel({
            dots: true,
            loop: true,
            margin: 30,
            nav: false,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            autoplayHoverPause: true,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                800: {
                    items: 2
                },
                1024: {
                    items: 2
                },
                1100: {
                    items: 3
                },
                1200: {
                    items: 3
                }
            }
        });
    }
}

// 8. sticky header
function stickyHeader() {
    if ($('.stricky').length) {
        var strickyScrollPos = 100;
        if ($(window).scrollTop() > strickyScrollPos) {
            // $('.stricky').removeClass('fadeIn animated');
            // $('.stricky').addClass('stricky-fixed fadeInDown animated');
            $('.scroll-to-top').fadeIn(500);
            $('.stricky').addClass('stricky-fixed');
        } else if ($(this).scrollTop() <= strickyScrollPos) {
            $('.stricky').removeClass('stricky-fixed');
            // $('.stricky').removeClass('stricky-fixed fadeInDown animated');
            // $('.stricky').addClass('slideIn animated');
            $('.scroll-to-top').fadeOut(500);
        }
    };
}




function galleryMasonaryLayout() {
    if ($('.masonary-layout').length) {
        $('.masonary-layout').isotope({
            layoutMode: 'masonry'
        });
    }

    if ($('.post-filter').length) {
        $('.post-filter li').children('span').on('click', function() {
            var Self = $(this);
            var selector = Self.parent().attr('data-filter');
            $('.post-filter li').children('span').parent().removeClass('active');
            Self.parent().addClass('active');
            $('.filter-layout').isotope({
                filter: selector,
                stagger: 30,
                transitionDuration: 400,
                hiddenStyle: {
                    opacity: 0
                },
                visibleStyle: {
                    opacity: 1
                }
            });
            return false;
        });
    }

    if ($('.post-filter.has-dynamic-filter-counter').length) {
        // var allItem = $('.single-filter-item').length;

        var activeFilterItem = $('.post-filter.has-dynamic-filter-counter').find('li');

        activeFilterItem.each(function() {
            var filterElement = $(this).data('filter');
            console.log(filterElement);
            var count = $('.gallery-content').find(filterElement).length;

            $(this).children('span').append('<span class="count"><b>' + count + '</b></span>');
        });
    };
}


// 4 teamCarosule
function servicesCarosule() {
    if ($('.services-carousel').length) {
        $('.services-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1200: {
                    items: 3
                }
            }
        });
    }
}


// 4 teamCarosule
function relatedproductCarosule() {
    if ($('.related-product-items').length) {
        $('.related-product-items').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1200: {
                    items: 3
                }
            }
        });
    }
}

// =5. shop price ranger
function priceRanger() {
    if ($('.price-ranger').length) {
        $('.price-ranger #slider-range').slider({
            range: true,
            min: 0,
            max: 1200,
            values: [0, 540.00],
            slide: function(event, ui) {
                $('.price-ranger .ranger-min-max-block .min').val('$' + ui.values[0]);
                $('.price-ranger .ranger-min-max-block .max').val('$' + ui.values[1]);
            }
        });
        $('.price-ranger .ranger-min-max-block .min').val('$' + $('.price-ranger #slider-range').slider('values', 0));
        $('.price-ranger .ranger-min-max-block .max').val('$' + $('.price-ranger #slider-range').slider('values', 1));
    };
}



function imageZoom() {
    // $('.zoom').magnify({
    //   speed: 200,
    //   src: '/img/shop-single/1-large.jpg'
    // });
}


function CounterNumberChanger() {
    var timer = $('.timer');
    if (timer.length) {
        timer.appear(function() {
            timer.countTo();
        })
    }

}

// 32. scoll to target
function scrollToTarget() {
    if ($('.scroll-to-target').length) {
        $(".scroll-to-target").on('click', function() {
            var target = $(this).attr('data-target');
            // animate
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 1000);

        });
    }
}



$(document).ready(function() {
    $('#polyglotLanguageSwitcher').polyglotLanguageSwitcher({
        effect: 'fade',
        testMode: true,
        onChange: function(evt) {
            alert("The selected language is: " + evt.selectedItem);
        }
    });
});

function cartTouchSpin() {
    if ($('.quantity-spinner').length) {
        $("input.quantity-spinner").TouchSpin({
            verticalbuttons: true
        });
    }
}


// Dom Ready Function
jQuery(document).on('ready', function() {
    (function($) {
        // add your functions
        menu();
        accordion();
        brandCarousel();
        servicesCarosule();
        relatedproductCarosule();
        priceRanger();
        imageZoom();
        // language();
        GalleryFancyboxActivator();
        testiCarosule();
        revolutionSliderActiver();
        scrollToTarget();
        cartTouchSpin();

    })(jQuery);
});






// 
jQuery(window).on('scroll', function() {
    (function($) {
        // add your functions
        stickyHeader();


    })(jQuery);
});






// window load function
jQuery(window).on('load', function() {
    (function($) {
        // add your functions
        galleryMasonaryLayout();
        CounterNumberChanger();

    })(jQuery);
});
