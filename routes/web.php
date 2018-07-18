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
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// page
Route::get('/{page}', 'PageController@show');
Route::get('/{pageId}/about', 'PageController@showAbout');

// showcase
Route::get('/{pageId}/showcase', 'ShowcaseController@show');

// post
Route::get('/{pageId}/post', 'PostController@index');
Route::get('/{pageId}/post/{postId}', 'PostController@show');

Route::resource('/page', 'PageController');
Route::resource('/page/{page}/service', 'ServiceController');
Route::resource('/page/{page}/product', 'ProductController');

;