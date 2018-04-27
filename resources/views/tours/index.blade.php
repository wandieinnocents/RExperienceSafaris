@extends('layouts.app')

@section('title')

@endsection

@section('keywords')

@endsection

@section('desc')

@endsection

@section('css')
 <style media="screen">
   .tour-color {
     color: #334e6f;
     font-size: 17px;
     font-weight: bolder;
   }
 </style>
@endsection

@section('content')


<div class="clearfix"></div>

<!-- ================ Start Page Title ======================= -->
<section class="title-transparent page-title" style="background:url(assets/img/title-bg.jpg);">
  <div class="container">
    <div class="title-content">
      <h1>{{ $category->name }}</h1>
      <div class="breadcrumbs">
        <a href="{{ url('/') }}">Home</a>
        <span class="gt3_breadcrumb_divider"></span>
        <span class="current">{{ $category->name }}</span>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- ================ End Page Title ======================= -->

<!-- ================ Listing In Vertical style with Sidebar ======================= -->
<section class="show-case">
  <div class="container">
    <div class="row">
      <!-- Start Sidebar -->
      <div class="col-md-3 col-sm-12">
        @include('includes.sidebar')
      </div>
      <!-- End Start Sidebar -->

      <!-- Start Vertical Listing -->
      <div class="col-md-9 col-sm-12">
        @foreach ($tours as $tour)
          <div class="verticleilist listing-shot">
            <div class="listing-badge now-open">{{ $tour->category->name }}</div>
            <a class="listing-item" href="{{ url('tours/'.$tour->category->slug.'/'.$tour->slug) }}">
              <div class="listing-shot-img">
                <img src="{{ asset($tour->image) }}" class="img-responsive" alt="">
              </div>
            </a>
            <div class="verticle-listing-caption">
              <div class="listing-shot-caption">
                <h4><a href="{{ url('tours/'.$tour->category->slug.'/'.$tour->slug) }}">{{ $tour->title }}</a></h4>
                <p class="listing-description">{!! substr($tour->content,0,200) !!} {{ strlen($tour->content) > 200 ? '...' : '' }}</p>
              </div>
              <div class="listing-shot-info">
                <div class="row extra">
                  <div class="col-md-12">
                    <div class="listing-detail-info">
                      @foreach ($tour->tags as $tag)
                        <span><i class="fa fa-check" aria-hidden="true"></i>{{ $tag->name }}</span>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
              <div class="listing-shot-info rating">
                <div class="row extra">
                  <div class="col-md-7 col-sm-7 col-xs-6 tour-color notice notice-danger">
                    @foreach ($tour->rates as $rate)
                      <i class="fa fa-money"></i> ${{ $rate->price }}
                      <i class="fa fa-user"></i> {{ $rate->person }} Person
                      <i class="fa fa-calendar"></i> {{ $rate->days }} Days
                    @endforeach
                  </div>
                  <div class="col-md-5 col-sm-5 col-xs-6 pull-right btn-tour">
                    <a href="{{ url('tours/'.$tour->category->slug.'/'.$tour->slug) }}" class="btn listing-btn ">More Information</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach


      <!-- End Vertical Listing -->
    </div>
    <!-- Start Pagination -->
    <div class="row">
      <div class="col-md-12">
        <div class="bs-example">
          {{ $tours->links() }}
        </div>
      </div>
    </div>
    <!-- End Pagination -->
  </div>
</section>
<!-- ================ End Listing In Vertical style with Sidebar ======================= -->

@endsection
