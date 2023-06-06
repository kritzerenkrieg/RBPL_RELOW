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

Route::get('/signup','LoginController@signup')->middleware('guest');
Route::post('/signup','LoginController@store');

Route::get('/signin', 'LoginController@signin')->middleware('guest');
Route::post('/signin', 'LoginController@authenticate');
Route::post('/logout', 'LoginController@logout');

<<<<<<< HEAD
Route::get('/landing', 'LandingController@landing');
=======
Route::get('/dashboard', 'StockController@showStocks')->middleware('auth');

Route::get('/payment', 'PaymentController@Payment');
>>>>>>> 17044ed4d01ab499612273b0f59deaeca5addb9e
