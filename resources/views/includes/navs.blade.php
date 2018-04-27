<ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
  <li><a href="{{ url('/') }}" >Home</a></li>
  <li><a href="{{ url('/about-us') }}" >About</a></li>


  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Royal Safaris</a>
    <ul class="dropdown-menu animated fadeOutUp">
      @foreach ($categories as $category)
        <li><a href="{{ url('tours/'.$category->slug) }}">{{ $category->name }}</a></li>
      @endforeach
    </ul>
  </li>

  <li class="dropdown">
    <a href="login.html" class="dropdown-toggle" data-toggle="dropdown">Explore</a>
    <ul class="dropdown-menu animated fadeOutUp">
      <li><a href="{{ url('/plan-trip') }}">Plan Your Trip</a></li>
      <li><a href="{{ url('/accomodation') }}">Accomodation</a></li>

      <li><a href="{{ url('/transport') }}">Transport</a></li>



    </ul>
  </li>
  <li><a href="{{ url('/contact-us') }}" >Contact</a></li>


</ul>
<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
  <li><a href="javascript:void(0)" data-toggle="modal" data-target="#signup">Sign In</a></li>
</ul>
