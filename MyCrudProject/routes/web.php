<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/studentdata', 'App\Http\Controllers\StudentController@index');
Route::get('/studentdata', 'App\Http\Controllers\StudentController@index');
Route::post('/studentdata/create', 'App\Http\Controllers\StudentController@create');
Route::get('/studentdata/{id}/update', 'App\Http\Controllers\StudentController@update');
Route::post('/studentdata/{id}/delete', 'App\Http\Controllers\StudentController@delete');
