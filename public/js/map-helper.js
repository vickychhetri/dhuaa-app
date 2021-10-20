"use strict"; // Start of use strict

// 7. google map
function gMap () {
	if ($('.google-map').length) {
        $('.google-map').each(function () {
        	// getting options from html
        	var Self = $(this); 
        	var mapName = Self.attr('id');
        	var mapLat = Self.data('map-lat');
        	var mapLng = Self.data('map-lng');
        	var iconPath = Self.data('icon-path');
        	var mapZoom = Self.data('map-zoom');
        	var mapTitle = Self.data('map-title');
        	var markers = Self.data('markers');

        	// defined default style
        	var styles = [{"featureType":"landscape","stylers":[{"hue":"#FFBB00"},{"saturation":43.400000000000006},{"lightness":37.599999999999994},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#FFC200"},{"saturation":-61.8},{"lightness":45.599999999999994},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":51.19999999999999},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":52},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#0078FF"},{"saturation":-13.200000000000003},{"lightness":2.4000000000000057},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#00FF6A"},{"saturation":-1.0989010989011234},{"lightness":11.200000000000017},{"gamma":1}]}];

            if ($(this).hasClass('skin-1')) {
                var iconPath = 'skin/color1/img/map-marker.png';
            }
            if ($(this).hasClass('skin-2')) {
                var iconPath = 'skin/color2/img/map-marker.png';
            }
            if ($(this).hasClass('skin-3')) {
                var iconPath = 'skin/color3/img/map-marker.png';
            }
            if ($(this).hasClass('skin-4')) {
                var iconPath = 'skin/color4/img/map-marker.png';
            }

        	// if zoom not defined the zoom value will be 15;
        	if (!mapZoom) {
        		var mapZoom = 15;
        	};
        	// init map
        	var map;
            map = new GMaps({
                div: '#'+mapName,
                scrollwheel: false,
                lat: mapLat,
                lng: mapLng,
                styles: styles,
                zoom: mapZoom
            });
            // if icon path setted then show marker
            if(iconPath) {
                $.each(markers, function (index, value) {
                    var index = value;
                    var html;
                    if (index[2]) {
                        html = index[2];
                    };                    
                    if (!index[3]) {
                        index[3] = iconPath;
                    };
            
                    map.addMarker({
                        icon: index[3],                        
                        lat: index[0],
                        lng: index[1],
                        infoWindow: {
                          content: html
                        }
                    });   

                });
        	}
        });  
	};
}



// instance of fuction while Document ready event	
jQuery(document).on('ready', function () {
	(function ($) {
		gMap();
	})(jQuery);
});
