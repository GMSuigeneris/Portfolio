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
    return view('landing');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/author', function () {
    return view('pages.author');
});

Route::get('/developer', function () {
    return view('pages.developer');
});


Route::get('/edit/{val}','UsersController@alpha')->name('edit');
Route::post('/repliable','RepliesController@reply');
Route::post('/commentable','CommentsController@comment');
Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('home');
Route::resource('/posts','PostsController');
Route::resource('/users','UserController');
Route::resource('/comments','CommentsController');
Route::resource('/replies','RepliesController');
