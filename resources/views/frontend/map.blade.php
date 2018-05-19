@extends('layouts.frontend')

@section('content')
<div id="map"></div>
<script>
    var currLat; 
    var currLong;

    function showPosition(position) {
      currLat = position.coords.latitude;
      currLong = position.coords.longitude;

      map = new google.maps.Map($('#map')[0], {
          center: {lat: currLat, lng: currLong},
          zoom: 20
      });
    }
  
    var map;
    function initMap() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else { 
          
      }
    }
    // console.log($('#places').find(":selected").val());
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{config('constants.google_api_key')}}&callback=initMap"
async defer></script>
@endsection

