@extends('layouts.frontend')

@section('content')

<div id="map"></div>

<div class="row">
<div class="col-md-7 mb-4">
   <div class="card h-100">
      <div class="card-header bg-dark">
    <p class="text-center text-white">Most Popular Locations</p>
  </div>
  <div class="card-body">         
      <ul>
        <li><a href="">Lahore</a></li>
        <li><a href="">Karachi</a></li>
        <li><a href="">Quetta</a></li>
        <li><a href="">Peshawar</a></li>
      </ul>
  </div>
    </div>
</div>
<!-- /.col-md-4 -->
<div class="col-md-5 mb-4">
    <div class="card h-100">
      <div class="card-header bg-dark">
    <p class="text-white">Most Visited Locations</p>
  </div>
  <div class="card-body">           
      <ul>
        <li><a href="">Lahore</a></li>
        <li><a href="">Karachi</a></li>
        <li><a href="">Quetta</a></li>
        <li><a href="">Peshawar</a></li>
      </ul>
  </div>
    </div>
</div>
</div>

<form id="locationDetail">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

<!-- <div id="mySidenav" class="sidenav px-2">
  <img id="thumbnail"  src="">
  <p id="name"></p>
  <p id="address"></p>
  <p id="contact-info"></p>

  <a id="reviews-link" data-toggle="collapse" href="#collapseReviews" aria-expanded="false" aria-controls="collapseExample">
    
  </a>
  <div class="collapse" id="collapseReviews">
    <div class="card card-body" id="reviews">
      
    </div>
  </div>
</div> -->

<script src="{{ asset('/js/map.js') }}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key={{config('constants.google_api_key')}}&&libraries=places&callback=initMap"
async defer></script>

@endsection

