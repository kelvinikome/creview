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

Auth::routes();

/**
 * Feed
 */
Route::get('/', 'HomeController@index');

/**
 * Entity (Page/User)
 */
Route::resource('/pages', 'PageController');
Route::get('/{id}', 'EntityController@getById');

/**
 * Search
 */
Route::get('/search/{term}', 'SearchController@show');

/**
 * Page Posts
 */
Route::resource('/{pageId}/post', 'PagePostController');

/**
 * Posts
 */
Route::post('/posts', 'PostController@store');

Route::delete('/posts/{post}', 'PostController@destroy');

/**
 * Follows
 */
Route::post('/follows/{user}', 'FollowController@follow');

Route::delete('/follows/{user}', 'FollowController@unfollow');

Route::get('/{user}/followers', 'FollowController@followers');

Route::get('/{user}/followees', 'FollowController@followees');

/**
 * Likes
 */
Route::get('/posts/{post}/like', 'LikeController@likePost');

/**
 * Tags
 */
Route::get('/tags/{tag}', 'TagController@show');

/**
 * Messages
 */
Route::get('/inbox', 'MessageController@inbox');

Route::get('/outbox', 'MessageController@outbox');

Route::post('/messages', 'MessageController@store');

/**
 * Profile
 */
Route::get('/{user}', 'ProfileController@show');

Route::post('/profile', 'ProfileController@updateAvatar');

