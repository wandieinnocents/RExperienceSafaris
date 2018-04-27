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

<div class="food-menu2-area">
	<div class="container" id="inner-isotope">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="isotop-classes-tab myisotop">
					<a href="#" data-filter="*" class="current">All</a>

				</div>
			</div>
		</div>
		<div class="row featuredContainer">
			@include('composers.gallery')
		</div>
	</div>
</div>
<!-- Food Menu 2 Area End Here -->


@endsection