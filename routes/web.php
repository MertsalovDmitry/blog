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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/post', 'BlogController@post')->name('single-post');
Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/contact', 'ContactController@index')->name('contact');