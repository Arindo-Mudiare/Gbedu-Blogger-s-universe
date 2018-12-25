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
     // Delete Post route
     Route::get('/post/delete/{id}', [
        'uses' => 'PostsController@destroy',
        'as' => 'post.delete'
    ]);
    // Show all Posts
    Route::get('/posts', [
        'uses' => 'PostsController@index',
        'as' => 'posts'
    ]);
    // Edit Post
      Route::get('/post/edit/{id}', [
        'uses' => 'PostsController@edit',
        'as' => 'post.edit'
    ]);
    // Update Post route
    Route::post('/post/update/{id}', [
        'uses' => 'PostsController@update',
        'as' => 'post.update'
    ]);

    // TRASHED POSTS
     // Trashed posts route
    Route::get('/posts/trashed', [
        'uses' => 'PostsController@trashed',
        'as' => 'posts.trashed'
    ]);
    // permanent delete trashed posts route
       Route::get('/posts/kill/{id}', [
        'uses' => 'PostsController@kill',
        'as' => 'posts.kill'
    ]);
    // restore trashed posts route
    Route::get('/posts/restore/{id}', [
        'uses' => 'PostsController@restore',
        'as' => 'posts.restore'
    ]);

    // CATEGORIES ROUTES
      // Create New Category route
    Route::get('/category/create', [
        'uses' => 'CategoriesController@create',
        'as' => 'category.create'
    ]);
          // Show all categories
    Route::get('/categories', [
        'uses' => 'CategoriesController@index',
        'as' => 'categories'
    ]);
     // Store Category route
     Route::post('/category/store', [
        'uses' => 'CategoriesController@store',
        'as' => 'category.store'
    ]);
    // Edit Category
    Route::get('/category/edit/{id}', [
        'uses' => 'CategoriesController@edit',
        'as' => 'category.edit'
    ]);
     // Delete Category
     Route::get('/category/delete/{id}', [
        'uses' => 'CategoriesController@destroy',
        'as' => 'category.delete'
    ]);
    // Update Category route
    Route::post('/category/update/{id}', [
        'uses' => 'CategoriesController@update',
        'as' => 'category.update'
    ]);

    // TAGS ROUTES
    Route::get('/tags', [
        'uses' => 'TagsController@index',
        'as' => 'tags'
    ]);
     // Create New Tag route
     Route::get('/tag/create', [
        'uses' => 'TagsController@create',
        'as' => 'tag.create'
    ]);
     // Store Tag route
     Route::post('/tag/store', [
        'uses' => 'TagsController@store',
        'as' => 'tag.store'
    ]);
    // Edit Tag
    Route::get('/tag/edit/{id}', [
        'uses' => 'TagsController@edit',
        'as' => 'tag.edit'
    ]);
     // Delete Tag
     Route::get('/tag/delete/{id}', [
        'uses' => 'TagsController@destroy',
        'as' => 'tag.delete'
    ]);
    // Update Tag route
    Route::post('/tag/update/{id}', [
        'uses' => 'TagsController@update',
        'as' => 'tag.update'
    ]);
});
