<div class="sidebar">

  <div class="widget-boxed">
		<div class="widget-boxed-header border-0">
			<h4><i class="ti-search padd-r-10"></i>Search Here</h4>
		</div>

		<div class="widget-boxed-body padd-top-5">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search&hellip;">
				<span class="input-group-btn">
					<button type="button" class="btn height-50 theme-btn">Go</button>
				</span>
			</div>
		</div>

	</div>

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
