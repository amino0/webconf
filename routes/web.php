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
Route::get('/cree', function () {
    return view('cree');
});

Route::get('/rejoindre', function () {
    return view('rejoindre');
});
Route::post('/go','homecontroller@go');
Route::post('/envoyer','homecontroller@envoyer');
