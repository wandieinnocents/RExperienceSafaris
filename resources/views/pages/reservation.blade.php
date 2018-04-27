@extends('layouts.app')

@section('title')
    {{ $page->meta_title }}
@endsection

@section('keywords') 
	{{ $page->meta_keywords }}
@endsection 

@section('desc') 
	{{ $page->meta_description }}
@endsection 

@section('content')

<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background: url(img/inner-page-banner.jpg);">
	<div class="container">
		<div class="pagination-area">
			<h2>Reservation Form</h2>
			<ul>
				<li>
					<a href="{{ url('/') }}">Home -</a> /</li>
				<li>Reservation</li>
			</ul>
		</div>
	</div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- reservation-page-area Start Here -->
<div class="reservation-page-area">
	<div class="container">
		<div class="reservation-page-inner">
			<div class="reservation-page-left">
				<div class="reservation-page-form">
					<span>Take A</span>
					<h2>RESERVATION</h2>
					<form action="{{ route('reservations.store') }}" method="POST" role="form" enctype="multipart/form-data"> 
						{{ csrf_field() }}
						@include('includes.success')
						@include('includes.errors')
						<div class="reservation-page-input-box">
							<input type="text" class="form-control" placeholder="Name" name="name" id="form-name" data-error="Subject field is required"
							 required />
						</div>
						<div class="reservation-page-input-box">
							<input type="text" class="form-control" placeholder="E-mail" name="email" id="form-subject" data-error="Subject field is required"
							 />
						</div>
						<div class="reservation-page-input-box">
							<input type="text" class="form-control" placeholder="Phone" name="phone" id="form-phone" data-error="Subject field is required"
							 required/>
						</div>
						<div class="reservation-page-input-box">
							<i class="fa fa-calendar" aria-hidden="true"></i>
							<input type="text" class="form-control rt-date" placeholder="Date" name="date" id="form-date" data-error="Subject field is required"
							 required/>
						</div>
						<div class="reservation-page-input-box">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<input type="text" class="form-control rt-time" placeholder="Time" name="time" id="form-time" data-error="Subject field is required"
							 required/>
						</div>
						<div class="reservation-page-input-box">

							<select class="form-control" name="reservation" data-error="Subject field is required" required/>
							<option value=1>1 person</option>
							<option value=2>Table (2)</option>
							<option value=4>Table 4</option>
							<option value=8>2 tables</option>
							</select>
						</div>
						<div class="reservation-page-input-box">
							<textarea class="form-control" placeholder="Message" name="message" id="form-message" data-error="Message field is required"
							 ></textarea>
						</div>
						<button type="submit" class="book-now-btn">Book A Table</button>
						<div class='form-response'></div>
					</form>
				</div>
			</div>
			<div class="reservation-page-right">
				<img src="img/dish/foods/others/photo.jpg" class="img-responsive" alt="reservation-banner">
			</div>
		</div>
	</div>
</div>
<!-- Table Reservation 2 Area End Here -->

@endsection