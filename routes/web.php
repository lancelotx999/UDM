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

//loads the child 1st
Route::get('/', function () {
    return view('child');
});

// Route::get('/chart', function () {
//     return view('chart');
// });

Route::get('/chart', 'ChartController@chartPage');
Route::get('/map', 'SecurityController@securityMap');

// Routes for uploading database data
Route::get('Upload', function()
{
	return view ('Upload');
});
Route::post()

