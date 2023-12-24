@extends('frontend.layouts.app')
@section('PageTitle', 'BMW | Home')
@section('content')

<!--welcome-hero start -->
<section id="home" class="welcome-hero">

	<!-- top-area Start -->
	<div class="top-area">
		<div class="header-area">
			<!-- Start Navigation -->
			<nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				<div class="container">

					<!-- Start Header Navigation -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
							<i class="fa fa-bars"></i>
						</button>
						<a class="navbar-brand" href="index.html">BM<span>Wheels</span></a>

					</div><!--/.navbar-header-->
					<!-- End Header Navigation -->

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
						<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
							<li class=" scroll active"><a href="{{route('home')}}">home</a></li>
							<li class="scroll"><a href="#service">service</a></li>
							<li class="scroll"><a href="#featured-cars">featured Wheel</a></li>
							<li class="scroll"><a href="#new-cars">Special Wheels</a></li>
							<li class="scroll"><a href="#brand">brands</a></li>
							<li class="scroll"><a href="#contact">contact</a></li>
						</ul><!--/.nav -->
					</div><!-- /.navbar-collapse -->
				</div><!--/.container-->
			</nav><!--/nav-->
			<!-- End Navigation -->
		</div><!--/.header-area-->
		<div class="clearfix"></div>

	</div><!-- /.top-area-->
	<!-- top-area End -->

	<div class="container">
		<div class="welcome-hero-txt">
			<h2>get your desired Wheel in resonable price</h2>
			<button class="scroll welcome-btn"><a href="#contact" style="color: #fff;">contact</a></button>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="model-search-content">
					<div class="row">
						<div class="col-md-offset-1 col-md-2 col-sm-12">
							<div class="single-model-search">
								<h2>select year</h2>
								<div class="model-select-icon">
									<select class="form-control">

										<option value="default">year</option><!-- /.option-->

										<option value="2018">2018</option><!-- /.option-->

										<option value="2017">2017</option><!-- /.option-->
										<option value="2016">2016</option><!-- /.option-->

									</select><!-- /.select-->
								</div><!-- /.model-select-icon -->
							</div>
							<div class="single-model-search">
								<h2>body style</h2>
								<div class="model-select-icon">
									<select class="form-control">

										<option value="default">style</option><!-- /.option-->

										<option value="sedan">sedan</option><!-- /.option-->

										<option value="van">van</option><!-- /.option-->
										<option value="roadster">roadster</option><!-- /.option-->

									</select><!-- /.select-->
								</div><!-- /.model-select-icon -->
							</div>
						</div>
						<div class="col-md-offset-1 col-md-2 col-sm-12">
							<div class="single-model-search">
								<h2>select make</h2>
								<div class="model-select-icon">
									<select class="form-control">

										<option value="default">make</option><!-- /.option-->

										<option value="toyota">toyota</option><!-- /.option-->

										<option value="holden">holden</option><!-- /.option-->
										<option value="maecedes-benz">maecedes-benz.</option><!-- /.option-->

									</select><!-- /.select-->
								</div><!-- /.model-select-icon -->
							</div>
							<div class="single-model-search">
								<h2>car condition</h2>
								<div class="model-select-icon">
									<select class="form-control">

										<option value="default">condition</option><!-- /.option-->

										<option value="something">something</option><!-- /.option-->

										<option value="something">something</option><!-- /.option-->
										<option value="something">something</option><!-- /.option-->

									</select><!-- /.select-->
								</div><!-- /.model-select-icon -->
							</div>
						</div>
						<div class="col-md-offset-1 col-md-2 col-sm-12">
							<div class="single-model-search">
								<h2>select model</h2>
								<div class="model-select-icon">
									<select class="form-control">

										<option value="default">model</option><!-- /.option-->

										<option value="kia-rio">kia-rio</option><!-- /.option-->

										<option value="mitsubishi">mitsubishi</option><!-- /.option-->
										<option value="ford">ford</option><!-- /.option-->

									</select><!-- /.select-->
								</div><!-- /.model-select-icon -->
							</div>
							<div class="single-model-search">
								<h2>select price</h2>
								<div class="model-select-icon">
									<select class="form-control">

										<option value="default">price</option><!-- /.option-->

										<option value="$0.00">$0.00</option><!-- /.option-->

										<option value="$0.00">$0.00</option><!-- /.option-->
										<option value="$0.00">$0.00</option><!-- /.option-->

									</select><!-- /.select-->
								</div><!-- /.model-select-icon -->
							</div>
						</div>
						<div class="col-md-2 col-sm-12">
							<div class="single-model-search text-center">
								<button class="welcome-btn model-search-btn" onclick="window.location.href='#'">
									search
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section><!--/.welcome-hero-->
<!--welcome-hero end -->

<!--service start -->
<section id="service" class="service">
	<div class="container">
		<div class="service-content">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="single-service-item">
						<div class="single-service-icon">
							<i class="flaticon-car"></i>
						</div>
						<h2><a href="#">largest dealership <span> of</span> car</a></h2>
						<p>
							Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut den fugit sed quia.
						</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-service-item">
						<div class="single-service-icon">
							<i class="flaticon-car-repair"></i>
						</div>
						<h2><a href="#">unlimited repair warrenty</a></h2>
						<p>
							Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut den fugit sed quia.
						</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-service-item">
						<div class="single-service-icon">
							<i class="flaticon-car-1"></i>
						</div>
						<h2><a href="#">insurence support</a></h2>
						<p>
							Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut den fugit sed quia.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div><!--/.container-->

</section><!--/.service-->
<!--service end-->

<!--new-cars start -->
<section id="new-cars" class="new-cars">
	<div class="container">
		<div class="section-header">
			<p>checkout <span>the</span> latest Wheel</p>
			<h2>Special Wheels</h2>
		</div><!--/.section-header-->
		<div class="new-cars-content">
			<div class="owl-carousel owl-theme" id="new-cars-carousel">

				@foreach($products->where('special_offer', 1) as $product)
				<div class="new-cars-item">
					<div class="single-new-cars-item">
						<div class="row">
							<div class="col-md-7 col-sm-12">
								<div class="new-cars-img">
									<img src="frontend_assets/images/new-cars-model/ncm1.png" alt="img" />
								</div><!--/.new-cars-img-->
							</div>
							<div class="col-md-5 col-sm-12">
								<div class="new-cars-txt">
									<h2><a href="#">{{ $product->product_name}}</span></a></h2>
									<p>
										{{ $product->product_short_description}}
									</p>

									<button class="welcome-btn new-cars-btn" onclick="window.location.href='#'">
										view details
									</button>
								</div><!--/.new-cars-txt-->
							</div><!--/.col-->
						</div><!--/.row-->
					</div><!--/.single-new-cars-item-->
				</div><!--/.new-cars-item-->
				@endforeach

			</div><!--/#new-cars-carousel-->
		</div><!--/.new-cars-content-->
	</div><!--/.container-->

</section><!--/.new-cars-->
<!--new-cars end -->

<!--featured-cars start -->
<section id="featured-cars" class="featured-cars">
	<div class="container">
		<div class="section-header">
			<p>checkout <span>the</span> featured Wheel</p>
			<h2>featured wheel</h2>
		</div><!--/.section-header-->
		<div class="featured-cars-content">
			<div class="row">
				@foreach($products->where('special_offer', '!=', 1) as $product)
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="single-featured-cars">
						<div class="featured-img-box">
							<div class="featured-cars-img">
								<!-- <img src="frontend_assets/images/featured-cars/fc1.png" alt="cars"> -->
								<img class="card-img-top" src="{{url('uploads/images/product/' .
                                            $product->product_thumbnail)}}"
                                                 style="max-width: 250px; margin-top: 20px" id="show_image">
							</div>
							<div class="featured-model-info">
								<p>

								</p>
							</div>
						</div>
						<div class="featured-cars-txt">
							<h2><a href="#">{{$product->product_name}}</a></h2>
							<h3>${{$product->product_price}}</h3>
							<p>
								{{$product->product_short_description}}
							</p>
						</div>
					</div>
				</div>

				@endforeach
				
			</div>
			
		</div>
	</div><!--/.container-->

</section><!--/.featured-cars-->
<!--featured-cars end -->

<!-- clients-say strat -->
<section id="clients-say" class="clients-say">
	<div class="container">
		<div class="section-header">
			<h2>what our clients say</h2>
		</div><!--/.section-header-->
		<div class="row">
			<div class="owl-carousel testimonial-carousel">
				<div class="col-sm-3 col-xs-12">
					<div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="frontend_assets/images/clients/c1.png" alt="image of clients person" />
								</div><!--/.testimonial-img-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Sed ut pers unde omnis iste natus error sit voluptatem accusantium dolor laudan rem aperiam, eaque ipsa quae ab illo inventore verit.
								</p>
							</div><!--/.testimonial-comment-->
							<div class="testimonial-person">
								<h2><a href="#">tomas lili</a></h2>
								<h4>new york</h4>
							</div><!--/.testimonial-person-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				</div><!--/.col-->
				<div class="col-sm-3 col-xs-12">
					<div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="frontend_assets/images/clients/c2.png" alt="image of clients person" />
								</div><!--/.testimonial-img-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Sed ut pers unde omnis iste natus error sit voluptatem accusantium dolor laudan rem aperiam, eaque ipsa quae ab illo inventore verit.
								</p>
							</div><!--/.testimonial-comment-->
							<div class="testimonial-person">
								<h2><a href="#">romi rain</a></h2>
								<h4>london</h4>
							</div><!--/.testimonial-person-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				</div><!--/.col-->
				<div class="col-sm-3 col-xs-12">
					<div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="frontend_assets/images/clients/c3.png" alt="image of clients person" />
								</div><!--/.testimonial-img-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Sed ut pers unde omnis iste natus error sit voluptatem accusantium dolor laudan rem aperiam, eaque ipsa quae ab illo inventore verit.
								</p>
							</div><!--/.testimonial-comment-->
							<div class="testimonial-person">
								<h2><a href="#">john doe</a></h2>
								<h4>washington</h4>
							</div><!--/.testimonial-person-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				</div><!--/.col-->
			</div><!--/.testimonial-carousel-->
		</div><!--/.row-->
	</div><!--/.container-->

</section><!--/.clients-say-->
<!-- clients-say end -->

<!--brand strat -->
<section id="brand" class="brand">
	<div class="container">
		<div class="brand-area">
			<div class="owl-carousel owl-theme brand-item">
				@foreach($brands as $brand)
				<div class="item">
					<a href="#">

						<img src="{{url
									('uploads/images/brand/' .
									$brand->brand_image)}}" alt="brand-image" />
						<!-- <img src="frontend_assets/images/brand/br1.png" alt="brand-image" /> -->
					</a>
				</div><!--/.item-->
				@endforeach

			</div><!--/.owl-carousel-->
		</div><!--/.clients-area-->

	</div><!--/.container-->

</section><!--/brand-->
<!--brand end -->

<!--blog start -->
<section id="blog" class="blog"></section><!--/.blog-->
<!--blog end -->
@endsection