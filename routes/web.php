<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/blogs', 'BlogController@index');
Route::get('/blogs/create', 'BlogController@create');
Route::post('/blogs/store', 'BlogController@store');
Route::post('/blogs/category', 'BlogController@filter');
Route::get('/blogs/{id}', 'BlogController@show');

Route::get('/user/getalluserblogs/{id}', 'UserController@getAllUserBlogs');

Route::post('/comment/add', 'CommentController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
