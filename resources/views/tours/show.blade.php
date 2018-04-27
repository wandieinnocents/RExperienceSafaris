@extends('layouts.app')

@section('title')

@endsection

@section('keywords')

@endsection

@section('desc')

@endsection

@section('css-date')
<!-- Fancybox css -->
<link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.css') }}">

<!-- Time Dropper -->
  <link href="{{ asset('assets/plugins/time-dropper/timedropper.css') }}" rel="stylesheet">

<!-- Rating Css -->
  <link href="{{ asset('assets/plugins/rating-js/jquery-rating.css') }}" rel="stylesheet">

<!-- Date Dropper -->
  <link href="{{ asset('assets/plugins/date-dropper/datedropper.css') }}" rel="stylesheet">

@endsection

@section('css')
 <style media="screen">
   .tour-color {
     color: #334e6f;
     font-size: 20px;
     font-weight: bolder;
   }
 </style>
@endsection

@section('content')

  <div class="clearfix"></div>


  <!-- ================ Listing Detail Basic Information ======================= -->
  <section class="detail-section" style="background:url({{ asset($tour->image) }});">
    <div class="overlay" style="background-color: rgb(36, 36, 41); opacity: 0.5;"></div>
    <div class="profile-cover-content">
      <div class="container">
        <div class="cover-buttons">
        </div>

    </div>
  </section>
  <!-- ================ End Listing Detail Basic Information ======================= -->

  <!-- ================ Listing Detail Full Information ======================= -->
  <section class="list-detail">
    <div class="container">
      <div class="row">
        <!-- Start: Listing Detail Wrapper -->
        <div class="col-md-8 col-sm-8">

          <div class="detail-wrapper">
            <div class="detail-wrapper-body">
              <div class="listing-title-bar">
                <h3>{{ $tour->title }}<span class="mrg-l-5 category-tag"><a href="{{ url('tours/'.$tour->category->slug) }}">{{ $tour->category->name }}</a></span></h3>
              </div>
            </div>
          </div>

          <div class="detail-wrapper">
            <div class="detail-wrapper-body">
              <div class="listing-title-bar tour-color notice notice-danger">
                @foreach ($tour->rates as $rate)
                  <p class="tour-color">
                    <i class="fa fa-money"></i> ${{ $rate->price }}
                    <i class="fa fa-user"></i> {{ $rate->person }} Person
                    <i class="fa fa-calendar"></i> {{ $rate->days }} Days
                  </p>
                @endforeach
              </div>
            </div>
          </div>

          <div class="detail-wrapper">
            <div class="detail-wrapper-header">
              <h4>About Tour</h4>
            </div>
            <div class="detail-wrapper-body">
              {!! $tour->content !!}
            </div>
          </div>

          <div class="detail-wrapper">
            <div class="detail-wrapper-header">
              <h4>Highlights</h4>
            </div>
            <div class="detail-wrapper-body">
              <ul class="detail-check">
                @foreach ($tour->tags as $tag)
                  <li>{{ $tag->name }}</li>
                @endforeach
              </ul>
            </div>
          </div>

          <div class="detail-wrapper">
            <div class="detail-wrapper-header">
              <h4>Location</h4>
            </div>
            <div class="detail-wrapper-body">
              <div id="map" class="full-width" style="height:400px;"></div>
            </div>
          </div>

          <div class="detail-wrapper">
            <div class="detail-wrapper-header">
              <h4><span id="dsq-count-scr"></span> Reviews</h4>
              <script id="dsq-count-scr" src="//royal-experience-africa.disqus.com/count.js" async></script>
            </div>
            <div class="detail-wrapper-body">
              <div id="disqus_thread"></div>
              <script>

              /**
              *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
              *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
              /*
              var disqus_config = function () {
              this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
              this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
              };
              */
              (function() { // DON'T EDIT BELOW THIS LINE
              var d = document, s = d.createElement('script');
              s.src = 'https://royal-experience-africa.disqus.com/embed.js';
              s.setAttribute('data-timestamp', +new Date());
              (d.head || d.body).appendChild(s);
              })();
              </script>
              <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            </div>
          </div>

        </div>
        <!-- End: Listing Detail Wrapper -->

        <!-- Sidebar Start -->
        <div class="col-md-4 col-sm-12">
          @include('includes.tour-sidebar')
        </div>
          <!-- End: Sidebar Start -->
      </div>
    </div>
  </section>
  <!-- ================ Listing Detail Full Information ======================= -->

@endsection

@section('js-date')

  <!-- fancybox Js -->
  <script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>

  <!-- Time dropper js-->
  <script src="{{ asset('assets/plugins/time-dropper/timedropper.js') }}"></script>

  <!-- Date dropper js-->
  <script src="{{ asset('assets/plugins/date-dropper/datedropper.js') }}"></script>

  <!-- Bootstrap Count -->
  <script src="{{ asset('assets/plugins/jqueryadd/jqueryadd-count.js') }}"></script>

  <!-- Slick Slider js-->
  <script src="{{ asset('assets/plugins/slick-slider/slick.js') }}"></script>

  <!-- counter js-->
  <script src="{{ asset('assets/plugins/jquery-counter/js/waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery-counter/js/jquery.counterup.min.js') }}"></script>

  <!-- Rating js -->
  <script src="{{ asset('assets/plugins/rating-js/jquery-rating.js') }}"></script>


@endsection

@section('js')

  <script>
    function initMap() {
      var uluru = {lat: {{ $tour->latitude }}, lng: {{ $tour->longitude }}};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: uluru
      });
      var marker = new google.maps.Marker({
        position: uluru,
        map: map
      });
    }
  </script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJbF37D8W_yvZ6t8nSAtrRxKTrOr5fHm0&callback=initMap">
  </script>

  <script type="text/javascript">
			$("[data-fancybox]").fancybox({
				// Options will go here
			});
		</script>

		<!-- Date Dropper Script-->
		<script>
			$('#reservation-date').dateDropper();
		</script>

		<!-- Time Dropper Script-->
		<script>
			this.$('#reservation-time').timeDropper({
				setCurrentTime: false,
				meridians: true,
				primaryColor: "#e8212a",
				borderColor: "#e8212a",
				minutesInterval: '15'
			});
		</script>

		<!-- Rating Script -->
		<script>
			 $('.rating-opt').start(function(cur){
				console.log(cur);
				 $('#info').text(cur);
			});
		</script>


@endsection
