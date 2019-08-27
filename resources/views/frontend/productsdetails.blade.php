@extends('frontend.layout.app2')
@section('title1')
product Detail
@endsection
@section('title2')
product Detail
@endsection
@section('content')

		<section class="desk-com">
			<div class="container">
				<div class="row">

					<div class="col-sm-5">
						<div id="pro-img" >
							<img src="{{url('storage/img/'.$product->img)}}" alt=""></div>
								
					</div>
					<div class="col-sm-7">
						<div class="pro-details">
							<p class="category">{{$product->catagory->title}}</p>
							<h2>{{$product->title}}</h2>
							<ul class="list-inline rate-stock">
								<li><i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</li>
								<li>4 Reviews / Add Your Review </li>
								<li>Avialability : In Stock</li>
							</ul>
							<ul class="list-inline wish-email">
								<li><i class="fa fa-heart-o"></i> Add To Wishlist</li>
								<li><i class="fa fa-file-o"></i> Add To Compare list</li>
								<li><i class="fa fa-envelope-o"></i> Email to a Friend</li>
							</ul>
							<p>{{$product->details}}</p>
							<div class="currency">${{$product->price}}</div>
							<div class="add-cart"><a class="btn btn-default" herf="#">Add to Cart</a></div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
				
<section class="desk-com">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-12">
						<ul class="list-inline pull-right">
							@if(auth()->check())
								<li><a class="register" href="/productdetail/writereview1/{{$product->id}}" >Write Review</a></li>

								@else

								<li><a class="register" href="/productdetail/writereview2/{{$product->id}}" >Write Review</a></li>
								@endif
							</ul>
					</div>

					<div class="col-sm-12">
						<div class="blog-comment">
							<h2 class="t-color-6">4 Reviews</h2>
							<div class="heading-border b-color-6"></div>
							@foreach($reviews as $review)
							<ul class="media-list">
								<li class="media">
									<div class="media-left">
										<a href="#"><img class="media-object" src="{{asset('frontend')}}/images/profile.png" width="64" alt="..."></a>
									</div>
									<div class="media-body">
										<ul class="list-inline comment-info">
											<li><strong></strong></li>
											<li>{{$review->created_at}}</li>

										</ul>
										<div class="pro-details">
										<ul class="list-inline rate-stock">
											<li>
												
												@if($review->rating == 1)
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>

												@endif

												@if($review->rating == 2)
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>

												@endif
												@if($review->rating == 3)
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>

												@endif

												@if($review->rating == 4)
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>

												@endif

												@if($review->rating == 5)
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>

												@endif



											</li>
										</ul>
									</div>
										<p>{{$review->text}}</p>
										
										</div>
									</li>
								</ul>
								@endforeach
					</div>
				</div>
			</div>
		</div>
		</section>
@endsection