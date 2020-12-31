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

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {return view('welcome');});

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('form-login');

Route::post('/login', 'Auth\LoginController@login')->name('login');



Route::get('/register', 'Auth\RegisterController@showRegisterForm')->name('form-register');

Route::post('/register', 'Auth\RegisterController@register')->name('register');



Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('users.home');


//list user 
Route::get('/users', 'UserController@index')->name('users.list');
//list post
Route::get('/posts', 'PostController@index')->name('posts.list');


//show form create user
Route::get('/users/create', 'UserController@create')->name('users.create');//->middleware('is.admin');dung middleware de ktra 
//show form create post
Route::get('/posts/create', 'PostController@create')->name('posts.create');



//store user
Route::post('/users', 'UserController@store')->name('users.store');
//store post
Route::post('/posts', 'PostController@store')->name('posts.store');



//Show edit form user
Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
//Show edit form post
Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');



//Delete user 
Route::Delete('/users/{id}', 'UserController@destroy')->name('users.destroy');



//update user
Route::put('/users/{id}', 'UserController@update')->name('users.update');
//update post
Route::put('/posts/{id}', 'PostController@update')->name('posts.update');



//Detail user
Route::get('/users/{id}', 'UserController@show')->name('users.show');
//Post_list
Route::get('/users/{id}/posts', 'UserController@post_list')->name('users.post_list');
