@extends('layouts.frontend')

@section('content')
<div id="map"></div>
<script>

    var map;
    var infowindow;
    var currLat;
    var currLong;
    var markers = [];
    var bounds;

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
      console.log(markers);
      if (markers.length) {
        deleteMarkers();
      } 

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

        } else {
          alert('please enter radius');
        }
      } else {
        alert('please select a place');
      }
    }

    function callback(results, status) {
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
        //remove one zoom level to ensure no marker is on the edge.
        map.setZoom(map.getZoom()-1); 
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
    
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(place.name);
        infowindow.open(map, this);
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
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{config('constants.google_api_key')}}&&libraries=places&callback=initMap"
async defer></script>
@endsection

