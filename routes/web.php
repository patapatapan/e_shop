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

Route::namespace ('App\Http\Controllers')->group(function () {
    Route::get('index', 'SiteController@index');
    Route::get('shop', 'SiteController@shop');
    Route::get('contact', 'SiteController@contact');
    Route::get('details', 'SiteController@details');
    Route::get('about', 'SiteController@about');
    Route::get('blog', 'SiteController@blog');
    Route::get('blog1', 'SiteController@blog_details');

});