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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'PageController@home')->name('home');
//for create category
// Route::get('/', 'PageController@index')->name('index');
Route::get('/create', 'PageController@create')->name('create');
Route::post('/store', 'PageController@store')->name('store');
// Route::get('/edit', 'PageController@edit')->name('edit');
Route::get('/edit/{id}', 'PageController@edit')->name('edit');
Route::post('/update/{id}', 'PageController@update')->name('update');
Route::delete('/delete/{id}', 'PageController@destroy')->name('destroy');


