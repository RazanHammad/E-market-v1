@extends('frontend.layout.app')
@section('head')
@include('frontend.includes.head')
@endsection
		@section('content')
		<!-- home -->
		<section class="home">
			<div class="intro">
				<div id="home" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#home" data-slide-to="0" class="active"></li>
						<li data-target="#home" data-slide-to="1"></li>
						<li data-target="#home" data-slide-to="2"></li>
						<li data-target="#home" data-slide-to="3"></li>
						<li data-target="#home" data-slide-to="4"></li>
						<li data-target="#home" data-slide-to="5"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="intro-content">
											<h1>Last Chance</h1>
											<h2>Biggest <span class="highlight">Sale</span></h2>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet. Teer eam exerci vputate consetetur.</p>
											<a class="btn btn-default">Shop Now</a>
										</div>
									</div>
									<div class="col-sm-5">
										<img class="img-responsive" src="{{asset('frontend')}}/images/person.png" height="742" alt="" />
									</div>	
								</div>	
							</div>	
						</div>
						<div class="item">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="intro-content">
											<h1>Last Chance</h1>
											<h2>Biggest <span class="highlight">Sale</span></h2>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet. Teer eam exerci vputate consetetur.</p>
											<a class="btn btn-default">Shop Now</a>
										</div>
									</div>
									<div class="col-sm-5">
										<img class="img-responsive" src="{{asset('frontend')}}/images/option.png" alt="" />
									</div>	
								</div>	
							</div>	
						</div>
						<div class="item">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="intro-content">
											<h1>Last Chance</h1>
											<h2>Biggest <span class="highlight">Sale</span></h2>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet. Teer eam exerci vputate consetetur.</p>
											<a class="btn btn-default">Shop Now</a>
										</div>
									</div>
									<div class="col-sm-5">
										<img class="img-responsive" src="{{asset('frontend')}}/images/option.png" alt="" />
									</div>	
								</div>	
							</div>	
						</div>
						<div class="item">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="intro-content">
											<h1>Last Chance</h1>
											<h2>Biggest <span class="highlight">Sale</span></h2>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet. Teer eam exerci vputate consetetur.</p>
											<a class="btn btn-default">Shop Now</a>
										</div>
									</div>
									<div class="col-sm-5">
										<img class="img-responsive" src="{{asset('frontend')}}/images/person.png" alt="" />
									</div>	
								</div>	
							</div>	
						</div>
						<div class="item">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="intro-content">
											<h1>Last Chance</h1>
											<h2>Biggest <span class="highlight">Sale</span></h2>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet. Teer eam exerci vputate consetetur.</p>
											<a class="btn btn-default">Shop Now</a>
										</div>
									</div>
									<div class="col-sm-5">
										<img class="img-responsive" src="{{asset('frontend')}}/images/option.png" alt="" />
									</div>	
								</div>	
							</div>	
						</div>
						<div class="item">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="intro-content">
											<h1>Last Chance</h1>
											<h2>Biggest <span class="highlight">Sale</span></h2>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet. Teer eam exerci vputate consetetur.</p>
											<a class="btn btn-default">Shop Now</a>
										</div>
									</div>
									<div class="col-sm-5">
										<img class="img-responsive" src="{{asset('frontend')}}/images/person.png" alt="" />
									</div>	
								</div>	
							</div>	
						</div>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#home" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="right carousel-control" href="#home" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</section>	
		
		<!-- service -->
		<section class="service">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 text-center">
						<div class="service-detail">
							<span class=" fa diamond"> <i class="fa fa-android"></i></span>
							<h3>Choose a product</h3>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina type. </p>
						</div>
					</div>
					<div class="col-sm-3 text-center">
						<div class="service-detail">
							<span class=" fa diamond"> <i class="fa fa-apple"></i></span>
							<h3>Choose a product</h3>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina type. </p>
						</div>
					</div>
					<div class="col-sm-3 text-center">
						<div class="service-detail">
							<span class=" fa diamond"> <i class="fa fa-html5"></i></span>
							<h3>Choose a product</h3>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina type. </p>
						</div>
					</div>
					<div class="col-sm-3 text-center">
						<div class="service-detail">
							<span class=" fa diamond"> <i class="fa fa-css3"></i></span>
							<!--span><i class="fa fa-folder-o s-icon"></i></span-->
							<h3>Choose a product</h3>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina type. </p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- featured product -->
		<section class="featured-product">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="">
							<h1><span class="t-color-1">Featured</span> Catgories
							
							</h1>
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
								@foreach($catagory1 as $ctg1)
								<div class="col-sm-3">
									<div class="thumbnail">
										<!--span class="e-label"><div>Sale</div></span-->
										<span class="service-link text-center">
											<img class="img-responsive" style="max-height: 89px;
						" src="{{url('storage/img/'.$ctg1->img)}}" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
										<div class="caption">
											<div class="category"> {{$ctg1->title}}
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
						
						
						<div class="item">
							<div class="row">
								@foreach($catagory2 as $ctg2)
								<div class="col-sm-3">
									<div class="thumbnail">
										<!--span class="e-label"><div>Sale</div></span-->
										<span class="service-link text-center">
											<img class="img-responsive" style="max-height: 89px;
						" src="{{url('storage/img/'.$ctg2->img)}}" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
										<div class="caption">
											<div class="category"> {{$ctg2->title}}
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>		
		
			
			
		<!-- product info -->
		<section class="featured-product">
			<div class="container">
				<div class="row">	
					
				<div class="col-sm-12">
					<h1><span class="t-color-3">New</span> Products</h1>
					<div class="heading-border b-color-5"></div>
				</div>
					@foreach($products as $pr)
				<div class="col-sm-4">
									<div class="thumbnail">
										<span class="service-link text-center">
												<img class="img-responsive" style="max-height: 134px;
						" src="{{url('storage/img/'.$pr->img)}}" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href="/productdetail/{{$pr->id}}"><i class="fa fa-link"></i></a>
											</div>
										</span>
										<div class="caption">
											<div class="category"> {{$pr->title}}
											<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<h3>
								{{ str_limit($pr->details, $limit = 5, $end = '...') }}															</h3>
											<strong>${{$pr->price}}</strong>
											<div><a href="/products" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
										</div>
									
									</div>
								</div>
					@endforeach
						
				</div>
			</div>
		</section>	
		@endsection
			
	