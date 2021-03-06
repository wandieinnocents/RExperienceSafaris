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
      <h1>Plan Your Trip</h1>
      <div class="breadcrumbs">
        <a href="#">Home</a>
        <span class="gt3_breadcrumb_divider"></span>
        <span class="current">Plan Trip</span>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- ================ End Page Title ======================= -->

<!-- ================ Start Add Listing Section ======================= -->
<section>
  <div class="container">
    <div class="col-md-10 col-sm-12 col-md-offset-1 mob-padd-0">
      <!-- General Information -->
      <div class="add-listing-box general-info mrg-bot-25 padd-bot-30 padd-top-25">
        <div class="listing-box-header">
          <i class="ti-files theme-cl"></i>
          <h3>General Information</h3>
          <p>Write something general information about your listing</p>
        </div>
        <form>
          <div class="row mrg-r-10 mrg-l-10">
            <div class="col-sm-6">
              <label>Listing Title</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-sm-6">
              <label>Keyword</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-sm-6">
              <label>Category</label>
              <select data-placeholder="Choose Category" class="form-control chosen-select" tabindex="2">
                <option>Select</option>
                <option>Eat & Drink</option>
                <option>Food & Restaurants</option>
                <option>Fitness</option>
                <option>Hospital</option>
                <option>Education</option>
                <option>Sport</option>
              </select>
            </div>
            <div class="col-sm-6">
              <label>Website</label>
              <input type="text" class="form-control">
            </div>
          </div>
        </form>
      </div>
      <!-- End General Information -->

      <!-- Add Location -->
      <div class="add-listing-box add-location mrg-bot-25 padd-bot-30 padd-top-25">
        <div class="listing-box-header">
          <i class="ti-location-pin theme-cl"></i>
          <h3>Add Location</h3>
          <p>Write Address Information about your listing Location</p>
        </div>
        <form>
          <div class="row mrg-r-10 mrg-l-10">
            <div class="col-sm-6">
              <label>Address</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-sm-6">
              <label>Temporary Address</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-sm-6">
              <label>City</label>
              <select data-placeholder="Choose City" class="form-control chosen-select" tabindex="2">
                <option>New York</option>
                <option>Los Angeles</option>
                <option>Chicago</option>
                <option>Phoenix</option>
              </select>
            </div>
            <div class="col-sm-6">
              <label>State</label>
              <select data-placeholder="Choose Sate" class="form-control chosen-select" tabindex="2">
                <option>New York</option>
                <option>Los Angeles</option>
                <option>Chicago</option>
                <option>Phoenix</option>
              </select>
            </div>
            <div class="col-sm-6">
              <label>Country</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-sm-6">
              <label>Zip-Code</label>
              <input type="text" class="form-control">
            </div>
          </div>
        </form>
      </div>
      <!-- End Add Location -->

      <!-- Full Information -->
      <div class="add-listing-box full-detail mrg-bot-25 padd-bot-30 padd-top-25">
        <div class="listing-box-header">
          <i class="ti-write theme-cl"></i>
          <h3>Full Details</h3>
          <p>Write full detail information about listing Owner</p>
        </div>
        <form>
          <div class="row mrg-r-10 mrg-l-10">
            <div class="col-sm-6">
              <label>Owner Name</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-sm-6">
              <label>Email</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-sm-6">
              <label>Phone</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-sm-6">
              <label>Website</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-sm-6">
              <label>Owner Designation</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-sm-6">
              <label>Company</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-sm-6">
              <label><i class="fa fa-facebook mrg-r-5" aria-hidden="true"></i>Facebook Link</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-sm-6">
              <label><i class="fa fa-twitter mrg-r-5" aria-hidden="true"></i>Twitter User</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-sm-6">
              <label><i class="fa fa-google-plus mrg-r-5" aria-hidden="true"></i>Google Plus</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-sm-6">
              <label><i class="fa fa-linkedin-square mrg-r-5" aria-hidden="true"></i>Linked In</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-sm-12">
              <label>Description</label>
              <textarea class="h-100 form-control"></textarea>
            </div>

          </div>
        </form>
      </div>
      <!-- End Full Information -->

      <!-- Add Gallery Information -->
      <div class="add-listing-box full-detail mrg-bot-25 padd-bot-30 padd-top-25">
        <div class="listing-box-header">
          <i class="ti-gallery theme-cl"></i>
          <h3>Add Gallery</h3>
          <p>Write full detail information about listing Owner</p>
        </div>
        <form action="http://themezhub.com/upload-target" class="dropzone dz-clickable primary-dropzone">
          <div class="dz-default dz-message">
            <i class="ti-gallery"></i>
            <span>Drag & Drop To Change Logo</span>
          </div>
        </form>
      </div>
      <!-- End Add Gallery Information -->

      <!-- Amenities Information -->
      <div class="add-listing-box amenities mrg-bot-25 padd-bot-30 padd-top-25">
        <div class="listing-box-header">
          <i class="ti-gift theme-cl"></i>
          <h3>Amenities</h3>
          <p>Write something general information about your listing</p>
        </div>
        <form>
          <div class="row mrg-r-10 mrg-l-10">
            <div class="col-sm-4">
              <span class="custom-checkbox d-block">
                <input type="checkbox" id="select1">
                <label for="select1"></label>
                Alarm system
              </span>
              <span class="custom-checkbox d-block">
                <input type="checkbox" id="select2">
                <label for="select2"></label>
                Depanneur in building
              </span>
              <span class="custom-checkbox d-block">
                <input type="checkbox" id="select3">
                <label for="select3"></label>
                Onsite management
              </span>
              <span class="custom-checkbox d-block">
                <input type="checkbox" id="select4">
                <label for="select4"></label>
                Janitor
              </span>
              <span class="custom-checkbox d-block">
                <input type="checkbox" id="select5">
                <label for="select5"></label>
                Security cameras
              </span>
            </div>

            <div class="col-sm-4">
              <span class="custom-checkbox d-block">
                <input type="checkbox" id="select6">
                <label for="select6"></label>
                dLaundry room in building
              </span>
              <span class="custom-checkbox d-block">
                <input type="checkbox" id="select7">
                <label for="select7"></label>
                Door attendant
              </span>
              <span class="custom-checkbox d-block">
                <input type="checkbox" id="select8">
                <label for="select8"></label>
                Street parking
              </span>
              <span class="custom-checkbox d-block">
                <input type="checkbox" id="select9">
                <label for="select9"></label>
                Intercom
              </span>
              <span class="custom-checkbox d-block">
                <input type="checkbox" id="select10">
                <label for="select10"></label>
                Attached garage
              </span>
            </div>

            <div class="col-sm-4">
              <span class="custom-checkbox d-block">
                <input type="checkbox" id="select11">
                <label for="select11"></label>
                Elevator
              </span>
              <span class="custom-checkbox d-block">
                <input type="checkbox" id="select12">
                <label for="select12"></label>
                Wheelchair accessible
              </span>
              <span class="custom-checkbox d-block">
                <input type="checkbox" id="select13">
                <label for="select13"></label>
                Heating
              </span>
              <span class="custom-checkbox d-block">
                <input type="checkbox" id="select14">
                <label for="select14"></label>
                Hot water
              </span>
              <span class="custom-checkbox d-block">
                <input type="checkbox" id="select15">
                <label for="select15"></label>
                Electricity
              </span>
            </div>

          </div>
        </form>
      </div>
      <!-- End Amenities Information -->

      <!-- Opening Hours Information -->
      <div class="add-listing-box opening-day mrg-bot-25 padd-bot-30 padd-top-25">
        <div class="listing-box-header">
          <i class="ti-time theme-cl"></i>
          <h3>Opening Hours</h3>
          <p>Write something general information about your listing</p>
        </div>
        <form>
          <div class="row mrg-r-10 mrg-l-10">
            <div class="col-sm-12 mob-padd-0">
              <div class="form-group">
                <label class="control-label col-md-2">Monday</label>
                <div class="col-md-5">
                  <select data-placeholder="Choose Time" class="form-control chosen-select" tabindex="2">
                    <option>Opening Time</option>
                    <option>1 :00 AM</option>
                    <option>2 :00 AM</option>
                    <option>3 :00 AM</option>
                    <option>4 :00 AM</option>
                    <option>5 :00 AM</option>
                    <option>6 :00 AM</option>
                    <option>7 :00 AM</option>
                    <option>8 :00 AM</option>
                    <option>9 :00 AM</option>
                    <option>10 :00 AM</option>
                    <option>11 :00 AM</option>
                    <option>12 :00 AM</option>
                    <option>1 :00 PM</option>
                    <option>2 :00 PM</option>
                    <option>3 :00 PM</option>
                    <option>4 :00 PM</option>
                    <option>5 :00 PM</option>
                    <option>6 :00 PM</option>
                    <option>7 :00 PM</option>
                    <option>8 :00 PM</option>
                    <option>9 :00 PM</option>
                    <option>10 :00 PM</option>
                    <option>11 :00 PM</option>
                    <option>12 :00 PM</option>
                    <option>Closed</option>
                  </select>
                </div>
                <div class="col-md-5">
                  <select data-placeholder="Choose Time" class="form-control chosen-select" tabindex="2">
                    <option>Closing Time</option>
                    <option>1 :00 AM</option>
                    <option>2 :00 AM</option>
                    <option>3 :00 AM</option>
                    <option>4 :00 AM</option>
                    <option>5 :00 AM</option>
                    <option>6 :00 AM</option>
                    <option>7 :00 AM</option>
                    <option>8 :00 AM</option>
                    <option>9 :00 AM</option>
                    <option>10 :00 AM</option>
                    <option>11 :00 AM</option>
                    <option>12 :00 AM</option>
                    <option>1 :00 PM</option>
                    <option>2 :00 PM</option>
                    <option>3 :00 PM</option>
                    <option>4 :00 PM</option>
                    <option>5 :00 PM</option>
                    <option>6 :00 PM</option>
                    <option>7 :00 PM</option>
                    <option>8 :00 PM</option>
                    <option>9 :00 PM</option>
                    <option>10 :00 PM</option>
                    <option>11 :00 PM</option>
                    <option>12 :00 PM</option>
                    <option>Closed</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2">Tuesday</label>
                <div class="col-md-5">
                  <select data-placeholder="Choose Time" class="form-control chosen-select" tabindex="2">
                    <option>Opening Time</option>
                    <option>1 :00 AM</option>
                    <option>2 :00 AM</option>
                    <option>3 :00 AM</option>
                    <option>4 :00 AM</option>
                    <option>5 :00 AM</option>
                    <option>6 :00 AM</option>
                    <option>7 :00 AM</option>
                    <option>8 :00 AM</option>
                    <option>9 :00 AM</option>
                    <option>10 :00 AM</option>
                    <option>11 :00 AM</option>
                    <option>12 :00 AM</option>
                    <option>1 :00 PM</option>
                    <option>2 :00 PM</option>
                    <option>3 :00 PM</option>
                    <option>4 :00 PM</option>
                    <option>5 :00 PM</option>
                    <option>6 :00 PM</option>
                    <option>7 :00 PM</option>
                    <option>8 :00 PM</option>
                    <option>9 :00 PM</option>
                    <option>10 :00 PM</option>
                    <option>11 :00 PM</option>
                    <option>12 :00 PM</option>
                    <option>Closed</option>
                  </select>
                </div>
                <div class="col-md-5">
                  <select data-placeholder="Choose Time" class="form-control chosen-select" tabindex="2">
                    <option>Closing Time</option>
                    <option>1 :00 AM</option>
                    <option>2 :00 AM</option>
                    <option>3 :00 AM</option>
                    <option>4 :00 AM</option>
                    <option>5 :00 AM</option>
                    <option>6 :00 AM</option>
                    <option>7 :00 AM</option>
                    <option>8 :00 AM</option>
                    <option>9 :00 AM</option>
                    <option>10 :00 AM</option>
                    <option>11 :00 AM</option>
                    <option>12 :00 AM</option>
                    <option>1 :00 PM</option>
                    <option>2 :00 PM</option>
                    <option>3 :00 PM</option>
                    <option>4 :00 PM</option>
                    <option>5 :00 PM</option>
                    <option>6 :00 PM</option>
                    <option>7 :00 PM</option>
                    <option>8 :00 PM</option>
                    <option>9 :00 PM</option>
                    <option>10 :00 PM</option>
                    <option>11 :00 PM</option>
                    <option>12 :00 PM</option>
                    <option>Closed</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2">Wednesday</label>
                <div class="col-md-5">
                  <select data-placeholder="Choose Time" class="form-control chosen-select" tabindex="2">
                    <option>Opening Time</option>
                    <option>1 :00 AM</option>
                    <option>2 :00 AM</option>
                    <option>3 :00 AM</option>
                    <option>4 :00 AM</option>
                    <option>5 :00 AM</option>
                    <option>6 :00 AM</option>
                    <option>7 :00 AM</option>
                    <option>8 :00 AM</option>
                    <option>9 :00 AM</option>
                    <option>10 :00 AM</option>
                    <option>11 :00 AM</option>
                    <option>12 :00 AM</option>
                    <option>1 :00 PM</option>
                    <option>2 :00 PM</option>
                    <option>3 :00 PM</option>
                    <option>4 :00 PM</option>
                    <option>5 :00 PM</option>
                    <option>6 :00 PM</option>
                    <option>7 :00 PM</option>
                    <option>8 :00 PM</option>
                    <option>9 :00 PM</option>
                    <option>10 :00 PM</option>
                    <option>11 :00 PM</option>
                    <option>12 :00 PM</option>
                    <option>Closed</option>
                  </select>
                </div>
                <div class="col-md-5">
                  <select data-placeholder="Choose Time" class="form-control chosen-select" tabindex="2">
                    <option>Closing Time</option>
                    <option>1 :00 AM</option>
                    <option>2 :00 AM</option>
                    <option>3 :00 AM</option>
                    <option>4 :00 AM</option>
                    <option>5 :00 AM</option>
                    <option>6 :00 AM</option>
                    <option>7 :00 AM</option>
                    <option>8 :00 AM</option>
                    <option>9 :00 AM</option>
                    <option>10 :00 AM</option>
                    <option>11 :00 AM</option>
                    <option>12 :00 AM</option>
                    <option>1 :00 PM</option>
                    <option>2 :00 PM</option>
                    <option>3 :00 PM</option>
                    <option>4 :00 PM</option>
                    <option>5 :00 PM</option>
                    <option>6 :00 PM</option>
                    <option>7 :00 PM</option>
                    <option>8 :00 PM</option>
                    <option>9 :00 PM</option>
                    <option>10 :00 PM</option>
                    <option>11 :00 PM</option>
                    <option>12 :00 PM</option>
                    <option>Closed</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2">Thursday</label>
                <div class="col-md-5">
                  <select data-placeholder="Choose Time" class="form-control chosen-select" tabindex="2">
                    <option>Opening Time</option>
                    <option>1 :00 AM</option>
                    <option>2 :00 AM</option>
                    <option>3 :00 AM</option>
                    <option>4 :00 AM</option>
                    <option>5 :00 AM</option>
                    <option>6 :00 AM</option>
                    <option>7 :00 AM</option>
                    <option>8 :00 AM</option>
                    <option>9 :00 AM</option>
                    <option>10 :00 AM</option>
                    <option>11 :00 AM</option>
                    <option>12 :00 AM</option>
                    <option>1 :00 PM</option>
                    <option>2 :00 PM</option>
                    <option>3 :00 PM</option>
                    <option>4 :00 PM</option>
                    <option>5 :00 PM</option>
                    <option>6 :00 PM</option>
                    <option>7 :00 PM</option>
                    <option>8 :00 PM</option>
                    <option>9 :00 PM</option>
                    <option>10 :00 PM</option>
                    <option>11 :00 PM</option>
                    <option>12 :00 PM</option>
                    <option>Closed</option>
                  </select>
                </div>
                <div class="col-md-5">
                  <select data-placeholder="Choose Time" class="form-control chosen-select" tabindex="2">
                    <option>Closing Time</option>
                    <option>1 :00 AM</option>
                    <option>2 :00 AM</option>
                    <option>3 :00 AM</option>
                    <option>4 :00 AM</option>
                    <option>5 :00 AM</option>
                    <option>6 :00 AM</option>
                    <option>7 :00 AM</option>
                    <option>8 :00 AM</option>
                    <option>9 :00 AM</option>
                    <option>10 :00 AM</option>
                    <option>11 :00 AM</option>
                    <option>12 :00 AM</option>
                    <option>1 :00 PM</option>
                    <option>2 :00 PM</option>
                    <option>3 :00 PM</option>
                    <option>4 :00 PM</option>
                    <option>5 :00 PM</option>
                    <option>6 :00 PM</option>
                    <option>7 :00 PM</option>
                    <option>8 :00 PM</option>
                    <option>9 :00 PM</option>
                    <option>10 :00 PM</option>
                    <option>11 :00 PM</option>
                    <option>12 :00 PM</option>
                    <option>Closed</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2">Friday</label>
                <div class="col-md-5">
                  <select data-placeholder="Choose Time" class="form-control chosen-select" tabindex="2">
                    <option>Opening Time</option>
                    <option>1 :00 AM</option>
                    <option>2 :00 AM</option>
                    <option>3 :00 AM</option>
                    <option>4 :00 AM</option>
                    <option>5 :00 AM</option>
                    <option>6 :00 AM</option>
                    <option>7 :00 AM</option>
                    <option>8 :00 AM</option>
                    <option>9 :00 AM</option>
                    <option>10 :00 AM</option>
                    <option>11 :00 AM</option>
                    <option>12 :00 AM</option>
                    <option>1 :00 PM</option>
                    <option>2 :00 PM</option>
                    <option>3 :00 PM</option>
                    <option>4 :00 PM</option>
                    <option>5 :00 PM</option>
                    <option>6 :00 PM</option>
                    <option>7 :00 PM</option>
                    <option>8 :00 PM</option>
                    <option>9 :00 PM</option>
                    <option>10 :00 PM</option>
                    <option>11 :00 PM</option>
                    <option>12 :00 PM</option>
                    <option>Closed</option>
                  </select>
                </div>
                <div class="col-md-5">
                  <select data-placeholder="Choose Time" class="form-control chosen-select" tabindex="2">
                    <option>Closing Time</option>
                    <option>1 :00 AM</option>
                    <option>2 :00 AM</option>
                    <option>3 :00 AM</option>
                    <option>4 :00 AM</option>
                    <option>5 :00 AM</option>
                    <option>6 :00 AM</option>
                    <option>7 :00 AM</option>
                    <option>8 :00 AM</option>
                    <option>9 :00 AM</option>
                    <option>10 :00 AM</option>
                    <option>11 :00 AM</option>
                    <option>12 :00 AM</option>
                    <option>1 :00 PM</option>
                    <option>2 :00 PM</option>
                    <option>3 :00 PM</option>
                    <option>4 :00 PM</option>
                    <option>5 :00 PM</option>
                    <option>6 :00 PM</option>
                    <option>7 :00 PM</option>
                    <option>8 :00 PM</option>
                    <option>9 :00 PM</option>
                    <option>10 :00 PM</option>
                    <option>11 :00 PM</option>
                    <option>12 :00 PM</option>
                    <option>Closed</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2">Saturday</label>
                <div class="col-md-5">
                  <select data-placeholder="Choose Time" class="form-control chosen-select" tabindex="2">
                    <option>Opening Time</option>
                    <option>1 :00 AM</option>
                    <option>2 :00 AM</option>
                    <option>3 :00 AM</option>
                    <option>4 :00 AM</option>
                    <option>5 :00 AM</option>
                    <option>6 :00 AM</option>
                    <option>7 :00 AM</option>
                    <option>8 :00 AM</option>
                    <option>9 :00 AM</option>
                    <option>10 :00 AM</option>
                    <option>11 :00 AM</option>
                    <option>12 :00 AM</option>
                    <option>1 :00 PM</option>
                    <option>2 :00 PM</option>
                    <option>3 :00 PM</option>
                    <option>4 :00 PM</option>
                    <option>5 :00 PM</option>
                    <option>6 :00 PM</option>
                    <option>7 :00 PM</option>
                    <option>8 :00 PM</option>
                    <option>9 :00 PM</option>
                    <option>10 :00 PM</option>
                    <option>11 :00 PM</option>
                    <option>12 :00 PM</option>
                    <option>Closed</option>
                  </select>
                </div>
                <div class="col-md-5">
                  <select data-placeholder="Choose Time" class="form-control chosen-select" tabindex="2">
                    <option>Closing Time</option>
                    <option>1 :00 AM</option>
                    <option>2 :00 AM</option>
                    <option>3 :00 AM</option>
                    <option>4 :00 AM</option>
                    <option>5 :00 AM</option>
                    <option>6 :00 AM</option>
                    <option>7 :00 AM</option>
                    <option>8 :00 AM</option>
                    <option>9 :00 AM</option>
                    <option>10 :00 AM</option>
                    <option>11 :00 AM</option>
                    <option>12 :00 AM</option>
                    <option>1 :00 PM</option>
                    <option>2 :00 PM</option>
                    <option>3 :00 PM</option>
                    <option>4 :00 PM</option>
                    <option>5 :00 PM</option>
                    <option>6 :00 PM</option>
                    <option>7 :00 PM</option>
                    <option>8 :00 PM</option>
                    <option>9 :00 PM</option>
                    <option>10 :00 PM</option>
                    <option>11 :00 PM</option>
                    <option>12 :00 PM</option>
                    <option>Closed</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2">Sunday</label>
                <div class="col-md-5">
                  <select data-placeholder="Choose Time" class="form-control chosen-select" tabindex="2">
                    <option>Opening Time</option>
                    <option>1 :00 AM</option>
                    <option>2 :00 AM</option>
                    <option>3 :00 AM</option>
                    <option>4 :00 AM</option>
                    <option>5 :00 AM</option>
                    <option>6 :00 AM</option>
                    <option>7 :00 AM</option>
                    <option>8 :00 AM</option>
                    <option>9 :00 AM</option>
                    <option>10 :00 AM</option>
                    <option>11 :00 AM</option>
                    <option>12 :00 AM</option>
                    <option>1 :00 PM</option>
                    <option>2 :00 PM</option>
                    <option>3 :00 PM</option>
                    <option>4 :00 PM</option>
                    <option>5 :00 PM</option>
                    <option>6 :00 PM</option>
                    <option>7 :00 PM</option>
                    <option>8 :00 PM</option>
                    <option>9 :00 PM</option>
                    <option>10 :00 PM</option>
                    <option>11 :00 PM</option>
                    <option>12 :00 PM</option>
                    <option>Closed</option>
                  </select>
                </div>
                <div class="col-md-5">
                  <select data-placeholder="Choose Time" class="form-control chosen-select" tabindex="2">
                    <option>Closing Time</option>
                    <option>1 :00 AM</option>
                    <option>2 :00 AM</option>
                    <option>3 :00 AM</option>
                    <option>4 :00 AM</option>
                    <option>5 :00 AM</option>
                    <option>6 :00 AM</option>
                    <option>7 :00 AM</option>
                    <option>8 :00 AM</option>
                    <option>9 :00 AM</option>
                    <option>10 :00 AM</option>
                    <option>11 :00 AM</option>
                    <option>12 :00 AM</option>
                    <option>1 :00 PM</option>
                    <option>2 :00 PM</option>
                    <option>3 :00 PM</option>
                    <option>4 :00 PM</option>
                    <option>5 :00 PM</option>
                    <option>6 :00 PM</option>
                    <option>7 :00 PM</option>
                    <option>8 :00 PM</option>
                    <option>9 :00 PM</option>
                    <option>10 :00 PM</option>
                    <option>11 :00 PM</option>
                    <option>12 :00 PM</option>
                    <option>Closed</option>
                  </select>
                </div>
              </div>

            </div>
          </div>
        </form>
      </div>
      <!-- End Opening Hours Information -->

      <div class="text-center">
        <a href="#" class="btn theme-btn" title="Submit Listing">Submit Listing</a>
      </div>
    </div>

  </div>
</section>
<!-- ================ End Add Listing Section ======================= -->

@endsection
