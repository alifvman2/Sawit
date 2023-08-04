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
    return redirect()->route('home.index');
});

Route::get('login', 'Auth\CustomAuthController@index')->name('login');
Route::post('custom-login', 'Auth\CustomAuthController@customLogin')->name('login.custom'); 
Route::get('registration', 'Auth\CustomAuthController@registration')->name('register-user');
Route::post('custom-registration', 'Auth\CustomAuthController@customRegistration')->name('register.custom'); 
Route::get('logout', 'Auth\CustomAuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
	Route::resources([
	    'home' => HomeController::class,
	    // 'posts' => PostController::class,
	]);
});
