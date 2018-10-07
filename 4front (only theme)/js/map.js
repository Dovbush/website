$(document).ready(function () {

    function initialize() {

        var map;
        var mapCoordinates;

        mapCoordinates = new google.maps.LatLng(55.6001509, 12.9972613);

        var mapOptions = {  

            backgroundColor: "#142a2f", // background color
            zoom: 16, // scale
            disableDefaultUI: true,
            draggable: true,
            scrollwheel: true,
            center: mapCoordinates,
            mapTypeId: google.maps.MapTypeId.ROADMAP,

            //----------- styles ----------
            styles: [
                {
                    "featureType": "landscape.natural",
                    "elementType": "geometry.fill",
                    "stylers": [
                        { "color": "#326a77" }
                    ]
                },
                {
                    "featureType": "landscape.man_made",
                    "stylers": [
                        { "color": "#f7941e" },
                        { "visibility": "off" }
                    ]
                },
                {
                   "featureType": "water",
                   "stylers": [
                       { "color": "#80C8E5" },  // water color
                       { "saturation": 0 }
                   ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        { "color": "#D7D7D7" }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        { "visibility": "off" }
                  ]
                },
                {
                    "elementType": "labels.text",
                    "stylers": [
                        { "color": "#ffffff" }
                    ]
                },
                {
                    "featureType": "poi",
                    "stylers": [
                        { "visibility": "off" }
                    ]
                }
            ]
        //------------ end --------------
        };

        map = new google.maps.Map(document.getElementById('map'), mapOptions);

        var marker = new google.maps.Marker({
            position: mapCoordinates,
            map: map,
            icon: {
                url: "/wp-content/themes/4front/images/marker.png", 
            }
        });

    } 

    google.maps.event.addDomListener(window, 'load', initialize);

});
