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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/chart', 'ChartController@chartPage');
Route::get('/map', 'LeafletController@mainMap');
Route::get('/dashboard/population', 'DashboardController@populationDashboard');

// Route::get('/map/swinburne', 'HeatmapController@heatmapMap');
// Route::get('/chart/security', 'ChartController@securityChartPage');
// Route::get('/chart/enrollment', 'ChartController@enrollmentChartPage');
// Route::get('/chart/clubRecruitment', 'ChartController@clubRecruitmentChartPage');

// Routes for login use only
Route::get('/editor', function () {
    return view('editor');
})->middleware('auth');;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');;

Route::get('/upload', function() {
	return view ('dbManager/Upload');
})->middleware('auth');;

// Routes for adding data into server
Route::post('Editor', 'EditorController@saveFile');
Route::post('UploadDB', 'FileUploadController@UploadtoServer');

// Routes for authentication
Auth::routes();
