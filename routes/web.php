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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/blog', 'BlogController@index')->name('blog');
// Route::get('/blog/post', 'BlogController@post')->name('single-post');
Route::get('/blog/{slug}', 'BlogController@post')->name('single-post');
Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');


Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/shop/cart', 'ShopController@cart')->name('shop-cart');
Route::get('/shop/checkout', 'ShopController@checkout')->name('shop-checkout');
Route::get('/shop/details', 'ShopController@details')->name('shop-details');

Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/portfolio/details', 'PortfolioController@details')->name('portfolio-details');

Route::get('/contact', 'ContactController@index')->name('contact');

// Route::get('/home', 'HomeController@index')->name('home');
