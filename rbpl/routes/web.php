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

Route::get('/signup','LoginController@signup');
Route::post('/signup','LoginController@store');

Route::get('/signin', 'LoginController@signin')->middleware('guest');
Route::post('/signin', 'LoginController@authenticate');
Route::post('/logout', 'LoginController@logout');

Route::get('/landing', 'LandingController@index');
