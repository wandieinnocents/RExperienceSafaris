<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

/* Frontend Routes */
Route::get('/', 'PageController@welcome');
Route::get('tours/{category}', 'TourCategoryController@show');
Route::get('tours/{category}/{article}', 'TourController@show');
Route::get('/transport/{transport}','TransportController@show');
Route::get('/accomodation/{accomodation}','AccomodationController@show');
Route::get('/search','SearchController@show');

/* Backend Routes */
Route::resource('contacts', 'ContactController',['only' => 'store']);
Route::resource('bookings', 'BookingController',['only' => 'store']);

// --------------------
// Backpack\Demo routes
// --------------------
Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace'  => 'Admin',
], function () {
    // CRUD resources and other admin routes
    CRUD::resource('newsletter', 'NewsletterCrudController');
    CRUD::resource('contact', 'ContactCrudController');
    CRUD::resource('rate', 'RateCrudController');
    CRUD::resource('transport', 'TransportCrudController');
    CRUD::resource('accomodation', 'AccomodationCrudController');
    CRUD::resource('book', 'BookCrudController');
});

//pesapal routes
Route::group(['prefix' => '/webhooks'], function () {
    //PESAPAL
    Route::get('donepayment', ['as' => 'paymentsuccess', 'uses'=>'PaymentsController@paymentsuccess']);
    Route::get('paymentconfirmation', 'PaymentsController@paymentconfirmation');
});

Route::get('pay', 'PaymentsController@payment')->name('pay')->middleware('auth');



Route::get('events', ['uses' => '\SeanDowney\BackpackEventsCrud\app\Http\Controllers\EventController@index']);
Route::get('events/{event}/{subs?}', ['as' => 'view-event', 'uses' => '\SeanDowney\BackpackEventsCrud\app\Http\Controllers\EventController@view'])
    ->where(['event' => '^((?!admin).)*$', 'subs' => '.*']);

/** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file  **/
Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);
