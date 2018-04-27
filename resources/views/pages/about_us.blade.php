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
<section class="title-transparent page-title" style="background:url(assets/img/aboutone.jpg);">
  <div class="container">
    <div class="title-content">
      <h1>About Us</h1>
      <div class="breadcrumbs">
        <a href="{{ url('/') }}">Home</a>
        <span class="gt3_breadcrumb_divider"></span>
        <span class="current">About</span>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- ================ End Page Title ======================= -->

<!-- ================ Start Accordion Component ======================= -->
<section>
  <div class="container">
    <div class="col-md-6 col-sm-12">
      <div class="panel-group style-1" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="designing">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
               BUSINESS TOURISM 
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="designing">
            <div class="panel-body">
              <p>At Royal Experience Africa we value tourism and believe as people travel and adventure, business opportunities and investments too are core.

              In our business Tourism, we organize your business trips in your designed destination and also make you explore the various investment opportunites in our various destination. 

              Business conferences and events. </p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="web-development">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Facts About Uganda
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="web-development">
            <div class="panel-body">
              <p>Popularily Known as Pearl of Africa, for its magnificient beauty and weather
                  Capital city : Kampala
                  Best wild and adventoure destination
                  Source of longest river in the world (River Nile) is in you Uganda
                  Ugdandans are the Most Hospitable people in Africa if not the world
                  Uganda is a country with youngest population in the world world
                  English Speaking
                  Currency: Uganda Shillings. </p>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <div class="col-md-6 col-sm-12">
      <div class="panel-group style-2" id="accordion2" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="choose-us">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                WHO WE ARE
              </a>
            </h4>
          </div>
          <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="choose-us">
            <div class="panel-body">
              <p>Royal experience Africa
                Royal experience is a private  international Tourism Company with diverse tourism packages that redefines, safaris, adventures and vacation lifestyles. 

                Our nitche is to allow vast touch into the tourism industry through exploring the unknown, and experiencing the adventours with a royal lifestyle. Every client is considered royal to the world of adventures. </p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="who">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
               THIS EXPERIENCE
              </a>
            </h4>
          </div>
          <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="who">
            <div class="panel-body">
              <p>These are special organized trip within the year with budget friendly pricess at amazing adventures and experiences. </p>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </div>
</section>
<!-- ================ End Accordion Component ======================= -->




@endsection
