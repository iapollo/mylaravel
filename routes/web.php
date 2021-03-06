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

// Route::get('about', function () {
// 	$users = ['andy', 'low'];
//     return view('pages.about',compact('users'));
// });

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('test', 'PagesController@test');
Route::get('posts','PostsController@index');
Route::get('posts/{post}','PostsController@show');

