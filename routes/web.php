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
Route::get('/breakTB', 'BreakfastController@show');

// insertlunch
Route::get('/lunch', 'LunchController@index');
Route::post('insertLunch', 'LunchController@store');
Route::get('/lunchTB', 'LunchController@show');

//insertdinner
Route::get('/dinner', 'DinnerController@index');
Route::post('insertDinner', 'DinnerController@store');
Route::get('/dinnerTB', 'DinnerController@show');

//calculator
Route::get('/cal', 'HomeController@cal');

//addMenu
Route::get('/add','PagesController@add');

//FoodCalculate
Route::get('/food', 'HomeController@foodcal');

//addfood
Route::get('/addfood', 'AdminController@index');

//showChart
Route::get('/chart', 'ChartController@show');
Route::get('surveys/chart', 'DBController@projectChartData');

//contact
Route::get('/contact', 'ContactController@index');
Route::post('insertContact', 'ContactController@store');
Route::get('/ContactTB', 'ContactController@show');


Route::get('/highchart', 'HomeController@highchart');
// use App\Models\chart;
// Route::get('/chart', function () {
//   $charts=chart::all();
//     return   $charts;
// });
