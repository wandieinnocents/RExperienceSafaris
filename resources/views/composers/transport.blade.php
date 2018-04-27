@foreach($transports as $transport)

<div class="col-md-6 col-sm-6">
  <div class="listing-shot grid-style">
    <div class="listing-badge now-open">Available</div>
    <a>
      <div class="listing-shot-img">
        <img src="{{ $transport->image }}" class="img-responsive" alt="">
        <span class="approve-listing"><i class="fa fa-check"></i></span>
      </div>
      <div class="listing-shot-caption">
        <h4>{{ $transport->title }}</h4>

        <p class="listing-location">

    <?= substr($transport->description,0,60) ?> <?= strlen($transport->description) > 60 ? " ..." : "" ?>        </p>
        <span class="like-listing style-2"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
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
          <a href="transports/{{ $transport->id }}" class="detail-link">View Details</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endforeach
