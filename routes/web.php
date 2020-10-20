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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


Route::get('restaurant', 'RestaurantController@create')->name('restaurant');
Route::post('restaurant', 'RestaurantController@store')->name('restaurant.store');

Route::name('corona_form.')->prefix('form')->group(function () {
    Route::get('{key}', 'GuestController@view_form')->name('view');
    Route::post('submit', 'GuestController@fill')->name('submit');
});

Route::get('downlaod', 'HomeController@download')->name('download.xlsx');

Route::name('pdf.')->prefix('pdf')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', 'PDFController@view_pdf')->name('view');
    Route::get('download', 'PDFController@download_pdf')->name('download');
});

Route::get('myapp', function () {
    return view('myapp');
});

Route::view('/{path?}', 'myapp');
