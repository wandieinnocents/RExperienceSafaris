@extends('layouts.app')

@section('title')
    {{ $page->meta_title }}
@endsection

@section('keywords') 
    {{ $page->meta_keywords }}
@endsection 

@section('desc') 
    {{ $page->meta_description }}
@endsection 

@section('content')

<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background: url(img/inner-page-banner.jpg);">
	<div class="container">
		<div class="pagination-area">
			<h2>Our MENU</h2>
			<ul>
				<li>
					<a href="{{ url('/') }}">Home -</a> /</li>
				<li>Menu</li>
			</ul>
		</div>
	</div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Food Menu 2 Area Start Here -->
<!--  <div class="food-menu2-area">
                <div class="container" id="inner-isotope">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="isotop-classes-tab myisotop"> 
                                <a href="#" data-filter="*" class="current">All</a>
                                <a href="#" data-filter=".lunch">Lunch</a>
                                <a href="#" data-filter=".dinner">Dinner</a>
                                <a href="#" data-filter=".dessert">Dessert</a>
                                <a href="#" data-filter=".drinks">Drinks</a>
                            </div>
                        </div>
                    </div>
                    <div class="row featuredContainer">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/adana.jpg" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price/=</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/one.png  " alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/two.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/three.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/four.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/five.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Discription</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/six.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price/=</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/seven.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/eight.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/nine.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/ten.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>28000/=</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/eleven.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Description/=</span>
                                    <h3><a href="#">Chicken</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/twelve.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/thirteen.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/fourteen.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/fifteen.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/sixteen.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/eight.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>28000/=</span>
                                    <h3><a href="#">Chicken</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/seventeen.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/eighteen.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/nineteen.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                       <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/twenty.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/twentyfive.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>28000/=</span>
                                    <h3><a href="#">Chicken</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/twentyone.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/twentytwo.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/twentythree.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/twentyfour.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>Price</span>
                                    <h3><a href="#">Description</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
                            <div class="food-menu2-box">
                                <div class="food-menu2-img-holder">
                                    <div class="food-menu2-more-holder">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="#"><img class="img-responsive" src="img/dish/foods/others/eight.png" alt="dish"></a>
                                </div>
                                 <div class="food-menu2-title-holder">
                                    <span>28000/=</span>
                                    <h3><a href="#">Chicken</a></h3>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>-->
<!-- Food Menu 2 Area End Here -->
<div class="tasty-menu-area" id="menu1">
	<div class="container" style="background-color:#422121;">

		<!-- start of row for images custom menu-->
		<h2 class="title">Tasty Menu Today</h2>
		<span class="subtitle">Chef Selection</span>
		<div class="row">
			<div class="col-md-6">

				<img src="img/menu/pics/menuone.jpg" alt="vitamin_menu">
			</div>

			<div class="col-md-6">

				<img src="img/menu/pics/menutwo.jpg" alt="vitamin_menu">
			</div>
			<h2 class="title">PLACE YOUR ORDER NOW</h2>
			<span class="subtitle">
				<a style="color:#ffffff;" href="#reserve">Click here now!!</a>
			</span>
		</div>

	</div>
</div>


@endsection