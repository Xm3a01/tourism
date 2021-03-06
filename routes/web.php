<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('website.index');
// });

Auth::routes();

Route::group(['prefix' => '/dashboard' , 'middleware' => 'auth'] , function () {
    Route::get('/', 'Dashboard\IndexController@index')->name('dashboard');
    Route::get('profile', 'Dashboard\IndexController@index')->name('profile');
    Route::resource('companies', 'Dashboard\CompanyController');
    Route::resource('places', 'Dashboard\PlaceController');
    Route::resource('bookings', 'Dashboard\BookingController');
});

Route::get('/', 'Website\indexController@index')->name('home');
Route::get('/company', 'Website\indexController@companies')->name('company');
Route::get('/place', 'Website\indexController@places')->name('place');
Route::resource('booking', 'Website\BookingController');
