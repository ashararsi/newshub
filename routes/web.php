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

Route::get('/', 'MainController@index')->name('index');
Route::get('/post', 'MainController@post')->name('post');
Route::get('/contact', 'MainController@contact')->name('contact');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/corona', 'MainController@corona')->name('corona');




Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');



