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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//insertBreakfast
Route::get('/break', 'BreakfastController@index');
Route::post('insertBreak', 'BreakfastController@store');

// insertlunch
Route::get('/lunch', 'LunchController@index');
Route::post('insertLunch', 'LunchController@store');

//insertdinner
Route::get('/dinner', 'DinnerController@index');
Route::post('insertDinner', 'DinnerController@store');

//calculator
Route::get('/cal', 'HomeController@cal');

//addMenu
Route::get('/add','PagesController@add');
//
use App\Models\chart;
Route::get('/chart', function () {
  $charts=chart::all();
    return   $charts;
});
