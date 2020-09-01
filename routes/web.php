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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/','studentcontroller@index');
Route::get('/edit/{id}','studentcontroller@edit');
Route::get('/show/{id}','studentcontroller@show');
Route::get('/create','studentcontroller@create');
Route::post('/store','studentcontroller@store');
Route::post('/update/{id}','studentcontroller@update');

