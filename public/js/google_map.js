
var google;

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}

function showPosition(position) {
    var lat = (position) ? position.coords.latitude : 29.443134;
    var lon = (position) ? position.coords.longitude : -98.48138;
    init(lat, lon);
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            alert("User denied the request for Geolocation.")
            break;
        case error.PERMISSION_UNAVAILABLE:
            alert("Location information is unavailable.")
            break;
        case error.TIMEOUT:
            alert("The request to get user location timed out.")
            break;
        case error.UNKNOWN_ERROR:
            alert("An unknown error occurred.")
            break;
    }
    showPosition();
}

function init(lat, lon) {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    
    lat = 29.426791;
    lon = -98.489602;
    
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 12,

        // The latitude and longitude to center the map (always required)
        center: {
                lat: lat,
                lng: lon
            },

        // How you would like to style the map. 
        scrollwheel: false,
        styles: [
                {
                    "featureType":"administrative.land_parcel",
                    "elementType":"all",
                    "stylers":[{
                        "visibility":"off"
                    }]
                },{
                    "featureType":"landscape.man_made",
                    "elementType":"all",
                    "stylers":[{
                        "visibility":"off"
                    }]
                },{
                    "featureType":"poi",
                    "elementType":"labels",
                    "stylers":[{
                        "visibility":"off"
                    }]
                },{
                    "featureType":"road",
                    "elementType":"labels",
                    "stylers":[{
                        "visibility":"simplified"
                    },{
                        "lightness":-20
                    }]
                },{
                    "featureType":"road.highway",
                    "elementType":"geometry",
                    "stylers":[{
                        "hue":"#00ffe6"
                    }]
                },{
                    "featureType":"road.highway",
                    "elementType":"labels",
                    "stylers":[{
                        "visibility":"simplified"
                    }]
                },{
                    "featureType":"road.arterial",
                    "elementType":"geometry",
                    "stylers":[{
                        "hue":"#00ffe6"
                    }]
                },{
                    "featureType":"road.arterial",
                    "elementType":"labels",
                    "stylers":[{
                        "visibility":"off"
                    }]
                },{
                    "featureType":"road.local",
                    "elementType":"geometry",
                    "stylers":[{
                        "visibility":"simplified"
                    }]
                },{
                    "featureType":"road.local",
                    "elementType":"labels",
                    "stylers":[{
                        "visibility":"simplified"
                    }]
                },{
                    "featureType":"transit",
                    "elementType":"all",
                    "stylers":[{
                        "visibility":"off"
                    }]
                },{
                    "featureType":"water",
                    "elementType":"all",
                    "stylers":[{
                        "hue":"#00ffe6"
                    },{
                        "saturation": -20
                    },{
                        "lightness": 100
                    }]
                }]
        // styles: [{
        //     "featureType": "all",
        //     "elementType": "all",
        //     "stylers": [{
        //             "invert_lightness": true
        //         },{
        //             "saturation": 20
        //         },{
        //             "lightness": 50
        //         },{
        //             "gamma": 0.4
        //         },{
        //             "hue": "#00ffee"
        //         }]
        // },{
        //     "featureType": "all",
        //     "elementType": "geometry",
        //     "stylers": [{
        //             "visibility": "simplified"
        //         }]
        // },{
        //     "featureType": "all",
        //     "elementType": "labels",
        //     "stylers": [{
        //             "visibility": "on"
        //         }]
        // },{
        //     "featureType": "administrative",
        //     "elementType": "all",
        //     "stylers": [{
        //             "color": "#ffffff"
        //         },{
        //             "visibility": "simplified"
        //         }]
        // },{
        //     "featureType": "administrative.land_parcel",
        //     "elementType": "geometry.stroke",
        //     "stylers": [{
        //             "visibility": "simplified"
        //         }]
        // },{
        //     "featureType": "landscape",
        //     "elementType": "all",
        //     "stylers": [{
        //             "color": "#405769"
        //         }]
        // },{
        //     "featureType": "water",
        //     "elementType": "geometry.fill",
        //     "stylers": [{
        //             "color": "#232f3a"
        //         }]
        // }]
};


    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using out element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);
    
    // var latlng = new google.maps.LatLng(lat, lon);
    // new google.maps.Marker({
    //     position: latlng,
    //     map: map
    // });
    
}
google.maps.event.addDomListener(window, 'load', init);