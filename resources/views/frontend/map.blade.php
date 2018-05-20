@extends('layouts.frontend')

@section('content')
<div id="map"></div>

<script src="{{ asset('/js/map.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key={{config('constants.google_api_key')}}&&libraries=places&callback=initMap"
async defer></script>

@endsection

