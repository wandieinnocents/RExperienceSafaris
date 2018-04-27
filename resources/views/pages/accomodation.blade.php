@extends('layouts.app')

@section('title')

@endsection

@section('keywords')

@endsection

@section('desc')

@endsection

@section('content')

  <div class="clearfix"></div>


  <!-- ================ Start Page Title ======================= -->
  <section class="title-transparent page-title" style="background:url(assets/img/title-bg.jpg);">
    <div class="container">
      <div class="title-content">
        <h1>Accomodation</h1>
        <div class="breadcrumbs">
          <a href="{{ url('/') }}">Home</a>
          <span class="gt3_breadcrumb_divider"></span>
          <span class="current">Accomodation</span>
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <!-- ================ End Page Title ======================= -->

  <!-- ===================== Blogs In Grid ===================== -->
  <section>
    <div class="container">
      @foreach ($accomodations->chunk(3) as $chunk)
        <div class="row">
          @foreach ($chunk as $accomodation)
            <div class="col-md-4 col-sm-6">
              <div class="listing-shot grid-style">
                <a href="{{ url('/accomodation/'.$accomodation->slug) }}">
                  <div class="listing-shot-img">
                    <img src="{{ asset($accomodation->image) }}" class="img-responsive" alt="">
                  </div>
                  <div class="listing-shot-caption">
                    <h4>{{ substr($accomodation->title, 0,50) }}</h4>
                    <p class="listing-location">{!! substr($accomodation->description, 0, 100) !!} ...</p>
                  </div>
                </a>
                <div class="listing-shot-info rating">
                  <div class="row extra">
                    <div class="col-md-5 col-sm-5 col-xs-6 pull-right">
                      <a href="{{ url('/accomodation/'.$accomodation->slug) }}" class="detail-link">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          @endforeach
        </div>
      @endforeach
      <div class="row">
				<div class="col-md-12">
					<div class="bs-example">
						{{ $accomodations->links() }}
					</div>
				</div>
			</div>
    </div>
  </section>
  <!-- ===================== End Blogs In Grid ===================== -->

@endsection
