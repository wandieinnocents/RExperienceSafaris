@extends('layouts.app')

@section('content')

	<!-- End Navigation -->
	<div class="clearfix"></div>
	<!-- Main Banner Section Start -->
	<div class="banner dark-opacity" style="background-image:url(assets/img/slider-4.jpg);">
		<div class="container">
			<div class="banner-caption">
				<div class="col-md-12 col-sm-12 banner-text">
					<h1>ROYAL EXPERIENCE AFRICA</h1>
					<p>we shall give you a royal experience to africa tourism industry</p>
					<form class="form-verticle">
						<div class="col-md-4 col-sm-4 no-padd">
							<i class="banner-icon icon-pencil"></i>
							<input type="text" class="form-control left-radius right-br" placeholder="Keywords..">
						</div>
						<div class="col-md-3 col-sm-3 no-padd">
							<i class="banner-icon icon-map-pin"></i>
							<input type="text" class="form-control right-br" placeholder="Location..">

						</div>
						<div class="col-md-3 col-sm-3 no-padd">
						<i class="banner-icon icon-layers"></i>
							<select class="selectpicker form-control" data-live-search="true">
								<option data-tokens="ketchup mustard">Choose Category</option>
								<option data-tokens="mustard">Burger, Shake and a Smile</option>
								<option data-tokens="frosting">Sugar, Spice and all things nice</option>
							</select>
						</div>
						<div class="col-md-2 col-sm-2 no-padd">
							<button type="button" class="btn theme-btn btn-default">Search</button>
						</div>
					</form>
					<div class="pulse-tag">
						<a href="#listing" class="pulse btn-banner-link"><i class="theme-cl ti-angle-double-down"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<!-- Main Banner Section End -->



		<!-- Features Section -->
		<section class="features">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
					<div class="heading">
						<h2>Let us Travel <span>Africa</span> Together </h2>
					</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-box">
						<span class="ti-map-alt"></span>
						<h4> Safaris</h4>
						<p>We have the best places that you can travel to and have a full view of what Africa is in just a few days with us.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-box">
						<span class="ti-email"></span>
						<h4>Accomodation</h4>
						<p>We have comfortable accomodation facilities that you can reside in when you are at Royal experience tours with us. </p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-box">
						<span class="ti-user"></span>
						<h4>Transportation</h4>
						<p>We have reliable transport facilities that we use, to show you our interesting sceneries around Africa.</p>
					</div>
				</div>
			</div>
		</section>
		<!-- End Features Section -->

	<!-- Top Listing -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
				<div class="heading">
					<h2>Top & Popular <span>Accomondations</span></h2>
					<p>Have a look at our most visited accomodations</p>
				</div>
				</div>
			</div>

			<div class="row">
				@foreach($accomodations->splice(0,3) as $accomodation)
				<div class="col-md-4 col-sm-6">
					<div class="listing-shot grid-style">
						<a href="#">
							<div class="listing-shot-img">
								<img src="assets/img/category/art.jpg" class="img-responsive" alt="">
								<span class="like-listing"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
							</div>
							<div class="listing-shot-caption">
								<h4>{{ $accomodation->title }}</h4>
								<?= substr($accomodation->description,0,60) ?> <?= strlen($accomodation->description) > 60 ? " ..." : "" ?>        </p>
							</div>
						</a>

						<div class="listing-shot-info rating">
							<div class="row extra">
								<div class="col-md-7 col-sm-7 col-xs-6">
									<i class="color fa fa-star" aria-hidden="true"></i>
									<i class="color fa fa-star" aria-hidden="true"></i>
									<i class="color fa fa-star" aria-hidden="true"></i>
									<i class="color fa fa-star-half-o" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="col-md-5 col-sm-5 col-xs-6 pull-right">
									<a href="accomodations/{{ $accomodation->id }}" class="detail-link">View Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach



			</div>
		</div>
	</section>
	<!-- End Top Listing -->

	<!-- Best category -->
	<section class="gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
				<div class="heading">
					<h2>Most Popular <span>Safaris</span></h2>
					<p>Have a look at our safaris we have.</p>
				</div>
				</div>
			</div>

			<div class="row">
				<div class="category-slide">
					<div class="list-slide-box">
						<div class="category-full-widget">
							<div class="category-widget-bg" style="background-image: url(assets/img/category/art.jpg);">
								<i class="bg-a cat-icon fa fa-paint-brush" aria-hidden="true"></i>
							</div>
							<div class="cat-box-name">
								<h4>Art & Design</h4>
								<a href="#" class="btn-btn-wrowse">Browse</a>
							</div>
						</div>
					</div>

					<div class="list-slide-box">
						<div class="category-full-widget">
							<div class="category-widget-bg" style="background-image: url(assets/img/category/education.jpg);">
								<i class="bg-b cat-icon fa fa-graduation-cap" aria-hidden="true"></i>
							</div>
							<div class="cat-box-name">
								<h4>Education</h4>
								<a href="#" class="btn-btn-wrowse">Browse</a>
							</div>
						</div>
					</div>




					<div class="list-slide-box">
						<div class="category-full-widget">
							<div class="category-widget-bg" style="background-image: url(assets/img/category/business.jpg);">
								<i class="bg-g fa cat-icon fa-briefcase" aria-hidden="true"></i>
							</div>
							<div class="cat-box-name">
								<h4>Business</h4>
								<a href="search-listing.html" class="btn-btn-wrowse">Browse</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Best categories -->



@endsection
