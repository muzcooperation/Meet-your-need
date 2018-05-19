@extends('layouts.frontend')

@section('content')
<div id="map"></div>
<script>

    var map;
    var infowindow;
    var currLat;
    var currLong;
    var markers = [];

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
      var placeType = $('#places').find(":selected").text();
      placeType = placeType.toLowerCase();
      
      if (placeType != 'Select Place') {
        var radius = $('#radius').val();

        if (radius) {
          var location = {lat: currLat, lng: currLong};
          infowindow = new google.maps.InfoWindow();
          var service = new google.maps.places.PlacesService(map);

          service.nearbySearch({
            location: location,
            radius: radius,
            type: [placeType]
          }, callback);

          // var bounds = new google.maps.LatLngBounds();


          // for (let i = 0; i < markers.length; i++) {
          //   const marker = markers[i];
          //   const newPoint = new google.maps.LatLng(marker.lat, marker.lng);
          //   bounds.extend(newPoint);
          // }

          // map.fitBounds(bounds);

          // bounds.extend(marker.getPosition());
          // map.fitBounds(bounds);

          //remove one zoom level to ensure no marker is on the edge.
          //map.setZoom(map.getZoom()-1);
        } else {
          alert('please enter radius');
        }
      } else {
        alert('please select a place');
      }
    }

    function callback(results, status) {
      console.log(results);
      if (status === google.maps.places.PlacesServiceStatus.OK) {
        for (var i = 0; i < results.length; i++) {
          createMarker(results[i]);
        }
      }
    }

    function createMarker(place) {
      var placeLoc = place.geometry.location;
      var bounds = new google.maps.LatLngBounds();
      var marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location
      });

      // markers.push(marker);
      map.fitBounds(bounds);

      bounds.extend(marker.getPosition());
      map.fitBounds(bounds);

      // remove one zoom level to ensure no marker is on the edge.
      map.setZoom(map.getZoom()-1);

      google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(place.name);
        infowindow.open(map, this);
      });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{config('constants.google_api_key')}}&&libraries=places&callback=initMap"
async defer></script>
@endsection

