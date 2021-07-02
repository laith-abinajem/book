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

Route::get('/login', function () {
    return view('login');
});


//Route::resource('login','ProjectController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function(){

    return view('welcome');
});
Route::get('','StudViewController@index');
Route::get('posts/{id}',['as'=>'posts.post','uses'=>'StudViewController@getPosts'])->middleware('auth');

Route::get('/show', 'StudViewController@show');
Route::get('/a', 'StudViewController@a');
Route::get('/s', 'StudViewController@s');
Route::get('/g', 'StudViewController@g');


Route::get('/cart', 'CartController@cart')->name('cart.index')->middleware('auth');
Route::post('/add', 'CartController@add')->name('cart.store');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');

Route::get('/create', 'StudViewController@create');
Route::post('/store', 'StudViewController@store')->name('store');