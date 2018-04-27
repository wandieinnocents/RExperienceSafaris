<div class="sidebar">

  <!-- Start: Book A Reservation -->
  <div class="widget-boxed">
    <div class="widget-boxed-header">
      <h4><i class="ti-calendar padd-r-10"></i>Book A Reservation</h4>
    </div>
    @include('includes.success')
    @include('includes.errors')
    <div class="widget-boxed-body">
      <form class="" action="{{ route('bookings.store') }}" method="post">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <input type="text" name="date" id="reservation-date" required data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
          </div>
          <div class="col-lg-6 col-md-12">
            <input type="text" name="time" id="reservation-time" class="form-control" required readonly="">
          </div>
          <div class="col-lg-12 col-md-12">
            <input type="name" name="name" placeholder="Name"  data-lang="en" data-theme="my-style" class="form-control" required>
          </div>
          <div class="col-lg-12 col-md-12">
            <input type="email" name="email" placeholder="Email"  data-lang="en" data-theme="my-style" class="form-control" required>
          </div>
          <div class="col-lg-12 col-md-12">
            <input type="text" name="phone" placeholder="phone"  data-lang="en" data-theme="my-style" class="form-control" required>
          </div>
          <input type="hidden" name="article_id" value="{{ $tour->id }}">
        </div>
        <div class="row mrg-top-15">
          <div class="col-lg-6 col-md-12">
            <label>Adult</label>
            <div class="input-group">

              <input type="text" name="adults" class="border-0 text-center form-control input-number" data-min="0" data-max="10" value="1">

            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <label>Children</label>
            <div class="input-group">

              <input type="text" name="children" class="border-0 text-center form-control input-number" data-min="0" data-max="10" value="0">

            </div>
          </div>
        </div>
        <button type="submit" class="btn reservation btn-radius theme-btn full-width mrg-top-10">Book Now</button>
      </form>

    </div>
  </div>
  <!-- End: Book A Reservation -->

  <!-- Start: Latest Listing -->
  <div class="widget-boxed">
    <div class="widget-boxed-header">
      <h4><i class="ti-check-box padd-r-10"></i>Latest Safaris</h4>
    </div>
    <div class="widget-boxed-body padd-top-5">
      <div class="side-list">
        <ul class="listing-list">
          @foreach ($tourz as $tour)
            <li>
              <a href="{{ url('tours/'.$tour->category->slug.'/'.$tour->slug) }}">
                <div class="listing-list-img">
                  <img src="{{ asset($tour->image) }}" class="img-responsive" alt="">
                </div>
              </a>
              <div class="listing-list-info">
                <h5><a href="{{ url('tours/'.$tour->category->slug.'/'.$tour->slug) }}" title="Listing">{{ substr($tour->title, 0, 30) }} {{ strlen($tour->title) > 30 ? '...' : '' }} </a></h5>
                <div class="listing-post-meta">
                  @foreach ($tour->rates->splice(0,1) as $rate)
                    <span class="updated">$ {{ $rate->price }}</span>
                  @endforeach
                   | <a href="{{ url('tours/'.$tour->category->slug) }}" rel="tag">{{ $tour->category->name }}</a>
                </div>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  <!-- End: Latest Listing -->

  <!-- Start: Listing Category -->
  <div class="widget-boxed">
    <div class="widget-boxed-header">
      <h4><i class="ti-briefcase padd-r-10"></i>Top Safaris</h4>
    </div>
    <div class="widget-boxed-body padd-top-10 padd-bot-0">
      <div class="side-list">
        <ul class="category-list">
          @foreach ($categories as $category)
            <li><a href="{{ url('tours/'.$category->slug) }}">{{ $category->name }} <span class="badge bg-g">{{ $category->articles->count() }}</span></a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  <!-- End: Listing Category -->

  <!-- Start: Opening hour -->
  <div class="widget-boxed">
    <div class="widget-boxed-header">
      <h4><i class="ti-time padd-r-10"></i>Opening Hours</h4>
    </div>
    <div class="widget-boxed-body">
      <div class="side-list">
        <ul>
          <li>Monday <span>9 AM - 5 PM</span></li>
          <li>Tuesday <span>9 AM - 5 PM</span></li>
          <li>Wednesday <span>9 AM - 5 PM</span></li>
          <li>Thursday <span>9 AM - 5 PM</span></li>
          <li>Friday <span>9 AM - 5 PM</span></li>
          <li>Saturday <span>9 AM - 3 PM</span></li>
          <li>Sunday <span>Closed</span></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End: Opening hour -->

  <!-- Start: Help & Support -->
  <div class="widget-boxed">
    <div class="widget-boxed-body padd-top-40 padd-bot-40 text-center">
      <div class="help-support">
        <i class="ti-headphone-alt font-60 theme-cl mrg-bot-15"></i>
        <p>Have Any Question? Mail Us</p>
        <h4 class="mrg-top-0" style="font-size: 14px; font-weight: bolder;">{{ Config::get('settings.email') }}</h4>
      </div>
    </div>
  </div>
  <!-- End: Help & Support -->
</div>
