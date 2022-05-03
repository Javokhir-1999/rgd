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
    return view('main');
});

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/mapdata', function () {
    return view('mapdata');
});

Route::post('/newOrder','MainController@order')->name("order-submit");



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('role:admin')->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name(
    	'homeAdmin'
	);
    Route::post('/bannerSubmit','App\Http\Controllers\Admin\HomeController@bannerSubmit')->name("banner-submit");
    Route::post('/mainSubmit','App\Http\Controllers\Admin\HomeController@mainSubmit')->name("main-submit");
    Route::post('/aboutSubmit','App\Http\Controllers\Admin\HomeController@aboutSubmit')->name("about-submit");

	Route::resource('posts', App\Http\Controllers\Admin\PostController::class);
	Route::resource('service', App\Http\Controllers\Admin\ServiceController::class);
	Route::resource('products', App\Http\Controllers\Admin\ProductController::class);
	Route::resource('media', App\Http\Controllers\Admin\MediaController::class);
	Route::resource('gallery', App\Http\Controllers\Admin\GalleryController::class);
	Route::resource('faq', App\Http\Controllers\Admin\FaqController::class);
	Route::resource('map', App\Http\Controllers\Admin\MapController::class);
});