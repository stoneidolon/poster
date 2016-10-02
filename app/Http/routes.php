<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Page\PageController@getIndex');
Route::get('about', 'Page\PageController@getAbout');
Route::get('contact', 'Page\PageController@getContact');

Route::resource('posts', 'Post\PostController');