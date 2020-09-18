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

Route::get('dashboard' ,'App\Http\Controllers\DashboardController@index');




Route::get('all-users','App\Http\Controllers\Web\UserContro@index');
Route::get('delete-user/{id}','App\Http\Controllers\Web\UserContro@destroy');


Route::get('all-trackinfos','App\Http\Controllers\Web\TrackContro@index');
// Route::get('edit-requestbook/{id}','Web\RequestBookContro@edit');
// Route::post('update-requestbook/{id}','Web\RequestBookContro@update');
Route::get('delete-trackinfo/{id}','App\Http\Controllers\Web\TrackContro@destroy');