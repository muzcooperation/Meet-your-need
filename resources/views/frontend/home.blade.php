@extends('layouts.frontend')

@section('content')

<!-- <div class="contanier bg-light">
	<div class="row">
		<div id="carouselExampleControls" class="carousel slide col-8" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active" style="height: 415px;">
		      <img class="d-block w-100" src="https://www.worldatlas.com/r/w728-h425-c728x425/upload/10/d6/61/harvard-university.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item" style="height: 415px;">
		      <img class="d-block w-100" src="https://cdn.mtlblog.com/uploads/288462_c6e337d8cf4b1b64f3a5635ae02a23f8a7fb3521.jpg_facebook.jpg">
		    </div>
		    <div class="carousel-item" style="height: 415px;">
		      <img class="d-block w-100" src="http://images.indianexpress.com/2016/10/stanford_university-759.jpg" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

		<div class="col-4 no-gutters" style="padding: 0px; margin: 0px; !important">
			<div class="card">
			  <div class="card-header">
			    Most Popular Locations
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

			<div class="card mt-2">
			  <div class="card-header">
			    Most Visited Locations
			  </div>
			  <div class="card-body">
			     <ul>
			    	<li><a href="">Japan</a></li>
			    	<li><a href="">China</a></li>
			    	<li><a href="">Dubai</a></li>
			    	<li><a href="">Australia</a></li>
			    </ul>
			    
			  </div>
			</div>
		</div>
	</div>	
</div> -->

<!-- Page Content -->
<div class="container my-5">

  <!-- Heading Row -->
  <div class="row home-div">
    <div id="carouselExampleControls" class="carousel slide col-lg-8" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active" style="height: 415px;">
	      <img class="d-block w-100" src="https://www.worldatlas.com/r/w728-h425-c728x425/upload/10/d6/61/harvard-university.jpg" alt="First slide">
	    </div>
	    <div class="carousel-item" style="height: 415px;">
	      <img class="d-block w-100" src="https://cdn.mtlblog.com/uploads/288462_c6e337d8cf4b1b64f3a5635ae02a23f8a7fb3521.jpg_facebook.jpg">
	    </div>
	    <div class="carousel-item" style="height: 415px;">
	      <img class="d-block w-100" src="http://images.indianexpress.com/2016/10/stanford_university-759.jpg" alt="Third slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
    <!-- /.col-lg-8 -->
    <div class="col-lg-4">
      <h1>Meet Your Need or Tagline</h1>
      <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
    </div>
    <!-- /.col-md-4 -->
  </div>
  <!-- /.row -->

  <!-- Call to Action Well -->
  <div class="card text-white bg-secondary my-4 text-center">
    <div class="card-body">
      <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
    </div>
  </div>

  <!-- Content Row -->
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
  </div>
  <!-- /.row -->

</div>
<script src="{{ asset('/js/map.js') }}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key={{config('constants.google_api_key')}}"></script>

@endsection