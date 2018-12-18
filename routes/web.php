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


Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {
    
    // Home Route 
    Route::get('/home', [
        'uses' => 'HomeController@index',
        'as' => 'home'
     ]);

    // Create Post route
Route::get('/post/create', [
    'uses' => 'PostsController@create',
    'as' => 'post.create'
 ]);
 // Store Post route
 Route::post('/post/store', [
     'uses' => 'PostsController@store',
     'as' => 'post.store'
  ]);
});
