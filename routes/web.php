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
})->name('welcome');

Auth::routes(['verify' => true]);

Route::get('home', 'HomeController@index')->name('home')->middleware(['auth','verified']);
Route::get('how_it_works', 'HomeController@how_it_works')->name('how_it_works')->middleware(['auth','verified']);


Route::get('restaurant', 'RestaurantController@create')->name('restaurant');
Route::post('restaurant', 'RestaurantController@store')->name('restaurant.store');
Route::get('download', 'HomeController@download')->name('download.xlsx');


Route::name('corona_form.')->prefix('form')->group(function () {
    Route::get('{key}', 'GuestController@view_form')->name('view');
    Route::post('submit', 'GuestController@fill')->name('submit');
});

Route::name('pdf.')->prefix('pdf')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', 'PDFController@view_pdf')->name('view');
//    Route::get('download', 'PDFController@download_pdf')->name('download');
    Route::get('download', 'PDFController@view_pdf')->name('download');
});

Route::name('edit.')->prefix('edit')->middleware(['auth', 'verified'])->group(function () {
    Route::get('restaurant', 'RestaurantController@edit')->name('restaurant');
    Route::post('restaurant', 'RestaurantController@update')->name('restaurant.update');
    Route::get('login', 'HomeController@edit_login_view')->name('login');
    Route::post('login', 'HomeController@edit_login')->name('login');
});

Route::get('evaluate','GuestController@evaluate')->name('evaluate');
Route::get('contact','GuestController@contact')->name('contact');


