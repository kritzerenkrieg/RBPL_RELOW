<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

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

Route::get('/signin', 'LoginController@signin')->name('signin')->middleware('guest');
Route::post('/signin', 'LoginController@authenticate');
Route::post('/logout', 'LoginController@logout');

Route::get('/forgot-password', 'LoginController@forgotPassword')->name('password.request');
Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->name('password.email');


Route::get('/reset-password/{token}', 'LoginController@resetPassword' )->name('password.reset');
Route::post('/reset-password', 'LoginController@authenticatepw')->name('password.update');

Route::get('/dashboard', 'StockController@showStocks')->middleware('auth');
Route::get('/stock', 'StockController@grafik');

Route::get('/payment', 'PaymentController@Payment');
Route::get('/co', 'PaymentController@checkout');

Route::get('/landing', 'LandingController@landing')->middleware('auth');
Route::get('/index','IndexController@index');
Route::get('/pengaturan', 'pengaturanController@pengaturan')->name('user_settings');
Route::get('/edit', 'pengaturanController@edit');
Route::put('/edit/{id}', 'pengaturanController@update')->name('user_edit');
Route::get('/about', 'LandingController@about');
