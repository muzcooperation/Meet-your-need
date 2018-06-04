@extends('layouts.frontend')

@section('content')
	<div>
		<div id="thumbnail-div" style="margin-top: 4%; height: 150px">
			<img id="thumbnail"  src="">
		</div>
	  
	  <p id="name"></p>
	  <p id="address"></p>
	  <p id="contact-info"></p>

	  <a id="reviews-link" data-toggle="collapse" href="#collapseReviews" aria-expanded="false" aria-controls="collapseExample">
	    
	  </a>
	  <div class="collapse" id="collapseReviews">
	    <div class="card card-body" id="reviews">
	      
	    </div>
	  </div>
	</div>

	<div class="tcb-carousel-reviews">
        <div class="container">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text ">
                                        <a title="" href="#">Movie One</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat excepturi et aliquam quaerat nam fugit sequi minus ipsa autem laudantium. Accusantium officiis deserunt totam voluptate soluta veritatis expedita animi numquam! ...</p>
                                        <ins class="sprite sprite-i-triangle"></ins>
                                    </div>
                                    <div class="person-text">
                                        <div class="reviewer">
                                            <img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/mantia/128.jpg" alt="">
                                        </div>
                                        <a title="" href="#">Someone Famous</a>
                                        <i>United States</i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text ">
                                        <a title="" href="#">Movie Two</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio odit dicta harum odio inventore vero, adipisicing elit quisquam adipisicing elit esse hic alias nisi. Blanditiis minima obcaecati vero sit eaque consectetur! Sit, odio incidunt.." </p>
                                        <ins class="sprite sprite-i-triangle"></ins>
                                    </div>
                                    <div class="person-text">
                                        <div class="reviewer">
                                            <img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg" alt="">
                                        </div>
                                        <a title="" href="#">Someone Famous</a>
                                        <i>United States</i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text ">
                                        <a title="" href="#">Movie Three</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span> </span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos voluptates, atque maiores iusto tenetur hic, dolore reprehenderit odit neque necessitatibus veritatis quasi rerum maxime eaque, officiis fugiat, aut quae commodi. </p>
                                        <ins class="sprite sprite-i-triangle"></ins>
                                    </div>
                                    <div class="person-text">
                                        <div class="reviewer">
                                            <img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                                        </div>
                                        <a title="" href="#">Someone Famous</a>
                                        <i>United States</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text ">
                                        <a title="" href="#">Movie One</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat excepturi et aliquam quaerat nam fugit sequi minus ipsa autem laudantium. Accusantium officiis deserunt totam voluptate soluta veritatis expedita animi numquam! ...</p>
                                        <ins class="sprite sprite-i-triangle"></ins>
                                    </div>
                                    <div class="person-text">
                                        <div class="reviewer">
                                            <img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/mantia/128.jpg" alt="">
                                        </div>
                                        <a title="" href="#">Someone Famous</a>
                                        <i>United States</i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text ">
                                        <a title="" href="#">Movie Two</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio odit dicta harum odio inventore vero, adipisicing elit quisquam adipisicing elit esse hic alias nisi. Blanditiis minima obcaecati vero sit eaque consectetur! Sit, odio incidunt.." </p>
                                        <ins class="sprite sprite-i-triangle"></ins>
                                    </div>
                                    <div class="person-text">
                                        <div class="reviewer">
                                            <img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg" alt="">
                                        </div>
                                        <a title="" href="#">Someone Famous</a>
                                        <i>United States</i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text ">
                                        <a title="" href="#">Movie Three</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span> </span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos voluptates, atque maiores iusto tenetur hic, dolore reprehenderit odit neque necessitatibus veritatis quasi rerum maxime eaque, officiis fugiat, aut quae commodi. </p>
                                        <ins class="sprite sprite-i-triangle"></ins>
                                    </div>
                                    <div class="person-text">
                                        <div class="reviewer">
                                            <img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                                        </div>
                                        <a title="" href="#">Someone Famous</a>
                                        <i>United States</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text ">
                                        <a title="" href="#">Movie One</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat excepturi et aliquam quaerat nam fugit sequi minus ipsa autem laudantium. Accusantium officiis deserunt totam voluptate soluta veritatis expedita animi numquam! ...</p>
                                        <ins class="sprite sprite-i-triangle"></ins>
                                    </div>
                                    <div class="person-text">
                                        <div class="reviewer">
                                            <img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/mantia/128.jpg" alt="">
                                        </div>
                                        <a title="" href="#">Someone Famous</a>
                                        <i>United States</i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text ">
                                        <a title="" href="#">Movie Two</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio odit dicta harum odio inventore vero, adipisicing elit quisquam adipisicing elit esse hic alias nisi. Blanditiis minima obcaecati vero sit eaque consectetur! Sit, odio incidunt.." </p>
                                        <ins class="sprite sprite-i-triangle"></ins>
                                    </div>
                                    <div class="person-text">
                                        <div class="reviewer">
                                            <img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg" alt="">
                                        </div>
                                        <a title="" href="#">Someone Famous</a>
                                        <i>United States</i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text ">
                                        <a title="" href="#">Movie Three</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span> </span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos voluptates, atque maiores iusto tenetur hic, dolore reprehenderit odit neque necessitatibus veritatis quasi rerum maxime eaque, officiis fugiat, aut quae commodi. </p>
                                        <ins class="sprite sprite-i-triangle"></ins>
                                    </div>
                                    <div class="person-text">
                                        <div class="reviewer">
                                            <img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                                        </div>
                                        <a title="" href="#">Someone Famous</a>
                                        <i>United States</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
        </div>
    </div>

<div class="container text-center">
  <br />
  <a class="btn btn-primary" href="http://thecodeblock.com/create-a-quote-testimonial-slider-using-bootstrap-carousel"><i class="fa fa-arrow-left"></i> Back to Article</a>
</div>

	<script type="text/javascript">
		//remove extra characters from json string
		function escapeSpecialChars(jsonString) {
            return jsonString.replace(/\n/g, "\\n")
                .replace(/\r/g, "\\r")
                .replace(/\t/g, "\\t")
                .replace(/\f/g, "\\f");
        }

		var placedetail = `{!! json_encode($place) !!}`;
		if (placedetail) {
			placedetail = escapeSpecialChars(placedetail);
			placedetail = JSON.parse(placedetail);
  			console.log(placedetail);

		}

		var height = $(document).height() * 0.25;
        height = parseInt(height);

        var thumbnail = placedetail.thumbnail;
        var name = placedetail.name;
        var address = placedetail.address;
        var contact = placedetail.contact;
  //       var reviews = placedetail.reviews;
  		$('#thumbnail').css('height', '100%');
  		$('#thumbnail').css('width', '100%');
        $('#thumbnail').attr('src', thumbnail);
        $('#name').html('<strong>Name: </strong>' + name);
        $('#address').html('<strong>Adress: </strong>' + address);
        $('#contact-info').html('<strong>Contact Info: </strong>' + contact);
  //       $('#reviews-link').text('Reviews');
  //       $('#reviews').html('<ul></ul>');

  //       if (reviews) {
  //         reviews.map((review) => {
  //           $('#reviews').append('<li>' + review.author_name + '</li>');
  //         });
  //       }
	</script>


@endsection