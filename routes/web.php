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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/home/page/create', 'PageController');
Route::resource('/home/page', 'PageController');

// page
Route::get('/{page}', 'PageController@show');
Route::get('/{pageId}/about', 'PageController@showAbout');

// showcase
Route::resource('/{pageId}/showcase', 'ShowcaseController');

Route::resource('/{pageId}/post', 'PostController');
Route::resource('/{pageId}/post/{postId}/comment', 'CommentController');

// messages
Route::resource('/home/messages', 'MessageController');

// search
Route::resource('/search', 'SearchController');
