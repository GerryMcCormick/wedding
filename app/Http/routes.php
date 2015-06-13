<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Category;
use App\Guest;
use App\Utility;

//Route::get('/', 'WelcomeController@index');

//  guests
Route::get('all-guests',            'PagesController@allGuests');
Route::get('guests-going',          'PagesController@guestsGoing');
Route::get('guests-maybe-going',    'PagesController@guestsMaybeGoing');
Route::get('guests-not-going',      'PagesController@guestsNotGoing');

//single guest page
Route::bind('guest_id', function($id) {
    $guest = Guest::find($id);
    return $guest;
});
Route::get('guest/{guest_id}',              'PagesController@showGuest');

//email list of all guests to user
Route::get('email-all-guests-list',         'PagesController@emailAllGuestsList');


// services

Route::bind('service_id', function($id){
    $service = Utility::find($id);
    return $service;
});
Route::get('services',              'UtilitiesController@index');

// single service page
Route::get('service/{service_id}',    'UtilitiesController@show');




// Admin

// set up link for dashboard
Route::get('admin', 'HomeController@index');

// Categories
Route::bind('category_id', function($category_id) {
		$category = Category::find($category_id);
		return $category;
	});
Route::get('admin/categories',                             'Admin\AdminCategoryController@index');
Route::get('admin/category/add',                           'Admin\AdminCategoryController@create');
Route::post('admin/category/store',                        'Admin\AdminCategoryController@store');
Route::get('admin/category/{category_id}',                 'Admin\AdminCategoryController@show');
Route::get('admin/category/{category_id}/edit',            'Admin\AdminCategoryController@edit');
Route::patch('admin/category/update/{category_id}',        'Admin\AdminCategoryController@update');


// Guests
Route::bind('guest_id', function($guest_id) {
    $guest = Guest::find($guest_id);
    return $guest;
});
Route::get('admin/guests',                         'Admin\AdminGuestController@index');
Route::get('admin/guest/add',                      'Admin\AdminGuestController@create');
Route::post('admin/guest/store',                   'Admin\AdminGuestController@store');
Route::get('admin/guest/{guest_id}',               'Admin\AdminGuestController@show');
Route::get('admin/guest/{guest_id}/edit',          'Admin\AdminGuestController@edit');
Route::patch('admin/guest/update/{guest_id}',      'Admin\AdminGuestController@update');

// Services
Route::bind('service_id', function($service_id) {
    $service = Utility::find($service_id);
    return $service;
});
Route::get('admin/services',                           'Admin\AdminUtilityController@index');
Route::get('admin/service/add',                        'Admin\AdminUtilityController@create');
Route::post('admin/service/store',                     'Admin\AdminUtilityController@store');
Route::get('admin/service/{service_id}',               'Admin\AdminUtilityController@show');
Route::get('admin/service/{service_id}/edit',          'Admin\AdminUtilityController@edit');
Route::patch('admin/service/update/{service_id}',      'Admin\AdminUtilityController@update');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
