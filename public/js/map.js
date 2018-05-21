var map;
var infowindow;
var currLat;
var currLong;
var markers = [];
var bounds;
var service;

function showPosition(position) {
  currLat = position.coords.latitude;
  currLong = position.coords.longitude;

  map = new google.maps.Map($('#map')[0], {
      center: {lat: currLat, lng: currLong},
      zoom: 20
  });

}

function initMap() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
      
  }
}

function searchNearByLocations() {
  if (markers.length) {
    deleteMarkers();
  } 

  var placeType = $('#places').find(":selected").text();
  placeType = placeType.toLowerCase();
  
  if (placeType != 'select place') {
    var radius = $('#radius').val();

    if (radius) {
      var location = {lat: currLat, lng: currLong};
      infowindow = new google.maps.InfoWindow();
      service = new google.maps.places.PlacesService(map);

      service.nearbySearch({
        location: location,
        radius: radius,
        type: [placeType]
      }, nearByPlaceCallback);

    } else {
      alert('please enter radius');
    }
  } else {
    alert('please select a place');
  }
}

function nearByPlaceCallback(results, status) {
  console.log(results);
  if (results.length <= 0) {
    alert('No location found');
    return;
  }

  if (status === google.maps.places.PlacesServiceStatus.OK) {
    bounds = new google.maps.LatLngBounds();

    for (var i = 0; i < results.length; i++) {
      createMarker(results[i]);
    }

    map.fitBounds(bounds); 
  }
}

function createMarker(place) {
  var placeLoc = place.geometry.location;
  var marker = new google.maps.Marker({
    map: map,
    position: place.geometry.location
  });

  markers.push(marker);

  bounds.extend(marker.getPosition());

  google.maps.event.addListener(marker, 'click', () => {
    // infowindow.setContent(place.name);
    // infowindow.open(map, this);
    var request = {
      placeId: place.place_id
    };

    service = new google.maps.places.PlacesService(map);
    service.getDetails(request, (placedetail, status) => {
      console.log(placedetail, 'dd', place);
      if (status == google.maps.places.PlacesServiceStatus.OK) {

        var width = $(document).width() * 0.25;
        width = parseInt(width);

        var thumbnail = place.photos ? place.photos[0].getUrl({maxWidth: width}) : place.icon;

        $('#thumbnail').attr('src', thumbnail);
        $('#name').html('<strong>Name: </strong>' + place.name);
        $('#address').html('<strong>Adress: </strong>' + placedetail.formatted_address);
        $('#contact-info').html('<strong>Contact Info: </strong>' + placedetail.formatted_phone_number);
        $('#mySidenav').css('width', '25%');

      }
    });
  });
}

// Sets the map on all markers in the array.
function setMapOnAll(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
  setMapOnAll(null);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
  clearMarkers();
  markers = [];
}