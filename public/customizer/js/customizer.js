"use strict"; // Start of use strict

var skinCssFolder = 'css/skin/';
var menuStickyClass = $('.main-header.stricky');


if ( $('.customizer-box button.toggler').length ) {
	$('.customizer-box button.toggler').on('click', function () {
		$('.customizer-box').toggleClass('off on');
	});
};


// function for style switcher
function swithcerMenu () {
  if ($('.customizer-box').length) {

    $('.pattern-box').on('click', function () {
        $('.pattern-box').each(function () {
            $('html').removeClass( $(this).data('pattern-name') );
        });
        var className = $(this).data('pattern-name');
        $('html').addClass(className);
        console.log(className);
    });
    $(".customizer-box .navigation-switch").on('click', function(){
        var checker = $(this).find('input');
        if (checker.is(':checked')) {
            menuStickyClass.removeClass('stricky-fixed');    
            menuStickyClass.addClass('static');    
        }else {
            menuStickyClass.addClass('stricky-fixed');    
            menuStickyClass.removeClass('static');    
        };
        
    });

    $(".customizer-box #boxed").on('click', function(){
        Cookies.remove('boxed-layout');
        Cookies.set('boxed-layout', 'boxed', { expires: 365, path: '/' });
        $('body').removeClass('full-width');
        $('body').addClass('boxed');
    });
    $(".customizer-box #full-box").on('click', function(){
        Cookies.remove('boxed-layout');
        $('body').removeClass('boxed');
        $('body').addClass('full-width');
        Cookies.set('boxed-layout', 'full-width', { expires: 365, path: '/' });
    });

    $('#styleOptions').styleSwitcher({
    	hasPreview: false,
        fullPath: skinCssFolder,
         cookie: {
          expires: 999,
          isManagingLoad: true
        }
    });
    

    // chnage the theme related img/logo
    $('#styleOptions .color1').on('click',function() {      
        
        Cookies.remove('logo-img-light');
        Cookies.remove('logo-img-dark');
        Cookies.remove('price-icon');
        Cookies.remove('404-icon');
        Cookies.remove('map-skin');

        Cookies.set('logo-img-light', 'skin/color1/img/logo-light.png', { expires: 365, path: '/' });
        Cookies.set('logo-img-dark', 'skin/color1/img/logo.png', { expires: 365, path: '/' });
        Cookies.set('price-icon', 'skin/color1/img/price-icon.png', { expires: 365, path: '/' });
        Cookies.set('404-icon', 'skin/color1/img/404-icon.png', { expires: 365, path: '/' });
        Cookies.set('map-skin','skin-1', { expires: 365, path: '/' });
    });

    // chnage the theme related img/logo
    $('#styleOptions .color2').on('click',function() {      
        
        Cookies.remove('logo-img-light');
        Cookies.remove('logo-img-dark');
        Cookies.remove('price-icon');
        Cookies.remove('404-icon');
        Cookies.remove('map-skin');
        
        Cookies.set('logo-img-light', 'skin/color2/img/logo-light.png', { expires: 365, path: '/' });
        Cookies.set('logo-img-dark', 'skin/color2/img/logo.png', { expires: 365, path: '/' });
        Cookies.set('price-icon', 'skin/color2/img/price-icon.png', { expires: 365, path: '/' });
        Cookies.set('404-icon', 'skin/color2/img/404-icon.png', { expires: 365, path: '/' });
        Cookies.set('map-skin','skin-2', { expires: 365, path: '/' });
    });
    // chnage the theme related img/logo
    $('#styleOptions .color3').on('click',function() {      
        
        Cookies.remove('logo-img-light');
        Cookies.remove('logo-img-dark');
        Cookies.remove('price-icon');
        Cookies.remove('404-icon');
        Cookies.remove('map-skin');

        Cookies.set('logo-img-light', 'skin/color3/img/logo-light.png', { expires: 365, path: '/' });
        Cookies.set('logo-img-dark', 'skin/color3/img/logo.png', { expires: 365, path: '/' });
        Cookies.set('price-icon', 'skin/color3/img/price-icon.png', { expires: 365, path: '/' });
        Cookies.set('404-icon', 'skin/color3/img/404-icon.png', { expires: 365, path: '/' });
        Cookies.set('map-skin','skin-3', { expires: 365, path: '/' });
    });
    // chnage the theme related img/logo
    $('#styleOptions .color4').on('click',function() {    	
    	
    	Cookies.remove('logo-img-light');
        Cookies.remove('logo-img-dark');
        Cookies.remove('price-icon');
        Cookies.remove('404-icon');
    	Cookies.remove('map-skin');

        Cookies.set('logo-img-light', 'skin/color4/img/logo-light.png', { expires: 365, path: '/' });
    	Cookies.set('logo-img-dark', 'skin/color4/img/logo.png', { expires: 365, path: '/' });
        Cookies.set('price-icon', 'skin/color4/img/price-icon.png', { expires: 365, path: '/' });
        Cookies.set('404-icon', 'skin/color4/img/404-icon.png', { expires: 365, path: '/' });
    	Cookies.set('map-skin','skin-4', { expires: 365, path: '/' });
    });

     // var $imgsrc = $.cookie('mycookieimg');    
    // $('.header .menuzord-brand img').attr('src', Cookies.get('logo-img-light'));
    $('.header .header-navigation.navbar > .container .navbar-brand img').attr('src', Cookies.get('logo-img-dark'));
    $('.header-lower.navbar .navbar-brand img').attr('src', Cookies.get('logo-img-light'));
    $('.footer-logo img').attr('src', Cookies.get('logo-img-light'));
    $('img.price-icon').attr('src', Cookies.get('price-icon'));
    $('img.404-icon').attr('src', Cookies.get('404-icon'));
    $('body').addClass(Cookies.get('boxed-layout'));
	$('.google-map').addClass(Cookies.get('map-skin'));
	// console.log(Cookies.get());

  };
}
swithcerMenu();