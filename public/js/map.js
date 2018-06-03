var map;
var infowindow;
var currLat;
var currLong;
var markers = [];
var bounds;
var service;
var placeType;

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

function showPosition(position) {
  currLat = position.coords.latitude;
  currLong = position.coords.longitude;

  map = new google.maps.Map($('#map')[0], {
      center: {lat: currLat, lng: currLong},
      zoom: 20
  });

  if (markers.length) {
    deleteMarkers();
  } 

  placeType = getUrlVars()["loc"];

  if (placeType) {
    var radius = 5000;

    var location = {lat: currLat, lng: currLong};
    infowindow = new google.maps.InfoWindow();
    service = new google.maps.places.PlacesService(map);
    service.nearbySearch({
      location: location,
      radius: radius,
      type: [placeType]
    }, nearByPlaceCallback);
  }
}

function initMap() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
      
  }
}

function searchNearByLocations() {
  placeType = $('#places').find(":selected").text();
  placeType = placeType.toLowerCase();

  if (placeType == 'hotel') {
    placeType = 'lodging';
  }
  
  if (placeType != 'select place') {
  //Redirect with data

  /*  var form = document.createElement('form');
    document.body.appendChild(form);
    form.method = 'get';
    form.action = 'http://localhost/places/public/frontend/map';
    var input = document.createElement('input');
    input.name = 'location';
    input.value = placeType;
    form.appendChild(input);
    form.submit();*/


    //Simple redirect

    if (window.location.pathname.split("/").pop() == 'home') {
      window.location = 'http://localhost/places/public/map?loc=' + placeType;
    } else {
      if (markers.length) {
        deleteMarkers();
      } 

      var radius = 5000;

      var location = {lat: currLat, lng: currLong};
      infowindow = new google.maps.InfoWindow();
      service = new google.maps.places.PlacesService(map);

      console.log(placeType, 'map');

      service.nearbySearch({
        location: location,
        radius: radius,
        type: [placeType]
      }, nearByPlaceCallback);
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

        /*var width = $(document).width() * 0.25;
        width = parseInt(width);

        var thumbnail = place.photos ? place.photos[0].getUrl({maxWidth: width}) : place.icon;
        var name = place.name ? place.name : 'No Name';
        var address = placedetail.formatted_address ? placedetail.formatted_address : 'No Address';
        var contact = placedetail.formatted_phone_number ? placedetail.formatted_phone_number : 'No Contact Info';
        var reviews = placedetail.reviews;

        $('#thumbnail').attr('src', thumbnail);
        $('#name').html('<strong>Name: </strong>' + name);
        $('#address').html('<strong>Adress: </strong>' + address);
        $('#contact-info').html('<strong>Contact Info: </strong>' + contact);
        $('#reviews-link').text('Reviews');
        $('#reviews').html('<ul></ul>');

        if (reviews) {
          reviews.map((review) => {
            $('#reviews').append('<li>' + review.author_name + '</li>');
          });
        }

        $('#mySidenav').css('width', '25%');*/

        var form = $('#locationDetail')[0];
        document.body.appendChild(form);
        form.method = 'post';
        form.action = 'http://localhost/places/public/location-detail';
        var input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'data';
        input.value = JSON.stringify(placedetail);
        form.appendChild(input);
        form.submit();

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