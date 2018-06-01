@extends('layouts.frontend')

@section('content')

<div class="contanier bg-light">
	<div class="row">
		<div id="carouselExampleControls" class="carousel slide col-8" data-ride="carousel">
		  <div class="carousel-inner">
		  	<!-- @foreach($data as $val)
			  <div class="carousel-item" style="height: 415px;">
			      <img class="d-block w-100" src="{{ $val }}">
			  </div>
			@endforeach -->
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
</div>


@endsection