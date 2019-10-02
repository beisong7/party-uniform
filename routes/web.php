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



//Auth::routes();

//TODO AUTHENTICATION PAGES
Route::get('/cms-admin', 'FrontDeskController@adminLogin')->name('admin.login');
Route::post('/cms-admin/logout', 'FrontDeskController@logout')->name('logout');
Route::post('/cms-admin/password-request', 'FrontDeskController@logout')->name('password.request');

Route::post('/cms-admin/signin', 'AuthController@signin')->name('signin');
Route::get('/cms-admin/signout', 'AuthController@signout')->name('app.logout');



//todo ADMIN ROUTE
Route::group(['prefix' => 'cms-admin', 'middleware'=> 'admin'], function(){
    Route::get('/dashboard', 'FrontDeskController@dashboard')->name('admin.dashboard');
    Route::resource('user', 'UserController');
    Route::resource('slide', 'SlideController');
    Route::resource('service', 'ServiceController');
    Route::resource('image', 'ImageController');
    Route::get('about', 'DetailController@about')->name('about.data');
    Route::post('about', 'DetailController@aboutSave')->name('about.save');
    Route::get('loadimagegallery', 'ImageController@loadimagegallery')->name('loadimagegallery');
    Route::get('from_gallery/images/fetch_more/{from}', 'ImageController@moreFromGallery');

});


//TODO VISITORS ROUTE
Route::group(['middleware'=> 'visitor'], function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/contactUs', 'HomeController@contact')->name('contactUs');
    Route::get('/services', 'HomeController@service')->name('services');
    Route::get('/faq', 'HomeController@faq')->name('faq');
});
