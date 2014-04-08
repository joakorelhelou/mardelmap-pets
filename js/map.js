/*
 Common functions for Google Maps
 * */

var map;
var geocoder;
var marker;

function initialize(div, city) {
	var mapOptions = {
		center : new google.maps.LatLng(0, 0),
		zoom : 12,
		mapTypeId : google.maps.MapTypeId.ROADMAP
	};
	map = new google.maps.Map(document.getElementById(div), mapOptions);
	geocoder = new google.maps.Geocoder();

	codeLocation(city);

}

///Given a location address, add a marker to it, if an info value is set, add an Info Window with its content
function markLocation(address, info) {

	geocoder.geocode({
		'address' : address
	}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);

			marker = new google.maps.Marker({
				map : map,
				position : results[0].geometry.location,
				title : 'latlong'
			});

			if (info != undefined) {
				var infoWindow = retrieveInfoWindow(info);
				infoWindow.open(map, marker);
			}

			google.maps.event.addListener(marker, 'click', function() {
				$('#addModal').modal('show');
			});

		} else {
			alert("La direccion no pudo encontrarse. Error: " + status);
		}
	});

}

function dropMarker() {
	marker.setMap(null);
}

function codeLocation(city) {

	geocoder.geocode({
		'address' : city
	}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);

		} else {
			alert("La localización no pudo encontrarse. Error: " + status);
		}
	});

}

//Create and return a new Info Window with the given text or HTML
function retrieveInfoWindow(info) {
	var infoWindow = new google.maps.InfoWindow({
		content : info
	});
	return infoWindow;
}

