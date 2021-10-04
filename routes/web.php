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


Route::get('/affiliates', function () {
    return view('affiliates');
});

Route::get('/services', function () {
    return view('services');
});



Route::get('/teams', function () {
    return view('team');
});


Route::get('/teams', function () {
    return view('team');
});