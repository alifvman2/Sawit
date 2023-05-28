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

Route::get('login', 'Auth\CustomAuthController@index')->name('login');
Route::post('custom-login', 'Auth\CustomAuthController@customLogin')->name('login.custom'); 
Route::get('registration', 'Auth\CustomAuthController@registration')->name('register-user');
Route::post('custom-registration', 'Auth\CustomAuthController@customRegistration')->name('register.custom'); 
Route::get('signout', 'Auth\CustomAuthController@signOut')->name('signout');

Route::group(['middleware' => 'auth.api'], function () {
	Route::get('dashboard', 'Auth\CustomAuthController@dashboard'); 
});
