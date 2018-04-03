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

// Routes for public access of maps and charts
Route::get('/', 'LeafletController@mainMap');
Route::get('/map/swinburne', 'SecurityController@heatmapMap');
Route::get('/map', 'LeafletController@mainMap');

Route::get('/chart', 'ChartController@chartPage');
Route::get('/chart/security', 'ChartController@securityChartPage');
Route::get('/chart/enrollment', 'ChartController@enrollmentChartPage');
Route::get('/chart/clubRecruitment', 'ChartController@clubRecruitmentChartPage');

// Routes for Admin use only
Route::get('/editor', function () {
    return view('editor');
})->middleware('auth');;

Route::get('/upload', function() {
	return view ('dbManager/Upload');
})->middleware('auth');;

Route::post('UploadDB','FileUploadController@UploadtoServer');

// Routes for authentication
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
