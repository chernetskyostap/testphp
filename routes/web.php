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
//Route::resource('/profile', 'PostController');
Route::group(['prefix' => 'profile', 'namespace' => 'Profile', 'middleware' => ['auth']], function() {
    Route::get('/', 'ProfileController@index')->name('profile.index');
    Route::resource('/post', 'PostController', ['as' => 'profile']);
});


Route::get('/', 'BlogController@index')->name('blog.index');
Route::get('/post/{slug}', 'BlogController@post')->name('blog.post');
Route::post('/post', 'BlogController@addComment')->middleware('auth')->name('blog.post.add_comment');
Route::post('/postajax','BlogController@postAjax');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
