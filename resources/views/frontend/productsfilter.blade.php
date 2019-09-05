@extends('frontend.layout.app')
		@section('content')
		<!-- recommented products -->
		<section class="featured-product recommented-product">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="sidebar">
							<div class="well wedget">
							 	<strong>Fillter by price</strong>
								<div class="heading-border b-color-6"></div>
								
								<div class="progress">
								  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
									<span class="sr-only">20% Complete</span>
								  </div>
								</div>
								
								<small>Currency Shopping By :</small>
								<p>Price : <span>$260 - $980</span></p>
								
								<a class="btn btn-default btn-block" href="#">Fillter Now</a>
							</div>
							<div class="well wedget">
							 	<strong>Fillter by Brand</strong>
								<div class="heading-border b-color-6"></div>
								
								 <ul class="check-box">
									<li>
										<div class="btn-group" data-toggle="buttons">
											<label class="btn btn-primary active">
												<input type="checkbox" autocomplete="off" checked><i class="fa fa-check"></i>
											</label>Asus - <span class="pull-right">846</span>
										</div>
									 </li>
									 <li>
										<div class="btn-group" data-toggle="buttons">
											<label class="btn btn-primary active">
												<input type="checkbox" autocomplete="off" checked><i class="fa fa-check"></i>
											</label>HP - <span class="pull-right">789</span>
										</div>
									 </li>
									  <li>
										<div class="btn-group" data-toggle="buttons">
											<label class="btn btn-primary active">
												<input type="checkbox" autocomplete="off" checked><i class="fa fa-check"></i>
											</label>Apple - <span class="pull-right">313</span>
										</div>
									 </li>
									  <li>
										<div class="btn-group" data-toggle="buttons">
											<label class="btn btn-primary active">
												<input type="checkbox" autocomplete="off" checked><i class="fa fa-check"></i>
											</label>Dell - <span class="pull-right">452</span>
										</div>
									 </li>
									  <li>
										<div class="btn-group" data-toggle="buttons">
											<label class="btn btn-primary active">
												<input type="checkbox" autocomplete="off" checked><i class="fa fa-check"></i>
											</label>Acer - <span class="pull-right">46</span>
										</div>
									 </li>
								</ul>
							</div>
							<div class="well wedget footer-top">
							 	<strong>Special Offers</strong>
								<div class="heading-border b-color-6"></div>
								<ul class="media-list">
									<li class="media">
										<div class="media-left"><img src="{{asset('frontend')}}/images/featured-1.jpg" alt=""></div>
										<div class="media-body">
											<p class="media-heading">Lorem ipsum dolor</p>
											<div class="category">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i> 
												<i class="fa fa-star"></i> 
												<i class="fa fa-star"></i> 
												<i class="fa fa-star-o"></i>
											</div>
											<strong>$899.99</strong>
										</div>
									</li>
									<li class="media">
										<div class="media-left"><img src="{{asset('frontend')}}/images/featured-1.jpg" alt=""></div>
										<div class="media-body">
											<p class="media-heading">Lorem ipsum dolor</p>
											<div class="category">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i> 
												<i class="fa fa-star"></i> 
												<i class="fa fa-star"></i> 
												<i class="fa fa-star-o"></i>
											</div>
											<strong>$899.99</strong>
										</div>
									</li>
									<li class="media">
										<div class="media-left"><img src="{{asset('frontend')}}/images/featured-1.jpg" alt=""></div>
										<div class="media-body">
											<p class="media-heading">Lorem ipsum dolor</p>
											<div class="category">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i> 
												<i class="fa fa-star"></i> 
												<i class="fa fa-star"></i> 
												<i class="fa fa-star-o"></i>
											</div>
											<strong>$899.99</strong>
										</div>
									</li>
									
								</ul>
							</div>
							
							<div class="single-add">
								<h4>Get <span>50%</span> Discount</h4>
								<a href="#" class="btn btn-default" role="button">Learn More</a>
								<span class="img-add"><img class="img-responsive" src="{{asset('frontend')}}/images/red-tablet.png" width="120px" alt="" /></span>
							</div>
							
							<div class="well wedget footer-top">
							 	<strong>Featured Products</strong>
								<div class="heading-border b-color-6"></div>
								<ul class="media-list">
									<li class="media">
										<div class="media-left"><img src="{{asset('frontend')}}/images/featured-1.jpg" alt=""></div>
										<div class="media-body">
											<p class="media-heading">Lorem ipsum dolor</p>
											<div class="category">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i> 
												<i class="fa fa-star"></i> 
												<i class="fa fa-star"></i> 
												<i class="fa fa-star-o"></i>
											</div>
											<strong>$899.99</strong>
										</div>
									</li>
									<li class="media">
										<div class="media-left"><img src="{{asset('frontend')}}/images/featured-1.jpg" alt=""></div>
										<div class="media-body">
											<p class="media-heading">Lorem ipsum dolor</p>
											<div class="category">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i> 
												<i class="fa fa-star"></i> 
												<i class="fa fa-star"></i> 
												<i class="fa fa-star-o"></i>
											</div>
											<strong>$899.99</strong>
										</div>
									</li>
								</ul>
							</div>
							<div class="well text-widget wedget">
								<strong>Text Widget</strong>
								<div class="heading-border b-color-6"></div>
								<p>Lorem ipsum dolor sit amet, no mea aeterno indoctum percipitur. Homero quaerendum ius ei. In pro decore tamquam 									appetere, ea mentitum mediocrem efficiantur quo.</p>
							</div>
						</div> <!-- sidebar -->
					</div>
					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-12">
								<div class="">
									<h1><span class="t-color-1">Recommended</span> Products</h1>
									<div class="heading-border b-color-1"></div>
								</div>
							</div>
						</div> <!-- section title -->
						
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"><i class="fa fa-angle-left"></i></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"><i class="fa fa-angle-right"></i></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<div class="row">
										<div class="col-sm-4">
											<div class="thumbnail">
												<!--span class="e-label"><div>Sale</div></span-->
												<span class="service-link text-center">
													<img class="img-responsive" src="{{asset('frontend')}}/images/f-pro-1.jpg" alt="">
													<div class="list-inline">
														<a href=""><i class="fa fa-eye"></i></a>
														<a href=""><i class="fa fa-link"></i></a>
													</div>
												</span>
												<div class="caption">
													<div class="category"> category
														<div class="pull-right">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
													</div>
													<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
													<strong>$899.00</strong>
													<div><a href="#" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="thumbnail">
												<span class="service-link text-center">
													<img class="img-responsive" src="{{asset('frontend')}}/images/f-pro-1.jpg" alt="">
													<div class="list-inline">
														<a href=""><i class="fa fa-eye"></i></a>
														<a href=""><i class="fa fa-link"></i></a>
													</div>
												</span>
												<div class="caption">
													<div class="category"> category
														<div class="pull-right">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
													</div>
													<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
													<strong>$899.00</strong>
													<div><a href="#" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="thumbnail">
												<span class="service-link text-center">
													<img class="img-responsive" src="{{asset('frontend')}}/images/f-pro-1.jpg" alt="">
													<div class="list-inline">
														<a href=""><i class="fa fa-eye"></i></a>
														<a href=""><i class="fa fa-link"></i></a>
													</div>
												</span>
												<div class="caption">
													<div class="category"> category
														<div class="pull-right">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
													</div>
													<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
													<strong>$899.00</strong>
													<div>
														<a href="#" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="row">
										<div class="col-sm-4">
											<div class="thumbnail">
												<!--span class="e-label"><div>Sale</div></span-->
												<span class="service-link text-center">
													<img class="img-responsive" src="{{asset('frontend')}}/images/f-pro-1.jpg" alt="">
													<div class="list-inline">
														<a href=""><i class="fa fa-eye"></i></a>
														<a href=""><i class="fa fa-link"></i></a>
													</div>
												</span>
												<div class="caption">
													<div class="category"> category
														<div class="pull-right">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
													</div>
													<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
													<strong>$899.00</strong>
													<div><a href="#" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="thumbnail">
												<span class="service-link text-center">
													<img class="img-responsive" src="{{asset('frontend')}}/images/f-pro-1.jpg" alt="">
													<div class="list-inline">
														<a href=""><i class="fa fa-eye"></i></a>
														<a href=""><i class="fa fa-link"></i></a>
													</div>
												</span>
												<div class="caption">
													<div class="category"> category
														<div class="pull-right">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
													</div>
													<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
													<strong>$899.00</strong>
													<div><a href="#" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="thumbnail">
												<span class="service-link text-center">
													<img class="img-responsive" src="{{asset('frontend')}}/images/f-pro-1.jpg" alt="">
													<div class="list-inline">
														<a href=""><i class="fa fa-eye"></i></a>
														<a href=""><i class="fa fa-link"></i></a>
													</div>
												</span>
												<div class="caption">
													<div class="category"> category
														<div class="pull-right">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
													</div>
													<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
													<strong>$899.00</strong>
													<div>
														<a href="#" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- desktop -->
						<div class="featured-product desktop">
							<div class="row">
								<form method="get" action="">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12">
											<h1><span class="t-color-6">Products</span></h1>
											<div class="heading-border b-color-6"></div>
										</div>
									</div> <!-- section title -->
									<div class="row hidden-xs">
										<div class="col-sm-12">
											<nav class="navbar navbar-default desk-nav">
												<!-- Brand and toggle get grouped for better mobile display -->
												<div class="navbar-header">
													<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#desktop" aria-expanded="false">
														<span class="sr-only">Toggle navigation</span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
													</button>
												</div>

												<!-- Collect the nav links, forms, and other content for toggling -->
												<div class="collapse navbar-collapse" id="desktop">
													<div class="navbar-form nav navbar-nav navbar-left">
														<div class="selection"> Sort by
			<select  name="catagory_id" class="form-control" >
				<option>Catagory</option>
				 @foreach ($catagories as $catagory)
   														
   			<option  selected="selected" value="{{ $catagory->id }}"><a href="{{$catagory->id}}">{{ $catagory->title }}</a></option>
	 
        																
					@endforeach


					</select>
															
															
														

																<!--<i class="fa fa-long-arrow-up"></i>-->
															
														</div>

														
													</div>	

												</div>
											</nav>
										</div>
									</div>	

									
									<div class="row">
										@foreach($products as $product)
										<div class="col-sm-4">
											<div class="thumbnail">
												<!--span class="e-label"><div>Sale</div></span-->
												<span class="service-link text-center">
													<img class="img-responsive" src="{{asset('frontend')}}/images/f-pro-1.jpg" alt="">
													<div class="list-inline">
														<a href=""><i class="fa fa-eye"></i></a>
														<a href=""><i class="fa fa-link"></i></a>
													</div>
												</span>
												<div class="caption">
													<div class="category"> {{$product->title}}
														<div class="pull-right">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
													</div>
													<h3></h3>
													<strong></strong>
													<div><a href="#" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
												</div>
											</div>
										</div>
									@endforeach
									</div>
								
									
								</div>
								</form>
							</div>
						</div> <!-- desktop -->
					
					</div><!--div 9 -->
				</div>
			</div>
		</section>
		
	
       <!-- <script type="text/javascript">

    jQuery(document).ready(function($){
  	$('#catagory_id').change(function(){
			$.get("{{ url('/products')}}", 
				{ option: $(this).val() }, 
				function(data) {
				console.log(data);
				});
		});
	});
<script>
    function filter(id)
    {
        window.location.href = + '/' + id;
</script>
</script>-->
@endsection

