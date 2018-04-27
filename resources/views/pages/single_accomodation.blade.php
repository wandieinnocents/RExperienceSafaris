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
  <section class="title-transparent page-title" style="background:url({{ asset('assets/img/title-bg.jpg') }});">
    <div class="container">
      <div class="title-content">
        <h1>{{ $accomodation->title }}</h1>
        <div class="breadcrumbs">
          <a href="{{ url('/') }}">Home</a>
          <span class="gt3_breadcrumb_divider"></span>
          <span class="current">{{ $accomodation->title }}</span>
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <!-- ================ End Page Title ======================= -->

  <!-- ===================== Blogs In Grid ===================== -->
  <section>
    <div class="container">

      <div class="row">
        <!-- =============== Blog Detail ================= -->
        <div class="col-md-8 col-sm-12">

          <!-- /.Article -->
          <article class="blog-news detail-wrapper">
            <div class="full-blog">

              <!-- Featured Image -->
              <figure class="img-holder">
                <a href="#"><img src="{{ asset($accomodation->image) }}" class="img-responsive" alt="News"></a>

              </figure>

              <!-- Blog Content -->
              <div class="full blog-content">
                <a href="blog-detail.html"><h3>{{ $accomodation->title }}</h3></a>
                <div class="blog-text">
                  {!! $accomodation->description !!}
                </div>
              </div>
              <!-- Blog Content -->

            </div>
          </article>
          <!-- /.Article -->

        </div>
        <!-- /.col-md-8 -->

        <!-- ===================== Blog Sidebar ==================== -->
        <div class="col-md-4 col-sm-12">
          @include('includes.sidebar')
        </div>

      </div>

    </div>
  </section>
  <!-- ===================== End Blogs In Grid ===================== -->

@endsection
